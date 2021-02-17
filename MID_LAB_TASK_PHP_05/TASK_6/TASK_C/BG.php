<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['bg'];

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
	<title>Blood Group input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>BLOOD GROUP</legend>
					 <select name="bg">
						 	<option value="A+"<?php if(isset($_POST["bg"]) && $_POST["bg"]=='A+') { echo $name; } ?>>A+</option>		
						 	<option value="A-"<?php if(isset($_POST["bg"]) && $_POST["bg"]=='A-') { echo $name; } ?> >A-</option>		
						 	<option value="B+"<?php if(isset($_POST["bg"]) && $_POST["bg"]=='B+') { echo $name; } ?>	>B+</option>		
						 	<option value="B-">B-</option>		
						 				
				 </select> <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>