<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeria | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<style>

/* =====================================================
   CONFIGURAÇÕES GERAIS
===================================================== */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;

    background:
    linear-gradient(
        135deg,
        #7000a8 0%,
        #b500d6 50%,
        #ef6b72 100%
    );

    color: white;
}


/* =====================================================
   BOLINHAS DO FUNDO
===================================================== */

body::before {
    content: "";

    position: fixed;

    width: 9px;
    height: 9px;

    border-radius: 50%;

    background: white;

    opacity: .55;

    top: 105px;
    left: 28%;

    box-shadow:
        500px 50px white,
        850px 100px white,
        150px 170px white,
        950px 350px white,
        700px 500px white,
        1100px 650px white,
        250px 700px white;

    pointer-events: none;
}


/* =====================================================
   HEADER
===================================================== */

header {
    width: 100%;

    min-height: 100px;

    background: #ff7700;

    display: flex;

    align-items: center;

    justify-content: space-between;

    padding: 12px 6%;

    box-shadow:
        0 5px 18px rgba(0,0,0,.25);

    position: sticky;

    top: 0;

    z-index: 1000;
}


/* =====================================================
   LOGO
===================================================== */

.logo {
    display: flex;

    align-items: center;

    gap: 14px;

    flex-shrink: 0;
}

.logo img {
    width: 65px;
    height: 65px;

    object-fit: cover;

    border-radius: 50%;

    background: white;

    border: 3px solid white;
}

.logo-text h2 {
    color: white;

    font-size: 28px;

    font-weight: 800;

    line-height: 1;
}

.logo-text p {
    color: white;

    font-size: 13px;

    margin-top: 5px;
}


/* =====================================================
   NAVBAR
===================================================== */

nav {
    display: flex;

    align-items: center;

    gap: 0;

    background: rgba(255,255,255,.08);

    padding: 8px 10px;

    border-radius: 40px;
}

nav a {
    text-decoration: none;

    color: white;

    font-size: 15px;

    font-weight: 600;

    padding: 12px 20px;

    border-right: 1px solid rgba(255,255,255,.35);

    transition: .3s;
}

nav a:last-child {
    border-right: none;
}

nav a:hover {
    color: #ffd343;

    transform: translateY(-2px);
}

nav a.ativo {
    color: #ffd343;
}

nav .faca-parte {
    background: #ffd343;

    color: #7b22a8;

    border-radius: 10px;

    margin-left: 10px;

    border: none;
}

nav .faca-parte:hover {
    background: #ffe47c;

    color: #7b22a8;
}

nav .entrar {
    background: white;

    color: #9b27e8;

    border-radius: 10px;

    margin-left: 10px;

    border: none;
}

nav .entrar:hover {
    background: #f3e7ff;

    color: #7b22a8;
}


/* =====================================================
   MAIN
===================================================== */

main {
    width: 88%;

    max-width: 1400px;

    margin: 0 auto;

    padding: 55px 0 80px;
}


/* =====================================================
   TÍTULO
===================================================== */

.titulo {
    text-align: center;

    margin-bottom: 55px;
}

.titulo h1 {
    font-size: 58px;

    font-weight: 800;

    color: white;

    line-height: 1.1;

    text-transform: uppercase;

    text-shadow:
        0 5px 10px rgba(0,0,0,.12);
}

.titulo p {
    margin-top: 15px;

    color: #ffe7df;

    font-size: 21px;

    font-weight: 600;
}


/* =====================================================
   GALERIA
===================================================== */

.galeria {
    display: grid;

    grid-template-columns: repeat(4, 1fr);

    gap: 34px;
}


/* =====================================================
   CARD
===================================================== */

.foto-card {
    position: relative;

    background: white;

    border-radius: 25px;

    overflow: hidden;

    box-shadow:
        0 12px 28px rgba(0,0,0,.25);

    transition: .35s;

    cursor: default;
}

.foto-card:hover {
    transform:
        translateY(-8px)
        scale(1.01);

    box-shadow:
        0 18px 35px rgba(0,0,0,.30);
}


/* =====================================================
   IMAGEM
===================================================== */

