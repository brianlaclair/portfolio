<HTML>
<HEAD>
<link rel="stylesheet" href="style.css">
</HEAD>
<BODY>
<DIV id="overlay" class="hiddenstart"><a onclick="closeModal()" id="up" class="navbutton cornerfix">X</a>
<div class="overlaycontent">
<h2>Wolfpack Island</h2>
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
<p>Brian discovered his passion for programming at a young age with an old computer and a copy of QBASIC</p><p>Over 15 years later, he works daily designing and developing websites, games, mobile apps, and open-source libraries in a multitude of languages</p><p>When he's not coding, you can find Brian spending time with his friends at local concerts or hanging out with his dogs, cat, or guinea pigs</p>
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
// When the user scrolls the page, execute myFunction
window.onscroll   = function() {myFunction(); close();};

var scroll = 0;

// Get the header
var header 		  = document.getElementById("nav");
var hiddenbut 	  = document.getElementById("goup");

// Get the offset position of the navbar
var sticky 	= header.offsetTop;


function close() {
	scroll++;
	if (scroll > 50) {
		closeModal();
		scroll = 0;
	}
}

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stickytop");
	hiddenbut.classList.remove("invisi");
  } else {
    header.classList.remove("stickytop");
	hiddenbut.classList.add("invisi");
  }
}

function openModal() {
  var currentScroll = window.pageYOffset;
  scroll = 0;
  document.getElementById("overlay").classList.add("showoverlay");
  document.getElementById("overlay").classList.remove("hideoverlay");
  document.getElementById("overlay").classList.remove("hiddenstart");
}

function closeModal() {
   setTimeout(function() {
    document.getElementById("overlay").classList.add("hiddenstart");
  }, 300);
  document.getElementById("overlay").classList.remove("showoverlay");
  document.getElementById("overlay").classList.add("hideoverlay");
}
</script>
</BODY>
</HTML>