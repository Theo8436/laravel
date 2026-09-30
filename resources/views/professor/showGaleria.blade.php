<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $galeria->titulo }} | Beth Cientista</title>

    <!-- FONTE -->

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- ÍCONES -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {

            background:
                linear-gradient(
                    180deg,
                    #6f0ea7 0%,
                    #b217c7 55%,
                    #ea6b72 100%
                );

            color: #fff;

            min-height: 100vh;

            padding: 40px 20px;

        }


        .container {

            max-width: 800px;

            margin: 0 auto;

        }


        /* =====================================================
           BOTÃO VOLTAR
        ===================================================== */

        .btn-voltar {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            background: #ff7700;

            color: #fff;

            text-decoration: none;

            padding: 10px 22px;

            border-radius: 25px;

            font-weight: 600;

            font-size: 15px;

            margin-bottom: 25px;

            box-shadow:
                0 4px 12px rgba(0,0,0,0.2);

            transition: all 0.3s ease;

        }

        .btn-voltar:hover {

            background: #ff9500;

            transform: translateY(-2px);

            box-shadow:
                0 6px 15px rgba(0,0,0,0.3);

        }


        /* =====================================================
           CARD PRINCIPAL
        ===================================================== */

        .galeria-card {

            background: #ffffff;

            color: #222222;

            padding: 40px;

            border-radius: 24px;

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.25);

        }


        /* =====================================================
           TÍTULO
        ===================================================== */

        .galeria-card h1 {

            font-size: 32px;

            color: #1a1a1a;

            margin-bottom: 12px;

            line-height: 1.3;

            word-wrap: break-word;

            overflow-wrap: break-word;

        }


        /* =====================================================
           META
        ===================================================== */

        .galeria-meta {

            display: flex;

            align-items: center;

            gap: 15px;

            color: #666;

            font-size: 14px;

            border-bottom:
                1px solid #f0f0f0;

            padding-bottom: 20px;

            margin-bottom: 25px;

        }

        .galeria-meta span {

            display: flex;

            align-items: center;

            gap: 6px;

        }


        /* =====================================================
           CARROSSEL
        ===================================================== */

        .carrossel-container {

            position: relative;

            width: 100%;

            max-height: 450px;

            border-radius: 16px;

            overflow: hidden;

            margin-bottom: 30px;

            background: #000;

            box-shadow:
                0 8px 20px rgba(0,0,0,0.15);

        }


        .slide-single {

            width: 100%;

        }


        .slide-single img {

            width: 100%;

            height: 450px;

            object-fit: cover;

            display: block;

        }


        /* =====================================================
           SETAS
        ===================================================== */

        .btn-seta {

            position: absolute;

            top: 50%;

            transform: translateY(-50%);

            background:
                rgba(0, 0, 0, 0.6);

            color: #fff;

            border: none;

            border-radius: 50%;

            width: 42px;

            height: 42px;

            cursor: pointer;

            font-size: 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            transition:
                background 0.2s ease,
                transform 0.2s ease;

            user-select: none;

            z-index: 10;

        }


        .btn-seta:hover {

            background:
                rgba(0, 0, 0, 0.9);

            transform:
                translateY(-50%)
                scale(1.1);

        }


        .btn-anterior {

            left: 15px;

        }


        .btn-proximo {

            right: 15px;

        }


        /* =====================================================
           CONTADOR
        ===================================================== */

        .indicador-contador {

            position: absolute;

            bottom: 12px;

            right: 15px;

            background:
                rgba(0, 0, 0, 0.7);

            color: #fff;

            padding: 4px 12px;

            border-radius: 20px;

            font-size: 13px;

            font-weight: 600;

        }


        /* =====================================================
           CONTEÚDO
        ===================================================== */

        .galeria-conteudo {

            font-size: 17px;

            line-height: 1.8;

            color: #333;

            white-space: pre-line;

            word-wrap: break-word;

            overflow-wrap: break-word;

        }


        /* =====================================================
           ÍCONE FINAL
        ===================================================== */

        .quantidade-fotos {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            margin-top: 20px;

            padding: 7px 14px;

            background: #f1e5ff;

            color: #6f0ea7;

            border-radius: 20px;

            font-size: 13px;

            font-weight: 600;

        }


        /* =====================================================
           RESPONSIVO
        ===================================================== */

        @media(max-width: 600px) {

            body {

                padding:
                    25px 12px;

            }

            .galeria-card {

                padding: 25px;

                border-radius: 20px;

            }

            .galeria-card h1 {

                font-size: 26px;

            }

            .slide-single img {

                height: 300px;

            }

            .btn-seta {

                width: 38px;

                height: 38px;

            }

            .galeria-meta {

                flex-direction: column;

                align-items: flex-start;

            }

        }

    </style>

