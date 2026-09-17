<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menções Honrosas | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
/* =========================
   GERAL
========================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: linear-gradient(
        180deg,
        #6f0ea7 0%,
        #b217c7 55%,
        #ea6b72 100%
    );
    color: #fff;
    min-height: 100vh;
}

/* =========================
   HEADER
========================= */
header {
    width: 100%;
    background: #ff7700;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 70px;
    position: sticky;
    top: 0;
    z-index: 999;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .25);
}

.logo {
    display: flex;
    align-items: center;
    gap: 15px;
}

.logo img {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    background: white;
    object-fit: cover;
}

.logo h2 {
    font-size: 28px;
    font-weight: 800;
}

.logo p {
    font-size: 13px;
}

/* =========================
   MENU
========================= */
nav {
    display: flex;
    gap: 10px;
    align-items: center;
}

nav a {
    text-decoration: none;
    background: white;
    color: #ff7300;
    padding: 10px 18px;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: .3s;
}

nav a:hover {
    transform: translateY(-3px);
    background: #ffe5cb;
}

nav .active {
    background: #ffd343;
    color: #663b00;
}

/* =========================
   MAIN
========================= */
main {
    width: 85%;
    margin: auto;
    padding: 50px 0;
}

/* =========================
   TITULO
========================= */
.titulo {
    text-align: center;
    margin-bottom: 35px;
}

.titulo h1 {
    font-size: 55px;
    font-weight: 800;
}

.titulo p {
    margin-top: 10px;
    font-size: 20px;
}

/* =========================
   CARDS
========================= */
.mencoes {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.card {
    background: white;
    color: #222;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 12px 25px rgba(0, 0, 0, .25);
    transition: .35s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card:hover {
    transform: translateY(-8px);
}

.topo {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.topo i {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: #ff8b00;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
}

.topo span {
    background: #ff8b00;
    color: white;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}

.card h2 {
    font-size: 25px;
    margin-bottom: 12px;
    line-height: 34px;
    word-break: break-all;
}

.card h4 {
    color: #666;
    margin-bottom: 15px;
}

.card p {
    color: #555;
    line-height: 28px;
    white-space: pre-line;
    word-break: break-all;
    margin-bottom: 15px;
}

.btn-ler-mais {
    display: inline-block;
    align-self: flex-start;
    background: #ff7700;
    color: #fff;
    text-decoration: none;
    padding: 8px 18px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 14px;
    transition: .3s;
}

.btn-ler-mais:hover {
    background: #ff9500;
}

/* =========================
   CONTINUE BRILHANDO
========================= */
.parabens {
    display: flex;
    justify-content: center;
    margin-top: 70px;
}

.caixa {
    width: 700px;
    background: rgba(255, 255, 255, .12);
    border: 2px solid rgba(255, 255, 255, .25);
    backdrop-filter: blur(8px);
    padding: 45px;
    border-radius: 25px;
    text-align: center;
    box-shadow: 0 12px 25px rgba(0, 0, 0, .25);
}

.icone {
    width: 80px;
    height: 80px;
    background: #ff8b00;
    color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 38px;
    margin: auto;
    margin-bottom: 20px;
}

.caixa h2 {
    font-size: 38px;
    margin-bottom: 20px;
}

.caixa p {
    line-height: 30px;
}

/* =========================
   FOOTER
========================= */
footer {
    margin-top: 70px;
    text-align: center;
    padding: 30px;
    background: rgba(0, 0, 0, .12);
}

/* =========================
   BOLINHAS
========================= */
body::before {
    content: "";
    position: fixed;
    width: 10px;
    height: 10px;
    background: white;
    border-radius: 50%;
    top: 120px;
    left: 18%;
    box-shadow:
        500px 50px white,
        180px 320px white,
        720px 450px white,
        100px 610px white,
        900px 200px white,
        400px 770px white;
    opacity: .7;
}

/* =========================
   RESPONSIVO
========================= */
@media(max-width:1000px) {
    header {
        flex-direction: column;
        padding: 20px;
    }

    nav {
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 15px;
    }

    main {
        width: 92%;
    }

    .mencoes {
        grid-template-columns: 1fr;
    }

    .caixa {
        width: 100%;
    }

    .titulo h1 {
        font-size: 42px;
    }

    .card h2 {
        font-size: 22px;
    }
}
</style>

<body>

<header>
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Beth Cientista">
        <div>
            <h2>BETH CIENTISTA</h2>
            <p>Divulgação Científica</p>
        </div>
    </div>

    <nav>
        <a href="{{ route('inicio') }}">Início</a>
        <a href="{{ route('sobre') }}">Sobre Nós</a>
        <a href="{{ route('galeria') }}">Galeria</a>
        <a href="{{ route('biblioteca') }}">Biblioteca</a>
        <a class="active" href="{{ route('aluno.mencao') }}">Menções honrosas</a>
        <a href="{{ route('escolha') }}">Minha Area</a>
        <a href="{{ route('entrar') }}">Sair</a>
    </nav>
</header>

<main>

    <section class="titulo">
        <h1>MENÇÕES HONROSAS</h1>
        <p>Celebrando as conquistas e realizações dos nossos Clubistas!</p>
    </section>

    <!-- LISTA DE MENÇÕES DINÂMICA DO PROFESSOR -->
    <section class="mencoes" id="listaMencoes">
        @forelse($postagens as $postagem)
            <div class="card">
                <div>
                    <div class="topo">
                        <i class="bi bi-trophy-fill"></i>
                        <span>{{ $postagem->created_at ? $postagem->created_at->format('d/m/Y') : 'Data não informada' }}</span>
                    </div>

                    <h2>{{ $postagem->titulo }}</h2>
                    <h4><i class="bi bi-tag-fill"></i> {{ $postagem->categoria }}</h4>

                    <p>{{ Str::limit($postagem->comentario, 150, '...') }}</p>
                </div>

                <a href="{{ route('mencao.show', $postagem->id) }}" class="btn-ler-mais">
                    Ler mais <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px; background: rgba(255,255,255,0.12); border-radius: 20px;">
                <h3>Nenhuma menção honrosa cadastrada no momento.</h3>
            </div>
        @endforelse
    </section>

    <section class="parabens">
        <div class="caixa">
            <div class="icone">
                <i class="bi bi-trophy-fill"></i>
            </div>
            <h2>CONTINUE BRILHANDO!</h2>
            <p>
                Cada conquista é resultado de dedicação, curiosidade e paixão pela ciência.
                <br><br>
                Parabéns a todos os Clubistas!
            </p>
        </div>
    </section>

</main>

<footer>
    <p>© 2026 Beth Cientista</p>
</footer>

</body>
</html>