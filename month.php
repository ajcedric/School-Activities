<h2>month</h2>
<?php

$currMonth=date('F',time());
if($currMonth == 'march')
{
	echo"<p>It's March, So it's really hot</p>";
	
}
else 
{
	echo"<p>No it's not march</p>";
}

?>