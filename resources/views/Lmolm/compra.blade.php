<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato | Vynil Records</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Roboto:wght@300;400;500&display=swap');

        body{
            background-color: #f5efe6;
            font-family: 'Roboto', sans-serif;
            min-height: 100vh;
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
            margin-left: 20px;
            font-size: 1.1rem;
            transition: .3s;
        }

        .nav-link:hover{
            color: #d9a066 !important;
        }

        /* CONTAINER */

        .conteudo{
            max-width: 1200px;
            margin: 60px auto;
            display: flex;
            gap: 50px;
            justify-content: center;
            align-items: stretch;
            padding: 20px;
        }

        /* CARD */

        .info-card{
            width: 400px;
            background-color: #fff8f0;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,.15);
        }

        .info-card img{
            height: 300px;
            object-fit: cover;
            border-bottom: 4px solid #7b2d26;
        }

        .info-card .card-body{
            padding: 25px;
        }

        .info-card .card-title{
            color: #7b2d26;
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .info-card .card-text{
            color: #5d4037;
            line-height: 1.7;
        }

        /* FORMULÁRIO */

        .formulario{
            flex: 1;
            background-color: #fff8f0;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,.15);
        }

        .formulario h2{
            font-family: 'Playfair Display', serif;
            color: #5c1d1d;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label{
            color: #5c1d1d;
            font-weight: 500;
        }

        .form-control,
        .form-select{
            border: 2px solid #d8c2ae;
            border-radius: 10px;
            padding: 10px;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: #7b2d26;
            box-shadow: 0 0 0 .15rem rgba(123,45,38,.25);
        }

        .btn-primary{
            background-color: #7b2d26;
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            margin-top: 20px;
            width: 100%;
        }

        .btn-primary:hover{
            background-color: #5c1d1d;
        }

        /* RESPONSIVO */

        @media(max-width: 900px){

            .conteudo{
                flex-direction: column;
                align-items: center;
            }

            .info-card{
                width: 100%;
                max-width: 450px;
            }

            .formulario{
                width: 100%;
            }
        }

    </style>
</head>

<body>

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

<div class="conteudo">

    <!-- CARD ESQUERDA -->

    <div class="card info-card">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJn7PHnnGkGEwpnveZy7XNqZGxCk9YCx1rTg2MJRLnUg&s=10" alt="Vinil">

        <div class="card-body">

            <h5 class="card-title">Love Me Or Leave Me</h5>

            <p class="card-text">
            "Love Me or Leave Me" é uma interpretação icônica de Nina Simone para o clássico composto por Walter Donaldson e Gus Kahn. A versão de Simone mistura jazz, blues e seu estilo único ao piano, transformando a música em uma performance intensa e sofisticada sobre amor e independência.
            </p>
            <p>  Álbum novo: R$250,00</p>

        </div>

    </div>

    <!-- FORMULÁRIO DIREITA -->

    <div class="formulario">

        <h2>Compre</h2>

        <form>

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="tel" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Forma de Pagamento</label>

                <select class="form-select">
                    <option selected>Selecione</option>
                    <option>Cartão de Débito</option>
                    <option>Cartão de Crédito</option>
                    <option>Pix</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                Enviar
            </button>

        </form>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>