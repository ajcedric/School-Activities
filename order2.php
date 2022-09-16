
<?php
$small =$_POST['small'];

$medium =$_POST['medium'];

if (isset($_POST['submit'])) 
{
$radio_value=$_POST['small'];
echo"200<br />";}
else
{
 $radio_value=$_POST['medium'] ;
echo "300 <br />";
}
?>