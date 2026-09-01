<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biblioteca | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<style>

/* =========================
   CONFIGURAÇÕES GERAIS
========================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    min-height:100vh;

    background:
    linear-gradient(
        180deg,
        #7000a8 0%,
        #b400d4 55%,
        #ef6c73 100%
    );

    color:white;

}


/* =========================
   BOLINHAS
========================= */

body::before{

    content:"";

    position:fixed;

    width:8px;
    height:8px;

    background:white;

    border-radius:50%;

    opacity:.7;

    top:18%;
    left:12%;

    box-shadow:

        500px 50px white,
        700px 250px white,
        900px 500px white,
        100px 600px white,
        650px 650px white;

    pointer-events:none;

}


/* =========================
   HEADER
========================= */

header{

    width:100%;

    background:#ff7a00;

    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:15px 60px;

    box-shadow:
        0 5px 18px rgba(0,0,0,.25);

    position:sticky;

    top:0;

    z-index:999;

}


/* =========================
   LOGO
========================= */

.logo{

    display:flex;

    align-items:center;

    gap:15px;

}

.logo img{

    width:60px;
    height:60px;

    border-radius:50%;

    object-fit:cover;

    background:white;

}

.logo h2{

    color:white;

    font-size:30px;

    font-weight:800;

}

.logo p{

    color:white;

    font-size:13px;

}


/* =========================
   NAVBAR
========================= */

nav{

    display:flex;

    align-items:center;

    gap:10px;

}

nav a,
nav button{

    border:none;

    background:white;

    color:#ff7a00;

    padding:10px 17px;

    border-radius:30px;

    font-size:14px;

    font-weight:600;

    text-decoration:none;

    cursor:pointer;

    transition:.3s;

}

nav a:hover,
nav button:hover{

    transform:translateY(-3px);

    background:#ffe3cb;

}

nav .ativo{

    background:#ffd84f;

}


/* =========================
   MAIN
========================= */

main{

    width:85%;

    max-width:1200px;

    margin:40px auto;

}


/* =========================
   TÍTULO
========================= */

.titulo{

    text-align:center;

    margin-bottom:30px;

}

.titulo h1{

    color:white;

    font-size:42px;

    font-weight:800;

}

.titulo p{

    color:white;

    font-size:17px;

    margin-top:5px;

}


/* =========================
   PESQUISA
========================= */

.pesquisa{

    display:flex;

    justify-content:center;

    margin-bottom:30px;

}

.pesquisa-box{

    width:500px;

    background:white;

    border-radius:30px;

    padding:5px;

    display:flex;

    align-items:center;

    box-shadow:
        0 8px 20px rgba(0,0,0,.20);

}

.pesquisa-box i{

    color:#9b35d6;

    font-size:18px;

    margin-left:15px;

}

.pesquisa-box input{

    width:100%;

    border:none;

    outline:none;

    padding:12px 15px;

    border-radius:30px;

    font-size:14px;

}


/* =========================
   DOAÇÃO
========================= */

.doacao{

    background:rgba(255,255,255,.15);

    border:1px solid rgba(255,255,255,.35);

    border-radius:20px;

    padding:18px 22px;

    margin-bottom:30px;

    display:flex;

    align-items:center;

    justify-content:space-between;

    backdrop-filter:blur(8px);

}

.doacao-conteudo{

    display:flex;

    align-items:center;

    gap:15px;

}

.doacao-icone{

    width:45px;
    height:45px;

    background:#ff7a00;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:22px;

}

.doacao h3{

    font-size:17px;

}

.doacao p{

    font-size:12px;

    margin-top:3px;

}

.btn-doar{

    border:none;

    background:#ff7a00;

    color:white;

    padding:11px 20px;

    border-radius:25px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;

}

.btn-doar:hover{

    background:#ff9500;

    transform:translateY(-3px);

}


/* =========================
   LIVROS
========================= */

.livros{

    display:grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap:25px;

}


/* =========================
   CARD
========================= */

.card-livro{

    background:white;

    color:#222;

    border-radius:18px;

    overflow:hidden;

    box-shadow:
        0 8px 20px rgba(0,0,0,.20);

    transition:.3s;

}

.card-livro:hover{

    transform:translateY(-6px);

}


/* =========================
   CAPA
========================= */

.capa{

    height:140px;

    background:
    linear-gradient(
        135deg,
        #d99df0,
        #ffbd78
    );

    display:flex;

    justify-content:center;

    align-items:center;

}

.capa i{

    color:white;

    font-size:55px;

    text-shadow:
        0 3px 8px rgba(0,0,0,.15);

}


/* =========================
   CONTEÚDO CARD
========================= */

.card-conteudo{

    padding:18px;

}

.card-topo{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:10px;

}

.categoria{

    background:#ff7a00;

    color:white;

    padding:5px 10px;

    border-radius:15px;

    font-size:10px;

    font-weight:700;

}

.disponivel{

    background:#1ac95c;

    color:white;

    padding:5px 10px;

    border-radius:15px;

    font-size:10px;

    font-weight:700;

}

