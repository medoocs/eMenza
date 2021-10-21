var today = new Date().getHours();

//menza 1
if (today >= 7 && today <= 19) {
   document.getElementById("radnoVrijeme1").innerHTML = "OTVORENO";
   document.getElementById("radnoVrijeme1").style.color = "green";	
} else {
    document.getElementById("radnoVrijeme1").innerHTML = "ZATVORENO";
	document.getElementById("radnoVrijeme1").style.color = "red";
	
}


//menza 2
if (today >= 7 && today <= 19) {
   document.getElementById("radnoVrijeme2").innerHTML = "OTVORENO";
   document.getElementById("radnoVrijeme2").style.color = "green";	
} else {
    document.getElementById("radnoVrijeme2").innerHTML = "ZATVORENO";
	document.getElementById("radnoVrijeme2").style.color = "red";
	
}


//menza 3
if (today >= 7 && today <= 19) {
   document.getElementById("radnoVrijeme3").innerHTML = "OTVORENO";
   document.getElementById("radnoVrijeme3").style.color = "green";	
} else {
    document.getElementById("radnoVrijeme3").innerHTML = "ZATVORENO";
	document.getElementById("radnoVrijeme3").style.color = "red";
	
}