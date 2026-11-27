
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/galeria-professor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>

    {{-- NAVBAR DO PROFESSOR --}}
    @include('components.navbar-professor')


    <div class="galeria-page">

        <div class="galeria-textura" aria-hidden="true"></div>

        <div class="galeria-brilhos" aria-hidden="true">
            @for($i = 1; $i <= 12; $i++)
                <span class="brilho brilho-{{ $i }}"></span>
            @endfor
        </div>


        <main class="galeria-container">

            {{-- INTRODUÇÃO --}}
            <header class="galeria-intro">

                <span class="galeria-selo">
                    <i class="bi bi-stars"></i>
                    Nosso acervo de momentos
                </span>

                <h1>Galeria de Fotos</h1>

                <div class="galeria-intro-subtitulo">
                    <p>Momentos especiais e atividades do grupo Beth Cientista!</p>
                    <span class="galeria-risco"></span>
                </div>

            </header>


            {{-- MENSAGEM DE SUCESSO --}}
            @if(session('sucesso'))
                <div class="galeria-alerta sucesso-alerta">
                    <i class="bi bi-check-circle-fill"></i>
                    {{ session('sucesso') }}
                </div>
            @endif

            {{-- ERROS DE VALIDAÇÃO --}}
            @if($errors->any())
                <div class="galeria-alerta erro-alerta">
                    <i class="bi bi-exclamation-circle-fill"></i>

                    <div>
                        @foreach($errors->all() as $erro)
                            <p>{{ $erro }}</p>
                        @endforeach
                    </div>
                </div>
            @endif


            {{-- BOTÃO ADICIONAR --}}
            <div class="galeria-acoes-topo">

                <div class="galeria-acoes-texto">
                    <span>Área do professor</span>
                    <p>Compartilhe novos momentos com os alunos!</p>
                </div>

                <button
                    type="button"
                    class="btn-adicionar-galeria"
                    onclick="abrirFormulario()"
                >
                    <i class="bi bi-plus-circle-fill"></i>
                    Adicionar Nova Foto
                </button>

            </div>


            {{-- FORMULÁRIO DE CADASTRO --}}
            <section id="formulario" class="galeria-formulario">

                <div class="formulario-cabecalho">

                    <div class="formulario-icone">
                        <i class="bi bi-camera-fill"></i>
                    </div>

                    <div>
                        <span>Nova publicação</span>
                        <h2>Adicionar à Galeria</h2>
                    </div>

                </div>


                <form
                    id="formFoto"
                    action="{{ route('galeria.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf

                    <div class="campo-galeria">

                        <label for="tituloFoto">
                            <i class="bi bi-pencil-square"></i>
                            Título da galeria
                        </label>

                        <input
                            type="text"
                            id="tituloFoto"
                            name="titulo"
                            placeholder="Ex: Feira de Ciências 2026"
                            required
                        >

                    </div>


                    <div class="campo-galeria">

                        <label for="descricaoFoto">
                            <i class="bi bi-card-text"></i>
                            Descrição
                        </label>

                        <textarea
                            id="descricaoFoto"
                            name="descricao"
                            placeholder="Conte um pouco sobre esse momento..."
                            required
                        ></textarea>

                    </div>


                    <div class="campo-galeria">

                        <label for="arquivoFoto">
                            <i class="bi bi-images"></i>
                            Escolha as fotos
                        </label>

                        <div class="upload-galeria">

                            <i class="bi bi-cloud-arrow-up-fill"></i>

                            <p>Selecione as imagens da sua galeria</p>

                            <span>Você pode selecionar até 10 fotos.</span>

                            <input
                                type="file"
                                name="imagens[]"
                                id="arquivoFoto"
                                multiple
                                accept="image/*"
                                required
                                onchange="validarImagensGaleria(this)"
                            >

                        </div>

                        <div
                            id="preview-imagens-galeria"
                            class="preview-galeria"
                        ></div>

                    </div>


                    <div class="botoes-galeria-form">

                        <button type="submit" class="btn-salvar-galeria">
                            <i class="bi bi-check-circle-fill"></i>
                            Publicar Galeria
                        </button>

                        <button
                            type="button"
                            class="btn-cancelar-galeria"
                            onclick="fecharFormulario()"
                        >
                            Cancelar
                        </button>

                    </div>

                    <div id="mensagem"></div>

                </form>

            </section>


            {{-- GALERIAS CADASTRADAS --}}
            <section class="galeria-listagem">

                <div class="galeria-listagem-titulo">

                    <div>
                        <span>Registros especiais</span>
                        <h2>Nossos Momentos</h2>
                    </div>

                    <span class="contador-galerias">
                        <i class="bi bi-images"></i>
                        {{ count($fotos) }} {{ count($fotos) === 1 ? 'galeria' : 'galerias' }}
                    </span>

                </div>


                <div class="galeria-grid">

                    @forelse($fotos as $key => $foto)

                        @php

                            $imagens = json_decode($foto->imagem, true);

                            if (!is_array($imagens)) {
                                $imagens = $foto->imagem ? [$foto->imagem] : [];
                            }

                            $imagens = array_values(array_filter($imagens));

                            $imagemCapa = $imagens[0] ?? null;

                            if ($imagemCapa) {

                                if (
                                    str_starts_with($imagemCapa, 'http://') ||
                                    str_starts_with($imagemCapa, 'https://')
                                ) {
                                    $imagemCapaUrl = $imagemCapa;

                                } elseif (str_contains($imagemCapa, 'imagem')) {

                                    $imagemCapaUrl = asset($imagemCapa);

                                } else {

                                    $imagemCapaUrl = asset('storage/' . ltrim($imagemCapa, '/'));

                                }

                            } else {

                                $imagemCapaUrl = asset('Beth.jpg');

                            }

                            $icones = [
                                'bi-camera-fill',
                                'bi-flask-fill',
                                'bi-mortarboard-fill',
                                'bi-book-fill',
                                'bi-stars',
                                'bi-lightbulb-fill',
                                'bi-journal-bookmark-fill',
                                'bi-people-fill'
                            ];

                            $iconeAtual = $icones[$key % count($icones)];

                        @endphp


                        <article class="galeria-card">

                            {{-- IMAGEM DE CAPA --}}
                            <div class="galeria-card-imagem">

                                <img
                                    src="{{ $imagemCapaUrl }}"
                                    alt="{{ $foto->titulo }}"
                                    loading="lazy"
                                    onerror="this.onerror=null; this.src='{{ asset('Beth.jpg') }}';"
                                >

                                <span class="galeria-card-icone">
                                    <i class="bi {{ $iconeAtual }}"></i>
                                </span>

                                <span class="galeria-card-contador">
                                    <i class="bi bi-images"></i>
                                    {{ count($imagens) }}
                                    {{ count($imagens) === 1 ? 'foto' : 'fotos' }}
                                </span>

                                <div class="galeria-card-overlay">
                                    <span>
                                        <i class="bi bi-stars"></i>
                                        Beth Cientista
                                    </span>
                                </div>

                            </div>


                            {{-- INFORMAÇÕES --}}
                            <div class="galeria-card-conteudo">

                                <h2>{{ $foto->titulo }}</h2>

                                <p>
                                    {{ $foto->descricao ?: 'Confira os registros deste momento da Beth Cientista.' }}
                                </p>


                                <div class="galeria-card-rodape">
                                    <span>Gerenciar momento</span>
                                    <i class="bi bi-camera"></i>
                                </div>


                                {{-- AÇÕES DO PROFESSOR --}}
                                <div class="galeria-card-acoes">

                                    <a
                                        href="{{ route('professor.showGaleria', $foto->id) }}"
                                        class="btn-ver-galeria"
                                    >
                                        <i class="bi bi-eye-fill"></i>
                                        Ver
                                    </a>

                                    <button
                                        type="button"
                                        class="btn-editar-galeria"
                                        onclick='abrirEdicaoGaleria(@json($foto))'
                                    >
                                        <i class="bi bi-pencil-fill"></i>
                                        Editar
                                    </button>

                                    <button
                                        type="button"
                                        class="btn-excluir-galeria"
                                        onclick='abrirConfirmacaoExcluir({{ $foto->id }}, @json($foto->titulo))'
                                    >
                                        <i class="bi bi-trash-fill"></i>
                                        Excluir
                                    </button>

                                </div>

                            </div>

                        </article>


                    @empty

                        <div class="galeria-vazia">

                            <span class="galeria-vazia-icone">
                                <i class="bi bi-camera"></i>
                            </span>

                            <h2>Nenhuma foto cadastrada ainda</h2>

                            <p>
                                Que tal começar a construir esse acervo?
                                Adicione fotos das atividades e experiências
                                científicas da Beth Cientista!
                            </p>

                            <button
                                type="button"
                                onclick="abrirFormulario()"
                            >
                                <i class="bi bi-plus-circle-fill"></i>
                                Adicionar primeira galeria
                            </button>

                        </div>

                    @endforelse

                </div>

            </section>


            {{-- MENSAGEM FINAL --}}
            <section class="galeria-mensagem">

                <span class="galeria-mensagem-icone">
                    <i class="bi bi-camera-fill"></i>
                </span>

                <div class="galeria-mensagem-texto">

                    <span>Ciência também é memória</span>

                    <h2>Momentos que inspiram!</h2>

                    <p>
                        Cada foto representa um momento de aprendizado,
                        curiosidade e paixão pela ciência.
                    </p>

                </div>

                <span class="galeria-mensagem-estrela">
                    <i class="bi bi-stars"></i>
                </span>

            </section>

        </main>

    </div>


    {{-- MODAL DE EDIÇÃO --}}
    <div class="modal-galeria" id="modalEdicaoGaleria">

        <div class="modal-galeria-conteudo">

            <button
                type="button"
                class="modal-fechar"
                onclick="fecharEdicaoGaleria()"
                aria-label="Fechar"
            >
                <i class="bi bi-x-lg"></i>
            </button>

            <div class="modal-galeria-titulo">
                <span><i class="bi bi-pencil-square"></i></span>
                <div>
                    <small>Atualize seu acervo</small>
                    <h2>Editar Galeria</h2>
                </div>
            </div>


            <form
                id="formEdicaoGaleria"
                action=""
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf
                @method('PUT')


                <div class="campo-galeria">

                    <label for="editTituloFoto">Título da galeria</label>

                    <input
                        type="text"
                        id="editTituloFoto"
                        name="titulo"
                        required
                    >

                </div>


                <div class="campo-galeria">

                    <label for="editDescricaoFoto">Descrição</label>

                    <textarea
                        id="editDescricaoFoto"
                        name="descricao"
                        required
                    ></textarea>

                </div>


                <div class="campo-galeria">

                    <label>
                        <i class="bi bi-images"></i>
                        Fotos atuais
                    </label>

                    <p class="ajuda-modal">
                        Marque as imagens que deseja remover.
                    </p>

                    <div
                        id="fotosAtuaisEdicao"
                        class="fotos-atuais-edicao"
                    ></div>

                </div>


                <div class="campo-galeria">

                    <label for="editImagens">
                        <i class="bi bi-cloud-arrow-up"></i>
                        Adicionar novas fotos
                    </label>

                    <input
                        type="file"
                        name="imagens[]"
                        id="editImagens"
                        multiple
                        accept="image/*"
                        onchange="previewNovasImagens(this)"
                    >

                    <small class="ajuda-modal">
                        O limite total da galeria é de 10 imagens.
                    </small>

                    <div
                        id="previewNovasImagens"
                        class="preview-galeria"
                    ></div>

                </div>


                <div class="botoes-galeria-form">

                    <button
                        type="button"
                        class="btn-cancelar-galeria"
                        onclick="fecharEdicaoGaleria()"
                    >
                        Cancelar
                    </button>

                    <button
                        type="submit"
                        class="btn-salvar-galeria"
                    >
                        <i class="bi bi-check-circle-fill"></i>
                        Salvar Alterações
                    </button>

                </div>

            </form>

        </div>

    </div>


    {{-- MODAL DE EXCLUSÃO --}}
    <div class="modal-galeria" id="modalExcluirGaleria">

        <div class="modal-galeria-conteudo modal-excluir-conteudo">

            <div class="modal-alerta-icone">
                <i class="bi bi-exclamation-triangle-fill"></i>
            </div>

            <h2>Excluir galeria?</h2>

            <p>
                Tem certeza de que deseja excluir
                <strong id="nomeFotoExcluir"></strong>?
                Essa ação não poderá ser desfeita.
            </p>

            <form
                id="formExcluirGaleria"
                action=""
                method="POST"
            >

                @csrf
                @method('DELETE')

                <div class="botoes-galeria-form">

                    <button
                        type="button"
                        class="btn-cancelar-galeria"
                        onclick="fecharConfirmacaoExcluir()"
                    >
                        Cancelar
                    </button>

                    <button
                        type="submit"
                        class="btn-confirmar-exclusao"
                    >
                        <i class="bi bi-trash-fill"></i>
                        Sim, excluir
                    </button>

                </div>

            </form>

        </div>

    </div>


    {{-- FOOTER COMPARTILHADO --}}
    @include('components.footer')


