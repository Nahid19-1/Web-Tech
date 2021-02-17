<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['myemail'];

			if($name == ""){
				echo "Input some value";
			}
			else{
				echo "$name";
			}

	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>EMAIL</legend>
		Email :<input type="email" name="myemail"> <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>