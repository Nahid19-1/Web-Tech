



<!DOCTYPE html>
<html>
<head>
	<title>Name input</title>
</head>
<body>

<form method="post" action="" >
	<fieldset>
		<legend>NAME</legend>
		Name :<input type="text" name="myname" value="<?php if(isset($_POST['myname'])){echo $_POST['myname'];}
		 ?>"> <br>
		
		__________________________<br>
		<input type="submit" name="submit" value="submit">
	</fieldset>
</form>

</body>
</html>