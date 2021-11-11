<?php
$file 		 	= "directory.json";
$proj_info	 	= json_decode(file_get_contents($file), true);
var_dump($proj_info);
echo $proj_info[2021][0];
?>