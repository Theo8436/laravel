<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Calendário do Professor</title>

<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Baloo 2', cursive;
}

body{
    background:#f4edf5;
}

/* NAVBAR */

.navbar{
    background:#ff6900;
    padding:14px 40px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.logo{
    display:flex;
    align-items:center;
    gap:12px;
}

.logo img{
    width:58px;
    height:58px;
    border-radius:50%;
    border:3px solid white;
}

.logo-text h1{
    color:white;
    font-size:34px;
    line-height:30px;
    font-weight:800;
}

.logo-text span{
    color:white;
    font-size:17px;
    font-weight:600;
}

.menu{
    background:#ff7b1e;
    padding:10px 20px;
    border-radius:50px;
    display:flex;
    gap:25px;
    box-shadow:0 5px 15px rgba(0,0,0,.12);
}

.menu a{
    color:white;
    text-decoration:none;
    font-size:20px;
    font-weight:700;
}

.my-area{
    background:white;
    color:#9333ea !important;
    padding:8px 15px;
    border-radius:10px;
    border:3px solid #facc15;
}

/* CONTAINER */

.container{
    width:96%;
    margin:30px auto;
}

.title{
    font-size:50px;
    color:#1e293b;
    font-weight:800;
}

.subtitle{
    color:#6b7280;
    font-size:24px;
    margin-bottom:30px;
}

/* TABS */

.tabs{
    width:560px;
    background:#ddd;
    padding:5px;
    border-radius:18px;
    display:flex;
    margin-bottom:35px;
}

.tab{
    flex:1;
    text-align:center;
    padding:10px;
    border-radius:14px;
    font-size:21px;
    font-weight:700;
    cursor:pointer;
}

.active{
    background:white;
}

.notification{
    background:#ff3b3b;
    color:white;
    border-radius:20px;
    padding:2px 9px;
    font-size:14px;
}

/* HEADER */

.section-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.section-title{
    font-size:35px;
    font-weight:800;
    color:#1e293b;
}

.add-btn{
    background:#020617;
    color:white;
    border:none;
    padding:12px 22px;
    border-radius:12px;
    cursor:pointer;
    font-size:18px;
    font-weight:700;
}

/* CALENDÁRIO */

.calendar-box{
    background:#f8f8f8;
    border:1px solid #ddd;
    border-radius:20px;
    padding:20px;
}

.event{
    background:#fafafa;
    border:1px solid #ddd;
    border-radius:14px;
    padding:18px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
}

.event:last-child{
    margin-bottom:0;
}

.event-info h2{
    font-size:34px;
    color:#111827;
}

.event-info p{
    font-size:22px;
    color:#6b7280;
}

.badge{
    background:#e5e7eb;
    display:inline-block;
    padding:4px 10px;
    border-radius:10px;
    font-size:15px;
    font-weight:700;
    margin-top:6px;
}

.actions{
    display:flex;
    gap:10px;
}

.action-btn{
    width:42px;
    height:42px;
    border:none;
    border-radius:10px;
    background:white;
    border:1px solid #ddd;
    cursor:pointer;
    font-size:18px;
    transition:.3s;
}

.action-btn:hover{
    transform:scale(1.05);
}

.delete{
    color:red;
}

.editing{
    border:2px solid #3b82f6;
}

@media(max-width:1000px){

    .navbar{
        flex-direction:column;
        gap:20px;
    }

    .menu{
        flex-wrap:wrap;
        justify-content:center;
    }

    .tabs{
        width:100%;
    }

    .event{
        flex-direction:column;
        align-items:flex-start;
        gap:15px;
    }

}

</style>
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar">

    <div class="logo">

        <img src="https://i.imgur.com/ZQZSWrt.png">

        <div class="logo-text">
            <h1>BETH CIENTISTA</h1>
            <span>Divulgação Científica</span>
        </div>

    </div>

    <div class="menu">
        <a href="#">Início</a>
        <a href="#">Sobre Nós</a>
        <a href="#">Galeria</a>
        <a href="#">Biblioteca</a>
        <a href="#">Menções Honrosas</a>
        <a href="#" class="my-area">👤 Minha Área</a>
        <a href="#">Sair</a>
    </div>

</nav>

<!-- CONTEÚDO -->

<div class="container">

    <h1 class="title">ÁREA DO PROFESSOR</h1>

    <div class="subtitle">
        Painel de gerenciamento e aprovação
    </div>

    <!-- TABS -->

    <div class="tabs">

        <div class="tab" onclick="trocarTela('professor')">
            👥 Alunos
        </div>

        <div class="tab" onclick="trocarTela('revisao')">
            📋 Revisar Posts
            <span class="notification">2</span>
        </div>

        <div class="tab active">
            📅 Calendário
        </div>

    </div>

    <!-- HEADER -->

    <div class="section-header">

        <h2 class="section-title">
            GERENCIAR CALENDÁRIO
        </h2>

        <button 
            class="add-btn"
            onclick="adicionarEvento()"
        >
            ＋ Adicionar Publicação
        </button>

    </div>

    <!-- CALENDÁRIO -->

    <div class="calendar-box" id="calendarBox">

        <!-- EVENTO -->

        <div class="event">

            <div class="event-info">

                <h2>25/04/2026</h2>

                <p>Maria Silva</p>

                <span class="badge">
                    Beth nas Estrelas
                </span>

            </div>

            <div class="actions">

                <button 
                    class="action-btn"
                    onclick="editarEvento(this)"
                >
                    ✏
                </button>

                <button 
                    class="action-btn delete"
                    onclick="excluirEvento(this)"
                >
                    🗑
                </button>

            </div>

        </div>

        <!-- EVENTO -->

        <div class="event">

            <div class="event-info">

                <h2>28/04/2026</h2>

                <p>João Santos</p>

                <span class="badge">
                    Beth Anatomy
                </span>

            </div>

            <div class="actions">

                <button 
                    class="action-btn"
                    onclick="editarEvento(this)"
                >
                    ✏
                </button>

                <button 
                    class="action-btn delete"
                    onclick="excluirEvento(this)"
                >
                    🗑
                </button>

            </div>

        </div>

        <!-- EVENTO -->

        <div class="event">

            <div class="event-info">

                <h2>02/05/2026</h2>

                <p>Ana Costa</p>

                <span class="badge">
                    Beth Indica
                </span>

            </div>

            <div class="actions">

                <button 
                    class="action-btn"
                    onclick="editarEvento(this)"
                >
                    ✏
                </button>

                <button 
                    class="action-btn delete"
                    onclick="excluirEvento(this)"
                >
                    🗑
                </button>

            </div>

        </div>

    </div>

</div>

<script>

/* TROCA DE TELAS */

function trocarTela(pagina){

    window.location.href = pagina;

}

/* ADICIONAR EVENTO */

function adicionarEvento(){

    const nome = prompt('Nome do responsável:');
    const data = prompt('Data do evento:');
    const categoria = prompt('Categoria:');

    if(nome && data && categoria){

        const novoEvento = document.createElement('div');

        novoEvento.classList.add('event');

        novoEvento.innerHTML = `
        
            <div class="event-info">

                <h2>${data}</h2>

                <p>${nome}</p>

                <span class="badge">
                    ${categoria}
                </span>

            </div>

            <div class="actions">

                <button 
                    class="action-btn"
                    onclick="editarEvento(this)"
                >
                    ✏
                </button>

                <button 
                    class="action-btn delete"
                    onclick="excluirEvento(this)"
                >
                    🗑
                </button>

            </div>
        
        `;

        document
        .getElementById('calendarBox')
        .appendChild(novoEvento);

    }

}

/* EDITAR EVENTO */

function editarEvento(botao){

    const evento = botao.closest('.event');

    evento.classList.toggle('editing');

    const titulo = evento.querySelector('h2');
    const nome = evento.querySelector('p');

    const novaData = prompt(
        'Editar data:',
        titulo.innerText
    );

    const novoNome = prompt(
        'Editar responsável:',
        nome.innerText
    );

    if(novaData){
        titulo.innerText = novaData;
    }

    if(novoNome){
        nome.innerText = novoNome;
    }

}

/* EXCLUIR EVENTO */

function excluirEvento(botao){

    const confirmar = confirm(
        'Deseja excluir este evento?'
    );

    if(confirmar){

        const evento = botao.closest('.event');

        evento.remove();

    }

}

</script>

</body>
</html>