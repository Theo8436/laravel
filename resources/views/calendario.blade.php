@extends('layouts.basico')


<body>

<h1>Gerenciar Calendário</h1>

<button onclick="abrirFormulario()">
Adicionar Publicação
</button>

<!-- Formulário -->
<div id="formulario" hidden>

    <h2>Publicação</h2>

    <label>Título</label><br>
    <input type="text" id="titulo"><br><br>

    <label>Autor</label><br>
    <input type="text" id="autor"><br><br>

    <label>Categoria</label><br>

    <select id="categoria">
        <option>Beth nas Estrelas</option>
        <option>Beth Anatomy</option>
        <option>Beth Indica</option>
    </select>

    <br><br>

    <label>Data da publicação</label><br>

    <input type="date" id="data">

    <br><br>

    <button onclick="salvar()">
        Salvar
    </button>

    <button onclick="cancelar()">
        Cancelar
    </button>

</div>

<hr>

<div id="listaPublicacoes"></div>

<script>

let indiceEdicao = null;

let publicacoes = [

{
titulo:"Sistema Solar",
autor:"Maria Silva",
categoria:"Beth nas Estrelas",
data:"2026-04-25"
},

{
titulo:"Sistema Digestivo",
autor:"João Santos",
categoria:"Beth Anatomy",
data:"2026-04-28"
},

{
titulo:"Animais Marinhos",
autor:"Ana Costa",
categoria:"Beth Indica",
data:"2026-05-02"
}

];

function carregarLista(){

const lista=document.getElementById("listaPublicacoes");

lista.innerHTML="";

publicacoes.forEach((item,index)=>{

lista.innerHTML+=`

<div>

<h3>${item.titulo}</h3>

<p><strong>Autor:</strong> ${item.autor}</p>

<p><strong>Categoria:</strong> ${item.categoria}</p>

<p><strong>Data:</strong> ${formatar(item.data)}</p>

<button onclick="editar(${index})">

Editar

</button>

<button onclick="excluir(${index})">

Excluir

</button>

<hr>

</div>

`;

});

}

carregarLista();

function abrirFormulario(){

indiceEdicao=null;

document.getElementById("formulario").hidden=false;

limpar();

}

function cancelar(){

document.getElementById("formulario").hidden=true;

}

function salvar(){

let titulo=document.getElementById("titulo").value;

let autor=document.getElementById("autor").value;

let categoria=document.getElementById("categoria").value;

let data=document.getElementById("data").value;

if(titulo=="" || autor=="" || data==""){

alert("Preencha todos os campos.");

return;

}

let objeto={

titulo,
autor,
categoria,
data

};

if(indiceEdicao==null){

publicacoes.push(objeto);

}else{

publicacoes[indiceEdicao]=objeto;

}

cancelar();

carregarLista();

}

function editar(indice){

indiceEdicao=indice;

let item=publicacoes[indice];

document.getElementById("titulo").value=item.titulo;

document.getElementById("autor").value=item.autor;

document.getElementById("categoria").value=item.categoria;

document.getElementById("data").value=item.data;

document.getElementById("formulario").hidden=false;

}

function excluir(indice){

if(confirm("Deseja excluir esta publicação?")){

publicacoes.splice(indice,1);

carregarLista();

}

}

function limpar(){

titulo.value="";

autor.value="";

categoria.selectedIndex=0;

data.value="";

}

function formatar(data){

let partes=data.split("-");

return partes[2]+"/"+partes[1]+"/"+partes[0];

}

</script>

</body>