<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Página Não Encontrada - 404 - Sapo Cururu</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins&display=swap" rel="stylesheet" />

  <style>
    .pagina-404 {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 80px 20px;
      text-align: center;
      background: linear-gradient(to right,rgb(47, 203, 76),rgb(217, 247, 227));
      border-radius: 20px;
      max-width: 800px;
      margin: 60px auto;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      font-family: 'Poppins', sans-serif;
    }

    .pagina-404 h1 {
      font-size: 6rem;
      color:rgb(6, 129, 45);
      margin-bottom: 20px;
      font-family: 'Playfair Display', serif;
    }

    .pagina-404 p {
      font-size: 1.4rem;
      color:rgb(22, 14, 10);
      margin-bottom: 30px;
    }

    .pagina-404 a {
      padding: 14px 30px;
      font-size: 1rem;
      border-radius: 25px;
      background-color:rgb(45, 214, 36);
      color: #fff;
      border: none;
      text-decoration: none;
      transition: all 0.3s ease;
      font-weight: 600;
    }

    .pagina-404 a:hover {
      background-color:rgb(154, 232, 155);
      transform: scale(1.05);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      color: #fff;
    }

    @media (max-width: 600px) {
      .pagina-404 h1 {
        font-size: 4rem;
      }

      .pagina-404 p {
        font-size: 1.1rem;
      }
    }
  </style>
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
            
          </div>
          <div class="column">
            <h4>Menino</h4>
            <a href="meninos.php">Conjuntos</a>
            
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

  <main>
    <div class="pagina-404">
      <h1>404</h1>
      <p>Ops! A página que você tentou acessar não foi encontrada.</p>
      <a href="home.php">Voltar para a página inicial</a>
    </div>
  </main>

  <?php include 'footer.php'; ?> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>