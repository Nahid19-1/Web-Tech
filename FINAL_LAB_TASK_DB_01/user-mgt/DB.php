<?php 
	
				$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			

				if($conn == null)
				{
					die('DB connection error!');
				}


				/*$sql = "select * from test1";
				$result = mysqli_query($conn ,$sql);
				//$row = mysqli_fetch_assoc($result);
				//$row1 = mysqli_fetch_assoc($result);

				//echo $result ->num_rows;
				//print_r($row);
				//echo "<br>";
				//print_r($row1);

				while ($row = mysqli_fetch_assoc($result)){
					//print_r($row);
					//echo "<br>";
					echo "<h3>" . $row['name']."</h3>";
					echo "<h3>" . $row['name'].$row['email']."</h3>";

				}*/ 


				//showint DB data in table
				/*$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			

				if($conn == null)
				{
					die('Error connection');
				}

				$sql = 'select * from test1';
				$result = mysqli_query($conn, $sql);

				echo "<table align = 'Left'> 
							<tr>
								<td>ID</td>
								<td>Name</td>
								<td>Username</td>
								<td>Email</td>
							</tr>";
				while ($row = mysqli_fetch_assoc($result)) {
						
				echo 	"<tr>
									<td>{$row['Id']}</td>
									<td>{$row['name']}</td>
									<td>{$row['username']}</td>
									<td>{$row['email']}</td>
									
								</tr>";
					}
					echo "</table>";*/





				$sql = "select * from test1 where Id ='4' and name ='Mg' ";
				$result = mysqli_query($conn ,$sql);
				$data =  mysqli_fetch_assoc($result);

				print_r($data);

				$sql = "insert into users values('', 'xyz', 'xyz', 'xyz@gmail.com', 'user')";
				$result = mysqli_query($conn, $sql);
				if($result){
					echo "success";
				}else{
					echo "something wrong...";
				}


 ?>