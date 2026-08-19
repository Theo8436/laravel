<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Área do Professor</title>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:linear-gradient(
        180deg,
        #7000a8 0%,
        #b400d4 55%,
        #ef6c73 100%
    );

    min-height:100vh;

}


/* ================= HEADER ================= */

header{

    width:100%;

    background:#ff7a00;

    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:18px 60px;

    box-shadow:0 5px 18px rgba(0,0,0,.25);

    position:sticky;

    top:0;

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

    align-items:center;

}

nav button,
nav a{

    border:none;

    background:white;

    color:#ff7a00;

    padding:10px 18px;

    border-radius:30px;

    cursor:pointer;

    font-weight:600;

    transition:.3s;

    text-decoration:none;

}

nav button:hover,
nav a:hover{

    background:#ffe5cb;

    transform:translateY(-3px);

}


/* ================= MAIN ================= */

main{

    width:90%;

    margin:45px auto;

}

main h1{

    color:white;

    font-size:48px;

    font-weight:700;

}

main > p{

    color:#f5f5f5;

    margin-top:8px;

    margin-bottom:30px;

    font-size:18px;

}


/* ================= MENU ================= */

.menu-principal{

    display:flex;

    gap:15px;

    margin-bottom:35px;

}

.menu-principal button{

    flex:1;

    border:none;

    background:white;

    color:#444;

    padding:18px;

    border-radius:18px;

    font-size:16px;

    font-weight:600;

    cursor:pointer;

    transition:.3s;

    box-shadow:0 8px 18px rgba(0,0,0,.15);

}

.menu-principal button:hover{

    background:#ff8b00;

    color:white;

    transform:translateY(-3px);

}


/* ================= SEÇÕES ================= */

.painel{

    background:white;

    padding:35px;

    border-radius:25px;

    box-shadow:0 10px 25px rgba(0,0,0,.20);

}

.painel h2{

    color:#4b1d91;

    margin-bottom:20px;

}


/* ================= BOTÕES ================= */

.btn-principal{

    background:#ff7a00;

    color:white;

    border:none;

    padding:12px 25px;

    border-radius:12px;

    cursor:pointer;

    transition:.3s;

    font-weight:600;

}

.btn-principal:hover{

    background:#ff9500;

    transform:translateY(-2px);

}

.btn-cancelar{

    background:#eeeeee;

    color:#333;

    border:none;

    padding:12px 25px;

    border-radius:12px;

    cursor:pointer;

    font-weight:600;

}

.btn-cancelar:hover{

    background:#ddd;

}


/* ================= TABELA ================= */

table{

    width:100%;

    border-collapse:collapse;

    margin-top:20px;

    overflow:hidden;

    border-radius:15px;

}

table thead{

    background:#ff7a00;

    color:white;

}

table th{

    padding:18px;

    text-align:left;

}

table td{

    padding:18px;

    background:white;

    border-bottom:1px solid #ececec;

}

table tbody tr:hover{

    background:#fafafa;

}

td button{

    border:none;

    padding:10px 16px;

    border-radius:10px;

    cursor:pointer;

    margin-right:8px;

    transition:.3s;

    font-weight:600;

}

.btn-editar{

    background:#ffd54f;

    color:#333;

}

.btn-editar:hover{

    background:#ffb300;

}

.btn-excluir{

    background:#ef5350;

    color:white;

}

.btn-excluir:hover{

    background:#d32f2f;

}


/* ================= FORMULÁRIOS ================= */

.formulario{

    background:#f7f7f9;

    border-radius:20px;

    padding:25px;

    margin:25px 0;

    border:2px solid #eee;

}

.formulario h3{

    color:#4b1d91;

    margin-bottom:20px;

}

.form-group{

    margin-bottom:18px;

}

.form-group label{

    display:block;

    margin-bottom:7px;

    font-weight:600;

    color:#444;

}

