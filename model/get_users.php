<?php


include_once 'model/function.php';

function get_users($email, $hash)
{
    $email = mysql_escape_string($email);
    $hash = mysql_escape_string($hash);

    $bdd = connect();
    $sql = $bdd->query("SELECT email,hash FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0' ");
    $match = $sql->rowCount();
    if ($match == 1) {
        $bdd->exec("UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0' ");

        return true;
    } else {
        return false;
    }
}
