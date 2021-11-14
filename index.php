<HTML>
<HEAD>
<link rel="stylesheet" href="style.css">
</HEAD>
<BODY>
<DIV id="overlay" class="hiddenstart">
<a onclick="closeModal()" id="up" class="navbutton cornerfix">X</a>
<div class="overlaycontent">

<div class="grid-overlay-container">
<div class="overlay-left"><img id="overlayimage-1" src="" class="overworks"/></div>
<div class="overlay-mid"><img id="overlayimage-2" src="" class="overworks"/></div>
<div class="overlay-right"><img id="overlayimage-3" src="" class="overworks"/></div>
<div class="overlay-left"><h2 id="overlayname"></h2><b><sub id="overlaytitle"></sub></b><br><sub id="overlaytime"></sub></div>
<div class="overlay-mid small" id="overlaysect1"></div>
<div class="overlay-right small" id="overlaysect2"></div>
</div>

<h2 id="overlayname"></h2>
<h2 id="overlaytitle"></h2>
<h2 id="overlaytime"></h2>


</div>
</div>

<DIV id="topsection">
<DIV id="head">
<h1>Brian LaClair</h1>
<h3>full stack web, game, and software developer</h3>
</DIV>

<DIV id="nav" class="">
<a href="#top" id="goup" class="navbutton invisi">home</a>  <a href="#about" class="navbutton">about me</a>  <a href="#work" class="navbutton">my work</a>  <a href="#contact" class="navbutton">contact me</a>
</DIV>
</DIV>


<DIV id="main" class="content">

<div id="about" class="section">
<div class="title">
<h2>about me</h2>
</div>
<div class="grid-container">
<div class="left">
<img src="assets/me.jpg"/>
</div>
<div class="right">
<p>Brian discovered his passion for programming at a young age with an old computer and a copy of QBASIC</p><p>Over 15 years later, he works daily designing and developing websites, games, mobile apps, and open-source libraries in a multitude of languages</p><p>When he's not coding, you can find Brian spending time with his friends at local concerts or hanging out with his dogs, cat, and guinea pigs</p>
</div>
</div>
</div>

<div id="work" class="section">

<div class="title">
<h2>my work</h2>
</div>

<div class="grid-container grid-cont-tight">
<?php include("projects/listProjects.php"); ?>
</div>

</div>

<div id="contact" class="section">
<div class="title">
<h2>contact me</h2>
</div>
<div class="grid-container">
<div class="left">
<img src="assets/me.jpg"/>
</div>
<div class="right">
<p>Brian discovered his passion for programming at a young age with an old computer and a copy of QBASIC</p><p>Over 15 years later, he works daily designing and developing websites, games, mobile apps, and open-source libraries in a multitude of languages</p><p>When he's not coding, you can find Brian spending time with his friends at local concerts or hanging out with his dogs, cat, or guinea pigs</p>
</div>
</div>
</div>


</div>

<script>
// Get root element
var root = document.documentElement;

// Setup for nav sticking
var header 		  	= document.getElementById("nav");
var hiddenbut 	  	= document.getElementById("goup");

// Setup for overlay
var overlay			= document.getElementById("overlay");
var overlayName		= document.getElementById("overlayname");
var overlayTitle	= document.getElementById("overlaytitle");
var overlayTime		= document.getElementById("overlaytime");
var overlayImage1   = document.getElementById("overlayimage-1");
var overlayImage2   = document.getElementById("overlayimage-2");
var overlayImage3   = document.getElementById("overlayimage-3");
var overlaySect1    = document.getElementById("overlaysect1");
var overlaySect2    = document.getElementById("overlaysect2");

// Get id of the main content section
var mainContent		= document.getElementById("main")

// Get the offset position of the navbar
var sticky 		  	= header.offsetTop;

// When the user scrolls the page, this helps us check if things need to happen, like sticking the navbar
window.onscroll   = function() {nav_stick();};

// Sticks to top of the screen if we've reached it, unsticks if we're back to it's original position. Also un-hides the "Home" button.
function nav_stick() {
	
  if (window.pageYOffset > sticky) {
    header.classList.add("stickytop");
	hiddenbut.classList.remove("invisi");
  } else {
    header.classList.remove("stickytop");
	hiddenbut.classList.add("invisi");
  }
  
}

function openModal(name, title, time, img1, img2, img3, section1, section2) {
	// Prevent scrolling
	root.className = 'noscroll';
	
	// Blur the page behind the overlay for a "glassy" effect
	mainContent.classList.add("mainblur");
	header.classList.add("mainblur");
	
	// Show the overlay
	overlay.classList.add("showoverlay");
	overlay.classList.remove("hideoverlay");
	overlay.classList.remove("hiddenstart");
	
	// Update the contents of the overlay
	overlayName.textContent 	= name;
	overlayTitle.textContent	= title;
	overlayTime.textContent 	= time;
	overlaySect1.innerHTML		= section1;
	overlaySect2.textContent 	= section2;
	overlayImage1.src			= "assets/" + img1;
	overlayImage2.src			= "assets/" + img2;
	overlayImage3.src			= "assets/" + img3;
}

function closeModal() {
	// add hiddenstart after the transition has finished to allow for an animation
	setTimeout(function() {
		overlay.classList.add("hiddenstart");
	}, 300);
	
	// Unblur the page and hide the overlay
	root.className = '';
	header.classList.remove("mainblur");
	mainContent.classList.remove("mainblur");
	overlay.classList.remove("showoverlay");
	overlay.classList.add("hideoverlay");
}
</script>
</BODY>
</HTML>