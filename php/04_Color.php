<!DOCTYPE html>
<html>
<body>

<?php
$x = "Red";
$y = array("Green","Blue","Yellow");
$y_size = count($y);

for ($i=0;$i<$y_size;$i++)
	print "<p style=\"color:$y[$i]\">Hi Color $y[$i]</p>";

print "<p style=\"color:$x\">Hi</p>";
echo "<p style=\"color:$y\">Hi</p>";

echo $x;
?>  

</body>
</html>