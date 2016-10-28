<?php

    include_once 'functions.php';

    $bdd = connect();
    $hash = md5(rand());

    $req = $bdd->prepare('INSERT INTO users(pseudo, password, email, hash) VALUES(:pseudo, :password, :email, :hash)');
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],
        'password' => md5($_POST['password']),
        'email' => mysql_escape_string($_POST['email']),
        'hash' => $hash,
    ));

    // Message
    $message = 'You have successfully registered to What Do You See! \n Please confirm your account with the following link: \n http://whatdoyousee.net23.net/activation.php?email='.mysql_escape_string($_POST['email']).'&hash='.$_POST['hash'].'';

    // If more than 70 words a line
    $message = wordwrap($message, 70, "\r\n");

    // sending mail
    mail(mysql_escape_string($_POST['email']), 'Activation link', $message);

    $successful = true;
