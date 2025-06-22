<?php  ?>
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

  <?php include 'footer.php'; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
