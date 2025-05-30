<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once("../config/database/database.php");

// Verifica se o ID existe
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID inválido");
}

$id = (int) $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $foto = $_POST['foto'];
    $nome = $_POST['nome'];
    $numero = $_POST['numero'];
    $partido = $_POST['partido'];

    $sql = "UPDATE candidatos SET 
                foto='$foto', 
                nome='$nome', 
                numero='$numero', 
                partido='$partido' 
            WHERE id=$id";

    if ($con->query($sql)) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $con->error;
    }
} else {
    // Buscar dados do candidato
    $sql = "SELECT * FROM candidatos WHERE id = $id";
    $res = $con->query($sql);

    if ($res->num_rows == 0) {
        die("Candidato não encontrado.");
    }

    $row = $res->fetch_assoc();
    $foto = $row['foto'];
    $nome = $row['nome'];
    $numero = $row['numero'];
    $partido = $row['partido'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Candidato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="container mt-5">
    <h1>Editar Candidato</h1>
    <form method="POST" action="editar.php?id=<?= $id ?>">
        <div class="mb-3">
            <label class="form-label">Foto (URL)</label>
            <input name="foto" type="url" class="form-control" value="<?= $foto ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" value="<?= $nome ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Número</label>
            <input name="numero" type="text" maxlength="5" class="form-control" value="<?= $numero ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Partido</label>
            <input name="partido" type="text" maxlength="40" class="form-control" value="<?= $partido ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="../index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>