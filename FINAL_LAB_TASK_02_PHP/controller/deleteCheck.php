<?php
	session_start();
	require_once('../model/productModel.php'); 
	if(isset($_POST['delete']))
	{
		$id = $_SESSION['id'];

		
		$status = deleteProduct($id);
		if($status)
		{
			echo "Product Is Deleted";
			header('location: ../view/display.php');
		}
		else
		{
			echo "Error!";
		}
	}
?>