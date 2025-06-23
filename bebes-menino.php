<?php ?>
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
        <h2 class="mb-4 fw-bold">Bebês</h2>
        <div class="row g-4">

        <?php
          $produtos = [
           
            [
              'imagem' => 'bory3(o).jpeg',
              'nome'   => 'Saída de Maternidade Aconchego RN',
              'preco'  => 'R$ 259,00'
            ],
            [
              'imagem' => 'conj bory(o)2.jpeg',
              'nome'   => 'Jardineira c/ Bory RN',
              'preco'  => 'R$ 179,90'
            ],
            [
              'imagem' => 'conj bory(o)3.jpeg',
              'nome'   => 'Saída de Maternidade 5 peças RN',
              'preco'  => 'R$ 359,90'
            ],
            [
              'imagem' => 'conj bory(o)4.jpeg',
              'nome'   => 'Jardineira c/ Casaco e Body RN',
              'preco'  => 'R$ 232,90'
            ],
            [
              'imagem' => 'conj menino.jpeg',
              'nome'   => 'Conjuto Social 1 ao 10',
              'preco'  => 'R$ 221,80'
            ],
            [
              'imagem' => 'logo.baby(o).jpeg',
              'nome'   => 'Macacão de Plush e Colete RN e P',
              'preco'  => 'R$ 169,90'
            ],
          ];

          foreach ($produtos as $produto) {
            echo '
            <div class="col-12 col-sm-6 col-md-3">
              <div class="card h-100 d-flex flex-column">
                <img src="fotos/' . $produto['imagem'] . '" class="card-img-top" alt="' . $produto['nome'] . '">
                <div class="card-body d-flex flex-column">
                  <p class="card-title fw-semibold">' . $produto['nome'] . '</p>
                  <p class="text-success fw-bold">' . $produto['preco'] . '</p>
                  <a href="https://wa.me/5544998443838?text=Olá! Tenho interesse no produto: ' . urlencode($produto['nome']) . ' - ' . urlencode($produto['preco']) . '" 
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
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
