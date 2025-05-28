<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Candidatos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Lista de Candidatos</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="bi bi-plus-circle"></i>  
    Adicionar novo contato
    </button>
    <form method="POST" action="actions/salvar.php">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Novo contato</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 form-floating">
        <input name="nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="" required>
        <label for="exampleFormControlInput1">Nome</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="email" type="email" class="form-control" id="exampleFormControlInput2" placeholder="" value="" required>
        <label for="exampleFormControlInput2">E-mail</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="telefone" maxlength="14" type="text" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
        <label for="exampleFormControlInput3">Telefone</label>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">  
          <i class="bi bi-x-circle-fill"></i>
          Fechar
        </button>
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-person-badge"></i>
          Salvar contato
        </button>
      </div>
    </div>
  </div>
</div>
</form>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Candidato 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Candidato 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Nome do Candidato 1</h2>
                    <p class="text-gray-700 mb-1">Partido: Partido 1</p>
                    <p class="text-gray-700 mb-1">Votos: 5000</p>
                    <p class="text-gray-700 mb-4">Data da Eleição: 01/01/2024</p>
                </div>
            </div>
            <!-- Candidato 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Candidato 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Nome do Candidato 2</h2>
                    <p class="text-gray-700 mb-1">Partido: Partido 2</p>
                    <p class="text-gray-700 mb-1">Votos: 3000</p>
                    <p class="text-gray-700 mb-4">Data da Eleição: 01/01/2024</p>
                </div>
            </div>
            <!-- Candidato 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Candidato 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Nome do Candidato 3</h2>
                    <p class="text-gray-700 mb-1">Partido: Partido 3</p>
                    <p class="text-gray-700 mb-1">Votos: 7000</p>
                    <p class="text-gray-700 mb-4">Data da Eleição: 01/01/2024</p>
                </div>
            </div>
            <!-- Candidato 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://via.placeholder.com/150" alt="Candidato 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Nome do Candidato 4</h2>
                    <p class="text-gray-700 mb-1">Partido: Partido 4</p>
                    <p class="text-gray-700 mb-1">Votos: 4500</p>
                    <p class="text-gray-700 mb-4">Data da Eleição: 01/01/2024</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</body>
</html>