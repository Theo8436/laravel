<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato - Portal de Cursos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">

    <a class="navbar-brand" href="index.html">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="#">Desenvolvimento de Sistemas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Administração</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Meio Ambiente</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Farmácia</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="#">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- BANNER -->
<div class="bg-dark text-white text-center p-5">
  <div class="container">
    <h1>Entre em Contato</h1>
    <p class="lead">
      Tire suas dúvidas ou solicite mais informações sobre nossos cursos.
    </p>
  </div>
</div>


<!-- CONTATO -->
<div class="container mt-5">

  <div class="row">

    <!-- FORMULÁRIO -->
    <div class="col-md-6">

      <h3>Envie uma mensagem</h3>

      <form>

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Digite seu email">
        </div>

        <div class="mb-3">
          <label class="form-label">Curso de interesse</label>
          <select class="form-select">
            <option>Selecione</option>
            <option>Desenvolvimento de Sistemas</option>
            <option>Administração</option>
            <option>Meio Ambiente</option>
            <option>Farmácia</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Mensagem</label>
          <textarea class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
          Enviar Mensagem
        </button>

      </form>

    </div>


    <!-- INFORMAÇÕES -->
    <div class="col-md-6">

      <h3>Informações</h3>

      <p><strong>Endereço:</strong> Rua Exemplo, 123 - Centro</p>
      <p><strong>Cidade:</strong> Tatuí - SP</p>
      <p><strong>Telefone:</strong> (15) 99999-9999</p>
      <p><strong>Email:</strong> contato@portalcursos.com</p>

      <h4 class="mt-4">Localização</h4>

      <img src="https://picsum.photos/500/300?map" class="img-fluid rounded">

    </div>

  </div>

</div>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3 mt-5">
  <p>© 2026 - Portal de Cursos</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>