<script>

// ======================================================
// ELEMENTOS
// ======================================================

const formulario = document.getElementById("formulario");
const formFoto = document.getElementById("formFoto");


// ======================================================
// CADASTRO
// ======================================================

function abrirFormulario() {

    formulario.classList.add("aberto");

    formulario.scrollIntoView({
        behavior: "smooth",
        block: "center"
    });

}

function fecharFormulario() {

    formulario.classList.remove("aberto");

    formFoto.reset();

    document.getElementById(
        "preview-imagens-galeria"
    ).innerHTML = "";

}


// ======================================================
// VALIDAR IMAGENS DO CADASTRO
// ======================================================

function validarImagensGaleria(input) {

    const preview = document.getElementById(
        "preview-imagens-galeria"
    );

    preview.innerHTML = "";

    if (input.files.length > 10) {

        alert("Você pode selecionar no máximo 10 imagens.");

        input.value = "";

        return;
    }

    Array.from(input.files).forEach(function(arquivo) {

        if (!arquivo.type.startsWith("image/")) {
            return;
        }

        const reader = new FileReader();

        reader.onload = function(e) {

            const div = document.createElement("div");
            div.className = "preview-item";

            const img = document.createElement("img");
            img.src = e.target.result;

            div.appendChild(img);
            preview.appendChild(div);

        };

        reader.readAsDataURL(arquivo);

    });

}


