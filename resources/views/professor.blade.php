<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Área do Professor</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
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
      color:#1f2937;
    }

    /* NAVBAR */

    .navbar{
      width:100%;
      background:#ff6900;
      padding:10px 40px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      box-shadow:0 5px 20px rgba(0,0,0,0.15);
    }

    .logo-area{
      display:flex;
      align-items:center;
      gap:12px;
    }

    .logo-area img{
      width:65px;
      height:65px;
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
      font-size:18px;
      font-weight:600;
    }

    .menu{
      background:#ff7a1f;
      padding:10px 20px;
      border-radius:50px;
      display:flex;
      align-items:center;
      gap:25px;
      box-shadow:0 4px 12px rgba(0,0,0,0.12);
    }

    .menu a{
      color:white;
      text-decoration:none;
      font-size:20px;
      font-weight:700;
      transition:.3s;
    }

    .menu a:hover{
      opacity:.7;
    }

    .my-area{
      background:white;
      color:#9333ea !important;
      padding:8px 16px;
      border-radius:12px;
      border:3px solid #facc15;
    }

    /* CONTEÚDO */

    .container{
      width:90%;
      margin:40px auto;
    }

    .title{
      font-size:55px;
      font-weight:800;
      color:#1e293b;
    }

    .subtitle{
      font-size:26px;
      color:#6b7280;
      margin-bottom:30px;
    }

    /* TABS */

    .tabs{
      width:700px;
      background:#ddd;
      border-radius:18px;
      padding:6px;
      display:flex;
      margin-bottom:40px;
    }

    .tab{
      flex:1;
      text-align:center;
      padding:10px;
      border-radius:15px;
      cursor:pointer;
      font-size:22px;
      font-weight:700;
      transition:.3s;
    }

    .tab.active{
      background:white;
    }

    .notification{
      background:#ff2d55;
      color:white;
      padding:2px 10px;
      border-radius:20px;
      font-size:16px;
      margin-left:5px;
    }

    /* HEADER LISTA */

    .section-header{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:20px;
    }

    .section-header h2{
      font-size:38px;
      font-weight:800;
      color:#1e293b;
    }

    .add-btn{
      background:#020617;
      color:white;
      border:none;
      padding:12px 25px;
      border-radius:14px;
      font-size:20px;
      font-weight:700;
      cursor:pointer;
    }

    /* TABELA */

    .table-box{
      background:#f8f8f8;
      border-radius:20px;
      padding:25px;
      border:1px solid #ddd;
    }

    table{
      width:100%;
      border-collapse:collapse;
    }

    th{
      text-align:left;
      padding:18px;
      font-size:22px;
      color:#222;
    }

    td{
      padding:18px;
      font-size:22px;
      border-top:1px solid #ddd;
    }

    .badge{
      padding:5px 14px;
      border-radius:12px;
      color:white;
      font-size:16px;
      font-weight:700;
    }

    .clubista{
      background:#3b82f6;
    }

    .monitor{
      background:#a855f7;
    }

    .actions{
      display:flex;
      gap:10px;
    }

    .action-btn{
      width:42px;
      height:42px;
      border-radius:10px;
      border:1px solid #ddd;
      background:white;
      cursor:pointer;
      font-size:20px;
    }

    .delete{
      color:red;
    }

    @media(max-width:1200px){

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

      table{
        display:block;
        overflow-x:auto;
      }

    }

  </style>
</head>
<body>

  <!-- NAVBAR -->

  <nav class="navbar">

    <div class="logo-area">

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

<!-- ALUNOS -->
<div 
    class="tab active"
    onclick="trocarTela('professor')"
>
    👥 Alunos
</div>

<!-- REVISÃO -->
<div 
    class="tab"
    onclick="trocarTela('revisao')"
>
    📋 Revisar Posts
    <span class="notification">2</span>
</div>

<!-- CALENDÁRIO -->
<div 
    class="tab"
    onclick="trocarTela('calendario')"
>
    📅 Calendário
</div>

