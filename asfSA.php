
<?php
$g1 =$_POST['g1'];
$g2 =$_POST['g2'];
$g3 =$_POST['g3'];




{if ($g1>$g2)
 	if($g1>$g3)
	echo "grade 1 is the highest<br />";
	else 
	echo "grade 3 is the highest<br />";
else 
if($g2>$g3)
	
	echo "grade 2 is the highest";
else
	echo "grade 3 is the highest";
}

?>