.foto-card img {
    width: 100%;

    height: 280px;

    object-fit: cover;

    display: block;

    transition: .4s;
}

.foto-card:hover img {
    transform: scale(1.05);
}


/* =====================================================
   INFORMAÇÕES
===================================================== */

.info {
    background: white;

    color: #222;

    padding: 18px 20px;
}

.info h3 {
    font-size: 19px;

    font-weight: 700;

    margin-bottom: 5px;
}

.info p {
    color: #777;

    font-size: 14px;

    line-height: 21px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}


/* =====================================================
   BOTÃO LER MAIS
===================================================== */

.btn-ler-mais {
    width: 100%;

    margin-top: 15px;

    padding: 11px 15px;

    border: none;

    border-radius: 12px;

    background: linear-gradient(
        135deg,
        #7b22a8,
        #b500d6
    );

    color: white;

    font-size: 14px;

    font-weight: 700;

    cursor: pointer;

    transition: .3s;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 8px;
}

.btn-ler-mais:hover {
    transform: translateY(-2px);

    box-shadow:
        0 6px 15px rgba(123,34,168,.35);
}


/* =====================================================
   ÍCONE
===================================================== */

.icone-foto {
    position: absolute;

    top: 15px;

    right: 15px;

    width: 42px;
    height: 42px;

    border-radius: 50%;

    background: #ff7700;

    display: flex;

    justify-content: center;

    align-items: center;

    color: white;

    font-size: 20px;

    box-shadow:
        0 5px 12px rgba(0,0,0,.25);

    z-index: 2;
}


/* =====================================================
   MODAL
===================================================== */

.modal-galeria {
    display: none;

    position: fixed;

    inset: 0;

    background: rgba(25, 0, 35, .88);

    backdrop-filter: blur(6px);

    z-index: 3000;

    align-items: center;

    justify-content: center;

    padding: 25px;
}

.modal-galeria.ativo {
    display: flex;
}


/* =====================================================
   CONTEÚDO DO MODAL
===================================================== */

.modal-conteudo {
    width: 100%;

    max-width: 950px;

    max-height: 92vh;

    overflow-y: auto;

    background: white;

    border-radius: 25px;

    color: #222;

    box-shadow:
        0 20px 60px rgba(0,0,0,.45);

    position: relative;

    animation: abrirModal .25s ease;
}

@keyframes abrirModal {

    from {
        opacity: 0;
        transform: translateY(20px) scale(.97);
    }

    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

}


/* =====================================================
   BOTÃO FECHAR
===================================================== */

.fechar-modal {
    position: absolute;

    top: 15px;

    right: 15px;

    width: 45px;
    height: 45px;

    border: none;

    border-radius: 50%;

    background: rgba(0,0,0,.65);

    color: white;

    font-size: 22px;

    cursor: pointer;

    z-index: 20;

    transition: .3s;
}

.fechar-modal:hover {
    background: #ff7700;

    transform: rotate(90deg);
}


/* =====================================================
   CARROSSEL
===================================================== */

.carrossel {
    position: relative;

    width: 100%;

    background: #1c1c1c;

    overflow: hidden;

    border-radius: 25px 25px 0 0;
}

.slide {
    display: none;

    width: 100%;

    height: 500px;

    align-items: center;

    justify-content: center;
}

.slide.ativo {
    display: flex;
}

.slide img {
    width: 100%;

    height: 500px;

    object-fit: contain;

    display: block;
}


/* =====================================================
   BOTÕES DO CARROSSEL
===================================================== */

.btn-carrossel {
    position: absolute;

    top: 50%;

    transform: translateY(-50%);

    width: 50px;
    height: 50px;

    border: none;

    border-radius: 50%;

    background: rgba(255,255,255,.9);

    color: #7b22a8;

    font-size: 24px;

    cursor: pointer;

    display: flex;

    align-items: center;

    justify-content: center;

    z-index: 10;

    transition: .3s;
}

.btn-carrossel:hover {
    background: #ff7700;

    color: white;

    transform: translateY(-50%) scale(1.08);
}

.btn-anterior {
    left: 20px;
}

.btn-proximo {
    right: 20px;
}