// ======================================================
// CAMINHO DAS IMAGENS
// ======================================================

function obterUrlImagem(imagem) {

    if (!imagem) {
        return "";
    }

    if (
        imagem.startsWith("http://") ||
        imagem.startsWith("https://") ||
        imagem.startsWith("/")
    ) {
        return imagem;
    }

    if (imagem.includes("imagem")) {
        return "/" + imagem.replace(/^\/+/, "");
    }

    return "/storage/" + imagem.replace(/^\/+/, "");

}


// ======================================================
// EDIÇÃO DA GALERIA
// ======================================================

function abrirEdicaoGaleria(foto) {

    const modal = document.getElementById(
        "modalEdicaoGaleria"
    );

    const form = document.getElementById(
        "formEdicaoGaleria"
    );

    const titulo = document.getElementById(
        "editTituloFoto"
    );

    const descricao = document.getElementById(
        "editDescricaoFoto"
    );

    const fotosContainer = document.getElementById(
        "fotosAtuaisEdicao"
    );

    if (!modal || !form) return;


    titulo.value = foto.titulo ?? "";
    descricao.value = foto.descricao ?? "";

    form.action = "/professor/galeria/atualizar/" + foto.id;

    fotosContainer.innerHTML = "";


    let fotos = [];

    try {

        fotos = JSON.parse(foto.imagem);

    } catch (erro) {

        fotos = foto.imagem ? [foto.imagem] : [];

    }

    if (!Array.isArray(fotos)) {
        fotos = fotos ? [fotos] : [];
    }

    fotos = fotos.filter(Boolean);


    fotos.forEach(function(imagem, index) {

        const div = document.createElement("div");
        div.className = "foto-atual-item";

        const img = document.createElement("img");
        img.src = obterUrlImagem(imagem);
        img.alt = "Foto " + (index + 1);

        const label = document.createElement("label");

        const checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.name = "remover_imagens[]";
        checkbox.value = imagem;

        label.appendChild(checkbox);
        label.appendChild(document.createTextNode(" Remover"));

        div.appendChild(img);
        div.appendChild(label);

        fotosContainer.appendChild(div);

    });


    document.getElementById("editImagens").value = "";

    document.getElementById(
        "previewNovasImagens"
    ).innerHTML = "";


    fecharFormulario();

    fecharConfirmacaoExcluir();

    modal.style.display = "flex";

    document.body.style.overflow = "hidden";

}


