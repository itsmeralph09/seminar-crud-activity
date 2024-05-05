<!-- Edit Task Modal -->
<div class="modal fade" id="edit_<?php echo $task_id;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="edit.php">
        <div class="modal-body">
          <div class="row form-group">
            <input type="hidden" name="task_id" value="<?php echo $task_id; ?>">
            <div class="col-sm-3">
              <label class="control-label modal-label">Task Name</label>
            </div>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="task_name" value="<?php echo $task_name;?>" >
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

<!-- Delete Task Modal -->
<div class="modal fade" id="delete_<?php echo $task_id;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="delete.php">
    	  <div class="modal-body">
          <div class="text-center">
              <div class="text-danger">Are you sure you want to delete?</div>
              <input type="hidden" name="task_id" value="<?php echo $task_id; ?>">
              <div><?php echo $task_name; ?></div>
          </div>
    	  </div>
    	  <div class="modal-footer">
    	     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
    	     <button type="submit" class="btn btn-primary" name="submit" value="submit">Yes</button>
    	  </div>
      </form>
    </div>
  </div>
</div>