/* =====================================================
   INDICADORES
===================================================== */

.indicadores {
    position: absolute;

    bottom: 15px;

    left: 50%;

    transform: translateX(-50%);

    display: flex;

    gap: 8px;

    z-index: 10;
}

.indicador {
    width: 10px;
    height: 10px;

    border-radius: 50%;

    border: none;

    background: rgba(255,255,255,.55);

    cursor: pointer;

    transition: .3s;
}

.indicador.ativo {
    background: #ff7700;

    transform: scale(1.3);
}


/* =====================================================
   TEXTO DO MODAL
===================================================== */

.modal-info {
    padding: 28px 30px 32px;
}

.modal-info h2 {
    color: #7b22a8;

    font-size: 28px;

    font-weight: 800;

    margin-bottom: 12px;
}

.modal-info p {
    color: #555;

    font-size: 16px;

    line-height: 28px;

    white-space: pre-line;
}


/* =====================================================
   CONTADOR DE FOTOS
===================================================== */

.contador-fotos {
    display: inline-flex;

    align-items: center;

    gap: 7px;

    margin-top: 18px;

    padding: 8px 14px;

    border-radius: 20px;

    background: #f3e7ff;

    color: #7b22a8;

    font-size: 13px;

    font-weight: 600;
}


/* =====================================================
   MENSAGEM FINAL
===================================================== */

.mensagem-final {
    margin-top: 65px;

    display: flex;

    justify-content: center;
}

.caixa-final {
    width: 700px;

    padding: 40px;

    text-align: center;

    border-radius: 25px;

    background:
        rgba(255,255,255,.12);

    border:
        2px solid rgba(255,255,255,.25);

    backdrop-filter: blur(8px);

    box-shadow:
        0 12px 25px rgba(0,0,0,.20);
}

.caixa-final i {
    display: flex;

    align-items: center;
    justify-content: center;

    width: 70px;
    height: 70px;

    margin: 0 auto 18px;

    background: #ff7700;

    border-radius: 50%;

    font-size: 32px;
}

.caixa-final h2 {
    font-size: 30px;

    margin-bottom: 12px;
}

.caixa-final p {
    font-size: 16px;

    line-height: 27px;

    color: #ffe7df;
}


/* =====================================================
   FOOTER
===================================================== */

footer {
    text-align: center;

    padding: 30px;

    background:
        rgba(0,0,0,.12);
}

footer p {
    color: white;

    font-size: 14px;
}


/* =====================================================
   RESPONSIVO
===================================================== */

@media(max-width:1200px) {

    header {
        padding: 15px 3%;
    }

    nav a {
        padding: 10px 12px;

        font-size: 13px;
    }

    .galeria {
        grid-template-columns: repeat(3,1fr);
    }

}

@media(max-width:900px) {

    header {
        flex-direction: column;

        gap: 20px;

        padding: 20px;
    }

    nav {
        flex-wrap: wrap;

        justify-content: center;
    }

    .galeria {
        grid-template-columns: repeat(2,1fr);
    }

    .titulo h1 {
        font-size: 45px;
    }

    .slide,
    .slide img {
        height: 400px;
    }

}

@media(max-width:600px) {

    main {
        width: 92%;

        padding-top: 40px;
    }

    .logo {
        flex-direction: column;

        text-align: center;
    }

    nav {
        width: 100%;

        border-radius: 20px;
    }

    nav a {
        padding: 8px;

        font-size: 11px;
    }

    .galeria {
        grid-template-columns: 1fr;
    }

    .foto-card img {
        height: 260px;
    }

    .titulo h1 {
        font-size: 35px;
    }

    .titulo p {
        font-size: 16px;
    }

    .caixa-final {
        padding: 30px 20px;
    }

    .modal-galeria {
        padding: 10px;
    }

    .modal-conteudo {
        max-height: 95vh;

        border-radius: 18px;
    }

    .slide,
    .slide img {
        height: 300px;
    }
    .btn-ler-mais {
    text-decoration: none;
}

    .btn-carrossel {
        width: 42px;
        height: 42px;

        font-size: 19px;
    }

    .btn-anterior {
        left: 10px;
    }

    .btn-proximo {
        right: 10px;
    }

    .modal-info {
        padding: 22px;
    }

    .modal-info h2 {
        font-size: 23px;
    }

}

