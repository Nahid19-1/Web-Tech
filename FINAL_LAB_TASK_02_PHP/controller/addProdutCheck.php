<?php 

	require_once('../model/productModel.php');

	if(isset($_POST['save'])){
		$name = $_POST['name'];
		$bPrice = $_POST['buyPrice'];
		$sPrice = $_POST['sellPrice'];

		if($name == '' || $bPrice == '' || $sPrice == '')
		{
			echo "Fill up all information";
		}
		else{
			$products = [
							'name' => $name,
							'buyPrice' => $bPrice,
							'sellPrice'=> $sPrice
						];

			$status = insertProduct($products);

				if($status){
					header('location: ../view/display.php');
				}else{
					echo "Db error";
				}

			
		}
	}
?>