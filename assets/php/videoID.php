<?php

$myfile = fopen("priorityID.txt", "r") or die("Unable to open file!");
$vid = fread($myfile,filesize("priorityID.txt"));
fclose($myfile);


echo $vid === "" ? "no video" : $vid;

 ?>
