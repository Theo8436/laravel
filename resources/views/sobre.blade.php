
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sobre Nós | Beth Cientista</title>

    {{-- Fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Fredoka:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    {{-- Ícones do navbar --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >

    {{-- Ícones do conteúdo --}}
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>

    {{-- NAVBAR COMPARTILHADO --}}
    @include('components.navbar')

    {{-- CONTEÚDO PRINCIPAL --}}
    <main class="sobre-main">

        {{-- TÍTULO --}}
        <section class="titulo">
            <h1>SOBRE NÓS</h1>

            <p>
                Conheça a história e missão da Beth Cientista
            </p>
        </section>

        {{-- NOSSA HISTÓRIA --}}
        <section class="historia">

            <div class="texto">

                <h2>NOSSA HISTÓRIA</h2>

                <p>
                    A Beth Cientista nasceu com o propósito de aproximar
                    crianças e jovens do universo científico, tornando o
                    conhecimento mais acessível, interessante e divertido.
                </p>

                <p>
                    Por meio da divulgação científica, buscamos despertar
                    a curiosidade, incentivar perguntas e mostrar que a
                    ciência faz parte do nosso cotidiano.
                </p>

                <p>
                    Acreditamos que todos podem aprender, explorar e
                    descobrir coisas novas quando encontram oportunidades
                    para conhecer o mundo ao seu redor.
                </p>

            </div>

            <div class="imagem">
                <img
                    src="{{ asset('images/laboratorio.jpg') }}"
                    alt="Laboratório de ciências"
                    loading="lazy"
                >
            </div>

        </section>

        {{-- MISSÃO, VALORES E VISÃO --}}
        <section class="cards">

            <div class="card">
                <i class="bi bi-bullseye" aria-hidden="true"></i>

                <h3>NOSSA MISSÃO</h3>

                <p>
                    Incentivar crianças e jovens a conhecerem a ciência
                    por meio de conteúdos educativos, acessíveis e criativos.
                </p>
            </div>

            <div class="card">
                <i class="bi bi-heart" aria-hidden="true"></i>

                <h3>NOSSOS VALORES</h3>

                <p>
                    Educação, inclusão, criatividade, colaboração,
                    curiosidade e inovação.
                </p>
            </div>

            <div class="card">
                <i class="bi bi-lightbulb" aria-hidden="true"></i>

                <h3>NOSSA VISÃO</h3>

                <p>
                    Contribuir para que a ciência seja cada vez mais
                    acessível e desperte o interesse de todos.
                </p>
            </div>

        </section>

        {{-- O QUE FAZEMOS --}}
        <section class="fazemos">

            <div class="imagem">
                <img
                    src="{{ asset('images/equipe.jpg') }}"
                    alt="Equipe da Beth Cientista"
                    loading="lazy"
                >
            </div>

            <div class="texto">

                <h2>O QUE FAZEMOS</h2>

                <p>
                    Desenvolvemos conteúdos educativos, jogos,
                    atividades e projetos voltados para a divulgação
                    científica.
                </p>

                <p>
                    Nosso objetivo é despertar a curiosidade e o interesse
                    dos estudantes pela ciência, incentivando a descoberta,
                    a criatividade e o aprendizado.
                </p>

            </div>

        </section>

        {{-- NOSSA EQUIPE --}}
        <section class="equipe">

            <i class="bi bi-people-fill" aria-hidden="true"></i>

            <h2>NOSSA EQUIPE</h2>

            <p>
                Somos jovens apaixonados por ciência e divulgação científica,
                unidos pelo desejo de compartilhar conhecimento e tornar
                a aprendizagem mais interessante para todos.
            </p>

        </section>

    </main>

    {{-- FOOTER COMPARTILHADO --}}
    @include('components.footer')

</body>

</html>
