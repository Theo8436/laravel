<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Livro | Beth Cientista</title>
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://jsdelivr.net">
    
    <style>
        *{ margin:0; padding:0; box-sizing:border-box; font-family:'Poppins',sans-serif; }
        body{ min-height:100vh; background: linear-gradient(180deg, #7000a8 0%, #b400d4 55%, #ef6c73 100%); color:white; }
        header{ width:100%; background:#ff7700; display:flex; justify-content:space-between; align-items:center; padding:12px 7%; box-shadow: 0 5px 15px rgba(0,0,0,.25); }
        .logo{ display:flex; align-items:center; gap:15px; }
        .logo img{ width:60px; height:60px; border-radius:50%; object-fit:cover; border:3px solid white; }
        main{ width:90%; max-width:600px; margin:40px auto 70px; }
        
        .container-detalhes { background: white; color: #222; padding: 40px; border-radius: 25px; box-shadow: 0 15px 40px rgba(0,0,0,0.3); }
        .container-detalhes h2 { color: #4b1d91; margin-bottom: 25px; text-align: center; font-weight: 800; }
        
        .campo { margin-bottom: 20px; }
        .campo label { display: block; font-weight: 700; margin-bottom: 8px; color: #333; }
        .campo input, .campo select { width: 100%; padding: 13px; border: 1px solid #ddd; background: #f9f9f9; border-radius: 12px; outline: none; font-size: 15px; color: #333; }
        .campo input:focus, .campo select:focus { background: white; box-shadow: 0 0 0 2px #ff7a00; }
        
        .botoes-gerenciamento { display: flex; gap: 15px; margin-top: 30px; }
        .btn-acao { flex: 1; border: none; padding: 14px; border-radius: 25px; font-weight: 700; cursor: pointer; text-align: center; font-size: 16px; text-decoration: none; display: inline-block; }
        
        .btn-atualizar { background: #ff7a00; color: white; }
        .btn-atualizar:hover { background: #ff9500; }
        .btn-deletar { background: #ef5350; color: white; }
        .btn-deletar:hover { background: #d32f2f; }
        
        .btn-voltar { display: block; text-align: center; margin-top: 20px; color: #ff7a00; font-weight: 600; text-decoration: none; }
        .btn-voltar:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <header>
        <div class="logo">
            <img src="{{ asset('Beth.jpg') }}" alt="Logo Beth Cientista">
            <h2>BETH CIENTISTA - PAINEL</h2>
        </div>
    </header>

    <main>
        <div class="container-detalhes">
            <h2><i class="bi bi-sliders"></i> Gerenciar Informações</h2>
            
            <!-- FORMULÁRIO DE EDIÇÃO -->
            <form action="{{ route('biblioteca.atualizar', $livro->id) }}" method="POST">
                @csrf
                
                <div class="campo">
                    <label>Título do Livro</label>
                    <input type="text" name="titulo" value="{{ $livro->titulo }}" required>
                </div>

                <div class="campo">
                    <label>Autor</label>
                    <input type="text" name="autor" value="{{ $livro->autor }}" required>
                </div>

                <div class="campo">
                    <label>Categoria Científica</label>
                    <select name="categoria" required>
                        <option value="Astronomia" {{ $livro->categoria == 'Astronomia' ? 'selected' : '' }}>Astronomia</option>
                        <option value="Biologia" {{ $livro->categoria == 'Biologia' ? 'selected' : '' }}>Biologia</option>
                        <option value="Química" {{ $livro->categoria == 'Química' ? 'selected' : '' }}>Química</option>
                        <option value="Física" {{ $livro->categoria == 'Física' ? 'selected' : '' }}>Física</option>
                        <option value="Outros" {{ $livro->categoria == 'Outros' ? 'selected' : '' }}>Outros</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Status do Acervo</label>
                    <select name="status" required>
                        <option value="Livre" {{ $livro->status == 'Livre' ? 'selected' : '' }}>Livre</option>
                        <option value="Emprestado" {{ $livro->status == 'Emprestado' ? 'selected' : '' }}>Emprestado</option>
                        <option value="Esgotado" {{ $livro->status == 'Esgotado' ? 'selected' : '' }}>Esgotado</option>
                    </select>
                </div>

                <div class="botoes-gerenciamento">
                    <button type="submit" class="btn-acao btn-atualizar"><i class="bi bi-check-circle"></i> Salvar Alterações</button>
            </form>

            <!-- FORMULÁRIO DE REMOÇÃO -->
            <form action="{{ route('biblioteca.remover', $livro->id) }}" method="POST" onsubmit="return confirm('Tem certeza absoluta de que deseja excluir permanentemente este livro do banco de dados?')">
                @csrf
                <button type="submit" class="btn-acao btn-deletar"><i class="bi bi-trash"></i> Excluir</button>
            </form>
            </div>

            <a href="{{ route('professor.biblioteca') }}" class="btn-voltar"><i class="bi bi-arrow-left"></i> Voltar para a Biblioteca</a>
        </div>
    </main>

</body>
</html>
