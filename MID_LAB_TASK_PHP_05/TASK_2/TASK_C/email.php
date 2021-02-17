


<!DOCTYPE html>
<html>
<head>
	<title>Email input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>EMAIL</legend>
		
		Email :<input type="email" name="myemail" value="<?php if(isset($_POST['myemail'])){echo $_POST['myemail'];}
		 ?>"><br>
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>