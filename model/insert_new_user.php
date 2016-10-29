<?php

    include_once 'model/functions.php';

    function($pseudo,$pass,$mail){

    $bdd = connect();
    $hash = md5(rand());

    $req = $bdd->prepare('INSERT INTO users(pseudo, password, email, hash) VALUES(:pseudo, :password, :email, :hash)');
    $req->execute(array(
        'pseudo' => $pseudo,
        'password' => md5($pass),
        'email' => mysql_escape_string($email),
        'hash' => $hash,
    ));

    // Message
    $message = 'You have successfully registered to What Do You See! \n Please confirm your account with the following link: \n http://whatdoyousee.net23.net/activation.php?email='.mysql_escape_string($_POST['email']).'&hash='.$_POST['hash'].'';

    // If more than 70 words a line
    $message = wordwrap($message, 70, "\r\n");

    // sending mail
    mail(mysql_escape_string($_POST['email']), 'Activation link', $message);
}