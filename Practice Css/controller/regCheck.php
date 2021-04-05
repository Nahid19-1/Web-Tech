<?php 
	session_start();

	if(isset($_POST['submit']))
	{
		$name 		= $_POST['name'];
		$username 	= $_POST['username'];
		$phone 		= $_POST['phone'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$cpassword 	= $_POST['Cpassword'];

		if($name=="" || $username=="" || $phone=="" || $email=="" || $password=="" || $cpassword=="")
			{
				echo("<h2>Please <i>GO BACK</i> & fill all the informatiom </h2>");
			}
		else
		{
			if($password == $cpassword)
			{
				$myfile = fopen('../model/userData.json', "r");
				$userData = fread($myfile, filesize('../model/userData.json'));
				$jsonen = json_decode($userData, true);

				$userinfo = [
								'name'  	=> $name,
								'username'	=> $username,
								'phone' 	=> $phone,
								'email'		=> $email, 
								'password'	=> $password,
								'Cpassword' => $cpassword
							];
				//$_SESSION['userinfo'] = $user;
				

				array_push($jsonen, $userinfo);


				$jsonEncode = json_encode($jsonen);
				$myfile = fopen('../model/userData.json','w');
				fwrite($myfile, $jsonEncode);
				fclose($myfile);

				header('location: ../view/login.html');
				echo $myfile;

			}
			else{echo "<h2> password & confirm password mismatch...</h2> ";}
		}
	}

 ?>