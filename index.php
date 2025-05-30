<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de Candidatos</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Tailwind CSS (se quiser continuar usando ambos) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="container bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Lista de Candidatos</h1>
        
        <body class="container bg-gray-100">
        <div class="container mx-auto p-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-plus-circle"></i>  
            Adicionar novo candidato
        </button>

        <form method="POST" action="actions/salvar.php">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo candidato</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <div class="mb-3 form-floating">
                      <input name="foto" type="url" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                      <label for="exampleFormControlInput1">Foto do candidato</label>
                    </div>
                  
                  <div class="mb-3 form-floating">
                      <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                      <label for="exampleFormControlInput1">Nome</label>
                    </div>
                    <div class="mb-3 form-floating">
                      <input name="numero" maxlength="5"  type="text" class="form-control" id="exampleFormControlInput2" placeholder="" required>
                      <label for="exampleFormControlInput2">Número</label>
                    </div>
                    <div class="mb-3 form-floating">
                      <input name="partido" maxlength="40" type="text" class="form-control" id="exampleFormControlInput3" placeholder="" required>
                      <label for="exampleFormControlInput3">Partido</label>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">  
                      <i class="bi bi-x-circle-fill"></i>
                      Fechar
                    </button>
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-person-badge"></i>
                      Salvar
                    </button>
                  </div>
                </div>
              </div>
            </div>
        </form>

        <!-- Resto do seu conteúdo -->
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery e máscara (se usar) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>



    <?php
require_once("./config/database/database.php");

$por_pagina = 10;
$pagina = $_GET['pagina'] ?? 1;
$inicio = ($pagina - 1) * $por_pagina;

$sql = "SELECT * FROM candidatos ORDER BY id DESC LIMIT $inicio, $por_pagina"; 
$rows = $con->query($sql);
if($rows->num_rows > 0){
  echo '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">';
 while($row = $rows->fetch_assoc()){
  echo '
  <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <img src="' . ($row['foto']) . '" alt="' . ($row['nome']) . '" class="w-full h-48 object-cover">
      <div class="p-4">
          <h2 class="text-xl font-bold mb-2">' . ($row['nome']) . '</h2>
          <p class="text-gray-700 mb-1">Partido: ' . ($row['partido']) . '</p>
          <p class="text-gray-700 mb-1">Número: ' . ($row['numero']) . '</p>
          <p class="text-gray-800 font-semibold">Votos: ' . (int)$row['votos'] . '</p>
          <p class="text-gray-700 mb-1">Data de votação: 16/11/2026 </p>
          
          <div class="mt-3 flex gap-2">
              <a class="btn btn-success" href="actions/votar.php?id=' . $row['id'] . '">
                  <i class="bi bi-check-circle"></i> Votar
              </a>
              <a class="btn btn-primary" href="actions/editar.php?id=' . $row['id'] . '">
                  <i class="bi bi-pencil-square"></i> Editar
              </a>
              <a class="btn btn-danger" href="actions/deletar.php?id=' . $row['id'] . '">
                  <i class="bi bi-trash"></i> Excluir
              </a>
          </div>
      </div>
  </div>';
}

  echo '</div>';
} else {
  echo "<p class='text-center text-gray-600'>Nenhum candidato cadastrado.</p>";
}
?>

</div>
</body>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</body>
</html>