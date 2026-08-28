<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Área do Professor</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(180deg,
                    #7000a8 0%,
                    #b400d4 55%,
                    #ef6c73 100%);
            min-height: 100vh;
        }

        /* ================= HEADER ================= */
        header {
            width: 100%;
            background: #ff7a00;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 60px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .25);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        header h2 {
            color: white;
            font-size: 32px;
            font-weight: 800;
            margin: 0;
        }

        nav {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        nav button,
        nav a {
            border: none;
            background: white;
            color: #ff7a00;
            padding: 10px 18px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: .3s;
            text-decoration: none;
        }

        nav button:hover,
        nav a:hover {
            background: #ffe5cb;
            transform: translateY(-3px);
            color: #ff7a00;
        }

        /* ================= MAIN ================= */
        main {
            width: 90%;
            margin: 45px auto;
        }

        main h1 {
            color: white;
            font-size: 48px;
            font-weight: 700;
        }

        main>p {
            color: #f5f5f5;
            margin-top: 8px;
            margin-bottom: 30px;
            font-size: 18px;
        }

        /* ================= MENU ================= */
        .menu-principal {
            display: flex;
            gap: 15px;
            margin-bottom: 35px;
        }

        .menu-principal button {
            flex: 1;
            border: none;
            background: white;
            color: #444;
            padding: 18px;
            border-radius: 18px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
            box-shadow: 0 8px 18px rgba(0, 0, 0, .15);
        }

        .menu-principal button:hover {
            background: #ff8b00;
            color: white;
            transform: translateY(-3px);
        }

        /* ================= SEÇÕES ================= */
        .painel {
            background: white;
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .20);
        }

        .painel h2 {
            color: #4b1d91;
            margin-bottom: 20px;
        }

        /* ================= BOTÕES ================= */
        .btn-principal {
            background: #ff7a00;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 12px;
            cursor: pointer;
            transition: .3s;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
        }

        .btn-principal:hover {
            background: #ff9500;
            transform: translateY(-2px);
            color: white;
        }

        .btn-cancelar {
            background: #eeeeee;
            color: #333;
            border: none;
            padding: 12px 25px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-cancelar:hover {
            background: #ddd;
        }

        /* ================= TABELA E BUSCA ================= */
        .header-tabela {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 15px;
            flex-wrap: wrap;
        }

        .input-busca {
            padding: 10px 16px;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 300px;
            font-size: 14px;
            outline: none;
            background-color: #fff;
        }

        .input-busca:focus {
            border-color: #ff7a00;
            box-shadow: 0 0 0 3px rgba(255, 122, 0, .12);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            overflow: hidden;
            border-radius: 15px;
        }

        table thead {
            background: #ff7a00;
            color: white;
        }

        table th {
            padding: 18px;
            text-align: left;
        }

        table td {
            padding: 18px;
            background: white;
            border-bottom: 1px solid #ececec;
        }

        table tbody tr:hover {
            background: #fafafa;
        }

        .badge-nivel {
            background-color: #1d4ed8;
            color: #fff;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
        }

        .badge-monitor {
            background-color: #059669;
        }

        .btn-acao {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 6px 10px;
            cursor: pointer;
            margin-left: 4px;
        }

        /* ================= MODAIS ================= */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-card {
            background: #fff;
            width: 100%;
            max-width: 450px;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .modal-header-custom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .modal-header-custom h2 {
            margin: 0;
            font-size: 16px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #4b1d91;
        }

        .btn-fechar {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #9ca3af;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
            color: #444;
            font-size: 13px;
        }

        .form-control-custom {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 12px;
            background-color: #f8fafc;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form-control-custom:focus {
            outline: none;
            background-color: #fff;
            border-color: #ff7a00;
            box-shadow: 0 0 0 3px rgba(255, 122, 0, .12);
        }

        .modal-footer-custom {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 28px;
        }

        /* ================= POSTS ================= */
        .post-card {
            background: #f7f7f9;
            padding: 25px;
            border-radius: 18px;
            margin-bottom: 20px;
            border-left: 6px solid #ff7a00;
        }

        .post-card h3 {
            color: #4b1d91;
            margin-bottom: 10px;
        }

        .post-card p {
            color: #666;
            margin-bottom: 10px;
        }

        .btn-aprovar {
            background: #4caf50;
            color: white;
            border: none;
            padding: 11px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            margin-right: 8px;
        }

        .btn-ajustes {
            background: #ff9800;
            color: white;
            border: none;
            padding: 11px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
        }

        /* ================= MENSAGEM ================= */
        .mensagem {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .mensagem.sucesso {
            background: #d9f7df;
            color: #217a35;
            border-left: 5px solid #36a852;
        }

        .mensagem.erro {
            background: #ffe0e0;
            color: #b32626;
            border-left: 5px solid #e53935;
        }

        /* ================= CALENDÁRIO ================= */
        .calendario-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .calendario {
            background: #f7f7f9;
            border-radius: 20px;
            padding: 25px;
        }

        .calendario-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .calendario-header h3 {
            color: #4b1d91;
            margin: 0;
        }

        .calendario-header button {
            border: none;
            background: #ff7a00;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
        }

        .dias-semana {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 5px;
        }

        .dias-semana div {
            text-align: center;
            font-weight: 700;
            color: #666;
            padding: 8px;
        }

        .dias {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .dia {
            min-height: 55px;
            border: none;
            background: white;
            border-radius: 10px;
            cursor: pointer;
            transition: .2s;
            font-weight: 600;
            color: #444;
        }

        .dia:hover {
            background: #ffe0c2;
        }

        .dia.hoje {
            background: #ff7a00;
            color: white;
        }

        .dia.selecionado {
            background: #7b2cbf;
            color: white;
        }

        .dia.tem-evento {
            border: 3px solid #4caf50;
        }

        .evento-form {
            background: #f7f7f9;
            padding: 25px;
            border-radius: 20px;
        }

        .evento-form h3 {
            color: #4b1d91;
            margin-bottom: 20px;
        }

        .data-selecionada {
            background: #eee;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: #555;
            font-weight: 600;
        }

        .lista-eventos {
            margin-top: 30px;
        }

        .evento {
            background: white;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 12px;
            border-left: 5px solid #4caf50;
            box-shadow: 0 3px 8px rgba(0, 0, 0, .08);
        }

        .evento strong {
            color: #4b1d91;
        }

        .evento small {
            display: block;
            color: #777;
            margin: 5px 0;
        }

        .evento button {
            border: none;
            background: #ef5350;
            color: white;
            padding: 7px 12px;
            border-radius: 7px;
            cursor: pointer;
        }

        /* ================= RESPONSIVO ================= */
        @media(max-width:1000px) {
            header {
                flex-direction: column;
                padding: 20px;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 20px;
            }

            main {
                width: 95%;
            }

            .menu-principal {
                flex-direction: column;
            }

            table {
                display: block;
                overflow-x: auto;
            }

            .calendario-container {
                grid-template-columns: 1fr;
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
            <a href="{{ route('professor.inicio') }}">Início</a>
            <a href="{{ route('professor.sobre') }}">Sobre Nós</a>
            <a href="{{ route('professor.galeria') }}">Galeria</a>
            <a href="{{ route('professor.biblioteca') }}">Biblioteca</a>
            <a href="{{ route('professor.mencao') }}">Menções honrosas</a>
            <a href="{{ route('inicio') }}">Sair</a>
        </nav>
    </header>

    <main>
        <h1>ÁREA DO PROFESSOR</h1>
        <p>Painel de gerenciamento e aprovação</p>

        @if(session('sucesso'))
            <div class="mensagem sucesso">
                {{ session('sucesso') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mensagem erro">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div id="mensagemJS" class="mensagem" style="display: none;"></div>

        <!-- MENU -->
        <section class="menu-principal">
            <button type="button" onclick="mostrarAlunos()">
                👨‍🎓 Alunos
            </button>
            <button type="button" onclick="mostrarPosts()">
                📝 Revisar Posts
                <span id="contadorPosts">2</span>
            </button>
            <button type="button" onclick="mostrarCalendario()">
                📅 Calendário
            </button>
        </section>

        <!-- ================= ALUNOS (DO BANCO DE DADOS) ================= -->
        <section id="alunos" class="painel">
            <h2>Gerenciar Alunos</h2>

            <div class="header-tabela">
                <button type="button" class="btn-principal" onclick="abrirModalCriar()">
                    + Adicionar Aluno
                </button>

                <form action="{{ route('alunos.index') }}" method="GET">
                    <input type="text" name="busca" class="input-busca" placeholder="Buscar por nome ou e-mail..." value="{{ request('busca') }}">
                </form>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Nível</th>
                        <th>Data de Cadastro</th>
                        <th style="text-align: right;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->email }}</td>
                            <td>
                                <span class="badge-nivel {{ $aluno->nivel_acesso === 'Monitor' ? 'badge-monitor' : '' }}">
                                    {{ $aluno->nivel_acesso }}
                                </span>
                            </td>
                            <td>{{ $aluno->created_at ? $aluno->created_at->format('d/m/Y') : '-' }}</td>
                            <td style="text-align: right;">
                                <button type="button" class="btn-acao"
                                    onclick="abrirModalEditar({{ $aluno->id }}, '{{ addslashes($aluno->nome) }}', '{{ $aluno->email }}', '{{ $aluno->nivel_acesso }}')">
                                    ✏️
                                </button>

                                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-acao" onclick="return confirm('Deseja realmente excluir este aluno do banco de dados?')">🗑️</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align: center; color: #9ca3af; padding: 30px;">
                                Nenhum aluno cadastrado no banco de dados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-4">
                {{ $alunos->links() }}
            </div>
        </section>

        <!-- ================= POSTS ================= -->
        <section id="posts" class="painel" hidden>
            <h2>Revisão de Posts</h2>
            <p>Posts aguardando aprovação:</p>

            <div id="listaPosts"></div>

            <button type="button" class="btn-aprovar" onclick="aprovarTodos()">
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
                <div class="calendario">
                    <div class="calendario-header">
                        <button type="button" onclick="mesAnterior()">‹</button>
                        <h3 id="mesAno"></h3>
                        <button type="button" onclick="mesProximo()">›</button>
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

                <div class="evento-form">
                    <h3>Novo Evento</h3>
                    <div class="data-selecionada">
                        Data selecionada:
                        <span id="dataSelecionada">Nenhuma</span>
                    </div>

                    <div class="form-group">
                        <label for="tituloEvento">Título do evento</label>
                        <input type="text" id="tituloEvento" class="form-control-custom" placeholder="Ex: Aula de Astronomia">
                    </div>

                    <div class="form-group">
                        <label for="descricaoEvento">Descrição</label>
                        <textarea id="descricaoEvento" class="form-control-custom" placeholder="Descreva o evento..."></textarea>
                    </div>

                    <button type="button" class="btn-principal" onclick="salvarEvento()">
                        Salvar Evento
                    </button>
                </div>
            </div>

            <div class="lista-eventos">
                <h3 style="color:#4b1d91;margin-bottom:15px">Eventos cadastrados</h3>
                <div id="listaEventos"></div>
            </div>
        </section>

    </main>

    <!-- MODAL ADICIONAR ALUNO NO BANCO -->
    <div id="modalCriar" class="modal-overlay" style="display: none;">
        <div class="modal-card">
            <div class="modal-header-custom">
                <h2>ADICIONAR NOVO ALUNO</h2>
                <button type="button" class="btn-fechar" onclick="fecharModalCriar()">✕</button>
            </div>

            <form action="{{ route('alunos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control-custom" placeholder="Nome completo do aluno" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control-custom" placeholder="email@exemplo.com" required>
                </div>

                <div class="form-group">
                    <label for="nivel_acesso">Nível de Acesso</label>
                    <select id="nivel_acesso" name="nivel_acesso" class="form-control-custom" required>
                        <option value="Clubista" selected>Clubista</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>

                <div class="modal-footer-custom">
                    <button type="button" class="btn-cancelar" onclick="fecharModalCriar()">Cancelar</button>
                    <button type="submit" class="btn-principal">Salvar no Banco</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL EDITAR ALUNO NO BANCO -->
    <div id="modalEditar" class="modal-overlay" style="display: none;">
        <div class="modal-card">
            <div class="modal-header-custom">
                <h2>EDITAR ALUNO</h2>
                <button type="button" class="btn-fechar" onclick="fecharModalEditar()">✕</button>
            </div>

            <form id="formEditar" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="edit_nome">Nome</label>
                    <input type="text" id="edit_nome" name="nome" class="form-control-custom" required>
                </div>

                <div class="form-group">
                    <label for="edit_email">Email</label>
                    <input type="email" id="edit_email" name="email" class="form-control-custom" required>
                </div>

                <div class="form-group">
                    <label for="edit_nivel_acesso">Nível de Acesso</label>
                    <select id="edit_nivel_acesso" name="nivel_acesso" class="form-control-custom" required>
                        <option value="Clubista">Clubista</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>

                <div class="modal-footer-custom">
                    <button type="button" class="btn-cancelar" onclick="fecharModalEditar()">Cancelar</button>
                    <button type="submit" class="btn-principal">Atualizar no Banco</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        /* ================= MODAIS DE ALUNOS ================= */
        function abrirModalCriar() {
            document.getElementById('modalCriar').style.display = 'flex';
        }

        function fecharModalCriar() {
            document.getElementById('modalCriar').style.display = 'none';
        }

        function abrirModalEditar(id, nome, email, nivelAcesso) {
            document.getElementById('formEditar').action = `/alunos/${id}`;
            document.getElementById('edit_nome').value = nome;
            document.getElementById('edit_email').value = email;
            document.getElementById('edit_nivel_acesso').value = nivelAcesso;
            document.getElementById('modalEditar').style.display = 'flex';
        }

        function fecharModalEditar() {
            document.getElementById('modalEditar').style.display = 'none';
        }

        window.onclick = function(event) {
            const modalCriar = document.getElementById('modalCriar');
            const modalEditar = document.getElementById('modalEditar');
            if (event.target === modalCriar) fecharModalCriar();
            if (event.target === modalEditar) fecharModalEditar();
        };

        /* ================= NAVEGAÇÃO DAS SEÇÕES ================= */
        function esconderTudo() {
            document.getElementById("alunos").hidden = true;
            document.getElementById("posts").hidden = true;
            document.getElementById("calendario").hidden = true;
        }

        function mostrarAlunos() {
            esconderTudo();
            document.getElementById("alunos").hidden = false;
        }

        function mostrarPosts() {
            esconderTudo();
            document.getElementById("posts").hidden = false;
            carregarPosts();
        }

        function mostrarCalendario() {
            esconderTudo();
            document.getElementById("calendario").hidden = false;
            renderizarCalendario();
            carregarEventos();
        }

        /* ================= POSTS ================= */
        let posts = [
            { titulo: "A Evolução das Estrelas", autor: "Maria Silva", categoria: "Beth nas Estrelas" },
            { titulo: "Sistema Digestivo", autor: "João Santos", categoria: "Beth Anatomy" }
        ];

        function carregarPosts() {
            const lista = document.getElementById("listaPosts");
            lista.innerHTML = "";
            document.getElementById("contadorPosts").innerText = posts.length;

            if (posts.length === 0) {
                lista.innerHTML = `<div class="mensagem sucesso">Não existem posts aguardando aprovação.</div>`;
                return;
            }

            posts.forEach((post, index) => {
                lista.innerHTML += `
                <div class="post-card">
                    <h3>${post.titulo}</h3>
                    <p><strong>Autor:</strong> ${post.autor}</p>
                    <p><strong>Categoria:</strong> ${post.categoria}</p>
                    <button type="button" class="btn-aprovar" onclick="aprovarPost(${index})">Aprovar</button>
                    <button type="button" class="btn-ajustes" onclick="solicitarAjustes(${index})">Solicitar Ajustes</button>
                </div>
                `;
            });
        }

        function aprovarPost(indice) {
            posts.splice(indice, 1);
            carregarPosts();
            mostrarMensagemJS("Post aprovado com sucesso!", "sucesso");
        }

        function solicitarAjustes(indice) {
            let observacao = prompt("Digite os ajustes solicitados:");
            if (observacao == null) return;
            alert("Solicitação enviada ao autor.");
            posts.splice(indice, 1);
            carregarPosts();
        }

        function aprovarTodos() {
            posts = [];
            carregarPosts();
            mostrarMensagemJS("Todos os posts foram aprovados!", "sucesso");
        }

        /* ================= CALENDÁRIO ================= */
        let dataAtual = new Date();
        let dataSelecionada = null;

        let eventos = [
            { data: "2026-04-25", titulo: "Aula de Astronomia", descricao: "Introdução ao Sistema Solar." },
            { data: "2026-04-28", titulo: "Aula de Biologia", descricao: "Sistema Digestivo." }
        ];

        function renderizarCalendario() {
            const ano = dataAtual.getFullYear();
            const mes = dataAtual.getMonth();

            const meses = [
                "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
                "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
            ];

            document.getElementById("mesAno").innerText = meses[mes] + " " + ano;

            const primeiroDia = new Date(ano, mes, 1).getDay();
            const ultimoDia = new Date(ano, mes + 1, 0).getDate();
            const dias = document.getElementById("dias");

            dias.innerHTML = "";

            for (let i = 0; i < primeiroDia; i++) {
                const vazio = document.createElement("div");
                dias.appendChild(vazio);
            }

            for (let dia = 1; dia <= ultimoDia; dia++) {
                const botao = document.createElement("button");
                botao.type = "button";
                botao.className = "dia";
                botao.innerText = dia;

                const dataString = ano + "-" + String(mes + 1).padStart(2, "0") + "-" + String(dia).padStart(2, "0");

                if (eventos.some(evento => evento.data === dataString)) {
                    botao.classList.add("tem-evento");
                }

                if (dataSelecionada === dataString) {
                    botao.classList.add("selecionado");
                }

                const hoje = new Date();
                const hojeString = hoje.getFullYear() + "-" + String(hoje.getMonth() + 1).padStart(2, "0") + "-" + String(hoje.getDate()).padStart(2, "0");

                if (dataString === hojeString) {
                    botao.classList.add("hoje");
                }

                botao.onclick = function() {
                    selecionarData(dataString);
                };

                dias.appendChild(botao);
            }
        }

        function selecionarData(data) {
            dataSelecionada = data;
            document.getElementById("dataSelecionada").innerText = formatarData(data);
            document.getElementById("tituloEvento").focus();
            renderizarCalendario();
        }

        function mesAnterior() {
            dataAtual.setMonth(dataAtual.getMonth() - 1);
            renderizarCalendario();
        }

        function mesProximo() {
            dataAtual.setMonth(dataAtual.getMonth() + 1);
            renderizarCalendario();
        }

        function salvarEvento() {
            const titulo = document.getElementById("tituloEvento").value.trim();
            const descricao = document.getElementById("descricaoEvento").value.trim();

            if (dataSelecionada === null) {
                alert("Selecione uma data no calendário.");
                return;
            }

            if (titulo === "") {
                alert("Digite o título do evento.");
                return;
            }

            eventos.push({
                data: dataSelecionada,
                titulo: titulo,
                descricao: descricao
            });

            document.getElementById("tituloEvento").value = "";
            document.getElementById("descricaoEvento").value = "";

            carregarEventos();
            renderizarCalendario();
            mostrarMensagemJS("Evento adicionado ao calendário!", "sucesso");
        }

        function carregarEventos() {
            const lista = document.getElementById("listaEventos");
            lista.innerHTML = "";

            if (eventos.length === 0) {
                lista.innerHTML = "<p>Nenhum evento cadastrado.</p>";
                return;
            }

            eventos.forEach((evento, index) => {
                lista.innerHTML += `
                <div class="evento">
                    <strong>${evento.titulo}</strong>
                    <small>📅 ${formatarData(evento.data)}</small>
                    <p>${evento.descricao || "Sem descrição."}</p>
                    <button type="button" onclick="excluirEvento(${index})">Excluir</button>
                </div>
                `;
            });
        }

        function excluirEvento(indice) {
            eventos.splice(indice, 1);
            carregarEventos();
            renderizarCalendario();
            mostrarMensagemJS("Evento excluído.", "sucesso");
        }

        function formatarData(data) {
            if (!data) return "";
            const partes = data.split("-");
            return partes[2] + "/" + partes[1] + "/" + partes[0];
        }

        function mostrarMensagemJS(texto, tipo) {
            const mensagem = document.getElementById("mensagemJS");
            mensagem.innerText = texto;
            mensagem.className = "mensagem " + tipo;
            mensagem.style.display = "block";

            setTimeout(function() {
                mensagem.style.display = "none";
                mensagem.innerText = "";
            }, 4000);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>