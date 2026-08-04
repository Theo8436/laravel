<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Revisar Posts</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:linear-gradient(180deg,#7000a8 0%,#b400d4 55%,#ef6c73 100%);
    min-height:100vh;

}

/*================ HEADER ================*/

header{

    width:100%;
    background:#ff7a00;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:18px 60px;

    position:sticky;
    top:0;

    box-shadow:0 6px 18px rgba(0,0,0,.20);

    z-index:999;

}

header h2{

    color:white;
    font-size:32px;
    font-weight:800;

}

nav{

    display:flex;
    gap:10px;

}

nav button{

    border:none;
    background:white;
    color:#ff7a00;

    padding:10px 18px;

    border-radius:30px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

}

nav button:hover{

    background:#ffe5cb;

    transform:translateY(-3px);

}

/*================ MAIN ================*/

main{

    width:90%;

    margin:40px auto;

}

main h1{

    color:white;

    font-size:48px;

    margin-bottom:8px;

}

main>p{

    color:#f4f4f4;

    margin-bottom:30px;

    font-size:18px;

}

hr{

    display:none;

}

/*================ MENU ================*/

main>section:first-of-type{

    display:flex;

    gap:15px;

    margin-bottom:35px;

}

main>section:first-of-type button{

    flex:1;

    border:none;

    background:white;

    color:#444;

    padding:18px;

    border-radius:18px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

    box-shadow:0 8px 20px rgba(0,0,0,.15);

}

main>section:first-of-type button:hover{

    background:#ff8b00;

    color:white;

}

#contador{

    background:#ff5252;

    color:white;

    padding:3px 8px;

    border-radius:20px;

    font-size:13px;

}

/*================ POSTS ================*/

#listaPosts{

    display:flex;

    flex-direction:column;

    gap:25px;

}

#listaPosts>div{

    background:white;

    border-radius:20px;

    padding:30px;

    box-shadow:0 10px 25px rgba(0,0,0,.20);

    transition:.3s;

}

#listaPosts>div:hover{

    transform:translateY(-5px);

}

#listaPosts h2{

    color:#5b21b6;

    font-size:28px;

    margin-bottom:15px;

}

#listaPosts p:first-of-type{

    color:#777;

    font-size:15px;

    margin-bottom:15px;

}

#listaPosts p:last-of-type{

    color:#444;

    line-height:28px;

    margin-bottom:25px;

}

/*================ BOTÕES ================*/

#listaPosts button{

    border:none;

    padding:12px 22px;

    border-radius:12px;

    cursor:pointer;

    font-weight:600;

    margin-right:12px;

    transition:.3s;

}

#listaPosts button:first-of-type{

    background:#28a745;

    color:white;

}

#listaPosts button:first-of-type:hover{

    background:#218838;

}

#listaPosts button:last-of-type{

    background:#ffc107;

    color:#222;

}

#listaPosts button:last-of-type:hover{

    background:#ff9800;

}

#listaPosts hr{

    display:none;

}

/*================ MENSAGEM SEM POSTS ================*/

#listaPosts h3{

    background:white;

    color:#666;

    text-align:center;

    padding:40px;

    border-radius:20px;

    box-shadow:0 10px 20px rgba(0,0,0,.20);

}

/*================ RESPONSIVO ================*/

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

    width:95%;

}

main h1{

    font-size:36px;

}

main>section:first-of-type{

    flex-direction:column;

}

#listaPosts button{

    width:100%;

    margin-bottom:10px;

}

}
</style>
<body>

<header>

<h2>BETH CIENTISTA</h2>

<nav>



<a href="{{ route('sobre') }}" class="btn">Sobre nós</a>

<a href="{{ route('galeria') }}" class="btn">Galeria</a>

<a href="{{ route('biblioteca') }}" class="btn">Biblioteca</a>

<a href="{{ route('mencao') }}" class="btn">Menções Honrosas</a>

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