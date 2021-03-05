<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$myfile = fopen('../model/validation.json', "r");
		$userData = fread($myfile, filesize('../model/validation.json'));
		$jsonen = json_decode($userData, true);

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			$user = $_SESSION['abc'];

			if($username == $_POST['username'] && $password == $_POST['password']){
				
				$_SESSION['status'] = true;
				header('location: ../view/home.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>