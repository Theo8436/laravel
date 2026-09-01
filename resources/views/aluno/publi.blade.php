<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>A Física dos Buracos Negros | Beth Cientista</title>

    <!-- GOOGLE FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP ICONS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

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

    top:120px;
    left:15%;

    opacity:.6;

    box-shadow:

        400px 50px white,
        750px 130px white,
        1000px 300px white,
        180px 500px white,
        850px 600px white,
        500px 750px white;

    z-index:0;

}

body::after{

    content:"";

    position:fixed;

    width:8px;
    height:8px;

    background:white;

    border-radius:50%;

    right:12%;
    bottom:15%;

    opacity:.6;

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

    color:#8b20b7;

}


/* =====================================================
   CONTEÚDO PRINCIPAL
===================================================== */

main{

    width:86%;

    max-width:1050px;

    margin:auto;

    padding:50px 0 70px;

    position:relative;

    z-index:2;

}


/* =====================================================
   CABEÇALHO DO ARTIGO
===================================================== */

.cabecalho-artigo{

    text-align:center;

    margin-bottom:35px;

}

.categoria{

    display:inline-block;

    background:#a64cff;

    color:white;

    padding:8px 20px;

    border-radius:25px;

    font-size:15px;

    font-weight:700;

    margin-bottom:18px;

}

.cabecalho-artigo h1{

    font-size:52px;

    line-height:1.15;

    font-weight:800;

    text-transform:uppercase;

    margin-bottom:15px;

}

.descricao{

    font-size:20px;

    color:#ffe6d8;

    line-height:30px;

    max-width:800px;

    margin:auto;

}

.data{

    margin-top:15px;

    color:#ffe6d8;

    font-weight:600;

}


/* =====================================================
   ARTIGO
===================================================== */

.artigo{

    background:#fff7fc;

    color:#222;

    border-radius:30px;

    overflow:hidden;

    box-shadow:
        0 15px 35px rgba(0,0,0,.28);

}


/* =====================================================
   IMAGEM
===================================================== */

.imagem-artigo{

    width:100%;

    height:430px;

    position:relative;

    overflow:hidden;

}

.imagem-artigo img{

    width:100%;

    height:100%;

    object-fit:cover;

}

.icone-estrela{

    position:absolute;

    top:25px;
    left:25px;

    width:65px;
    height:65px;

    border-radius:50%;

    background:#a64cff;

    color:white;

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:32px;

    box-shadow:
        0 7px 18px rgba(0,0,0,.25);

}


/* =====================================================
   TEXTO
===================================================== */

.conteudo-artigo{

    padding:45px 55px 55px;

}

.informacoes{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:30px;

}

.autor{

    color:#666;

    font-weight:600;

}

.data-artigo{

    color:#666;

    font-weight:600;

}

.conteudo-artigo h2{

    color:#171323;

    font-size:32px;

    margin-top:30px;

    margin-bottom:15px;

    font-weight:800;

}

.conteudo-artigo h3{

    color:#8b20b7;

    font-size:24px;

    margin-top:30px;

    margin-bottom:12px;

    font-weight:800;

}

.conteudo-artigo p{

    color:#555;

    font-size:17px;

    line-height:31px;

    margin-bottom:18px;

}


/* =====================================================
   DESTAQUE
===================================================== */

.destaque{

    background:
        linear-gradient(
            135deg,
            #f2d9ff,
            #ffe2d6
        );

    border-left:6px solid #a64cff;

    border-radius:15px;

    padding:25px;

    margin:30px 0;

}

.destaque p{

    margin:0;

    color:#4b3b50;

    font-weight:600;

}


/* =====================================================
   LISTA
===================================================== */

.lista{

    margin:20px 0 25px 25px;

}

.lista li{

    color:#555;

    font-size:17px;

    line-height:32px;

    margin-bottom:7px;

}


/* =====================================================
   CAIXA DE CURIOSIDADE
===================================================== */

.curiosidade{

    background:#8f2bb7;

    color:white;

    border-radius:20px;

    padding:30px;

    margin-top:35px;

}