.esgotado{

    background:#ef4444;

    color:white;

    padding:5px 10px;

    border-radius:15px;

    font-size:10px;

    font-weight:700;

}

.card-livro h2{

    font-size:18px;

    line-height:23px;

    margin-bottom:7px;

}

.autor{

    color:#666;

    font-size:12px;

    margin-bottom:12px;

}

.copias{

    color:#444;

    font-size:12px;

    margin-bottom:12px;

}

.btn-livro{

    width:100%;

    border:none;

    background:#a83de8;

    color:white;

    padding:9px;

    border-radius:20px;

    cursor:pointer;

    font-size:12px;

    font-weight:700;

    transition:.3s;

}

.btn-livro:hover{

    background:#8b2bd0;

}


/* =========================
   MENSAGEM
========================= */

#mensagem{

    display:none;

    position:fixed;

    bottom:25px;

    right:25px;

    background:white;

    color:#333;

    padding:18px 25px;

    border-radius:15px;

    box-shadow:
        0 8px 25px rgba(0,0,0,.25);

    font-weight:600;

    z-index:2000;

}

#mensagem.mostrar{

    display:block;

}


/* =========================
   FOOTER
========================= */

footer{

    margin-top:60px;

    padding:25px;

    text-align:center;

    background:rgba(0,0,0,.12);

}

footer p{

    color:white;

    font-size:14px;

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

        margin-top:18px;

    }

    main{

        width:92%;

    }

    .livros{

        grid-template-columns:
            repeat(2,1fr);

    }

}


@media(max-width:650px){

    .titulo h1{

        font-size:32px;

    }

    .livros{

        grid-template-columns:1fr;

    }

    .doacao{

        flex-direction:column;

        gap:15px;

        text-align:center;

    }

    .doacao-conteudo{

        flex-direction:column;

    }

    .pesquisa-box{

        width:100%;

    }

}

</style>


<body>


<!-- =========================
     HEADER
========================= -->

<header>

    <div class="logo">

        <img
            src="{{ asset('Beth.jpg') }}"
            alt="Beth Cientista"
        >

        <div>

            <h2>BETH CIENTISTA</h2>

            <p>Divulgação Científica</p>

        </div>

    </div>


    <nav>

        <a href="{{ route('aluno.inicio') }}">
            Início
        </a>

        <a href="{{ route('aluno.sobre') }}">
            Sobre Nós
        </a>

        <a href="{{ route('aluno.galeria') }}">
            Galeria
        </a>

        <a class="ativo" href="{{ route('aluno.biblioteca') }}">
            Biblioteca
        </a>

        <a href="{{ route('aluno.mencao') }}">
            Menções Honrosas
        </a>

        <a href="{{ route('aluno.logado') }}">
            Minha area
        </a>

        <a href="{{ route('inicio') }}">
            Sair
        </a>

    </nav>

</header>


<!-- =========================
     CONTEÚDO
========================= -->

