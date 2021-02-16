<?php

	 for($x=1;$x<=3;$x++)
                {
                 for ($y=1;$y<=$x;$y++)
                  {
                    echo "*";
               
                  }
                    echo "\n";
                }


echo "###############\n";


	for ($x=3; $x>=1; $x--) 
	{ 
		for ($y=1; $y<=$x ; $y++) 
		{ 
			echo "$y";
		}
		echo "\n";
	}


echo "###############\n";


	$char = 'A';

	for ($i=0; $i<3; $i++) 
	{ 
		for ($j=0; $j<=$i; $j++) 
		{ 
			echo $char++;
		}
		echo "\n";
	}
?>