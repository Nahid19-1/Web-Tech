<?php
	
	require_once('db.php');


	function insertProduct($products){
		$conn = getConnection();
		$sql = "insert into products values('', '{$products['name']}', '{$products['buyPrice']}', '{$products['sellPrice']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result))
		{
			array_push($users, $row); 
		}

		return $users; 
	}

	function getProductByID($id){
		$conn = getConnection();
		$sql = "select * from products where Id ='{$id}'";
		$result = mysqli_query($conn, $sql);
		//$row = mysqli_fetch_assoc($result);

		return $result;
	}

	function updateProduct($id, $products)
	{

		$conn = getConnection();
		$sql = "update products set name = '{$products['name']}', '{$products['buyPrice']}', '{$products['sellPrice']}' where Id='{$id}'";
		
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/*
	

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from product where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
*/
?>