</style>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header>

    <div class="logo">

        <img
            src="{{ asset('Beth.jpg') }}"
            alt="Beth Cientista"
        >

        <div class="logo-text">

            <h2>BETH CIENTISTA</h2>

            <p>Divulgação Científica</p>

        </div>

    </div>


    <nav>

        <a href="{{ route('inicio') }}">
            Início
        </a>

        <a href="{{ route('sobre') }}">
            Sobre Nós
        </a>

        <a class="ativo" href="{{ route('galeria') }}">
            Galeria
        </a>

        <a href="{{ route('biblioteca') }}">
            Biblioteca
        </a>

        <a href="{{ route('mencao') }}">
            Menções Honrosas
        </a>

        <a class="faca-parte" href="{{ route('escolha') }}">
            Faça Parte
        </a>

        <a class="entrar" href="{{ route('entrar') }}">
            <i class="bi bi-box-arrow-in-right"></i>
            Entrar
        </a>

    </nav>

</header>


<!-- =====================================================
     CONTEÚDO
===================================================== -->

<main>

    <section class="titulo">

        <h1>GALERIA DE FOTOS</h1>

        <p>
            Momentos especiais e atividades do grupo Beth Cientista!
        </p>

    </section>


    <!-- =================================================
         GALERIA DINÂMICA
    ================================================== -->

    <section class="galeria">

        @forelse($fotos as $key => $foto)

            @php

                /*
                |--------------------------------------------------------------------------
                | Suporta:
                | 1. Galeria antiga com uma única imagem
                | 2. Nova galeria com várias imagens em JSON
                |--------------------------------------------------------------------------
                */

                $imagens = json_decode($foto->imagem, true);

                if (!is_array($imagens)) {
                    $imagens = $foto->imagem
                        ? [$foto->imagem]
                        : [];
                }

                /*
                |--------------------------------------------------------------------------
                | Primeira imagem usada como capa do card
                |--------------------------------------------------------------------------
                */

                $imagemCapa = $imagens[0] ?? null;

                if ($imagemCapa) {

                    $imagemCapaUrl = str_contains($imagemCapa, 'imagem')
                        ? asset($imagemCapa)
                        : asset('storage/' . $imagemCapa);

                } else {

                    $imagemCapaUrl = asset('Beth.jpg');

                }

                $icones = [
                    0 => 'bi-camera-fill',
                    1 => 'bi-flask-fill',
                    2 => 'bi-mortarboard-fill',
                    3 => 'bi-book-fill',
                    4 => 'bi-stars',
                    5 => 'bi-lightbulb-fill',
                    6 => 'bi-journal-bookmark-fill',
                    7 => 'bi-people-fill'
                ];

                $iconeAtual = $icones[$key % 8];

            @endphp


            <div class="foto-card">

                <!-- FOTO DE CAPA -->

                <img
                    src="{{ $imagemCapaUrl }}"
                    alt="{{ $foto->titulo }}"
                >


                <!-- ÍCONE -->

                <div class="icone-foto">

                    <i class="bi {{ $iconeAtual }}"></i>

                </div>


                <!-- INFORMAÇÕES -->

                <div class="info">

                    <h3>
                        {{ $foto->titulo }}
                    </h3>

                    <p>
                        {{ $foto->descricao }}
                    </p>


                    <!-- LER MAIS -->

<a
    href="{{ route('professor.showGaleria', $foto->id) }}"
    class="btn-ler-mais"
>
    <i class="bi bi-eye-fill"></i>
    Ler mais
</a>

                </div>

            </div>


            <!-- =================================================
                 MODAL DE DETALHES
            ================================================== -->

            <div
                id="modalGaleria{{ $foto->id }}"
                class="modal-galeria"
            >

                <div class="modal-conteudo">


                    <!-- FECHAR -->

                    <button
                        type="button"
                        class="fechar-modal"
                        onclick="fecharDetalhesGaleria({{ $foto->id }})"
                    >

                        <i class="bi bi-x-lg"></i>

                    </button>


                    <!-- =================================================
                         CARROSSEL
                    ================================================== -->

                    <div
                        class="carrossel"
                        id="carrossel{{ $foto->id }}"
                    >

                        @foreach($imagens as $indice => $imagem)
