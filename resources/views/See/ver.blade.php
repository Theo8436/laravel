<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kind of Blue | Vynil Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Roboto:wght@300;400;500&display=swap');

        body{
            background-color: #f5efe6;
            font-family: 'Roboto', sans-serif;
            color: #3e2723;
            margin: 0;
            padding: 0;
        }

        /* NAVBAR */

        .navbar{
            background-color: #5c1d1d !important;
            padding: 15px 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,.2);
        }

        .navbar-brand{
            color: #f5e6d3 !important;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .nav-link{
            color: #f5e6d3 !important;
            margin-left: 20px;
            font-size: 1.1rem;
            transition: .3s;
        }

        .nav-link:hover{
            color: #d9a066 !important;
        }

        /* HERO */

        .hero{
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .capa{
            width: 350px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,.2);
        }

        .capa img{
            width: 100%;
            display: block;
        }

        .hero-info h1{
            font-family: 'Playfair Display', serif;
            color: #5c1d1d;
            font-size: 3.5rem;
            margin-bottom: 10px;
        }

        .artista{
            color: #7b2d26;
            font-size: 1.4rem;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .descricao{
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* CARDS */

        .secao{
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .titulo-secao{
            text-align: center;
            color: #5c1d1d;
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 35px;
        }

        .cards{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .card-custom{
            background-color: #fff8f0;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,.15);
            transition: .3s;
        }

        .card-custom:hover{
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(92,29,29,.25);
        }

        .card-custom h3{
            color: #7b2d26;
            font-family: 'Playfair Display', serif;
            margin-bottom: 15px;
        }

        .card-custom p,
        .card-custom li{
            line-height: 1.8;
        }

        /* TRACKLIST */

        .tracklist{
            background-color: #fff8f0;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,.15);
        }

        .tracklist ol{
            margin-top: 20px;
        }

        .tracklist li{
            padding: 8px 0;
            border-bottom: 1px solid #e4d4c6;
        }

        /* CURIOSIDADES */

        .curiosidades{
            background-color: #fff8f0;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 20px rgba(0,0,0,.15);
        }

        .curiosidades ul{
            line-height: 2;
        }

        /* RODAPÉ */

        footer{
            margin-top: 70px;
            background-color: #5c1d1d;
            color: #f5e6d3;
            text-align: center;
            padding: 25px;
        }

        @media(max-width:900px){

            .hero{
                flex-direction: column;
                text-align: center;
            }

            .hero-info h1{
                font-size: 2.7rem;
            }

            .capa{
                width: 280px;
            }
        }

    </style>
</head>
<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand">Vynil Records</a>

            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('loja.home')}}">Home</a>
                    <a class="nav-link" href="{{ route('about.sobre')}}">Sobre</a>
                    <a class="nav-link" href="{{ route('disco.disco')}}">Discos</a>
                </div>
            </div>

        </div>
    </nav>

    <!-- HERO -->

    <section class="hero">

        <div class="capa">
            <img src="https://upload.wikimedia.org/wikipedia/en/9/9c/MilesDavisKindofBlue.jpg" alt="Kind of Blue">
        </div>

        <div class="hero-info">

            <h1>Kind of Blue</h1>

            <p class="artista">Miles Davis • 1959</p>

            <p class="descricao">
                Considerado por muitos críticos e músicos como o maior álbum de jazz
                de todos os tempos, "Kind of Blue" revolucionou a música ao explorar
                o jazz modal, uma abordagem mais livre e criativa para improvisação.
                Lançado em 1959, o álbum se tornou uma das obras mais influentes da
                história da música e continua inspirando artistas até hoje.
            </p>

        </div>

    </section>

    <!-- SOBRE O ARTISTA -->

    <section class="secao">

        <h2 class="titulo-secao">Sobre Miles Davis</h2>

        <div class="cards">

            <div class="card-custom">
                <h3>🎺 Quem foi?</h3>

                <p>
                    Miles Davis foi um trompetista, compositor e líder de banda
                    norte-americano. É considerado uma das figuras mais importantes
                    da história do jazz.
                </p>
            </div>

            <div class="card-custom">
                <h3>🏆 Legado</h3>

                <p>
                    Durante mais de cinco décadas de carreira, Miles ajudou a criar
                    e desenvolver diversos estilos de jazz, incluindo bebop,
                    cool jazz, hard bop, modal jazz e jazz fusion.
                </p>
            </div>

            <div class="card-custom">
                <h3>🌎 Influência</h3>

                <p>
                    Seu trabalho influenciou músicos de jazz, rock, blues,
                    música clássica e diversos outros gêneros ao redor do mundo.
                </p>
            </div>

        </div>

    </section>

    <!-- FAIXAS -->

    <section class="secao">

        <h2 class="titulo-secao">Faixas do Álbum</h2>

        <div class="tracklist">

            <ol>
                <li>So What</li>
                <li>Freddie Freeloader</li>
                <li>Blue in Green</li>
                <li>All Blues</li>
                <li>Flamenco Sketches</li>
            </ol>

        </div>

    </section>

    <!-- MÚSICOS -->

    <section class="secao">

        <h2 class="titulo-secao">Músicos Participantes</h2>

        <div class="cards">

            <div class="card-custom">
                <h3>🎺 Miles Davis</h3>
                <p>Trompete e liderança do projeto.</p>
            </div>

            <div class="card-custom">
                <h3>🎷 John Coltrane</h3>
                <p>Saxofone tenor, uma das maiores lendas do jazz.</p>
            </div>

            <div class="card-custom">
                <h3>🎷 Cannonball Adderley</h3>
                <p>Saxofone alto e improvisações marcantes.</p>
            </div>

            <div class="card-custom">
                <h3>🎹 Bill Evans</h3>
                <p>Piano e importante colaborador do conceito modal.</p>
            </div>

        </div>

    </section>

    <!-- CURIOSIDADES -->

    <section class="secao">

        <h2 class="titulo-secao">Curiosidades</h2>

        <div class="curiosidades">

            <ul>
                <li>📀 É um dos discos de jazz mais vendidos da história.</li>
                <li>🎵 Foi gravado em apenas duas sessões de estúdio.</li>
                <li>🏅 É frequentemente citado como o melhor álbum de jazz já produzido.</li>
                <li>🎺 Influenciou gerações de músicos ao redor do mundo.</li>
                <li>📚 É estudado em escolas de música e universidades.</li>
            </ul>

        </div>

    </section>

    <footer>
        © 2026 Vynil Records • Jazz & Blues Collection
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>