<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeria | Beth Cientista</title>

    <!-- FONTE -->

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
        135deg,
        #7000a8 0%,
        #b500d6 50%,
        #ef6b72 100%
    );

    color:white;

}


/* =====================================================
   BOLINHAS DO FUNDO
===================================================== */

body::before{

    content:"";

    position:fixed;

    width:9px;
    height:9px;

    border-radius:50%;

    background:white;

    opacity:.55;

    top:105px;
    left:28%;

    box-shadow:

        500px 50px white,
        850px 100px white,
        150px 170px white,
        950px 350px white,
        700px 500px white,
        1100px 650px white,
        250px 700px white;

    pointer-events:none;

}


/* =====================================================
   HEADER
===================================================== */

header{

    width:100%;

    min-height:100px;

    background:#ff7700;

    display:flex;

    align-items:center;

    justify-content:space-between;

    padding:12px 6%;

    box-shadow:
        0 5px 18px rgba(0,0,0,.25);

    position:sticky;

    top:0;

    z-index:1000;

}


/* =====================================================
   LOGO
===================================================== */

.logo{

    display:flex;

    align-items:center;

    gap:14px;

    flex-shrink:0;

}

.logo img{

    width:65px;
    height:65px;

    object-fit:cover;

    border-radius:50%;

    background:white;

    border:3px solid white;

}

.logo-text h2{

    color:white;

    font-size:28px;

    font-weight:800;

    line-height:1;

}

.logo-text p{

    color:white;

    font-size:13px;

    margin-top:5px;

}


/* =====================================================
   NAVBAR
===================================================== */

nav{

    display:flex;

    align-items:center;

    gap:0;

    background:rgba(255,255,255,.08);

    padding:8px 10px;

    border-radius:40px;

}

nav a{

    text-decoration:none;

    color:white;

    font-size:15px;

    font-weight:600;

    padding:12px 20px;

    border-right:1px solid rgba(255,255,255,.35);

    transition:.3s;

}

nav a:last-child{

    border-right:none;

}

nav a:hover{

    color:#ffd343;

    transform:translateY(-2px);

}


/* ITEM ATIVO */

nav a.ativo{

    color:#ffd343;

}


/* BOTÃO FAÇA PARTE */

nav .faca-parte{

    background:#ffd343;

    color:#7b22a8;

    border-radius:10px;

    margin-left:10px;

    border:none;

}

nav .faca-parte:hover{

    background:#ffe47c;

    color:#7b22a8;

}


/* BOTÃO ENTRAR */

nav .entrar{

    background:white;

    color:#9b27e8;

    border-radius:10px;

    margin-left:10px;

    border:none;

}

nav .entrar:hover{

    background:#f3e7ff;

    color:#7b22a8;

}


/* =====================================================
   MAIN
===================================================== */

main{

    width:88%;

    max-width:1400px;

    margin:0 auto;

    padding:55px 0 80px;

}


/* =====================================================
   TÍTULO
===================================================== */

.titulo{

    text-align:center;

    margin-bottom:55px;

}

.titulo h1{

    font-size:58px;

    font-weight:800;

    color:white;

    line-height:1.1;

    text-transform:uppercase;

    text-shadow:
        0 5px 10px rgba(0,0,0,.12);

}

.titulo p{

    margin-top:15px;

    color:#ffe7df;

    font-size:21px;

    font-weight:600;

}


/* =====================================================
   GALERIA
===================================================== */

.galeria{

    display:grid;

    grid-template-columns:
        repeat(4, 1fr);

    gap:34px;

}


/* =====================================================
   CARD DA FOTO
===================================================== */

.foto-card{

    position:relative;

    background:white;

    border-radius:25px;

    overflow:hidden;

    box-shadow:
        0 12px 28px rgba(0,0,0,.25);

    transition:.35s;

    cursor:pointer;

}

.foto-card:hover{

    transform:
        translateY(-8px)
        scale(1.01);

    box-shadow:
        0 18px 35px rgba(0,0,0,.30);

}


