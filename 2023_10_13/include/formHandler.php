<?php 

if (!isset($_POST['submit'])) {
    header('Location: ../'); //wyslanie naglowka do przegladarki

    die; //ubicie kodu
}

if (!isset($_POST['email'], $_POST['message'])) {
    header('Location: ../contact.php?error=1');

    die;
}

$email = $_POST['email'];
$message = $_POST['message'];

if (empty($email) || empty($message)) {
    header ("Location: ../contact.php?error=2");

    die;
}

if(strlen($message) < 20) {
    header('Location: ../contact.php?error=3');

    die;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../contact.php?error=4');

    die;
}

//TODO: save to database

header('Location: ../contact.php?success=1');