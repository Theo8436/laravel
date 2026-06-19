<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre | Vynil Records</title>

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
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
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
            font-size: 1.1rem;
            margin-left: 20px;
            transition: 0.3s;
        }

        .nav-link:hover{
            color: #d9a066 !important;
        }

        /* TÍTULO */

        .titulo{
            text-align: center;
            font-family: 'Playfair Display', serif;
            color: #5c1d1d;
            font-size: 3rem;
            margin: 50px 0;
            letter-spacing: 2px;
        }

        /* CARDS */

        .cards-container{
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .card-sobre{
            width: 540px;
            background-color: #fff8f0;
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transition: 0.3s;
        }

        .card-sobre:hover{
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(92,29,29,0.25);
        }

        .card-sobre img{
            height: 100%;
            object-fit: cover;
            border-right: 4px solid #7b2d26;
        }

        .card-body{
            padding: 25px;
        }

        .card-title{
            font-family: 'Playfair Display', serif;
            color: #7b2d26;
            font-size: 1.8rem;
            font-weight: bold;
        }

        .card-text{
            color: #5d4037;
            line-height: 1.7;
        }

        .text-body-secondary{
            color: #a65d57 !important;
            font-style: italic;
        }

        /* LOCALIZAÇÃO */

        .localizacao{
            max-width: 900px;
            margin: 70px auto;
            padding: 0 20px;
            text-align: center;
        }

        .localizacao h2{
            font-family: 'Playfair Display', serif;
            color: #5c1d1d;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .local-card{
            background-color: #fff8f0;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transition: 0.3s;
        }

        .local-card:hover{
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(92,29,29,0.25);
        }

        .local-card h4{
            font-family: 'Playfair Display', serif;
            color: #7b2d26;
            margin-bottom: 20px;
        }

        .local-card p{
            color: #5d4037;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        /* RESPONSIVO */

        @media (max-width: 768px){

            .titulo{
                font-size: 2.2rem;
            }

            .card-sobre{
                width: 100%;
            }

            .card-sobre img{
                border-right: none;
                border-bottom: 4px solid #7b2d26;
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
                    <a class="nav-link" href="{{ route('disco.disco')}}">Discos</a>
                </div>
            </div>

        </div>
    </nav>

    <!-- TÍTULO -->

    <h1 class="titulo">Sobre Nós</h1>

    <!-- CARDS -->

    <div class="cards-container">

        <!-- SCARLET (ESQUERDA) -->

        <div class="card mb-3 card-sobre">
            <div class="row g-0">

                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?w=800"
                         class="img-fluid rounded-start"
                         alt="Scarlet">
                </div>

                <div class="col-md-8">
                    <div class="card-body">

                        <h5 class="card-title">Scarlet</h5>

                        <p class="card-text">
                            Scarlet nasceu da paixão pela música em vinil e pela cultura
                            do jazz e blues. Nosso objetivo é conectar colecionadores e
                            amantes da música aos discos mais marcantes da história.
                        </p>

                        <p class="card-text">
                            <small class="text-body-secondary">
                                Your favourite vinyl records
                            </small>
                        </p>

                    </div>
                </div>

            </div>
        </div>

        <!-- VYNIL RECORDS (DIREITA) -->

        <div class="card mb-3 card-sobre">
            <div class="row g-0">

                <div class="col-md-4">
                    <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=800"
                         class="img-fluid rounded-start"
                         alt="Vynil Records">
                </div>

                <div class="col-md-8">
                    <div class="card-body">

                        <h5 class="card-title">Vynil Records</h5>

                        <p class="card-text">
                            A Vynil Records oferece uma seleção exclusiva de discos de jazz,
                            blues e clássicos atemporais. Nossa loja é um espaço dedicado
                            à música e aos apaixonados por vinis.
                        </p>

                        <p class="card-text">
                            <small class="text-body-secondary">
                                Always listen
                            </small>
                        </p>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- LOCALIZAÇÃO -->

    <section class="localizacao">

        <h2>📍 Nossa Localização</h2>

        <div class="local-card">

            <h4>Vynil Records</h4>

            <p>
                Rua dos Vinis, 123<br>
                Centro - Tatuí/SP<br>
                CEP: 18270-000
            </p>

            <p>
                Segunda a Sábado<br>
                09:00 às 18:00
            </p>

            <p>
                📞 (15) 3333-4444<br>
                ✉ contato@vynilrecords.com
            </p>

        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>