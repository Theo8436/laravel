```blade
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biblioteca da Beth</title>

    <link rel="icon" type="image/jpeg"
          href="{{ asset('images/beth-logo.jpeg') }}">

    {{-- CSS DA PÁGINA --}}
    <link rel="stylesheet"
          href="{{ asset('css/biblioteca.css') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap"
        rel="stylesheet"
    >

    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >
</head>

<body>

    {{-- =====================================================
        HEADER
    ====================================================== --}}

    <header class="site-header">

        <div class="header-noise"></div>

        <div class="header-container">

            <a href="{{ url('/') }}" class="brand">

                <div class="brand-logo">
                    <img
                        src="{{ asset('images/beth-logo.jpeg') }}"
                        alt="Beth Cientista"
                    >
                </div>

                <div class="brand-text">
                    <h1>Beth Cientista</h1>
                    <span>Divulgação Científica</span>
                </div>

            </a>

            <nav class="main-nav">

                <a href="{{ route('aluno.inicio') }}" class="nav-link">
                    Início
                </a>

                <span class="nav-divider"></span>

                <a href="{{ route('aluno.sobre') }}" class="nav-link">
                    Sobre Nós
                </a>

                <span class="nav-divider"></span>

                <a href="{{ route('aluno.galeria') }}" class="nav-link">
                    Galeria
                </a>

                <span class="nav-divider"></span>

                <a href="{{ route('aluno.biblioteca') }}"
                   class="nav-link active">
                    Biblioteca
                </a>

                <span class="nav-divider"></span>

                <a href="{{ route('aluno.mencao') }}" class="nav-link">
                    Menções Honrosas
                </a>

                <a href="{{ route('aluno.logado') }}" class="nav-link">
                    Minha área
                </a>

                <a href="{{ route('inicio') }}" class="nav-link">
                    Sair
                </a>

            </nav>

            <button
                class="mobile-menu-button"
                id="mobileMenuButton"
                type="button"
            >
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>

    </header>


    {{-- =====================================================
        CONTEÚDO
    ====================================================== --}}

    <main class="biblioteca-page">

        {{-- Decorações --}}
        <div class="background-decoration decoration-one"></div>
        <div class="background-decoration decoration-two"></div>
        <div class="background-decoration decoration-three"></div>


        {{-- =================================================
            HERO
        ================================================== --}}

        <section class="biblioteca-hero">

            <div class="biblioteca-hero-content">

                <span class="hero-label">
                    <i class="fa-solid fa-book-open"></i>
                    BIBLIOTECA DA BETH
                </span>

                <h2>
                    Um mundo de histórias
                    esperando por você!
                </h2>

                <p>
                    Encontre livros, descubra novas histórias
                    e compartilhe conhecimento.
                </p>

                <a
                    href="{{ route('aluno.doacoes') }}"
                    class="donate-button"
                >
                    <i class="fa-solid fa-hand-holding-heart"></i>

                    Quero doar
                </a>

            </div>

            <div class="biblioteca-hero-image">

                <div class="hero-circle"></div>

                <img
                    src="{{ asset('images/beth-mascote.png') }}"
                    alt="Beth Cientista"
                >

            </div>

        </section>


        {{-- =================================================
            LIVROS
        ================================================== --}}

        <section class="books-section">

            <div class="content-container">

                <div class="section-heading">

                    <span>
                        <i class="fa-solid fa-book"></i>
                        NOSSA COLEÇÃO
                    </span>

                    <h3>
                        Livros disponíveis
                    </h3>

                    <p>
                        Confira os livros que fazem parte
                        da Biblioteca da Beth.
                    </p>

                </div>


                <div class="books-grid">

                    {{-- LIVRO 1 --}}
                    <article class="book-card">

                        <div class="book-cover">

                            <i class="fa-solid fa-book-open"></i>

                        </div>

                        <div class="book-content">

                            <span class="book-status available">
                                Disponível
                            </span>

                            <h4>
                                Uma Breve História do Tempo
                            </h4>

                            <p>
                                Stephen Hawking
                            </p>

                            <button
                                type="button"
                                class="book-button"
                            >
                                Ver livro
                            </button>

                        </div>

                    </article>


                    {{-- LIVRO 2 --}}
                    <article class="book-card">

                        <div class="book-cover">

                            <i class="fa-solid fa-atom"></i>

                        </div>

                        <div class="book-content">

                            <span class="book-status available">
                                Disponível
                            </span>

                            <h4>
                                O Universo Numa Casca de Noz
                            </h4>

                            <p>
                                Stephen Hawking
                            </p>

                            <button
                                type="button"
                                class="book-button"
                            >
                                Ver livro
                            </button>

                        </div>

                    </article>


                    {{-- LIVRO 3 --}}
                    <article class="book-card">

                        <div class="book-cover">

                            <i class="fa-solid fa-dna"></i>

                        </div>

                        <div class="book-content">

                            <span class="book-status available">
                                Disponível
                            </span>

                            <h4>
                                O Gene
                            </h4>

                            <p>
                                Siddhartha Mukherjee
                            </p>

                            <button
                                type="button"
                                class="book-button"
                            >
                                Ver livro
                            </button>

                        </div>

                    </article>


                    {{-- LIVRO 4 --}}
                    <article class="book-card">

                        <div class="book-cover">

                            <i class="fa-solid fa-microscope"></i>

                        </div>

                        <div class="book-content">

                            <span class="book-status borrowed">
                                Aguardando devolução
                            </span>

                            <h4>
                                O Corpo Humano
                            </h4>

                            <p>
                                Enciclopédia Científica
                            </p>

                            <button
                                type="button"
                                class="book-button disabled"
                                disabled
                            >
                                Indisponível
                            </button>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        {{-- =================================================
            DOAÇÃO
        ================================================== --}}

        <section class="donation-section">

            <div class="donation-container">

                <div class="donation-icon">
                    <i class="fa-solid fa-heart"></i>
                </div>

                <div class="donation-content">

                    <h3>
                        Tem um livro parado em casa?
                    </h3>

                    <p>
                        Você pode ajudar a Biblioteca da Beth
                        doando livros para outros estudantes.
                    </p>

                </div>

                <a
                    href="{{ route('aluno.doacoes') }}"
                    class="donation-button"
                >
                    Quero doar
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </section>

    </main>


    {{-- =====================================================
        FOOTER
    ====================================================== --}}

    <footer class="site-footer">

        <div class="footer-container">

            <div class="footer-message">

                <i class="fa-solid fa-heart"></i>

                <p>
                    Feito com amor para os futuros cientistas do mundo.
                </p>

                <i class="fa-solid fa-heart"></i>

            </div>

            <a
                href="https://www.instagram.com/bethacientista/"
                target="_blank"
                rel="noopener noreferrer"
                class="instagram-button"
            >

                <i class="fa-brands fa-instagram"></i>

                <span>
                    @bethacientista
                </span>

            </a>

            <p class="footer-copy">
                Beth Cientista - 2026
            </p>

        </div>

    </footer>


    {{-- =====================================================
        JAVASCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const mobileButton =
                document.getElementById('mobileMenuButton');

            const mobileMenu =
                document.getElementById('mobileMenu');

            if (mobileButton && mobileMenu) {

                mobileButton.addEventListener(
                    'click',
                    function () {

                        mobileMenu.classList.toggle('open');

                    }
                );

            }

        });

    </script>

</body>
</html>
```
