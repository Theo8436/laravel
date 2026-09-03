<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sobre Nós | Beth Cientista</title>

    {{-- =====================================================
         FONTES DO PROJETO
    ====================================================== --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Kavoon&family=Fredoka:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    {{-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== --}}

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    {{-- =====================================================
         CSS
    ====================================================== --}}

    <style>

        /* =====================================================
           RESET
        ====================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;

            font-family: 'Fredoka', sans-serif;

            color: #ffffff;

            background:
                linear-gradient(
                    135deg,
                    #58127d 0%,
                    #bc10c0 48%,
                    #f97316 100%
                );

            overflow-x: hidden;
        }


        /* =====================================================
           TÍTULOS
        ====================================================== */

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Luckiest Guy', cursive;

            letter-spacing: -0.02em;
        }


        /* =====================================================
           TEXTURA DO FUNDO
        ====================================================== */

        body::before {
            content: "";

            position: fixed;

            inset: 0;

            pointer-events: none;

            z-index: 9999;

            opacity: 0.16;

            background-image:
                url("data:image/svg+xml,%3Csvg width='200' height='200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' /%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.15'/%3E%3C/svg%3E");

            mix-blend-mode: overlay;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .site-header {

            width: 100%;

            height: 96px;

            position: relative;

            background:
                linear-gradient(
                    90deg,
                    #ff7300 0%,
                    #ff6410 50%,
                    #ff7300 100%
                );

            color: #ffffff;

            box-shadow:
                0 8px 24px rgba(0, 0, 0, 0.20);

            overflow: hidden;
        }


        /* textura do header */

        .site-header::before {

            content: "";

            position: absolute;

            inset: 0;

            pointer-events: none;

            opacity: 0.35;

            background-image:
                url("data:image/svg+xml,%3Csvg width='100' height='100' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' /%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.5'/%3E%3C/svg%3E");

            mix-blend-mode: overlay;
        }


        /* =====================================================
           CONTAINER DO HEADER
        ====================================================== */

        .header-container {

            width: 100%;

            max-width: 1280px;

            height: 100%;

            margin: 0 auto;

            padding: 16px 32px;

            position: relative;

            z-index: 2;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 48px;
        }


        /* =====================================================
           LOGO
        ====================================================== */

        .brand {

            display: flex;

            align-items: center;

            gap: 12px;

            flex-shrink: 0;

            color: #ffffff;

            text-decoration: none;

            cursor: pointer;

            transition:
                transform 0.25s ease;
        }


        .brand:hover {

            color: #ffffff;

            transform: scale(1.03);
        }


        .brand-logo {

            width: 64px;

            height: 64px;

            padding: 4px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #ffffff;

            border-radius: 50%;

            overflow: hidden;

            flex-shrink: 0;

            box-shadow:
                0 4px 12px rgba(0, 0, 0, 0.25);
        }


        .brand-logo img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            border-radius: 50%;

            display: block;
        }


        /* =====================================================
           TEXTO DA LOGO
        ====================================================== */

        .brand-text {

            display: flex;

            flex-direction: column;

            justify-content: center;
        }


        .brand-text h1 {

            margin: 0;

            font-family: 'Luckiest Guy', cursive;

            font-size: 30px;

            line-height: 1;

            color: #ffffff;

            text-shadow:
                0 3px 7px rgba(0, 0, 0, 0.20);
        }


        .brand-text p {

            margin: 5px 0 0;

            font-family: 'Fredoka', sans-serif;

            font-size: 14px;

            font-weight: 500;

            line-height: 1;

            color: #ffffff;
        }


        /* =====================================================
           NAVBAR
        ====================================================== */

        .main-nav {

            display: flex;

            align-items: center;

            gap: 20px;

            padding: 12px 24px;

            background:
                rgba(255, 255, 255, 0.10);

            backdrop-filter: blur(8px);

            -webkit-backdrop-filter: blur(8px);

            border-radius: 999px;

            box-shadow:
                0 4px 12px rgba(0, 0, 0, 0.15);

            flex-shrink: 0;
        }


        /* =====================================================
           LINKS DA NAVBAR
        ====================================================== */

        .main-nav > a {

            position: relative;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            color: #ffffff;

            text-decoration: none;

            font-family: 'Fredoka', sans-serif;

            font-size: 15px;

            font-weight: 600;

            line-height: 1;

            white-space: nowrap;

            transition:
                color 0.25s ease,
                transform 0.25s ease;
        }


        .main-nav > a:hover {

            color: #ffd43b;

            transform: scale(1.05);
        }


        /* =====================================================
           LINK ATIVO
        ====================================================== */

        .main-nav > a.active {

            color: #ffd43b;

            font-weight: 700;
        }


        /* =====================================================
           DIVISÓRIAS
        ====================================================== */

        .nav-divider {

            width: 1px;

            height: 24px;

            flex-shrink: 0;

            background:
                rgba(255, 255, 255, 0.30);
        }


        /* =====================================================
           FAÇA PARTE
        ====================================================== */

        .main-nav .btn-faca-parte {

            padding: 10px 18px;

            background: #ffd43b;

            color: #8b5cf6;

            border-radius: 8px;

            font-weight: 700;

            box-shadow:
                0 4px 10px rgba(0, 0, 0, 0.18);

            transition:
                transform 0.25s ease,
                background 0.25s ease;
        }


        .main-nav .btn-faca-parte:hover {

            color: #8b5cf6;

            background: #ffe275;

            transform: scale(1.05);
        }


        /* =====================================================
           ENTRAR
        ====================================================== */

        .main-nav .btn-entrar {

            padding: 9px 17px;

            background: #ffffff;

            color: #8b5cf6;

            border: 2px solid #ffd43b;

            border-radius: 8px;

            font-weight: 600;

            box-shadow:
                0 4px 10px rgba(0, 0, 0, 0.12);
        }


        .main-nav .btn-entrar i {

            margin-right: 8px;

            font-size: 16px;
        }


        .main-nav .btn-entrar:hover {

            color: #8b5cf6;

            background: #fffbea;

            transform: scale(1.05);
        }


        /* =====================================================
           MAIN
        ====================================================== */

        main {

            position: relative;

            width: 100%;

            max-width: 1280px;

            margin: 0 auto;

            padding: 0 32px 80px;

            z-index: 2;
        }


        /* =====================================================
           TÍTULO
        ====================================================== */

        .titulo {

            text-align: center;

            padding: 80px 0 64px;
        }


        .titulo h1 {

            margin: 0 0 16px;

            font-family: 'Luckiest Guy', cursive;

            font-size: clamp(48px, 6vw, 64px);

            font-weight: 900;

            line-height: 1;

            color: #ffffff;

            text-shadow:
                0 8px 18px rgba(0, 0, 0, 0.30);
        }


        .titulo p {

            max-width: 760px;

            margin: 0 auto;

            font-family: 'Fredoka', sans-serif;

            font-size: 22px;

            font-weight: 600;

            line-height: 1.5;

            color: #ffedd5;

            text-shadow:
                0 4px 10px rgba(0, 0, 0, 0.15);
        }


        /* =====================================================
           HISTÓRIA
        ====================================================== */

        .historia {

            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                minmax(0, 1fr);

            align-items: center;

            gap: 48px;

            margin-bottom: 64px;
        }


        .historia .texto {

            width: 100%;
        }


        .historia h2 {

            margin-bottom: 24px;

            font-family: 'Luckiest Guy', cursive;

            font-size: 42px;

            line-height: 1;

            color: #ffffff;

            text-shadow:
                0 6px 14px rgba(0, 0, 0, 0.25);
        }


        .historia p {

            margin-bottom: 16px;

            font-family: 'Fredoka', sans-serif;

            font-size: 18px;

            font-weight: 500;

            line-height: 1.65;

            color: #ffffff;
        }


        /* =====================================================
           IMAGENS
        ====================================================== */

        .historia .imagem,
        .fazemos .imagem {

            position: relative;

            border-radius: 24px;

            overflow: hidden;

            border: 2px solid
                rgba(255, 255, 255, 0.20);

            box-shadow:
                0 20px 40px
                rgba(0, 0, 0, 0.30);
        }


        .historia img,
        .fazemos img {

            display: block;

            width: 100%;

            height: 384px;

            object-fit: cover;

            border-radius: 22px;
        }


        /* =====================================================
           CARDS
        ====================================================== */

        .cards {

            display: grid;

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 32px;

            margin-bottom: 64px;
        }


        .card {

            position: relative;

            width: 100%;

            padding: 32px;

            text-align: center;

            color: #111827;

            background:
                rgba(255, 255, 255, 0.95);

            backdrop-filter: blur(10px);

            -webkit-backdrop-filter: blur(10px);

            border:
                2px solid
                rgba(255, 255, 255, 0.20);

            border-radius: 24px;

            box-shadow:
                0 15px 30px
                rgba(0, 0, 0, 0.20);

            transition:
                transform 0.35s ease,
                box-shadow 0.35s ease;
        }


        .card:hover {

            transform: translateY(-8px);

            box-shadow:
                0 22px 40px
                rgba(0, 0, 0, 0.30);
        }


        /* =====================================================
           ÍCONES
        ====================================================== */

        .card i {

            display: flex;

            align-items: center;

            justify-content: center;

            width: 80px;

            height: 80px;

            margin: 0 auto 16px;

            border-radius: 50%;

            background: #fb923c;

            color: #ffffff;

            font-size: 40px;

            box-shadow:
                0 8px 18px
                rgba(0, 0, 0, 0.18);
        }


        .card h3 {

            margin-bottom: 16px;

            font-family: 'Luckiest Guy', cursive;

            font-size: 27px;

            line-height: 1.1;

            color: #111827;
        }


        .card p {

            font-family: 'Fredoka', sans-serif;

            font-size: 16px;

            font-weight: 500;

            line-height: 1.6;

            color: #4b5563;
        }


        /* =====================================================
           O QUE FAZEMOS
        ====================================================== */

        .fazemos {

            display: grid;

            grid-template-columns:
                minmax(0, 1fr)
                minmax(0, 1fr);

            align-items: center;

            gap: 48px;

            margin-bottom: 64px;
        }


        .fazemos .texto {

            order: 2;
        }


        .fazemos .imagem {

            order: 1;
        }


        .fazemos h2 {

            margin-bottom: 24px;

            font-family: 'Luckiest Guy', cursive;

            font-size: 42px;

            line-height: 1;

            color: #ffffff;

            text-shadow:
                0 6px 14px
                rgba(0, 0, 0, 0.25);
        }


        .fazemos p {

            margin-bottom: 16px;

            font-family: 'Fredoka', sans-serif;

            font-size: 18px;

            font-weight: 500;

            line-height: 1.65;

            color: #ffffff;
        }


        /* =====================================================
           EQUIPE
        ====================================================== */

        .equipe {

            text-align: center;

            padding: 64px 0;
        }


        .equipe i {

            display: flex;

            align-items: center;

            justify-content: center;

            width: 96px;

            height: 96px;

            margin: 0 auto 16px;

            border-radius: 50%;

            background: #fb923c;

            color: #ffffff;

            font-size: 48px;

            box-shadow:
                0 15px 30px
                rgba(0, 0, 0, 0.30);
        }


        .equipe h2 {

            margin-bottom: 16px;

            font-family: 'Luckiest Guy', cursive;

            font-size: 42px;

            line-height: 1;

            color: #ffffff;

            text-shadow:
                0 6px 14px
                rgba(0, 0, 0, 0.25);
        }


        .equipe p {

            max-width: 700px;

            margin: 0 auto;

            font-family: 'Fredoka', sans-serif;

            font-size: 20px;

            font-weight: 600;

            line-height: 1.5;

            color: #ffedd5;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        .site-footer {

            position: relative;

            width: 100%;

            padding: 32px 20px;

            background:
                linear-gradient(
                    135deg,
                    #58127d 0%,
                    #be185d 50%,
                    #ea580c 100%
                );

            color: #ffffff;

            overflow: hidden;
        }


        /* textura */

        .site-footer::before {

            content: "";

            position: absolute;

            inset: 0;

            pointer-events: none;

            opacity: 0.18;

            background-image:
                url("data:image/svg+xml,%3Csvg width='200' height='200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' /%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.15'/%3E%3C/svg%3E");

            mix-blend-mode: overlay;
        }


        /* =====================================================
           BRILHOS DO FOOTER
        ====================================================== */

        .footer-sparkles {

            position: absolute;

            inset: 0;

            pointer-events: none;
        }


        .footer-sparkles span {

            position: absolute;

            width: 7px;

            height: 7px;

            background: #ffffff;

            border-radius: 50%;

            opacity: 0.5;

            animation:
                footerSparkle
                2.5s
                ease-in-out
                infinite;
        }


        .footer-sparkles span:nth-child(2) {
            animation-delay: .3s;
        }

        .footer-sparkles span:nth-child(3) {
            animation-delay: .7s;
        }

        .footer-sparkles span:nth-child(4) {
            animation-delay: 1s;
        }

        .footer-sparkles span:nth-child(5) {
            animation-delay: 1.4s;
        }

        .footer-sparkles span:nth-child(6) {
            animation-delay: 1.8s;
        }

        .footer-sparkles span:nth-child(7) {
            animation-delay: .5s;
        }

        .footer-sparkles span:nth-child(8) {
            animation-delay: 1.2s;
        }

        .footer-sparkles span:nth-child(9) {
            animation-delay: 2s;
        }

        .footer-sparkles span:nth-child(10) {
            animation-delay: .9s;
        }


        @keyframes footerSparkle {

            0%,
            100% {
                opacity: .3;

                transform: scale(.8);
            }

            50% {
                opacity: .8;

                transform: scale(1.3);
            }
        }


        /* =====================================================
           CONTEÚDO DO FOOTER
        ====================================================== */

        .footer-content {

            position: relative;

            z-index: 2;

            width: 100%;

            max-width: 1280px;

            margin: 0 auto;

            text-align: center;
        }


        /* =====================================================
           MENSAGEM
        ====================================================== */

        .footer-message {

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            margin-bottom: 14px;
        }


        .footer-message i {

            color: #fdba74;

            font-size: 19px;

            animation:
                footerHeart
                1.8s
                ease-in-out
                infinite;
        }


        .footer-message p {

            margin: 0;

            font-family: 'Fredoka', sans-serif;

            font-size: 17px;

            font-weight: 600;

            color: #ffffff;
        }


        @keyframes footerHeart {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.15);
            }
        }


        /* =====================================================
           INSTAGRAM
        ====================================================== */

        .instagram-button {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            margin-bottom: 14px;

            padding: 10px 22px;

            background: #ffffff;

            color: #8b5cf6;

            border-radius: 999px;

            text-decoration: none;

            font-family: 'Fredoka', sans-serif;

            font-size: 15px;

            font-weight: 700;

            box-shadow:
                0 10px 25px
                rgba(0, 0, 0, 0.20);

            transition:
                transform .3s ease,
                box-shadow .3s ease;
        }


        .instagram-button:hover {

            color: #8b5cf6;

            transform: scale(1.06);

            box-shadow:
                0 14px 30px
                rgba(0, 0, 0, 0.30);
        }


        .instagram-button i {

            font-size: 19px;
        }


        /* =====================================================
           COPYRIGHT
        ====================================================== */

        .footer-copy {

            margin: 0;

            font-family: 'Fredoka', sans-serif;

            font-size: 13px;

            font-weight: 500;

            color: #fed7aa;
        }


        /* =====================================================
           TABLET
        ====================================================== */

        @media (max-width: 1100px) {

            .site-header {

                height: auto;
            }


            .header-container {

                padding: 16px 24px;

                gap: 25px;
            }


            .main-nav {

                gap: 12px;

                padding: 10px 16px;
            }


            .main-nav > a {

                font-size: 14px;
            }


            main {

                padding-left: 24px;

                padding-right: 24px;
            }


            .historia,
            .fazemos {

                gap: 32px;
            }


            .cards {

                gap: 20px;
            }
        }


        /* =====================================================
           MOBILE
        ====================================================== */

        @media (max-width: 768px) {

            .site-header {

                height: auto;
            }


            .header-container {

                flex-direction: column;

                padding: 16px;

                gap: 18px;
            }


            .brand {

                width: 100%;

                justify-content: center;
            }


            .brand-logo {

                width: 58px;

                height: 58px;
            }


            .brand-text h1 {

                font-size: 25px;
            }


            .brand-text p {

                font-size: 12px;
            }


            .main-nav {

                width: 100%;

                flex-wrap: wrap;

                justify-content: center;

                gap: 10px;

                padding: 12px;

                border-radius: 20px;
            }


            .nav-divider {

                display: none;
            }


            .main-nav > a {

                font-size: 13px;
            }


            main {

                width: 100%;

                padding:
                    0 20px
                    50px;
            }


            .titulo {

                padding: 60px 0 45px;
            }


            .titulo h1 {

                font-size: 48px;
            }


            .titulo p {

                font-size: 18px;
            }


            .historia,
            .fazemos {

                grid-template-columns: 1fr;

                gap: 30px;

                margin-bottom: 50px;
            }


            .fazemos .texto {

                order: 1;
            }


            .fazemos .imagem {

                order: 2;
            }


            .historia h2,
            .fazemos h2,
            .equipe h2 {

                font-size: 36px;
            }


            .historia p,
            .fazemos p {

                font-size: 17px;
            }


            .historia img,
            .fazemos img {

                height: 300px;
            }


            .cards {

                grid-template-columns: 1fr;

                gap: 20px;

                margin-bottom: 50px;
            }


            .card {

                padding: 28px;
            }


            .equipe {

                padding: 40px 0;
            }


            .footer-message p {

                font-size: 15px;
            }
        }


        /* =====================================================
           CELULARES PEQUENOS
        ====================================================== */

        @media (max-width: 480px) {

            .brand-text h1 {

                font-size: 21px;
            }


            .titulo h1 {

                font-size: 42px;
            }


            .titulo p {

                font-size: 17px;
            }


            .historia h2,
            .fazemos h2,
            .equipe h2 {

                font-size: 32px;
            }


            .historia img,
            .fazemos img {

                height: 240px;
            }


            .card h3 {

                font-size: 24px;
            }


            .footer-message {

                flex-wrap: wrap;
            }
        }

    </style>

