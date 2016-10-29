	<?php 
    $successful = false;
    if (isset($_POST['SubmitButton'])) {
        include_once 'model/error_handler.php';
        if (!$err) {
            include_once 'model/insert_new_user.php';
        }
    }
    ?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title> This is a php page </title>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<?php if (!$successful) {
        ?>
		<form action="<?php $_PHP_SELF ?>" method="POST">
			<?php if (isset($errEmpty)) {
            echo '<p class="error" > '.$errEmpty.' </p>';
        } ?>

			<label for="pseudo"> Name : </label>
			<input type="text" name="pseudo">
			<?php if (isset($errPseudo)) {
            echo '<p class="error" > '.$errPseudo.' </p>';
        } ?>

			<br />
			<label for="password"> Pass : </label>
			<input type="password" name="password">
			<?php if (isset($errPass)) {
            echo '<p class="error" > '.$errPass.' </p>';
        } ?>

			<br />
			<label for="reppassword"> Confirm pass : </label>
			<input type="password" name="reppassword">

			<br />
			<label for="email"> Email : </label>
			<input type="text" name="email">
			<?php if (isset($errMail)) {
            echo '<p class="error" > '.$errMail.' </p>';
        } ?>

			<br />
			<input type="submit" name="SubmitButton">
		</form>
		<?php 
    } else {
        echo '<p class="verified"> Registered successfully, returning to home page... </p>';
        header('refresh:3;url=index.php');
    } ?>

	</body>
	</html>