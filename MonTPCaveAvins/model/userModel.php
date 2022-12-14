<?php

require 'dao/dao.php';

function verifUser(){
    global $erreur;
    global $email;

    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
// si email valide bien un email et correspond a ce que j'ai tapé alors met moi le nom prenom role sinon affiche erreur de mdp, ou login
    if ($email) {
        $user = getUserByEmail($email);

        if($user){
            if (password_verify($password,$user['password'])){
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['role'] = $user['role'];
            }
            $erreur = 'Le mot de passe n\'est pas valide';
        } else {
        $erreur= 'le login n\'est pas valide';
        }
    } else {
        $erreur= 'Vous devez rentrer un email valide';
}
    }

function createUser(){
    $nom = filter_input(INPUT_POST,'nom',FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST,'prenom',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);

    $password= password_hash($password, PASSWORD_DEFAULT);

    setUser ($email, $password, $prenom, $nom);
}