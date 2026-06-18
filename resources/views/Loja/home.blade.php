<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vynil Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <style>
    /* Importando uma fonte com estilo vintage */
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto:wght@300;400;500&display=swap');

body {
    background-color: #f5efe6;
    font-family: 'Roboto', sans-serif;
    color: #3e2723;
    margin: 0;
    padding: 0;
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

/* Cards */
.card {
    width: 18rem;
    border: none;
    border-radius: 15px;
    overflow: hidden;
    background-color: #fff8f0;
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    transition: transform 0.3s, box-shadow 0.3s;
    margin: 20px;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(92, 29, 29, 0.25);
}

.card-img-top {
    height: 250px;
    object-fit: cover;
    border-bottom: 3px solid #7b2d26;
}

.card-body {
    text-align: center;
    padding: 20px;
}

.card-title {
    font-family: 'Playfair Display', serif;
    color: #7b2d26;
    font-size: 1.4rem;
    margin-bottom: 15px;
}

.card-text {
    color: #5d4037;
    font-size: 0.95rem;
}

/* Botões */
.btn-primary {
    background-color: #7b2d26;
    border: none;
    border-radius: 25px;
    padding: 10px 25px;
    transition: 0.3s;
}

.btn-primary:hover {
    background-color: #5c1d1d;
    transform: scale(1.05);
}

/* Organização dos cards */
.cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    padding: 40px;
}

/* Responsividade */
@media (max-width: 768px) {
    .cards-container {
        flex-direction: column;
        align-items: center;
    }

    .navbar-brand {
        font-size: 1.6rem;
    }

    .cards-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
}

.cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    padding: 40px;
}
}
  </style>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"> Vynil Records</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{ route('about.sobre')}}">Sobre</a>
        <a class="nav-link" href="{{route('disco.disco')}}">Discos</a>
      </div>
    </div>
  </div>
</nav>

<br>
<br>

<div class="cards-container">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nadine</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="{{route('buy.comprar')}}" class="btn btn-primary">Comprar</a>
  </div>
</div>

<br><br>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Love Me or Leave Me</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<br><br>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Believe To My Soul</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<br><br>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">You Don't Know What Love Is</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>

<br>
<br>
  </div>
  <div class="card-body">
    <h5 class="card-title">Seja um colecionador</h5>
    <p class="card-text">Compre conosco e entre no mundo da coleção dos melhores discos de vinil de jazz & blues!</p>
    <a href="#" class="btn btn-primary">Compre conosco</a>
  </div>
</div>
</div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>