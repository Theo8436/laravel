<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:linear-gradient(180deg,#7000a8 0%,#b700d8 55%,#ef6c73 100%);
    min-height:100vh;

    padding:50px;

}

/*======================
TÍTULO
======================*/

h1{

    color:white;

    text-align:center;

    font-size:45px;

    margin-bottom:40px;

    font-weight:700;

}

/*======================
BOTÃO ADICIONAR
======================*/

body > button{

    display:block;

    margin:auto;

    background:#ff7a00;

    color:white;

    border:none;

    padding:15px 30px;

    border-radius:30px;

    font-size:17px;

    cursor:pointer;

    transition:.3s;

    margin-bottom:40px;

}

body > button:hover{

    background:#ff9500;

    transform:translateY(-3px);

}

/*======================
FORMULÁRIO
======================*/

#formulario{

    background:white;

    width:700px;

    max-width:100%;

    margin:auto;

    padding:35px;

    border-radius:20px;

    box-shadow:0 10px 25px rgba(0,0,0,.25);

    margin-bottom:40px;

}

#formulario h2{

    color:#5a189a;

    margin-bottom:25px;

    text-align:center;

}

#formulario label{

    font-weight:600;

    color:#555;

}

#formulario input,
#formulario select{

    width:100%;

    padding:14px;

    margin-top:8px;

    border:2px solid #ddd;

    border-radius:12px;

    outline:none;

    transition:.3s;

    font-size:15px;

}

#formulario input:focus,
#formulario select:focus{

    border-color:#ff7a00;

}

#formulario button{

    border:none;

    padding:12px 22px;

    border-radius:12px;

    cursor:pointer;

    color:white;

    font-weight:600;

    transition:.3s;

    margin-right:10px;

}

#formulario button:first-of-type{

    background:#28a745;

}

#formulario button:first-of-type:hover{

    background:#1f8b39;

}

#formulario button:last-of-type{

    background:#dc3545;

}

#formulario button:last-of-type:hover{

    background:#b52a37;

}

/*======================
PUBLICAÇÕES
======================*/

#listaPublicacoes{

    width:900px;

    max-width:100%;

    margin:auto;

}

#listaPublicacoes > div{

    background:white;

    border-radius:18px;

    padding:25px;

    margin-bottom:25px;

    box-shadow:0 8px 20px rgba(0,0,0,.20);

    transition:.3s;

}

#listaPublicacoes > div:hover{

    transform:translateY(-5px);

}

#listaPublicacoes h3{

    color:#5a189a;

    margin-bottom:15px;

    font-size:28px;

}

#listaPublicacoes p{

    color:#555;

    margin-bottom:10px;

}

#listaPublicacoes strong{

    color:#333;

}

#listaPublicacoes button{

    border:none;

    padding:12px 20px;

    border-radius:10px;

    cursor:pointer;

    color:white;

    margin-right:10px;

    margin-top:15px;

    transition:.3s;

}

#listaPublicacoes button:first-of-type{

    background:#ff9800;

}

#listaPublicacoes button:first-of-type:hover{

    background:#f57c00;

}

#listaPublicacoes button:last-of-type{

    background:#e53935;

}

#listaPublicacoes button:last-of-type:hover{

    background:#c62828;

}

hr{

    display:none;

}

/*======================
RESPONSIVO
======================*/

@media(max-width:768px){

body{

    padding:20px;

}

h1{

    font-size:32px;

}

#formulario{

    padding:25px;

}

#listaPublicacoes h3{

    font-size:22px;

}

#listaPublicacoes button{

    width:100%;

    margin-bottom:10px;

}

}
</style>
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