</head>


<body>


{{-- =========================================================
     HEADER
========================================================= --}}

<header class="site-header">

    <div class="header-container">


        {{-- LOGO --}}

        <a
            href="{{ route('inicio') }}"
            class="brand"
        >

            <div class="brand-logo">

                <img
                    src="{{ asset('images/beth-logo.jpeg') }}"
                    alt="Beth Cientista"
                >

            </div>


            <div class="brand-text">

                <h1>Beth Cientista</h1>

                <p>Divulgação Científica</p>

            </div>

        </a>


        {{-- =================================================
             NAVBAR
        ================================================== --}}

        <nav class="main-nav">


            <a href="{{ route('inicio') }}">
                Início
            </a>


            <span class="nav-divider"></span>


            <a
                href="{{ route('sobre') }}"
                class="active"
            >
                Sobre Nós
            </a>


            <span class="nav-divider"></span>


            <a href="{{ route('galeria') }}">
                Galeria
            </a>


            <span class="nav-divider"></span>


            <a href="{{ route('biblioteca') }}">
                Biblioteca
            </a>


            <span class="nav-divider"></span>


            <a href="{{ route('mencao') }}">
                Menções Honrosas
            </a>


            <a
                href="{{ route('escolha') }}"
                class="btn-faca-parte"
            >
                Faça Parte
            </a>


            <a
                href="{{ route('entrar') }}"
                class="btn-entrar"
            >

                <i class="bi bi-box-arrow-in-right"></i>

                Entrar

            </a>

        </nav>

    </div>

