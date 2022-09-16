<h2>simple loop</h2>
<?php 
echo"<p>\n";
$counter = 1; 
while($counter<10){
	echo 'abc';$counter++;
}
echo "</p>\n";
echo"<p>\n";
$counter = 1;
do{
	echo'xyz';$counter++;
}
while($counter<10);
echo "</p>\n";
for ($x=1;$x<10;$x++);
{
	echo"$x";
}
echo "\n<ol>";
for ($x='A';$x<'Z';$x++)
{
	echo "<li>item $x </li>\n";
}
echo "\n</ol>";
?> 
<h2>multiplication table</h2>
<?php 
echo "<table border=\"1\" bgcolor =\"red\" cellpadding=\"20\">";
for ($x =1;$x<=10 ;$x++)
{
echo "<tr>\n";
	for($z =1;$z<=10;$z++){
		$wow =$x * $z;
		echo "<td> $wow </td>\n";
}

 	echo"</tr>";}
echo "</table>";






?>
