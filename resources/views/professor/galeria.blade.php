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
/* =========================
   MODAIS
========================= */

.modal {
    display: none;

    position: fixed;

    top: 0;
    left: 0;

    width: 100%;
    height: 100%;

    background: rgba(0, 0, 0, 0.65);

    z-index: 9999;

    align-items: center;
    justify-content: center;

    padding: 20px;
}

/* Caixa interna do modal */

.modal > .formulario {
    display: block;

    width: 100%;
    max-width: 500px;

    margin: 0;

    padding: 40px;

    border-radius: 30px;

    background: linear-gradient(
        135deg,
        #f5d6ff 0%,
        #ffe4dc 100%
    );

    box-shadow:
        0 25px 60px rgba(0, 0, 0, 0.45);

    animation: aparecerModal 0.25s ease;
}

/* Animação */

@keyframes aparecerModal {

    from {
        opacity: 0;
        transform: scale(0.90) translateY(20px);
    }

    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

}


/* =========================
   TÍTULO DO MODAL
========================= */

.modal .formulario h2 {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    color: #4b1d91;

    font-size: 30px;

    font-weight: 800;

    margin-bottom: 25px;

    text-align: center;
}


/* Ícone de alerta */

.modal .formulario h2 .bi-exclamation-triangle {

    color: #ef3340;

    font-size: 30px;

}


/* =========================
   TEXTO DO MODAL
========================= */

.modal .formulario > p {

    color: #292929 !important;

    font-size: 17px !important;

    line-height: 1.5 !important;

    text-align: center;

    margin: 20px auto 30px !important;

}

.modal .formulario > p strong {

    color: #252525 !important;

    font-weight: 800;

}


/* =========================
   BOTÕES DO MODAL
========================= */

.modal .botoes-form {

    display: flex;

    justify-content: center;

    align-items: center;

    gap: 18px;

    margin-top: 25px;

}


/* Cancelar */

.modal .btn-cancelar {

    min-width: 195px;

    border: none;

    background: #747d84 !important;

    color: white !important;

    padding: 15px 30px;

    border-radius: 30px;

    font-size: 16px;

    font-weight: 700;

    cursor: pointer;

    transition: 0.2s;

}

.modal .btn-cancelar:hover {

    background: #626a70 !important;

    transform: translateY(-2px);

}


/* Excluir */

.modal .btn-excluir {

    min-width: 195px;

    margin-top: 0;

    border: 2px solid #ffb000;

    background: #ed3340 !important;

    color: white !important;

    padding: 15px 30px;

    border-radius: 30px;

    font-size: 16px;

    font-weight: 700;

    cursor: pointer;

    transition: 0.2s;

}

.modal .btn-excluir:hover {

    background: #d92532 !important;

    transform: translateY(-2px);

}


/* =========================
   MODAL DE EDIÇÃO
========================= */

#modalEdicaoGaleria .formulario {

    max-width: 650px;

}


/* =========================
   RESPONSIVO
========================= */

