<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Menção | Painel do Professor</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(180deg, #6f0ea7 0%, #b217c7 55%, #ea6b72 100%); color: #fff; min-height: 100vh; padding: 40px 20px; }
        .container { max-width: 700px; margin: 0 auto; background: white; color: #222; padding: 35px; border-radius: 25px; box-shadow: 0 15px 35px rgba(0,0,0,0.25); }
        h2 { color: #7b1fa2; margin-bottom: 25px; text-align: center; }
        .campo { margin-bottom: 18px; }
        .campo label { display: block; font-weight: 700; color: #333; margin-bottom: 7px; }
        .campo input, .campo textarea, .campo select { width: 100%; padding: 13px 15px; border: 2px solid #e3e3e3; border-radius: 12px; font-size: 15px; outline: none; }
        .campo textarea { min-height: 120px; resize: vertical; }
        .botoes { display: flex; gap: 15px; margin-top: 25px; }
        .btn-salvar, .btn-cancelar { flex: 1; padding: 14px; border-radius: 30px; font-size: 16px; font-weight: 700; cursor: pointer; text-align: center; text-decoration: none; border: none; }
        .btn-salvar { background: #ff7700; color: white; }
        .btn-cancelar { background: #ececec; color: #555; }
    </style>
</head>
<body>

<div class="container">
    <h2>Editar Menção Honrosa</h2>

    <form action="{{ route('mencao.update', $mencao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="campo">
            <label for="titulo">Título da conquista</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $mencao->titulo) }}" required>
        </div>

        <div class="campo">
            <label for="autor">Nome do Clubista</label>
            <input type="text" name="autor" id="autor" value="{{ old('autor', $mencao->autor) }}" required>
        </div>

        <div class="campo">
            <label for="data_reconhecimento">Data de reconhecimento</label>
            <input type="date" name="data_reconhecimento" id="data_reconhecimento" value="{{ old('data_reconhecimento', $mencao->data_reconhecimento) }}" required>
        </div>

        <div class="campo">
            <label for="icone">Tipo de conquista</label>
            <select name="icone" id="icone">
                <option value="bi-trophy-fill" {{ $mencao->icone == 'bi-trophy-fill' ? 'selected' : '' }}>Troféu</option>
                <option value="bi-award-fill" {{ $mencao->icone == 'bi-award-fill' ? 'selected' : '' }}>Medalha / Prêmio</option>
                <option value="bi-star-fill" {{ $mencao->icone == 'bi-star-fill' ? 'selected' : '' }}>Destaque</option>
                <option value="bi-lightbulb-fill" {{ $mencao->icone == 'bi-lightbulb-fill' ? 'selected' : '' }}>Projeto Científico</option>
                <option value="bi-person-fill-check" {{ $mencao->icone == 'bi-person-fill-check' ? 'selected' : '' }}>Reconhecimento</option>
            </select>
        </div>

        <div class="campo">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" required>{{ old('descricao', $mencao->descricao) }}</textarea>
        </div>

        <div class="botoes">
            <a href="{{ route('professor.mencao') }}" class="btn-cancelar">Cancelar</a>
            <button type="submit" class="btn-salvar">
                <i class="bi bi-check-circle-fill"></i> Atualizar Menção
            </button>
        </div>
    </form>
</div>

</body>
</html>