.form-group input,
.form-group select,
.form-group textarea{

    width:100%;

    padding:13px;

    border:1px solid #ddd;

    border-radius:10px;

    outline:none;

    font-size:15px;

}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{

    border-color:#ff7a00;

    box-shadow:0 0 0 3px rgba(255,122,0,.12);

}

.form-group textarea{

    min-height:100px;

    resize:vertical;

}

.form-acoes{

    display:flex;

    gap:10px;

}


/* ================= POSTS ================= */

.post-card{

    background:#f7f7f9;

    padding:25px;

    border-radius:18px;

    margin-bottom:20px;

    border-left:6px solid #ff7a00;

}

.post-card h3{

    color:#4b1d91;

    margin-bottom:10px;

}

.post-card p{

    color:#666;

    margin-bottom:10px;

}

.btn-aprovar{

    background:#4caf50;

    color:white;

    border:none;

    padding:11px 20px;

    border-radius:10px;

    cursor:pointer;

    font-weight:600;

    margin-right:8px;

}

.btn-ajustes{

    background:#ff9800;

    color:white;

    border:none;

    padding:11px 20px;

    border-radius:10px;

    cursor:pointer;

    font-weight:600;

}


/* ================= MENSAGEM ================= */

.mensagem{

    display:none;

    padding:15px 20px;

    border-radius:12px;

    margin-bottom:20px;

    font-weight:600;

}

.mensagem.sucesso{

    display:block;

    background:#d9f7df;

    color:#217a35;

    border-left:5px solid #36a852;

}

.mensagem.erro{

    display:block;

    background:#ffe0e0;

    color:#b32626;

    border-left:5px solid #e53935;

}


/* ================= CALENDÁRIO ================= */

.calendario-container{

    display:grid;

    grid-template-columns:2fr 1fr;

    gap:30px;

}


/* calendário */

.calendario{

    background:#f7f7f9;

    border-radius:20px;

    padding:25px;

}

.calendario-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:20px;

}

.calendario-header h3{

    color:#4b1d91;

}

.calendario-header button{

    border:none;

    background:#ff7a00;

    color:white;

    width:40px;

    height:40px;

    border-radius:50%;

    cursor:pointer;

    font-size:18px;

}

.dias-semana{

    display:grid;

    grid-template-columns:repeat(7,1fr);

    gap:5px;

    margin-bottom:5px;

}

.dias-semana div{

    text-align:center;

    font-weight:700;

    color:#666;

    padding:8px;

}

.dias{

    display:grid;

    grid-template-columns:repeat(7,1fr);

    gap:5px;

}

.dia{

    min-height:55px;

    border:none;

    background:white;

    border-radius:10px;

    cursor:pointer;

    transition:.2s;

    font-weight:600;

    color:#444;

}

.dia:hover{

    background:#ffe0c2;

}

.dia.outro-mes{

    color:#bbb;

}

.dia.hoje{

    background:#ff7a00;

    color:white;

}

.dia.selecionado{

    background:#7b2cbf;

    color:white;

}

.dia.tem-evento{

    border:3px solid #4caf50;

}


/* formulário do calendário */

.evento-form{

    background:#f7f7f9;

    padding:25px;

    border-radius:20px;

}

.evento-form h3{

    color:#4b1d91;

    margin-bottom:20px;

}

.data-selecionada{

    background:#eee;

    padding:12px;

    border-radius:10px;

    margin-bottom:20px;

    color:#555;

    font-weight:600;

}


/* lista de eventos */

.lista-eventos{

    margin-top:30px;

}

.evento{

    background:white;

    padding:15px;

    border-radius:12px;

    margin-bottom:12px;

    border-left:5px solid #4caf50;

    box-shadow:0 3px 8px rgba(0,0,0,.08);

}

.evento strong{

    color:#4b1d91;

}

.evento small{

    display:block;

    color:#777;

    margin:5px 0;

}

.evento button{

    border:none;

    background:#ef5350;

    color:white;

    padding:7px 12px;

    border-radius:7px;

    cursor:pointer;

}


