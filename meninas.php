<?php?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sapo Cururu - Roupas Infantis</title>
  <meta name="description" content="Loja infantil Sapo Cururu - Roupas para meninos e meninas de 0 a 10 anos com qualidade, conforto e muito carinho." />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="fotos/logo.png" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container-principal">

    <div class="top-bar">
      <img src="fotos/logo.png" alt="Logo Sapo Cururu" />
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

    <div class="container py-5">
      <h1 class="text-center mb-4">Meninas</h1>
      <div class="row g-4">

        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <img src="fotos/conj frio(a).jpeg" class="card-img-top" alt="Macacão Pantacourt" />
            <div class="card-body d-flex flex-column">
              <p class="card-title fw-semibold">Macacão Menina Pantacourt Flores</p>
              <p class="text-success fw-bold">R$ 39,90</p>
              <a href="https://wa.me/5544998443838?text=Olá!%20Tenho%20interesse%20no%20produto%20Macacão%20Menina%20Pantacourt%20Flores%20-%20R$%2039,90" target="_blank" class="btn btn-success mt-auto w-100">
                <i class="fab fa-whatsapp me-2"></i>Comprar pelo WhatsApp
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <img src="fotos/conj(a).jpeg" class="card-img-top" alt="Conjunto Blusa e Saia" />
            <div class="card-body d-flex flex-column">
              <p class="card-title fw-semibold">Conjunto Blusa Franzida com Saia Rosa</p>
              <p class="text-success fw-bold">R$ 39,90</p>
              <a href="https://wa.me/5544998443838?text=Olá!%20Tenho%20interesse%20no%20produto%20Conjunto%20Blusa%20Franzida%20com%20Saia%20Rosa%20-%20R$%2039,90" target="_blank" class="btn btn-success mt-auto w-100">
                <i class="fab fa-whatsapp me-2"></i>Comprar pelo WhatsApp
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <img src="fotos/vestido (a).jpeg" class="card-img-top" alt="Vestido Menina" />
            <div class="card-body d-flex flex-column">
              <p class="card-title fw-semibold">Vestido Floral Rosa</p>
              <p class="text-success fw-bold">R$ 39,90</p>
              <a href="https://wa.me/5544998443838?text=Olá!%20Tenho%20interesse%20no%20produto%20Vestido%20Floral%20Rosa%20-%20R$%2039,90" target="_blank" class="btn btn-success mt-auto w-100">
                <i class="fab fa-whatsapp me-2"></i>Comprar pelo WhatsApp
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="card h-100">
            <img src="fotos/vestido(a)2.jpeg" class="card-img-top" alt="Vestido Menina 2" />
            <div class="card-body d-flex flex-column">
              <p class="card-title fw-semibold">Vestido Rosa com Laço</p>
              <p class="text-success fw-bold">R$ 39,90</p>
              <a href="https://wa.me/5544998443838?text=Olá!%20Tenho%20interesse%20no%20produto%20Vestido%20Rosa%20com%20Laço%20-%20R$%2039,90" target="_blank" class="btn btn-success mt-auto w-100">
                <i class="fab fa-whatsapp me-2"></i>Comprar pelo WhatsApp
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

 <?php include 'footer.php'; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
