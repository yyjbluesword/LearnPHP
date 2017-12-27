<!DOCTYPE HTML>
<html>
<body>

<?php
function myTest()
{
	static $x=0;
	echo "$x";
	echo "<br>";
	$x++;
}

myTest();
myTest();
myTest();
?>
</body>
</html>