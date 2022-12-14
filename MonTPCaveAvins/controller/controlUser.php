<?php

switch ($action){
    case 'login':
        $vue= 'user/login';
        $email="";
        $erreur="";
        //remettre à 0 les valeurs?
        break;
    case 'verif':
        // vérification du formaulaire de login
        include 'model/userModel';
        $email = '';
        $erreur = '';
        // appel de la fonction de vérification des données de connexion
        verifUser();
        if (empty($_SESSION)) { // la connexion a échouée, rien en session
            // erreur d'authentification remettre la page pour se loger
            $vue = 'user/login';
         } else {
             // ok logger
             header('Location: index.php');  // demande de redirection au navigateur
             exit();
         }
         break;
    case 'create':
            // tet de la méthode http : get -> affichage du formaulaire, post ou get-> traitement des informations
        
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $vue = 'user/create';
         } else {
             include 'model/userModel.php';
                // appel de la fonction de création du user
            createUser();
                // retour sur la page de login
            $vue = 'user/login';
            $ident = '';
            $erreur = '';
            }
           
            break;
    default:
        
    break;
}