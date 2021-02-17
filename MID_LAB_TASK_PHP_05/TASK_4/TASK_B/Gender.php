<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['gender'];

			if($name == ""){
				echo "Input some value";
			}
			else{
				echo "$name ";
			}

	}
	else{
		echo "Invalid Request...";
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Gender input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>GENDER</legend>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="femail">Femail
		<input type="radio" name="gender" value="other">Other <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>