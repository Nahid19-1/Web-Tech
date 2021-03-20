<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			//$user = $_SESSION['abc'];
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			if($conn == null)
				{
					die('Error connection');
				}
			$sql = "select * from test1 where Id ='7' ";
				$result = mysqli_query($conn ,$sql);
				$data =  mysqli_fetch_assoc($result);



			if($username == $data['username'] && $password == $data['password']){
				
				$_SESSION['status'] = true;
				header('location: ../view/home.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>

