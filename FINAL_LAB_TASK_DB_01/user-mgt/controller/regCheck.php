<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $repass){

				echo "registration success...";
				echo "<a href='login.html'>SignIn </a>";

				//store user information
				$user = [
							 
							'name'		=>$name, 
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password
						];

				//$_SESSION['abc'] = $user;
				$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			
				if($conn == null)
				{
					die('Error connection');
				}

				$sql = "insert into test1 values('', '{$user['name']}','{$user['username']}', '{$user['password']}','{$user['email']}')";
				$result = mysqli_query($conn ,$sql);

				if($result){
					header('location: ../view/login.html');
				}else{
					echo "something wrong...";
				}
				

				
				}
			else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>