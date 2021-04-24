<?php
	$title = "Home page";
	//include('header.php');
	//include_once('header.php');
	//require('header.php');
	require_once('header.php')
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="../model/script.js"></script>
		<script type="text/javascript"></script>
	</head>
<body>

	<div id="page_title">
		<h1>Welcome Home, <?php echo $_SESSION['username']?></h1>		
	</div>

	<div id="nav_bar">

		<a href="create.php">Create New User</a> |	
		<a href="user_list.php">View User List</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<br>
		<br>
		<br>
	</div>
	<div>
		<input type="text" name="search" id="name" onkeyup="ajax()">
		<input type="button" name="" value="search" onclick="ajax()">
	</div>
	<div id="result"></div>
</body>
</html>




	

<?php include('footer.php') ?>