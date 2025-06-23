<?php
$produtos = [
  [
    "imagem" => "conj frio(a).jpeg",
    "nome" => "Conjunto de Boucle  1 ao 3",
    "preco" => "R$ 174,90"
  ],
  [
    "imagem" => "conj frio(a)2.jpeg",
    "nome" => "Conjunto Inverno P ao G",
    "preco" => "R$ 159,00"
  ],
  [
    "imagem" => "conj menina 2.jpeg",
    "nome" => "Conjunto c/ Casaco Soft 1 ao 3 ",
    "preco" => "R$ 179,90"
  ],
  
];
?>
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
      <li><a href="home.php">Início</a></li>
      <li><a href="sobre.php">Sobre</a></li>
      <li class="dropdown">
        <a href="#">Infantil</a>
        <div class="mega-menu">
          <div class="column">
            <h4>Menina</h4>
            <a href="conj-meninas.php">Conjuntos</a>
            
          </div>
          <div class="column">
            <h4>Menino</h4>
            <a href="conj-meninos.php">Conjuntos</a>
          </div>
        </div>
      </li>
      <li class="dropdown">
        <a href="#">Bebês</a>
        <div class="mega-menu">
          <div class="column">
            <h4>Menina</h4>
            <a href="bebes-meninas.php">Conjuntos</a>
            
          </div>
          <div class="column">
            <h4>Menino</h4>
            <a href="bebes-menino.php">Conjuntos</a>
            
          </div>
        </div>
      </li>
      <li><a href="contato.php">Contato</a></li>
    </ul>
  </nav>

  <section class="mais-vendidos py-5 text-center">
    <div class="container">
      <h2 class="mb-4 fw-bold">Conjuntos</h2>
      <div class="row g-4">

        <?php foreach ($produtos as $produto): ?>
          <?php
            $img = $produto['imagem'];
            $nomeProduto = $produto['nome'];
            $preco = $produto['preco'];
            $whatsLink = "https://wa.me/5544998443838?text=" . urlencode("Olá! Tenho interesse no produto: $nomeProduto - $preco");
          ?>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="card h-100 d-flex flex-column">
              <img src="fotos/<?= $img ?>" class="card-img-top" alt="<?= $nomeProduto ?>">
              <div class="card-body d-flex flex-column">
                <p class="card-title fw-semibold"><?= $nomeProduto ?></p>
                <p class="text-success fw-bold"><?= $preco ?></p>
                <a href="<?= $whatsLink ?>" target="_blank" class="btn btn-success w-100 mt-auto">
                  <i class="fab fa-whatsapp me-2"></i>Comprar pelo WhatsApp
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
