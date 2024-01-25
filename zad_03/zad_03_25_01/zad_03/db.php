<?php

$conn = new mysqli(
    "127.0.0.1",
    "root",
    "",
    "egzamin5",
    3306
);
function skrypt1(){
    global $conn;
    $sql_1 = "SELECT miesiac,rok FROM zadania WHERE dataZadania = '2020-07-01'" ;
    $result = mysqli_query($conn, $sql_1);
    while ($row = $result->fetch_assoc()) {
        echo "miesiac:". $row['miesiac']. ", rok" . $row['rok'];
    }
    $result->free_result();
};

function skrypt2(){
    global $conn;
    $sql_2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec'" ;
    $result = mysqli_query($conn, $sql_2);
    while ($row = $result->fetch_assoc()) {
        echo "<section class='dni'><h5>".$row['dataZadania']."</h5><p>". $row['wpis']. "</section>";
    
    }
    $result->free_result();
};

function skrypt3(){
    global $conn;
    $sql_3 = "SELECT DISTINCT miesiac FROM zadania WHERE miesiac LIKE 'L%'";
    $result = mysqli_query($conn, $sql_3);
    $result->free_result();


};
function skrypt4(){
    global $conn;
    $wpis = $_POST['text'];
    $sql_3 = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13'";
    mysqli_query($conn, $sql_3);
    

};



 



?>