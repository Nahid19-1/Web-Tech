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

		<input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Male") { echo "checked";}?> >Male

		<input type="radio" name="gender" value="femail" <?php if(isset($_POST['gender']) && $_POST['gender'] === "Female") { echo "checked";}?>>Femail
		
		<input type="radio" name="gender" value="other"<?php if(isset($_POST['gender']) && $_POST['gender'] === "Others" ) { echo "checked";}?> > Others <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>