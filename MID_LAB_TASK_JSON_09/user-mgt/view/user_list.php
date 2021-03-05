<?php
	
	$title = "User List Page";
	include('header.php');

?>

	<div id="page_title">
		<h1>User List Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
	
		<table border="1">

			<?php

				$myfile = fopen('../model/validation.json', "r");
				$userData = fread($myfile, filesize('../model/validation.json'));
				$jsonen = json_decode($userData, true);

				$username = $jsonen['user'];
				$email = $jsonen['email'];
			?>
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			
			<tr>
				<td>1</td>
				<td> <?php echo $username; ?> </td>
				<td> <?php echo $email; ?> </td>
				<td>
					<a href="edit.php?id=3"> EDIT </a> |
					<a href="delete.php?id=3"> DELETE </a> 
				</td>
			</tr>
		</table>
			
	</div>

<?php include('footer.php') ?>