.curiosidade h3{

    color:white;

    margin-top:0;

    display:flex;

    align-items:center;

    gap:10px;

}

.curiosidade p{

    color:#fff;

    margin-bottom:0;

}


/* =====================================================
   BOTÕES
===================================================== */

.botoes{

    display:flex;

    justify-content:center;

    gap:15px;

    margin-top:40px;

}

.btn{

    text-decoration:none;

    border:none;

    padding:14px 28px;

    border-radius:30px;

    font-size:16px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;

}

.btn-voltar{

    background:#f0e7f5;

    color:#8b20b7;

}

.btn-voltar:hover{

    background:#8b20b7;

    color:white;

    transform:translateY(-3px);

}

.btn-biblioteca{

    background:#a64cff;

    color:white;

}

.btn-biblioteca:hover{

    background:#8d35df;

    transform:translateY(-3px);

}


/* =====================================================
   FOOTER
===================================================== */

footer{

    text-align:center;

    padding:30px;

    background:rgba(0,0,0,.12);

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

    .cabecalho-artigo h1{

        font-size:42px;

    }

    .imagem-artigo{

        height:350px;

    }

}


@media(max-width:600px){

    .logo{

        flex-direction:column;

        text-align:center;

    }

    .cabecalho-artigo h1{

        font-size:31px;

    }

    .descricao{

        font-size:16px;

        line-height:25px;

    }

    .imagem-artigo{

        height:250px;

    }

    .conteudo-artigo{

        padding:30px 22px 35px;

    }

    .conteudo-artigo h2{

        font-size:26px;

    }

    .conteudo-artigo h3{

        font-size:21px;

    }

    .conteudo-artigo p{

        font-size:15px;

        line-height:27px;

    }

    .informacoes{

        flex-direction:column;

        align-items:flex-start;

        gap:8px;

    }

    .botoes{

        flex-direction:column;

    }

    .btn{

        text-align:center;

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

        <a href="{{ route('aluno.logado') }}">
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


    <!-- CABEÇALHO -->

    <section class="cabecalho-artigo">

        <span class="categoria">
            Beth nas Estrelas
        </span>

        <h1>
            A Física dos Buracos Negros
        </h1>

        <p class="descricao">

            Descubra os mistérios fascinantes dos buracos negros
            e como eles dobram o espaço-tempo.

        </p>

        <p class="data">
            15 de março de 2026
        </p>

    </section>


    <!-- =================================================
         ARTIGO
    ================================================== -->

    <article class="artigo">


        <!-- IMAGEM -->

        <div class="imagem-artigo">

            <img
                src="{{ asset('img/buraco-negro.jpg') }}"
                alt="Representação de um buraco negro no espaço"
            >

            <div class="icone-estrela">

                <i class="bi bi-star-fill"></i>

            </div>

        </div>


        <!-- CONTEÚDO -->

        <div class="conteudo-artigo">


            <div class="informacoes">

                <span class="autor">
                    <i class="bi bi-person-fill"></i>
                    Por Maria Silva
                </span>

                <span class="data-artigo">
                    15/03/2026
                </span>

            </div>


            <!-- INTRODUÇÃO -->

            <h2>
                O que são buracos negros?
            </h2>

            <p>

                Buracos negros são regiões do espaço onde a gravidade
                é tão intensa que nada consegue escapar depois de
                ultrapassar determinado limite, nem mesmo a luz.

            </p>

            <p>

                Eles podem surgir quando estrelas muito massivas chegam
                ao final de suas vidas e sofrem um colapso gravitacional.
                Durante esse processo, uma enorme quantidade de matéria
                pode ficar concentrada em uma região extremamente pequena.

            </p>


            <!-- DESTAQUE -->

            <div class="destaque">

                <p>

                    <i class="bi bi-lightbulb-fill"></i>

                    <strong>Você sabia?</strong>

                    Apesar do nome, um buraco negro não é literalmente
                    um buraco vazio no espaço. Ele é uma região onde a
                    matéria e a energia estão submetidas a uma gravidade
                    extremamente intensa.

                </p>

            </div>


            <!-- ESPAÇO-TEMPO -->

            <h2>
                O espaço-tempo
            </h2>

            <p>

                Para entender os buracos negros, precisamos conhecer
                o conceito de espaço-tempo. Na física moderna, espaço
                e tempo são tratados como partes de uma mesma estrutura.

            </p>

            <p>

                Segundo a teoria da relatividade geral, a presença de
                matéria e energia pode deformar essa estrutura.
                Quanto maior a concentração de massa e energia,
                maior pode ser essa deformação.

            </p>


            <!-- HORIZONTE -->

            <h2>
                O horizonte de eventos
            </h2>

            <p>

                Ao redor de um buraco negro existe uma região conhecida
                como horizonte de eventos. Ele representa um limite a
                partir do qual não é possível retornar para fora do
                buraco negro.

            </p>

            <p>

                É importante destacar que o horizonte de eventos não é
                necessariamente uma superfície sólida. Ele representa
                principalmente uma fronteira definida pelas propriedades
                do espaço-tempo.

            </p>


            <!-- PARTES -->

            <h3>
                Principais características
            </h3>

            <ul class="lista">

                <li>
                    Possuem uma gravidade extremamente intensa.
                </li>

                <li>
                    Podem surgir do colapso de estrelas muito massivas.
                </li>

                <li>
                    Possuem um horizonte de eventos.
                </li>

                <li>
                    Afetam a estrutura do espaço-tempo ao seu redor.
                </li>

                <li>
                    Podem interagir gravitacionalmente com estrelas e
                    outros objetos próximos.
                </li>

            </ul>


            <!-- COMO DETECTAR -->

            <h2>
                Como podemos observar um buraco negro?
            </h2>

            <p>

                Como a luz não consegue escapar de dentro do horizonte
                de eventos, não podemos observar diretamente o interior
                de um buraco negro.

            </p>

            <p>

                Entretanto, os cientistas conseguem estudar os efeitos
                causados por eles. A matéria próxima pode formar estruturas
                extremamente quentes, liberando radiação que pode ser
                detectada por telescópios.

            </p>

            <p>

                Além disso, os efeitos gravitacionais de um buraco negro
                podem ser percebidos através do movimento de estrelas,
                gases e outros objetos ao seu redor.

            </p>


            <!-- CURIOSIDADE -->

            <div class="curiosidade">

                <h3>

                    <i class="bi bi-stars"></i>

                    Curiosidade científica

                </h3>

                <p>

                    Em 2019, os cientistas conseguiram divulgar a primeira
                    imagem de um buraco negro. A observação mostrou a região
                    brilhante ao redor do objeto e a sombra produzida pela
                    intensa gravidade.

                </p>

            </div>


            <!-- CONCLUSÃO -->

            <h2>
                Por que estudar os buracos negros?
            </h2>

            <p>

                O estudo dos buracos negros permite que os cientistas
                investiguem alguns dos fenômenos mais extremos conhecidos
                no Universo.

            </p>

            <p>

                Eles também ajudam a testar ideias fundamentais sobre
                gravidade, espaço e tempo. Por isso, continuam sendo um
                dos assuntos mais fascinantes da astronomia e da física.

            </p>


            <!-- FINAL -->

            <div class="destaque">

                <p>

                    <i class="bi bi-rocket-takeoff-fill"></i>

                    <strong>Continue explorando!</strong>

                    O Universo ainda guarda muitos mistérios.
                    Quanto mais estudamos o espaço, mais descobrimos
                    sobre as leis que governam o nosso próprio planeta.

                </p>

            </div>


            <!-- BOTÕES -->

            <div class="botoes">



                <a
                    href="{{ route('aluno.inicio') }}"
                    class="btn btn-biblioteca"
                >

                    <i class="bi bi-house-fill"></i>

                    Página Inicial

                </a>

            </div>


        </div>

    </article>

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