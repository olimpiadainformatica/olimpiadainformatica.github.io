function openpopup(popUp){
	document.getElementById(popUp).style.setProperty("display", "block");
	document.getElementById("pop-up-background").style.setProperty("display", "block");
}

function closepopup(popUp){
	document.getElementById(popUp).style.setProperty("display", "none");
	document.getElementById("pop-up-background").style.setProperty("display", "none");
}
