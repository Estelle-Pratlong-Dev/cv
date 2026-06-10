$(document).ready(function () {

    $("#about, #resume, #portfolio, #contact, #add-view").hide();


    $("#home_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact, #add-view").fadeOut(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i, #add-view_button i").css("color", "#fff");
        $("#home_button i").css("color", "#00A3E1").css("transition", "1s");
        
    });
    
    
    $("#about_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact, #add-view").fadeOut(500);
        $("#about").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i, #add-view_button i").css("color", "#fff");
        $("#about_button i").css("color", "#00A3E1").css("transition", "1s");
    });
    
    $("#resume_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact, #add-view").fadeOut(500);
        $("#resume").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i, #add-view_button i").css("color", "#fff");
        $("#resume_button i").css("color", "#00A3E1").css("transition", "1s");
    });
    
    $("#portfolio_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact, #add-view").fadeOut(500);
        $("#portfolio").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i, #add-view_button i").css("color", "#fff");
        $("#portfolio_button i").css("color", "#00A3E1").css("transition", "1s");
    });
    
    $("#contact_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact, #add-view").fadeOut(500);
        $("#contact").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i, #add-view_button i").css("color", "#fff");
        $("#contact_button i").css("color", "#00A3E1").css("transition", "1s");
    });
    
    $("#add-view_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $("#about, #resume, #portfolio, #contact, #add-view").fadeOut(500);
        $("#add-view").delay(500).fadeIn(500);
        $("#home_button i, #about_button i, #resume_button i, #portfolio_button i, #contact_button i, #add-view_button i").css("color", "#fff");
        $("#add-view_button i").css("color", "#00A3E1").css("transition", "3s");
    });




    // Affichage des erreurs du fomulaire de contact

    $('#contact form').submit(function (e) {
        e.preventDefault();
        var form = $(this);

        $.post('verifForm.php', form.serialize(), function (json) {

            if (json.status === 'success') {
                $('#contact').show();

                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Message envoyé',
                    showConfirmButton: false,
                    timer: 1500
                });

                $('#msg').html('<div style="color:green">' + json.message + '</div>');

            } else if (json.status === 'error') {
                $('#contact').show();
                $('#msg').html('<div style="color:red">' + json.message + '</div>');
            }

        }).fail(function () {
            $('#contact').show();
            $('#msg').html('<div style="color:red">Une erreur est survenue, veuillez réessayer.</div>');
        });
    });


    // Affichage des erreurs du fomulaire d'ajout d'avis

    $('#add-view form').submit(function (e) {
        e.preventDefault();
        var form = $(this);

        $.post('add-view.php', form.serialize(), function (json) {

            if (json.status === 'add') {
                $('#add-view').show();

                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Avis envoyé',
                    showConfirmButton: false,
                    timer: 1500
                });

                $('#msg-view').html('<div style="color:green">' + json.message + '</div>');

            } else if (json.status === 'view_error') {
                $('#add-view').show();
                $('#msg-view').html('<div style="color:red">' + json.message + '</div>');
            }

        }).fail(function () {
            $('#add-view').show();
            $('#msg-view').html('<div style="color:red">Une erreur est survenue, veuillez réessayer.</div>');
        });
    });

	// Infobulle
	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  	tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));


})