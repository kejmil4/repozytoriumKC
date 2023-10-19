<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<?php
    include './partials/function.php';
    echo podaj_naglowek("Kontakt", 1)
?>
    <form>
        <input type="text" name="info"><br>
        <input type="submit" value="Wyślij" id="btn"><br>


    </form>

<?php
require './partials/nav.php';
include './partials/footer.php';
?>

</body>
<script>
    btn.addEventListener("click", ()=>
    {
        alert("Nie można wysłać formlularza!")
    })

</script>
</html>
