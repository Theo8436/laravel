<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#8614a4">
    <meta name="description" content="Doe livros para a Biblioteca Beth Cientista e ajude a ampliar o acesso à divulgação científica.">
    <title>Doe um Livro | Beth Cientista</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/beth-logo.jpeg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&family=Kavoon&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/doacao.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body class="pagina-doacao">
    @include('components.navbar')

    <main class="doacao-page">
        <div class="doacao-grain" aria-hidden="true"></div>
        <div class="doacao-sparkles" aria-hidden="true">
            @for ($i = 0; $i < 15; $i++)
                <span class="doacao-sparkle sparkle-{{ $i + 1 }}"></span>
            @endfor
        </div>

        <div class="doacao-container">
            <a href="{{ route('biblioteca') }}" class="doacao-back">
                <i class="bi bi-arrow-left" aria-hidden="true"></i>
                Voltar para Biblioteca
            </a>

            <header class="doacao-heading">
                <h1>Doe um Livro!</h1>
                <p>Ajude a expandir nossa biblioteca científica!</p>
            </header>

            <section class="doacao-contact-card" aria-labelledby="doacao-contact-title">
                <span class="contact-decoration decor-star" aria-hidden="true"><i class="bi bi-star-fill"></i></span>
                <span class="contact-decoration decor-sparkles" aria-hidden="true"><i class="bi bi-stars"></i></span>
                <span class="contact-decoration decor-book" aria-hidden="true"><i class="bi bi-book"></i></span>
                <span class="contact-decoration decor-heart" aria-hidden="true"><i class="bi bi-heart-fill"></i></span>

                <div class="doacao-main-icon" aria-hidden="true"><i class="bi bi-chat-dots-fill"></i></div>
                <h2 id="doacao-contact-title">Entre em Contato!</h2>
                <p class="doacao-contact-subtitle">Fale conosco pelo WhatsApp</p>
                <p class="doacao-contact-text">
                    Tem livros científicos que gostaria de compartilhar com outros clubistas?
                    Entre em contato conosco para combinar a entrega e ajudar nossa biblioteca a crescer.
                </p>
                <a class="doacao-whatsapp" href="https://wa.me/5515996120897?text={{ rawurlencode('Olá! Gostaria de doar livros para a Biblioteca Beth Cientista! 📚') }}" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                    Abrir WhatsApp
                </a>
            </section>

            <section class="doacao-info-grid" aria-label="Informações sobre doações">
                <article class="doacao-info-card">
                    <div class="doacao-info-icon" aria-hidden="true"><i class="bi bi-book-half"></i></div>
                    <h2>Livros Aceitos</h2>
                    <p>Livros científicos<br>Divulgação científica<br>Biografias de cientistas</p>
                </article>
                <article class="doacao-info-card">
                    <div class="doacao-info-icon" aria-hidden="true"><i class="bi bi-box-seam"></i></div>
                    <h2>Como Doar</h2>
                    <p>1. Entre em contato<br>2. Informe os livros<br>3. Combine a entrega</p>
                </article>
                <article class="doacao-info-card">
                    <div class="doacao-info-icon" aria-hidden="true"><i class="bi bi-heart-fill"></i></div>
                    <h2>Seu Impacto</h2>
                    <p>Inspire jovens<br>Apoie a ciência<br>Transforme vidas</p>
                </article>
            </section>

            <section class="doacao-thanks">
                <h2>Obrigado!</h2>
                <p>Cada livro doado é uma nova oportunidade de aprendizado para nossos clubistas!</p>
            </section>
        </div>
    </main>

    @include('components.footer')
</body>
</html>
