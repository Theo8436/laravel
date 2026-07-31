<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Área</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<!-- ================= HEADER ================= -->

<header>

    <div class="logo">

        <img src="img/logo.png" alt="Logo">

        <div>

            <h2>BETH CIENTISTA</h2>

            <p>Divulgação Científica</p>

        </div>

    </div>

    <nav>

        <button onclick="abrirPagina('inicio')">Início</button>

        <button onclick="abrirPagina('sobre')">Sobre Nós</button>

        <button onclick="abrirPagina('galeria')">Galeria</button>

        <button onclick="abrirPagina('biblioteca')">Biblioteca</button>

        <button onclick="abrirPagina('mencoes')">Menções Honrosas</button>

        <button class="ativo">Minha Área</button>

        <button onclick="sair()">Sair</button>

    </nav>

</header>

<!-- ================= PERFIL ================= -->

<main>

<section class="perfil">

    <div class="foto">

        <i class="bi bi-person"></i>

        <span>Clubista</span>

    </div>

    <div>

        <h1>MARIA SILVA</h1>

        <p>Bem-vindo(a) à sua área!</p>

    </div>

</section>

<!-- ================= MENU ================= -->

<section class="menu-area">

<button onclick="mostrarPublicacoes()">

<i class="bi bi-file-earmark-text"></i>

Minhas Publicações

</button>

<button onclick="mostrarCalendario()">

<i class="bi bi-calendar3"></i>

Calendário

</button>

<button onclick="mostrarMateriais()">

<i class="bi bi-book"></i>

Material de Apoio

</button>

</section>

<!-- ================= PUBLICAÇÕES ================= -->

<section id="publicacoes">

<div class="titulo">

<h2>GERENCIAR PUBLICAÇÕES</h2>

<button onclick="novaPublicacao()">

<i class="bi bi-plus-lg"></i>

Nova Publicação

</button>

</div>

<div id="listaPublicacoes">

<!-- Publicações criadas pelo JavaScript -->

</div>

</section>

<!-- ================= CALENDÁRIO ================= -->

<section id="calendario" hidden>

<h2>Calendário</h2>

<input type="date">

</section>

<!-- ================= MATERIAL ================= -->

<section id="material" hidden>

<h2>Material de Apoio</h2>

<p>Arquivos, PDFs e vídeos ficarão aqui.</p>

</section>

</main>

<script>

let publicacoes=[

{

titulo:"A Física dos Buracos Negros",

categoria:"Beth nas Estrelas",

data:"15/03/2026",

status:"Aprovado"

},

{

titulo:"Rascunho sobre DNA",

categoria:"Beth Anatomy",

data:"20/03/2026",

status:"Rascunho"

}

];

function carregarPublicacoes(){

const lista=document.getElementById("listaPublicacoes");

lista.innerHTML="";

publicacoes.forEach((item,index)=>{

lista.innerHTML+=`

<div class="card-publicacao">

<div>

<h3>${item.titulo}</h3>

<p>

${item.categoria}

•

${item.data}

</p>

<span>${item.status}</span>

</div>

<div>

<button onclick="editar(${index})">

<i class="bi bi-pencil-square"></i>

</button>

<button onclick="excluir(${index})">

<i class="bi bi-trash"></i>

</button>

</div>

</div>

`;

});

}

carregarPublicacoes();

function mostrarPublicacoes(){

publicacoesSection=document.getElementById("publicacoes");

calendario=document.getElementById("calendario");

material=document.getElementById("material");

publicacoesSection.hidden=false;

calendario.hidden=true;

material.hidden=true;

}

function mostrarCalendario(){

publicacoes.hidden=true;

calendario.hidden=false;

material.hidden=true;

}

function mostrarMateriais(){

publicacoes.hidden=true;

calendario.hidden=true;

material.hidden=false;

}

function novaPublicacao(){

window.location.href="nova-publicacao.html";

}

function editar(id){

window.location.href="editar-publicacao.html?id="+id;

}

function excluir(id){

if(confirm("Deseja excluir esta publicação?")){

publicacoes.splice(id,1);

carregarPublicacoes();

}

}

function abrirPagina(nome){

window.location.href=nome+".html";

}

function sair(){

window.location.href="login.html";

}

</script>

</body>
</html>