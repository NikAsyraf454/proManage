<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visual Admin Dashboard - Home</title>
  <meta name="description" content="">
  <meta name="author" content="templatemo">
  <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body>
  @include('User.header')

  <h2 class="templatemo-inline-block">Welcome, {{ Auth::user()->name }}</h2>
  <hr>

  <!-- Button trigger modal -->
  @php if(Auth::User()->usertype == 1) { @endphp
  <div class="col-12">
    <div style="position: relative; margin: 10px;" class=" no-padding">
      <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddStudentModal">
        Add Student
      </a>
    </div>
  </div>
  @php } @endphp

  <div class="col-12">
    <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
      <!-- <i class="fa fa-times"></i> -->
      <div class="panel-heading templatemo-position-relative">
        <h2 class="text-uppercase">Student List</h2>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <!-- <td>No.</td> -->
              <td>Name</td>
              <td>Student ID</td>
              <td>Project</td>
              @php if(Auth::user()->usertype == 1) { @endphp
              <td>Update</td>
              <td>Delete</td>
              @php } @endphp
            </tr>
          </thead>

          <tbody>
            @php $i = 0 @endphp
            @foreach($students as $stud)
            <tr>
              <!-- <td>{{$stud->id}}</td> -->
              <td>{{$stud->name ?? ""}}</td>
              <td>{{$stud->student_id ?? ""}}</td>
              <td>{{$stud->Project->name ?? ""}}</td>
              @php if(Auth::user()->usertype == 1) { @endphp
              <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentUpdateModal{{$i}}">
                  Edit
                </a></td>
              <td><a class="btn btn-primary" href={{"deleteStud/".$stud['id']}}>Delete</a></td>
              @php } @endphp
            </tr>
            @php $i = $i +1 @endphp
            @endforeach
          </tbody>
        </table>


      </div>
    </div>
  </div>


  
  <span>{{$students->links("pagination::bootstrap-5")}}</span>
<style>
.w-5
{
  display:none
}

.pagination {
  --bs-pagination-border-width: 0px;
}
</style>
<footer class="text-right">
    <p>Done By Nik Asyraf
      | SW01080787</p>
  </footer>
  </div>
  </div>
  </div>

  <!-- Add Project Modal -->
  <!-- @include('Project.addProjectForm'); -->

  <!-- Update Project Modal -->
  <!-- @include('Project.updateProjectForm'); -->

  <!-- Add Student Modal -->
  @include('Student.addStudentForm');

  <!-- Update student form, with loop -->
  @include('Student.updateStudentForm');



  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="assets/js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
  <script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
  <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
  <script>
    /* Google Chart 
      -------------------------------------------------------------------*/
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {
      'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
        ['Mushrooms', 3],
        ['Onions', 1],
        ['Olives', 1],
        ['Zucchini', 1],
        ['Pepperoni', 2]
      ]);

      // Set chart options
      var options = {
        'title': 'How Much Pizza I Ate Last Night'
      };

      // Instantiate and draw our chart, passing in some options.
      var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
      pieChart.draw(data, options);

      var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
      barChart.draw(data, options);
    }

    $(document).ready(function() {
      if ($.browser.mozilla) {
        //refresh page on browser resize
        // http://www.sitepoint.com/jquery-refresh-page-browser-resize/
        $(window).bind('resize', function(e) {
          if (window.RT) clearTimeout(window.RT);
          window.RT = setTimeout(function() {
            this.location.reload(false); /* false to get page from cache */
          }, 200);
        });
      } else {
        $(window).resize(function() {
          drawChart();
        });
      }
    });
  </script>
  <script type="text/javascript" src="assets/js/templatemo-script.js"></script> <!-- Templatemo Script -->




  <script>
    $(document).ready(function() {
      $("select").each(function(cSelect) {
        $(this).data('stored-value', $(this).val());
      });

      $("select").change(function() {
        var cSelected = $(this).val();
        var cPrevious = $(this).data('stored-value');
        $(this).data('stored-value', cSelected);

        var otherSelects = $("select").not(this);

        otherSelects.find('option[value=' + cPrevious + ']').removeAttr('disabled');
        otherSelects.find('option[value=' + cSelected + ']').attr('disabled', 'disabled');
      });
    });
  </script>

</body>

</html>