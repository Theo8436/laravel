<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Galeria de Fotos | Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Font Awesome: ícones do navbar e footer compartilhados --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    {{-- CSS compartilhados e CSS específico da Galeria --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<body>

    {{-- NAVBAR COMPARTILHADO --}}
    @include('components.navbar')

    <div class="galeria-page">
        <div class="galeria-textura" aria-hidden="true"></div>
        <div class="galeria-brilhos" aria-hidden="true">
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

        <main class="galeria-container">
            <header class="galeria-intro">
                <span class="galeria-selo">
                    <i class="bi bi-stars" aria-hidden="true"></i>
                    Nosso acervo de momentos
                </span>

                <h1>Galeria de Fotos</h1>

                <div class="galeria-intro-subtitulo">
                    <p>Momentos especiais e atividades do grupo Beth Cientista!</p>
                    <span class="galeria-risco" aria-hidden="true"></span>
                </div>
            </header>

            <section class="galeria-grid" aria-label="Fotos das atividades da Beth Cientista">
                @forelse ($fotos as $key => $foto)
                    @php
                        /*
                         * Aceita tanto o formato antigo (uma imagem)
                         * quanto o formato atual (lista de imagens em JSON).
                         */
                        $imagens = json_decode($foto->imagem, true);

                        if (!is_array($imagens)) {
                            $imagens = $foto->imagem ? [$foto->imagem] : [];
                        }

                        $imagens = array_values(array_filter($imagens));

                        $imagemCapa = $imagens[0] ?? null;

                        if ($imagemCapa) {
                            if (str_starts_with($imagemCapa, 'http://') || str_starts_with($imagemCapa, 'https://')) {
                                $imagemCapaUrl = $imagemCapa;
                            } elseif (str_contains($imagemCapa, 'imagem')) {
                                $imagemCapaUrl = asset($imagemCapa);
                            } else {
                                $imagemCapaUrl = asset('storage/' . ltrim($imagemCapa, '/'));
                            }
                        } else {
                            $imagemCapaUrl = asset('Beth.jpg');
                        }

                        $iconesGaleria = [
                            'bi-camera-fill',
                            'bi-flask-fill',
                            'bi-mortarboard-fill',
                            'bi-book-fill',
                            'bi-stars',
                            'bi-lightbulb-fill',
                            'bi-journal-bookmark-fill',
                            'bi-people-fill',
                        ];

                        $iconeAtual = $iconesGaleria[$key % count($iconesGaleria)];
                    @endphp

                    <article class="galeria-card">
                        <a
                            class="galeria-card-link"
                            href="{{ route('professor.showGaleria', $foto->id) }}"
                            aria-label="Ver fotos e detalhes de {{ $foto->titulo }}"
                        >
                            <div class="galeria-card-imagem">
                                <img
                                    src="{{ $imagemCapaUrl }}"
                                    alt="{{ $foto->titulo }}"
                                    loading="lazy"
                                    onerror="this.onerror=null; this.src='{{ asset('Beth.jpg') }}';"
                                >

                                <span class="galeria-card-icone" aria-hidden="true">
                                    <i class="bi {{ $iconeAtual }}"></i>
                                </span>

                                <span class="galeria-card-contador">
                                    <i class="bi bi-images" aria-hidden="true"></i>
                                    {{ count($imagens) }} {{ count($imagens) === 1 ? 'foto' : 'fotos' }}
                                </span>

                                <div class="galeria-card-overlay">
                                    <span class="galeria-overlay-acao">
                                        <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                                        Ver galeria
                                    </span>
                                </div>
                            </div>

                            <div class="galeria-card-conteudo">
                                <h2>{{ $foto->titulo }}</h2>

                                @if (!empty($foto->descricao))
                                    <p>{{ $foto->descricao }}</p>
                                @else
                                    <p>Confira os registros deste momento da Beth Cientista.</p>
                                @endif

                                <span class="galeria-card-rodape">
                                    <span>Explorar momento</span>
                                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </a>
                    </article>
                @empty
                    {{-- Aviso preservado: as fotos abaixo são apenas exemplos visuais. --}}
                    <div class="galeria-vazia">
                        <span class="galeria-vazia-icone">
                            <i class="bi bi-camera" aria-hidden="true"></i>
                        </span>
                        <h2>Nenhuma foto cadastrada ainda</h2>
                        <p>Estas imagens são exemplos temporários para visualizar a galeria. Você poderá substituí-las pelas fotos reais depois.</p>
                    </div>

                    @php
                        // Imagens de demonstração baseadas no layout original do Figma.
                        // Para trocar depois, altere apenas os valores de "url" e os textos.
                        $fotosDemo = [
                            ['url' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=900&h=600&fit=crop', 'titulo' => 'Observação Astronômica', 'data' => '20/03/2026'],
                            ['url' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=900&h=600&fit=crop', 'titulo' => 'Workshop de Biologia', 'data' => '18/03/2026'],
                            ['url' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?w=900&h=600&fit=crop', 'titulo' => 'Feira de Ciências', 'data' => '15/03/2026'],
                            ['url' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=900&h=600&fit=crop', 'titulo' => 'Sessão de Estudos', 'data' => '12/03/2026'],
                            ['url' => 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=900&h=600&fit=crop', 'titulo' => 'Visita ao Laboratório', 'data' => '10/03/2026'],
                            ['url' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900&h=600&fit=crop', 'titulo' => 'Reunião do Clube', 'data' => '08/03/2026'],
                            ['url' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=900&h=600&fit=crop', 'titulo' => 'Experimento de Química', 'data' => '05/03/2026'],
                            ['url' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=900&h=600&fit=crop', 'titulo' => 'Apresentação de Projetos', 'data' => '01/03/2026'],
                        ];
                    @endphp

                    @foreach ($fotosDemo as $fotoDemo)
                        <article class="galeria-card galeria-card-demo">
                            <div class="galeria-card-imagem">
                                <img
                                    src="{{ $fotoDemo['url'] }}"
                                    alt="Imagem demonstrativa: {{ $fotoDemo['titulo'] }}"
                                    loading="lazy"
                                >

                                <div class="galeria-card-overlay">
                                    <div class="galeria-demo-caption">
                                        <h2>{{ $fotoDemo['titulo'] }}</h2>
                                        <p>{{ $fotoDemo['data'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endforelse
            </section>

            <section class="galeria-mensagem">
                <span class="galeria-mensagem-icone" aria-hidden="true">
                    <i class="bi bi-camera-fill"></i>
                </span>

                <div class="galeria-mensagem-texto">
                    <span class="galeria-mensagem-etiqueta">Ciência também é memória</span>
                    <h2>Momentos que inspiram!</h2>
                    <p>Cada foto representa um momento de aprendizado, curiosidade e paixão pela ciência.</p>
                </div>

                <span class="galeria-mensagem-estrela" aria-hidden="true">
                    <i class="bi bi-stars"></i>
                </span>
            </section>
        </main>
    </div>

    {{-- FOOTER COMPARTILHADO --}}
    @include('components.footer')

</body>
</html>
