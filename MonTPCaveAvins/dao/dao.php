<?php

$dbconnect = new PDO('mysql:host=localhost;dbname=caveavin;charset=UTF8','root','');

function getUserByEmail($email){
    global $dbconnect;

    $sql = 'SELECT * FROM user WHERE email=:email;';

    $userStatus = $dbconnect->prepare($sql);
    $userStatus->bindParam('email', $email);
    $userStatus->execute();

    if ($userStatus->rowCount() == 1){
        $user = $userStatus->fetch(PDO::FETCH_ASSOC);
        $userStatus = NULL;
        $dbconnect = NULL;
        return $user;
    } else {
        $userStatus = NULL;
        $dbconnect = NULL;
        return false;
    }
}

function setUser( $email, $password, $nom, $prenom){

    global $dbconnect;

    $sql ='INSERT INTO user VALUES (NULL,:email , \'client\',:password, :nom, :prenom)';
    $userStatus = $dbconnect->prepare($sql);
    $userStatus->bindParam(':nom', $nom);
    $userStatus->bindParam(':prenom', $prenom);
    $userStatus->bindParam(':email', $email);
    $userStatus->bindParam(':password', $password);
    $userStatus->execute();

}

