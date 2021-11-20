// Get root element
var root = document.documentElement;

// Setup for nav sticking
var header 		  	= document.getElementById("nav");
var hiddenbut 	  	= document.getElementById("goup");
var titleDiv 	  	= document.getElementById("topsection");

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
        main.classList.add("navMod");
        
  } else {
        header.classList.remove("stickytop");
		hiddenbut.classList.add("invisi");
        main.classList.remove("navMod");
  }

}

function loadOverlayContent(id) {
	$.ajax("projects/project.php?id=" + id, {
    success: function(response) {
      $("#overlayimportedcontent").html(response);
    }
  });
}

function sendMessage() {

    var emailName       = document.getElementById('ename').value;
    var emailReturn     = document.getElementById('eaddress').value;
    var emailMessage    = document.getElementById('emessage').value;

	  var origText				= document.getElementById('sendEmail').innerHTML;

		document.getElementById('sendEmail').innerHTML = '<i class="fas fa-spinner spinner"></i>';

		// We're going to give this a little wait before executing, to make it feel like it's doing something - sometimes it just sends the email too fast
		setTimeout(function(){
			if (isBlank(emailName) || isBlank(emailReturn) || isBlank(emailMessage)) {
	        var formArea        = document.getElementById('emailslide');
	        formArea.innerHTML  = "<h5>Please fill out every field</h5>" + formArea.innerHTML;
					document.getElementById('sendEmail').innerHTML = origText;
	    } else {
	            // Email it off
	        	$.post( "contact.php",
	            { name: emailName, email: emailReturn, emailMessage: emailMessage })
	                .done(function(response) {
	                $("#emailslide").html(response);
	                });
	    }
		}, 500);
}

function isBlank(str){
    return (!!!str || /^\s*$/.test(str));
}

function emailToggle() {
	if (emailToggled) {
		emailForm.style.height = 0;
		emailToggled = false;
	} else {
		emailForm.style.height = "100%";
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
