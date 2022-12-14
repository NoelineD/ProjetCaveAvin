<?php
session_start();

$vue='home';

if (!empty($_GET)){
    $entite = filter_input(INPUT_GET, 'entite', FILTER_SANITIZE_SPECIAL_CHARS);
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
// test sur quelle entite on veut travailler
switch ($entite) {
    case 'user':
        // appel du sous contrôleur de l'entite user
        include 'controller/controlUser.php';
        break;
        default:
        
        break;
    }
}
include 'view/template.php';