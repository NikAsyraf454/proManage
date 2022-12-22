<!-- Add Student Modal -->
<div class="modal fade" id="AddProjectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form action="/addProj" class="templatemo-login-form" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td><label for="inputEmail">Project Name</label></td>
                                <td><input class="form-control" type="text" name="name" placeholder="Insert Project Name" required><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Project Type</label></td>
                                <td><select class="form-control" name="project_type">
                                        <option value"" selected disabled>Project Type</option>
                                        <option value="Development">Development</option>
                                        <option value="Research">Research</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Assign Student</label></td>
                                <td><select class="form-control" name="student_id">
                                        <option value="" selected disabled>Assign Student</option>
                                        @foreach ($students as $student => $value)
                                        <option value="{{ $value->id }}">
                                            {{ $value->name }}
                                        </option>
                                        @endforeach
                                    </select><br>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Supervisor</label></td>
                                <td><select class="form-control" id="supervisor_id{{$i}}" name="supervisor_id">
                                        <option value="" selected disabled>Assign Supervisor</option>
                                        @foreach ($users as $user => $value)
                                        <?php if ($value->usertype == 0) { ?>
                                            <option value="{{ $value->id }}">
                                                {{ $value->name }}
                                            </option>
                                        <?php } ?>
                                        @endforeach
                                    </select><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Examiner 1: </label></td>
                                <td><select class="form-control" id="examiner1_id{{$i}}" name="examiner1_id">
                                        <option value="" selected disabled>Assign Examiner</option>
                                        @foreach ($users as $user => $value)
                                        <?php if ($value->usertype == 0) { ?>
                                            <option value="{{ $value->id }}">
                                                {{ $value->name }}
                                            </option>
                                        <?php } ?>
                                        @endforeach
                                    </select><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Examiner 2:</label></td>
                                <td><select class="form-control" id="examiner2_id{{$i}}" name="examiner2_id">
                                        <option value="" selected disabled>Assign Examiner</option>
                                        @foreach ($users as $user => $value)
                                        <?php if ($value->usertype == 0) { ?>
                                            <option value="{{ $value->id }}">
                                                {{ $value->name }}
                                            </option>
                                        <?php } ?>
                                        @endforeach
                                    </select><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Start Date</label></td>
                                <td><input class="form-control" type="date" name="start_date" id="start_date" placeholder="Date:"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">End Date</label></td>
                                <td><input class="form-control" type="date" name="end_date" id="end_date" placeholder="Date:"><br><br></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Duration (months)</label></td>
                                <td><input class="form-control" type="text" name="duration" id="duration" placeholder="Duration:" readonly></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Project Progress</label></td>
                                <td><select class="form-control" name="progress">
                                        <option value"" selected disabled>Project Progress</option>
                                        <option value="Milestone 1">Milestone 1</option>
                                        <option value="Milestone 2">Milestone 2</option>
                                        <option value="Final Report">Final Report</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td><label for="inputEmail">Project Status</label></td>
                                <td><select class="form-control" name="status">
                                        <option value"" selected disabled>Project Status</option>
                                        <option value="On track">On track</option>
                                        <option value="Delayed">Delayed</option>
                                        <option value="Extended">Extended</option>
                                        <option value="Completed">Completed</option>
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

<!-- <script>
    $('.date-picker').datepicker({
        format: 'yy-mm-dd',
        autoclose: true,
        todayHighlight: true
    });
</script> -->