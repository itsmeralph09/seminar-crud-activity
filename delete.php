<?php

require 'dbconn.php';

if (isset($_POST['submit'])) {
	$task_id = mysqli_real_escape_string($conn, $_POST['task_id']);

	$sql = "DELETE FROM task_tbl WHERE task_id = '$task_id'";
	$query = mysqli_query($conn, $sql);

    if ($query == TRUE) {
    	echo 'Delete Success';
        header('Location: todo.php');
        exit;
    } else{
    	echo 'Delete error';
        header('Location: todo.php');
        exit;
    }
}

?>