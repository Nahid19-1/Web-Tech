
<?php 
	require_once('../model/productModel.php');
	session_start();
	$id = $_GET['id'];
	$productId = getProductByID($id);
	$row = mysqli_fetch_assoc($productId);
	$_SESSION['id'] = $id;
 ?>
<div id="main_content">
	<form method="POST" action="../controller/deleteCheck.php">
		<fieldset style="width: 20%">
			<legend>DELETE PRODUCT</legend>
			<table>
				<tr>Name: <b><?php echo $row['name'] ?> </b><br></tr>
				<tr>Buying Price: <b><?php echo $row['buyingPrice'] ?> </b><br></tr>
				<tr>Selling Price: <b> <?php echo $row['sellingPrice'] ?></b><br></tr>
				<tr>Displayable:<b>Yes</b></tr>


			</table>
			<hr>
			<input type="submit" name="delete" value="Delete">
		</fieldset>
	</form>
</div>