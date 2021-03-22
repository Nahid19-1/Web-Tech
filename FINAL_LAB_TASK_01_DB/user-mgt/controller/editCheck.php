<?php 
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit']))
	{
		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$id = $_SESSION['id'];
		print_r($id);


		$user = [
							 
					'name'		=>$name, 
					'username'	=>$username, 
					'email'		=>$email, 
					'password'	=>$password
				];

		$status = updateUser($id,$user);
		if($status){
			header('location: ../view/user_list.php');
		}else{
				echo "Db error";
			}
		
	}
?>