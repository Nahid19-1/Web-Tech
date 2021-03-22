<?php
	
	$title = "User List Page";
	include('header.php');
	require_once('../model/userModel.php');

?>

	<div id="page_title">
		<h1>User List Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
	
		<?php

			$alluser = getAllUser();

			echo "<table border =1 align = 'Left'> 
			    <tr>
					<td>ID</td>
					<td>Name</td>
					<td>Username</td>
					<td>Email</td>
					<td>ACTION</td>
				</tr>";
			while ($row = mysqli_fetch_assoc($alluser))
			 {
						
				echo 	
					"<tr>
						<td>{$row['Id']}</td>
						<td>{$row['name']}</td>
						<td>{$row['username']}</td>
						<td>{$row['email']}</td>
						<td> 
							<a href='edit.php?id={$row['Id']}'> Edit</a> | 
							<a href='delete.php?id={$row['Id']}'> Delete </a> 
						</td>					
										
					</tr>";
			}
			echo "</table>";
		?>
			
	</div>

<?php include('footer.php') ?>