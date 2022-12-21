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

  <div class="col-13">
    <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
      <!-- <i class="fa fa-times"></i> -->
      <div class="panel-heading templatemo-position-relative">
        <h2 class="text-uppercase">User List</h2>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <!-- <td>No.</td> -->
              <!-- <td>ID</td> -->
              <td>Name</td>
              <td>Email</td>
              @php if(Auth::user()->usertype == 1) { @endphp
              <td>Operation</td>
              @php } @endphp
            </tr>
          </thead>

          <tbody>
            @php $i = 0 @endphp
            @foreach($users as $user)
            <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              @php if(Auth::user()->usertype == 1) { @endphp
                @php if($user->usertype == 0) { @endphp
              <td><a class="btn btn-primary" href={{"deleteUser/".$user['id']}}>Delete</a></td>
              @php } @endphp
              @php } @endphp
            </tr>
            @php $i = $i +1 @endphp
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <span>{{$users->links("pagination::bootstrap-5")}}</span>
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



  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="assets/js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
  <script src="assets/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
  <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
  

</body>

</html>