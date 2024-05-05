<?php

require 'dbconn.php';

if (isset($_POST['submit'])) {
	$task_id = mysqli_real_escape_string($conn, $_POST['task_id']);
	$task_name = mysqli_real_escape_string($conn, $_POST['task_name']);

	$sql = "UPDATE task_tbl SET task_name = '$task_name' WHERE task_id = '$task_id'";
	$query = mysqli_query($conn, $sql);

    if ($query == TRUE) {
    	echo 'Update Success';
        header('Location: todo.php');
        exit;
    } else{
    	echo 'Update error';
        header('Location: todo.php');
        exit;
    }
}

?>