<main>


    <section class="titulo">

        <h1>
            BIBLIOTECA BETH CIENTISTA
        </h1>

        <p>
            Acervo de livros científicos para clubistas!
        </p>

    </section>


    <!-- PESQUISA -->

    <section class="pesquisa">

        <div class="pesquisa-box">

            <i class="bi bi-search"></i>

            <input
                type="text"
                id="busca"
                placeholder="Buscar livros por título, autor ou categoria..."
                onkeyup="buscarLivros()"
            >

        </div>

    </section>


    <!-- DOAÇÃO -->

    <section class="doacao">

        <div class="doacao-conteudo">

            <div class="doacao-icone">

                <i class="bi bi-heart"></i>

            </div>

            <div>

                <h3>
                    DOE UM LIVRO!
                </h3>

                <p>
                    Ajude a expandir nossa biblioteca científica!
                </p>

            </div>

        </div>

        <button
            class="btn-doar"
            onclick="doarLivro()"
        >
        <a href="{{ route ('aluno.doacao')}}">Quero doar</a>

        </button>

    </section>


    <!-- LIVROS -->

    <section class="livros" id="listaLivros">


        <!-- LIVRO 1 -->

        <div class="card-livro"
             data-busca="uma breve história do tempo stephen hawking física">

            <div class="capa">

                <i class="bi bi-book"></i>

            </div>

            <div class="card-conteudo">

                <div class="card-topo">

                    <span class="categoria">
                        Física
                    </span>

                    <span class="disponivel">
                        Disponível
                    </span>

                </div>

                <h2>
                    UMA BREVE HISTÓRIA DO TEMPO
                </h2>

                <p class="autor">
                    Stephen Hawking
                </p>

                <p class="copias">
                    2 cópias
                </p>

                <button
                    class="btn-livro"
                    onclick="emprestar('Uma Breve História do Tempo')"
                >

                    Emprestar

                </button>

            </div>

        </div>


        <!-- LIVRO 2 -->

        <div class="card-livro"
             data-busca="cosmos carl sagan astronomia">

            <div class="capa">

                <i class="bi bi-book"></i>

            </div>

            <div class="card-conteudo">

                <div class="card-topo">

                    <span class="categoria">
                        Astronomia
                    </span>

                    <span class="disponivel">
                        Disponível
                    </span>

                </div>

                <h2>
                    COSMOS
                </h2>

                <p class="autor">
                    Carl Sagan
                </p>

                <p class="copias">
                    3 cópias
                </p>

                <button
                    class="btn-livro"
                    onclick="emprestar('Cosmos')"
                >

                    Emprestar

                </button>

            </div>

        </div>


        <!-- LIVRO 3 -->

        <div class="card-livro"
             data-busca="o gene egoísta richard dawkins biologia">

            <div class="capa">

                <i class="bi bi-book"></i>

            </div>

            <div class="card-conteudo">

                <div class="card-topo">

                    <span class="categoria">
                        Biologia
                    </span>

                    <span class="disponivel">
                        Disponível
                    </span>

                </div>

                <h2>
                    O GENE EGOÍSTA
                </h2>

                <p class="autor">
                    Richard Dawkins
                </p>

                <p class="copias">
                    1 cópia
                </p>

                <button
                    class="btn-livro"
                    onclick="emprestar('O Gene Egoísta')"
                >

                    Emprestar

                </button>

            </div>

        </div>


        <!-- LIVRO 4 -->

        <div class="card-livro"
             data-busca="sapiens yuval noah harari história">

            <div class="capa">

                <i class="bi bi-book"></i>

            </div>

            <div class="card-conteudo">

                <div class="card-topo">

                    <span class="categoria">
                        História
                    </span>

                    <span class="esgotado">
                        Esgotado
                    </span>

                </div>

                <h2>
                    SAPIENS
                </h2>

                <p class="autor">
                    Yuval Noah Harari
                </p>

                <p class="copias">
                    0 cópias
                </p>

                <button
                    class="btn-livro"
                    onclick="indisponivel()"
                >

                    Aguardando

                </button>

            </div>

        </div>


        <!-- LIVRO 5 -->

        <div class="card-livro"
             data-busca="o universo numa casca de noz stephen hawking física">

            <div class="capa">

                <i class="bi bi-book"></i>

            </div>

            <div class="card-conteudo">

                <div class="card-topo">

                    <span class="categoria">
                        Física
                    </span>

                    <span class="disponivel">
                        Disponível
                    </span>

                </div>

                <h2>
                    O UNIVERSO NUMA CASCA DE NOZ
                </h2>

                <p class="autor">
                    Stephen Hawking
                </p>

                <p class="copias">
                    1 cópia
                </p>

                <button
                    class="btn-livro"
                    onclick="emprestar('O Universo Numa Casca de Noz')"
                >

                    Emprestar

                </button>

            </div>

        </div>


        <!-- LIVRO 6 -->

        <div class="card-livro"
             data-busca="a origem das espécies charles darwin biologia evolução">

            <div class="capa">

                <i class="bi bi-book"></i>

            </div>

            <div class="card-conteudo">

                <div class="card-topo">

                    <span class="categoria">
                        Biologia
                    </span>

                    <span class="disponivel">
                        Disponível
                    </span>

                </div>

                <h2>
                    A ORIGEM DAS ESPÉCIES
                </h2>

                <p class="autor">
                    Charles Darwin
                </p>

                <p class="copias">
                    2 cópias
                </p>

                <button
                    class="btn-livro"
                    onclick="emprestar('A Origem das Espécies')"
                >

                    Emprestar

                </button>

            </div>

        </div>


    </section>

</main>


<!-- =========================
     MENSAGEM
========================= -->

<div id="mensagem"></div>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        © 2026 Beth Cientista
    </p>

</footer>


<script>

/* =========================
   MENSAGEM
========================= */

function mostrarMensagem(texto){

    const mensagem =
        document.getElementById("mensagem");

    mensagem.innerText = texto;

    mensagem.classList.add("mostrar");

    setTimeout(function(){

        mensagem.classList.remove("mostrar");

    },3000);

}


/* =========================
   BUSCAR LIVROS
========================= */

function buscarLivros(){

    const busca =
        document
        .getElementById("busca")
        .value
        .toLowerCase()
        .trim();

    const livros =
        document.querySelectorAll(".card-livro");

    livros.forEach(function(livro){

        const texto =
            livro
            .getAttribute("data-busca")
            .toLowerCase();

        if(texto.includes(busca)){

            livro.style.display = "";

        }else{

            livro.style.display = "none";

        }

    });

}


/* =========================
   EMPRESTAR
========================= */

function emprestar(nome){

    mostrarMensagem(
        "Solicitação de empréstimo para \"" +
        nome +
        "\" enviada!"
    );

}


/* =========================
   LIVRO INDISPONÍVEL
========================= */

function indisponivel(){

    mostrarMensagem(
        "Este livro está temporariamente indisponível."
    );

}


/* =========================
   DOAÇÃO
========================= */

function doarLivro(){

    mostrarMensagem(
        "Obrigado pelo interesse em doar um livro!"
    );

}

</script>


</body>

</html>