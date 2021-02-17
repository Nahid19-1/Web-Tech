
<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['myname'];

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
	<title>Name input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>NAME</legend>
		Name :<input type="text" name="myname"> <br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>