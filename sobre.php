<?php  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sobre mim - Sapo Cururu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="fotos/logo.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="sobre.css"> 
</head>
<body>

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

  <div class="container sobre-container text-center py-5">
    <h2 class="mb-4">Sobre mim</h2>
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="fotos/sobre-foto.jpeg" alt="Dona da Loja" class="foto-dona animated-fade-in" />
      </div>
      <div class="col-md-6">
        <div class="caixa-texto">
          <h4 class="mb-3">Com amor e dedicação desde 20XX 💚</h4>
          <p>
            Olá! Meu nome é [Nome da Dona] e sou a fundadora da <strong>Sapo Cururu</strong>, uma loja pensada com muito carinho para vestir os pequenos com conforto, estilo e alegria.
          </p>
          <p>
            Desde 20XX, dedico meu amor à moda infantil, escolhendo peças de qualidade e com um toque especial. Aqui, cada cliente é tratado como parte da nossa família.
          </p>
          <p>
            Agradeço a cada pessoa que confia no nosso trabalho. Seja bem-vindo(a) à Sapo Cururu!
          </p>
        </div>
      </div>
    </div>
  </div>

  
  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
