/* FUNKSJONER TIL UTELIV */

// Start "programmet" når dokumentet er klart
$(document).ready(function(){
	// Når en link med klassen funker blir trykket på
	$(".lesMer").click(function(e){
		// Forhindrer normal oppførsel ved klikk
		e.preventDefault();
		$("#"+$(this).data("target")).fadeIn('slow');
	});

	// Når noen trykker på X/lukkeknapp
	$(".close_button").click(function(e){
		// Forhindrer normal oppførsel ved klikk
		e.preventDefault();
		$($(this).parent()).fadeOut('fast');
	});

	$(".comments").click(function(e){
		// Forhindrer normal oppførsel ved klikk
		e.preventDefault();
		$("#"+$(this).data("target")).fadeIn('slow');
	});
	
/* SLUTT PÅ FUNKSJONER UTELIV */	
	



// FUNKSJONER EASTERGG

	// Når easteregget blir trigget
	$("#egg").click(function(e){
		// Forhindrer normal oppførsel ved klikk
		e.preventDefault();
		egghide.style.display="none";
		$(".pins").fadeIn(1);
		

	});
		
	for (var i=0;i<10;i++)
    {
 	
	$("#hitpin"+ i).click(function(e){
		// Forhindrer normal oppførsel ved klikk
		e.preventDefault();
		$(this).fadeOut(1);

		});}
	
});



var h = 0;
var countStop = true;

function kjegler(){
	if (!countStop)
	return;	
	h++
}

 var funcCanBeCalled = true;

function Timer(){
	if (!funcCanBeCalled)
	return;
	setTimeout(function(){gameEnd()}, 5000);
	startClock();
	funcCanBeCalled= false;
}

	
function gameEnd(){
	    countStop = false;
 		setTimeout(function(){
		if (h == 0){
			alert("Du bommet på alle kjeglene!");
			}
		else if (h < 10){
			alert("Du veltet " + h + " av 10 kjegler!");
			}
		else{
			alert("STRIKE!!!");
			}
		window.location.reload();}, 150);
		
}


var smallsec = 99;
var sec = 4;

function startClock() {
	clock = setInterval("stopWatch()", 10);
}

function stopWatch() {
    smallsec--;
  	if (smallsec < 10){
  		smallsec = "0" + smallsec
  		}
    if (smallsec == 0){
    	smallsec = 99;
    	sec--;
    	}
    if (sec == -1) {
		stopClock();
    	}
    document.getElementById("klokka").innerHTML = sec + "." +  smallsec;
}

function stopClock() {
    window.clearInterval(clock);
    sec = 0;
    smallsec = "00";
    document.getElementById("klokka").innerHTML=5;
    
}

//SLUTT PÅ FUNKSJONER EASTEREGG
