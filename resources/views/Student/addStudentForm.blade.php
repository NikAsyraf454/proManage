  <!-- Add Student Modal -->
  <div class="modal fade" id="AddStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <form action="/addStud" class="templatemo-login-form">
              <table>
                <tr>
                  <td><label for="inputEmail">Name</label></td>
                  <td><input type="text" name="name" placeholder="Insert Student Name" required><br></td>
                </tr>
                <tr>
                  <td><label for="inputEmail">Student ID</label></td>
                  <td><input type="text" name="student_id" placeholder="Insert Student ID" required><br></td>
                </tr>
                <tr>
                  <td><label for="inputEmail">Assign Project</label></td>
                  <td><select disabled class="form-control" name="project_id">
                          <option value="" selected disabled>Locked</option>
                      </select><br>
                  </td>
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

