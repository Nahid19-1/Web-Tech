<?php

	//sleep(3);

	$name = $_REQUEST['name'];


	
	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from test1 where username like '%{$name}%'";
	$result = mysqli_query($conn, $sql);
	
   /*$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
	*/

	if($name =="")
	{
		echo "<h3>Enter Some value<h3>";

	}

	else
	{
		$response = "<table border=1>
						<tr>
							<td>ID</td>
							<td>Name</td>
							<td>Username</td>
							<td>Email</td>
							
						</tr>";

		while ($row = mysqli_fetch_assoc($result)) {
			$response .= "	<tr>
								<td>{$row['Id']}</td>
								<td>{$row['name']}</td>
								<td>{$row['username']}</td>
								<td>{$row['email']}</td>
								
							</tr>";
		}

		$response .= "</table>";

		echo $response;
	}

?>