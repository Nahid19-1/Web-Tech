<?php
	
	$title = "Edit Page";
	include('header.php');
	require_once('../model/userModel.php');

	$id = $_GET['id'];
	$userId = getUserId($id);
	$row = mysqli_fetch_assoc($userId);
	$_SESSION['id'] = $id;

?>


	<div id="page_title">
		<h1>Edit User Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="user_list.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<form method="post" action="../controller/editCheck.php">
			<fieldset>
				<legend>Edit User</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php echo $row['username'] ?>"></td>
					</tr>
					
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php echo $row['email'] ?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?php echo $row['password'] ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
	

<?php include('footer.php') ?>