/* ================= RESPONSIVO ================= */

@media(max-width:1000px){

    header{

        flex-direction:column;

        padding:20px;

    }

    nav{

        flex-wrap:wrap;

        justify-content:center;

        margin-top:20px;

    }

    main{

        width:95%;

    }

    .menu-principal{

        flex-direction:column;

    }

    table{

        display:block;

        overflow-x:auto;

    }

    .calendario-container{

        grid-template-columns:1fr;

    }

}

</style>

</head>


<body>


<header>

    <div>

        <h2>BETH CIENTISTA</h2>

    </div>

    <nav>

        <a href="{{ route('inicio') }}">Início</a>

        <a href="{{ route('sobre') }}">Sobre</a>

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


<!-- MENSAGEM -->

<div id="mensagem" class="mensagem"></div>


<!-- MENU -->

<section class="menu-principal">

    <button onclick="mostrarAlunos()">

        👨‍🎓 Alunos

    </button>

    <button onclick="mostrarPosts()">

        📝 Revisar Posts

        <span id="contadorPosts">2</span>

    </button>

    <button onclick="mostrarCalendario()">

        📅 Calendário

    </button>

</section>


<!-- ================= ALUNOS ================= -->

<section id="alunos" class="painel">

<h2>Gerenciar Alunos</h2>

<button class="btn-principal" onclick="abrirFormularioAluno()">

    + Adicionar Aluno

</button>


<!-- FORMULÁRIO ALUNO -->

<div id="formularioAluno" class="formulario" hidden>

    <h3 id="tituloFormularioAluno">
        Adicionar Aluno
    </h3>

    <div class="form-group">

        <label>Nome</label>

        <input type="text" id="nomeAluno">

    </div>

    <div class="form-group">

        <label>Email</label>

        <input type="email" id="emailAluno">

    </div>

    <div class="form-group">

        <label>Nível</label>

        <select id="nivelAluno">

            <option>Clubista</option>

            <option>Monitor</option>

        </select>

    </div>

    <div class="form-group">

        <label>Data de Entrada</label>

        <input type="date" id="entradaAluno">

    </div>

    <div class="form-acoes">

        <button class="btn-principal" onclick="salvarAluno()">

            Salvar

        </button>

        <button class="btn-cancelar" onclick="fecharFormularioAluno()">

            Cancelar

        </button>

    </div>

</div>


<br><br>


<table>

<thead>

<tr>

<th>Nome</th>

<th>Email</th>

<th>Nível</th>

<th>Data de Entrada</th>

<th>Ações</th>

</tr>

</thead>

<tbody id="tabelaAlunos"></tbody>

</table>

</section>


<!-- ================= POSTS ================= -->

<section id="posts" class="painel" hidden>

<h2>Revisão de Posts</h2>

<p>

Posts aguardando aprovação:

</p>


<div id="listaPosts"></div>


<button class="btn-aprovar" onclick="aprovarTodos()">

    Aprovar Todos

</button>

</section>


<!-- ================= CALENDÁRIO ================= -->

<section id="calendario" class="painel" hidden>

<h2>Calendário</h2>

<p style="color:#666">

Selecione uma data no calendário para adicionar um evento.

</p>


<div class="calendario-container">


<!-- CALENDÁRIO -->

<div class="calendario">

    <div class="calendario-header">

        <button onclick="mesAnterior()">

            ‹

        </button>

        <h3 id="mesAno"></h3>

        <button onclick="mesProximo()">

            ›

        </button>

    </div>


    <div class="dias-semana">

        <div>Dom</div>
        <div>Seg</div>
        <div>Ter</div>
        <div>Qua</div>
        <div>Qui</div>
        <div>Sex</div>
        <div>Sáb</div>

    </div>


    <div id="dias" class="dias"></div>

</div>


<!-- FORMULÁRIO EVENTO -->

