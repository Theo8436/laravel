<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Doe um Livro | Beth Cientista</title>

    <!-- GOOGLE FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<style>

/* =====================================================
   CONFIGURAÇÕES GERAIS
===================================================== */

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

    overflow-x:hidden;

}


/* =====================================================
   BOLINHAS DO FUNDO
===================================================== */

body::before{

    content:"";

    position:fixed;

    width:9px;
    height:9px;

    background:white;

    border-radius:50%;

    top:110px;
    left:12%;

    opacity:.65;

    box-shadow:

        350px 50px white,
        700px 120px white,
        1050px 300px white,
        600px 430px white,
        150px 550px white,
        900px 650px white;

    z-index:0;

}

body::after{

    content:"";

    position:fixed;

    width:8px;
    height:8px;

    background:white;

    border-radius:50%;

    right:15%;
    bottom:20%;

    opacity:.65;

}


/* =====================================================
   HEADER
===================================================== */

header{

    width:100%;

    background:#ff7700;

    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:12px 7%;

    position:sticky;

    top:0;

    z-index:999;

    box-shadow:
        0 5px 18px rgba(0,0,0,.25);

}


/* =====================================================
   LOGO
===================================================== */

.logo{

    display:flex;

    align-items:center;

    gap:15px;

}

.logo img{

    width:60px;
    height:60px;

    border-radius:50%;

    background:white;

    object-fit:cover;

}

.logo h2{

    color:white;

    font-size:28px;

    font-weight:800;

}

.logo p{

    color:white;

    font-size:13px;

}


/* =====================================================
   NAVBAR
===================================================== */

nav{

    display:flex;

    align-items:center;

    gap:8px;

}

nav a{

    text-decoration:none;

    color:white;

    font-weight:600;

    padding:11px 17px;

    border-radius:25px;

    transition:.3s;

}

nav a:hover{

    background:rgba(255,255,255,.18);

    transform:translateY(-2px);

}

nav .ativo{

    background:#ffd343;

    color:#8b35d6;

}


/* =====================================================
   CONTEÚDO
===================================================== */

main{

    width:86%;

    max-width:1100px;

    margin:auto;

    padding:55px 0 70px;

    position:relative;

    z-index:2;

}


/* =====================================================
   TÍTULO
===================================================== */

.titulo{

    text-align:center;

    margin-bottom:45px;

}

.titulo h1{

    font-size:52px;

    font-weight:800;

    text-transform:uppercase;

    text-shadow:
        0 5px 10px rgba(0,0,0,.15);

}

.titulo p{

    margin-top:8px;

    color:#ffe8d2;

    font-size:20px;

    font-weight:600;

}


/* =====================================================
   CARD PRINCIPAL
===================================================== */

.contato{

    width:100%;

    min-height:370px;

    background:
        rgba(255,255,255,.16);

    border:2px solid rgba(255,255,255,.25);

    border-radius:25px;

    backdrop-filter:blur(8px);

    display:flex;

    flex-direction:column;

    align-items:center;

    justify-content:center;

    text-align:center;

    padding:45px;

    position:relative;

    box-shadow:
        0 12px 30px rgba(0,0,0,.22);

}


/* DECORAÇÕES */

.contato::before{

    content:"★";

    position:absolute;

    left:35px;

    top:20px;

    color:#ffc857;

    font-size:35px;

}

.contato::after{

    content:"✦";

    position:absolute;

    right:35px;

    top:20px;

    color:#ffc857;

    font-size:42px;

}


/* =====================================================
   ÍCONE PRINCIPAL
===================================================== */

.icone-contato{

    width:90px;
    height:90px;

    background:#ff8b00;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    margin-bottom:20px;

    box-shadow:
        0 8px 18px rgba(0,0,0,.20);

}

.icone-contato i{

    font-size:45px;

    color:white;

}


/* =====================================================
   TEXTOS
===================================================== */

.contato h2{

    font-size:32px;

    font-weight:800;

    margin-bottom:10px;

}

.contato h3{

    font-size:17px;

    color:#ffe8d2;

    margin-bottom:25px;

}

.contato p{

    max-width:650px;

    line-height:28px;

    font-size:16px;

}


/* =====================================================
   BOTÃO WHATSAPP
===================================================== */

.btn-whatsapp{

    margin-top:28px;

    border:none;

    background:#00d95f;

    color:white;

    padding:16px 30px;

    border-radius:35px;

    font-size:18px;

    font-weight:700;

    cursor:pointer;

    text-decoration:none;

    display:inline-flex;

    align-items:center;

    gap:10px;

    transition:.3s;

    box-shadow:
        0 8px 18px rgba(0,0,0,.20);

}

.btn-whatsapp:hover{

    background:#00bd52;

    transform:translateY(-4px);

    box-shadow:
        0 12px 25px rgba(0,0,0,.25);

}

.btn-whatsapp i{

    font-size:24px;

}


/* =====================================================
   CARDS INFORMATIVOS
===================================================== */

.informacoes{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:25px;

    margin-top:35px;

}

.info-card{

    background:rgba(255,255,255,.16);

    border:2px solid rgba(255,255,255,.25);

    backdrop-filter:blur(8px);

    border-radius:22px;

    padding:30px 25px;

    text-align:center;

    min-height:260px;

    box-shadow:
        0 10px 25px rgba(0,0,0,.18);

    transition:.3s;

}

.info-card:hover{

    transform:translateY(-7px);

    background:rgba(255,255,255,.21);

}


/* =====================================================
   ÍCONES DOS CARDS
===================================================== */

