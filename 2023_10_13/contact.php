<?php
$title = 'Kontakt';
$activePage = 'contact';
require_once './include/functions.php';

$error_message = null;

if(isset($_GET['error'])) {
    $error = $_GET['error'];
    /*
    switch ($error) {
        case '1':
            $error_message = "W formularzu brakuje danych";
            break;
        case '2':
            $error_message = "Adres email/treść nie mogą być puste";
            break;
        case '3':
            $error_message = "Wiadomość musi mieć minumum 20 znaków";
            break;
        case '4':
            $error_message = "Niepoprawny adres email";
            break;
    }
    */ 
    $error_message = match($error) {
        '1' => "W formularzu brakuje danych",
        '2' => "Adres email/treść nie mogą być puste",
        '3' => "Wiadomość musi mieć minumum 20 znaków",
        '4' => "Niepoprawny adres email",
        default => null
    };
}
?>
<!doctype html>
<html lang="pl">
<?php
require_once './include/head.php';
?>
<body>
<div class="container-fluid p-0">
    <?php
    require_once './include/nav.php'
    ?>
    <div class="container py-5">
        <?php
        echo renderHeader($title, 1);

        if(isset($_GET['success'])):
        ?>
        <div class="mb-3">
            <div class="alert alert-success">
                Twoja wiadomość została wysłana
            </div>
        </div>
        <?php
        else:
        ?>

        <form id="contact-form" method="post" action="./include/formHandler.php">
            <?php
            if ($error_message):
            ?>

            <div class="mb-3">
                <div class="alert alert-danger">
                    <?= $error_message ?> <!--- zapis alternatywny dla echo $error_message --->
                </div>
            </div>

            <?php
            endif;
            ?>
            
            <div class="mb-3">
                <label for="email" class="form-label">Adres e-mail</label>
                <input type="email" class="form-control" id="email" name="email" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Wiadomość</label>
                <textarea name="message" id="message" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Wyślij</button>
        </form>
        <?php
        endif;
        ?>
    </div>
    <?php
    require_once './include/footer.php'
    ?>
</div>
<!--<script src="./public/js/preventContact.js"></script>-->
</body>
</html>