<div class="evento-form">

    <h3>Novo Evento</h3>

    <div class="data-selecionada">

        Data selecionada:

        <span id="dataSelecionada">

            Nenhuma

        </span>

    </div>


    <div class="form-group">

        <label>Título do evento</label>

        <input
            type="text"
            id="tituloEvento"
            placeholder="Ex: Aula de Astronomia"
        >

    </div>


    <div class="form-group">

        <label>Descrição</label>

        <textarea
            id="descricaoEvento"
            placeholder="Descreva o evento..."
        ></textarea>

    </div>


    <button
        class="btn-principal"
        onclick="salvarEvento()">

        Salvar Evento

    </button>

</div>

</div>


<!-- EVENTOS -->

<div class="lista-eventos">

    <h3 style="color:#4b1d91;margin-bottom:15px">

        Eventos cadastrados

    </h3>

    <div id="listaEventos"></div>

</div>

</section>


</main>


<script>


/* ==================================================
   ALUNOS
================================================== */


let alunos = [

{
nome:"Maria Silva",
email:"maria@exemplo.com",
nivel:"Clubista",
entrada:"2026-01-10"
},

{
nome:"João Santos",
email:"joao@exemplo.com",
nivel:"Monitor",
entrada:"2026-01-10"
},

{
nome:"Ana Costa",
email:"ana@exemplo.com",
nivel:"Clubista",
entrada:"2026-01-15"
},

{
nome:"Pedro Almeida",
email:"pedro@exemplo.com",
nivel:"Clubista",
entrada:"2026-01-20"
}

];


let alunoEditando = null;


function carregarTabela(){

    const tabela =
        document.getElementById("tabelaAlunos");

    tabela.innerHTML="";


    alunos.forEach((aluno,index)=>{

        tabela.innerHTML += `

        <tr>

            <td>${aluno.nome}</td>

            <td>${aluno.email}</td>

            <td>${aluno.nivel}</td>

            <td>${formatarData(aluno.entrada)}</td>

            <td>

                <button
                    class="btn-editar"
                    onclick="editarAluno(${index})">

                    Editar

                </button>

                <button
                    class="btn-excluir"
                    onclick="excluirAluno(${index})">

                    Excluir

                </button>

            </td>

        </tr>

        `;

    });

}


carregarTabela();


function abrirFormularioAluno(indice=null){

    alunoEditando=indice;

    document.getElementById("formularioAluno").hidden=false;


    if(indice !== null){

        const aluno=alunos[indice];

        document.getElementById("tituloFormularioAluno").innerText=
            "Editar Aluno";

        document.getElementById("nomeAluno").value=aluno.nome;

        document.getElementById("emailAluno").value=aluno.email;

        document.getElementById("nivelAluno").value=aluno.nivel;

        document.getElementById("entradaAluno").value=aluno.entrada;

    }else{

        document.getElementById("tituloFormularioAluno").innerText=
            "Adicionar Aluno";

        limparFormularioAluno();

    }

}


function salvarAluno(){

    const nome=
        document.getElementById("nomeAluno").value.trim();

    const email=
        document.getElementById("emailAluno").value.trim();

    const nivel=
        document.getElementById("nivelAluno").value;

    const entrada=
        document.getElementById("entradaAluno").value;


    if(nome==="" || email==="" || entrada===""){

        mostrarMensagem(
            "Preencha todos os campos do aluno.",
            "erro"
        );

        return;

    }


    const aluno={

        nome,
        email,
        nivel,
        entrada

    };


    if(alunoEditando === null){

        alunos.push(aluno);

        mostrarMensagem(
            "Aluno adicionado com sucesso!",
            "sucesso"
        );

    }else{

        alunos[alunoEditando]=aluno;

        mostrarMensagem(
            "Aluno atualizado com sucesso!",
            "sucesso"
        );

    }


    carregarTabela();

    fecharFormularioAluno();

}


function editarAluno(indice){

    abrirFormularioAluno(indice);

}


