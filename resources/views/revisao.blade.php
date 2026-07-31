<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Revisar Posts</title>
</head>

<body>

<header>

<h2>BETH CIENTISTA</h2>

<nav>

<button onclick="abrirPagina('inicio')">Início</button>

<button onclick="abrirPagina('sobre')">Sobre Nós</button>

<button onclick="abrirPagina('galeria')">Galeria</button>

<button onclick="abrirPagina('biblioteca')">Biblioteca</button>

<button onclick="abrirPagina('mencoes')">Menções Honrosas</button>

<button onclick="abrirPagina('area')">Minha Área</button>

<button onclick="sair()">Sair</button>

</nav>

</header>

<main>

<h1>ÁREA DO PROFESSOR</h1>

<p>Painel de gerenciamento e aprovação</p>

<hr>

<section>

<button onclick="mostrarAlunos()">Alunos</button>

<button onclick="mostrarPosts()">
Revisar Posts
(<span id="contador">0</span>)
</button>

<button onclick="mostrarCalendario()">Calendário</button>

</section>

<hr>

<section id="listaPosts">

</section>

</main>

<script>

let posts = [

{

titulo:"A Evolução das Estrelas",

autor:"Maria Silva",

categoria:"Beth nas Estrelas",

data:"05/04/2026",

texto:"Lorem ipsum dolor sit amet, consectetur adipiscing elit."

},

{

titulo:"Sistema Digestivo",

autor:"João Santos",

categoria:"Beth Anatomy",

data:"06/04/2026",

texto:"Lorem ipsum dolor sit amet, consectetur adipiscing elit."

}

];

function carregarPosts(){

const lista = document.getElementById("listaPosts");

lista.innerHTML="";

document.getElementById("contador").innerText=posts.length;

if(posts.length==0){

lista.innerHTML="<h3>Nenhum post aguardando aprovação.</h3>";

return;

}

posts.forEach((post,index)=>{

lista.innerHTML+=`

<div>

<h2>${post.titulo}</h2>

<p>

Autor: ${post.autor}

|

Categoria: ${post.categoria}

|

${post.data}

</p>

<p>

${post.texto}

</p>

<button onclick="aprovar(${index})">

Aprovar

</button>

<button onclick="solicitarAjustes(${index})">

Solicitar Ajustes

</button>

<hr>

</div>

`;

});

}

carregarPosts();

function aprovar(indice){

if(confirm("Deseja aprovar este post?")){

alert("Post aprovado!");

posts.splice(indice,1);

carregarPosts();

}

}

function solicitarAjustes(indice){

let observacao = prompt("Digite os ajustes solicitados:");

if(observacao==null) return;

alert("Solicitação enviada ao autor.");

posts.splice(indice,1);

carregarPosts();

}

function mostrarAlunos(){

window.location.href="professor-alunos.html";

}

function mostrarPosts(){

window.location.href="professor-posts.html";

}

function mostrarCalendario(){

window.location.href="professor-calendario.html";

}

function abrirPagina(nome){

window.location.href=nome+".html";

}

function sair(){

if(confirm("Deseja sair?")){

window.location.href="login.html";

}

}

</script>

</body>
</html>