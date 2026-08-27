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
    document.querySelectorAll('#portfolio .project-preview img').forEach(function (img) {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', function () {
            var modal = document.getElementById('previewModal');
            document.getElementById('previewModalImg').src = this.src;
            document.getElementById('previewModalImg').alt = this.alt;
            document.getElementById('previewModalImg').style.display = '';
            document.getElementById('previewModalIframe').src = '';
            document.getElementById('previewModalVideoWrap').style.display = 'none';
            new bootstrap.Modal(modal).show();
        });
    });

    // Modale vidéo YouTube
    document.querySelectorAll('.open-video-modal').forEach(function (link) {
        link.addEventListener('click', function () {
            document.getElementById('previewModalImg').style.display = 'none';
            document.getElementById('previewModalIframe').src = this.dataset.video;
            document.getElementById('previewModalVideoWrap').style.display = '';
            new bootstrap.Modal(document.getElementById('previewModal')).show();
        });
    });

    // Stopper la vidéo à la fermeture de la modale
    document.getElementById('previewModal').addEventListener('hidden.bs.modal', function () {
        document.getElementById('previewModalIframe').src = '';
        document.getElementById('previewModalVideoWrap').style.display = 'none';
        document.getElementById('previewModalImg').style.display = '';
    });

    // Infobulles Bootstrap
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));

})
