<?php

// Get the projects
$file 		 	= "projects/projects/wpi.json";
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

echo "<img src=\"assets/{$proj_info['thumb']}\" class=\"works\"/></div><div class=\"right small\">";

echo "<h4>{$proj_info['name']}</h4><sub><b>{$proj_info['title']}</b></sub><br><sub>{$proj_info['time']}</sub><br><br>
<p>{$proj_info['shortDes']}</p>";

echo '<a onclick="openModal()" class="navbutton showmore">Learn More...</a>';

echo @'</div>
</div>
</div>';
?>