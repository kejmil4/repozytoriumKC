<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>About us</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<?php
require './partials/nav.php';
?>

<?php
    include './partials/function.php';
    echo podaj_naglowek("O nas", 1)
?>
    <p>Paragraf 1</p>
    <p>Paragraf 2</p>
<?php

include './partials/footer.php';
?>

</body>
</html>