/* =====================================================
   IMAGEM
===================================================== */

.foto-card img{

    width:100%;

    height:280px;

    object-fit:cover;

    display:block;

    transition:.4s;

}

.foto-card:hover img{

    transform:scale(1.05);

}


/* =====================================================
   INFORMAÇÕES DA FOTO
===================================================== */

.info{

    background:white;

    color:#222;

    padding:18px 20px;

}

.info h3{

    font-size:19px;

    font-weight:700;

    margin-bottom:5px;

}

.info p{

    color:#777;

    font-size:14px;

    line-height:21px;

}


/* =====================================================
   ÍCONE
===================================================== */

.icone-foto{

    position:absolute;

    top:15px;

    right:15px;

    width:42px;
    height:42px;

    border-radius:50%;

    background:#ff7700;

    display:flex;

    justify-content:center;

    align-items:center;

    color:white;

    font-size:20px;

    box-shadow:
        0 5px 12px rgba(0,0,0,.25);

}


/* =====================================================
   SEÇÃO FINAL
===================================================== */

.mensagem-final{

    margin-top:65px;

    display:flex;

    justify-content:center;

}

.caixa-final{

    width:700px;

    padding:40px;

    text-align:center;

    border-radius:25px;

    background:
        rgba(255,255,255,.12);

    border:
        2px solid rgba(255,255,255,.25);

    backdrop-filter:blur(8px);

    box-shadow:
        0 12px 25px rgba(0,0,0,.20);

}

.caixa-final i{

    display:flex;

    align-items:center;
    justify-content:center;

    width:70px;
    height:70px;

    margin:0 auto 18px;

    background:#ff7700;

    border-radius:50%;

    font-size:32px;

}

.caixa-final h2{

    font-size:30px;

    margin-bottom:12px;

}

.caixa-final p{

    font-size:16px;

    line-height:27px;

    color:#ffe7df;

}


/* =====================================================
   FOOTER
===================================================== */

footer{

    text-align:center;

    padding:30px;

    background:
        rgba(0,0,0,.12);

}

footer p{

    color:white;

    font-size:14px;

}


/* =====================================================
   RESPONSIVO
===================================================== */

@media(max-width:1200px){

    header{

        padding:15px 3%;

    }

    nav a{

        padding:10px 12px;

        font-size:13px;

    }

    .galeria{

        grid-template-columns:
            repeat(3,1fr);

    }

}


@media(max-width:900px){

    header{

        flex-direction:column;

        gap:20px;

        padding:20px;

    }

    nav{

        flex-wrap:wrap;

        justify-content:center;

    }

    .galeria{

        grid-template-columns:
            repeat(2,1fr);

    }

    .titulo h1{

        font-size:45px;

    }

}


@media(max-width:600px){

    main{

        width:92%;

        padding-top:40px;

    }

    .logo{

        flex-direction:column;

        text-align:center;

    }

    nav{

        width:100%;

        border-radius:20px;

    }

    nav a{

        padding:8px;

        font-size:11px;

    }

    .galeria{

        grid-template-columns:1fr;

    }

    .foto-card img{

        height:260px;

    }

    .titulo h1{

        font-size:35px;

    }

    .titulo p{

        font-size:16px;

    }

    .caixa-final{

        padding:30px 20px;

    }

}

</style>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header>

    <div class="logo">

        <img
            src="{{ asset('Beth.jpg') }}"
            alt="Beth Cientista"
        >

        <div class="logo-text">

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

        <a class="ativo" href="{{ route('aluno.galeria') }}">
            Galeria
        </a>

        <a href="{{ route('aluno.biblioteca') }}">
            Biblioteca
        </a>

        <a href="{{ route('aluno.mencao') }}">
            Menções Honrosas
        </a>

        <a  href="{{ route('aluno.logado') }}">
            Minha Area
        </a>

        <a href="{{ route('inicio') }}">
            Sair
        </a>

    </nav>

