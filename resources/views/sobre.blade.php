<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sobre Nós | Beth Cientista</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<style>
    /* ===========================
   CONFIGURAÇÕES GERAIS
=========================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:linear-gradient(180deg,#7a00b8 0%,#bf00d4 45%,#f36f6f 100%);
    color:#fff;
    min-height:100vh;
}

/* ===========================
HEADER
=========================== */

header{

    width:100%;
    height:85px;

    background:#ff7300;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:0 70px;

    box-shadow:0 5px 18px rgba(0,0,0,.25);

    position:sticky;
    top:0;
    z-index:1000;

}

.logo{

    display:flex;
    align-items:center;
    gap:15px;

}

.logo img{

    width:55px;
    height:55px;
    border-radius:50%;
    background:white;

}

.logo h2{

    font-size:30px;
    font-weight:800;
    line-height:25px;

}

.logo p{

    font-size:13px;

}

/* ===========================
MENU
=========================== */

nav{

    display:flex;
    align-items:center;
    gap:12px;

}

nav button{

    background:white;

    border:none;

    color:#ff7300;

    padding:10px 20px;

    border-radius:30px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

nav button:hover{

    transform:translateY(-3px);

    background:#ffe0c4;

}

nav .ativo{

    background:#ffd43b;

}

/* ===========================
MAIN
=========================== */

main{

    width:80%;
    margin:auto;
    padding:50px 0 80px;

}

/* ===========================
TÍTULO
=========================== */

.titulo{

    text-align:center;
    margin-bottom:70px;

}

.titulo h1{

    font-size:60px;
    font-weight:800;

}

.titulo p{

    margin-top:15px;
    font-size:20px;

}

/* ===========================
HISTÓRIA
=========================== */

.historia{

    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:60px;

    margin-bottom:70px;

}

.historia .texto{

    flex:1;

}

.historia h2{

    font-size:35px;
    margin-bottom:20px;

}

.historia p{

    line-height:32px;
    margin-bottom:20px;

}

.historia img{

    width:500px;

    border-radius:18px;

    box-shadow:0 10px 30px rgba(0,0,0,.30);

}

/* ===========================
CARDS
=========================== */

.cards{

    display:flex;
    justify-content:center;
    gap:30px;

    margin-bottom:80px;

}

.card{

    width:320px;

    background:white;

    color:#222;

    border-radius:20px;

    padding:35px;

    text-align:center;

    transition:.35s;

    box-shadow:0 8px 20px rgba(0,0,0,.25);

}

.card:hover{

    transform:translateY(-10px);

}

.card i{

    width:80px;
    height:80px;

    background:#ff8c00;

    color:white;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:35px;

    margin:auto;
    margin-bottom:20px;

}

.card h3{

    margin-bottom:15px;

}

.card p{

    color:#555;
    line-height:28px;

}

/* ===========================
O QUE FAZEMOS
=========================== */

.fazemos{

    display:flex;
    align-items:center;
    justify-content:space-between;

    gap:60px;

    margin-bottom:80px;

}

.fazemos img{

    width:500px;

    border-radius:18px;

    box-shadow:0 10px 30px rgba(0,0,0,.30);

}

.fazemos h2{

    font-size:35px;

    margin-bottom:20px;

}

.fazemos p{

    line-height:30px;

    margin-bottom:20px;

}

/* ===========================
EQUIPE
=========================== */

.equipe{

    text-align:center;

    margin-top:50px;

}

.equipe i{

    width:90px;
    height:90px;

    background:#ff8c00;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:40px;

    margin:auto;
    margin-bottom:20px;

}

.equipe h2{

    font-size:38px;

    margin-bottom:15px;

}

.equipe p{

    font-size:18px;

}

/* ===========================
FOOTER
=========================== */

footer{

    text-align:center;

    padding:35px;

    margin-top:70px;

    background:rgba(0,0,0,.15);

}

/* ===========================
RESPONSIVO
=========================== */

@media(max-width:1100px){

header{

    flex-direction:column;

    height:auto;

    padding:20px;

}

nav{

    margin-top:20px;

    flex-wrap:wrap;
    justify-content:center;

}

main{

    width:92%;

}

.historia,
.fazemos{

    flex-direction:column;

}

.historia img,
.fazemos img{

    width:100%;

}

.cards{

    flex-wrap:wrap;

}

.card{

    width:100%;

}

.titulo h1{

    font-size:45px;

}

}
</style>
<body>

<header>

    <div class="logo">

        <img src="img/logo.png" alt="Logo">

        <div>

            <h2>BETH CIENTISTA</h2>

            <p>Divulgação Científica</p>

        </div>

    </div>

    <nav>

       <a href="{{ route('inicio') }}" class="btn">Inicio</a>

        <button class="ativo">Sobre Nós</button>

        <a href="{{ route('galeria') }}" class="btn">Galeria</a>

        <a href="{{ route('biblioteca') }}" class="btn">Biblioteca</a>

        <a href="{{ route('mencao') }}" class="btn">Menções Honrosas</a>

        <a href="{{ route('login') }}" class="btn">Entrar</a>
            <i class="bi bi-box-arrow-in-right"></i>


    </nav>

</header>

<main>

<section class="titulo">

    <h1>SOBRE NÓS</h1>

    <p>Conheça a história e missão da Beth Cientista</p>

</section>

<section class="historia">

    <div class="texto">

        <h2>NOSSA HISTÓRIA</h2>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>

        <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.
        </p>

        <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
        </p>

    </div>

    <div class="imagem">

        <img src="img/laboratorio.jpg" alt="Laboratório">

    </div>

</section>

<section class="cards">

    <div class="card">

        <i class="bi bi-bullseye"></i>

        <h3>NOSSA MISSÃO</h3>

        <p>
            Incentivar crianças e jovens a conhecerem a ciência.
        </p>

    </div>

    <div class="card">

        <i class="bi bi-heart"></i>

        <h3>NOSSOS VALORES</h3>

        <p>

            Educação, inclusão, criatividade e inovação.

        </p>

    </div>

    <div class="card">

        <i class="bi bi-lightbulb"></i>

        <h3>NOSSA VISÃO</h3>

        <p>

            Tornar a ciência acessível para todos.

        </p>

    </div>

</section>

<section class="fazemos">

    <div class="imagem">

        <img src="img/equipe.jpg" alt="Equipe">

    </div>

    <div class="texto">

        <h2>O QUE FAZEMOS</h2>

        <p>

            Desenvolvemos conteúdos educativos, jogos,
            atividades e projetos voltados para a divulgação científica.

        </p>

        <p>

            Nosso objetivo é despertar a curiosidade e o interesse
            dos estudantes pela ciência.

        </p>

    </div>

</section>

<section class="equipe">

    <i class="bi bi-people-fill"></i>

    <h2>NOSSA EQUIPE</h2>

    <p>

        Jovens apaixonados por ciência e divulgação científica.

    </p>

</section>

</main>

<footer>

<p>

© 2026 Beth Cientista - Todos os direitos reservados.

</p>

</footer>

<script src="script.js"></script>

</body>

</html>