
<header class="site-header">

    <div class="header-noise"></div>

    <div class="header-container">

        <!-- LOGO -->
        <a href="{{ route('professor.inicio') }}" class="brand">

            <img
                src="{{ asset('images/beth-logo.jpeg') }}"
                alt="Beth Cientista"
                class="brand-logo"
            >

            <div class="brand-text">
                <h1>BETH CIENTISTA</h1>
                <p>Painel do Professor</p>
            </div>

        </a>

        <!-- BOTÃO MENU MOBILE -->
        <button
            type="button"
            id="mobileMenuButton"
            class="mobile-menu-button"
            aria-label="Abrir menu"
            aria-expanded="false"
        >
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- NAVEGAÇÃO -->
        <nav class="main-nav" id="mainNav">

            <a
                href="{{ route('professor.inicio') }}"
                class="nav-link {{ request()->routeIs('professor.inicio') ? 'active' : '' }}"
            >
                Início
            </a>

            <span class="nav-divider"></span>

            <a
                href="{{ route('professor.sobre') }}"
                class="nav-link {{ request()->routeIs('professor.sobre') ? 'active' : '' }}"
            >
                Sobre Nós
            </a>

            <span class="nav-divider"></span>

            <a
                href="{{ route('professor.galeria') }}"
                class="nav-link {{ request()->routeIs('professor.galeria') ? 'active' : '' }}"
            >
                Galeria
            </a>

            <span class="nav-divider"></span>

            <a
                href="{{ route('professor.biblioteca') }}"
                class="nav-link {{ request()->routeIs('professor.biblioteca') ? 'active' : '' }}"
            >
                Biblioteca
            </a>

            <span class="nav-divider"></span>

            <a
                href="{{ route('professor.mencao') }}"
                class="nav-link {{ request()->routeIs('professor.mencao') ? 'active' : '' }}"
            >
                Menções
            </a>

            <span class="nav-divider"></span>

            <!-- MINHA ÁREA -->
            <a
                href="{{ route('professor.logado') }}"
                class="nav-link nav-aluno-area"
            >
                <i class="fa-solid fa-user"></i>
                Minha Área
            </a>

            <span class="nav-divider"></span>

            <!-- SAIR -->
            <a
                href="{{ route('inicio') }}"
                class="nav-link nav-aluno-sair"
            >
                <i class="fa-solid fa-right-from-bracket"></i>
                Sair
            </a>

        </nav>

    </div>

</header>

<style>

/* =========================================
   NAVBAR DO PROFESSOR
========================================= */

.site-header {
    position: relative;
    z-index: 1000;
    width: 100%;
}

.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
}

/* LOGO */

.brand {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    flex-shrink: 0;
}

.brand-logo {
    width: 65px;
    height: 65px;
    object-fit: contain;
    border-radius: 50%;
}

.brand-text h1 {
    margin: 0;
    font-family: 'Luckiest Guy', cursive;
}

.brand-text p {
    margin: 3px 0 0;
    font-family: 'Fredoka', sans-serif;
}

/* MENU */

.main-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    flex-wrap: nowrap;
}

.main-nav .nav-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    white-space: nowrap;
    text-decoration: none;
    font-family: 'Fredoka', sans-serif;
    transition: all 0.3s ease;
}

/* DIVISÓRIAS */

.nav-divider {
    display: block;
    width: 1px;
    height: 23px;
    background: rgba(255, 255, 255, 0.45);
    flex-shrink: 0;
}

/* ESTADO ATIVO */

.main-nav .nav-link.active {
    font-weight: 700;
}

/* MINHA ÁREA E SAIR */

.nav-aluno-area,
.nav-aluno-sair {
    font-weight: 600;
}

.nav-aluno-area:hover,
.nav-aluno-sair:hover {
    transform: translateY(-2px);
}

/* BOTÃO MOBILE */

.mobile-menu-button {
    display: none;
    border: none;
    background: transparent;
    color: inherit;
    font-size: 25px;
    cursor: pointer;
}

/* =========================================
   RESPONSIVIDADE
========================================= */

@media (max-width: 1100px) {

    .header-container {
        flex-wrap: wrap;
        justify-content: center;
        padding: 16px 24px;
        gap: 20px;
    }

    .main-nav {
        gap: 12px;
        flex-wrap: wrap;
    }

    .main-nav .nav-link {
        font-size: 14px;
    }

}

@media (max-width: 768px) {

    .header-container {
        position: relative;
        flex-direction: row;
        justify-content: space-between;
        padding: 16px 20px;
    }

    .brand-logo {
        width: 55px;
        height: 55px;
    }

    .brand-text h1 {
        font-size: 23px;
    }

    .brand-text p {
        font-size: 12px;
    }

    .mobile-menu-button {
        display: block;
    }

    .main-nav {
        display: none;
        position: absolute;
        top: 100%;
        left: 15px;
        right: 15px;
        flex-direction: column;
        align-items: stretch;
        gap: 0;
        padding: 15px;
        border-radius: 18px;
        background: #58127d;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .main-nav.active {
        display: flex;
    }

    .main-nav .nav-link {
        justify-content: center;
        padding: 12px 8px;
        font-size: 15px;
    }

    .nav-divider {
        width: 80%;
        height: 1px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.25);
    }

}

@media (max-width: 480px) {

    .brand-logo {
        width: 48px;
        height: 48px;
    }

    .brand-text h1 {
        font-size: 19px;
    }

    .brand-text p {
        font-size: 10px;
    }

}

</style>

<script>

document.addEventListener('DOMContentLoaded', function () {

    const menuButton = document.getElementById('mobileMenuButton');
    const mainNav = document.getElementById('mainNav');

    if (menuButton && mainNav) {

        menuButton.addEventListener('click', function () {

            const menuAberto = mainNav.classList.toggle('active');

            menuButton.setAttribute(
                'aria-expanded',
                menuAberto ? 'true' : 'false'
            );

            menuButton.innerHTML = menuAberto
                ? '<i class="fa-solid fa-xmark"></i>'
                : '<i class="fa-solid fa-bars"></i>';

        });

    }

});

</script>
