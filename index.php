<HTML>
<HEAD>
<!-- Hey! Truly overjoyed that you're taking the time to look at my portfolio's source! I wrote it myself and all that. It uses Javascript and PHP to automatically load content
and make it easy for me to update things here. If you want, I have the entire source on my github, feel free to use it for your own website! -->
<link rel="stylesheet" href="style.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://kit.fontawesome.com/025c4715ea.js" crossorigin="anonymous"></script>
</HEAD>
<BODY>

<DIV id="overlay" class="hiddenstart">
<a onclick="closeModal()" id="up" class="navbutton cornerfix">X</a>
<div class="overlaycontent">
<div id="overlayimportedcontent" class="grid-overlay-container">
<!-- Content gets imported here on load -->
</div>
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
<div class="grid-container grid-single">
<div class="grid-overlay-container four">
<div class="overlay-left social">
<h2><a href="https://twitter.com/brianlaclair" target="_blank" class="contact"><i class="fa-brands fa-twitter"></i></a></h2>
</div>
<div class="overlay-mid social">
<h2><a onclick="emailToggle()" class="contact"><i class="fa-solid fa-at"></i></a></h2>
</div>
<div class="overlay-mid social">
<h2><a class="contact"><i class="fab fa-discord"></i></a></h2>
</div>
<div class="overlay-right social">
<h2><a href="" class="contact"><i class="fa-brands fa-github"></i></a></h2>
</div>
</div>
<div id="contact-form" class="email">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor, enim sed facilisis ultrices, purus justo condimentum lectus, ut imperdiet sapien nisl quis lorem. Donec tincidunt lectus sit amet leo volutpat, tincidunt pellentesque nisi feugiat. Etiam sapien sem, rutrum interdum blandit at, cursus non ex. Aliquam eros velit, ornare in placerat vel, pulvinar nec dui. Suspendisse pharetra rutrum turpis et euismod. Suspendisse euismod finibus justo, sit amet sagittis felis molestie ut. Morbi et ex eros. Pellentesque quis tincidunt magna. Suspendisse non tellus nec odio dapibus elementum ut nec lorem. Integer quam sapien, maximus vel faucibus non, ornare a nibh.

Sed quis iaculis lectus. Sed felis erat, dictum sed mattis sodales, malesuada viverra tortor. Vivamus a faucibus est, eu ultrices magna. In sit amet vestibulum lectus, vel ultrices neque. Aliquam erat volutpat. Suspendisse eget quam purus. Curabitur sollicitudin at purus in aliquam. Aenean condimentum pretium sapien eu pellentesque. Pellentesque vitae efficitur orci. Maecenas faucibus elementum aliquam. Sed varius cursus turpis, vitae finibus leo dictum at. Duis vel sem nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam eu nunc in sem consequat commodo.</div>
<p>Brian discovered his passion for programming at a young age with an old computer and a copy of QBASIC</p><p>Over 15 years later, he works daily designing and developing websites, games, mobile apps, and open-source libraries in a multitude of languages</p><p>When he's not coding, you can find Brian spending time with his friends at local concerts or hanging out with his dogs, cat, or guinea pigs</p>
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
var mainContent		= document.getElementById("main");

// Setup of email form magic
var emailForm 		= document.getElementById("contact-form");
var	emailToggled	= false;

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

function loadOverlayContent(id) {
	$.ajax("projects/project.php?id=" + id, {
    success: function(response) {
      $("#overlayimportedcontent").html(response);
    }
  }); 
}

function emailToggle() {
	if (emailToggled) {
		emailForm.style.height = 0;
		emailToggled = false;
	} else {
		emailForm.style.height = 300;
		emailToggled = true;
	}
}

function openModal(id) {
	
	// Prevent scrolling
	root.className = 'noscroll';
	
	// Blur the page behind the overlay for a "glassy" effect
	mainContent.classList.add("mainblur");
	header.classList.add("mainblur");
	
	// Show the overlay
	overlay.classList.add("showoverlay");
	overlay.classList.remove("hideoverlay");
	overlay.classList.remove("hiddenstart");
	
	//Load in the content
	loadOverlayContent(id);
	
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