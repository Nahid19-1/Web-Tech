<?php
	session_start();

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(strlen($username)<2)
		{
			echo "Please Enter more than 2 charactres";
		}
		elseif (strlen($password)<8) 
		{
			echo "Password must not be less than eight (8) characters";
		}
		else
		{
		

			if($password == '@' || $password == '#'|| $password == '$'|| $password == '%')
			{
				
				echo "Tank You";

			}
			else
			{
				echo "Password must contain at least one of the special characters (@, #, $, %)";
			}
		}

		
	}



?>