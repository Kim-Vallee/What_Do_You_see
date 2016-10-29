<?php

include_once 'model/functions.php';

if (isset($_POST['SubmitButton'])) {
    $errPass = $errMail = $errPseudo = $errEmpty = null;
    $err = false;

    if (empty($_POST['password']) or empty($_POST['reppassword']) or empty($_POST['email']) or empty($_POST['pseudo'])) {
        $errEmpty = 'Please fill all the required fields';
        $err = true;
    }

    if ($_POST['password'] != $_POST['reppassword']) {
        $errPass = "Your passwords doesn't correspond";
        $err = true;
    } elseif (strlen($_POST['password']) < 8) {
        $errPass = 'Your password must be more than 8 characters long';
        $err = true;
    }
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$", $_POST['email'])) {
        $errMail = 'Please enter a valid email';
        $err = true;
    }
    if (!eregi('^[A-Za-z][A-Za-z0-9_]{2,14}$', $_POST['pseudo'])) {
        $errPseudo = 'Pseudo must contain between 3 and 15 characters, composed with only letters and numbers';
    }

    $bdd = connect();

    $checkPseudo = $bdd->query("SELECT pseudo FROM users WHERE pseudo = '".mysql_escape_string($_POST['pseudo'])."' ");
    $state = $checkPseudo->rowCount();
    if ($state > 0) {
        $errPseudo = 'Pseudo already in use';
        $err = true;
    }

    $checkMail = $bdd->query("SELECT email FROM users WHERE email = '".mysql_escape_string($_POST['email'])."' ");
    $state = $checkMail->rowCount();
    if ($state > 0) {
        $errMail = 'Email already used';
        $err = true;
    }
}
