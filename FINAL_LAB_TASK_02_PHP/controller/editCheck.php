<?php

	session_start();
	require_once('../model/productModel.php'); 
	if(isset($_POST['update']))
	{
		
		$name = $_POST['name'];
		$bPrice = $_POST['buyPrice'];
		$sPrice = $_POST['sellPrice'];
		$id = $_SESSION['id'];
	//	print_r($id);
		
		$products = [
							'name'		 => $name,
							'buyPrice'	 => $bPrice,
							'sellPrice'	 => $sPrice
						];
		
		$status = updateProduct($id, $products);
		if($status){
			
			header('location: ../view/display.php');
		}else{
				echo "Db error";
			}
		
	}
?>