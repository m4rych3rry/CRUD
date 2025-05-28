<?php
include_once("../config/database/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $partido = $_POST['partido'];

    $sql = "INSERT INTO candidatos (nome, numero, partido) VALUES ('$nome', '$numero', '$partido')";

    $con->query($sql);
    header("Location: ../index.php");
    exit();

}
?>