@php

    $imagens = json_decode($foto->imagem, true);

    if (!is_array($imagens)) {
        $imagens = $foto->imagem
            ? [$foto->imagem]
            : [];
    }

    $imagens = array_filter($imagens);

    $imagemCapa = $imagens[0] ?? null;

    if ($imagemCapa) {

        $imagemCapaUrl = str_contains($imagemCapa, 'imagem')
            ? asset($imagemCapa)
            : asset('storage/' . $imagemCapa);

    } else {

        $imagemCapaUrl = asset('Beth.jpg');

    }

@endphp


                            <div
                                class="slide {{ $indice === 0 ? 'ativo' : '' }}"
                            >

@php
    $fotosGaleria = json_decode($foto->imagem, true);

    if (!is_array($fotosGaleria)) {
        $fotosGaleria = $foto->imagem
            ? [$foto->imagem]
            : [];
    }

    $fotosGaleria = array_values(
        array_filter($fotosGaleria)
    );

    $primeiraFoto = $fotosGaleria[0] ?? null;

    if ($primeiraFoto) {
        if (str_contains($primeiraFoto, 'imagem')) {
            $imagemUrl = asset($primeiraFoto);
        } else {
            $imagemUrl = asset('storage/' . $primeiraFoto);
        }
    } else {
        $imagemUrl = asset('imagem1.png');
    }
@endphp

<img 
    src="{{ $imagemUrl }}" 
    alt="{{ $foto->titulo }}"
>

                            </div>

                        @endforeach


                        @if(count($imagens) > 1)

                            <!-- ANTERIOR -->

                            <button
                                type="button"
                                class="btn-carrossel btn-anterior"
                                onclick="mudarSlide({{ $foto->id }}, -1)"
                            >

                                <i class="bi bi-chevron-left"></i>

                            </button>


                            <!-- PRÓXIMO -->

                            <button
                                type="button"
                                class="btn-carrossel btn-proximo"
                                onclick="mudarSlide({{ $foto->id }}, 1)"
                            >

                                <i class="bi bi-chevron-right"></i>

                            </button>


                            <!-- INDICADORES -->

                            <div class="indicadores">

                                @foreach($imagens as $indice => $imagem)

                                    <button
                                        type="button"
                                        class="indicador {{ $indice === 0 ? 'ativo' : '' }}"
                                        onclick="irParaSlide({{ $foto->id }}, {{ $indice }})"
                                    ></button>

                                @endforeach

                            </div>

                        @endif

                    </div>


                    <!-- =================================================
                         INFORMAÇÕES COMPLETAS
                    ================================================== -->

                    <div class="modal-info">

                        <h2>
                            {{ $foto->titulo }}
                        </h2>

                        <p>
                            {{ $foto->descricao }}
                        </p>


                        <div class="contador-fotos">

                            <i class="bi bi-images"></i>

                            {{ count($imagens) }}
                            {{ count($imagens) == 1 ? 'foto' : 'fotos' }}

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div
                class="vazio"
                style="
                    text-align:center;
                    width:100%;
                    padding:40px 0;
                "
            >

                <i
                    class="bi bi-camera"
                    style="
                        font-size:40px;
                        color:#ccc;
                    "
                ></i>

                <h3
                    style="
                        color:#666;
                        margin-top:15px;
                    "
                >
                    Nenhuma foto na galeria
                </h3>

                <p style="color:#999;">
                    O acervo de momentos está sendo atualizado pelos professores.
                </p>

            </div>

        @endforelse

    </section>


    <!-- =================================================
         MENSAGEM FINAL
    ================================================== -->

    <section class="mensagem-final">

        <div class="caixa-final">

            <i class="bi bi-camera-fill"></i>

            <h2>
                MOMENTOS QUE INSPIRAM!
            </h2>

            <p>
                Cada foto representa um momento de aprendizado,
                curiosidade e paixão pela ciência.
            </p>

        </div>

    </section>

