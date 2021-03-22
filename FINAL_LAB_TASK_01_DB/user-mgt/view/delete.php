<?php
	$title = "Delete Page";

	require_once('header.php');
	require_once('../model/userModel.php');
	$id = $_GET['id'];
	$userId = getUserId($id);
	$row = mysqli_fetch_assoc($userId);
	
?>


<div id="main_content">
	<form method="POST" action="../controller/deleteCheck.php">
		<fieldset>
			<legend>Delete This User</legend>
			<table>

				<td>
					<tr>Name : <?php echo $row['name']; ?></tr><br>
					<tr>Username : <?php echo $row['username']; ?></tr><br>
					<tr>Email : <?php echo $row['email']; ?></tr>
				</td>
			</table>
			<input type="submit" name="delete" value="Confirm">
		</fieldset>
		
	</form>
</div>

<?php include('footer.php') ?>