
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Biblioteca | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/biblioteca-professor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>

    {{-- NAVBAR DA ÁREA DO PROFESSOR --}}
    @include('components.navbar-professor')

    <main class="bc-library">

        <div class="bc-noise"></div>

        <div class="bc-sparkles" aria-hidden="true">
            <span style="--i:1; top:12%; left:8%;"></span>
            <span style="--i:2; top:22%; left:88%;"></span>
            <span style="--i:3; top:48%; left:15%;"></span>
            <span style="--i:4; top:67%; left:92%;"></span>
            <span style="--i:5; top:82%; left:30%;"></span>
            <span style="--i:6; top:35%; left:72%;"></span>
            <span style="--i:7; top:90%; left:75%;"></span>
            <span style="--i:8; top:15%; left:52%;"></span>
        </div>

        <div class="bc-container">

            {{-- CABEÇALHO --}}
            <section class="bc-heading">

                <p class="bc-eyebrow">
                    <i class="bi bi-stars"></i>
                </p>

                <h1 class="bc-title">Biblioteca Beth Cientista</h1>

                <p class="bc-subtitle">
                    Gerencie o acervo científico e incentive a leitura dos clubistas!
                </p>

                {{-- PESQUISA --}}
                <div class="bc-search-wrap">
                    <label class="bc-search" for="bcBusca">
                        <i class="bi bi-search" aria-hidden="true"></i>

                        <input
                            type="search"
                            id="bcBusca"
                            placeholder="Buscar livros por título, autor ou categoria..."
                            autocomplete="off"
                        >
                    </label>
                </div>

            </section>

            {{-- MENSAGENS DO LARAVEL --}}
            @if(session('sucesso'))
                <div class="bc-alert bc-alert-success">
                    <i class="bi bi-check-circle-fill"></i>
                    {{ session('sucesso') }}
                </div>
            @endif

            @if(session('erro'))
                <div class="bc-alert bc-alert-error">
                    <i class="bi bi-exclamation-circle-fill"></i>
                    {{ session('erro') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bc-alert bc-alert-error">
                    <i class="bi bi-exclamation-circle-fill"></i>
                    <div>
                        @foreach($errors->all() as $erro)
                            <p>{{ $erro }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- PAINEL DE GERENCIAMENTO --}}
            <section class="bc-management">

                <div class="bc-management-content">

                    <div class="bc-management-icon">
                        <i class="bi bi-book-half"></i>
                    </div>

                    <div>
                        <h2>Gerenciamento da Biblioteca</h2>
                        <p>
                            Cadastre novos livros, atualize o acervo e acompanhe
                            as solicitações de empréstimo dos alunos.
                        </p>
                    </div>

                </div>

                <div class="bc-management-actions">

                    <button
                        type="button"
                        class="bc-action-btn bc-add-btn"
                        onclick="abrirFormulario()"
                    >
                        <i class="bi bi-plus-circle"></i>
                        Cadastrar livro
                    </button>

                    <button
                        type="button"
                        class="bc-action-btn bc-requests-btn"
                        onclick="abrirSolicitacoes()"
                    >
                        <i class="bi bi-person-lines-fill"></i>
                        Solicitações
                        @if(isset($solicitacoes) && $solicitacoes->count() > 0)
                            <span class="bc-request-count">{{ $solicitacoes->count() }}</span>
                        @endif
                    </button>

                </div>

            </section>

            {{-- TÍTULO DO ACERVO --}}
            <div class="bc-acervo-heading">
                <div>
                    <h2>
                        <i class="bi bi-collection-fill"></i>
                        Acervo de livros
                    </h2>
                    <span>Livros cadastrados na plataforma</span>
                </div>

                <span class="bc-total">
                    {{ $livros->count() }} {{ $livros->count() === 1 ? 'livro' : 'livros' }}
                </span>
            </div>

            {{-- LISTA DE LIVROS --}}
            <section class="bc-books" id="bcListaLivros">

                @forelse($livros as $livro)

                    @php
                        $status = strtolower($livro->status ?? '');
                        $buscaLivro = strtolower(
                            ($livro->titulo ?? '') . ' ' .
                            ($livro->autor ?? '') . ' ' .
                            ($livro->categoria ?? '') . ' ' .
                            $status
                        );
                    @endphp

                    <article
                        class="bc-book-card"
                        data-busca="{{ $buscaLivro }}"
                        data-livro="{{ json_encode($livro) }}"
                    >

                        <div class="bc-book-cover">

                            <div class="bc-cover-dots"></div>

                            <span class="bc-cover-decoration">✦</span>

                            <i class="bi bi-book-half" aria-hidden="true"></i>

                            <span class="bc-cover-label">Beth Cientista</span>

                        </div>

                        <div class="bc-book-info">

                            <div class="bc-book-top">

                                <span class="bc-tag bc-category">
                                    {{ $livro->categoria }}
                                </span>

                                @if($status === 'livre')
                                    <span class="bc-tag bc-status">Livre</span>
                                @elseif($status === 'emprestado')
                                    <span class="bc-tag bc-status-off">Emprestado</span>
                                @elseif($status === 'reservado')
                                    <span class="bc-tag bc-status-reserved">Reservado</span>
                                @else
                                    <span class="bc-tag bc-status-other">
                                        {{ ucfirst($livro->status) }}
                                    </span>
                                @endif

                            </div>

                            <h3 class="bc-book-title">{{ $livro->titulo }}</h3>

                            <p class="bc-book-author">
                                <i class="bi bi-person-fill"></i>
                                {{ $livro->autor }}
                            </p>

                            <div class="bc-book-actions">

                                <button
                                    type="button"
                                    class="bc-edit-btn"
                                    onclick="abrirEdicao(JSON.parse(this.closest('.bc-book-card').dataset.livro))"
                                >
                                    <i class="bi bi-pencil-fill"></i>
                                    Editar
                                </button>

                                <button
                                    type="button"
                                    class="bc-delete-btn"
                                    data-id="{{ $livro->id }}"
                                    data-titulo="{{ $livro->titulo }}"
                                    onclick="abrirConfirmacaoExcluir(this.dataset.id, this.dataset.titulo)"
                                >
                                    <i class="bi bi-trash-fill"></i>
                                    Excluir
                                </button>

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="bc-empty">
                        <i class="bi bi-book-half"></i>
                        <h3>Nenhum livro cadastrado ainda!</h3>
                        <p>
                            Seu acervo está esperando os primeiros livros.
                            Clique em “Cadastrar livro” para começar.
                        </p>
                    </div>

                @endforelse

                <div class="bc-empty" id="bcSemResultado" hidden>
                    <i class="bi bi-search"></i>
                    <h3>Nenhum livro encontrado.</h3>
                    <p>Tente pesquisar usando outro título, autor ou categoria.</p>
                    <button type="button" class="bc-clear-search" onclick="limparPesquisa()">
                        Limpar pesquisa
                    </button>
                </div>

            </section>

        </div>
    </main>

    {{-- TOAST --}}
    <div id="bcToast" class="bc-toast" role="status" aria-live="polite"></div>

    {{-- FOOTER COMPARTILHADO --}}
    @include('components.footer')


    {{-- ==========================================
         MODAL CADASTRAR LIVRO
    ========================================== --}}
    <div class="bc-modal" id="modalCadastro">

        <div class="bc-modal-content">

            <div class="bc-modal-heading">
                <div class="bc-modal-icon">
                    <i class="bi bi-book-half"></i>
                </div>

                <h2>Cadastrar livro</h2>
                <p>Adicione uma nova obra ao acervo científico.</p>

                <button type="button" class="bc-modal-close" onclick="fecharFormulario()">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <form id="formLivro" action="{{ route('livros.store') }}" method="POST">
                @csrf

                <div class="bc-field">
                    <label for="tituloLivro">Título do livro</label>
                    <input
                        type="text"
                        id="tituloLivro"
                        name="titulo"
                        placeholder="Digite o título do livro"
                        required
                    >
                </div>

                <div class="bc-field">
                    <label for="autorLivro">Autor</label>
                    <input
                        type="text"
                        id="autorLivro"
                        name="autor"
                        placeholder="Digite o nome do autor"
                        required
                    >
                </div>

                <div class="bc-field">
                    <label for="categoriaLivro">Categoria</label>
                    <select id="categoriaLivro" name="categoria" required>
                        <option value="">Selecione uma categoria</option>
                        <option value="Astronomia">Astronomia</option>
                        <option value="Biologia">Biologia</option>
                        <option value="Física">Física</option>
                        <option value="Química">Química</option>
                        <option value="Ciências">Ciências</option>
                    </select>
                </div>

                <div class="bc-field">
                    <label for="statusLivro">Disponibilidade</label>
                    <select id="statusLivro" name="status" required>
                        <option value="livre">Livre</option>
                        <option value="emprestado">Emprestado</option>
                        <option value="reservado">Reservado</option>
                    </select>
                </div>

                <div class="bc-modal-buttons">
                    <button type="button" class="bc-cancel-btn" onclick="fecharFormulario()">
                        Cancelar
                    </button>

                    <button type="submit" class="bc-save-btn">
                        <i class="bi bi-check-lg"></i>
                        Cadastrar livro
                    </button>
                </div>

            </form>

        </div>
    </div>

    <div class="bc-modal" id="modalEdicao">

        <div class="bc-modal-content">

            <div class="bc-modal-heading">
                <div class="bc-modal-icon bc-edit-icon">
                    <i class="bi bi-pencil-fill"></i>
                </div>

                <h2>Editar livro</h2>
                <p>Atualize as informações desta obra.</p>

                <button type="button" class="bc-modal-close" onclick="fecharEdicao()">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <form id="formEdicao" action="" method="POST">
                @csrf
                @method('PUT')

                <div class="bc-field">
                    <label for="editTituloLivro">Título do livro</label>
                    <input type="text" id="editTituloLivro" name="titulo" required>
                </div>

                <div class="bc-field">
                    <label for="editAutorLivro">Autor</label>
                    <input type="text" id="editAutorLivro" name="autor" required>
                </div>

                <div class="bc-field">
                    <label for="editCategoriaLivro">Categoria</label>
                    <select id="editCategoriaLivro" name="categoria" required>
                        <option value="Astronomia">Astronomia</option>
                        <option value="Biologia">Biologia</option>
                        <option value="Física">Física</option>
                        <option value="Química">Química</option>
                        <option value="Ciências">Ciências</option>
                    </select>
                </div>

                <div class="bc-field">
                    <label for="editStatusLivro">Disponibilidade</label>
                    <select id="editStatusLivro" name="status" required>
                        <option value="livre">Livre</option>
                        <option value="emprestado">Emprestado</option>
                        <option value="reservado">Reservado</option>
                    </select>
                </div>

                <div class="bc-modal-buttons">
                    <button type="button" class="bc-cancel-btn" onclick="fecharEdicao()">
                        Cancelar
                    </button>

                    <button type="submit" class="bc-save-btn">
                        <i class="bi bi-check-lg"></i>
                        Salvar alterações
                    </button>
                </div>

            </form>

        </div>
    </div>

    <div class="bc-modal" id="modalExcluir">

        <div class="bc-modal-content bc-confirm-content">

            <div class="bc-confirm-icon">
                <i class="bi bi-exclamation-triangle-fill"></i>
            </div>

            <h2>Excluir livro?</h2>

            <p>
                Tem certeza que deseja excluir
                <strong id="nomeLivroExcluir"></strong>?
                Esta ação não poderá ser desfeita.
            </p>

            <form id="formExcluir" action="" method="POST">
                @csrf
                @method('DELETE')

                <div class="bc-modal-buttons">
                    <button
                        type="button"
                        class="bc-cancel-btn"
                        onclick="fecharConfirmacaoExcluir()"
                    >
                        Cancelar
                    </button>

                    <button type="submit" class="bc-delete-confirm-btn">
                        <i class="bi bi-trash-fill"></i>
                        Sim, excluir
                    </button>
                </div>
            </form>

        </div>
    </div>

    <div class="bc-modal" id="modalSolicitacoes">

        <div class="bc-modal-content bc-requests-content">

            <div class="bc-modal-heading">
                <div class="bc-modal-icon bc-requests-icon">
                    <i class="bi bi-person-lines-fill"></i>
                </div>

                <h2>Solicitações de empréstimo</h2>
                <p>Acompanhe os pedidos enviados pelos alunos.</p>

                <button type="button" class="bc-modal-close" onclick="fecharSolicitacoes()">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            @if($solicitacoes->count() > 0)

                <div class="bc-request-list">

                    @foreach($solicitacoes as $solicitacao)

                        <article class="bc-request-card">

                            <div class="bc-request-information">

                                <div class="bc-request-item">
                                    <span>ALUNO</span>
                                    <strong>{{ $solicitacao->nome_aluno }}</strong>
                                </div>

                                <div class="bc-request-item">
                                    <span>E-MAIL</span>
                                    <p>{{ $solicitacao->email_aluno }}</p>
                                </div>

                                <div class="bc-request-item">
                                    <span>LIVRO SOLICITADO</span>
                                    <strong class="bc-request-book">
                                        {{ $solicitacao->titulo_livro }}
                                    </strong>
                                </div>

                            </div>

                            <form
                                action="{{ route('emprestimo.aprovar', $solicitacao->id) }}"
                                method="POST"
                                class="bc-approve-form"
                            >
                                @csrf

                                <button type="submit" class="bc-approve-btn">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Aprovar solicitação
                                </button>
                            </form>

                        </article>

                    @endforeach

                </div>

            @else

                <div class="bc-no-requests">
                    <i class="bi bi-inbox"></i>
                    <h3>Nenhuma solicitação por enquanto</h3>
                    <p>
                        Quando um aluno solicitar um livro,
                        o pedido aparecerá nesta área.
                    </p>
                </div>

            @endif

            <div class="bc-modal-buttons bc-requests-footer">
                <button type="button" class="bc-cancel-btn" onclick="fecharSolicitacoes()">
                    Fechar
                </button>
            </div>

        </div>
    </div>

    <script>
        function abrirFormulario() {
            document.getElementById('modalCadastro').classList.add('ativo');
        }

        function fecharFormulario() {
            document.getElementById('modalCadastro').classList.remove('ativo');
        }

        function abrirEdicao(livro) {
            const formulario = document.getElementById('formEdicao');

            formulario.action = `/professor/biblioteca/atualizar/${livro.id}`;

            document.getElementById('editTituloLivro').value = livro.titulo || '';
            document.getElementById('editAutorLivro').value = livro.autor || '';
            document.getElementById('editCategoriaLivro').value = livro.categoria || '';
            document.getElementById('editStatusLivro').value = livro.status || 'livre';

            document.getElementById('modalEdicao').classList.add('ativo');
        }

        function fecharEdicao() {
            document.getElementById('modalEdicao').classList.remove('ativo');
        }

        function abrirConfirmacaoExcluir(id, titulo) {
            document.getElementById('formExcluir').action =
                `/professor/biblioteca/excluir/${id}`;

            document.getElementById('nomeLivroExcluir').textContent = titulo;

            document.getElementById('modalExcluir').classList.add('ativo');
        }

        function fecharConfirmacaoExcluir() {
            document.getElementById('modalExcluir').classList.remove('ativo');
        }

        function abrirSolicitacoes() {
            document.getElementById('modalSolicitacoes').classList.add('ativo');
        }

        function fecharSolicitacoes() {
            document.getElementById('modalSolicitacoes').classList.remove('ativo');
        }

        const campoBusca = document.getElementById('bcBusca');
        const cardsLivros = Array.from(document.querySelectorAll('.bc-book-card'));
        const mensagemSemResultado = document.getElementById('bcSemResultado');

        function pesquisarLivros() {
            const termo = campoBusca.value.trim().toLocaleLowerCase('pt-BR');
            let encontrados = 0;

            cardsLivros.forEach(card => {
                const texto = (card.dataset.busca || '').toLocaleLowerCase('pt-BR');
                const mostrar = texto.includes(termo);

                card.hidden = !mostrar;

                if (mostrar) encontrados++;
            });

            if (mensagemSemResultado) {
                mensagemSemResultado.hidden =
                    cardsLivros.length > 0 && encontrados === 0;
            }
        }

        campoBusca?.addEventListener('input', pesquisarLivros);

        function limparPesquisa() {
            campoBusca.value = '';
            pesquisarLivros();
            campoBusca.focus();
        }

        document.querySelectorAll('.bc-modal').forEach(modal => {
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.classList.remove('ativo');
                }
            });
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.bc-modal.ativo').forEach(modal => {
                    modal.classList.remove('ativo');
                });
            }
        });

        let toastTimer;

        window.bcMensagem = function(texto) {
            const toast = document.getElementById('bcToast');
            if (!toast) return;

            toast.textContent = texto;
            toast.classList.add('show');

            clearTimeout(toastTimer);

            toastTimer = setTimeout(() => {
                toast.classList.remove('show');
            }, 3500);
        };
    </script>

</body>
</html>
