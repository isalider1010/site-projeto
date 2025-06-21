<?php // meninos.php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sapo Cururu - Roupas Infantis</title>
  <meta name="description" content="Loja infantil Sapo Cururu - Roupas para meninos e meninas de 0 a 10 anos com qualidade, conforto e muito carinho.">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="fotos/logo.png">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container-principal">

    <div class="top-bar">
      <img src="fotos/logo.png" alt="Logo Sapo Cururu">
    </div>

    <nav class="navbar">
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="#">Sobre</a></li>
        <li class="dropdown">
          <a href="#">Infantil</a>
          <div class="mega-menu">
            <div class="column">
              <h4>Menina</h4>
              <a href="conj-meninas.php">Conjuntos</a>
              <a href="meninas-vestido.php">Vestidos</a>
            </div>
            <div class="column">
              <h4>Menino</h4>
              <a href="meninos.php">Conjuntos</a>
              <a href="#">Camisetas</a>
              <a href="#">Calças</a>
            </div>
          </div>
        </li>
        <li class="dropdown">
          <a href="#">Bebês</a>
          <div class="mega-menu">
            <div class="column">
              <h4>Menina</h4>
              <a href="bebês-menina.php">Conjuntos</a>
              <a href="#">Saída Maternidade</a>
            </div>
            <div class="column">
              <h4>Menino</h4>
              <a href="bebês-menino.php">Conjuntos</a>
              <a href="#">Saída Maternidade</a>
            </div>
          </div>
        </li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>

    <div class="container py-5">
      <h1 class="text-center mb-4">Meninos</h1>
      <div class="row g-4">

      <?php
        $produtos = [
          ["img" => "bory3(o).jpeg", "nome" => "Body Azul Estampado"],
          ["img" => "conjbaby(o).jpeg", "nome" => "Conjunto Baby Estilo Marinho"],
          ["img" => "conj bory(o)2.jpeg", "nome" => "Conjunto Body e Shorts Bege"],
          ["img" => "conj bory(o)3.jpeg", "nome" => "Conjunto Body Listrado Verde"],
          ["img" => "conj frio (o).jpeg", "nome" => "Conjunto Inverno Moletom Cinza"],
          ["img" => "conj bory (o).jpeg", "nome" => "Conjunto Body Azul Marinho"],
          ["img" => "conj frio(o) 3.jpeg", "nome" => "Conjunto Moletom Estampa Urso"],
          ["img" => "conj frio(o)4.jpeg", "nome" => "Conjunto Moletom Verde Militar"],
          ["img" => "conj frio(o)5.jpeg", "nome" => "Conjunto Inverno Dino"],
          ["img" => "conj frio(o)6.jpeg", "nome" => "Conjunto Inverno Azul e Branco"],
          ["img" => "conj frio(o)7.jpeg", "nome" => "Conjunto Moletom Listrado Azul"]
        ];

        foreach ($produtos as $produto) {
          echo '
          <div class="col-12 col-sm-6 col-md-3">
            <div class="card h-100 d-flex flex-column">
              <img src="fotos/' . $produto["img"] . '" class="card-img-top" alt="' . $produto["nome"] . '">
              <div class="card-body d-flex flex-column">
                <p class="card-title fw-semibold">' . $produto["nome"] . '</p>
                <p class="text-success fw-bold">R$ 39,90</p>
                <a href="https://wa.me/5544998443838?text=Olá! Tenho interesse no produto: ' . urlencode($produto["nome"]) . ' - R$ 39,90"
                   target="_blank" class="btn btn-success w-100 mt-auto">
                  <i class="fab fa-whatsapp me-2"></i>Comprar pelo WhatsApp
                </a>
              </div>
            </div>
          </div>';
        }
      ?>

      </div>
    </div>

  </div>

  <footer class="text-white" style="background-color: #219b29; width: 100%;">
    <div class="container py-3">
      <div class="row justify-content-between text-center text-md-start">
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Nossa Loja</h5>
          <p class="mb-1">
            <a href="https://www.google.com/maps?q=Av.+Capitão+Índio+Bandera,+1400,+Paraná+-+PR" target="_blank" class="text-white text-decoration-none">
              Av. Capitão Índio Bandera, 1400
            </a>
          </p>
          <p class="mb-1">Centro, Campo Mourão - PR</p>
          <p class="mb-1">CEP: 87300-005</p>
          <p class="mb-0">Telefone: (44) 99844-3838</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <h5 class="fw-bold">Redes Sociais</h5>
          <a href="https://www.instagram.com/sapo_cururu_babys_teen" target="_blank" class="text-white fs-4 me-3">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://wa.me/5544998443838" target="_blank" class="text-white fs-4">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
        <div class="col-md-4 mb-4 text-center text-md-end">
          <h5 class="fw-bold">Sapo Cururu</h5>
          <p class="mb-0">Roupas infantis com carinho e qualidade.</p>
        </div>
      </div>
      <hr class="border-white my-3">
      <div class="text-center">
        <p class="mb-0">© 2025 <strong>Sapo Cururu</strong>. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
