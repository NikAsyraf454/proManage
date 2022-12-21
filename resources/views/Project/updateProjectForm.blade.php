@php $i = 0 @endphp
@foreach($projects as $proj)
<!-- Add Student Modal -->
<div class="modal fade" id="updateProjectModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form action="updateProj/" class="templatemo-login-form">
                        <!-- @csrf -->
                        <input type=hidden name="id" value="{{$proj->id}}"><br>
                        <table>
                            <tr>
                                <td><label for="inputEmail">Project Name</label></td>
                                <td><input type="text" name="name" placeholder="Insert Project Name" value="{{$proj->name}}" required><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Project Type</label></td>
                                <td><select name="project_type">
                                    @php if(empty($proj->project_type)) { @endphp
                                        <option value="" selected disabled>Project Type</option>
                                        @php } @endphp
                                        
                                        <!-- <option value="{{$proj->project_type}}" selected>{{$proj->project_type}}</option>     -->
                                        <option value="Development" @php if($proj->project_type == "Development") { echo "selected";} @endphp >Development</option>
                                        <option value="Research" @php if($proj->project_type == "Research") { echo "selected";} @endphp>Research</option>
                                    </select></td>
                            </tr>
                            <tr>
                            <tr>
                                <td><label for="inputEmail">Assign Student</label></td>
                                <td><select class="form-control" name="student_id">
                                        <option value="" selected disabled>Assign Student</option>
                                        @foreach ($students as $student => $value)
                                        <?php if (!empty($proj->Student->project_id) && ($value->project_id == $proj->id)) { ?>
                                            <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                        <?php } else { ?>
                                            <option value="{{$value->id}}">{{$value->name}}</option>
                                        <?php } ?>
                                        @endforeach
                                    </select><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Supervisor</label></td>
                                <td><select class="form-control" id="supervisor_id{{$i}}" name="supervisor_id">
                                        <option value="" selected disabled>Assign Supervisor</option>
                                        @foreach ($users as $user => $value)
                                        <?php if ($value->usertype == 0) {
                                            //selected option
                                            if (!empty($proj->supervisor_id) && ($value->id == $proj->supervisor_id)) {
                                                // selected option
                                        ?>
                                                <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                        <?php
                                            }
                                        }
                                        ?>
                                        @endforeach
                                    </select><br></td>
                            </tr>

                            <tr>
                                <td><label for="inputEmail">Examiner 1: </label></td>
                                <td><select class="form-control" id="examiner1_id{{$i}}" name="examiner1_id">
                                        <option value="" selected disabled>Assign Examiner</option>
                                        @foreach ($users as $user => $value)
                                        <?php if ($value->usertype == 0) {
                                            //selected option
                                            if (!empty($proj->examiner1_id) && ($value->id == $proj->examiner1_id)) {
                                                // selected option
                                        ?>
                                                <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                        <?php
                                            }
                                        }
                                        ?>
                                        @endforeach
                                    </select><br></td>
                            </tr>

                            <tr>
                                <td><label for="inputEmail">Examiner 2:</label></td>
                                <td><select class="form-control" id="examiner2_id{{$i}}" name="examiner2_id">
                                        <option value="" selected disabled>Assign Examiner</option>
                                        @foreach ($users as $user => $value)
                                        <?php if ($value->usertype == 0) {
                                            //selected option
                                            if (!empty($proj->examiner2_id) && ($value->id == $proj->examiner2_id)) {
                                                // selected option
                                        ?>
                                                <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                        <?php
                                            }
                                        }
                                        ?>
                                        @endforeach
                                    </select><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Start Date</label></td>
                                <td><input type="date" id="start_date{{$i}}" name="start_date" value="{{$proj->start_date}}"><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">End Date</label></td>
                                <td><input type="date" name="end_date" id="end_date{{$i}}" placeholder="Date:" value="{{$proj->end_date}}"><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Duration (months)</label></td>
                                <td><input type="text" id="duration{{$i}}" name="duration" placeholder="Insert Duration (months)" value="{{$proj->duration}}" readonly><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Project Progress</label></td>
                                <td><select name="progress">
                                    @php if(empty($proj->progress)) { @endphp
                                        <option value"" selected disabled>Project Progress</option>
                                        @php } @endphp
                                        
                                        <option value="Milestone 1" @php if($proj->progress == "Milestone 1") { echo "selected";} @endphp>Milestone 1</option>
                                        <option value="Milestone 2" @php if($proj->progress == "Milestone 2") { echo "selected";} @endphp>Milestone 2</option>
                                        <option value="Final Report" @php if($proj->progress == "Final Report") { echo "selected";} @endphp>Final Report</option>
                                    </select></td>
                                
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Project Status</label></td>
                                <td>
                                <select name="status">
                                    @php if(empty($proj->status)) { @endphp
                                        <option value"" selected disabled>Project Status</option>
                                        @php } @endphp
                                            
                                        <option value="On track" @php if($proj->status == "On track") { echo "selected";} @endphp>On track</option>
                                        <option value="Delayed" @php if($proj->status == "Delayed") { echo "selected";} @endphp>Delayed</option>
                                        <option value="Extended" @php if($proj->status == "Extended") { echo "selected";} @endphp>Extended</option>
                                        <option value="Completed" @php if($proj->status == "Completed") { echo "selected";} @endphp>Completed</option>
                                    </select></td>
                            </tr>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@php $i = $i +1 @endphp
@endforeach

<script>
    $('.date-picker').datepicker({
        format: 'yy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
</script>