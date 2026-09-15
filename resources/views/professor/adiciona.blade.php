<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background: linear-gradient(180deg, #7000a8 0%, #b400d4 55%, #ef6c73 100%);
            min-height: 100vh;
        }

        /* HEADER */
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
        }

        nav {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        nav button, nav a {
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

        nav button:hover, nav a:hover {
            background: #ffe5cb;
            transform: translateY(-3px);
        }

        /* MAIN */
        main {
            width: 90%;
            margin: 45px auto;
        }

        main h1 {
            color: white;
            font-size: 48px;
            font-weight: 700;
        }

        main > p {
            color: #f5f5f5;
            margin-top: 8px;
            margin-bottom: 30px;
            font-size: 18px;
        }

        /* MENU */
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

        /* SEÇÕES */
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

        /* BARRA DE GERENCIAMENTO */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            gap: 15px;
        }

        .input-busca {
            padding: 10px 16px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            width: 300px;
            font-size: 14px;
            outline: none;
            background-color: #fff;
        }

        .btn-principal {
            background: #ff7a00;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 12px;
            cursor: pointer;
            transition: .3s;
            font-weight: 600;
        }

        .btn-principal:hover {
            background: #ff9500;
            transform: translateY(-2px);
        }

        /* TABELA */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
            padding: 6px 14px;
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
            padding: 8px 12px;
            cursor: pointer;
            margin-left: 4px;
        }

        /* MODAIS */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
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

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 800;
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
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 13px;
            color: #374151;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 12px;
            background-color: #f8fafc;
            box-sizing: border-box;
            font-size: 14px;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 28px;
        }

        .btn-cancelar {
            background: #eee;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            color: #333;
        }

        /* ALERTAS */
        .alert-sucesso {
            background-color: #d1fae5;
            color: #065f46;
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* POSTS */
        .post-card {
            background: #f7f7f9;
            padding: 25px;
            border-radius: 18px;
            margin-bottom: 20px;
            border-left: 6px solid #ff7a00;
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

        /* CALENDÁRIO */
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

        .calendario-header button {
            border: none;
            background: #ff7a00;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
        }

        .dias-semana, .dias {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .dias-semana div {
            text-align: center;
            font-weight: 700;
            color: #666;
            padding: 8px;
        }

        .dia {
            min-height: 55px;
            border: none;
            background: white;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
        }

        .dia.hoje { background: #ff7a00; color: white; }
        .dia.selecionado { background: #7b2cbf; color: white; }
        .dia.tem-evento { border: 3px solid #4caf50; }

        @media(max-width: 1000px) {
            header { flex-direction: column; padding: 20px; }
            nav { flex-wrap: wrap; justify-content: center; margin-top: 20px; }
            main { width: 95%; }
            .menu-principal { flex-direction: column; }
            .calendario-container { grid-template-columns: 1fr; }
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
            <a href="{{ route('sobre') }}">Sobre Nós</a>
            <a href="{{ route('galeria') }}">Galeria</a>
            <a href="{{ route('biblioteca') }}">Biblioteca</a>
            <a href="{{ route('mencao') }}">Menções honrosas</a>
            <button onclick="sair()">Sair</button>
        </nav>
    </header>

    <main>
        <h1>ÁREA DO PROFESSOR</h1>
        <p>Painel de gerenciamento e aprovação</p>

        @if(session('sucesso'))
            <div class="alert-sucesso">
                {{ session('sucesso') }}
            </div>
        @endif

        <!-- MENU -->
        <section class="menu-principal">
            <button onclick="mostrarAlunos()">👨‍🎓 Alunos</button>
            <button onclick="mostrarPosts()">
                📝 Revisar Posts <span id="contadorPosts">2</span>
            </button>
            <button onclick="mostrarCalendario()">📅 Calendário</button>
        </section>

        <!-- ================= ALUNOS ================= -->
        <section id="alunos" class="painel">
            <h2>Gerenciar Alunos</h2>

            <div class="header-container">
                <form action="{{ route('professor.index') }}" method="GET">
                    <input type="text" name="busca" class="input-busca" placeholder="Buscar por nome ou e-mail..." value="{{ request('busca') }}">
                </form>

                <button type="button" onclick="abrirModalCriar()" class="btn-principal">
                    + Adicionar Aluno
                </button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Nível de Acesso</th>
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
                            <td>{{ $aluno->created_at->format('d/m/Y') }}</td>
                            <td style="text-align: right;">
                                <button type="button" class="btn-acao" 
                                    onclick="abrirModalEditar({{ $aluno->id }}, '{{ addslashes($aluno->nome) }}', '{{ $aluno->email }}', '{{ $aluno->nivel_acesso }}')">
                                    ✏️
                                </button>

                                <form action="{{ route('professor.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-acao" onclick="return confirm('Deseja excluir este aluno?')">🗑️</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="text-align: center; color: #9ca3af; padding: 30px;">
                                Nenhum aluno encontrado.
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
            <button class="btn-aprovar" onclick="aprovarTodos()">Aprovar Todos</button>
        </section>

        <!-- ================= CALENDÁRIO ================= -->
        <section id="calendario" class="painel" hidden>
            <h2>Calendário</h2>
            <p style="color:#666">Selecione uma data no calendário para adicionar um evento.</p>

            <div class="calendario-container">
                <div class="calendario">
                    <div class="calendario-header">
                        <button onclick="mesAnterior()">‹</button>
                        <h3 id="mesAno"></h3>
                        <button onclick="mesProximo()">›</button>
                    </div>

                    <div class="dias-semana">
                        <div>Dom</div><div>Seg</div><div>Ter</div><div>Qua</div><div>Qui</div><div>Sex</div><div>Sáb</div>
                    </div>
                    <div id="dias" class="dias"></div>
                </div>

                <div class="evento-form">
                    <h3>Novo Evento</h3>
                    <p>Data selecionada: <strong id="dataSelecionada">Nenhuma</strong></p>

                    <div class="form-group">
                        <label>Título do evento</label>
                        <input type="text" id="tituloEvento" class="form-control" placeholder="Ex: Aula de Astronomia">
                    </div>

                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea id="descricaoEvento" class="form-control" placeholder="Descreva o evento..."></textarea>
                    </div>

                    <button class="btn-principal" onclick="salvarEvento()">Salvar Evento</button>
                </div>
            </div>

            <div class="mt-4">
                <h3 style="color:#4b1d91;margin-bottom:15px">Eventos cadastrados</h3>
                <div id="listaEventos"></div>
            </div>
        </section>
    </main>

    <!-- MODAL ADICIONAR -->
    <div id="modalCriar" class="modal-overlay" style="display: none;">
        <div class="modal-card">
            <div class="modal-header">
                <h2>ADICIONAR NOVO ALUNO</h2>
                <button type="button" class="btn-fechar" onclick="fecharModalCriar()">✕</button>
            </div>

            <form action="{{ route('professor.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome completo do aluno" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email@exemplo.com" required>
                </div>

                <div class="form-group">
                    <label for="nivel_acesso">Nível de Acesso</label>
                    <select id="nivel_acesso" name="nivel_acesso" class="form-control" required>
                        <option value="Clubista" selected>Clubista</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-cancelar" onclick="fecharModalCriar()">Cancelar</button>
                    <button type="submit" class="btn-principal">Adicionar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- MODAL EDITAR -->
    <div id="modalEditar" class="modal-overlay" style="display: none;">
        <div class="modal-card">
            <div class="modal-header">
                <h2>EDITAR ALUNO</h2>
                <button type="button" class="btn-fechar" onclick="fecharModalEditar()">✕</button>
            </div>

            <form id="formEditar" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="edit_nome">Nome</label>
                    <input type="text" id="edit_nome" name="nome" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="edit_email">Email</label>
                    <input type="email" id="edit_email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="edit_nivel_acesso">Nível de Acesso</label>
                    <select id="edit_nivel_acesso" name="nivel_acesso" class="form-control" required>
                        <option value="Clubista">Clubista</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-cancelar" onclick="fecharModalEditar()">Cancelar</button>
                    <button type="submit" class="btn-principal">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        /* NAVEGAÇÃO ENTRE ABAS */
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

        /* MODAIS DE ALUNOS */
        function abrirModalCriar() {
            document.getElementById('modalCriar').style.display = 'flex';
        }

        function fecharModalCriar() {
            document.getElementById('modalCriar').style.display = 'none';
        }

        function abrirModalEditar(id, nome, email, nivelAcesso) {
            // Atualiza para apontar para a rota do AdicionaController
            document.getElementById('formEditar').action = `/professor/${id}`;
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
        }

        /* POSTS SIMULADOS */
        let posts = [
            { titulo: "A Evolução das Estrelas", autor: "Maria Silva", categoria: "Beth nas Estrelas" },
            { titulo: "Sistema Digestivo", autor: "João Santos", categoria: "Beth Anatomy" }
        ];

        function carregarPosts() {
            const lista = document.getElementById("listaPosts");
            lista.innerHTML = "";
            document.getElementById("contadorPosts").innerText = posts.length;

            if (posts.length === 0) {
                lista.innerHTML = `<div class="alert-sucesso">Não existem posts aguardando aprovação.</div>`;
                return;
            }

            posts.forEach((post, index) => {
                lista.innerHTML += `
                <div class="post-card">
                    <h3>${post.titulo}</h3>
                    <p><strong>Autor:</strong> ${post.autor}</p>
                    <p><strong>Categoria:</strong> ${post.categoria}</p>
                    <button class="btn-aprovar" onclick="aprovarPost(${index})">Aprovar</button>
                    <button class="btn-ajustes" onclick="solicitarAjustes(${index})">Solicitar Ajustes</button>
                </div>`;
            });
        }

        function aprovarPost(indice) {
            posts.splice(indice, 1);
            carregarPosts();
        }

        function solicitarAjustes(indice) {
            let observacao = prompt("Digite os ajustes solicitados:");
            if (observacao != null) {
                posts.splice(indice, 1);
                carregarPosts();
            }
        }

        function aprovarTodos() {
            posts = [];
            carregarPosts();
        }

        /* CALENDÁRIO */
        let dataAtual = new Date();
        let dataSelecionada = null;
        let eventos = [];

        function renderizarCalendario() {
            const ano = dataAtual.getFullYear();
            const mes = dataAtual.getMonth();
            const meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

            document.getElementById("mesAno").innerText = meses[mes] + " " + ano;

            const primeiroDia = new Date(ano, mes, 1).getDay();
            const ultimoDia = new Date(ano, mes + 1, 0).getDate();
            const dias = document.getElementById("dias");
            dias.innerHTML = "";

            for (let i = 0; i < primeiroDia; i++) {
                dias.appendChild(document.createElement("div"));
            }

            for (let dia = 1; dia <= ultimoDia; dia++) {
                const botao = document.createElement("button");
                botao.className = "dia";
                botao.innerText = dia;
                const dataString = ano + "-" + String(mes + 1).padStart(2, "0") + "-" + String(dia).padStart(2, "0");

                if (eventos.some(evento => evento.data === dataString)) botao.classList.add("tem-evento");
                if (dataSelecionada === dataString) botao.classList.add("selecionado");

                botao.onclick = function () {
                    dataSelecionada = dataString;
                    document.getElementById("dataSelecionada").innerText = dataString;
                    renderizarCalendario();
                };

                dias.appendChild(botao);
            }
        }

        function mesAnterior() { dataAtual.setMonth(dataAtual.getMonth() - 1); renderizarCalendario(); }
        function mesProximo() { dataAtual.setMonth(dataAtual.getMonth() + 1); renderizarCalendario(); }

        function salvarEvento() {
            const titulo = document.getElementById("tituloEvento").value.trim();
            const descricao = document.getElementById("descricaoEvento").value.trim();

            if (!dataSelecionada || !titulo) return;

            eventos.push({ data: dataSelecionada, titulo, descricao });
            document.getElementById("tituloEvento").value = "";
            document.getElementById("descricaoEvento").value = "";

            carregarEventos();
            renderizarCalendario();
        }

        function carregarEventos() {
            const lista = document.getElementById("listaEventos");
            lista.innerHTML = "";
            eventos.forEach((evento, index) => {
                lista.innerHTML += `
                <div class="post-card">
                    <strong>${evento.titulo}</strong>
                    <p>📅 ${evento.data}</p>
                    <p>${evento.descricao}</p>
                </div>`;
            });
        }

        function sair() {
            window.location.href = "{{ route('inicio') }}";
        }
    </script>
</body>
</html>