<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Roboto:wght@300;400;500&display=swap');

body{
    background-color: #f5efe6;
    font-family: 'Roboto', sans-serif;
    color: #3e2723;
    padding: 40px;
}

/* Navbar */
.navbar {
    background-color: #5c1d1d !important;
    padding: 15px 30px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.navbar-brand {
    color: #f5e6d3 !important;
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    font-weight: 700;
    letter-spacing: 2px;
}

.nav-link {
    color: #f5e6d3 !important;
    font-size: 1.1rem;
    margin-left: 20px;
    transition: 0.3s;
}

.nav-link:hover {
    color: #d9a066 !important;
}

/* Container dos cards */
.cards-container{
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}

/* Card */
.card{
    background-color: #fff8f0;
    border: none;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    transition: 0.3s;
}

.card:hover{
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(92, 29, 29, 0.25);
}

/* Imagem */
.card img{
    height: 100%;
    object-fit: cover;
    border-right: 4px solid #7b2d26;
}

/* Título */
.card-title{
    font-family: 'Playfair Display', serif;
    color: #7b2d26;
    font-size: 1.8rem;
    font-weight: bold;
}

/* Texto */
.card-text{
    color: #5d4037;
    line-height: 1.6;
}

/* Texto pequeno */
.text-body-secondary{
    color: #a65d57 !important;
    font-style: italic;
    font-weight: 500;
}

/* Área do conteúdo */
.card-body{
    padding: 25px;
}

/* Responsividade */
@media (max-width: 768px){
    .card{
        max-width: 100% !important;
    }

    .card img{
        border-right: none;
        border-bottom: 4px solid #7b2d26;
    }
}
  </style>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"> Vynil Records</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ route('loja.home')}}">Home</a>
        <a class="nav-link" href="{{route('disco.disco')}}">Discos</a>
      </div>
    </div>
  </div>
</nav>
  
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Vynil Records</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Always listen</small></p>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Scarlet</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Your favourite vynil records</small></p>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

