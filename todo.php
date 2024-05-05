<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Todo App</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .container {
      height: 100vh;
    }
  </style>
</head>
<body>

<div class="container d-flex align-items-center justify-content-center">
  <div class="card w-50 h-50 shadow-lg">
    <div class="card-header">
      <div class="float-start">
        <p>TODO List</p>
      </div>
      <div class="float-end">
        <button type="button" class="btn btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#addTask">Add Task</button>
      </div>
    </div>
    <div class="card-body">
        <div class="">
          <table class="table table-bordered w-100 rounded-3">
              <thead>
                <tr>
                  <th>Task Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
                require 'dbconn.php';
                $sql = "SELECT * FROM task_tbl";
                $query = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_assoc($query)) {
                  $task_id = $row['task_id'];
                  $task_name = $row['task_name'];
              ?>
                <tr>
                  <td><?php echo $task_name ?></td>
                  <td>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit_<?php echo $task_id;?>">Edit</button>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_<?php echo $task_id;?>">Delete</button>
                  </td>
                </tr>
              <?php
                include 'edit_delete_modal.php';
                }
              ?>
              </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

<!-- Add Task Modal -->
<div class="modal fade" id="addTask" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="add.php">
        <div class="modal-body">
          <div class="row form-group">
            <div class="col-sm-3">
              <label class="control-label modal-label">Task Name</label>
            </div>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="task_name" value="" placeholder="Input task name.." required>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
