<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login de Professor | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>

<body>

    <main class="pagina-cadastro">

        <!-- Brilhos decorativos -->
        <div class="cadastro-brilhos" aria-hidden="true">
            @for ($i = 1; $i <= 12; $i++)
                <span class="brilho brilho-{{ $i }}"></span>
            @endfor
        </div>

        <div class="cadastro-container">

            <section class="cadastro-card">

                <!-- Logo -->
                <div class="cadastro-logo">
                    <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
                </div>

                <!-- Etiqueta -->
                <div class="cadastro-etiqueta">
                    <i class="bi bi-stars"></i>
                    A ciência também precisa de você!
                </div>

                <!-- Título -->
                <h1>ÁREA DO PROFESSOR</h1>

                <!-- Descrição -->
                <p class="cadastro-descricao">
                    Acesse sua conta e continue inspirando
                    novas descobertas através da ciência!
                </p>

                <!-- Mensagens de erro -->
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

                <!-- Formulário de login -->
                <form action="{{ route('logar') }}" method="POST">
                    @csrf

                    <!-- E-mail -->
                    <div class="campo">

                        <label for="email">
                            <i class="bi bi-envelope-fill"></i>
                            E-mail
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="seu.email@exemplo.com"
                            required
                        >

                    </div>

                    <!-- Senha -->
                    <div class="campo">

                        <label for="senha">
                            <i class="bi bi-lock-fill"></i>
                            Senha
                        </label>

                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            required
                        >

                    </div>

                    <!-- Código exclusivo -->
                    <div class="campo">

                        <label for="code">
                            <i class="bi bi-shield-lock-fill"></i>
                            Código exclusivo de professor
                        </label>

                        <input
                            type="text"
                            id="code"
                            name="code"
                            placeholder="Digite seu código de acesso"
                        >

                    </div>

                    <!-- Botões -->
                    <div class="cadastro-botoes">

                        <a href="{{ route('escolha') }}" class="btn-voltar">
                            <i class="bi bi-arrow-left"></i>
                            Voltar
                        </a>

                        <button type="submit" class="btn-cadastrar">
                            <i class="bi bi-box-arrow-in-right"></i>
                            Entrar na conta
                        </button>

                    </div>

                </form>

                <!-- Rodapé -->
                <div class="cadastro-rodape">
                    <i class="bi bi-heart-fill"></i>
                    Aprender, descobrir e transformar através da ciência!
                </div>

            </section>

        </div>

    </main>

</body>
</html>