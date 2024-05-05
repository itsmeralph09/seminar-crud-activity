<!-- Add Employee Modal -->
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Employee</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="add_employee.php">
        <div class="modal-body">
          <div class="row form-group mb-3">
            <div class="col-sm-3">
              <label class="control-label modal-label">First Name</label>
            </div>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="first_name" value="" placeholder="Input first name.." required>
            </div>
          </div>
          <div class="row form-group mb-3">
            <div class="col-sm-3">
              <label class="control-label modal-label">Middle Name</label>
            </div>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="middle_name" value="" placeholder="Input middle name.." required>
            </div>
          </div>
          <div class="row form-group mb-3">
            <div class="col-sm-3">
              <label class="control-label modal-label">Last Name</label>
            </div>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="last_name" value="" placeholder="Input last name.." required>
            </div>
          </div>
          <div class="row form-group mb-3">
            <div class="col-sm-3">
              <label class="control-label modal-label">Email</label>
            </div>
            <div class="col-sm-9">
              <input type="email" class="form-control" name="email" value="" placeholder="Input email.." required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit" value="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>