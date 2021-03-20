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
		
		<?php
			 $conn = mysqli_connect('localhost', 'root', '', 'webtech');
			if($conn == null)
			{
				die('Error connection');
			}

			$sql = 'select * from test1';
			$result = mysqli_query($conn, $sql);

			echo "<table border =1 align = 'Left'> 
			    <tr>
					<td>ID</td>
					<td>Name</td>
					<td>Username</td>
					<td>Email</td>
					<td>ACTION</td>
				</tr>";
			while ($row = mysqli_fetch_assoc($result))
			 {
						
				echo 	"<tr>
						<td>{$row['Id']}</td>
						<td>{$row['name']}</td>
						<td>{$row['username']}</td>
						<td>{$row['email']}</td>

									
					</tr>";
			}
			echo "</table>";
		?>
			
	</div>
	<br>
	<div>
		<?php include('footer.php') ?>
	</div>




