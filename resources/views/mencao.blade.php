<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menções Honrosas | Beth Cientista</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<style>
    /* =========================
   GERAL
========================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:linear-gradient(180deg,#6f0ea7 0%,#b217c7 55%,#ea6b72 100%);
    color:#fff;
    min-height:100vh;

}

/* =========================
HEADER
========================= */

header{

    width:100%;
    background:#ff7700;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:12px 70px;

    position:sticky;
    top:0;

    z-index:999;

    box-shadow:0 5px 15px rgba(0,0,0,.25);

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

    font-size:28px;
    font-weight:800;

}

.logo p{

    font-size:13px;

}

nav{

    display:flex;
    gap:10px;

}

nav button{

    border:none;

    background:white;

    color:#ff7300;

    padding:10px 18px;

    border-radius:25px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

nav button:hover{

    transform:translateY(-3px);

    background:#ffe5cb;

}

.ativo{

    background:#ffd343;
}

/* =========================
MAIN
========================= */

main{

    width:85%;
    margin:auto;
    padding:50px 0;

}

/* =========================
TITULO
========================= */

.titulo{

    text-align:center;

    margin-bottom:60px;

}

.titulo h1{

    font-size:55px;

    font-weight:800;

}

.titulo p{

    margin-top:10px;

    font-size:20px;

}

/* =========================
CARDS
========================= */

.mencoes{

    display:grid;

    grid-template-columns:repeat(2,1fr);

    gap:30px;

}

.card{

    background:white;

    color:#222;

    border-radius:20px;

    padding:25px;

    box-shadow:0 12px 25px rgba(0,0,0,.25);

    transition:.35s;

}

.card:hover{

    transform:translateY(-8px);

}

.topo{

    display:flex;

    align-items:center;

    gap:12px;

    margin-bottom:20px;

}

.topo i{

    width:42px;
    height:42px;

    border-radius:50%;

    background:#ff8b00;

    color:white;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:20px;

}

.topo span{

    background:#ff8b00;

    color:white;

    padding:6px 14px;

    border-radius:20px;

    font-size:13px;

    font-weight:600;

}

.card h2{

    font-size:25px;

    margin-bottom:12px;

    line-height:34px;

}

.card h4{

    color:#666;

    margin-bottom:15px;

}

.card p{

    color:#555;

    line-height:28px;

}

/* =========================
CONTINUE BRILHANDO
========================= */

.parabens{

    display:flex;

    justify-content:center;

    margin-top:70px;

}

.caixa{

    width:700px;

    background:rgba(255,255,255,.12);

    border:2px solid rgba(255,255,255,.25);

    backdrop-filter:blur(8px);

    padding:45px;

    border-radius:25px;

    text-align:center;

    box-shadow:0 12px 25px rgba(0,0,0,.25);

}

.icone{

    width:80px;
    height:80px;

    background:#ff8b00;

    color:white;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:38px;

    margin:auto;

    margin-bottom:20px;

}

.caixa h2{

    font-size:38px;

    margin-bottom:20px;

}

.caixa p{

    line-height:30px;

}

/* =========================
FOOTER
========================= */

footer{

    margin-top:70px;

    text-align:center;

    padding:30px;

    background:rgba(0,0,0,.12);

}

/* =========================
EFEITO NAS BOLINHAS
========================= */

body::before{

    content:"";

    position:fixed;

    width:10px;
    height:10px;

    background:white;

    border-radius:50%;

    top:120px;
    left:18%;

    box-shadow:
    500px 50px white,
    180px 320px white,
    720px 450px white,
    100px 610px white,
    900px 200px white,
    400px 770px white;

    opacity:.7;

}

/* =========================
RESPONSIVO
========================= */

@media(max-width:1000px){

header{

    flex-direction:column;

    padding:20px;

}

nav{

    flex-wrap:wrap;

    justify-content:center;

    margin-top:15px;

}

main{

    width:92%;

}

.mencoes{

    grid-template-columns:1fr;

}

.caixa{

    width:100%;

}

.titulo h1{

    font-size:42px;

}

.card h2{

    font-size:22px;

}

}
</style>
<body>

<header>

    <div class="logo">

        <img src="img/logo.png">

        <div>

            <h2>BETH CIENTISTA</h2>

            <p>Divulgação Científica</p>

        </div>

    </div>

    <nav>

        <a href="{{ route('inicio') }}">Início</a>

        <a href="{{ route('sobre') }}">Sobre Nós</a>

        <a href="{{ route('galeria') }}">Galeria</a>

        <a href="{{ route('biblioteca') }}">Biblioteca</a>

        <a class="active" href="{{ route('mencao') }}">Menções honrosas</a>

        <a href="{{ route('escolha') }}">Faça Parte</a>

        <a href="{{ route('entrar') }}">Entrar</a>

    </nav>

</header>

<main>

<section class="titulo">

<h1>MENÇÕES HONROSAS</h1>

<p>

Celebrando as conquistas e realizações dos nossos Clubistas!

</p>

</section>

<section class="mencoes">

<div class="card">

<div class="topo">

<i class="bi bi-trophy-fill"></i>

<span>Março 2026</span>

</div>

<h2>

1º LUGAR NA OLIMPÍADA BRASILEIRA DE ASTRONOMIA

</h2>

<h4>Maria Silva</h4>

<p>

Conquista medalha de ouro na categoria ensino médio,
demonstrando excelente conhecimento em astronomia.

</p>

</div>

<div class="card">

<div class="topo">

<i class="bi bi-award-fill"></i>

<span>Fevereiro 2026</span>

</div>

<h2>

ARTIGO PUBLICADO EM REVISTA CIENTÍFICA JOVEM

</h2>

<h4>João Santos</h4>

<p>

Artigo sobre biologia celular aceito e publicado
na Revista Jovem Cientista.

</p>

</div>

<div class="card">

<div class="topo">

<i class="bi bi-star-fill"></i>

<span>Janeiro 2026</span>

</div>

<h2>

MELHOR PROJETO NA FEIRA DE CIÊNCIAS ESTADUAL

</h2>

<h4>Ana Costa</h4>

<p>

Projeto sobre energias renováveis foi destaque
na feira.

</p>

</div>

<div class="card">

<div class="topo">

<i class="bi bi-trophy-fill"></i>

<span>Dezembro 2025</span>

</div>

<h2>

MEDALHA DE BRONZE NA OLIMPÍADA DE QUÍMICA

</h2>

<h4>Pedro Almeida</h4>

<p>

Excelente desempenho na olimpíada nacional.

</p>

</div>

<div class="card">

<div class="topo">

<i class="bi bi-award-fill"></i>

<span>Novembro 2025</span>

</div>

<h2>

BOLSA DE INICIAÇÃO CIENTÍFICA JR.

</h2>

<h4>Carla Mendes</h4>

<p>

Selecionada para programa de iniciação científica
na universidade federal.

</p>

</div>

<div class="card">

<div class="topo">

<i class="bi bi-person-fill-check"></i>

<span>Outubro 2025</span>

</div>

<h2>

DESTAQUE NO PROGRAMA DE MENTORIA CIENTÍFICA

</h2>

<h4>Lucas Ferreira</h4>

<p>

Reconhecido pela dedicação e progresso
no programa de mentoria.

</p>

</div>

</section>

<section class="parabens">

<div class="caixa">

<div class="icone">

<i class="bi bi-trophy-fill"></i>

</div>

<h2>

CONTINUE BRILHANDO!

</h2>

<p>

Cada conquista é resultado de dedicação,
curiosidade e paixão pela ciência.

Parabéns a todos os Clubistas!

</p>

</div>

</section>

</main>

<footer>

<p>

© 2026 Beth Cientista

</p>

</footer>

<script src="script.js"></script>

</body>

</html>