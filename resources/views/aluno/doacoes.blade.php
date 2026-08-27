```blade
@extends('layouts.app')

@section('title', 'Quero Doar')

@section('content')

<div class="doacoes-page">

    {{-- Textura --}}
    <div class="doacoes-grain"></div>

    {{-- Estrelas / partículas --}}
    <div class="doacoes-sparkles" aria-hidden="true">
        <span style="top: 8%; left: 12%; animation-delay: .3s;"></span>
        <span style="top: 18%; left: 78%; animation-delay: 1.2s;"></span>
        <span style="top: 31%; left: 42%; animation-delay: .8s;"></span>
        <span style="top: 44%; left: 91%; animation-delay: 2s;"></span>
        <span style="top: 55%; left: 7%; animation-delay: 1.6s;"></span>
        <span style="top: 67%; left: 25%; animation-delay: .5s;"></span>
        <span style="top: 73%; left: 68%; animation-delay: 2.3s;"></span>
        <span style="top: 82%; left: 48%; animation-delay: 1.1s;"></span>
        <span style="top: 91%; left: 87%; animation-delay: .7s;"></span>
        <span style="top: 37%; left: 18%; animation-delay: 1.9s;"></span>
        <span style="top: 61%; left: 82%; animation-delay: 2.5s;"></span>
        <span style="top: 12%; left: 55%; animation-delay: 1.4s;"></span>
        <span style="top: 49%; left: 59%; animation-delay: .9s;"></span>
        <span style="top: 88%; left: 16%; animation-delay: 2.1s;"></span>
        <span style="top: 26%; left: 4%; animation-delay: 1.7s;"></span>
    </div>
<style>
    
@import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Kavoon&family=Fredoka:wght@400;500;600;700&display=swap');


/* =========================================================
   PÁGINA
   ========================================================= */

.doacoes-page {
    min-height: 100vh;
    position: relative;
    overflow: hidden;

    padding: 48px 0;

    background:
        linear-gradient(
            135deg,
            #58127d 0%,
            #bc10c0 48%,
            #f97316 100%
        );

    font-family: 'Fredoka', sans-serif;
}


/* =========================================================
   TEXTURA
   ========================================================= */

.doacoes-grain {
    position: absolute;
    inset: 0;

    pointer-events: none;

    opacity: .50;

    mix-blend-mode: overlay;

    background-image:
        url("data:image/svg+xml,%3Csvg width='200' height='200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' /%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.15'/%3E%3C/svg%3E");
}


/* =========================================================
   PARTÍCULAS
   ========================================================= */

.doacoes-sparkles {
    position: absolute;
    inset: 0;

    pointer-events: none;
}

.doacoes-sparkles span {
    position: absolute;

    width: 8px;
    height: 8px;

    border-radius: 50%;

    background: white;

    opacity: .5;

    animation:
        sparkle 2s ease-in-out infinite;
}


/* =========================================================
   CONTAINER
   ========================================================= */

.doacoes-container {
    position: relative;
    z-index: 10;

    width: min(100% - 64px, 1024px);

    margin: 0 auto;
}


/* =========================================================
   VOLTAR
   ========================================================= */

.back-library-button {
    display: inline-flex;

    align-items: center;

    gap: 8px;

    margin-bottom: 24px;

    padding: 12px 20px;

    border: 2px solid rgba(255, 255, 255, .30);

    border-radius: 12px;

    background: rgba(255, 255, 255, .10);

    backdrop-filter: blur(8px);

    color: white;

    text-decoration: none;

    font-size: 16px;

    font-weight: 700;

    box-shadow:
        0 10px 25px rgba(0, 0, 0, .10);

    transition:
        transform .3s ease,
        background .3s ease;
}

.back-library-button:hover {
    transform: scale(1.05);

    background: rgba(255, 255, 255, .20);
}


/* =========================================================
   CABEÇALHO
   ========================================================= */

.doacoes-header {
    text-align: center;

    margin-bottom: 48px;
}

.doacoes-header h1 {
    margin: 0 0 16px;

    color: white;

    font-family: 'Luckiest Guy', cursive;

    font-size: clamp(48px, 7vw, 64px);

    line-height: 1;

    letter-spacing: -.02em;

    text-shadow:
        0 5px 0 rgba(88, 18, 125, .35),
        0 10px 25px rgba(0, 0, 0, .30);
}

.doacoes-header p {
    margin: 0;

    color: #ffedd5;

    font-size: clamp(20px, 3vw, 26px);

    font-weight: 700;
}


/* =========================================================
   CARD WHATSAPP
   ========================================================= */

.whatsapp-card {
    position: relative;

    overflow: hidden;

    margin-bottom: 32px;

    padding: 40px;

    text-align: center;

    border: 2px solid rgba(255, 255, 255, .30);

    border-radius: 24px;

    background: rgba(255, 255, 255, .20);

    backdrop-filter: blur(16px);

    box-shadow:
        0 25px 60px rgba(0, 0, 0, .25);

    transition:
        transform .35s ease;
}

.whatsapp-card:hover {
    transform: scale(1.05);
}


/* Glow */

.card-hover-glow {
    position: absolute;

    inset: -3px;

    z-index: -1;

    border-radius: 26px;

    background:
        linear-gradient(
            90deg,
            #bc10c0,
            #fb923c
        );

    filter: blur(20px);

    opacity: 0;

    transition:
        opacity .4s ease;
}

.whatsapp-card:hover .card-hover-glow {
    opacity: .40;
}


/* =========================================================
   ELEMENTOS DECORATIVOS
   ========================================================= */

.decorative-star,
.decorative-sparkle,
.decorative-book,
.decorative-heart {
    position: absolute;

    width: 32px;
    height: 32px;
}

.decorative-star {
    top: 16px;
    left: 32px;

    color: #fde047;

    animation:
        sparkle 2s ease-in-out infinite;
}

.decorative-sparkle {
    top: 16px;
    right: 32px;

    color: #fdba74;

    animation:
        sparkle 2s ease-in-out infinite;

    animation-delay: .5s;
}

.decorative-book {
    bottom: 16px;
    left: 32px;

    color: #d8b4fe;

    opacity: .30;
}

.decorative-heart {
    right: 32px;
    bottom: 16px;

    color: #f9a8d4;

    animation:
        pulseGrow 2s ease-in-out infinite;

    animation-delay: 1s;
}


/* =========================================================
   ÍCONE WHATSAPP
   ========================================================= */

.whatsapp-icon {
    width: 80px;
    height: 80px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin: 0 auto 16px;

    border-radius: 50%;

    background: #fb923c;

    box-shadow:
        0 15px 30px rgba(0, 0, 0, .25);

    animation:
        pulseGrow 2s ease-in-out infinite;
}

.whatsapp-icon svg {
    width: 48px;
    height: 48px;

    color: white;
}


/* =========================================================
   TÍTULO DO CARD
   ========================================================= */

.whatsapp-card h2 {
    position: relative;

    margin: 0 0 8px;

    color: white;

    font-family: 'Luckiest Guy', cursive;

    font-size: 36px;

    line-height: 1;

    text-shadow:
        0 5px 15px rgba(0, 0, 0, .30);
}

.whatsapp-description {
    margin: 0 0 24px;

    color: rgba(255, 255, 255, .80);

    font-size: 16px;

    font-weight: 700;

    text-shadow:
        0 3px 8px rgba(0, 0, 0, .25);
}


/* =========================================================
   BOTÃO WHATSAPP
   ========================================================= */

.whatsapp-button {
    position: relative;
    z-index: 10;

    display: inline-flex;

    align-items: center;
    justify-content: center;

    gap: 12px;

    min-height: 80px;

    padding: 0 48px;

    border-radius: 999px;

    background: #22c55e;

    color: white;

    text-decoration: none;

    font-size: 26px;

    font-weight: 700;

    box-shadow:
        0 20px 35px rgba(0, 0, 0, .25);

    transition:
        transform .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}

.whatsapp-button:hover {
    background: #16a34a;

    transform: scale(1.10);

    box-shadow:
        0 25px 45px rgba(0, 0, 0, .30);
}

.whatsapp-button svg {
    width: 32px;
    height: 32px;
}


/* =========================================================
   GRID
   ========================================================= */

.donation-info-grid {
    display: grid;

    grid-template-columns:
        repeat(3, minmax(0, 1fr));

    gap: 24px;

    margin-bottom: 32px;
}


/* =========================================================
   INFO CARD
   ========================================================= */

.info-card {
    position: relative;

    overflow: hidden;

    padding: 24px;

    text-align: center;

    border: 2px solid rgba(255, 255, 255, .30);

    border-radius: 24px;

    background: rgba(255, 255, 255, .20);

    backdrop-filter: blur(16px);

    box-shadow:
        0 15px 35px rgba(0, 0, 0, .20);

    transition:
        transform .35s ease;
}

.info-card:hover {
    transform: scale(1.05);
}

.info-card-glow {
    position: absolute;

    inset: -3px;

    z-index: -1;

    border-radius: 26px;

    background:
        linear-gradient(
            90deg,
            #bc10c0,
            #fb923c
        );

    filter: blur(18px);

    opacity: 0;

    transition:
        opacity .4s ease;
}

.info-card:hover .info-card-glow {
    opacity: .40;
}


/* =========================================================
   ÍCONES
   ========================================================= */

.info-icon {
    width: 64px;
    height: 64px;

    display: flex;

    align-items: center;
    justify-content: center;

    margin: 0 auto 12px;

    border-radius: 50%;

    background: #fb923c;

    box-shadow:
        0 10px 20px rgba(0, 0, 0, .20);

    transition:
        transform .3s ease;
}

.info-card:hover .info-icon {
    transform: scale(1.08) rotate(-3deg);
}

.info-icon svg {
    width: 40px;
    height: 40px;

    color: white;
}


/* =========================================================
   TEXTOS
   ========================================================= */

.info-card h3 {
    margin: 0 0 12px;

    color: white;

    font-family: 'Luckiest Guy', cursive;

    font-size: 24px;

    text-shadow:
        0 5px 12px rgba(0, 0, 0, .30);
}

.info-card p {
    margin: 0;

    color: rgba(255, 255, 255, .90);

    font-size: 16px;

    line-height: 1.7;

    font-weight: 700;

    text-shadow:
        0 3px 8px rgba(0, 0, 0, .25);
}


/* =========================================================
   AGRADECIMENTO
   ========================================================= */

.thank-you {
    position: relative;

    overflow: hidden;

    padding: 40px;

    text-align: center;

    border: 1px solid rgba(255, 255, 255, .30);

    border-radius: 24px;

    background: rgba(255, 255, 255, .10);

    backdrop-filter: blur(20px);

    box-shadow:
        0 20px 50px rgba(0, 0, 0, .25);
}

.thank-you-glow {
    position: absolute;

    inset: -2px;

    z-index: -1;

    border-radius: 26px;

    background:
        linear-gradient(
            90deg,
            #bc10c0,
            #fb923c
        );

    filter: blur(15px);

    opacity: .20;
}

.thank-you h2 {
    position: relative;

    margin: 0 0 16px;

    color: white;

    font-family: 'Luckiest Guy', cursive;

    font-size: 42px;

    text-shadow:
        0 5px 15px rgba(0, 0, 0, .30);
}

.thank-you p {
    position: relative;

    margin: 0;

    color: #fed7aa;

    font-size: 20px;

    font-weight: 700;
}


/* =========================================================
   ANIMAÇÕES
   ========================================================= */

@keyframes pulseGrow {

    0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }
}

@keyframes sparkle {

    0%,
    100% {
        opacity: .3;
        transform: scale(.8);
    }

    50% {
        opacity: 1;
        transform: scale(1.2);
    }
}


/* =========================================================
   RESPONSIVIDADE
   ========================================================= */

@media (max-width: 768px) {

    .doacoes-page {
        padding: 32px 0;
    }

    .doacoes-container {
        width: calc(100% - 32px);
    }

    .doacoes-header h1 {
        font-size: 46px;
    }

    .doacoes-header p {
        font-size: 20px;
    }

    .whatsapp-card {
        padding: 32px 20px;
    }

    .whatsapp-card h2 {
        font-size: 30px;
    }

    .whatsapp-button {
        width: 100%;

        padding: 0 24px;

        font-size: 21px;
    }

    .donation-info-grid {
        grid-template-columns: 1fr;
    }

    .thank-you {
        padding: 32px 20px;
    }

    .thank-you h2 {
        font-size: 36px;
    }

    .thank-you p {
        font-size: 17px;
    }
}


@media (max-width: 480px) {

    .doacoes-header h1 {
        font-size: 38px;
    }

    .whatsapp-icon {
        width: 72px;
        height: 72px;
    }

    .whatsapp-icon svg {
        width: 42px;
        height: 42px;
    }

    .whatsapp-button {
        min-height: 68px;

        font-size: 18px;
    }

    .whatsapp-button svg {
        width: 27px;
        height: 27px;
    }

    .decorative-star,
    .decorative-sparkle,
    .decorative-book,
    .decorative-heart {
        width: 25px;
        height: 25px;
    }

}


/* =========================================================
   ACESSIBILIDADE
   ========================================================= */

@media (prefers-reduced-motion: reduce) {

    *,
    *::before,
    *::after {
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: .01ms !important;
    }

}


</style>

    <div class="doacoes-container">

        {{-- Voltar --}}
        <a
            href="{{ route('biblioteca') }}"
            class="back-library-button"
        >

            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path d="m12 19-7-7 7-7"></path>
                <path d="M19 12H5"></path>
            </svg>

            Voltar para Biblioteca

        </a>


        {{-- Cabeçalho --}}
        <header class="doacoes-header">

            <h1>
                Doe um Livro!
            </h1>

            <p>
                Ajude a expandir nossa biblioteca científica!
            </p>

        </header>


        {{-- Card principal WhatsApp --}}
        <section class="whatsapp-card">

            <div class="card-hover-glow"></div>


            {{-- Elementos decorativos --}}
            <div class="decorative-star top-left">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                >
                    <path d="m12 2 1.8 6.2L20 10l-6.2 1.8L12 18l-1.8-6.2L4 10l6.2-1.8L12 2Z"/>
                </svg>
            </div>


            <div class="decorative-sparkle top-right">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path d="m12 3-1.2 5.8L5 10l5.8 1.2L12 17l1.2-5.8L19 10l-5.8-1.2L12 3Z"/>
                    <path d="m19 17-.6 2.4L16 20l2.4.6L19 23l.6-2.4L22 20l-2.4-.6L19 17Z"/>
                </svg>
            </div>


            <div class="decorative-book bottom-left">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/>
                </svg>
            </div>


            <div class="decorative-heart bottom-right">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                >
                    <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21.2l8.8-8.8a5.5 5.5 0 0 0 0-7.8Z"/>
                </svg>
            </div>


            {{-- Ícone WhatsApp --}}
            <div class="whatsapp-icon">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M21 11.5a8.4 8.4 0 0 1-9 8.5 8.7 8.7 0 0 1-4-.9L3 20l1.3-4.7A8.3 8.3 0 0 1 3.5 11a8.5 8.5 0 1 1 17.5.5Z"/>
                    <path d="M8.5 9.5c.2 2 2 4 4 4.5"/>
                    <path d="M8.5 8.5c.5-.5 1-.5 1.3 0l.8 1.2c.2.3.1.7-.1.9l-.5.5"/>
                </svg>

            </div>


            <h2>
                Entre em Contato!
            </h2>

            <p class="whatsapp-description">
                Fale conosco pelo WhatsApp
            </p>


            {{-- WhatsApp --}}
            <a
                href="https://wa.me/5515996120897?text={{ urlencode('Olá! Gostaria de doar livros para a Biblioteca Beth Cientista! 📚') }}"
                target="_blank"
                rel="noopener noreferrer"
                class="whatsapp-button"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M21 11.5a8.4 8.4 0 0 1-9 8.5 8.7 8.7 0 0 1-4-.9L3 20l1.3-4.7A8.3 8.3 0 0 1 3.5 11a8.5 8.5 0 1 1 17.5.5Z"/>
                    <path d="M8.5 9.5c.2 2 2 4 4 4.5"/>
                </svg>

                Abrir WhatsApp

            </a>

        </section>


        {{-- Cards informativos --}}
        <section class="donation-info-grid">


            {{-- Livros aceitos --}}
            <article class="info-card">

                <div class="info-card-glow"></div>

                <div class="info-icon">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/>
                    </svg>

                </div>

                <h3>
                    Livros Aceitos
                </h3>

                <p>
                    Livros científicos<br>
                    Divulgação científica<br>
                    Biografias de cientistas
                </p>

            </article>


            {{-- Como doar --}}
            <article class="info-card">

                <div class="info-card-glow"></div>

                <div class="info-icon">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="M16.5 9.4 7.5 4.2"/>
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
                        <path d="M3.3 7 12 12l8.7-5"/>
                        <path d="M12 22V12"/>
                    </svg>

                </div>

                <h3>
                    Como Doar
                </h3>

                <p>
                    1. Entre em contato<br>
                    2. Informe os livros<br>
                    3. Combine a entrega
                </p>

            </article>


            {{-- Impacto --}}
            <article class="info-card">

                <div class="info-card-glow"></div>

                <div class="info-icon">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                    >
                        <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1.1-1.1a5.5 5.5 0 0 0-7.8 7.8L12 21.2l8.8-8.8a5.5 5.5 0 0 0 0-7.8Z"/>
                    </svg>

                </div>

                <h3>
                    Seu Impacto
                </h3>

                <p>
                    Inspire jovens<br>
                    Apoie a ciência<br>
                    Transforme vidas
                </p>

            </article>

        </section>


        {{-- Mensagem final --}}
        <section class="thank-you">

            <div class="thank-you-glow"></div>

            <h2>
                Obrigado!
            </h2>

            <p>
                Cada livro doado é uma nova oportunidade de aprendizado para nossos clubistas!
            </p>

        </section>

    </div>

</div>

@endsection
```