</header>


<!-- =====================================================
     CONTEÚDO
===================================================== -->

<main>


    <!-- TÍTULO -->

    <section class="titulo">

        <h1>
            GALERIA DE FOTOS
        </h1>

        <p>
            Momentos especiais e atividades do grupo Beth Cientista!
        </p>

    </section>


    <!-- =================================================
         GALERIA
    ================================================== -->

    <section class="galeria">


        <!-- FOTO 1 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto1.jpg') }}"
                alt="Atividade científica"
            >

            <div class="icone-foto">

                <i class="bi bi-camera-fill"></i>

            </div>

            <div class="info">

                <h3>
                    Atividades Científicas
                </h3>

                <p>
                    Momentos de aprendizado e descobertas.
                </p>

            </div>

        </div>


        <!-- FOTO 2 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto2.jpg') }}"
                alt="Experimento científico"
            >

            <div class="icone-foto">

                <i class="bi bi-flask-fill"></i>

            </div>

            <div class="info">

                <h3>
                    Experimentos
                </h3>

                <p>
                    Experiências realizadas pelos clubistas.
                </p>

            </div>

        </div>


        <!-- FOTO 3 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto3.jpg') }}"
                alt="Aula de ciências"
            >

            <div class="icone-foto">

                <i class="bi bi-mortarboard-fill"></i>

            </div>

            <div class="info">

                <h3>
                    Aulas e Encontros
                </h3>

                <p>
                    Momentos de interação e conhecimento.
                </p>

            </div>

        </div>


        <!-- FOTO 4 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto4.jpg') }}"
                alt="Estudos"
            >

            <div class="icone-foto">

                <i class="bi bi-book-fill"></i>

            </div>

            <div class="info">

                <h3>
                    Estudos
                </h3>

                <p>
                    Clubistas estudando e compartilhando conhecimento.
                </p>

            </div>

        </div>


        <!-- FOTO 5 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto5.jpg') }}"
                alt="Evento científico"
            >

            <div class="icone-foto">

                <i class="bi bi-stars"></i>

            </div>

            <div class="info">

                <h3>
                    Eventos
                </h3>

                <p>
                    Participação em eventos e atividades especiais.
                </p>

            </div>

        </div>


        <!-- FOTO 6 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto6.jpg') }}"
                alt="Projeto científico"
            >

            <div class="icone-foto">

                <i class="bi bi-lightbulb-fill"></i>

            </div>

            <div class="info">

                <h3>
                    Projetos
                </h3>

                <p>
                    Projetos desenvolvidos pelos participantes.
                </p>

            </div>

        </div>


        <!-- FOTO 7 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto7.jpg') }}"
                alt="Biblioteca"
            >

            <div class="icone-foto">

                <i class="bi bi-journal-bookmark-fill"></i>

            </div>

            <div class="info">

                <h3>
                    Biblioteca
                </h3>

                <p>
                    Momentos de leitura e pesquisa científica.
                </p>

            </div>

        </div>


        <!-- FOTO 8 -->

        <div class="foto-card">

            <img
                src="{{ asset('img/galeria/foto8.jpg') }}"
                alt="Grupo Beth Cientista"
            >

            <div class="icone-foto">

                <i class="bi bi-people-fill"></i>

            </div>

            <div class="info">

                <h3>
                    Beth Cientista
                </h3>

                <p>
                    Nossa comunidade reunida em busca de conhecimento.
                </p>

            </div>

        </div>


    </section>


    <!-- =================================================
         MENSAGEM FINAL
    ================================================== -->

    <section class="mensagem-final">

        <div class="caixa-final">

            <i class="bi bi-camera-fill"></i>

            <h2>
                MOMENTOS QUE INSPIRAM!
            </h2>

            <p>
                Cada foto representa um momento de aprendizado,
                curiosidade e paixão pela ciência.
            </p>

        </div>

    </section>


</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <p>
        © 2026 Beth Cientista
    </p>

</footer>


</body>

</html>