<?php
$q = $_REQUEST["q"];

$myfile = fopen("priorityID.txt", "w") or die("Unable to open file!");
$txt = $q;
fwrite($myfile, $txt);
fclose($myfile);

$success = $txt;

echo $success;
?>
