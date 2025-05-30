<?php
include_once("../config/database/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $foto = $_POST['foto'];
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $partido = $_POST['partido'];

    $sql = "INSERT INTO candidatos (foto, nome, numero, partido) VALUES ('$foto', '$nome', '$numero', '$partido')";

    $con->query($sql);
    header("Location: ../index.php");
    exit();

}
?>