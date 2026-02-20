<?php


// Load Composer's autoloader
require 'vendor/autoload.php';

use Respect\Validation\Validator as v;


if (!empty($_POST) && isset($_POST['action']) && $_POST['action'] === 'contact-form') {
    header('Content-type: application/json; charset=utf-8');

    $safe = array_map('trim', array_map('strip_tags', $_POST));

    $contact_errors = [

        (!v::notEmpty()->length(5, 50)->validate($safe['contact_name'])) ? 'Le champ "nom" doit contenir minimum 5 caractères.' : null,

        (!v::notEmpty()->email()->validate($safe['contact_email'])) ? 'Veuillez saisir une adresse "e-mail" valide.' : null,

        (!v::notEmpty()->length(15, 750)->validate($safe['contact_message'])) ? 'Votre message doit faire minimum 15 caractères.' : null,
    ];

    $contact_errors = array_filter($contact_errors);


    if (count($contact_errors) === 0) {

        require 'inc/sendMail.php';

    } else {
        $json = [
            'status' => 'error',
            'message' => implode('<br>', $contact_errors),
        ];
        echo json_encode($json);
    }
}
