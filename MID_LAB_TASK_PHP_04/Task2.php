<?php


	$vat = 15/100;
	$mainPrice = 500;
	$vatAmount = ($mainPrice / 100) * $vat;
	$totalPrice = $mainPrice + $vatAmount;

	echo "Total Price with vat : "."$totalPrice";


?>