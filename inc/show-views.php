<?php

require 'inc/connexion.php';


$request = $pdo->prepare('SELECT * FROM view');
$request->execute();
$views = $request->fetchAll(); // FETCH ALL puisque plusieurs lignes





