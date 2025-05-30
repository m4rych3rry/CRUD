<?php
include_once("../config/database/database.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Incrementa 1 voto
    $sql = "UPDATE candidatos SET votos = votos + 1 WHERE id = $id";
    if ($con->query($sql)) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao votar: " . $con->error;
    }
} else {
    echo "ID inválido.";
}
?>