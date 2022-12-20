<form action="/addProj" method="POST">
    @csrf
<input type="text" name="name" placeholder="Insert Project Name" required><br>
Student: <select class="form-control" name="student_id">
    <option value="" selected disabled>Assign Student</option>
    @foreach ($students as $student => $value)
        <option value="{{ $value->id }}"> 
            {{ $value->name }} 
        </option>
    @endforeach    
</select><br>
Supervisor: <select class="form-control" name="supervisor_id">
    <option value="" selected disabled>Assign Supervisor</option>
    @foreach ($users as $user => $value)
    <?php  if($value->usertype == 0){ ?>
        <option value="{{ $value->id }}"> 
            {{ $value->name }} 
        </option>
    <?php } ?>
    @endforeach    
</select><br>
Examiner 1: <select class="form-control" name="examiner1_id">
    <option value="" selected disabled>Assign Examiner</option>
    @foreach ($users as $user => $value)
    <?php  if($value->usertype == 0){ ?>
        <option value="{{ $value->id }}"> 
            {{ $value->name }} 
        </option>
    <?php } ?>
    @endforeach    
</select><br>
Examiner 2:<select class="form-control" name="examiner2_id">
    <option value="" selected disabled>Assign Examiner</option>
    @foreach ($users as $user => $value)
    <?php  if($value->usertype == 0){ ?>
        <option value="{{ $value->id }}"> 
            {{ $value->name }} 
        </option>
    <?php } ?>
    @endforeach    
</select><br>
Start Date <input type="date" id="start_date" name="start_date" value="null"><br>
End Date <input type="date" id="end_date" class="datepicker" name="end_date" value="null"><br>
<input type="number" name="duration" placeholder="Insert Duration (months)"><br>
<input type="text" name="progress" placeholder="Insert Project Progress"><br>
<input type="text" name="status" placeholder="Insert Project Status"><br>


<button type="submit">Submit</buttom>
<button type="cancel">Cancel</button>
</form>

<script>
$('.date-picker').datepicker({
                format: 'yy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });

</script>