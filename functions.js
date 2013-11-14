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
});

/* SLUTT PÅ FUNKSJONER UTELIV */
