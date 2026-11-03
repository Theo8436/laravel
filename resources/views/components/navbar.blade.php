<header class="site-header">

    <div class="header-noise"></div>

    <div class="header-container">

        {{-- =====================================================
             LOGO
        ====================================================== --}}

        <a href="{{ route('inicio') }}" class="brand">

            <div class="brand-logo">

                <img
                    src="{{ asset('images/beth-logo.jpeg') }}"
                    alt="Beth Cientista"
                >

            </div>

            <div class="brand-text">

                <h1>Beth Cientista</h1>

                <span>
                    Divulgação Científica
                </span>

            </div>

        </a>


        {{-- =====================================================
             NAVEGAÇÃO
        ====================================================== --}}

        <nav class="main-nav">

            {{-- INÍCIO --}}
            <a
                href="{{ route('inicio') }}"
                class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}"
                aria-current="{{ request()->routeIs('inicio') ? 'page' : 'false' }}"
            >
                Início
            </a>


            <span class="nav-divider"></span>


            {{-- SOBRE NÓS --}}
            <a
                href="{{ route('sobre') }}"
                class="nav-link {{ request()->routeIs('sobre') ? 'active' : '' }}"
                aria-current="{{ request()->routeIs('sobre') ? 'page' : 'false' }}"
            >
                Sobre Nós
            </a>


            <span class="nav-divider"></span>


            {{-- GALERIA --}}
            <a
                href="{{ route('galeria') }}"
                class="nav-link {{ request()->routeIs('galeria') ? 'active' : '' }}"
                aria-current="{{ request()->routeIs('galeria') ? 'page' : 'false' }}"
            >
                Galeria
            </a>


            <span class="nav-divider"></span>


            {{-- BIBLIOTECA --}}
            <a
                href="{{ route('biblioteca') }}"
                class="nav-link {{ request()->routeIs('biblioteca') ? 'active' : '' }}"
                aria-current="{{ request()->routeIs('biblioteca') ? 'page' : 'false' }}"
            >
                Biblioteca
            </a>


            <span class="nav-divider"></span>


            {{-- MENÇÕES HONROSAS --}}
            <a
                href="{{ route('mencao') }}"
                class="nav-link {{ request()->routeIs('mencao') ? 'active' : '' }}"
                aria-current="{{ request()->routeIs('mencao') ? 'page' : 'false' }}"
            >
                Menções Honrosas
            </a>


            {{-- FAÇA PARTE --}}
            <a
                href="{{ route('escolha') }}"
                class="btn-participe"
            >
                Faça Parte
            </a>


            {{-- ENTRAR --}}
            <a
                href="{{ route('entrar') }}"
                class="btn-login"
            >

                <i class="fa-solid fa-right-to-bracket"></i>

                Entrar

            </a>

        </nav>


        {{-- =====================================================
             MENU MOBILE
        ====================================================== --}}

        <button
            class="mobile-menu-button"
            id="mobileMenuButton"
            type="button"
            aria-label="Abrir menu de navegação"
        >

            <i class="fa-solid fa-bars"></i>

        </button>

    </div>

</header>
