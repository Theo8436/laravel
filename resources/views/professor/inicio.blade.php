<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beth Cientista - Área do Professor</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/beth-logo.jpeg') }}">

    {{-- CSS da página --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">

    {{-- Ícones --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    {{-- =========================================================
        HEADER DO PROFESSOR
    ========================================================== --}}
    <header class="site-header">
        <div class="header-noise"></div>
        <div class="header-container">

            {{-- Logo --}}
            <a href="{{ route('professor.inicio') }}" class="brand">
                <div class="brand-logo">
                    <img src="{{ asset('images/beth-logo.jpeg') }}" alt="Beth Cientista">
                </div>
                <div class="brand-text">
                    <h1>Beth Cientista</h1>
                    <span>Painel do Professor</span>
                </div>
            </a>

            {{-- Navegação da Área do Professor --}}
            <nav class="main-nav">
                <a href="{{ route('professor.inicio') }}" class="nav-link active">Início</a>
                <span class="nav-divider"></span>
                <a href="{{ route('professor.sobre') }}" class="nav-link">Sobre Nós</a>
                <span class="nav-divider"></span>
                <a href="{{ route('professor.galeria') }}" class="nav-link">Galeria</a>
                <span class="nav-divider"></span>
                <a href="{{ route('professor.biblioteca') }}" class="nav-link">Biblioteca</a>
            </nav>

        </div>
    </header>

    {{-- =========================================================
        CONTEÚDO PRINCIPAL
    ========================================================== --}}
    <main class="home-page">

        {{-- Elementos decorativos --}}
        <div class="background-decoration decoration-one"></div>
        <div class="background-decoration decoration-two"></div>
        <div class="background-decoration decoration-three"></div>

        <div class="blob blob-purple">
            <svg viewBox="0 0 200 200">
                <path fill="#bc10c0" d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-45.8C87.4,-32.6,90,-16.3,88.5,-0.9C87,14.6,81.4,29.2,73.1,42.8C64.8,56.4,53.8,69,40.1,76.7C26.4,84.4,13.2,87.2,-0.5,88.1C-14.2,89,-28.4,88,-41.2,81.4C-54,74.8,-65.4,62.6,-73.3,48.4C-81.2,34.2,-85.6,17.1,-85.8,-0.1C-86,-17.3,-82,-34.6,-74.1,-49C-66.2,-63.4,-54.4,-74.9,-40.6,-82.3C-26.8,-89.7,-11.4,-93,2.8,-97.5C17,-102,34,-107.6,44.7,-76.4Z" transform="translate(100 100)" />
            </svg>
        </div>

        <div class="blob blob-orange">
            <svg viewBox="0 0 200 200">
                <path fill="#F97316" d="M39.5,-65.3C51.4,-58.5,61.3,-47.7,67.8,-35.2C74.3,-22.7,77.4,-8.5,76.8,5.6C76.2,19.7,71.9,33.7,64.3,46.3C56.7,58.9,45.8,70.1,33,76C20.2,81.9,5.5,82.5,-9.1,78.8C-23.7,75.1,-38.2,67.1,-49.9,56.3C-61.6,45.5,-70.5,31.9,-74.8,16.8C-79.1,1.7,-78.8,-14.9,-73.6,-29.7C-68.4,-44.5,-58.3,-57.5,-45.8,-64C-33.3,-70.5,-19.4,-70.5,-5.7,-69.8C8,-69.1,27.6,-72.1,39.5,-65.3Z" transform="translate(100 100)" />
            </svg>
        </div>

        {{-- HERO --}}
        <section class="hero-section">
            <div class="hero-container">
                <div class="hero-content">
                    <h2 class="hero-title">Acompanhe seus Alunos!</h2>
                    <p class="hero-subtitle">Confira e valide as publicações científicas feitas pela turma</p>
                    <div class="search-wrapper">
                        <div class="search-box">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" id="searchInput" placeholder="Buscar trabalhos de alunos..." autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="hero-mascot">
                    <div class="mascot-star"><i class="fa-solid fa-star"></i></div>
                    <div class="mascot-microscope"><i class="fa-solid fa-microscope"></i></div>
                    <div class="mascot-glow mascot-glow-one"></div>
                    <div class="mascot-glow mascot-glow-two"></div>
                    <img src="{{ asset('images/beth-mascote.png') }}" alt="Beth Cientista">
                </div>
            </div>
        </section>

        {{-- CATEGORIAS --}}
        <section class="categories-section">
            <div class="content-container">
                <h3 class="section-title"><span>Categorias dos Trabalhos</span></h3>
                <div class="categories-grid">
                    <button class="category-card category-all active" data-category="Todos">
                        <div class="category-card-background"></div>
                        <div class="category-content">
                            <i class="fa-solid fa-lightbulb"></i>
                            <h4>Todos</h4>
                        </div>
                    </button>

                    <button class="category-card category-stars" data-category="Beth nas Estrelas">
                        <div class="category-card-background"></div>
                        <div class="category-content">
                            <i class="fa-solid fa-star"></i>
                            <h4>Beth nas Estrelas</h4>
                        </div>
                    </button>

                    <button class="category-card category-anatomy" data-category="Beth Anatomy">
                        <div class="category-card-background"></div>
                        <div class="category-content">
                            <i class="fa-solid fa-microscope"></i>
                            <h4>Beth Anatomy</h4>
                        </div>
                    </button>

                    <button class="category-card category-indica" data-category="Beth Indica">
                        <div class="category-card-background"></div>
                        <div class="category-content">
                            <i class="fa-solid fa-book"></i>
                            <h4>Beth Indica</h4>
                        </div>
                    </button>
                </div>
            </div>
        </section>

        {{-- ORDENAR --}}
        <section class="sort-section">
            <div class="sort-box">
                <i class="fa-regular fa-calendar"></i>
                <span>Ordenar por:</span>
                <div class="sort-buttons">
                    <button class="sort-button active" data-sort="recent">Mais Recentes</button>
                    <button class="sort-button" data-sort="oldest">Mais Antigas</button>
                </div>
            </div>
        </section>

        {{-- CONTEÚDOS DOS ALUNOS (DINÂMICO) --}}
        <section class="posts-section">
            <div class="content-container">
                <h3 class="posts-title" id="postsTitle">Publicações dos Alunos</h3>

                <div class="posts-grid" id="postsGrid">
                    @forelse($publicacoes as $post)
                        @php
                            $catClass = 'stars';
                            $catIcon = 'fa-star';
                            $btnClass = 'stars-button';
                            $bgClass = 'stars-bg';

                            if ($post->categoria == 'Beth Anatomy') {
                                $catClass = 'anatomy';
                                $catIcon = 'fa-microscope';
                                $btnClass = 'anatomy-button';
                                $bgClass = 'anatomy-bg';
                            } elseif ($post->categoria == 'Beth Indica') {
                                $catClass = 'indica';
                                $catIcon = 'fa-book';
                                $btnClass = 'indica-button';
                                $bgClass = 'indica-bg';
                            }

                            $imagensDecodificadas = json_decode($post->imagem, true);
                            $caminhoImagem = is_array($imagensDecodificadas) && count($imagensDecodificadas) > 0 
                                ? $imagensDecodificadas[0] 
                                : $post->imagem;

                            if (filter_var($caminhoImagem, FILTER_VALIDATE_URL)) {
                                $urlFinalImagem = $caminhoImagem;
                            } elseif ($caminhoImagem) {
                                $urlFinalImagem = asset('storage/' . $caminhoImagem);
                            } else {
                                $urlFinalImagem = asset('images/default.png');
                            }
                        @endphp

                        <article class="post-card" data-category="{{ $post->categoria }}" data-date="{{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}">
                            <div class="post-image-wrapper">
                                <div class="post-category-icon {{ $catClass }}">
                                    <i class="fa-solid {{ $catIcon }}"></i>
                                </div>
                                <img src="{{ $urlFinalImagem }}" alt="{{ $post->titulo }}">
                                <div class="image-overlay"></div>
                            </div>

                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="post-category {{ $bgClass }}">{{ $post->categoria }}</span>
                                    <span class="post-date">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</span>
                                </div>

                                <h4>{{ $post->titulo }}</h4>
                                <p>{{ Str::limit($post->comentario ?? $post->descricao ?? $post->conteudo, 120) }}</p>

                                <div class="post-footer">
                                    <span>Aluno: {{ $post->user->nome ?? $post->aluno->nome ?? $post->autor ?? 'Aluno' }}</span>
                                    <a href="{{ route('aluno.showPostagem', $post->id) }}" class="read-more {{ $btnClass }}">
                                        Ler mais
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="no-results" style="grid-column: 1 / -1; text-align: center;">
                            <h4>Nenhum aluno publicou conteúdos ainda.</h4>
                        </div>
                    @endforelse
                </div>

                {{-- Nenhum resultado (Filtro JS) --}}
                <div class="no-results" id="noResults" style="display: none;">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <h4>Oops! Nenhum conteúdo encontrado.</h4>
                    <p>Tente buscar por outro termo!</p>
                </div>
            </div>
        </section>

    </main>

    {{-- FOOTER --}}
    <footer class="site-footer">
        <div class="footer-decoration"></div>
        <div class="footer-container">
            <div class="footer-message">
                <i class="fa-solid fa-heart"></i>
                <p>Painel do Professor - Beth Cientista</p>
                <i class="fa-solid fa-heart"></i>
            </div>
            <a href="https://www.instagram.com/bethacientista/" target="_blank" rel="noopener noreferrer" class="instagram-button">
                <i class="fa-brands fa-instagram"></i>
                <span>@bethacientista</span>
                <i class="fa-solid fa-sparkles"></i>
            </a>
            <p class="footer-copy">Beth Cientista - 2026</p>
        </div>
    </footer>

    {{-- JAVASCRIPT DE FILTROS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const postsGrid = document.getElementById('postsGrid');
            const posts = Array.from(postsGrid.querySelectorAll('.post-card'));
            const categoryButtons = document.querySelectorAll('.category-card');
            const sortButtons = document.querySelectorAll('.sort-button');
            const postsTitle = document.getElementById('postsTitle');
            const noResults = document.getElementById('noResults');

            let selectedCategory = 'Todos';
            let selectedSort = 'recent';

            function filterPosts() {
                const search = searchInput ? searchInput.value.toLowerCase().trim() : '';

                let visiblePosts = posts.filter(function (post) {
                    const category = post.dataset.category;
                    const title = post.querySelector('h4') ? post.querySelector('h4').textContent.toLowerCase() : '';
                    const description = post.querySelector('p') ? post.querySelector('p').textContent.toLowerCase() : '';

                    const categoryMatch = selectedCategory === 'Todos' || category === selectedCategory;
                    const searchMatch = title.includes(search) || description.includes(search);

                    return categoryMatch && searchMatch;
                });

                visiblePosts.sort(function (a, b) {
                    const dateA = new Date(a.dataset.date);
                    const dateB = new Date(b.dataset.date);
                    return selectedSort === 'recent' ? dateB - dateA : dateA - dateB;
                });

                posts.forEach(function (post) { post.style.display = 'none'; });

                visiblePosts.forEach(function (post) {
                    post.style.display = '';
                    postsGrid.appendChild(post);
                });

                if (postsTitle) {
                    postsTitle.textContent = selectedCategory === 'Todos' ? 'Publicações dos Alunos' : selectedCategory;
                }

                if (noResults) {
                    noResults.style.display = visiblePosts.length === 0 ? 'block' : 'none';
                }
            }

            if (searchInput) {
                searchInput.addEventListener('input', filterPosts);
            }

            categoryButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    categoryButtons.forEach(item => item.classList.remove('active'));
                    button.classList.add('active');
                    selectedCategory = button.dataset.category;
                    filterPosts();
                });
            });

            sortButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    sortButtons.forEach(item => item.classList.remove('active'));
                    button.classList.add('active');
                    selectedSort = button.dataset.sort;
                    filterPosts();
                });
            });
        });
    </script>
</body>
</html>