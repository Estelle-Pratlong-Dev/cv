$(document).ready(function () {

    const $sections = $("#about, #resume, #portfolio");
    const $footer = $("#footer");
    const $navIcons = $("#home_button i, #about_button i, #resume_button i, #portfolio_button i");

    $sections.hide();
    $footer.hide();

    function activateNav(btnId) {
        $navIcons.css("color", "#fff");
        $("#" + btnId + " i").css({ "color": "#00A3E1", "transition": "1s" });
    }

    function showSection($section, btnId) {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $sections.fadeOut(400);
        $footer.fadeOut(400);
        $section.delay(400).fadeIn(400);
        $footer.delay(400).css("display", "flex").hide().fadeIn(400);
        activateNav(btnId);
    }

    $("#home_button").on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        $sections.fadeOut(500);
        $footer.fadeOut(500);
        activateNav('home_button');
    });

    $("#about_button").on("click", function () {
        showSection($("#about"), 'about_button');
    });

    $("#resume_button").on("click", function () {
        showSection($("#resume"), 'resume_button');
    });

    $("#portfolio_button").on("click", function () {
        showSection($("#portfolio"), 'portfolio_button');
    });

    // Modale aperçu projet (image)
    $('#portfolio .project-preview img').css('cursor', 'zoom-in').on('click', function () {
        $('#previewModalImg').attr({ src: $(this).attr('src'), alt: $(this).attr('alt') }).show();
        $('#previewModalIframe').attr('src', '');
        $('#previewModalVideoWrap').hide();
        new bootstrap.Modal($('#previewModal')[0]).show();
    });

    // Modale vidéo YouTube
    $('.open-video-modal').on('click', function () {
        $('#previewModalImg').hide();
        $('#previewModalIframe').attr('src', $(this).data('video'));
        $('#previewModalVideoWrap').show();
        new bootstrap.Modal($('#previewModal')[0]).show();
    });

    // Stopper la vidéo à la fermeture de la modale
    $('#previewModal').on('hidden.bs.modal', function () {
        $('#previewModalIframe').attr('src', '');
        $('#previewModalVideoWrap').hide();
        $('#previewModalImg').show();
    });

    // Infobulles Bootstrap
    $('[data-bs-toggle="tooltip"]').each(function () {
        new bootstrap.Tooltip(this);
    });

})