// ======================================================
// PRÉVIA DAS NOVAS IMAGENS
// ======================================================

function previewNovasImagens(input) {

    const preview = document.getElementById(
        "previewNovasImagens"
    );

    preview.innerHTML = "";

    if (input.files.length > 10) {

        alert("Você pode selecionar no máximo 10 novas imagens.");

        input.value = "";

        return;
    }

    Array.from(input.files).forEach(function(arquivo) {

        if (!arquivo.type.startsWith("image/")) {
            return;
        }

        const reader = new FileReader();

        reader.onload = function(e) {

            const div = document.createElement("div");
            div.className = "preview-item";

            const img = document.createElement("img");
            img.src = e.target.result;

            div.appendChild(img);
            preview.appendChild(div);

        };

        reader.readAsDataURL(arquivo);

    });

}


// ======================================================
// FECHAR EDIÇÃO
// ======================================================

function fecharEdicaoGaleria() {

    const modal = document.getElementById(
        "modalEdicaoGaleria"
    );

    modal.style.display = "none";

    document.getElementById(
        "formEdicaoGaleria"
    ).reset();

    document.getElementById(
        "fotosAtuaisEdicao"
    ).innerHTML = "";

    document.getElementById(
        "previewNovasImagens"
    ).innerHTML = "";

    document.body.style.overflow = "";

}


