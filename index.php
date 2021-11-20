<!DOCTYPE html>
<HTML>
<!-- Hey! Truly overjoyed that you're taking the time to look at my portfolio's source! I wrote it myself and all that. It uses Javascript and PHP to automatically load content and make it easy for me to update things here. If you want, I have the entire source on my github, feel free to use it for your own website! -->
<HEAD>
<link rel="stylesheet" href="style.css">

<script src="//code.jquery.com/jquery-3.6.0.js"></script>
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
<div class="grid-container backdrop">
<div class="left">
<img src="assets/me.jpg" class="portrait"/>
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

<div class="grid-container grid-cont-tight backdrop">
<?php include("projects/listProjects.php"); ?>
</div>

</div>

<div id="contact" class="section">
<div class="title">
<h2>contact me</h2>
</div>
<div class="grid-container grid-single backdrop">
<p>Brian discovered his passion for programming at a young age with an old computer and a copy of QBASIC</p><p>Over 15 years later, he works daily designing and developing websites, games, mobile apps, and open-source libraries in a multitude of languages</p><p>When he's not coding, you can find Brian spending time with his friends at local concerts or hanging out with his dogs, cat, or guinea pigs</p>
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
