<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8614a4">
    <meta name="description" content="Conheça e celebre as conquistas dos clubistas da Beth Cientista.">
    <title>Menções Honrosas | Beth Cientista</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/beth-logo.jpeg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&family=Kavoon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- CSS compartilhados e estilos exclusivos da página --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mencoes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body class="pagina-mencoes">

    @include('components.navbar-aluno')

    <main class="mencoes-page">
        <div class="mencoes-grain" aria-hidden="true"></div>

        <div class="mencoes-sparkles" aria-hidden="true">
            @for ($i = 1; $i <= 15; $i++)
                <span class="mencoes-sparkle mencoes-sparkle-{{ $i }}"></span>
            @endfor
        </div>

        <div class="mencoes-container">
            <header class="mencoes-heading">
                <span class="mencoes-eyebrow">
                    <i class="bi bi-stars" aria-hidden="true"></i>
                    Orgulho Beth Cientista
                </span>

                <h1>Menções Honrosas</h1>
                <p>Celebrando as conquistas e realizações dos nossos clubistas!</p>
            </header>

            <section class="mencoes-grid" id="listaMencoes" aria-label="Conquistas dos clubistas">
                @forelse($postagens as $postagem)
                    <article class="mencao-card">
                        <div class="mencao-card-conteudo">
                            <div class="mencao-card-topo">
                                <span class="mencao-icone" aria-hidden="true">
                                    <i class="bi bi-trophy-fill"></i>
                                </span>

                                <span class="mencao-data">
                                    {{ $postagem->created_at ? $postagem->created_at->format('d/m/Y') : 'Data não informada' }}
                                </span>
                            </div>

                            <h2>{{ $postagem->titulo }}</h2>

                            @if (!empty($postagem->descricao))
                                <p class="mencao-categoria">
                                    <i class="bi bi-tag-fill" aria-hidden="true"></i>
                                    {{ $postagem->descricao }}
                                </p>
                            @endif

                            <p class="mencao-resumo">{{ \Illuminate\Support\Str::limit($postagem->comentario, 150, '...') }}</p>
                        </div>

                        <a href="{{ route('mencao.show', $postagem->id) }}" class="mencao-ler-mais">
                            Ler mais
                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </a>

                        <span class="mencao-card-brilho" aria-hidden="true">
                            <i class="bi bi-stars"></i>
                        </span>
                    </article>
                @empty
                    <div class="mencoes-vazio">
                        <span class="mencoes-vazio-icone" aria-hidden="true">
                            <i class="bi bi-award"></i>
                        </span>
                        <h2>Nenhuma menção honrosa cadastrada no momento.</h2>
                        <p>Em breve, novas conquistas dos nossos clubistas estarão por aqui!</p>
                    </div>
                @endforelse
            </section>

            <section class="mencoes-parabens" aria-labelledby="mencoes-parabens-titulo">
                <div class="mencoes-parabens-icone" aria-hidden="true">
                    <i class="bi bi-trophy-fill"></i>
                </div>

                <span class="mencoes-parabens-detalhe" aria-hidden="true">
                    <i class="bi bi-stars"></i>
                </span>

                <h2 id="mencoes-parabens-titulo">Continue Brilhando!</h2>
                <p>
                    Cada conquista é resultado de dedicação, curiosidade e paixão pela ciência.
                    <strong>Parabéns a todos os clubistas!</strong>
                </p>
            </section>
        </div>
    </main>

    @include('components.footer')

</body>
</html>
