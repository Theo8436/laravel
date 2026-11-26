
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Faça Parte - Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastro-escolha.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>

    @include('components.navbar')

    <main class="pagina-cadastro">

        <!-- Brilhos decorativos -->
        <div class="cadastro-brilhos">
            <span class="brilho brilho-1"></span>
            <span class="brilho brilho-2"></span>
            <span class="brilho brilho-3"></span>
            <span class="brilho brilho-4"></span>
            <span class="brilho brilho-5"></span>
            <span class="brilho brilho-6"></span>
            <span class="brilho brilho-7"></span>
            <span class="brilho brilho-8"></span>
            <span class="brilho brilho-9"></span>
            <span class="brilho brilho-10"></span>
            <span class="brilho brilho-11"></span>
            <span class="brilho brilho-12"></span>
        </div>

        <section class="cadastro-container">

            <div class="cadastro-card">

                <!-- Logo -->
                <div class="cadastro-logo">
                    <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
                </div>

                <!-- Etiqueta -->
                <span class="cadastro-etiqueta">
                    <i class="bi bi-stars"></i>
                    Faça parte dessa aventura!
                </span>

                <!-- Título -->
                <h1>CRIAR CONTA</h1>

                <p class="cadastro-descricao">
                    A ciência fica ainda mais incrível quando aprendemos juntos!
                    Escolha como deseja fazer parte da Beth Cientista.
                </p>

                <!-- Opções de cadastro -->
                <div class="cadastro-opcoes">

                    <!-- Aluno -->
                    <a href="{{ route('aluno.cadastro') }}"
                       class="cadastro-opcao opcao-aluno">

                        <div class="opcao-icone">
                            <i class="bi bi-backpack-fill"></i>
                        </div>

                        <div class="opcao-texto">
                            <h2>Sou Aluno</h2>
                            <span>Quero aprender e descobrir coisas novas!</span>
                        </div>

                        <i class="bi bi-arrow-right-circle-fill opcao-seta"></i>

                    </a>

                    <!-- Professor -->
                    <a href="{{ route('professor.cadastro') }}"
                       class="cadastro-opcao opcao-professor">

                        <div class="opcao-icone">
                            <i class="bi bi-mortarboard-fill"></i>
                        </div>

                        <div class="opcao-texto">
                            <h2>Sou Professor</h2>
                            <span>Quero ensinar e compartilhar conhecimento!</span>
                        </div>

                        <i class="bi bi-arrow-right-circle-fill opcao-seta"></i>

                    </a>

                </div>

                <!-- Rodapé do cartão -->
                <div class="cadastro-rodape">
                    <i class="bi bi-heart-fill"></i>
                    <span>Aprender, compartilhar e transformar o futuro!</span>
                </div>

            </div>

        </section>

    </main>

    @include('components.footer')

</body>
</html>
