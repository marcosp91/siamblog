window.onscroll = function() {scrollFunction()};

function scrollFunction() {

	if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
	  document.getElementById("navbar").style.display = "block";
	  document.getElementById("nav1").style.display = "none";
	} else {
		document.getElementById("nav1").style.display = "block";
	  	document.getElementById("navbar").style.display = "none";
	}
}
