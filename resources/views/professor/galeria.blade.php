<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeria | Beth Cientista</title>

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

    width:10px;
    height:10px;

    background:white;

    border-radius:50%;

    top:110px;
    left:28%;

    opacity:.6;

    box-shadow:
        500px 50px white,
        180px 170px white,
        700px 300px white,
        100px 500px white,
        900px 650px white,
        400px 750px white;

    pointer-events:none;

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

    padding:15px 6%;

    box-shadow:
        0 5px 18px rgba(0,0,0,.25);

    position:sticky;

    top:0;

    z-index:1000;

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

    border:3px solid white;

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

/* =========================
   NAV
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

    color:#ff7300;

    padding:10px 16px;

    border-radius:25px;

    cursor:pointer;

    font-weight:600;

    text-decoration:none;

    transition:.3s;

    font-size:14px;

}

nav a:hover,
nav button:hover{

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

    width:90%;

    max-width:1250px;

    margin:auto;

    padding:55px 0;

}

/* =========================
   TITULO
========================= */

.titulo{

    text-align:center;

    margin-bottom:35px;

}

.titulo h1{

    font-size:52px;

    font-weight:800;

}

.titulo p{

    margin-top:10px;

    font-size:19px;

    font-weight:500;

}

/* =========================
   BOTÃO PROFESSOR
========================= */

.area-professor{

    display:flex;

    justify-content:flex-end;

    margin-bottom:25px;

}

.btn-adicionar{

    border:none;

    background:#ff7a00;

    color:white;

    padding:14px 24px;

    border-radius:30px;

    font-size:16px;

    font-weight:700;

    cursor:pointer;

    box-shadow:
        0 8px 18px rgba(0,0,0,.20);

    transition:.3s;

}

.btn-adicionar:hover{

    background:#ff9500;

    transform:translateY(-3px);

}

.btn-adicionar i{

    margin-right:8px;

}

/* =========================
   FORMULÁRIO
========================= */

.formulario{

    display:none;

    background:white;

    color:#333;

    padding:30px;

    border-radius:25px;

    margin-bottom:35px;

    box-shadow:
        0 12px 30px rgba(0,0,0,.25);

    animation:abrir .3s ease;

}

.formulario.aberto{

    display:block;

}

