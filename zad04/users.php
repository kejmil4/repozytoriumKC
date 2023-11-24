<?php

$conn = new mysqli(
    '127.0.0.1',
    'root',
    '',
    'dane4',
    3306
);

//if ($conn->connect_ernno) {
//    echo "Błąd połączenia" . $conn->connect_ernno;
//   die;
//};

function GetList() {
    global $conn;
    
    $sql = "SELECT id, imie, nazwisko, rok_urodzenia FROM osoby limit 30";
    
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<br>";
        echo $row["id"] . "." . $row["imie"]. $row["nazwisko"]. ", ". (date("Y")-$row["rok_urodzenia"]). "lat!";
        
    }
    
    
}

$id = $_POST["number"];

function GetID($id) {
    global $conn;

    $sql = sprintf(
        "SELECT o.imie,o.nazwisko,o.rok_urodzenia,o.opis,o.zdjecie,h.nazwa FROM 'osoby' o JOIN hobby h ON o.Hobby_id = h.id WHERE o.id = $id"
        
    );
    
    $result -> conn->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo "<br>";
        echo "<h2>" . $row['id'] . "</h2>";
        
    }


};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css"> 
</head>
<body>
    <header>
        <h3>Portal Społecznościowy - panel administratora</h3>
    </header>
    <main>
        <section>
            <h4>Użytkownicy</h4>
            <?php
            GetList();
            ?>
            <a href="settings.html">Inne ustawienia</a>
            
        </section>  
        <section>
            <h4>Podaj id użytkownika</h4>
            <form method="post">
                <input type="number" name="number"><br>
                <button name="submit">ZOBACZ</button>
                <hr>
                <?php
                if (isset($_POST["submit"])) {
                    GetID();
                };
                ?>
        </section>
    </main>
    
    <footer>
        <p>Stronę wykonał: 00000000</p>
    </footer>
</body>
</html>