<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<title>Área do Professor</title>
</head>
<style>
header{
    width:100%;
    background:linear-gradient(90deg,#ff6b00,#ff8c29);
    padding:18px 50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

header div h2{
    color:#fff;
    font-size:30px;
    font-weight:700;
}

nav{
    display:flex;
    gap:8px;
    background:rgba(255,255,255,.15);
    padding:10px;
    border-radius:40px;
}

nav button{
    border:none;
    background:transparent;
    color:white;
    padding:10px 18px;
    border-radius:30px;
    cursor:pointer;
    transition:.3s;
}

nav button:hover{
    background:white;
    color:#ff6b00;
}

nav button:nth-child(6){
    background:white;
    color:#7b3cff;
    font-weight:600;
}
main > section{
    display:flex;
    width:650px;
    background:#e7e7eb;
    border-radius:30px;
    overflow:hidden;
    margin:35px 0;
}

main > section button{
    flex:1;
    border:none;
    background:transparent;
    padding:15px;
    cursor:pointer;
    transition:.3s;
    font-weight:600;
}

main > section button:hover{
    background:white;
}
#alunos button:first-of-type{

float:right;
background:#131329;
color:white;
border:none;
padding:12px 22px;
border-radius:10px;
margin-bottom:25px;
cursor:pointer;
transition:.3s;

}

#alunos button:first-of-type:hover{

background:#ff6b00;

}
table{

width:100%;
border-collapse:collapse;
margin-top:20px;
background:white;
border-radius:20px;
overflow:hidden;
box-shadow:0 5px 20px rgba(0,0,0,.08);

}

table th{

background:white;
color:#444;
text-align:left;
padding:18px;
border-bottom:1px solid #ddd;

}

table td{

padding:18px;
border-bottom:1px solid #ececec;

}

table tr:last-child td{

border-bottom:none;

}

table tbody tr:hover{

background:#fafafa;

}
td button{

padding:8px 14px;
border:none;
border-radius:8px;
cursor:pointer;
margin-right:6px;
font-weight:600;
transition:.3s;

}

td button:first-child{

background:#ededed;

}

td button:first-child:hover{

background:#ffd166;

}

td button:last-child{

background:#ffe4e4;
color:#ff2b2b;

}

td button:last-child:hover{

background:#ff2b2b;
color:white;

}
main{

width:78%;
margin:45px auto;

}

main h1{

font-size:45px;
color:#2c3245;
margin-bottom:8px;

}

main p{

color:#6a6a6a;
margin-bottom:25px;

}
@media (max-width:900px){

header{

    flex-direction:column;
    gap:20px;
    padding:20px;

}

nav{

    flex-wrap:wrap;
    justify-content:center;

}

main{

    width:95%;

}

main > section{

    width:100%;

}

table{

    display:block;
    overflow-x:auto;

}

}


</style>
<body>

<header>

    <div>
        <h2>BETH CIENTISTA</h2>
    </div>

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

<button onclick="mostrarPosts()">Revisar Posts <span id="contadorPosts">2</span></button>

<button onclick="mostrarCalendario()">Calendário</button>

</section>

<hr>

<div id="conteudo">

<section id="alunos">

<h2>Gerenciar Alunos</h2>

<button onclick="adicionarAluno()">
Adicionar Aluno
</button>

<br><br>

<table border="1" width="100%">

<thead>

<tr>

<th>Nome</th>

<th>Email</th>

<th>Nível</th>

<th>Data de Entrada</th>

<th>Ações</th>

</tr>

</thead>

<tbody id="tabelaAlunos">

</tbody>

</table>

</section>

<section id="posts" hidden>

<h2>Revisão de Posts</h2>

<p>Aqui aparecerão os posts aguardando aprovação.</p>

<button onclick="aprovarTodos()">
Aprovar Todos
</button>

</section>

<section id="calendario" hidden>

<h2>Calendário</h2>

<p>Eventos e aulas.</p>

<button onclick="novoEvento()">
Novo Evento
</button>

</section>

</div>

</main>

<script>

let alunos = [

{
nome:"Maria Silva",
email:"maria@exemplo.com",
nivel:"Clubista",
entrada:"10/01/2026"
},

{
nome:"João Santos",
email:"joao@exemplo.com",
nivel:"Monitor",
entrada:"10/01/2026"
},

{
nome:"Ana Costa",
email:"ana@exemplo.com",
nivel:"Clubista",
entrada:"15/01/2026"
},

{
nome:"Pedro Almeida",
email:"pedro@exemplo.com",
nivel:"Clubista",
entrada:"20/01/2026"
}

];

function carregarTabela(){

const tabela = document.getElementById("tabelaAlunos");

tabela.innerHTML="";

alunos.forEach((aluno,index)=>{

tabela.innerHTML+=`

<tr>

<td>${aluno.nome}</td>

<td>${aluno.email}</td>

<td>${aluno.nivel}</td>

<td>${aluno.entrada}</td>

<td>

<button onclick="editarAluno(${index})">
Editar
</button>

<button onclick="excluirAluno(${index})">
Excluir
</button>

</td>

</tr>

`;

});

}

carregarTabela();

function adicionarAluno(){

let nome = prompt("Nome:");

if(nome==null) return;

let email = prompt("Email:");

if(email==null) return;

let nivel = prompt("Nível:");

if(nivel==null) return;

let entrada = prompt("Data:");

if(entrada==null) return;

alunos.push({

nome,
email,
nivel,
entrada

});

carregarTabela();

}

function editarAluno(indice){

let aluno = alunos[indice];

aluno.nome = prompt("Nome",aluno.nome);

aluno.email = prompt("Email",aluno.email);

aluno.nivel = prompt("Nível",aluno.nivel);

aluno.entrada = prompt("Data",aluno.entrada);

carregarTabela();

}

function excluirAluno(indice){

if(confirm("Deseja excluir este aluno?")){

alunos.splice(indice,1);

carregarTabela();

}

}

function mostrarAlunos(){

document.getElementById("alunos").hidden=false;

document.getElementById("posts").hidden=true;

document.getElementById("calendario").hidden=true;

}

function mostrarPosts(){

document.getElementById("alunos").hidden=true;

document.getElementById("posts").hidden=false;

document.getElementById("calendario").hidden=true;

}

function mostrarCalendario(){

document.getElementById("alunos").hidden=true;

document.getElementById("posts").hidden=true;

document.getElementById("calendario").hidden=false;

}

function aprovarTodos(){

alert("Todos os posts foram aprovados.");

document.getElementById("contadorPosts").innerText="0";

}

function novoEvento(){

alert("Abrir formulário de novo evento.");

}

function abrirPagina(pagina){

alert("Abrir página: "+pagina);

}

function sair(){

if(confirm("Deseja sair?")){

window.location.href="login.html";

}

}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>