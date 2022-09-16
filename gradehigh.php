
<?php
$g1 =$_POST['g1'];
$g2 =$_POST['g2'];
$g3 =$_POST['g3'];
$g4 =$_POST['g4'];
$g5 =$_POST['g5'];
$ave = (($g1+$g2+$g3+$g4+$g5)/5);	

if ($ave >=90)
	echo "$ave% grade is the highest<br />";
else if ($ave>=80&&$ave<90)
	echo "$ave% grade is the semi highest<br />";
else if($ave>=70&&$ave<80)
	echo "$ave% below average<br />"; 
else if($ave>=60&&$ave<70)
	echo "$ave% konti nalang<br />"; 
else if($ave>=50&&$ave<60)
	echo "$ave% goodbye see you next sem"; 
?>