</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <p>
        © 2026 Beth Cientista
    </p>

</footer>


<!-- =====================================================
     JAVASCRIPT DO MODAL E CARROSSEL
===================================================== -->

<script>

    /*
    |--------------------------------------------------------------------------
    | Guarda o slide atual de cada galeria
    |--------------------------------------------------------------------------
    */

    const slidesAtuais = {};


    /*
    |--------------------------------------------------------------------------
    | ABRIR MODAL
    |--------------------------------------------------------------------------
    */

    function abrirDetalhesGaleria(id) {

        const modal =
            document.getElementById(`modalGaleria${id}`);

        if (!modal) return;

        modal.classList.add('ativo');

        document.body.style.overflow = 'hidden';

        slidesAtuais[id] = 0;

        mostrarSlide(id, 0);

    }


    /*
    |--------------------------------------------------------------------------
    | FECHAR MODAL
    |--------------------------------------------------------------------------
    */

    function fecharDetalhesGaleria(id) {

        const modal =
            document.getElementById(`modalGaleria${id}`);

        if (!modal) return;

        modal.classList.remove('ativo');

        document.body.style.overflow = '';

    }


    /*
    |--------------------------------------------------------------------------
    | MOSTRAR SLIDE
    |--------------------------------------------------------------------------
    */

    function mostrarSlide(id, indice) {

        const carrossel =
            document.getElementById(`carrossel${id}`);

        if (!carrossel) return;

        const slides =
            carrossel.querySelectorAll('.slide');

        const indicadores =
            carrossel.querySelectorAll('.indicador');

        if (!slides.length) return;


        /*
        |--------------------------------------------------------------------------
        | Garante que o índice fique dentro dos limites
        |--------------------------------------------------------------------------
        */

        if (indice < 0) {
            indice = slides.length - 1;
        }

        if (indice >= slides.length) {
            indice = 0;
        }


        /*
        |--------------------------------------------------------------------------
        | Esconde todos os slides
        |--------------------------------------------------------------------------
        */

        slides.forEach(slide => {

            slide.classList.remove('ativo');

        });


        /*
        |--------------------------------------------------------------------------
        | Remove indicador ativo
        |--------------------------------------------------------------------------
        */

        indicadores.forEach(indicador => {

            indicador.classList.remove('ativo');

        });


        /*
        |--------------------------------------------------------------------------
        | Mostra o slide atual
        |--------------------------------------------------------------------------
        */

        slides[indice].classList.add('ativo');


        if (indicadores[indice]) {

            indicadores[indice].classList.add('ativo');

        }


        slidesAtuais[id] = indice;

    }


    /*
    |--------------------------------------------------------------------------
    | MUDAR SLIDE
    |--------------------------------------------------------------------------
    */

    function mudarSlide(id, direcao) {

        const atual =
            slidesAtuais[id] ?? 0;

        mostrarSlide(
            id,
            atual + direcao
        );

    }


    /*
    |--------------------------------------------------------------------------
    | IR DIRETAMENTE PARA UM SLIDE
    |--------------------------------------------------------------------------
    */

    function irParaSlide(id, indice) {

        mostrarSlide(
            id,
            indice
        );

    }


    /*
    |--------------------------------------------------------------------------
    | FECHAR CLICANDO FORA DO MODAL
    |--------------------------------------------------------------------------
    */

    document.addEventListener('click', function(event) {

        if (
            event.target.classList.contains('modal-galeria')
        ) {

            event.target.classList.remove('ativo');

            document.body.style.overflow = '';

        }

    });


    /*
    |--------------------------------------------------------------------------
    | FECHAR COM ESC
    |--------------------------------------------------------------------------
    */

    document.addEventListener('keydown', function(event) {

        if (event.key !== 'Escape') return;

        const modais =
            document.querySelectorAll('.modal-galeria.ativo');

        modais.forEach(modal => {

            modal.classList.remove('ativo');

        });

        document.body.style.overflow = '';

    });

</script>


</body>

</html>