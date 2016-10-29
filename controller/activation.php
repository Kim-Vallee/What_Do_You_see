<?php include_once '/model/get_users.php'; ?>


<!DOCTYPE html>
<head>
<?php include_once 'view/head.html'; ?>
</head>

<?php
if (isset($_GET['email']) and isset($_GET['hash'])) {
    if (!empty($_GET['email']) and !empty($_GET['hash'])) {
        if (get_users($_GET['email'], $_GET['hash'])) {
            ?>
            <p class="verified" > Account successfully activated, heading to login page </p>
            <?php 
            header('refresh:5;url=index.php');
        } else {
            ?>
            <p class="error" > Something went wrong, heading back to the main menu </p>
            <?php
            header('refresh:5;url=index.php');
        }
    }
}

include_once 'view/menu.html';
