<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menções Honrosas | Beth Cientista</title>

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

    background:
    linear-gradient(
        180deg,
        #6f0ea7 0%,
        #b217c7 55%,
        #ea6b72 100%
    );

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

    box-shadow:
        0 5px 15px rgba(0,0,0,.25);

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

    width:55px;

    height:55px;

    border-radius:50%;

    background:white;

    object-fit:cover;

}

.logo h2{

    font-size:28px;

    font-weight:800;

}

.logo p{

    font-size:13px;

}


/* =========================
   NAV
========================= */

nav{

    display:flex;

    align-items:center;

    gap:10px;

}

nav a{

    text-decoration:none;

    border:none;

    background:white;

    color:#ff7300;

    padding:10px 18px;

    border-radius:25px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

nav a:hover{

    transform:translateY(-3px);

    background:#ffe5cb;

}

nav .ativo{

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
   TÍTULO
========================= */

.titulo{

    text-align:center;

    margin-bottom:35px;

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
   BOTÃO NOVA MENÇÃO
========================= */

.botao-nova{

    display:flex;

    justify-content:center;

    margin-bottom:45px;

}

.btn-nova{

    border:none;

    background:#ff8b00;

    color:white;

    padding:15px 30px;

    border-radius:30px;

    font-size:17px;

    font-weight:700;

    cursor:pointer;

    box-shadow:
        0 8px 18px rgba(0,0,0,.20);

    transition:.3s;

}

.btn-nova:hover{

    background:#ffad3d;

    transform:translateY(-3px);

}


/* =========================
   FORMULÁRIO
========================= */

.formulario{

    display:none;

    background:white;

    color:#222;

    padding:35px;

    border-radius:25px;

    margin-bottom:45px;

    box-shadow:
        0 12px 25px rgba(0,0,0,.25);

}

.formulario.aberto{

    display:block;

}

.formulario h2{

    color:#4b1d91;

    font-size:30px;

    margin-bottom:25px;

    text-align:center;

}

.campo{

    margin-bottom:20px;

}

.campo label{

    display:block;

    color:#333;

    font-weight:700;

    margin-bottom:8px;

    font-size:16px;

}

.campo input,
.campo textarea,
.campo select{

    width:100%;

    padding:14px 16px;

    border:none;

    border-radius:15px;

    background:#f3f3f3;

    font-size:16px;

    outline:none;

    transition:.3s;

}

.campo textarea{

    min-height:120px;

    resize:vertical;

}

.campo input:focus,
.campo textarea:focus,
.campo select:focus{

    background:white;

    box-shadow:
        0 0 0 2px #ff7a00;

}


/* =========================
   BOTÕES DO FORMULÁRIO
========================= */

.botoes-form{

    display:flex;

    gap:15px;

    margin-top:25px;

}

.btn-form{

    flex:1;

    border:none;

    padding:14px;

    border-radius:25px;

    font-size:16px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;

}

.btn-adicionar{

    background:#ff7a00;

    color:white;

}

.btn-adicionar:hover{

    background:#ff9500;

    transform:translateY(-3px);

}

.btn-cancelar{

    background:#eeeeee;

    color:#555;

}

.btn-cancelar:hover{

    background:#dddddd;

    transform:translateY(-3px);

}


/* =========================
   MENSAGEM
========================= */

.mensagem{

    display:none;

    margin-top:20px;

    padding:15px;

    border-radius:15px;

    text-align:center;

    font-weight:600;

}

.mensagem.sucesso{

    display:block;

    background:#d8f8df;

    color:#24733a;

    border:1px solid #8bd39b;

}


/* =========================
   CARDS
========================= */

.mencoes{

    display:grid;

    grid-template-columns:
        repeat(2,1fr);

    gap:30px;

}

.card{

    background:white;

    color:#222;

    border-radius:20px;

    padding:25px;

    box-shadow:
        0 12px 25px rgba(0,0,0,.25);

    transition:.35s;

}

.card:hover{

    transform:translateY(-8px);

}


/* =========================
   TOPO CARD
========================= */

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


/* =========================
   TEXTO CARD
========================= */

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

    border:
        2px solid rgba(255,255,255,.25);

    backdrop-filter:blur(8px);

    padding:45px;

    border-radius:25px;

    text-align:center;

    box-shadow:
        0 12px 25px rgba(0,0,0,.25);

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
   BOLINHAS
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

    pointer-events:none;

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


@media(max-width:600px){

    .botoes-form{

        flex-direction:column;

    }

    .formulario{

        padding:25px 20px;

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

        <a href="{{ route('professor.inicio') }}">
            Início
        </a>

        <a href="{{ route('professor.sobre') }}">
            Sobre Nós
        </a>

        <a href="{{ route('professor.galeria') }}">
            Galeria
        </a>

        <a href="{{ route('professor.biblioteca') }}">
            Biblioteca
        </a>

        <a class="ativo" href="{{ route('professor.mencao') }}">
            Menções Honrosas
        </a>

        <a href="{{ route('professor.logado') }}">
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
        MENÇÕES HONROSAS
    </h1>

    <p>
        Celebrando as conquistas e realizações dos nossos Clubistas!
    </p>

</section>


<!-- =========================
     BOTÃO
========================= -->

<div class="botao-nova">

    <button
        class="btn-nova"
        onclick="abrirFormulario()"
    >

        <i class="bi bi-plus-circle"></i>

        Adicionar Nova Menção

    </button>

</div>


<!-- =========================
     FORMULÁRIO
========================= -->

<section
    id="formulario"
    class="formulario"
>

    <h2>
        <i class="bi bi-trophy-fill"></i>
        Nova Menção Honrosa
    </h2>


    <form id="formMencao">


        <!-- ALUNO -->

        <div class="campo">

            <label for="aluno">
                Nome do Clubista
            </label>

            <input
                type="text"
                id="aluno"
                placeholder="Digite o nome do aluno"
                required
            >

        </div>


        <!-- CONQUISTA -->

        <div class="campo">

            <label for="conquista">
                Conquista
            </label>

            <input
                type="text"
                id="conquista"
                placeholder="Ex: 1º lugar na Olimpíada de Matemática"
                required
            >

        </div>


        <!-- DATA -->

        <div class="campo">

            <label for="data">
                Data da conquista
            </label>

            <input
                type="date"
                id="data"
                required
            >

        </div>


        <!-- ÍCONE -->

        <div class="campo">

            <label for="iconeEscolhido">
                Tipo de reconhecimento
            </label>

            <select
                id="iconeEscolhido"
                required
            >

                <option value="trophy">
                    🏆 Troféu
                </option>

                <option value="award">
                    🏅 Medalha
                </option>

                <option value="star">
                    ⭐ Destaque
                </option>

                <option value="person">
                    👤 Reconhecimento
                </option>

            </select>

        </div>


        <!-- DESCRIÇÃO -->

        <div class="campo">

            <label for="descricao">
                Descrição
            </label>

            <textarea
                id="descricao"
                placeholder="Descreva a conquista do clubista..."
                required
            ></textarea>

        </div>


        <!-- BOTÕES -->

        <div class="botoes-form">

            <button
                type="button"
                class="btn-form btn-cancelar"
                onclick="fecharFormulario()"
            >

                <i class="bi bi-x-lg"></i>

                Cancelar

            </button>


            <button
                type="submit"
                class="btn-form btn-adicionar"
            >

                <i class="bi bi-check-lg"></i>

                Adicionar Menção

            </button>

        </div>


        <div
            id="mensagem"
            class="mensagem"
        ></div>


    </form>

</section>


<!-- =========================
     MENÇÕES
========================= -->

<section
    class="mencoes"
    id="listaMencoes"
>


<!-- MENÇÃO 1 -->

<div class="card">

    <div class="topo">

        <i class="bi bi-trophy-fill"></i>

        <span>Março 2026</span>

    </div>

    <h2>
        1º LUGAR NA OLIMPÍADA BRASILEIRA DE ASTRONOMIA
    </h2>

    <h4>
        Maria Silva
    </h4>

    <p>
        Conquista medalha de ouro na categoria ensino médio,
        demonstrando excelente conhecimento em astronomia.
    </p>

</div>


<!-- MENÇÃO 2 -->

<div class="card">

    <div class="topo">

        <i class="bi bi-award-fill"></i>

        <span>Fevereiro 2026</span>

    </div>

    <h2>
        ARTIGO PUBLICADO EM REVISTA CIENTÍFICA JOVEM
    </h2>

    <h4>
        João Santos
    </h4>

    <p>
        Artigo sobre biologia celular aceito e publicado
        na Revista Jovem Cientista.
    </p>

</div>


<!-- MENÇÃO 3 -->

<div class="card">

    <div class="topo">

        <i class="bi bi-star-fill"></i>

        <span>Janeiro 2026</span>

    </div>

    <h2>
        MELHOR PROJETO NA FEIRA DE CIÊNCIAS ESTADUAL
    </h2>

    <h4>
        Ana Costa
    </h4>

    <p>
        Projeto sobre energias renováveis foi destaque
        na feira.
    </p>

</div>


<!-- MENÇÃO 4 -->

<div class="card">

    <div class="topo">

        <i class="bi bi-trophy-fill"></i>

        <span>Dezembro 2025</span>

    </div>

    <h2>
        MEDALHA DE BRONZE NA OLIMPÍADA DE QUÍMICA
    </h2>

    <h4>
        Pedro Almeida
    </h4>

    <p>
        Excelente desempenho na olimpíada nacional.
    </p>

</div>


<!-- MENÇÃO 5 -->

<div class="card">

    <div class="topo">

        <i class="bi bi-award-fill"></i>

        <span>Novembro 2025</span>

    </div>

    <h2>
        BOLSA DE INICIAÇÃO CIENTÍFICA JR.
    </h2>

    <h4>
        Carla Mendes
    </h4>

    <p>
        Selecionada para programa de iniciação científica
        na universidade federal.
    </p>

</div>


<!-- MENÇÃO 6 -->

<div class="card">

    <div class="topo">

        <i class="bi bi-person-fill-check"></i>

        <span>Outubro 2025</span>

    </div>

    <h2>
        DESTAQUE NO PROGRAMA DE MENTORIA CIENTÍFICA
    </h2>

    <h4>
        Lucas Ferreira
    </h4>

    <p>
        Reconhecido pela dedicação e progresso
        no programa de mentoria.
    </p>

</div>


</section>


<!-- =========================
     MENSAGEM FINAL
========================= -->

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
            <br><br>
            Parabéns a todos os Clubistas!
        </p>

    </div>

</section>


</main>


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
   ABRIR FORMULÁRIO
========================= */

function abrirFormulario(){

    const formulario =
        document.getElementById("formulario");

    formulario.classList.add("aberto");

    formulario.scrollIntoView({
        behavior:"smooth",
        block:"center"
    });

}


/* =========================
   FECHAR FORMULÁRIO
========================= */

function fecharFormulario(){

    const formulario =
        document.getElementById("formulario");

    formulario.classList.remove("aberto");

}


/* =========================
   FORMULÁRIO
========================= */

document
.getElementById("formMencao")
.addEventListener("submit", function(event){

    event.preventDefault();


    const aluno =
        document
        .getElementById("aluno")
        .value
        .trim();


    const conquista =
        document
        .getElementById("conquista")
        .value
        .trim();


    const data =
        document
        .getElementById("data")
        .value;


    const descricao =
        document
        .getElementById("descricao")
        .value
        .trim();


    const tipoIcone =
        document
        .getElementById("iconeEscolhido")
        .value;


    /* =========================
       DEFINIR ÍCONE
    ========================= */

    let icone = "bi-trophy-fill";

    if(tipoIcone === "award"){

        icone = "bi-award-fill";

    }

    if(tipoIcone === "star"){

        icone = "bi-star-fill";

    }

    if(tipoIcone === "person"){

        icone = "bi-person-fill-check";

    }


    /* =========================
       FORMATAR DATA
    ========================= */

    const dataObjeto =
        new Date(data + "T00:00:00");


    const meses = [

        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"

    ];


    const dataFormatada =
        meses[dataObjeto.getMonth()]
        + " "
        + dataObjeto.getFullYear();


    /* =========================
       CRIAR CARD
    ========================= */

    const lista =
        document.getElementById("listaMencoes");


    const novoCard =
        document.createElement("div");


    novoCard.className = "card";


    novoCard.innerHTML = `

        <div class="topo">

            <i class="bi ${icone}"></i>

            <span>${dataFormatada}</span>

        </div>

        <h2>
            ${conquista.toUpperCase()}
        </h2>

        <h4>
            ${aluno}
        </h4>

        <p>
            ${descricao}
        </p>

    `;


    /* =========================
       COLOCAR NOVO CARD
       NO COMEÇO DA LISTA
    ========================= */

    lista.prepend(novoCard);


    /* =========================
       MENSAGEM
    ========================= */

    const mensagem =
        document.getElementById("mensagem");


    mensagem.innerText =
        "Menção adicionada com sucesso!";


    mensagem.className =
        "mensagem sucesso";


    /* =========================
       LIMPAR FORMULÁRIO
    ========================= */

    document
        .getElementById("formMencao")
        .reset();


    /* =========================
       FECHAR DEPOIS DE UM TEMPO
    ========================= */

    setTimeout(function(){

        fecharFormulario();

        mensagem.className =
            "mensagem";

    },1800);

});


</script>


</body>

</html>