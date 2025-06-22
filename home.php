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
              <a href="meninas-vestido.php">Vestidos</a>
            </div>
            <div class="column">
              <h4>Menino</h4>
              <a href="#">Conjuntos</a>
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

    <div class="banner-container">
      <img src="fotos/banner_1700x700.jpeg" alt="Banner principal" class="banner-img">
    </div>

    <section class="categorias py-5 text-center">
      <h2 class="mb-4">Categorias</h2>
      <div class="container position-relative">
        <div id="carouselCategorias" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="row justify-content-center g-4">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="meninas.php">
                    <img src="fotos/logo.menina.jpeg" alt="Meninas" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Meninas</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="meninas-vestido.php">
                    <img src="fotos/vestido_redimensionado.jpeg" alt="Vestidos" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Vestidos</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="conj-meninas.php">
                    <img src="fotos/conjuntoMenina-logo.jpeg" alt="Conjuntos" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Conjuntos</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="bebês-menina.php">
                    <img src="fotos/logo.baby(a).jpeg" alt="Bebês" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Bebês</p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row justify-content-center g-4">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="meninos.php">
                    <img src="fotos/logo.menino.jpeg" alt="Meninos" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Meninos</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="conj-meninos.php">
                    <img src="fotos/conj9.jpeg" alt="Conjuntos" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Conjuntos</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="bebês-menino.php">
                    <img src="fotos/logo.baby(o).jpeg" alt="Bebês" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Bebês</p>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                  <a href="acessórios.php">
                    <img src="fotos/logonaninha.jpeg" alt="Verão" class="categoria-img">
                  </a>
                  <p class="mt-2 fw-bold">Verão</p>
                </div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselCategorias" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselCategorias" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
      </div>
    </section>

    <section class="mais-vendidos py-5 text-center">
      <div class="container">
        <h2 class="mb-4 fw-bold">Mais Vendidos</h2>
        <div class="row g-4">

          <?php
          $produtos = [
            ["img" => "fotos/conj bory(o)3.jpeg", "nome" => "Conjunto de saída de Maternidade azul", "preco" => "189,90"],
            ["img" => "fotos/conj bory(a)2.jpeg", "nome" => "Conjunto de saída de Maternidade rosa", "preco" => "189,90"],
            ["img" => "fotos/conj menino.jpeg", "nome" => "Conjunto infantil Menino", "preco" => "149,90"],
            ["img" => "fotos/logo.baby(a).jpeg", "nome" => "Macacão Bebê Rosa", "preco" => "99,90"],
            ["img" => "fotos/conj(a).jpeg", "nome" => "Conjunto Floral Bebê", "preco" => "119,90"],
            ["img" => "fotos/conjbaby(o).jpeg", "nome" => "Conjunto Baby Menino", "preco" => "129,90"],
            ["img" => "fotos/bory2(a).jpeg", "nome" => "Body Rosa Bebê", "preco" => "69,90"],
            ["img" => "fotos/bory3(o).jpeg", "nome" => "Body Azul Bebê", "preco" => "69,90"],
          ];

          foreach ($produtos as $produto) {
            echo '
            <div class="col-12 col-sm-6 col-md-3">
              <div class="card h-100 d-flex flex-column">
                <img src="' . $produto["img"] . '" class="card-img-top" alt="Produto">
                <div class="card-body d-flex flex-column">
                  <p class="card-title fw-semibold">' . $produto["nome"] . '</p>
                  <p class="text-success fw-bold">R$ ' . $produto["preco"] . '</p>
                  <a href="https://wa.me/5544998443838?text=Olá! Tenho interesse no produto: ' . $produto["nome"] . ' - R$ ' . $produto["preco"] . '" 
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


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
