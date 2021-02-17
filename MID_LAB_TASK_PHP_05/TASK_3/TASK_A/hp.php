<?php


	//print_r($_POST);
	if(isset($_POST['submit'])){

			$name = $_POST['dob'];

			if($name == ""){
				echo "Input some value";
			}
			else{
				echo implode(" ",$name);
			}

	}
	else{
		echo "Invalid Request...";
	}


?>