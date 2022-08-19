<?php

include 'redirect.php';
include_once 'conf.php';

$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $nev = $_POST["nev"];
    $email = $_POST["email"];
    $telefonszam = $_POST["telefonszam"];
    $tb_szam = $_POST["tb_szam"];
    $utasok_szama = $_POST["utasok_szama"];
    $plusz_agy = $_POST["plusz_agy"];
    $idegenvezetes = $_POST["idegenvezetes"];
    $utasbiztositas = $_POST["utasbiztositas"];
    $egyeb = $_POST["egyeb"];

    $sql = "INSERT INTO `foglalas`.`utas` (`nev`,`email`,`telefonszam`,`tb_szam`,`utasok_szama`,`plusz_agy`,`idegenvezetes`,`utasbiztositas`,`egyeb`)
		VALUES ('$nev','$email','$telefonszam','$tb_szam','$utasok_szama','$plusz_agy','$idegenvezetes','$utasbiztositas','$egyeb')";
    if (mysqli_query($conn, $sql)) {
        echo "sikeres";
    } else {
        echo "hiba " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
//vizsgamunka