.info-icone{

    width:72px;
    height:72px;

    margin:0 auto 20px;

    background:#ff8b00;

    border-radius:50%;

    display:flex;

    align-items:center;

    justify-content:center;

    box-shadow:
        0 7px 15px rgba(0,0,0,.18);

}

.info-icone i{

    font-size:34px;

    color:white;

}


/* =====================================================
   TEXTOS DOS CARDS
===================================================== */

.info-card h2{

    font-size:21px;

    margin-bottom:18px;

    font-weight:800;

}

.info-card p{

    font-size:15px;

    line-height:27px;

    color:#ffecec;

    font-weight:500;

}


/* =====================================================
   BOTÃO VOLTAR
===================================================== */

.voltar{

    display:flex;

    justify-content:center;

    margin-top:35px;

}

.btn-voltar{

    background:white;

    color:#8b20b7;

    border:none;

    padding:14px 30px;

    border-radius:30px;

    font-size:16px;

    font-weight:700;

    cursor:pointer;

    text-decoration:none;

    transition:.3s;

}

.btn-voltar:hover{

    background:#ffe4ce;

    transform:translateY(-3px);

}


/* =====================================================
   FOOTER
===================================================== */

footer{

    text-align:center;

    padding:30px;

    background:rgba(0,0,0,.12);

    color:white;

    position:relative;

    z-index:2;

}

footer p{

    font-size:14px;

}


/* =====================================================
   RESPONSIVO
===================================================== */

@media(max-width:1000px){

    header{

        flex-direction:column;

        padding:20px;

        gap:15px;

    }

    nav{

        flex-wrap:wrap;

        justify-content:center;

    }

    nav a{

        font-size:14px;

    }

    main{

        width:92%;

    }

    .titulo h1{

        font-size:42px;

    }

    .informacoes{

        grid-template-columns:1fr;

    }

}

@media(max-width:600px){

    .logo{

        flex-direction:column;

        text-align:center;

    }

    .titulo h1{

        font-size:32px;

    }

    .titulo p{

        font-size:16px;

    }

    .contato{

        padding:35px 20px;

    }

    .contato h2{

        font-size:25px;

    }

    .contato h3{

        font-size:15px;

    }

    .btn-whatsapp{

        font-size:16px;

        padding:14px 22px;

    }

}

</style>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header>

    <div class="logo">

        <img src="{{ asset('Beth.jpg') }}"
             alt="Beth Cientista">

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

        <a href="{{ route('aluno.biblioteca') }}">
            Biblioteca
        </a>

        <a href="{{ route('aluno.mencao') }}">
            Menções Honrosas
        </a>

        <a class="ativo" href="{{ route('aluno.logado') }}">
            Minha area
        </a>

        <a href="{{ route('inicio') }}">
            Sair
        </a>

    </nav>

</header>


<!-- =====================================================
     MAIN
===================================================== -->

<main>


    <!-- TÍTULO -->

    <section class="titulo">

        <h1>
            DOE UM LIVRO!
        </h1>

        <p>
            Ajude a expandir nossa biblioteca científica!
        </p>

    </section>


    <!-- =================================================
         CONTATO
    ================================================== -->

    <section class="contato">


        <div class="icone-contato">

            <i class="bi bi-chat"></i>

        </div>


        <h2>
            ENTRE EM CONTATO!
        </h2>


        <h3>
            Fale conosco pelo WhatsApp
        </h3>


        <p>

            Tem livros científicos que gostaria de compartilhar
            com outros Clubistas?

            Entre em contato conosco para combinar a entrega
            e ajudar nossa biblioteca a crescer.

        </p>


        <!-- BOTÃO WHATSAPP -->

        <a
            class="btn-whatsapp"
            href="https://wa.me/5500000000000?text=Olá!%20Gostaria%20de%20doar%20um%20livro%20para%20a%20Beth%20Cientista."
            target="_blank"
        >

            <i class="bi bi-whatsapp"></i>

            Abrir WhatsApp

        </a>


    </section>


    <!-- =================================================
         CARDS
    ================================================== -->

    <section class="informacoes">


        <!-- CARD 1 -->

        <div class="info-card">

            <div class="info-icone">

                <i class="bi bi-book"></i>

            </div>

            <h2>
                LIVROS ACEITOS
            </h2>

            <p>

                Livros científicos<br>

                Divulgação científica<br>

                Biografias de cientistas

            </p>

        </div>


        <!-- CARD 2 -->

        <div class="info-card">

            <div class="info-icone">

                <i class="bi bi-box-seam"></i>

            </div>

            <h2>
                COMO DOAR
            </h2>

            <p>

                1. Entre em contato<br>

                2. Informe os livros<br>

                3. Combine a entrega

            </p>

        </div>


        <!-- CARD 3 -->

        <div class="info-card">

            <div class="info-icone">

                <i class="bi bi-heart"></i>

            </div>

            <h2>
                SEU IMPACTO
            </h2>

            <p>

                Inspire jovens<br>

                Apoie a ciência<br>

                Transforme vidas

            </p>

        </div>


    </section>


    <!-- =================================================
         VOLTAR
    ================================================== -->

    <div class="voltar">

        <a
            href="{{ route('aluno.inicio') }}"
            class="btn-voltar"
        >

            <i class="bi bi-arrow-left"></i>

            Voltar para o início

        </a>

        <a
            href="{{ route('aluno.biblioteca') }}"
            class="btn-voltar"
        >

            <i class="bi bi-arrow-left"></i>

            Voltar para a biblioteca

        </a>

    </div>


</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <p>
        © 2026 Beth Cientista — Divulgação Científica
    </p>

</footer>


</body>

</html>