@keyframes abrir{

    from{

        opacity:0;

        transform:translateY(-15px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}

.formulario h2{

    color:#4b1d91;

    margin-bottom:25px;

}

.campo{

    margin-bottom:18px;

}

.campo label{

    display:block;

    font-weight:700;

    margin-bottom:8px;

    color:#333;

}

.campo input,
.campo textarea{

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

    min-height:100px;

    resize:vertical;

}

.campo input:focus,
.campo textarea:focus{

    background:white;

    box-shadow:
        0 0 0 2px #ff7a00;

}

.botoes-form{

    display:flex;

    gap:12px;

    margin-top:25px;

}

.btn-salvar{

    border:none;

    background:#ff7a00;

    color:white;

    padding:13px 25px;

    border-radius:25px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;

}

.btn-salvar:hover{

    background:#ff9500;

    transform:translateY(-2px);

}

.btn-cancelar{

    border:2px solid #ff7a00;

    background:white;

    color:#ff7a00;

    padding:11px 25px;

    border-radius:25px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;

}

.btn-cancelar:hover{

    background:#ff7a00;

    color:white;

}

/* =========================
   MENSAGEM
========================= */

#mensagem{

    display:none;

    margin-top:20px;

    padding:14px;

    border-radius:12px;

    text-align:center;

    font-weight:600;

}

.sucesso{

    display:block !important;

    background:#d8f8df;

    color:#24733a;

}

.erro{

    display:block !important;

    background:#ffe0e0;

    color:#a83232;

}

/* =========================
   GALERIA
========================= */

.galeria{

    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:30px;

}

.foto-card{

    background:white;

    border-radius:22px;

    overflow:hidden;

    box-shadow:
        0 10px 25px rgba(0,0,0,.25);

    transition:.3s;

}

.foto-card:hover{

    transform:translateY(-7px);

}

.foto-card img{

    width:100%;

    height:250px;

    object-fit:cover;

    display:block;

}

.foto-info{

    padding:20px;

}

.foto-info h3{

    color:#222;

    font-size:20px;

    margin-bottom:8px;

}

.foto-info p{

    color:#666;

    font-size:14px;

    line-height:22px;

}

/* =========================
   BOTÃO EXCLUIR
========================= */

.btn-excluir{

    margin-top:15px;

    border:none;

    background:#ef5350;

    color:white;

    padding:9px 16px;

    border-radius:10px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

.btn-excluir:hover{

    background:#d32f2f;

}

.btn-excluir i{

    margin-right:5px;

}

/* =========================
   RODAPÉ
========================= */

footer{

    margin-top:60px;

    text-align:center;

    padding:30px;

    background:rgba(0,0,0,.12);

}

/* =========================
   RESPONSIVO
========================= */

@media(max-width:1100px){

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

}

@media(max-width:600px){

    main{

        width:92%;

    }

    .titulo h1{

        font-size:38px;

    }

    .titulo p{

        font-size:16px;

    }

    .galeria{

        grid-template-columns:1fr;

    }

    .area-professor{

        justify-content:center;

    }

    .botoes-form{

        flex-direction:column;

    }

}

</style>

<body>

<!-- =========================
     HEADER
========================= -->

<header>

    <div class="logo">

        <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">

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

        <a href="{{ route('professor.galeria') }}" class="ativo">
            Galeria
        </a>

        <a href="{{ route('professor.biblioteca') }}">
            Biblioteca
        </a>

        <a href="{{ route('professor.mencao') }}">
            Menções Honrosas
        </a>

        <a href="{{ route('professor.logado') }}">
            Minha Area
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

        <h1>GALERIA DE FOTOS</h1>

        <p>
            Momentos especiais e atividades do grupo Beth Cientista!
        </p>

    </section>


    <!-- =========================
         BOTÃO PROFESSOR
    ========================= -->

    <div class="area-professor">

        <button
            class="btn-adicionar"
            onclick="abrirFormulario()"
        >

            <i class="bi bi-plus-circle"></i>

            Adicionar Nova Foto

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
            <i class="bi bi-camera"></i>
            Adicionar Nova Foto
        </h2>

        <form id="formFoto">

            <div class="campo">

                <label for="tituloFoto">
                    Título da foto
                </label>

                <input
                    type="text"
                    id="tituloFoto"
                    placeholder="Ex: Feira de Ciências 2026"
                    required
                >

            </div>


            <div class="campo">

                <label for="descricaoFoto">
                    Descrição
                </label>

                <textarea
                    id="descricaoFoto"
                    placeholder="Digite uma descrição para a foto..."
                    required
                ></textarea>

            </div>


            <div class="campo">

                <label for="arquivoFoto">
                    Escolha a foto
                </label>

                <input
                    type="file"
                    id="arquivoFoto"
                    accept="image/*"
                    required
                >

            </div>


            <div class="botoes-form">

                <button
                    type="submit"
                    class="btn-salvar"
                >

                    <i class="bi bi-check-lg"></i>

                    Adicionar Foto

                </button>

                <button
                    type="button"
                    class="btn-cancelar"
                    onclick="fecharFormulario()"
                >

                    Cancelar

                </button>

            </div>

            <div id="mensagem"></div>

        </form>

    </section>


    <!-- =========================
         GALERIA
    ========================= -->

    <section
        class="galeria"
        id="galeria"
    >

        <div class="foto-card">

            <img
                src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=800&q=80"
                alt="Atividade científica"
            >

            <div class="foto-info">

                <h3>
                    Atividades do Grupo
                </h3>

                <p>
                    Momentos de aprendizado e
                    interação entre os clubistas.
                </p>

            </div>

        </div>


        <div class="foto-card">

            <img
                src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=800&q=80"
                alt="Laboratório"
            >

            <div class="foto-info">

                <h3>
                    Experimentos
                </h3>

                <p>
                    Experimentos científicos
                    realizados pelo grupo.
                </p>

            </div>

        </div>


        <div class="foto-card">

            <img
                src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80"
                alt="Sala de aula"
            >

            <div class="foto-info">

                <h3>
                    Aula Especial
                </h3>

                <p>
                    Aula e atividades realizadas
                    pelos clubistas.
                </p>

            </div>

        </div>


        <div class="foto-card">

            <img
                src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80"
                alt="Estudantes"
            >

            <div class="foto-info">

                <h3>
                    Encontro dos Clubistas
                </h3>

                <p>
                    Momento de integração e
                    troca de conhecimentos.
                </p>

            </div>

        </div>

    </section>

</main>


<footer>

    <p>
        © 2026 Beth Cientista
    </p>

</footer>


<script>

/* =========================
   ELEMENTOS
========================= */

const formulario =
    document.getElementById("formulario");

const formFoto =
    document.getElementById("formFoto");

const galeria =
    document.getElementById("galeria");

const mensagem =
    document.getElementById("mensagem");


/* =========================
   ABRIR FORMULÁRIO
========================= */

function abrirFormulario(){

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

    formulario.classList.remove("aberto");

    formFoto.reset();

    mensagem.style.display="none";

}


/* =========================
   CARREGAR FOTOS SALVAS
========================= */

function carregarFotos(){

    const fotos =
        JSON.parse(
            localStorage.getItem("fotosBeth")
        ) || [];

    fotos.forEach(function(foto){

        criarCard(
            foto.titulo,
            foto.descricao,
            foto.imagem,
            false
        );

    });

}


/* =========================
   CRIAR CARD
========================= */

function criarCard(
    titulo,
    descricao,
    imagem,
    salvar = true
){

    const card =
        document.createElement("div");

    card.className =
        "foto-card";

    card.innerHTML = `

        <img
            src="${imagem}"
            alt="${titulo}"
        >

        <div class="foto-info">

            <h3>
                ${titulo}
            </h3>

            <p>
                ${descricao}
            </p>

            <button
                class="btn-excluir"
                onclick="excluirFoto(this)"
            >

                <i class="bi bi-trash"></i>

                Excluir

            </button>

        </div>

    `;

    galeria.appendChild(card);


    /* =========================
       SALVAR
    ========================= */

    if(salvar){

        const fotos =
            JSON.parse(
                localStorage.getItem("fotosBeth")
            ) || [];

        fotos.push({

            titulo:titulo,

            descricao:descricao,

            imagem:imagem

        });

        localStorage.setItem(
            "fotosBeth",
            JSON.stringify(fotos)
        );

    }

}


/* =========================
   CADASTRAR FOTO
========================= */

formFoto.addEventListener(
    "submit",
    function(event){

        event.preventDefault();


        const titulo =
            document
            .getElementById("tituloFoto")
            .value
            .trim();


        const descricao =
            document
            .getElementById("descricaoFoto")
            .value
            .trim();


        const arquivo =
            document
            .getElementById("arquivoFoto")
            .files[0];


        if(!arquivo){

            mostrarMensagem(
                "Escolha uma imagem.",
                "erro"
            );

            return;

        }


        /* =========================
           LER IMAGEM
        ========================= */

        const leitor =
            new FileReader();


        leitor.onload =
            function(e){

                criarCard(
                    titulo,
                    descricao,
                    e.target.result,
                    true
                );


                mostrarMensagem(
                    "Foto adicionada com sucesso!",
                    "sucesso"
                );


                formFoto.reset();


                setTimeout(function(){

                    fecharFormulario();

                },1200);

            };


        leitor.readAsDataURL(arquivo);

    }
);


/* =========================
   MENSAGEM
========================= */

function mostrarMensagem(
    texto,
    tipo
){

    mensagem.innerText =
        texto;

    mensagem.className =
        tipo;

}


/* =========================
   EXCLUIR FOTO
========================= */

function excluirFoto(botao){

    const card =
        botao.closest(".foto-card");

    const imagem =
        card.querySelector("img").src;

    const fotos =
        JSON.parse(
            localStorage.getItem("fotosBeth")
        ) || [];


    const novasFotos =
        fotos.filter(
            foto => foto.imagem !== imagem
        );


    localStorage.setItem(
        "fotosBeth",
        JSON.stringify(novasFotos)
    );


    card.remove();

}


/* =========================
   CARREGAR
========================= */

carregarFotos();

</script>

</body>

</html>