<?php
require 'db.php';
skrypt4();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <section id="s1">
        <img src="logo1.png" alt="Moj kalendarz">
    </section>
    <section id="s2">
            <h1>Kalendarz</h1>
            <?php
            skrypt1();
            ?>
    </section>
    <main>
        <?php
        skrypt2();
        ?>
    
    </main>
    <footer>
        <form method="post">
            <label for="text">Dodaj wpis</label>
            <input type="text" name="text">
            <br>
            <input type="submit" value="dodaj">
        </form>
        <p>Stronę wykonał:189146124990</p>
    </footer>
    
</body>
</html>