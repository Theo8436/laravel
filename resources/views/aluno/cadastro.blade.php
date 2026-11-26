
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Aluno | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>

<body>

    <main class="pagina-cadastro">

        <div class="cadastro-brilhos" aria-hidden="true">
            @for ($i = 1; $i <= 12; $i++)
                <span class="brilho brilho-{{ $i }}"></span>
            @endfor
        </div>

        <div class="cadastro-container">

            <section class="cadastro-card">

                <div class="cadastro-logo">
                    <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
                </div>

                <div class="cadastro-etiqueta">
                    <i class="bi bi-stars"></i>
                    Faça parte da nossa comunidade
                </div>

                <h1>Cadastro de Aluno</h1>

                <p class="cadastro-descricao">
                    Crie sua conta e comece sua jornada pelo mundo da ciência!
                </p>

                @if ($errors->any())
                    <div class="cadastro-mensagem" role="alert">
                        <i class="bi bi-exclamation-triangle-fill"></i>

                        <div>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif

                <form action="{{ route('aluno.adicionar') }}" method="POST">
                    @csrf

                    <div class="campo">
                        <label for="nome">Nome completo</label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            value="{{ old('nome') }}"
                            placeholder="Digite seu nome completo"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="email">E-mail</label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="seu.email@exemplo.com"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="senha">Senha</label>

                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            required
                        >
                    </div>

                    <div class="campo">
                        <label for="nivel_acesso">Tipo de aluno</label>

                        <select id="nivel_acesso" name="nivel_acesso" required>
                            <option value="" disabled {{ old('nivel_acesso') == '' ? 'selected' : '' }}>
                                Selecione seu tipo de aluno
                            </option>

                            <option value="clubista" {{ old('nivel_acesso') == 'clubista' ? 'selected' : '' }}>
                                Aluno Clubista
                            </option>

                            <option value="monitor" {{ old('nivel_acesso') == 'monitor' ? 'selected' : '' }}>
                                Aluno Monitor
                            </option>
                        </select>
                    </div>

                    <div class="cadastro-botoes">

                        <a href="{{ route('escolha') }}" class="btn-voltar">
                            <i class="bi bi-arrow-left"></i>
                            Voltar
                        </a>

                        <button type="submit" class="btn-cadastrar">
                            <i class="bi bi-person-plus-fill"></i>
                            Cadastrar aluno
                        </button>

                    </div>

                </form>

                <div class="cadastro-rodape">
                    <i class="bi bi-heart-fill"></i>
                    Aprender, descobrir e transformar através da ciência!
                </div>

            </section>

        </div>

    </main>

</body>
</html>
