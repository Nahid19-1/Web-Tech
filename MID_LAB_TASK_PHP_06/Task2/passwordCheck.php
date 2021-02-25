<?php
	
	if(isset($_POST['Submit']))
	{
		$currentPass = $_POST['currentPassword'];
		$newPass = $_POST['newPassword'];
		$retypeNewPass = $_POST['retypeNPassword'];

		if($currentPass == "" || $newPass =="" || $retypeNewPass =="")
		{
			echo "Null submission";
		}

		elseif( $currentPass  !== $newPass || $newPass == $retypeNewPass)

		{
			echo "Your Password is changed";
		}
		else
		{
			echo "Please put currect values";
		}
	}
?>



