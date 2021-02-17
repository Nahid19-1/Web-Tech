
<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['dob'];

			if($name == ""){
				echo "Input some value";
			}
			else{
				echo implode(" ",$name);
			}

	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Date input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>DATE OF BIRTH</legend>
		<input type="date" name="dob[]" value="<=implode(" ",$name);"?> <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>