<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - Portal de Cursos</title>

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
          <a class="nav-link active" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route ('pagina-principal') }}">Cursos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route ('sobre') }}">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route ('contato') }}">Contato</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- HERO / BANNER -->
<div class="bg-light text-center p-5">
  <div class="container">
    <h1 class="display-4">Bem-vindo ao Portal de Cursos Técnicos</h1>
    <p class="lead">
      Prepare-se para o mercado de trabalho com cursos modernos e professores qualificados.
    </p>

    <a href="#cursos" class="btn btn-primary btn-lg">Explorar Cursos</a>
  </div>
</div>


<!-- DESTAQUES -->
<div class="container mt-5">

  <h2 class="text-center mb-4">Nossos Diferenciais</h2>

  <div class="row text-center">

    <div class="col-md-4">
      <h4>Professores Qualificados</h4>
      <p>
        Nossos professores possuem experiência no mercado e formação especializada.
      </p>
    </div>

    <div class="col-md-4">
      <h4>Conteúdo Atualizado</h4>
      <p>
        Cursos atualizados com as tecnologias e práticas utilizadas nas empresas.
      </p>
    </div>

    <div class="col-md-4">
      <h4>Preparação Profissional</h4>
      <p>
        Formação focada em preparar você para oportunidades reais de trabalho.
      </p>
    </div>

  </div>
</div>


<!-- CURSOS -->
<div class="container mt-5" id="cursos">

  <h2 class="text-center mb-4">Cursos em Destaque</h2>

  <div class="row">

    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?1" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Programação, desenvolvimento web e criação de softwares.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?2" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Gestão empresarial, liderança e organização financeira.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?3" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Sustentabilidade e gestão ambiental.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="https://picsum.photos/300/200?4" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Farmácia</h5>
          <p class="card-text">
            Manipulação de medicamentos e atendimento farmacêutico.
          </p>
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

  </div>
</div>


<!-- CHAMADA -->
<div class="bg-primary text-white text-center p-5 mt-5">
  <div class="container">
    <h2>Comece sua carreira hoje</h2>
    <p>
      Inscreva-se em um de nossos cursos e dê o primeiro passo para o seu futuro profissional.
    </p>
    <a href="#" class="btn btn-light">Fazer inscrição</a>
  </div>
</div>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3">
  <p>© 2026 - Portal de Cursos Técnicos</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>