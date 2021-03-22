<?php
	
	require_once('db.php');

	function validateUser($username, $password){
		$conn = getConnection();
		$sql = "select * from test1 where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$conn = getConnection();
		$sql = "insert into test1 values('', '{$user['name']}','{$user['username']}', '{$user['password']}','{$user['email']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from users where id='{$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from test1";
		$result = mysqli_query($conn, $sql);

		/*$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}*/

		return $result;
	}

	function getUserId($id){
		//$id = $_GET['id'];
		$conn = getConnection();
		$sql = "select * from test1 where Id ='{$id}'";
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	function updateUser($id,$user){

		$conn = getConnection();
		$sql = "update test1 set name ='{$user['name']}', username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where Id='{$id}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>