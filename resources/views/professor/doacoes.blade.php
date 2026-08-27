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
