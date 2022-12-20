<h1>Update Project</h1>
<form action ="updateProj/" method="POST">
@csrf

<input type=hidden name="id" value="{{$proj->id}}"><br>
<input type='text' name="name" value="{{$proj->name}}" required><br>
Student: <select class="form-control" name="student_id">
    <option value="" selected disabled>Assign Student</option>
    @foreach ($students as $student => $value)
    <?php if(!empty($proj->student_id)){ ?>
    <option value="{{$value->id}}" selected>{{$value->name}}</option>
    <?php } else { ?>
        <option value="{{$value->id}}">{{$value->name}}</option>
        <?php
        }
        ?>
    @endforeach    
</select><br>
Supervisor: <select class="form-control" name="supervisor_id">
    <option value="" selected disabled>Assign Supervisor</option>
    @foreach ($users as $user => $value)
            <?php if($value->usertype == 0){
    //selected option
    if(!empty($proj->supervisor_id)){
    // selected option
    ?>
    <option value="{{$value->id}}" selected>{{$value->name}}</option>
    <?php    
    } else {
        ?>
        <option value="{{$value->id}}">{{$value->name}}</option>
        <?php
        }}
        ?>
    @endforeach    
</select><br>
Examiner 1: <select class="form-control" name="examiner1_id">
    <option  value="" selected disabled>Assign Examiner</option>
    @foreach ($users as $user => $value)
    <?php  if($value->usertype == 0){
    //selected option
    if(!empty($proj->examiner1_id)){
    // selected option
    ?>
    <option value="{{$value->id}}" selected>{{$value->name}}</option>
    <?php    
    } else {
    ?>
    <option value="{{$value->id}}">{{$value->name}}</option>
    <?php
    }}
    ?>
    @endforeach    
</select><br>
Examiner 2:<select class="form-control" name="examiner2_id">
    <option value="" selected disabled>Assign Examiner</option>
    @foreach ($users as $user => $value)
    <?php  if($value->usertype == 0){
    //selected option
    if(!empty($proj->examiner2_id)){
    // selected option
    ?>
    <option value="{{$value->id}}" selected>{{$value->name}}</option>
    <?php    
    } else {
        ?>
        <option value="{{$value->id}}">{{$value->name}}</option>
        <?php
        } }
        ?>
    @endforeach    
</select><br>
Start Date <input type="date" id="start_date" name="start_date" value="{{$proj->start_date}}"><br>
End Date <input type="date" id="end_date" name="end_date" value="{{$proj->end_date}}"><br>
<input type="number" name="duration" placeholder="Insert Duration (months)" value="{{$proj->duration}}"><br>
<input type="text" name="progress" placeholder="Insert Project Progress" value="{{$proj->progress}}"><br>
<input type="text" name="status" placeholder="Insert Project Status" value="{{$proj->status}}"><br>
<button type="submit">Update</button>
<button type="reset">Reset</button>

</form>