$(document).ready(function () {

    $("#about, #resume, #portfolio, #contact").hide();


    $("#home_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact").fadeOut(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i").css("color", "#fff");
        $("#home_button i").css("color", "#00A3E1").css("transition", "1s");
        
    });
    
    $("#about_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact").fadeOut(500);
        $("#about").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i").css("color", "#fff");
        $("#about_button i").css("color", "#00A3E1").css("transition", "1s");
    });
    
    $("#resume_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact").fadeOut(500);
        $("#resume").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i").css("color", "#fff");
        $("#resume_button i").css("color", "#00A3E1").css("transition", "1s");
    });
    
    $("#portfolio_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact").fadeOut(500);
        $("#portfolio").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i").css("color", "#fff");
        $("#portfolio_button i").css("color", "#00A3E1").css("transition", "1s");
    });
    
    $("#contact_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact").fadeOut(500);
        $("#contact").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i").css("color", "#fff");
        $("#contact_button i").css("color", "#00A3E1").css("transition", "1s");
    });

	// Infobulle
	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  	tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));


})