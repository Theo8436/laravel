{{-- resources/views/biblioteca.blade.php --}}
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

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Font Awesome: ícones do navbar e footer compartilhados --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- CSS compartilhados e CSS específico da Biblioteca --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/biblioteca.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>

    @include('components.navbar-aluno')

    <main class="bc-library">
        <div class="bc-container">

            <section class="bc-heading">
                <h1 class="bc-title">Biblioteca Beth Cientista</h1>
                <p class="bc-subtitle">Acervo de livros científicos para clubistas!</p>

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

            <section class="bc-donation">
                <div class="bc-donation-content">
                    <div class="bc-heart"><i class="bi bi-heart-fill" aria-hidden="true"></i></div>
                    <div>
                        <h2>Doe um Livro!</h2>
                        <p>Ajude a expandir nossa biblioteca científica!</p>
                    </div>
                </div>
                <a href="{{ route('doacao') }}" class="bc-donate-btn">Quero Doar</a>
            </section>

            <section class="bc-books" id="bcListaLivros" aria-label="Acervo de livros">
                @forelse($livros as $livro)
                    @php
                        $status = strtolower($livro->status ?? '');
                        $disponivel = $status === 'livre';
                        $buscaLivro = strtolower(($livro->titulo ?? '') . ' ' . ($livro->autor ?? '') . ' ' . ($livro->categoria ?? '') . ' ' . $status);
                    @endphp

                    <article class="bc-book-card" data-busca="{{ $buscaLivro }}">
                        <div class="bc-book-cover">
                            <i class="bi bi-book-half" aria-hidden="true"></i>
                        </div>

                        <div class="bc-book-info">
                            <div class="bc-book-top">
                                <span class="bc-tag">{{ $livro->categoria }}</span>
                                <span class="bc-tag {{ $disponivel ? 'bc-status' : 'bc-status-off' }}">
                                    @if($status === 'livre')
                                        Disponível
                                    @elseif($status === 'emprestado')
                                        Emprestado
                                    @elseif($status === 'reservado')
                                        Reservado
                                    @else
                                        {{ ucfirst($livro->status) }}
                                    @endif
                                </span>
                            </div>

                            <h2 class="bc-book-title">{{ $livro->titulo }}</h2>
                            <p class="bc-book-author">
                                <i class="bi bi-person-fill" aria-hidden="true"></i>{{ $livro->autor }}
                            </p>

                            <div class="bc-book-actions">
                                <p class="bc-copies">Acervo científico</p>

                                @if($disponivel)
    <form action="{{ route('emprestimo.solicitar', $livro->id) }}"
          method="POST">
        @csrf

        <button
            type="submit"
            class="bc-loan-btn"
        >
            <i class="bi bi-bookmark-check" aria-hidden="true"></i>
            Emprestar
        </button>
    </form>
@else
    <button
        type="button"
        class="bc-loan-btn"
        disabled
        title="Livro indisponível"
    >
        <i class="bi bi-clock" aria-hidden="true"></i>
        {{ $status === 'emprestado' ? 'Emprestado' : 'Aguardando' }}
    </button>
@endif

                            </div>
                        </div>
                    </article>
                @empty
                    <div class="bc-empty">
                        <i class="bi bi-book" aria-hidden="true"></i>
                        <h3>Nenhum livro encontrado.</h3>
                        <p>O acervo científico está sendo atualizado pelos professores.</p>
                    </div>
                @endforelse

                <div class="bc-empty" id="bcSemResultado" style="display:none;">
                    <i class="bi bi-search" aria-hidden="true"></i>
                    <h3>Oops! Nenhum livro encontrado.</h3>
                    <p>Tente buscar por outro termo!</p>
                </div>
            </section>
        </div>
    </main>

    <div id="bcToast" class="bc-toast" role="status" aria-live="polite"></div>

    @include('components.footer')

    <script>
        (() => {
            const campo = document.getElementById('bcBusca');
            const cards = Array.from(document.querySelectorAll('.bc-book-card'));
            const vazio = document.getElementById('bcSemResultado');
            let toastTimer;

            campo?.addEventListener('input', () => {
                const termo = campo.value.trim().toLocaleLowerCase('pt-BR');
                let encontrados = 0;

                cards.forEach((card) => {
                    const texto = (card.dataset.busca || '').toLocaleLowerCase('pt-BR');
                    const mostrar = texto.includes(termo);
                    card.style.display = mostrar ? '' : 'none';
                    if (mostrar) encontrados++;
                });

                if (vazio) vazio.style.display = cards.length > 0 && encontrados === 0 ? 'block' : 'none';
            });

            window.bcMensagem = (texto) => {
                const toast = document.getElementById('bcToast');
                if (!toast) return;
                toast.textContent = texto;
                toast.classList.add('show');
                clearTimeout(toastTimer);
                toastTimer = setTimeout(() => toast.classList.remove('show'), 3500);
            };
        })();
    </script>
</body>
</html>