</header>



{{-- =========================================================
     CONTEÚDO
========================================================= --}}

<main>


    {{-- =====================================================
         TÍTULO
    ====================================================== --}}

    <section class="titulo">

        <h1>
            SOBRE NÓS
        </h1>

        <p>
            Conheça a história e missão da Beth Cientista
        </p>

    </section>



    {{-- =====================================================
         HISTÓRIA
    ====================================================== --}}

    <section class="historia">


        <div class="texto">

            <h2>
                NOSSA HISTÓRIA
            </h2>


            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>


            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.
            </p>


            <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
            </p>

        </div>


        <div class="imagem">

            <img
                src="{{ asset('images/laboratorio.jpg') }}"
                alt="Laboratório"
            >

        </div>

    </section>



    {{-- =====================================================
         CARDS
    ====================================================== --}}

    <section class="cards">


        {{-- MISSÃO --}}

        <div class="card">

            <i class="bi bi-bullseye"></i>

            <h3>
                NOSSA MISSÃO
            </h3>

            <p>
                Incentivar crianças e jovens a conhecerem a ciência.
            </p>

        </div>


        {{-- VALORES --}}

        <div class="card">

            <i class="bi bi-heart"></i>

            <h3>
                NOSSOS VALORES
            </h3>

            <p>
                Educação, inclusão, criatividade e inovação.
            </p>

        </div>


        {{-- VISÃO --}}

        <div class="card">

            <i class="bi bi-lightbulb"></i>

            <h3>
                NOSSA VISÃO
            </h3>

            <p>
                Tornar a ciência acessível para todos.
            </p>

        </div>


    </section>



    {{-- =====================================================
         O QUE FAZEMOS
    ====================================================== --}}

    <section class="fazemos">


        <div class="imagem">

            <img
                src="{{ asset('images/equipe.jpg') }}"
                alt="Equipe"
            >

        </div>


        <div class="texto">

            <h2>
                O QUE FAZEMOS
            </h2>


            <p>
                Desenvolvemos conteúdos educativos, jogos,
                atividades e projetos voltados para a divulgação científica.
            </p>


            <p>
                Nosso objetivo é despertar a curiosidade e o interesse
                dos estudantes pela ciência.
            </p>

        </div>

    </section>



    {{-- =====================================================
         EQUIPE
    ====================================================== --}}

    <section class="equipe">

        <i class="bi bi-people-fill"></i>

        <h2>
            NOSSA EQUIPE
        </h2>

        <p>
            Jovens apaixonados por ciência e divulgação científica.
        </p>

    </section>