// ======================================================
// EXCLUSÃO
// ======================================================

function abrirConfirmacaoExcluir(id, titulo) {

    const modal = document.getElementById(
        "modalExcluirGaleria"
    );

    const form = document.getElementById(
        "formExcluirGaleria"
    );

    document.getElementById(
        "nomeFotoExcluir"
    ).textContent = titulo;

    form.action = "/professor/galeria/excluir/" + id;

    fecharFormulario();

    fecharEdicaoGaleria();

    modal.style.display = "flex";

    document.body.style.overflow = "hidden";

}


// ======================================================
// FECHAR EXCLUSÃO
// ======================================================

function fecharConfirmacaoExcluir() {

    document.getElementById(
        "modalExcluirGaleria"
    ).style.display = "none";

    document.body.style.overflow = "";

}


// ======================================================
// FECHAR MODAIS CLICANDO FORA
// ======================================================

window.addEventListener("click", function(event) {

    const modalEdicao = document.getElementById(
        "modalEdicaoGaleria"
    );

    const modalExcluir = document.getElementById(
        "modalExcluirGaleria"
    );

    if (event.target === modalEdicao) {
        fecharEdicaoGaleria();
    }

    if (event.target === modalExcluir) {
        fecharConfirmacaoExcluir();
    }

});


// ======================================================
// FECHAR COM ESC
// ======================================================

document.addEventListener("keydown", function(event) {

    if (event.key === "Escape") {
        fecharEdicaoGaleria();
        fecharConfirmacaoExcluir();
    }

});

</script>

</body>
</html>
