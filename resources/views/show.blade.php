<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $postagem->titulo }} | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
            background: white;
            color: #222;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        .voltar {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ff7700;
            text-decoration: none;
            font-weight: 700;
            margin-bottom: 25px;
            transition: .3s;
        }

        .voltar:hover {
            color: #ff9500;
            transform: translateX(-4px);
        }

        .topo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .topo i {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #ff8b00;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }

        .topo span {
            background: #ff8b00;
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        h1 {
            font-size: 34px;
            color: #222;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        h3 {
            color: #666;
            font-size: 18px;
            margin-bottom: 25px;
            font-weight: 500;
        }

        h3 strong {
            color: #ff7700;
        }

        .conteudo {
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            white-space: pre-line;
            border-top: 2px solid #f0f0f0;
            padding-top: 25px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="javascript:history.back()" class="voltar">
        <i class="bi bi-arrow-left"></i> Voltar para Menções Honrosas
    </a>

    <div class="topo">
        <i class="bi {{ $postagem->icone ?? 'bi-trophy-fill' }}"></i>
        <span>
            @if($postagem->data_reconhecimento)
                {{ \Carbon\Carbon::parse($postagem->data_reconhecimento)->format('d/m/Y') }}
            @else
                {{ $postagem->created_at ? $postagem->created_at->format('d/m/Y') : 'Data não informada' }}
            @endif
        </span>
    </div>

    <h1>{{ $postagem->titulo }}</h1>

    @if($postagem->autor)
        <h3>Reconhecimento para: <strong>{{ $postagem->autor }}</strong></h3>
    @elseif($postagem->categoria)
        <h3>Categoria: <strong>{{ $postagem->categoria }}</strong></h3>
    @endif

    <div class="conteudo">
        {{ $postagem->descricao ?? $postagem->comentario }}
    </div>
</div>

</body>
</html>