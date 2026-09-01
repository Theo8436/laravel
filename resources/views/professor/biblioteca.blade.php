<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biblioteca | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

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
   HEADER
========================= */

header{

    width:100%;

    background:#ff7700;

    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:12px 7%;

    box-shadow:
        0 5px 15px rgba(0,0,0,.25);

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

    border:3px solid white;

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

    background:white;

    color:#ff7300;

    padding:10px 16px;

    border-radius:25px;

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

    max-width:1200px;

    margin:auto;

    padding:45px 0 70px;

}


/* =========================
   TÍTULO
========================= */

.titulo{

    text-align:center;

    margin-bottom:35px;

}

.titulo h1{

    font-size:48px;

    font-weight:800;

}

.titulo p{

    margin-top:8px;

    font-size:18px;

}


/* =========================
   PESQUISA
========================= */

.pesquisa{

    width:100%;

    display:flex;

    justify-content:center;

    margin-bottom:25px;

}

.pesquisa-box{

    width:600px;

    background:white;

    border-radius:30px;

    padding:6px 10px;

    display:flex;

    align-items:center;

    box-shadow:
        0 8px 20px rgba(0,0,0,.20);

}

.pesquisa-box i{

    color:#8b2cf5;

    font-size:20px;

    margin:0 10px;

}

.pesquisa-box input{

    width:100%;

    border:none;

    outline:none;

    padding:12px;

    font-size:14px;

}


/* =========================
   ÁREA DO PROFESSOR
========================= */

.area-professor{

    background:rgba(255,255,255,.15);

    border:1px solid rgba(255,255,255,.35);

    border-radius:20px;

    padding:20px 25px;

    margin-bottom:35px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    box-shadow:
        0 8px 20px rgba(0,0,0,.15);

}

.area-professor h3{

    font-size:20px;

}

.area-professor p{

    font-size:13px;

    margin-top:4px;

}

.btn-cadastrar{

    border:none;

    background:#ff7a00;

    color:white;

    padding:13px 22px;

    border-radius:25px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;

}

.btn-cadastrar:hover{

    background:#ff9500;

    transform:translateY(-3px);

}


/* =========================
   LIVROS
========================= */

.livros{

    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:25px;

}


/* =========================
   CARD
========================= */

.card{

    background:white;

    color:#222;

    border-radius:20px;

    overflow:hidden;

    box-shadow:
        0 10px 25px rgba(0,0,0,.25);

    transition:.3s;

}

.card:hover{

    transform:translateY(-7px);

}


/* =========================
   CAPA
========================= */

.capa{

    height:150px;

    background:
    linear-gradient(
        135deg,
        #d79cf5,
        #ffb36b
    );

    display:flex;

    justify-content:center;

    align-items:center;

}

.capa i{

    font-size:60px;

    color:white;

}


/* =========================
   CONTEÚDO CARD
========================= */

.conteudo{

    padding:20px;

}

.conteudo h2{

    font-size:20px;

    margin-bottom:7px;

}

.autor{

    color:#666;

    font-size:13px;

    margin-bottom:15px;

}


/* =========================
   STATUS
========================= */

.status{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-top:15px;

}

.status span{

    padding:6px 12px;

    border-radius:20px;

    color:white;

    font-size:12px;

    font-weight:700;

}

.livre{

    background:#16c964;

}

.emprestado{

    background:#ff9800;

}

.esgotado{

    background:#ef4444;

}


/* =========================
   CONTROLES
========================= */

.controles{

    margin-top:15px;

    display:flex;

    gap:8px;

}

.controles select{

    flex:1;

    padding:9px;

    border-radius:10px;

    border:1px solid #ddd;

    outline:none;

}

.btn-excluir{

    border:none;

    background:#ef5350;

    color:white;

    width:40px;

    border-radius:10px;

    cursor:pointer;

}

.btn-excluir:hover{

    background:#d32f2f;

}


/* =========================
   MODAL
========================= */

.modal{

    display:none;

    position:fixed;

    inset:0;

    background:rgba(0,0,0,.65);

    justify-content:center;

    align-items:center;

    z-index:2000;

    padding:20px;

}

.modal.ativo{

    display:flex;

}

.formulario{

    width:100%;

    max-width:500px;

    background:
    linear-gradient(
        180deg,
        #f8d7ff,
        #ffe2d2
    );

    color:#222;

    padding:35px;

    border-radius:25px;

    box-shadow:
        0 20px 50px rgba(0,0,0,.35);

}

.formulario h2{

    text-align:center;

    color:#4b1d91;

    margin-bottom:25px;

}

.campo{

    margin-bottom:18px;

}

.campo label{

    display:block;

    font-weight:700;

    margin-bottom:7px;

}

.campo input,
.campo select{

    width:100%;

    padding:13px;

    border:none;

    background:#f3f3f3;

    border-radius:12px;

    outline:none;

    font-size:15px;

}

.campo input:focus,
.campo select:focus{

    background:white;

    box-shadow:
        0 0 0 2px #ff7a00;

}


