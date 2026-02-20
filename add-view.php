<?php

require 'inc/connexion.php';

// Load Composer's autoloader
require 'vendor/autoload.php';

use Respect\Validation\Validator as v;


if (!empty($_POST) && isset($_POST['action']) && $_POST['action'] === 'view-form') {
    header('Content-type: application/json; charset=utf-8');

    $safe = array_map('trim', array_map('strip_tags', $_POST));

    $view_errors = [

        (!v::notEmpty()->length(3, 50)->validate($safe['view_name'])) ? 'Le champ "nom" doit contenir minimum 3 caractères.' : null,

        (!v::notEmpty()->length(5, 50)->validate($safe['view_function'])) ? 'Votre métier doit comporter au moins 5 caractères' : null,

        (!v::notEmpty()->length(15, 750)->validate($safe['view_message'])) ? 'Votre message doit faire minimum 15 caractères.' : null,
    ];

    $view_errors = array_filter($view_errors);


    if (count($view_errors) === 0) {

        // Préparation de la requete
        $rq =  $pdo->prepare('INSERT INTO view (name, function, message) VALUES (:name, :function, :message)');

        $params = [
            ':name'           => $safe['view_name'],
            ':function'          => $safe['view_function'],
            ':message'        => $safe['view_message'],
        ];

        if ($rq->execute($params)) {
            $success = true;
            $json = [
                'status' => 'add',
                'message' => 'Merci d\'avoir donné votre avis.',
            ];
            echo json_encode($json);
        }
    } else {
        $json = [
            'status' => 'view_error',
            'message' => implode('<br>', $view_errors),
        ];
        echo json_encode($json);
    }
}