</head>


<body>

<div class="container">


    <!-- =====================================================
         VOLTAR
    ===================================================== -->

    <a
        href="javascript:history.back()"
        class="btn-voltar"
    >

        <i class="bi bi-arrow-left"></i>

        Voltar

    </a>


    <!-- =====================================================
         CARD DA GALERIA
    ===================================================== -->

    <article class="galeria-card">


        <!-- TÍTULO -->

        <h1>
            {{ $galeria->titulo }}
        </h1>


        <!-- META -->

        <div class="galeria-meta">

            <span>

                <i class="bi bi-images"></i>

                Galeria de Fotos

            </span>


            <span>

                <i class="bi bi-calendar3"></i>

                {{ $galeria->created_at
                    ? $galeria->created_at->format('d/m/Y')
                    : 'Data não informada'
                }}

            </span>

        </div>


        <!-- =================================================
             IMAGENS
        ================================================== -->

        @php

            /*
            |--------------------------------------------------------------------------
            | Compatibilidade com:
            |
            | 1. Registro antigo:
            |    imagem1.png
            |
            | 2. Registro novo:
            |    ["galeria/foto1.jpg","galeria/foto2.jpg"]
            |--------------------------------------------------------------------------
            */

            $fotos = json_decode(
                $galeria->imagem,
                true
            );

            if (!is_array($fotos)) {

                $fotos = $galeria->imagem
                    ? [$galeria->imagem]
                    : [];

            }

            $fotos = array_values(
                array_filter($fotos)
            );

        @endphp


        @if(count($fotos) > 0)


            <div
                id="carrossel-single"
                class="carrossel-container"
                data-index="0"
            >


                @foreach($fotos as $idx => $foto)

    @php
        if (str_contains($foto, 'imagem')) {
            $imagemUrl = asset($foto);
        } else {
            $imagemUrl = asset('storage/' . $foto);
        }
    @endphp

    <div
        class="slide-single"
        {{ $idx != 0 ? 'hidden' : '' }}
    >

        <img
            src="{{ $imagemUrl }}"
            alt="{{ $galeria->titulo }} - Foto {{ $idx + 1 }}"
        >

    </div>

@endforeach


                @if(count($fotos) > 1)


                    <!-- ANTERIOR -->

                    <button
                        type="button"
                        class="btn-seta btn-anterior"
                        onclick="moverSlideShow(-1)"
                    >

                        <i class="bi bi-chevron-left"></i>

                    </button>


                    <!-- PRÓXIMO -->

                    <button
                        type="button"
                        class="btn-seta btn-proximo"
                        onclick="moverSlideShow(1)"
                    >

                        <i class="bi bi-chevron-right"></i>

                    </button>


                    <!-- CONTADOR -->

                    <span
                        id="indicador-show"
                        class="indicador-contador"
                    >

                        1 / {{ count($fotos) }}

                    </span>

                @endif


            </div>

        @endif


        <!-- =================================================
             DESCRIÇÃO COMPLETA
        ================================================== -->

        <div class="galeria-conteudo">

            {!! nl2br(e($galeria->descricao)) !!}

        </div>


        <!-- =================================================
             QUANTIDADE DE FOTOS
        ================================================== -->

        @if(count($fotos) > 0)

            <div class="quantidade-fotos">

                <i class="bi bi-images"></i>

                {{ count($fotos) }}

                {{ count($fotos) == 1 ? 'foto' : 'fotos' }}

            </div>

        @endif


    </article>

</div>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

    function moverSlideShow(direcao) {

        const container =
            document.getElementById(
                'carrossel-single'
            );

        if (!container) return;


        const slides =
            container.querySelectorAll(
                '.slide-single'
            );


        const indicador =
            document.getElementById(
                'indicador-show'
            );


        if (slides.length <= 1) return;


        let indexAtual =
            parseInt(
                container.getAttribute(
                    'data-index'
                )
            ) || 0;


        slides[indexAtual].hidden = true;


        indexAtual += direcao;


        if (indexAtual >= slides.length) {

            indexAtual = 0;

        }

        else if (indexAtual < 0) {

            indexAtual =
                slides.length - 1;

        }


        slides[indexAtual].hidden = false;


        container.setAttribute(
            'data-index',
            indexAtual
        );


        if (indicador) {

            indicador.innerText =
                (indexAtual + 1)
                + ' / '
                + slides.length;

        }

    }

</script>


</body>

</html>