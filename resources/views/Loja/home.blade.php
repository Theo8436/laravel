<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vynil Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Roboto:wght@300;400;500&display=swap');

        body {
            background-color: #f5efe6;
            font-family: 'Roboto', sans-serif;
            color: #3e2723;
            margin: 0;
            padding: 0;
        }

        h1{
            text-align: center;
            font-family: 'Playfair Display', serif;
            color: #5c1d1d;
            font-size: 3rem;
            font-weight: 700;
            margin: 40px 0;
            letter-spacing: 2px;
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
            min-height: 70px;
        }

        /* Botão Comprar */

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

        /* Botão Esgotado */

        .btn-esgotado{
            background-color: #8d8d8d;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 25px;
            cursor: not-allowed;
        }

        /* Organização dos cards */

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 20px 40px 60px;
        }

        /* Card destaque */

        .card-destaque{
            max-width: 800px;
            margin: 0 auto 70px;
            background-color: #fff8f0;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        .card-destaque h3{
            color: #7b2d26;
            font-family: 'Playfair Display', serif;
            margin-bottom: 15px;
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

            h1{
                font-size: 2.2rem;
            }
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand"> Vynil Records</a>

            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('about.sobre')}}">Sobre</a>
                    <a class="nav-link" href="{{route('disco.disco')}}">Discos</a>
                </div>
            </div>

        </div>
    </nav>

    <!-- MAIS VENDIDOS -->

    <h1>🎷 Mais Vendidos</h1>

    <div class="cards-container">

        <div class="card">
            <img src="https://www.udiscovermusic.com/wp-content/uploads/2016/02/Chuck-Berry-Nadine-1.jpg" class="card-img-top" alt="Nadine">
            <div class="card-body">
                <h5 class="card-title">Nadine</h5>
                <p class="card-text">
                    Um clássico do blues com sonoridade envolvente e marcante.
                </p>
                <a href="{{route('buy.comprar')}}" class="btn btn-primary">Comprar</a>
            </div>
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJn7PHnnGkGEwpnveZy7XNqZGxCk9YCx1rTg2MJRLnUg&s=10" class="card-img-top" alt="Love Me or Leave Me">
            <div class="card-body">
                <h5 class="card-title">Love Me or Leave Me</h5>
                <p class="card-text">
                    Jazz sofisticado e interpretação inesquecível.
                </p>
                <a href="{{route('lmolm.compra')}}" class="btn btn-primary">Comprar</a>
            </div>
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo2gdITyD13mYeZDoT_9cn-opQUSVYqjl6f4pd_0Gfwg&s=10" class="card-img-top" alt="Believe To My Soul">
            <div class="card-body">
                <h5 class="card-title">Believe To My Soul</h5>
                <p class="card-text">
                    Um dos discos mais procurados pelos colecionadores.
                </p>
                <a href="{{route('btms.compras')}}" class="btn btn-primary">Comprar</a>
            </div>
        </div>

        <div class="card">
            <img src="img/youdontknowwhatloveis.jpg" class="card-img-top" alt="You Don't Know What Love Is">
            <div class="card-body">
                <h5 class="card-title">You Don't Know What Love Is</h5>
                <p class="card-text">
                    Uma obra-prima do jazz romântico.
                </p>
                <a href="{{route('ydkwli.quero')}}" class="btn btn-primary">Comprar</a>
            </div>
        </div>

    </div>

    <!-- ESGOTADOS -->

    <h1>📀 Discos Esgotados</h1>

    <div class="cards-container">

        <div class="card">
            <img src="img/kindofblue.jpg" class="card-img-top" alt="Kind of Blue">
            <div class="card-body">
                <h5 class="card-title">A Love Supreme</h5>
                <p class="card-text">
                    John Coltrane • Um dos maiores álbuns de jazz da história.
                </p>
                <button class="btn-esgotado" disabled>Esgotado</button>
            </div>
        </div>

        <div class="card">
            <img src="img/bluetrain.jpg" class="card-img-top" alt="Blue Train">
            <div class="card-body">
                <h5 class="card-title">Blue Train</h5>
                <p class="card-text">
                    John Coltrane • Referência absoluta do hard bop.
                </p>
                <button class="btn-esgotado" disabled>Esgotado</button>
            </div>
        </div>

        <div class="card">
            <img src="img/atlast.jpg" class="card-img-top" alt="At Last!">
            <div class="card-body">
                <h5 class="card-title">At Last!</h5>
                <p class="card-text">
                    Etta James • Um marco na história do blues e soul.
                </p>
                <button class="btn-esgotado" disabled>Esgotado</button>
            </div>
        </div>

        <div class="card">
            <img src="img/moanin.jpg" class="card-img-top" alt="Moanin">
            <div class="card-body">
                <h5 class="card-title">Moanin'</h5>
                <p class="card-text">
                    Art Blakey & The Jazz Messengers.
                </p>
                <button class="btn-esgotado" disabled>Esgotado</button>
            </div>
        </div>

    </div>

    <!-- DESTAQUE -->

    <div class="card-destaque">

        <h3>🎵 Seja um Colecionador</h3>

        <p>
            Entre no mundo dos melhores discos de jazz e blues.
            Receba novidades, reposições de estoque e lançamentos exclusivos.
        </p>

        <a href="#" class="btn btn-primary">
            Junte-se ao nosso WhatsApp
        </a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>\