<?php

// Get the projects
$file 		 	= "projects/data/wpi.json";
$proj_info	 	= json_decode(file_get_contents($file), true);
$num 			= 0;

// Output project format
echo @'<div class="left">';

if ($num == 0) {
	echo @"<h3>Current Projects</h3>
	";
}

echo @'</div>
<div class="right">
<div class="grid-container grid-cont-sub">
<div class="worksleft">
';

echo "<img src=\"assets/{$proj_info['thumb']}\" class=\"works\"/></div><div class=\"right small worksmod\">";

echo "<h4>{$proj_info['name']}</h4><sub><b>{$proj_info['title']}</b></sub><br><sub>{$proj_info['time']}</sub><br><br><p>{$proj_info['shortDes']}</p> <a onclick=\"openModal('{$proj_info['name']}', '{$proj_info['title']}', '{$proj_info['time']}', '{$proj_info['thumb']}', '{$proj_info['image2']}', '{$proj_info['image3']}', '{$proj_info['section1']}', '{$proj_info['section2']}')\" class=\"navbutton showmore\">Learn More...</a>";

echo @'</div>
</div>
</div>';
?>