function excluirAluno(indice){

    alunos.splice(indice,1);

    carregarTabela();

    mostrarMensagem(
        "Aluno excluído com sucesso!",
        "sucesso"
    );

}


function fecharFormularioAluno(){

    document.getElementById("formularioAluno").hidden=true;

    alunoEditando=null;

}


function limparFormularioAluno(){

    document.getElementById("nomeAluno").value="";

    document.getElementById("emailAluno").value="";

    document.getElementById("nivelAluno").value="Clubista";

    document.getElementById("entradaAluno").value="";

}


function formatarData(data){

    if(!data) return "";

    const partes=data.split("-");

    return partes[2]+"/"+partes[1]+"/"+partes[0];

}


/* ==================================================
   NAVEGAÇÃO DAS SEÇÕES
================================================== */


function esconderTudo(){

    document.getElementById("alunos").hidden=true;

    document.getElementById("posts").hidden=true;

    document.getElementById("calendario").hidden=true;

}


function mostrarAlunos(){

    esconderTudo();

    document.getElementById("alunos").hidden=false;

}


function mostrarPosts(){

    esconderTudo();

    document.getElementById("posts").hidden=false;

    carregarPosts();

}


function mostrarCalendario(){

    esconderTudo();

    document.getElementById("calendario").hidden=false;

    renderizarCalendario();

    carregarEventos();

}


/* ==================================================
   POSTS
================================================== */


let posts=[

{
titulo:"A Evolução das Estrelas",
autor:"Maria Silva",
categoria:"Beth nas Estrelas"
},

{
titulo:"Sistema Digestivo",
autor:"João Santos",
categoria:"Beth Anatomy"
}

];


function carregarPosts(){

    const lista=
        document.getElementById("listaPosts");

    lista.innerHTML="";


    document.getElementById("contadorPosts").innerText=
        posts.length;


    if(posts.length===0){

        lista.innerHTML=`

        <div class="mensagem sucesso">

            Não existem posts aguardando aprovação.

        </div>

        `;

        return;

    }


    posts.forEach((post,index)=>{

        lista.innerHTML+=`

        <div class="post-card">

            <h3>${post.titulo}</h3>

            <p>
                <strong>Autor:</strong>
                ${post.autor}
            </p>

            <p>
                <strong>Categoria:</strong>
                ${post.categoria}
            </p>

            <button
                class="btn-aprovar"
                onclick="aprovarPost(${index})">

                Aprovar

            </button>

            <button
                class="btn-ajustes"
                onclick="solicitarAjustes(${index})">

                Solicitar Ajustes

            </button>

        </div>

        `;

    });

}


function aprovarPost(indice){

    posts.splice(indice,1);

    carregarPosts();

    mostrarMensagem(
        "Post aprovado com sucesso!",
        "sucesso"
    );

}



function solicitarAjustes(indice){

let observacao = prompt("Digite os ajustes solicitados:");

if(observacao==null) return;

alert("Solicitação enviada ao autor.");

posts.splice(indice,1);

carregarPosts();

}

function aprovarTodos(){

    posts=[];

    carregarPosts();

    mostrarMensagem(
        "Todos os posts foram aprovados!",
        "sucesso"
    );

}


/* ==================================================
   CALENDÁRIO
================================================== */


let dataAtual = new Date();

let dataSelecionada = null;


let eventos = [

{
data:"2026-04-25",
titulo:"Aula de Astronomia",
descricao:"Introdução ao Sistema Solar."
},

{
data:"2026-04-28",
titulo:"Aula de Biologia",
descricao:"Sistema Digestivo."
}

];