/* =========================
   BOTÕES MODAL
========================= */

.botoes{

    display:flex;

    gap:12px;

    margin-top:25px;

}

.botoes button{

    flex:1;

    border:none;

    padding:13px;

    border-radius:25px;

    font-weight:700;

    cursor:pointer;

}

.cancelar{

    background:white;

    color:#ff7a00;

    border:2px solid #ff7a00 !important;

}

.salvar{

    background:#ff7a00;

    color:white;

}

.salvar:hover{

    background:#ff9500;

}


/* =========================
   MENSAGEM
========================= */

.mensagem{

    display:none;

    margin-top:15px;

    padding:12px;

    border-radius:12px;

    text-align:center;

    font-weight:600;

    background:#d8f8df;

    color:#24733a;

}


/* =========================
   VAZIO
========================= */

.vazio{

    grid-column:1/-1;

    text-align:center;

    background:white;

    color:#555;

    padding:40px;

    border-radius:20px;

}


/* =========================
   FOOTER
========================= */

footer{

    text-align:center;

    padding:25px;

    background:rgba(0,0,0,.12);

}


/* =========================
   RESPONSIVO
========================= */

@media(max-width:1000px){

    header{

        flex-direction:column;

        gap:15px;

        padding:20px;

    }

    nav{

        flex-wrap:wrap;

        justify-content:center;

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

    .livros{

        grid-template-columns:1fr;

    }

    .titulo h1{

        font-size:36px;

    }

    .area-professor{

        flex-direction:column;

        gap:15px;

        text-align:center;

    }

}

</style>


<body>


<!-- =========================
     HEADER
========================= -->

<header>

    <div class="logo">

        <img src="{{ asset('Beth.jpg') }}">

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

        <a href="{{ route('professor.biblioteca') }}"
           class="ativo">
            Biblioteca
        </a>

        <a href="{{ route('professor.mencao') }}">
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
        BIBLIOTECA BETH CIENTISTA
    </h1>

    <p>
        Acervo de livros científicos para os Clubistas!
    </p>

</section>


<!-- PESQUISA -->

<div class="pesquisa">

    <div class="pesquisa-box">

        <i class="bi bi-search"></i>

        <input
            type="text"
            id="pesquisa"
            placeholder="Buscar livros por título ou autor..."
            onkeyup="pesquisarLivros()"
        >

    </div>

</div>


<!-- ÁREA DO PROFESSOR -->

<div class="area-professor">

    <div>

        <h3>
            <i class="bi bi-book"></i>
            Gerenciar Biblioteca
        </h3>

        <p>
            Professor, cadastre novos livros no acervo.
        </p>

    </div>

    <button
        class="btn-cadastrar"
        onclick="abrirFormulario()">

        <i class="bi bi-plus-lg"></i>

        Cadastrar Livro

    </button>

</div>


<!-- LIVROS -->

<section
    class="livros"
    id="listaLivros">


</section>


</main>


<footer>

    © 2026 Beth Cientista

</footer>



<!-- =========================
     MODAL CADASTRO
========================= -->

<div
    class="modal"
    id="modalCadastro">

    <div class="formulario">

        <h2>
            <i class="bi bi-book"></i>
            Cadastrar Livro
        </h2>


        <form
            id="formLivro">


            <div class="campo">

                <label for="tituloLivro">
                    Título do livro
                </label>

                <input
                    type="text"
                    id="tituloLivro"
                    placeholder="Digite o título"
                    required>

            </div>


            <div class="campo">

                <label for="autorLivro">
                    Autor
                </label>

                <input
                    type="text"
                    id="autorLivro"
                    placeholder="Digite o autor"
                    required>

            </div>


            <div class="campo">

                <label for="categoriaLivro">
                    Categoria
                </label>

                <select id="categoriaLivro" required>

                    <option value="">
                        Selecione uma categoria
                    </option>

                    <option>
                        Astronomia
                    </option>

                    <option>
                        Biologia
                    </option>

                    <option>
                        Física
                    </option>

                    <option>
                        Química
                    </option>

                    <option>
                        Ciências
                    </option>

                </select>

            </div>


            <div class="campo">

                <label for="statusLivro">
                    Status
                </label>

                <select id="statusLivro">

                    <option value="livre">
                        Livre
                    </option>

                    <option value="emprestado">
                        Emprestado
                    </option>

                    <option value="reservado">
                        Reservado
                    </option>

                </select>

            </div>


            <div
                class="mensagem"
                id="mensagem">

                Livro cadastrado com sucesso!

            </div>


            <div class="botoes">

                <button
                    type="button"
                    class="cancelar"
                    onclick="fecharFormulario()">

                    Cancelar

                </button>


                <button
                    type="submit"
                    class="salvar">

                    <i class="bi bi-check-lg"></i>

                    Cadastrar

                </button>

            </div>


        </form>

    </div>

</div>



<script>

/* =========================
   LIVROS INICIAIS
========================= */

let livros = [

    {
        titulo:"Uma Breve História do Tempo",
        autor:"Stephen Hawking",
        categoria:"Física",
        status:"livre"
    },

    {
        titulo:"Cosmos",
        autor:"Carl Sagan",
        categoria:"Astronomia",
        status:"livre"
    },

    {
        titulo:"O Gene Egoísta",
        autor:"Richard Dawkins",
        categoria:"Biologia",
        status:"livre"
    },

    {
        titulo:"Sapiens",
        autor:"Yuval Noah Harari",
        categoria:"Ciências",
        status:"esgotado"
    },

    {
        titulo:"O Universo Numa Casca de Noz",
        autor:"Stephen Hawking",
        categoria:"Astronomia",
        status:"livre"
    },

    {
        titulo:"A Origem das Espécies",
        autor:"Charles Darwin",
        categoria:"Biologia",
        status:"livre"
    }

];


/* =========================
   CARREGAR LIVROS
========================= */

function carregarLivros(lista = livros){

    const container =
        document.getElementById("listaLivros");

    container.innerHTML = "";


    if(lista.length === 0){

        container.innerHTML = `

            <div class="vazio">

                <i class="bi bi-book"
                   style="font-size:40px">
                </i>

                <h3>
                    Nenhum livro encontrado
                </h3>

                <p>
                    Tente pesquisar outro título ou autor.
                </p>

            </div>

        `;

        return;

    }


    lista.forEach((livro,index)=>{

        container.innerHTML += `

        <div class="card">

            <div class="capa">

                <i class="bi bi-book"></i>

            </div>


            <div class="conteudo">

                <h2>
                    ${livro.titulo}
                </h2>

                <p class="autor">

                    ${livro.autor}

                    • ${livro.categoria}

                </p>


                <div class="status">

                    <span class="${livro.status}">

                        ${nomeStatus(livro.status)}

                    </span>

                </div>


                <div class="controles">

                    <select
                        onchange="alterarStatus(${index},this.value)">

                        <option
                            value="livre"
                            ${livro.status === "livre" ? "selected" : ""}>

                            Livre

                        </option>

                        <option
                            value="emprestado"
                            ${livro.status === "emprestado" ? "selected" : ""}>

                            Emprestado

                        </option>

                        <option
                            value="reservado"
                            ${livro.status === "reservado" ? "selected" : ""}>

                            Reservado

                        </option>

                    </select>


                    <button
                        class="btn-excluir"
                        onclick="excluirLivro(${index})">

                        <i class="bi bi-trash"></i>

                    </button>

                </div>

            </div>

        </div>

        `;

    });

}


/* =========================
   NOME DO STATUS
========================= */

function nomeStatus(status){

    if(status === "livre")
        return "Livre";

    if(status === "emprestado")
        return "Emprestado";

    if(status === "reservado")
        return "Reservado";

}


/* =========================
   ALTERAR STATUS
========================= */

function alterarStatus(index,status){

    livros[index].status = status;

    carregarLivros();

}


/* =========================
   EXCLUIR
========================= */

function excluirLivro(index){

    if(!confirm("Deseja excluir este livro?")){

        return;

    }

    livros.splice(index,1);

    carregarLivros();

}


/* =========================
   PESQUISA
========================= */

function pesquisarLivros(){

    const texto =
        document
        .getElementById("pesquisa")
        .value
        .toLowerCase();


    const resultado =
        livros.filter(livro =>

            livro.titulo
                .toLowerCase()
                .includes(texto)

            ||

            livro.autor
                .toLowerCase()
                .includes(texto)

            ||

            livro.categoria
                .toLowerCase()
                .includes(texto)

        );


    carregarLivros(resultado);

}


/* =========================
   ABRIR FORMULÁRIO
========================= */

function abrirFormulario(){

    document
        .getElementById("modalCadastro")
        .classList.add("ativo");

}


/* =========================
   FECHAR FORMULÁRIO
========================= */

function fecharFormulario(){

    document
        .getElementById("modalCadastro")
        .classList.remove("ativo");

    document
        .getElementById("formLivro")
        .reset();

    document
        .getElementById("mensagem")
        .style.display="none";

}


/* =========================
   CADASTRAR LIVRO
========================= */

document
.getElementById("formLivro")
.addEventListener("submit",function(event){

    event.preventDefault();


    const titulo =
        document
        .getElementById("tituloLivro")
        .value
        .trim();


    const autor =
        document
        .getElementById("autorLivro")
        .value
        .trim();


    const categoria =
        document
        .getElementById("categoriaLivro")
        .value;


    const status =
        document
        .getElementById("statusLivro")
        .value;


    if(
        titulo === "" ||
        autor === "" ||
        categoria === ""
    ){

        return;

    }


    livros.push({

        titulo:titulo,

        autor:autor,

        categoria:categoria,

        status:status

    });


    carregarLivros();


    const mensagem =
        document.getElementById("mensagem");

    mensagem.style.display="block";


    setTimeout(function(){

        fecharFormulario();

    },1000);

});


/* =========================
   INICIAR
========================= */

carregarLivros();

</script>


</body>

</html>