<?php
	session_start();
	require_once('../model/userModel.php');
	if(isset($_POST['delete']))
	{
		$id = $_SESSION['id'];

		
		$status = deleteUser($id);
		if($status)
		{
			echo "User Is Deleted";
			header('location: ../view/home.php');
		}
		else
		{
			echo "Error!";
		}
	}
?>