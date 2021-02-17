<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['deg'];

			if($name == ""){
				echo "Input some value";
			}
			else{
				echo "$name ";
			}

	}
	else{
		echo "Invalid Request...";
	}


?>