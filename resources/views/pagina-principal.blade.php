<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Site de Cursos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Cursos Técnicos</a>

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

      </ul>
    </div>
  </div>
</nav>


<!-- BANNER -->
<div class="bg-light p-5 text-center">
  <div class="container">
    <h1>Bem-vindo ao Portal de Cursos</h1>
    <p class="lead">
      Descubra cursos técnicos que podem transformar seu futuro profissional.
    </p>
    <a href="#cursos" class="btn btn-primary">Ver Cursos</a>
  </div>
</div>


<!-- CURSOS -->
<div class="container mt-5" id="cursos">

  <h2 class="text-center mb-4">Cursos Disponíveis</h2>

  <div class="row">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?1" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Curso focado em programação, desenvolvimento web e criação de softwares.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?2" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Aprenda gestão empresarial, organização financeira e liderança.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?3" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Estude sustentabilidade, preservação ambiental e gestão ecológica.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <!-- Farmácia -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?4" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Farmácia</h5>
          <p class="card-text">
            Conheça medicamentos, manipulação farmacêutica e atendimento ao público.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- SOBRE -->
<div class="bg-light mt-5 p-5">
  <div class="container text-center">
    <h3>Por que estudar conosco?</h3>
    <p>
      Nossos cursos são desenvolvidos para preparar os alunos para o mercado de
      trabalho, com professores qualificados e conteúdo atualizado.
    </p>
  </div>
</div>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3">
  <p>© 2026 - Portal de Cursos</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>