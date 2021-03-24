<?php 
	require_once('../model/productModel.php');

 ?>

<div>
	

	<fieldset style="width: 20%">
		<legend>DISPLAY</legend>
		<?php
		$allproduct = getAllProduct();

		echo "<table border = 1>
			<tr>
				<td><b>NAME</b></td>
				<td><b>PROFIT</b></td>
				<td><b>ACTION</b></td>
			</tr>";

		for($i = 0; $i < count($allproduct); $i++)
			 {
				$profit = $allproduct[$i]['sellingPrice']-$allproduct[$i]['buyingPrice'];		
				echo 	
					"<tr>
						<td>{$allproduct[$i]['name']}</td>
						<td>{$profit}</td>
						<td> 
							<a href='editProduct.php?id={$allproduct[$i]['Id']}'> Edit</a> | 
							<a href='deleteProduct.php?id={$allproduct[$i]['Id']}'> Delete </a> 
						</td>					
										
					</tr>";
			}
			echo "</table>";
	?>
	</fieldset>
</div>