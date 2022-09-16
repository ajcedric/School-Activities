
<?php
$angle1 =$_POST['angle1'];
$angle2 =$_POST['angle2'];
$angle3 =$_POST['angle3'];





if (($angle1+$angle2+$angle3)==180)
{
	echo "rignt angle<br />";
}else 
{	
	echo "not right";
}

?>