</main>



{{-- =========================================================
     FOOTER
========================================================= --}}

<footer class="site-footer">


    {{-- BRILHOS --}}

    <div class="footer-sparkles">

        <span style="top:15%; left:10%;"></span>

        <span style="top:35%; left:22%;"></span>

        <span style="top:70%; left:8%;"></span>

        <span style="top:20%; left:45%;"></span>

        <span style="top:65%; left:55%;"></span>

        <span style="top:30%; left:72%;"></span>

        <span style="top:75%; left:82%;"></span>

        <span style="top:15%; left:92%;"></span>

        <span style="top:80%; left:38%;"></span>

        <span style="top:50%; left:95%;"></span>

    </div>


    <div class="footer-content">


        {{-- MENSAGEM --}}

        <div class="footer-message">

            <i class="bi bi-heart-fill"></i>

            <p>
                Feito com amor para os futuros cientistas do mundo.
            </p>

            <i class="bi bi-heart-fill"></i>

        </div>


        {{-- INSTAGRAM --}}

        <a
            href="https://www.instagram.com/bethacientista/"
            target="_blank"
            rel="noopener noreferrer"
            class="instagram-button"
        >

            <i class="bi bi-instagram"></i>

            <span>
                @bethacientista
            </span>

            <i class="bi bi-stars"></i>

        </a>


        {{-- COPYRIGHT --}}

        <p class="footer-copy">
            Beth Cientista - 2026
        </p>


    </div>

</footer>



</body>

</html>