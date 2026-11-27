<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8614a4">
    <meta name="description" content="Gerencie e celebre as conquistas dos clubistas da Beth Cientista.">
    <title>Menções Honrosas | Beth Cientista</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/beth-logo.jpeg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&family=Kavoon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- CSS compartilhados e estilos exclusivos da página --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mencoes-professor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body class="pagina-mencoes-professor">

    {{-- Navbar compartilhado utilizado na Área do Professor --}}
    @include('components.navbar-professor')

    <main class="mencoes-prof-page">
        <div class="mencoes-prof-grain" aria-hidden="true"></div>

        <div class="mencoes-prof-sparkles" aria-hidden="true">
            @for ($i = 1; $i <= 15; $i++)
                <span class="mencoes-prof-sparkle mencoes-prof-sparkle-{{ $i }}"></span>
            @endfor
        </div>

        <div class="mencoes-prof-container">
            <header class="mencoes-prof-heading">
                <span class="mencoes-prof-eyebrow">
                    <i class="bi bi-stars" aria-hidden="true"></i>
                    Orgulho Beth Cientista
                </span>

                <h1>Menções Honrosas</h1>
                <p>Celebrando as conquistas e realizações dos nossos clubistas!</p>
            </header>

            {{-- Ação para cadastrar uma nova menção --}}
            <section class="mencoes-prof-add-area">
                <button type="button" class="mencoes-prof-add-button" onclick="abrirFormularioMencao()">
                    <i class="bi bi-plus-circle-fill" aria-hidden="true"></i>
                    Adicionar Nova Menção
                </button>
            </section>

            {{-- Formulário de cadastro --}}
            <section
                class="mencoes-prof-form {{ session('sucesso') || $errors->any() ? 'aberto' : '' }}"
                id="formularioContainer"
                aria-labelledby="formularioTitulo"
            >
                <div class="mencoes-prof-form-heading">
                    <span class="mencoes-prof-form-icon" aria-hidden="true">
                        <i class="bi bi-award-fill"></i>
                    </span>
                    <div>
                        <span class="mencoes-prof-form-eyebrow">Reconheça uma conquista</span>
                        <h2 id="formularioTitulo">Adicionar Nova Menção</h2>
                    </div>
                </div>

                @if(session('sucesso'))
                    <div class="mencoes-prof-success" role="status">
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        {{ session('sucesso') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mencoes-prof-error" role="alert">
                        <strong>Não foi possível salvar a menção:</strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('mencao.store') }}" method="POST" id="formMencao">
                    @csrf

                    <div class="mencoes-prof-form-grid">
                        <div class="mencoes-prof-field mencoes-prof-field-full">
                            <label for="tituloMencao">Título da conquista</label>
                            <input
                                type="text"
                                name="titulo"
                                id="tituloMencao"
                                value="{{ old('titulo') }}"
                                placeholder="Ex.: Medalha de Ouro na Olimpíada"
                                required
                            >
                        </div>

                        <div class="mencoes-prof-field">
                            <label for="nomeAluno">Nome do Clubista</label>
                            <input
                                type="text"
                                name="autor"
                                id="nomeAluno"
                                value="{{ old('autor') }}"
                                placeholder="Digite o nome do aluno"
                                required
                            >
                        </div>

                        <div class="mencoes-prof-field">
                            <label for="dataMencao">Data de reconhecimento</label>
                            <input
                                type="date"
                                name="data_reconhecimento"
                                id="dataMencao"
                                value="{{ old('data_reconhecimento') }}"
                                required
                            >
                        </div>

                        <div class="mencoes-prof-field mencoes-prof-field-full">
                            <label for="iconeMencao">Tipo de conquista</label>
                            <select name="icone" id="iconeMencao">
                                <option value="bi-trophy-fill" {{ old('icone') == 'bi-trophy-fill' ? 'selected' : '' }}>Troféu</option>
                                <option value="bi-award-fill" {{ old('icone') == 'bi-award-fill' ? 'selected' : '' }}>Medalha / Prêmio</option>
                                <option value="bi-star-fill" {{ old('icone') == 'bi-star-fill' ? 'selected' : '' }}>Destaque</option>
                                <option value="bi-lightbulb-fill" {{ old('icone') == 'bi-lightbulb-fill' ? 'selected' : '' }}>Projeto Científico</option>
                                <option value="bi-person-fill-check" {{ old('icone') == 'bi-person-fill-check' ? 'selected' : '' }}>Reconhecimento</option>
                            </select>
                        </div>

                        <div class="mencoes-prof-field mencoes-prof-field-full">
                            <label for="descricaoMencao">Descrição</label>
                            <textarea
                                name="descricao"
                                id="descricaoMencao"
                                placeholder="Descreva a conquista do Clubista..."
                                required
                            >{{ old('descricao') }}</textarea>
                        </div>
                    </div>

                    <div class="mencoes-prof-form-actions">
                        <button type="button" class="mencoes-prof-cancel" onclick="fecharFormularioMencao()">
                            Cancelar
                        </button>
                        <button type="submit" class="mencoes-prof-save">
                            <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                            Salvar Menção
                        </button>
                    </div>
                </form>
            </section>

            {{-- Menções cadastradas no banco de dados --}}
            <section class="mencoes-prof-grid" id="listaMencoes" aria-label="Menções honrosas cadastradas">
                @forelse($mencoes as $mencao)
                    <article class="mencoes-prof-card">
                        <div class="mencoes-prof-card-content">
                            <div class="mencoes-prof-card-top">
                                <span class="mencoes-prof-card-icon" aria-hidden="true">
                                    <i class="bi {{ $mencao->icone ?? 'bi-trophy-fill' }}"></i>
                                </span>

                                <span class="mencoes-prof-date">
                                    {{ \Carbon\Carbon::parse($mencao->data_reconhecimento)->format('d/m/Y') }}
                                </span>
                            </div>

                            <h2>{{ $mencao->titulo }}</h2>
                            <p class="mencoes-prof-author">
                                <i class="bi bi-person-fill" aria-hidden="true"></i>
                                {{ $mencao->autor }}
                            </p>
                            <p class="mencoes-prof-description">{{ $mencao->descricao }}</p>
                        </div>

                        {{-- Ações exclusivas do professor --}}
                        <div class="mencoes-prof-actions">
                            <a href="{{ route('mencao.edit', $mencao->id) }}" class="mencoes-prof-edit">
                                <i class="bi bi-pencil-square" aria-hidden="true"></i>
                                Editar
                            </a>

                            <form
                                action="{{ route('mencao.destroy', $mencao->id) }}"
                                method="POST"
                                class="mencoes-prof-delete-form"
                                onsubmit="return confirm('Tem certeza que deseja excluir esta menção? Ela deixará de aparecer para os alunos.');"
                            >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mencoes-prof-delete">
                                    <i class="bi bi-trash-fill" aria-hidden="true"></i>
                                    Excluir
                                </button>
                            </form>
                        </div>

                        <span class="mencoes-prof-card-decoration" aria-hidden="true">
                            <i class="bi bi-stars"></i>
                        </span>
                    </article>
                @empty
                    <div class="mencoes-prof-empty">
                        <span class="mencoes-prof-empty-icon" aria-hidden="true">
                            <i class="bi bi-award"></i>
                        </span>
                        <h2>Nenhuma menção honrosa cadastrada ainda.</h2>
                        <p>Adicione uma conquista para celebrar o esforço dos nossos clubistas!</p>
                    </div>
                @endforelse
            </section>

            <section class="mencoes-prof-congratulations" aria-labelledby="mencoesProfParabensTitulo">
                <span class="mencoes-prof-congratulations-detail" aria-hidden="true">
                    <i class="bi bi-stars"></i>
                </span>

                <div class="mencoes-prof-congratulations-icon" aria-hidden="true">
                    <i class="bi bi-trophy-fill"></i>
                </div>

                <h2 id="mencoesProfParabensTitulo">Continue Brilhando!</h2>
                <p>
                    Cada conquista é resultado de dedicação, curiosidade e paixão pela ciência.
                    <strong>Parabéns a todos os clubistas!</strong>
                </p>
            </section>
        </div>
    </main>

    @include('components.footer')

    <script>
        function abrirFormularioMencao() {
            const formulario = document.getElementById('formularioContainer');

            if (!formulario) return;

            formulario.classList.add('aberto');
            formulario.scrollIntoView({ behavior: 'smooth', block: 'start' });

            const primeiroCampo = document.getElementById('tituloMencao');
            if (primeiroCampo) {
                window.setTimeout(() => primeiroCampo.focus(), 350);
            }
        }

        function fecharFormularioMencao() {
            const formulario = document.getElementById('formularioContainer');
            const form = document.getElementById('formMencao');

            if (!formulario || !form) return;

            formulario.classList.remove('aberto');
            form.reset();
        }
    </script>
</body>
</html>