function renderizarCalendario(){

    const ano=dataAtual.getFullYear();

    const mes=dataAtual.getMonth();


    const meses=[

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


    document.getElementById("mesAno").innerText=
        meses[mes]+" "+ano;


    const primeiroDia=
        new Date(ano,mes,1).getDay();


    const ultimoDia=
        new Date(ano,mes+1,0).getDate();


    const dias=
        document.getElementById("dias");


    dias.innerHTML="";


    /* espaços antes do primeiro dia */

    for(let i=0;i<primeiroDia;i++){

        const vazio=document.createElement("div");

        dias.appendChild(vazio);

    }


    /* dias do mês */

    for(let dia=1;dia<=ultimoDia;dia++){

        const botao=document.createElement("button");

        botao.className="dia";

        botao.innerText=dia;


        const dataString=
            ano+"-"+
            String(mes+1).padStart(2,"0")+"-"+
            String(dia).padStart(2,"0");


        /* eventos */

        if(eventos.some(evento=>evento.data===dataString)){

            botao.classList.add("tem-evento");

        }


        /* data selecionada */

        if(dataSelecionada===dataString){

            botao.classList.add("selecionado");

        }


        /* hoje */

        const hoje=new Date();

        const hojeString=
            hoje.getFullYear()+"-"+
            String(hoje.getMonth()+1).padStart(2,"0")+"-"+
            String(hoje.getDate()).padStart(2,"0");


        if(dataString===hojeString){

            botao.classList.add("hoje");

        }


        botao.onclick=function(){

            selecionarData(dataString);

        };


        dias.appendChild(botao);

    }

}


function selecionarData(data){

    dataSelecionada=data;


    document.getElementById("dataSelecionada").innerText=
        formatarData(data);


    document.getElementById("tituloEvento").focus();


    renderizarCalendario();

}


function mesAnterior(){

    dataAtual.setMonth(
        dataAtual.getMonth()-1
    );

    renderizarCalendario();

}


function mesProximo(){

    dataAtual.setMonth(
        dataAtual.getMonth()+1
    );

    renderizarCalendario();

}


/* ==================================================
   EVENTOS
================================================== */


function salvarEvento(){

    const titulo=
        document.getElementById("tituloEvento").value.trim();

    const descricao=
        document.getElementById("descricaoEvento").value.trim();


    if(dataSelecionada===null){

        mostrarMensagem(
            "Selecione uma data no calendário.",
            "erro"
        );

        return;

    }


    if(titulo===""){

        mostrarMensagem(
            "Digite o título do evento.",
            "erro"
        );

        return;

    }


    eventos.push({

        data:dataSelecionada,

        titulo:titulo,

        descricao:descricao

    });


    document.getElementById("tituloEvento").value="";

    document.getElementById("descricaoEvento").value="";


    carregarEventos();

    renderizarCalendario();


    mostrarMensagem(
        "Evento adicionado ao calendário!",
        "sucesso"
    );

}


function carregarEventos(){

    const lista=
        document.getElementById("listaEventos");

    lista.innerHTML="";


    if(eventos.length===0){

        lista.innerHTML=
            "<p>Nenhum evento cadastrado.</p>";

        return;

    }


    eventos.forEach((evento,index)=>{

        lista.innerHTML+=`

        <div class="evento">

            <strong>
                ${evento.titulo}
            </strong>

            <small>
                📅 ${formatarData(evento.data)}
            </small>

            <p>
                ${evento.descricao || "Sem descrição."}
            </p>

            <button
                onclick="excluirEvento(${index})">

                Excluir

            </button>

        </div>

        `;

    });

}


function excluirEvento(indice){

    eventos.splice(indice,1);

    carregarEventos();

    renderizarCalendario();

    mostrarMensagem(
        "Evento excluído.",
        "sucesso"
    );

}


/* ==================================================
   MENSAGEM
================================================== */


function mostrarMensagem(texto,tipo){

    const mensagem=
        document.getElementById("mensagem");


    mensagem.innerText=texto;

    mensagem.className=
        "mensagem "+tipo;


    setTimeout(function(){

        mensagem.className="mensagem";

        mensagem.innerText="";

    },4000);

}


/* ==================================================
   NAVBAR
================================================== */


function abrirPagina(pagina){

    window.location.href=pagina+".html";

}


function sair(){

    window.location.href=
        "{{ route('inicio') }}";

}


</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>