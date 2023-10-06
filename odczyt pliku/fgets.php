<?php
$myfile = fopen("foo.txt", "r")
	or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>