@media (max-width: 600px) {

    .modal {

        padding: 15px;

    }

    .modal > .formulario {

        padding: 30px 20px;

        border-radius: 25px;

    }

    .modal .formulario h2 {

        font-size: 25px;

    }

    .modal .botoes-form {

        flex-direction: column;

        width: 100%;

    }

    .modal .btn-cancelar,
    .modal .btn-excluir {

        width: 100%;

        min-width: 0;

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


<main>

    <section class="titulo">
        <h1>GALERIA DE FOTOS</h1>
        <p>Momentos especiais e atividades do grupo Beth Cientista!</p>
    </section>

    <!-- ALERTAS LARAVEL -->
    @if(session('sucesso'))
        <div style="color: green; background: #e6ffe6; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-weight: bold; text-align: center;">
            {{ session('sucesso') }}
        </div>
    @endif

    <!-- =========================
         BOTÃO PROFESSOR
    ========================= -->
    <div class="area-professor">
        <button type="button" class="btn-adicionar" onclick="abrirFormulario()">
            <i class="bi bi-plus-circle"></i> Adicionar Nova Foto
        </button>
    </div>

    <!-- =========================
         FORMULÁRIO CADASTRO
    ========================= -->
    <section id="formulario" class="formulario">
        <h2><i class="bi bi-camera"></i> Adicionar Nova Foto</h2>

        <form id="formFoto" action="{{ route('galeria.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="campo">
                <label for="tituloFoto">Título da foto</label>
                <input
                    type="text"
                    id="tituloFoto"
                    name="titulo"
                    placeholder="Ex: Feira de Ciências 2026"
                    required
                >
            </div>

            <div class="campo">
                <label for="descricaoFoto">Descrição</label>
                <textarea
                    id="descricaoFoto"
                    name="descricao"
                    placeholder="Digite uma descrição para a foto..."
                    required
                ></textarea>
            </div>

            <div class="campo">
                <label for="arquivoFoto">Escolha a foto</label>
                <input
                    type="file"
                    id="arquivoFoto"
                    name="arquivoFoto"
                    accept="image/*"
                    required
                >
            </div>

            <div class="botoes-form">
                <button type="submit" class="btn-salvar">
                    <i class="bi bi-check-lg"></i> Adicionar Foto
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
         GALERIA DINÂMICA
    ========================= -->
    <section class="galeria" id="galeria">

        @forelse($fotos as $foto)

            <div class="foto-card">

                <img
                    src="{{ str_contains($foto->imagem, 'imagem') ? asset($foto->imagem) : asset('storage/' . $foto->imagem) }}"
                    alt="{{ $foto->titulo }}"
                >

                <div class="foto-info">

                    <h3>{{ $foto->titulo }}</h3>

                    <p>{{ $foto->descricao }}</p>

                    <div style="display: flex; gap: 10px; margin-top: 15px;">

                        <!-- Botão Editar -->
                        <button
                            type="button"
                            class="btn-salvar"
                            style="padding: 9px 16px; border-radius: 10px; font-size: 14px; background: #ffc107; color: #222;"
                            onclick='abrirEdicaoGaleria(@json($foto))'
                        >
                            <i class="bi bi-pencil"></i> Editar
                        </button>

                        <button
    type="button"
    class="btn-excluir"
    style="margin-top: 0; padding: 9px 16px;"
    onclick='abrirConfirmacaoExcluir({{ $foto->id }}, @json($foto->titulo))'
>
    <i class="bi bi-trash"></i> Excluir
</button>


                    </div>
                </div>

            </div>

        @empty

            <p style="text-align: center; grid-column: span 4; color: white; opacity: 0.8; font-weight: 500;">
                Nenhuma foto cadastrada na galeria.
            </p>

        @endforelse

    </section>

<!-- =========================
     MODAL DE EDIÇÃO DA GALERIA
========================= -->
<div class="modal" id="modalEdicaoGaleria" style="display: none;">
    <div class="formulario">
        <h2><i class="bi bi-pencil"></i> Editar Foto</h2>

        <form id="formEdicaoGaleria" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="campo">
                <label for="editTituloFoto">Título da foto</label>
                <input type="text" id="editTituloFoto" name="titulo" required>
            </div>

            <div class="campo">
                <label for="editDescricaoFoto">Descrição</label>
                <textarea id="editDescricaoFoto" name="descricao" required></textarea>
            </div>

            <div class="campo">
                <label for="editArquivoFoto">Substituir foto (opcional)</label>
                <input type="file" id="editArquivoFoto" name="arquivoFoto" accept="image/*">
            </div>

            <div class="botoes-form">
                <button type="button" class="btn-cancelar" onclick="fecharEdicaoGaleria()">Cancelar</button>
                <button type="submit" class="btn-salvar">Salvar Alterações</button>
            </div>
        </form>
    </div>
</div>

<!-- =========================
     MODAL CONFIRMAÇÃO DE EXCLUSÃO
========================= -->

<div class="modal" id="modalExcluirGaleria">

    <div class="formulario" style="text-align: center;">

        <h2>
            <i class="bi bi-exclamation-triangle"></i>
            Excluir Foto
        </h2>

        <p>
            Tem certeza que deseja excluir a foto
            <strong id="nomeFotoExcluir"></strong>?

            Esta ação não poderá ser desfeita.
        </p>

        <form
            id="formExcluirGaleria"
            action=""
            method="POST"
        >

            @csrf
            @method('DELETE')

            <div class="botoes-form">

                <button
                    type="button"
                    class="btn-cancelar"
                    onclick="fecharConfirmacaoExcluir()"
                >
                    Cancelar
                </button>

                <button
                    type="submit"
                    class="btn-excluir"
                >
                    Sim, Excluir
                </button>

            </div>

        </form>

    </div>

</div>


</main>

<footer>
    <p>© 2026 Beth Cientista</p>
</footer>

<!-- =========================
     SCRIPTS JAVASCRIPT COMPLETOS
========================= -->
<script>
const formulario = document.getElementById("formulario");
const formFoto = document.getElementById("formFoto");
const mensagem = document.getElementById("mensagem");
const modalEdicao = document.getElementById("modalEdicaoGaleria");
const modalExcluir = document.getElementById("modalExcluirGaleria");

// Cadastro de fotos (formulario em linha do próprio layout)
function abrirFormulario(){
    formulario.classList.add("aberto");
    formulario.style.display = "block";
    formulario.scrollIntoView({ behavior: "smooth", block: "center" });
}

function fecharFormulario(){
    formulario.classList.remove("aberto");
    formFoto.reset();
}

/// ==========================================
// EDIÇÃO
// ==========================================

function abrirEdicaoGaleria(foto) {

const modal = document.getElementById("modalEdicaoGaleria");

const form = document.getElementById("formEdicaoGaleria");

const titulo = document.getElementById("editTituloFoto");

const descricao = document.getElementById("editDescricaoFoto");

if (!modal || !form) {
    return;
}

form.action = `/professor/galeria/atualizar/${foto.id}`;

titulo.value = foto.titulo ?? "";

descricao.value = foto.descricao ?? "";

// Fecha o formulário de cadastro
if (formulario) {
    fecharFormulario();
}

// Fecha modal de exclusão
fecharConfirmacaoExcluir();

// Abre modal
modal.style.display = "flex";

// Bloqueia rolagem
document.body.style.overflow = "hidden";
}


function fecharEdicaoGaleria() {

const modal = document.getElementById("modalEdicaoGaleria");

const form = document.getElementById("formEdicaoGaleria");

if (!modal) {
    return;
}

modal.style.display = "none";

if (form) {
    form.reset();
}

document.body.style.overflow = "";
}


// ==========================================
// EXCLUSÃO
// ==========================================

function abrirConfirmacaoExcluir(id, titulo) {

const modal = document.getElementById("modalExcluirGaleria");

const form = document.getElementById("formExcluirGaleria");

const nomeFoto = document.getElementById("nomeFotoExcluir");

if (!modal || !form || !nomeFoto) {
    return;
}

// Define a URL
form.action = `/professor/galeria/excluir/${id}`;

// Nome da foto
nomeFoto.textContent = titulo;

// Fecha cadastro
if (formulario) {
    fecharFormulario();
}

// Fecha edição
fecharEdicaoGaleria();

// Abre modal
modal.style.display = "flex";

// Bloqueia rolagem
document.body.style.overflow = "hidden";
}


function fecharConfirmacaoExcluir() {

const modal = document.getElementById("modalExcluirGaleria");

if (!modal) {
    return;
}

modal.style.display = "none";

document.body.style.overflow = "";
}


// ==========================================
// FECHAR CLICANDO FORA
// ==========================================

window.addEventListener("click", function(event) {

const modalEdicao =
    document.getElementById("modalEdicaoGaleria");

const modalExcluir =
    document.getElementById("modalExcluirGaleria");


if (event.target === modalEdicao) {

    fecharEdicaoGaleria();

}


if (event.target === modalExcluir) {

    fecharConfirmacaoExcluir();

}

});

</script>

</body>

</html>