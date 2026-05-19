<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tela de Revisão</title>

<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Baloo 2', cursive;
}

body{
    background:#f3edf5;
}

/* NAVBAR */

.navbar{
    width:100%;
    background:#ff6900;
    padding:14px 40px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    box-shadow:0 5px 15px rgba(0,0,0,.12);
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

/* CONTEÚDO */

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
    font-size:25px;
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

/* POSTS */

.section-title{
    font-size:34px;
    margin-bottom:20px;
    color:#1e293b;
    font-weight:800;
}

.post-card{
    background:#f8f8f8;
    border:1px solid #ddd;
    border-radius:20px;
    padding:22px;
    margin-bottom:20px;
}

.post-card h2{
    font-size:30px;
    margin-bottom:10px;
    color:#111827;
}

.post-info{
    display:flex;
    align-items:center;
    gap:10px;
    color:#6b7280;
    font-size:18px;
    margin-bottom:18px;
}

.badge{
    background:#e5e7eb;
    padding:4px 10px;
    border-radius:10px;
    color:#111827;
    font-size:14px;
    font-weight:700;
}

.post-text{
    background:#efefef;
    padding:18px;
    border-radius:14px;
    color:#6b7280;
    font-size:20px;
    margin-bottom:18px;
}

.buttons{
    display:flex;
    gap:15px;
}

button{
    flex:1;
    border:none;
    padding:12px;
    border-radius:12px;
    cursor:pointer;
    font-size:20px;
    font-weight:700;
    transition:.3s;
}

.approve{
    background:#09ad3b;
    color:white;
}

.approve:hover{
    transform:scale(1.02);
}

.adjust{
    background:white;
    color:#ff2d2d;
    border:2px solid #ff2d2d;
}

.adjust:hover{
    background:#fff1f1;
}

.approved{
    border:3px solid #22c55e;
}

.adjusted{
    border:3px solid #ef4444;
}

.status{
    margin-top:15px;
    font-size:18px;
    font-weight:700;
}

/* RESPONSIVO */

@media(max-width:1100px){

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

    .buttons{
        flex-direction:column;
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

        <div class="tab">
            👥 Alunos
        </div>

        <div class="tab active">
            📋 Revisar Posts
            <span class="notification">2</span>
        </div>

        <div class="tab">
            📅 Calendário
        </div>

    </div>

    <h2 class="section-title">
        POSTS AGUARDANDO APROVAÇÃO
    </h2>

    <!-- POST -->

    <div class="post-card">

        <h2>A EVOLUÇÃO DAS ESTRELAS</h2>

        <div class="post-info">

            <span>Por Maria Silva</span>

            •

            <span class="badge">
                Beth nas Estrelas
            </span>

            •

            <span>05/04/2026</span>

        </div>

        <div class="post-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Vivamus lacinia odio vitae vestibulum vestibulum...
        </div>

        <div class="buttons">

            <button 
                class="approve"
                onclick="aprovar(this)"
            >
                ✔ Aprovar
            </button>

            <button 
                class="adjust"
                onclick="ajustes(this)"
            >
                ✖ Solicitar Ajustes
            </button>

        </div>

        <div class="status">
            Status: Pendente
        </div>

    </div>

    <!-- POST -->

    <div class="post-card">

        <h2>SISTEMA DIGESTIVO</h2>

        <div class="post-info">

            <span>Por João Santos</span>

            •

            <span class="badge">
                Beth Anatomy
            </span>

            •

            <span>06/04/2026</span>

        </div>

        <div class="post-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Vivamus lacinia odio vitae vestibulum vestibulum...
        </div>

        <div class="buttons">

            <button 
                class="approve"
                onclick="aprovar(this)"
            >
                ✔ Aprovar
            </button>

            <button 
                class="adjust"
                onclick="ajustes(this)"
            >
                ✖ Solicitar Ajustes
            </button>

        </div>

        <div class="status">
            Status: Pendente
        </div>

    </div>

</div>

<script>

function aprovar(botao){

    const card = botao.closest('.post-card');

    card.classList.remove('adjusted');

    card.classList.add('approved');

    card.querySelector('.status').innerHTML = 
    'Status: ✅ Aprovado';

}

function ajustes(botao){

    const card = botao.closest('.post-card');

    card.classList.remove('approved');

    card.classList.add('adjusted');

    card.querySelector('.status').innerHTML = 
    'Status: ⚠ Ajustes Solicitados';

}

</script>
<!-- TROCA DE TELAS -->

<script>

  // BOTÕES DAS ABAS
  const tabs = document.querySelectorAll('.tab');

  tabs[0].addEventListener('click', () => {

    // ALUNOS
    window.location.href = 'professor';

  });

  tabs[1].addEventListener('click', () => {

    // REVISÃO
    window.location.href = 'revisao';

  });

  tabs[2].addEventListener('click', () => {

    // CALENDÁRIO
    window.location.href = 'calendario';

  });

</script>
</body>
</html>