</div>

    <!-- HEADER -->

    <div class="section-header">

      <h2>GERENCIAR ALUNOS</h2>

      <button class="add-btn">
        ＋ Adicionar Aluno
      </button>

    </div>

    <!-- TABELA -->

    <div class="table-box">

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

        <tbody>

          <tr>
            <td>Maria Silva</td>
            <td>maria@exemplo.com</td>
            <td><span class="badge clubista">Clubista</span></td>
            <td>10/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✏</button>
                <button class="action-btn delete">🗑</button>
              </div>
            </td>
          </tr>

          <tr>
            <td>João Santos</td>
            <td>joao@exemplo.com</td>
            <td><span class="badge monitor">Monitor</span></td>
            <td>10/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✏</button>
                <button class="action-btn delete">🗑</button>
              </div>
            </td>
          </tr>

          <tr>
            <td>Ana Costa</td>
            <td>ana@exemplo.com</td>
            <td><span class="badge clubista">Clubista</span></td>
            <td>15/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✏</button>
                <button class="action-btn delete">🗑</button>
              </div>
            </td>
          </tr>

          <tr>
            <td>Pedro Almeida</td>
            <td>pedro@exemplo.com</td>
            <td><span class="badge clubista">Clubista</span></td>
            <td>20/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✏</button>
                <button class="action-btn delete">🗑</button>
              </div>
            </td>
          </tr>

        </tbody>

      </table>

    </div>

  </div>

</body>
<script>

  // BOTÕES DAS ABAS
  const tabs = document.querySelectorAll('.tab');

  // ÁREAS
  const tituloSecao = document.querySelector('.section-header h2');
  const tabela = document.querySelector('tbody');

  tabs.forEach((tab, index) => {

    tab.addEventListener('click', () => {

      // remove active de todos
      tabs.forEach(t => t.classList.remove('active'));

      // adiciona active no clicado
      tab.classList.add('active');

      // TROCA DE CONTEÚDO

      // ALUNOS
      if(index === 0){

        tituloSecao.innerHTML = 'GERENCIAR ALUNOS';

        tabela.innerHTML = `
        
          <tr>
            <td>Maria Silva</td>
            <td>maria@exemplo.com</td>
            <td><span class="badge clubista">Clubista</span></td>
            <td>10/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✏</button>
                <button class="action-btn delete">🗑</button>
              </div>
            </td>
          </tr>

          <tr>
            <td>João Santos</td>
            <td>joao@exemplo.com</td>
            <td><span class="badge monitor">Monitor</span></td>
            <td>12/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✏</button>
                <button class="action-btn delete">🗑</button>
              </div>
            </td>
          </tr>

        `;

      }

      // POSTS
      else if(index === 1){

        tituloSecao.innerHTML = 'REVISAR POSTS';

        tabela.innerHTML = `
        
          <tr>
            <td>Experimento Vulcão</td>
            <td>ana@exemplo.com</td>
            <td><span class="badge monitor">Pendente</span></td>
            <td>18/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✔</button>
                <button class="action-btn delete">✖</button>
              </div>
            </td>
          </tr>

          <tr>
            <td>Feira de Ciências</td>
            <td>pedro@exemplo.com</td>
            <td><span class="badge clubista">Aguardando</span></td>
            <td>20/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">✔</button>
                <button class="action-btn delete">✖</button>
              </div>
            </td>
          </tr>

        `;

      }

      // CALENDÁRIO
      else if(index === 2){

        tituloSecao.innerHTML = 'CALENDÁRIO';

        tabela.innerHTML = `
        
          <tr>
            <td>Feira Científica</td>
            <td>Auditório</td>
            <td><span class="badge clubista">Evento</span></td>
            <td>25/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">📅</button>
              </div>
            </td>
          </tr>

          <tr>
            <td>Apresentação Final</td>
            <td>Laboratório</td>
            <td><span class="badge monitor">Importante</span></td>
            <td>30/01/2026</td>
            <td>
              <div class="actions">
                <button class="action-btn">📅</button>
              </div>
            </td>
          </tr>

        `;

      }

    });

  });

</script>
</html>