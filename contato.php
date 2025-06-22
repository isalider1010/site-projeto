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

  <?php include 'menu.php'; ?>

  <div class="container mt-5">
    <form id="form-contato" novalidate>
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required />
          <div class="invalid-feedback">Por favor, informe seu nome.</div>
        </div>

        <div class="col-md-4">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required />
          <div class="invalid-feedback">Por favor, informe um e-mail válido.</div>
        </div>

        <div class="col-md-4">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000" required />
          <div class="invalid-feedback">Por favor, informe um número de telefone válido.</div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-8">
          <label for="endereco" class="form-label">Endereço completo ou CEP</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o CEP ou endereço completo" />
          <div class="invalid-feedback">Por favor, informe um endereço válido ou CEP.</div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-8">
          <label for="assunto" class="form-label">Assunto</label>
          <select class="form-select select-rosinha" id="assunto" name="assunto" required>
            <option value="" selected>Escolha um assunto</option>
            <option value="pedido">Feedback</option>
            <option value="duvida">Dúvida</option>
            <option value="reclamacao">Reclamação</option>
            <option value="outros">Outros</option>
          </select>
          <div class="invalid-feedback">Por favor, selecione um assunto.</div>
        </div>
      </div>

      <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="4" placeholder="Sua mensagem" required></textarea>
        <div class="invalid-feedback">Por favor, escreva sua mensagem.</div>
      </div>

      <button type="submit" class="btn btn-success">Enviar</button>
    </form>

    <div id="social-icons" class="mt-4">
      <a href="https://www.facebook.com/boleira.lia" target="_blank" aria-label="Facebook">
        <i class="fab fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/lbc12020" target="_blank" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://wa.me/5544988563181" target="_blank" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
