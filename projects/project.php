<?php

// Loads all of the project data by id

$project_id 	= $_GET['id'];

// Construct the file path and load JSON data
$file 		 	  = "data/{$project_id}.json";
$proj_info	 	= json_decode(file_get_contents($file), true);

// Break this data out a bit
$image1			= $proj_info['thumb'];
$image2			= $proj_info['image2'];
$image3			= $proj_info['image3'];
$name			= $proj_info['name'];
$title			= $proj_info['title'];
$time			= $proj_info['time'];
$shortDes		= $proj_info['shortDes'];
$section1   	= $proj_info['section1'];
$section2		= $proj_info['section2'];

if(is_array($proj_info['section2'])) {
  $section2  = "<div class=\"grid-container grid-cont-overlay\">";
  $array_map = array_keys($proj_info['section2']);

  for ($heading = 0; $heading < count($proj_info['section2']); $heading++) {
    $thisKey = $array_map[$heading];
    $section2 .= '<div class="left nopad fit"><h5>' . $thisKey . '</h5></div><div class="right nopad fit">' . $proj_info['section2'][$thisKey] . '</div>';
  }

  $section2 .= "</div>";
}

echo "<div class=\"overlay-left\"><img src=\"assets/{$image1}\" class=\"overworks\"/></div>
<div class=\"overlay-mid\"><img src=\"assets/{$image2}\" class=\"overworks\"/></div>
<div class=\"overlay-right\"><img src=\"assets/{$image3}\" class=\"overworks\"/></div>
<div class=\"overlay-left\"><h2 class=\"overlayname\">{$name}</h2><b><sub id=\"overlaytitle\">{$title}</sub></b><br><sub id=\"overlaytime\">{$time}</sub></div>
<div class=\"overlay-mid fit textMid\" id=\"overlaysect1\">{$section1}</div>
<div class=\"overlay-right fit\" id=\"overlaysect2\">{$section2}</div>";
?>
