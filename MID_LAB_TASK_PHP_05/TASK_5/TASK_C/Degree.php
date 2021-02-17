

<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['deg'];

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
	<title>Degreer input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>DEGREE</legend>
					<input type='checkbox' name='deg' value='SSC' <?php if(isset($_POST['SSC'])) {echo $_POST['deg'];} ?> >SSC

		 			<input type="checkbox" name="deg" value="HSC" <?php if(isset($_POST['HSC'])) {echo $_POST['deg'];} ?> >HSC

		 			<input type="checkbox" name="deg" value="BSc" <?php if(isset($_POST['BSc'])) {echo $_POST['deg'];} ?> >BSc

		 			<input type="checkbox" name="deg" value="BSc" <?php if(isset($_POST['MSc'])) {echo $_POST['deg'];} ?> >MSc <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>