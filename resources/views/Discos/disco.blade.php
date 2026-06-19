<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jazz & Blues Collection | Vynil Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Roboto:wght@300;400;500&display=swap');

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background-color:#f5efe6;
            font-family:'Roboto', sans-serif;
        }

        /* NAVBAR */

        .navbar{
            background-color:#5c1d1d !important;
            padding:15px 30px;
            box-shadow:0 4px 10px rgba(0,0,0,.2);
        }

        .navbar-brand{
            color:#f5e6d3 !important;
            font-family:'Playfair Display', serif;
            font-size:2rem;
            font-weight:700;
            letter-spacing:2px;
        }

        .nav-link{
            color:#f5e6d3 !important;
            font-size:1.1rem;
            margin-left:20px;
            transition:.3s;
        }

        .nav-link:hover{
            color:#d9a066 !important;
        }

        /* TÍTULO */

        .titulo{
            text-align:center;
            color:#5c1d1d;
            font-family:'Playfair Display', serif;
            font-size:3rem;
            margin:50px 0;
        }

        /* CATÁLOGO */

        .catalogo{
            max-width:1400px;
            margin:auto;
            padding:0 20px 50px;
            display:grid;
            grid-template-columns:repeat(4, 1fr);
            gap:35px;
            justify-items:center;
        }

        /* CARD */

        .card{
            width:18rem;
            background-color:#fff8f0;
            border:none;
            border-radius:18px;
            overflow:hidden;
            box-shadow:0 8px 20px rgba(0,0,0,.15);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-10px);
            box-shadow:0 15px 30px rgba(92,29,29,.25);
        }

        .card-img-top{
            height:250px;
            object-fit:cover;
            border-bottom:4px solid #7b2d26;
        }

        .card-body{
            text-align:center;
            padding:20px;
        }

        .card-title{
            font-family:'Playfair Display', serif;
            color:#7b2d26;
            font-size:1.4rem;
            margin-bottom:10px;
        }

        .card-text{
            color:#5d4037;
            min-height:80px;
            line-height:1.6;
        }

        /* BOTÃO */

        .btn-primary{
            background-color:#7b2d26;
            border:none;
            border-radius:25px;
            padding:10px 25px;
        }

        .btn-primary:hover{
            background-color:#5c1d1d;
        }

        /* RESPONSIVO */

        @media (max-width:1300px){
            .catalogo{
                grid-template-columns:repeat(3,1fr);
            }
        }

        @media (max-width:1000px){
            .catalogo{
                grid-template-columns:repeat(2,1fr);
            }
        }

        @media (max-width:700px){

            .titulo{
                font-size:2.2rem;
            }

            .catalogo{
                grid-template-columns:1fr;
            }

            .nav-link{
                margin-left:0;
            }
        }

    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid">

            <a class="navbar-brand">Vynil Records</a>

            <button class="navbar-toggler bg-light"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                <div class="navbar-nav">
                    <a class="nav-link" href="{{route('loja.home')}}">Home</a>
                    <a class="nav-link" href="{{ route('about.sobre')}}">Sobre</a>
                </div>

            </div>

        </div>

    </nav>

    <h1 class="titulo">🎷 Jazz & Blues Collection</h1>

    <div class="catalogo">

        <div class="card">
            <img src="img/kindofblue.jpg" class="card-img-top" alt="Kind of Blue">
            <div class="card-body">
                <h5 class="card-title">Kind of Blue</h5>
                <p class="card-text">Clássico absoluto do jazz de Miles Davis lançado em 1959.</p>
                <a href="{{route('see.ver')}}" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

        <div class="card">
            <img src="img/bluetrain.jpg" class="card-img-top" alt="Blue Train">
            <div class="card-body">
                <h5 class="card-title">Blue Train</h5>
                <p class="card-text">Um dos trabalhos mais importantes de John Coltrane.</p>
                <a href="#" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

        <div class="card">
            <img src="img/takefive.jpg" class="card-img-top" alt="Take Five">
            <div class="card-body">
                <h5 class="card-title">Take Five</h5>
                <p class="card-text">Faixa histórica do Dave Brubeck Quartet.</p>
                <a href="#" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

        <div class="card">
            <img src="img/atlast.jpg" class="card-img-top" alt="At Last">
            <div class="card-body">
                <h5 class="card-title">At Last!</h5>
                <p class="card-text">Álbum marcante da lendária Etta James.</p>
                <a href="#" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

        <div class="card">
            <img src="img/thrillisgone.jpg" class="card-img-top" alt="The Thrill Is Gone">
            <div class="card-body">
                <h5 class="card-title">The Thrill Is Gone</h5>
                <p class="card-text">Um dos maiores clássicos da carreira de B.B. King.</p>
                <a href="#" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

        <div class="card">
            <img src="img/moanin.jpg" class="card-img-top" alt="Moanin">
            <div class="card-body">
                <h5 class="card-title">Moanin'</h5>
                <p class="card-text">Jazz vibrante de Art Blakey & The Jazz Messengers.</p>
                <a href="#" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

        <div class="card">
            <img src="img/ladysingstheblues.jpg" class="card-img-top" alt="Lady Sings The Blues">
            <div class="card-body">
                <h5 class="card-title">Lady Sings The Blues</h5>
                <p class="card-text">Obra-prima da inesquecível Billie Holiday.</p>
                <a href="#" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

        <div class="card">
            <img src="img/bornunderabadsign.jpg" class="card-img-top" alt="Born Under a Bad Sign">
            <div class="card-body">
                <h5 class="card-title">Born Under a Bad Sign</h5>
                <p class="card-text">Um dos álbuns mais influentes da história do blues.</p>
                <a href="#" class="btn btn-primary">Ver Disco</a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>