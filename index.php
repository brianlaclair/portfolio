<!DOCTYPE html>
<HTML>
<!-- Hey! Truly overjoyed that you're taking the time to look at my portfolio's source! I wrote it myself and all that. It uses Javascript and PHP to automatically load content and make it easy for me to update things here. If you want, I have the entire source on my github, feel free to use it for your own website! -->
<HEAD>
<link rel="stylesheet" href="style.css">

<script src="//code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://kit.fontawesome.com/025c4715ea.js" crossorigin="anonymous"></script>
</HEAD>
<BODY>

<DIV id="imagePop" class="imageoverlay hideimage">
<a onclick="closeImage()" class="navbutton cornerfix white">X</a>
<div onclick="closeImage()" id="imageimportedcontent">
<!-- Content gets imported here on load -->
</div>
</div>


<DIV id="overlay" class="hiddenstart">
<a onclick="closeModal()" id="up" class="navbutton cornerfix black">X</a>
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
<div class="grid-container backdrop">
<div class="left">
<img src="assets/me.jpg" class="portrait"/>
</div>
<div class="right">
<?php echo file_get_contents("includes/aboutme.html"); ?>
</div>
</div>
</div>

<div id="work" class="section">

<div class="title">
<h2>my work</h2>
</div>

<div class="grid-container grid-cont-tight backdrop">
<?php include("projects/listProjects.php"); ?>
</div>

</div>

<div id="contact" class="section">
<div class="title">
<h2>contact me</h2>
</div>
<div class="grid-container grid-single backdrop">
<?php echo file_get_contents("includes/contacttext.html"); ?>
<div class="grid-overlay-container four">
<div class="overlay-left social">
<h2><a href="https://twitter.com/brianlaclair" target="_blank" class="contact"><i class="fa-brands fa-twitter"></i></a></h2>
</div>
<div class="overlay-mid social">
<h2><a onclick="emailToggle()" class="contact"><i class="fa-solid fa-at"></i></a></h2>
</div>
<div class="overlay-mid social">
<h2><a href="https://discordapp.com/users/190308016350822400" target="_blank" class="contact"><i class="fab fa-discord"></i></a></h2>
</div>
<div class="overlay-right social">
<h2><a href="https://github.com/brianlaclair" target="_blank" class="contact"><i class="fa-brands fa-github"></i></a></h2>
</div>
</div>
<div id="contact-form" class="email">
<div class="grid-overlay-container">
<div class="overlay-left"></div>
<div id="emailslide" class="overlay-mid emailbox">
<?php include("contact.php"); ?>
</div>
<div class="overlay-right"></div>
</div>
</div>
</div>
</div>

</div>
<script src="main.js"></script>
</BODY>
</HTML>
