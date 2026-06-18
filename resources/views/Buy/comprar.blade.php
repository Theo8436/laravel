<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <style>
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
  </style>
  <body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"> Vynil Records</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link" href="{{ route('loja.home')}}">Home</a>
        <a class="nav-link" href="{{ route('about.sobre')}}">Sobre</a>
        <a class="nav-link" href="{{route('disco.disco')}}">Discos</a>
      </div>
    </div>
  </div>
</nav>


<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
</div>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cartão Débito ou Crédito</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cartão Débito ou Crédito</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>