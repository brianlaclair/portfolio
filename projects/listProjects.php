<?php

// Get the list of projects
$file 		 	= "projects/directory.json";
$dirInfo	 	= json_decode(file_get_contents($file), true);
$num 			= 0;
$id				= "wpi";

// I wanted to make the json human-readable... that was a mistake? Maybe?
$array_map = array_keys($dirInfo);

// Loop through the first dimension of the directory
for ($period = 0; $period < count($dirInfo); $period++) {

	$thisKey = $array_map[$period];

	// Loop through the nested dimesion and load results
	for ($current = 0; $current < count($dirInfo[$thisKey]); $current++) {

		$projectId 		= $dirInfo[$thisKey][$current];
		$projectFile	= "projects/data/{$projectId}.json";
		$projectInfo	= json_decode(file_get_contents($projectFile), true);

		// We have the project's JSON file loaded, so let's save the data to some temporary variables for easy reference
		$thumb 		= $projectInfo['thumb'];
		$name			= $projectInfo['name'];
		$title		= $projectInfo['title'];
		$time			= $projectInfo['time'];
		$desc			= $projectInfo['shortDes'];
		$tech			= $projectInfo['section2']['Technologies'];

		// Output the HTML for the row
		$rowTitle 		= "";
		if ($current == 0) {
			$rowTitle = "<h3>{$thisKey}</h3>";
		}

		echo "<div class=\"left\">{$rowTitle}</div>
		<div class=\"right\">
		<div class=\"grid-container grid-cont-sub hoverwork\">
		<div class=\"worksleft\">
		<img src=\"assets/{$thumb}\" class=\"works\"/></div><div class=\"right small worksmod\">
		<h4>{$name}</h4>
		<sub><b>{$title}</b></sub><br><sub>{$time}</sub><br><sub class='smallest'>{$tech}</sub><br><br><p>{$desc}</p> <a onclick=\"openModal('{$projectId}')\" class=\"navbutton showmore\">Learn More...</a>
		</div>
		</div>
		</div>
		";

	}
}
?>
