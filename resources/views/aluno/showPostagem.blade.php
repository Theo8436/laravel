<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $postagem->titulo }} | Beth Cientista</title>
    
    <!-- Fontes e Ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(180deg, #6f0ea7 0%, #b217c7 55%, #ea6b72 100%);
            color: #fff;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Botão Voltar */
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
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .btn-voltar:hover {
            background: #ff9500;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
        }

        /* Cartão Principal do Artigo */
        .artigo-card {
            background: #ffffff;
            color: #222222;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        .categoria-tag {
            display: inline-block;
            background: #eef2ff;
            color: #6f0ea7;
            font-weight: 700;
            font-size: 13px;
            padding: 6px 14px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .artigo-card h1 {
            font-size: 32px;
            color: #1a1a1a;
            margin-bottom: 12px;
            line-height: 1.3;
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-all;
        }

        .artigo-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #666;
            font-size: 14px;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 20px;
            margin-bottom: 25px;
        }

        .artigo-meta span {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Carrossel de Imagens */
        .carrossel-container {
            position: relative;
            width: 100%;
            max-height: 450px;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 30px;
            background: #000;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .slide-single img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            display: block;
        }

        .btn-seta {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.6);
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
            transition: background 0.2s ease, transform 0.2s ease;
            user-select: none;
            z-index: 10;
        }

        .btn-seta:hover {
            background: rgba(0, 0, 0, 0.9);
            transform: translateY(-50%) scale(1.1);
        }

        .btn-anterior { left: 15px; }
        .btn-proximo { right: 15px; }

        .indicador-contador {
            position: absolute;
            bottom: 12px;
            right: 15px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        /* Conteúdo do Texto */
        .artigo-conteudo {
            font-size: 17px;
            line-height: 1.8;
            color: #333;
            white-space: pre-line;
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-all;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- BOTÃO VOLTAR (Direciona de volta dinamicamente para a página de onde veio) -->
        <a href="javascript:history.back()" class="btn-voltar">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>

        <!-- CARTÃO DA PUBLICAÇÃO -->
        <article class="artigo-card">
            
            @if($postagem->categoria)
                <span class="categoria-tag">{{ $postagem->categoria }}</span>
            @endif

            <h1>{{ $postagem->titulo }}</h1>

            <div class="artigo-meta">
                <span><i class="bi bi-person-circle"></i> {{ $postagem->user->nome ?? 'Anônimo' }}</span>
                <span><i class="bi bi-calendar3"></i> {{ $postagem->created_at ? $postagem->created_at->format('d/m/Y') : 'Data não informada' }}</span>
            </div>

            <!-- CARROSSEL DE IMAGENS -->
            @if($postagem->imagem)
                @php
                    $fotos = json_decode($postagem->imagem, true) ?? [];
                    if (!is_array($fotos)) {
                        $fotos = [$postagem->imagem];
                    }
                @endphp

                @if(count($fotos) > 0)
                    <div id="carrossel-single" class="carrossel-container" data-index="0">
                        <div>
                            @foreach($fotos as $idx => $foto)
                                <div class="slide-single" {{ $idx !== 0 ? 'hidden' : '' }}>
                                    <img src="{{ asset('storage/' . $foto) }}" alt="Foto {{ $idx + 1 }}">
                                </div>
                            @endforeach
                        </div>

                        @if(count($fotos) > 1)
                            <button type="button" class="btn-seta btn-anterior" onclick="moverSlideShow(-1)">❮</button>
                            <button type="button" class="btn-seta btn-proximo" onclick="moverSlideShow(1)">❯</button>
                            <span id="indicador-show" class="indicador-contador">1 / {{ count($fotos) }}</span>
                        @endif
                    </div>
                @endif
            @endif

            <!-- CONTEÚDO COMPLETO -->
            <div class="artigo-conteudo">
                {!! nl2br(e($postagem->comentario)) !!}
            </div>

        </article>
    </div>

    <script>
        function moverSlideShow(direcao) {
            const container = document.getElementById('carrossel-single');
            const slides = container.querySelectorAll('.slide-single');
            const indicador = document.getElementById('indicador-show');
            
            let indexAtual = parseInt(container.getAttribute('data-index')) || 0;
            slides[indexAtual].hidden = true;

            indexAtual += direcao;

            if (indexAtual >= slides.length) {
                indexAtual = 0;
            } else if (indexAtual < 0) {
                indexAtual = slides.length - 1;
            }

            slides[indexAtual].hidden = false;
            container.setAttribute('data-index', indexAtual);

            if (indicador) {
                indicador.innerText = (indexAtual + 1) + ' / ' + slides.length;
            }
        }
    </script>

</body>
</html>