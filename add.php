<?php 
require 'dbconn.php';

if (isset($_POST['submit'])) {
	$task_name = mysqli_real_escape_string($conn, $_POST['task_name']);

	$sql = "INSERT INTO task_tbl(task_name) VALUES('$task_name')";
	$query = mysqli_query($conn, $sql);

    if ($query == TRUE) {
    	echo 'Insert Success';
        header('Location: todo.php');
        exit;
    } else{
    	echo 'Insert error';
        header('Location: todo.php');
        exit;
    }
}

?>