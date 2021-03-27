<?php 
	require_once('../model/productModel.php');
	session_start();
	$id = $_GET['id'];
	$productId = getProductByID($id);
	$row = mysqli_fetch_assoc($productId);
	$_SESSION['id'] = $id;
 ?>

<div id="main_content">
	<form method="post" action="../controller/editCheck.php">
		<fieldset style="width: 10%">
			<legend><b>Edit PRODUCT</b></legend>
			<table>
				<tr>
					<td>Name</td>
				</tr>
				<tr>
					<td><input type="text" name="name" value="<?php echo $row['name'] ?>"> </td>
				</tr>
				<tr>
					<td>Buying Price</td>
				</tr>
				<tr>
					<td><input type="text" name="buyPrice" value="<?php echo $row['buyingPrice'] ?>"> </td>
				</tr>
				<tr>
					<td>Selling Price</td>
				</tr>
				<tr>
					<td><input type="text" name="sellPrice" value="<?php echo $row['sellingPrice'] ?>">
						<br>__________________________
					 </td>
				</tr>
				
				<tr>
					<td>
						<input type="checkbox" name="check" > Display 
						<br>__________________________
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" name="update" value="Save">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>