
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Área do Professor | Beth Cientista</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Fredoka:wght@300;400;500;600;700&family=Luckiest+Guy&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/area-professor.css') }}">
</head>

<body>

    <header>
        @include('components.navbar-professor')
    </header>

    <main class="area-professor">

        <!-- ================= CARD DE PERFIL ================= -->

        <section class="perfil-professor">

            <div class="perfil-foto-container">

                <img
                    src="{{ asset('images/perfil-professor.png') }}"
                    alt="Foto do professor"
                    class="perfil-foto"
                >

            </div>

            <div class="perfil-informacoes">

                <span class="perfil-identificacao">
                    ÁREA DO PROFESSOR
                </span>

                <h1>Olá, Professor(a)!</h1>

                <p>
                    Gerencie os alunos, revise publicações e organize
                    as atividades do Beth Cientista.
                </p>

                <span class="perfil-cargo">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    Professor(a) responsável
                </span>

            </div>

        </section>


        <!-- ================= MENSAGENS ================= -->

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


        <!-- ================= MENU PRINCIPAL ================= -->

        <section class="menu-principal">

            <button
                type="button"
                class="aba-professor ativa"
                onclick="mostrarAlunos()"
            >
                <i class="fa-solid fa-users"></i>
                <span>Alunos</span>
            </button>

            <button
                type="button"
                class="aba-professor"
                onclick="mostrarPosts()"
            >
                <i class="fa-solid fa-clipboard-check"></i>
                <span>Revisar Posts</span>

                <span id="contadorPosts">
                    {{ $postagens->count() }}
                </span>
            </button>

            <button
                type="button"
                class="aba-professor"
                onclick="mostrarCalendario()"
            >
                <i class="fa-solid fa-calendar-days"></i>
                <span>Calendário</span>
            </button>

        </section>


        <!-- ================= ALUNOS ================= -->

        <section id="alunos" class="painel">

            <h2>Gerenciar Alunos</h2>

            <p>Gerencie os estudantes cadastrados na plataforma.</p>

            <div class="header-tabela">

                <button
                    type="button"
                    class="btn-principal"
                    onclick="abrirModalCriar()"
                >
                    <i class="fa-solid fa-user-plus"></i>
                    Adicionar Aluno
                </button>

                <form action="{{ route('alunos.index') }}" method="GET">

                    <input
                        type="text"
                        name="busca"
                        class="input-busca"
                        placeholder="Buscar por nome ou e-mail..."
                        value="{{ request('busca') }}"
                    >

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

                            <td>
                                {{ $aluno->created_at ? $aluno->created_at->format('d/m/Y') : '-' }}
                            </td>

                            <td style="text-align: right;">

                                <button
                                    type="button"
                                    class="btn-acao"
                                    title="Editar aluno"
                                    data-id="{{ $aluno->id }}"
                                    data-nome="{{ $aluno->nome }}"
                                    data-email="{{ $aluno->email }}"
                                    data-nivel="{{ $aluno->nivel_acesso }}"
                                    onclick="abrirModalEditarComDataset(this)"
                                >
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <button
                                    type="button"
                                    class="btn-acao"
                                    title="Excluir aluno"
                                    onclick='abrirConfirmacaoExcluirAluno(
                                        {{ $aluno->id }},
                                        @json($aluno->nome)
                                    )'
                                >
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" style="text-align: center; padding: 30px;">
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


        <!-- ================= REVISÃO DE POSTS ================= -->

        <section id="posts" class="painel" hidden>

            <h2>Revisão de Posts</h2>

            <p>Confira as publicações enviadas pelos alunos e aprove ou solicite ajustes.</p>

            <div id="listaPosts">

                @forelse($postagens as $postagem)

                    <div class="post-card">

                        <h3>{{ $postagem->titulo }}</h3>

                        <p>
                            <strong>Categoria:</strong>
                            {{ $postagem->categoria }}
                        </p>

                        <p>
                            <strong>Aluno:</strong>
                            {{ $postagem->user->nome ?? 'Aluno não identificado' }}
                        </p>

                        <p>
                            <strong>Data de envio:</strong>
                            {{ $postagem->created_at ? $postagem->created_at->format('d/m/Y H:i') : '-' }}
                        </p>

                        <p>
                            <strong>Comentário:</strong>
                        </p>

                        <p>
                            {{ $postagem->comentario }}
                        </p>


                        <!-- IMAGENS DO POST -->

                        @if($postagem->imagem)

                            @php

                                $imagens = json_decode($postagem->imagem, true);

                                if (!is_array($imagens)) {
                                    $imagens = [$postagem->imagem];
                                }

                            @endphp

                            <div class="imagens-post">

                                @foreach($imagens as $imagem)

                                    @php

                                        if (str_contains($imagem, 'imagem')) {
                                            $urlImagem = asset($imagem);
                                        } else {
                                            $urlImagem = asset('storage/' . $imagem);
                                        }

                                    @endphp

                                    <img
                                        src="{{ $urlImagem }}"
                                        alt="{{ $postagem->titulo }}"
                                        class="imagem-post"
                                    >

                                @endforeach

                            </div>

                        @endif


                        <!-- AÇÕES DO POST -->

                        <div class="acoes-postagem">

                            <!-- APROVAR -->

                            <form
                                action="{{ route('postagens.aprovar', $postagem->id) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PUT')

                                <button type="submit" class="btn-aprovar">
                                    <i class="fa-solid fa-check"></i>
                                    Aprovar
                                </button>

                            </form>


                            <!-- SOLICITAR AJUSTES -->

                            <button
                                type="button"
                                class="btn-ajustes"
                                onclick="abrirModalAjustes({{ $postagem->id }})"
                            >
                                <i class="fa-solid fa-pen-to-square"></i>
                                Solicitar Ajustes
                            </button>


                            <!-- REJEITAR -->

                            <form
                                action="{{ route('postagens.rejeitar', $postagem->id) }}"
                                method="POST"
                            >
                                @csrf
                                @method('PUT')

                                <button type="submit" class="btn-rejeitar">
                                    <i class="fa-solid fa-xmark"></i>
                                    Rejeitar
                                </button>

                            </form>

                        </div>

                    </div>

                @empty

                    <div class="mensagem sucesso">
                        Não existem posts aguardando aprovação.
                    </div>

                @endforelse

            </div>

        </section>


        <!-- ================= CALENDÁRIO ================= -->

        <section id="calendario" class="painel" hidden>

            <h2>Calendário</h2>

            <p>
                Selecione uma data no calendário para adicionar um evento.
            </p>


            <div class="calendario-container">

                <!-- CALENDÁRIO -->

                <div class="calendario">

                    <div class="calendario-header">

                        <button type="button" onclick="mesAnterior()">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>

                        <h3 id="mesAno"></h3>

                        <button type="button" onclick="mesProximo()">
                            <i class="fa-solid fa-chevron-right"></i>
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


                <!-- FORMULÁRIO DE EVENTO -->

                <div class="evento-form">

                    <h3>Novo Evento / Post</h3>

                    <div class="data-selecionada">

                        Data selecionada:

                        <span id="dataSelecionada">
                            Nenhuma
                        </span>

                    </div>


                    <div class="form-group">

                        <label for="alunoIdEvento">
                            Aluno Responsável
                        </label>

                        <select
                            id="alunoIdEvento"
                            class="form-control-custom"
                            required
                        >

                            <option value="" disabled selected>
                                Selecione um aluno...
                            </option>

                            @foreach($alunos as $aluno)

                                <option value="{{ $aluno->id }}">
                                    {{ $aluno->nome }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="categoriaEvento">
                            Categoria
                        </label>

                        <select
                            id="categoriaEvento"
                            name="categoriaEvento"
                            class="form-control-custom"
                            required
                        >

                            <option value="" selected disabled>
                                Selecione uma categoria
                            </option>

                            <option value="Beth Indica">
                                Beth Indica
                            </option>

                            <option value="Beth nas Estrelas">
                                Beth nas Estrelas
                            </option>

                            <option value="Beth Anatomy">
                                Beth Anatomy
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="descricaoEvento">
                            Descrição
                        </label>

                        <textarea
                            id="descricaoEvento"
                            class="form-control-custom"
                            placeholder="Descreva as diretrizes do post..."
                            required
                        ></textarea>

                    </div>


                    <button
                        type="button"
                        class="btn-principal"
                        onclick="salvarEvento()"
                    >
                        <i class="fa-solid fa-floppy-disk"></i>
                        Salvar Evento
                    </button>

                </div>

            </div>


            <!-- EVENTOS CADASTRADOS -->

            <div class="lista-eventos">

                <h3>Eventos cadastrados</h3>

                @forelse($eventos ?? [] as $evento)

                    <div class="evento">

                        <div>

                            <strong>
                                <i class="fa-solid fa-calendar-day"></i>
                                {{ \Carbon\Carbon::parse($evento->data_evento)->format('d/m/Y') }}
                            </strong>

                            <small>
                                <strong>Aluno:</strong>
                                {{ $evento->aluno->nome ?? 'Aluno não identificado' }}
                            </small>

                            <small>
                                <strong>Descrição:</strong>
                                {{ $evento->descricao }}
                            </small>

                            <span class="evento-categoria">
                                {{ $evento->categoria }}
                            </span>

                        </div>

                    </div>

                @empty

                    <p>
                        Nenhum evento cadastrado no momento.
                    </p>

                @endforelse

            </div>

        </section>

    </main>


    <!-- ================= MODAL ADICIONAR ALUNO ================= -->

    <div id="modalCriar" class="modal-overlay" style="display: none;">

        <div class="modal-card">

            <div class="modal-header-custom">

                <h2>ADICIONAR NOVO ALUNO</h2>

                <button
                    type="button"
                    class="btn-fechar"
                    onclick="fecharModalCriar()"
                >
                    <i class="fa-solid fa-xmark"></i>
                </button>

            </div>


            <form action="{{ route('alunos.store') }}" method="POST">

                @csrf

                <div class="form-group">

                    <label for="nome">Nome</label>

                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        class="form-control-custom"
                        placeholder="Nome completo do aluno"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control-custom"
                        placeholder="email@exemplo.com"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="nivel_acesso">
                        Nível de Acesso
                    </label>

                    <select
                        id="nivel_acesso"
                        name="nivel_acesso"
                        class="form-control-custom"
                        required
                    >

                        <option value="Clubista" selected>
                            Clubista
                        </option>

                        <option value="Monitor">
                            Monitor
                        </option>

                    </select>

                </div>


                <div class="modal-footer-custom">

                    <button
                        type="button"
                        class="btn-cancelar"
                        onclick="fecharModalCriar()"
                    >
                        Cancelar
                    </button>

                    <button type="submit" class="btn-principal">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Salvar no Banco
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- ================= MODAL EDITAR ALUNO ================= -->

    <div id="modalEditar" class="modal-overlay" style="display: none;">

        <div class="modal-card">

            <div class="modal-header-custom">

                <h2>EDITAR ALUNO</h2>

                <button
                    type="button"
                    class="btn-fechar"
                    onclick="fecharModalEditar()"
                >
                    <i class="fa-solid fa-xmark"></i>
                </button>

            </div>


            <form id="formEditar" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">

                    <label for="edit_nome">Nome</label>

                    <input
                        type="text"
                        id="edit_nome"
                        name="nome"
                        class="form-control-custom"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="edit_email">Email</label>

                    <input
                        type="email"
                        id="edit_email"
                        name="email"
                        class="form-control-custom"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="edit_nivel_acesso">
                        Nível de Acesso
                    </label>

                    <select
                        id="edit_nivel_acesso"
                        name="nivel_acesso"
                        class="form-control-custom"
                        required
                    >

                        <option value="Clubista">
                            Clubista
                        </option>

                        <option value="Monitor">
                            Monitor
                        </option>

                    </select>

                </div>


                <div class="modal-footer-custom">

                    <button
                        type="button"
                        class="btn-cancelar"
                        onclick="fecharModalEditar()"
                    >
                        Cancelar
                    </button>

                    <button type="submit" class="btn-principal">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Atualizar no Banco
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- ================= MODAL EXCLUIR ALUNO ================= -->

    <div
        id="modalExcluirAluno"
        class="modal-overlay"
        style="display: none;"
    >

        <div class="modal-exclusao-card">

            <h2 class="modal-exclusao-titulo">

                <i class="fa-solid fa-triangle-exclamation"></i>
                Excluir Aluno

            </h2>


            <p class="modal-exclusao-texto">

                Tem certeza que deseja excluir o aluno

                <strong id="nomeAlunoExcluir"></strong>?

                <br>

                Esta ação não poderá ser desfeita.

            </p>


            <form id="formExcluirAluno" method="POST">

                @csrf
                @method('DELETE')

                <div class="modal-exclusao-botoes">

                    <button
                        type="button"
                        class="btn-modal-cancelar"
                        onclick="fecharConfirmacaoExcluirAluno()"
                    >
                        Cancelar
                    </button>

                    <button
                        type="submit"
                        class="btn-modal-excluir"
                    >
                        <i class="fa-solid fa-trash"></i>
                        Excluir
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- ================= MODAL SOLICITAR AJUSTES ================= -->

    <div id="modalAjustes" class="modal-ajustes">

        <div class="modal-ajustes-conteudo">

            <button
                type="button"
                class="fechar-modal"
                onclick="fecharModalAjustes()"
            >
                <i class="fa-solid fa-xmark"></i>
            </button>


            <h2>Solicitar ajustes</h2>

            <p>
                Explique ao aluno o que precisa ser corrigido antes da publicação
                ser aprovada.
            </p>


            <form id="formAjustes" method="POST">

                @csrf
                @method('PUT')

                <textarea
                    name="observacao_professor"
                    id="observacaoProfessor"
                    rows="6"
                    maxlength="2000"
                    required
                    placeholder="Ex.: Corrija a descrição e troque a segunda imagem."
                ></textarea>


                <div class="acoes-modal">

                    <button
                        type="button"
                        class="btn-cancelar"
                        onclick="fecharModalAjustes()"
                    >
                        Cancelar
                    </button>

                    <button
                        type="submit"
                        class="btn-confirmar-ajustes"
                    >
                        <i class="fa-solid fa-paper-plane"></i>
                        Solicitar Ajustes
                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- ================= JAVASCRIPT ================= -->

    <script>

        /* ================= AUXILIARES ================= */

        function mostrarMensagemJS(texto, tipo) {

            const el = document.getElementById('mensagemJS');

            el.className = `mensagem ${tipo}`;

            el.innerText = texto;

            el.style.display = 'block';

            setTimeout(() => {
                el.style.display = 'none';
            }, 4000);

        }


        function formatarData(dataISO) {

            if (!dataISO) return 'Nenhuma';

            const partes = dataISO.split('-');

            return `${partes[2]}/${partes[1]}/${partes[0]}`;

        }


        /* ================= MODAIS DE ALUNOS ================= */

        function abrirModalCriar() {

            document.getElementById('modalCriar').style.display = 'flex';

        }


        function fecharModalCriar() {

            document.getElementById('modalCriar').style.display = 'none';

        }


        function abrirModalEditarComDataset(btn) {

            const id = btn.dataset.id;

            const nome = btn.dataset.nome;

            const email = btn.dataset.email;

            const nivelAcesso = btn.dataset.nivel;


            document.getElementById('formEditar').action = `/alunos/${id}`;

            document.getElementById('edit_nome').value = nome;

            document.getElementById('edit_email').value = email;

            document.getElementById('edit_nivel_acesso').value = nivelAcesso;

            document.getElementById('modalEditar').style.display = 'flex';

        }


        function fecharModalEditar() {

            document.getElementById('modalEditar').style.display = 'none';

        }


        /* ================= FECHAR MODAIS ================= */

        window.onclick = function(event) {

            const modalCriar = document.getElementById('modalCriar');

            const modalEditar = document.getElementById('modalEditar');

            const modalExcluir = document.getElementById('modalExcluirAluno');

            if (event.target === modalCriar) {
                fecharModalCriar();
            }

            if (event.target === modalEditar) {
                fecharModalEditar();
            }

            if (event.target === modalExcluir) {
                fecharConfirmacaoExcluirAluno();
            }

        };


        /* ================= NAVEGAÇÃO DAS SEÇÕES ================= */

        function atualizarAbaAtiva(botao) {

            document.querySelectorAll('.aba-professor').forEach(aba => {

                aba.classList.remove('ativa');

            });

            botao.classList.add('ativa');

        }


        function esconderTudo() {

            document.getElementById("alunos").hidden = true;

            document.getElementById("posts").hidden = true;

            document.getElementById("calendario").hidden = true;

        }


        function mostrarAlunos() {

            esconderTudo();

            document.getElementById("alunos").hidden = false;

            atualizarAbaAtiva(
                document.querySelectorAll('.aba-professor')[0]
            );

        }


        function mostrarPosts() {

            esconderTudo();

            document.getElementById("posts").hidden = false;

            atualizarAbaAtiva(
                document.querySelectorAll('.aba-professor')[1]
            );

        }


        function mostrarCalendario() {

            esconderTudo();

            document.getElementById("calendario").hidden = false;

            atualizarAbaAtiva(
                document.querySelectorAll('.aba-professor')[2]
            );

            renderizarCalendario();

        }


        /* ================= CALENDÁRIO ================= */

        let dataAtual = new Date();

        let dataSelecionada = null;


        function renderizarCalendario() {

            const ano = dataAtual.getFullYear();

            const mes = dataAtual.getMonth();


            const meses = [
                "Janeiro", "Fevereiro", "Março", "Abril",
                "Maio", "Junho", "Julho", "Agosto",
                "Setembro", "Outubro", "Novembro", "Dezembro"
            ];


            const mesAnoEl = document.getElementById("mesAno");

            if (mesAnoEl) {

                mesAnoEl.innerText = meses[mes] + " " + ano;

            }


            const primeiroDia = new Date(ano, mes, 1).getDay();

            const ultimoDia = new Date(ano, mes + 1, 0).getDate();

            const dias = document.getElementById("dias");


            if (!dias) return;

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


                const dataString = ano + "-" +
                    String(mes + 1).padStart(2, "0") + "-" +
                    String(dia).padStart(2, "0");


                if (dataSelecionada === dataString) {

                    botao.classList.add("selecionado");

                }


                const hoje = new Date();

                const hojeString =
                    hoje.getFullYear() + "-" +
                    String(hoje.getMonth() + 1).padStart(2, "0") + "-" +
                    String(hoje.getDate()).padStart(2, "0");


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

            document.getElementById("dataSelecionada").innerText =
                formatarData(data);

            document.getElementById("categoriaEvento").focus();

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


        /* ================= SALVAR EVENTO ================= */

        async function salvarEvento() {

            const categoria = document.getElementById('categoriaEvento').value;

            const descricao = document.getElementById('descricaoEvento').value.trim();

            const alunoId = document.getElementById('alunoIdEvento').value;


            if (!dataSelecionada) {

                alert('Selecione uma data no calendário.');

                return;

            }


            if (!alunoId) {

                alert('Selecione um aluno.');

                return;

            }


            if (!categoria) {

                alert('Selecione uma categoria.');

                return;

            }


            if (!descricao) {

                alert('Informe a descrição.');

                return;

            }


            try {

                const resposta = await fetch(
                    "{{ url('/professor/eventos/salvar') }}",
                    {

                        method: 'POST',

                        headers: {

                            'Content-Type': 'application/json',

                            'Accept': 'application/json',

                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]'
                            ).content

                        },

                        body: JSON.stringify({

                            data_evento: dataSelecionada,

                            categoria: categoria,

                            descricao: descricao,

                            aluno_id: alunoId

                        })

                    }
                );


                const texto = await resposta.text();


                console.log('Status HTTP:', resposta.status);

                console.log('Resposta do Laravel:', texto);


                let resultado;


                try {

                    resultado = JSON.parse(texto);

                } catch (erro) {

                    throw new Error(
                        'O Laravel não retornou JSON. Verifique a rota, a sessão e os erros do servidor. Resposta: ' +
                        texto.substring(0, 300)
                    );

                }


                if (!resposta.ok) {

                    if (resposta.status === 419) {

                        throw new Error(
                            'Sessão expirada ou token CSRF inválido. Atualize a página e tente novamente.'
                        );

                    }


                    if (resposta.status === 401 || resposta.status === 403) {

                        throw new Error(
                            'Você não está autenticado ou não tem permissão para cadastrar eventos.'
                        );

                    }


                    if (resposta.status === 404) {

                        throw new Error(
                            'A rota de cadastro de eventos não foi encontrada.'
                        );

                    }


                    if (resposta.status === 422) {

                        const erros = Object.values(resultado.errors || {}).flat();

                        throw new Error(
                            erros.join('\n') || resultado.message
                        );

                    }


                    throw new Error(
                        resultado.message || 'Erro HTTP ' + resposta.status
                    );

                }


                if (resultado.sucesso) {

                    alert('Evento cadastrado com sucesso!');

                    location.reload();

                } else {

                    throw new Error(
                        resultado.message || 'Não foi possível cadastrar o evento.'
                    );

                }

            } catch (erro) {

                console.error('Erro ao cadastrar evento:', erro);

                alert('Erro ao salvar evento:\n' + erro.message);

            }

        }


        /* ================= EXCLUSÃO DE ALUNO ================= */

        function abrirConfirmacaoExcluirAluno(id, nome) {

            const modal = document.getElementById('modalExcluirAluno');

            const form = document.getElementById('formExcluirAluno');

            const nomeElemento = document.getElementById('nomeAlunoExcluir');


            form.action = `/alunos/${id}`;

            nomeElemento.innerText = nome;

            modal.style.display = 'flex';

        }


        function fecharConfirmacaoExcluirAluno() {

            const modal = document.getElementById('modalExcluirAluno');

            modal.style.display = 'none';

            document.getElementById('formExcluirAluno').reset();

        }


        /* ================= MODAL DE AJUSTES ================= */

        function abrirModalAjustes(postagemId) {

            const modal = document.getElementById('modalAjustes');

            const form = document.getElementById('formAjustes');

            const textarea = document.getElementById('observacaoProfessor');


            form.action = `/professor/postagens/${postagemId}/ajustes`;

            textarea.value = '';

            modal.style.display = 'flex';


            setTimeout(() => {

                textarea.focus();

            }, 100);

        }


        function fecharModalAjustes() {

            const modal = document.getElementById('modalAjustes');

            modal.style.display = 'none';

        }


        window.addEventListener('click', function(event) {

            const modal = document.getElementById('modalAjustes');

            if (event.target === modal) {

                fecharModalAjustes();

            }

        });


        /* ================= INICIALIZAÇÃO ================= */

        document.addEventListener('DOMContentLoaded', function() {

            mostrarAlunos();

        });

    </script>

</body>

</html>
