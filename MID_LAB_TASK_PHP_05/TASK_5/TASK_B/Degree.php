

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
					<input type="checkbox" name="deg" value="SSC">SSC
		 			<input type="checkbox" name="deg" value="HSC">HSC
		 			<input type="checkbox" name="deg" value="BSc">BSc
		 			<input type="checkbox" name="deg" value="BSc">MSc <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>