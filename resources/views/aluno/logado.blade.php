<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Área | Beth Cientista</title>

    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minha-area.css') }}">
</head>
<body>

<header>
    @include('components.navbar-aluno')
</header>

<main class="area-aluno">

    <section class="perfil">
        <div class="foto">
            <i class="bi bi-person"></i>
            <span>Clubista</span>
        </div>

        <div class="perfil-texto">
            <span class="perfil-etiqueta">ÁREA DO ALUNO</span>
            <h1>{{ Auth::guard('alunos')->user()->nome ?? 'Clubista' }}</h1>
            <p>Bem-vindo(a) à sua área! Continue explorando e compartilhando ciência.</p>
        </div>
    </section>

    <section class="menu-area">
        <button id="btnPubs" class="btn-menu-ativo" onclick="mostrarAba('publicacoes')">
            <i class="bi bi-file-earmark-text"></i>
            <span>Minhas Publicações</span>
        </button>

        <button id="btnCal" onclick="mostrarAba('calendario')">
            <i class="bi bi-calendar3"></i>
            <span>Calendário</span>
        </button>

        <button id="btnMat" onclick="mostrarAba('material')">
            <i class="bi bi-book"></i>
            <span>Material de Apoio</span>
        </button>
    </section>

    <section id="publicacoes" class="aba-conteudo">
        <div class="header-top">
            <div>
                <span class="secao-etiqueta">SEU ESPAÇO CRIATIVO</span>
                <h2>GERENCIAR PUBLICAÇÕES</h2>
                <p>Acompanhe e organize suas descobertas científicas.</p>
            </div>

            <button type="button" onclick="abrirModalCriar()" class="btn-novo-post">
                <i class="bi bi-plus-circle-fill"></i>
                Nova Publicação
            </button>
        </div>

        @if(session('sucesso'))
            <div class="alerta-sucesso">
                <i class="bi bi-check-circle-fill"></i>
                <span>{{ session('sucesso') }}</span>
            </div>
        @endif

        @if(session('erro'))
            <div class="alerta-erro">{{ session('erro') }}</div>
        @endif

        @if($errors->any())
            <div class="alerta-erro">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="titulo-lista">
            <h3>Minhas Publicações</h3>
            <span class="linha-decorativa"></span>
        </div>

        @if($minhasPostagens->isEmpty())
            <div class="post-card estado-vazio">
                <i class="bi bi-journal-plus"></i>
                <h3>Nenhuma publicação por enquanto!</h3>
                <p>Que tal compartilhar sua primeira descoberta científica?</p>
                <button type="button" class="btn-novo-post" onclick="abrirModalCriar()">
                    <i class="bi bi-plus-circle"></i>
                    Criar publicação
                </button>
            </div>
        @else
            @foreach($minhasPostagens as $postagem)
                @php
                    $fotos = json_decode($postagem->imagem, true) ?? [];

                    if (!is_array($fotos)) {
                        $fotos = $postagem->imagem ? [$postagem->imagem] : [];
                    }
                @endphp

                <article class="post-card">
                    <div class="post-header">
                        <span class="post-autor">
                            <i class="bi bi-person-circle"></i>
                            {{ $postagem->user->nome ?? 'Você' }}
                        </span>

                        <span class="categoria-badge">
                            {{ $postagem->categoria ?? 'Geral' }}
                        </span>
                    </div>

                    <div class="post-status">
                        @if($postagem->status === 'pendente')
                            <span class="status pendente">
                                <i class="bi bi-clock-history"></i>
                                Aguardando aprovação do professor
                            </span>
                        @elseif($postagem->status === 'ajustes')
                            <span class="status ajustes">
                                <i class="bi bi-exclamation-circle"></i>
                                Ajustes solicitados pelo professor
                            </span>

                            @if($postagem->observacao_professor)
                                <div class="observacao-professor">
                                    <strong><i class="bi bi-chat-left-text"></i> Observação do professor:</strong>
                                    <p>{{ $postagem->observacao_professor }}</p>
                                </div>
                            @endif
                        @elseif($postagem->status === 'aprovada')
                            <span class="status aprovada">
                                <i class="bi bi-check-circle-fill"></i>
                                Publicação aprovada
                            </span>
                        @elseif($postagem->status === 'rejeitada')
                            <span class="status rejeitada">
                                <i class="bi bi-x-circle-fill"></i>
                                Publicação rejeitada
                            </span>
                        @endif
                    </div>

                    <h2 class="post-titulo">{{ $postagem->titulo }}</h2>
                    <p class="post-resumo">{{ $postagem->comentario }}</p>

                    @if(count($fotos) > 0)
                        <div class="carrossel-container carrossel-post" data-index="0">
                            @foreach($fotos as $foto)
                                <div class="slide">
                                    <img src="{{ asset('storage/' . $foto) }}" alt="Imagem da publicação">
                                </div>
                            @endforeach

                            @if(count($fotos) > 1)
                                <button type="button" class="btn-seta btn-anterior" onclick="moverSlide(this, -1)" aria-label="Imagem anterior">
                                    <i class="bi bi-chevron-left"></i>
                                </button>
                                <button type="button" class="btn-seta btn-proximo" onclick="moverSlide(this, 1)" aria-label="Próxima imagem">
                                    <i class="bi bi-chevron-right"></i>
                                </button>
                                <span class="indicador-contador indicador">1 / {{ count($fotos) }}</span>
                            @endif
                        </div>
                    @endif

                    @if($postagem->status === 'aprovada')
                        <a href="{{ route('postagens.show', $postagem->id) }}" class="btn-ler-mais">
                            Ler publicação
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    @else
                        <span class="aviso-feed">
                            <i class="bi bi-info-circle"></i>
                            Esta publicação ainda não está disponível no feed público.
                        </span>
                    @endif

                    <div class="post-acoes">
                        @if($postagem->status !== 'aprovada')
                            <button
                                type="button"
                                class="btn-acao btn-editar-post"
                                onclick='abrirModalEditar(
                                    {{ $postagem->id }},
                                    @json($postagem->titulo),
                                    @json($postagem->categoria),
                                    @json($postagem->comentario),
                                    @json($fotos)
                                )'>
                                <i class="bi bi-pencil"></i>
                                Editar publicação
                            </button>
                        @endif
                    </div>
                </article>
            @endforeach
        @endif
    </section>

    <section id="calendario" class="aba-conteudo" style="display: none;">
        <div class="header-secao-interna">
            <span class="secao-etiqueta">FIQUE POR DENTRO</span>
            <h2>Calendário de Posts e Eventos</h2>
            <p>Confira os próximos compromissos e datas importantes.</p>
        </div>

        <div class="calendario-aluno">
            @forelse($eventos ?? [] as $evento)
                <div class="evento-aluno">
                    <div class="evento-conteudo">
                        <strong class="evento-data">
                            <i class="bi bi-calendar-event"></i>
                            {{ \Carbon\Carbon::parse($evento->data_evento)->format('d/m/Y') }}
                        </strong>

                        <p class="evento-descricao">{{ $evento->descricao }}</p>

                        <span class="evento-categoria">{{ $evento->categoria }}</span>
                    </div>

                    <span class="evento-sua-vez">Sua vez!</span>
                </div>
            @empty
                <div class="sem-eventos">
                    <i class="bi bi-calendar-check"></i>
                    <h3>Tudo tranquilo por aqui!</h3>
                    <p>Você não possui compromissos agendados.</p>
                </div>
            @endforelse
        </div>
    </section>

    <section id="material" class="aba-conteudo" style="display: none;">
        <div class="header-secao-interna">
            <span class="secao-etiqueta">EXPLORE E APRENDA</span>
            <h2>Material de Apoio</h2>
            <p>Acesse conteúdos para aprofundar seus estudos e inspirar suas publicações.</p>
        </div>

        <div class="materiais-lista">
            <a href="https://brasilescola.uol.com.br/quimica/densidade.htm" target="_blank" rel="noopener noreferrer" class="material-item">
                <div class="material-info">
                    <div class="material-icon"><i class="bi bi-droplet-half"></i></div>
                    <div class="material-texto">
                        <h4>Densidade</h4>
                        <span>Química • Brasil Escola</span>
                    </div>
                </div>
                <i class="bi bi-box-arrow-up-right material-seta"></i>
            </a>

            <a href="https://brasilescola.uol.com.br/geografia/buraco-negro.htm" target="_blank" rel="noopener noreferrer" class="material-item">
                <div class="material-info">
                    <div class="material-icon"><i class="bi bi-stars"></i></div>
                    <div class="material-texto">
                        <h4>Buraco Negro</h4>
                        <span>Astronomia • Brasil Escola</span>
                    </div>
                </div>
                <i class="bi bi-box-arrow-up-right material-seta"></i>
            </a>

            <a href="https://brasilescola.uol.com.br/biologia/anatomia-humana.htm" target="_blank" rel="noopener noreferrer" class="material-item">
                <div class="material-info">
                    <div class="material-icon"><i class="bi bi-heart-pulse"></i></div>
                    <div class="material-texto">
                        <h4>Anatomia Humana</h4>
                        <span>Biologia • Brasil Escola</span>
                    </div>
                </div>
                <i class="bi bi-box-arrow-up-right material-seta"></i>
            </a>

            <a href="https://brasilescola.uol.com.br/biologia/anatomia-humana.htm" target="_blank" rel="noopener noreferrer" class="material-item">
                <div class="material-info">
                    <div class="material-icon"><i class="bi bi-lungs"></i></div>
                    <div class="material-texto">
                        <h4>Anatomia Humana (Estudo Complementar)</h4>
                        <span>Biologia • Brasil Escola</span>
                    </div>
                </div>
                <i class="bi bi-box-arrow-up-right material-seta"></i>
            </a>

            <a href="https://brasilescola.uol.com.br/biologia/sistema-muscular.htm" target="_blank" rel="noopener noreferrer" class="material-item">
                <div class="material-info">
                    <div class="material-icon"><i class="bi bi-activity"></i></div>
                    <div class="material-texto">
                        <h4>Sistema Muscular</h4>
                        <span>Biologia • Brasil Escola</span>
                    </div>
                </div>
                <i class="bi bi-box-arrow-up-right material-seta"></i>
            </a>

            <a href="https://brasilescola.uol.com.br/geografia/planetas-2.htm" target="_blank" rel="noopener noreferrer" class="material-item">
                <div class="material-info">
                    <div class="material-icon"><i class="bi bi-globe-americas"></i></div>
                    <div class="material-texto">
                        <h4>Planetas do Sistema Solar</h4>
                        <span>Astronomia • Brasil Escola</span>
                    </div>
                </div>
                <i class="bi bi-box-arrow-up-right material-seta"></i>
            </a>
        </div>
    </section>
</main>

<div id="modalCriar" class="modal-overlay" style="display: none;">
    <div class="modal-card">
        <div class="modal-header">
            <div>
                <span class="secao-etiqueta">COMPARTILHE CIÊNCIA</span>
                <h2>Criar Nova Publicação</h2>
            </div>
            <button type="button" class="btn-fechar" onclick="fecharModalCriar()" aria-label="Fechar">✕</button>
        </div>

        <form action="{{ route('postagens.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Digite o título" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select id="categoria" name="categoria" class="form-control" required>
                    <option value="" disabled selected>Selecione uma categoria</option>
                    <option value="Beth Indica">Beth Indica</option>
                    <option value="Beth nas Estrelas">Beth nas Estrelas</option>
                    <option value="Beth Anatomy">Beth Anatomy</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comentario">Conteúdo</label>
                <textarea id="comentario" name="comentario" rows="4" class="form-control" placeholder="Escreva o conteúdo..." required></textarea>
            </div>

            <div class="form-group">
                <label for="input-imagem">Imagens (máximo 10)</label>
                <input type="file" name="imagens[]" id="input-imagem" multiple accept="image/*" class="form-control" required onchange="validarInputCriar(this)">
                <small class="ajuda-campo">Você pode selecionar até 10 imagens.</small>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-cancelar" onclick="fecharModalCriar()">Cancelar</button>
                <button type="submit" class="btn-salvar"><i class="bi bi-send"></i> Publicar</button>
            </div>
        </form>
    </div>
</div>

<div id="modalEditar" class="modal-overlay" style="display: none;">
    <div class="modal-card">
        <div class="modal-header">
            <div>
                <span class="secao-etiqueta">ATUALIZE SEU CONTEÚDO</span>
                <h2>Editar Publicação</h2>
            </div>
            <button type="button" class="btn-fechar" onclick="fecharModalEditar()" aria-label="Fechar">✕</button>
        </div>

        <form id="formEditar" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="edit_titulo">Título</label>
                <input type="text" id="edit_titulo" name="titulo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="edit_categoria">Categoria</label>
                <select id="edit_categoria" name="categoria" class="form-control" required>
                    <option value="" disabled>Selecione uma categoria</option>
                    <option value="Beth Indica">Beth Indica</option>
                    <option value="Beth nas Estrelas">Beth nas Estrelas</option>
                    <option value="Beth Anatomy">Beth Anatomy</option>
                </select>
            </div>

            <div class="form-group">
                <label for="edit_comentario">Conteúdo</label>
                <textarea id="edit_comentario" name="comentario" rows="4" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label>Fotos atuais (marque para remover)</label>
                <div id="container-fotos-atuais" class="fotos-atuais-grid"></div>
            </div>

            <div class="form-group">
                <label for="edit_imagens">Adicionar novas fotos (opcional)</label>
                <input type="file" name="imagens[]" id="edit_imagens" multiple accept="image/*" class="form-control">
                <span id="erro-limite-edit" class="erro-limite" hidden>Máximo de 10 imagens excedido!</span>
                <div id="preview-edit" class="preview-grid"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-cancelar" onclick="fecharModalEditar()">Cancelar</button>
                <button type="submit" class="btn-salvar"><i class="bi bi-check2"></i> Salvar alterações</button>
            </div>
        </form>
    </div>
</div>

<script>
    function mostrarAba(abaId) {
        ['publicacoes', 'calendario', 'material'].forEach(id => {
            document.getElementById(id).style.display = id === abaId ? 'block' : 'none';
        });

        document.getElementById('btnPubs').classList.toggle('btn-menu-ativo', abaId === 'publicacoes');
        document.getElementById('btnCal').classList.toggle('btn-menu-ativo', abaId === 'calendario');
        document.getElementById('btnMat').classList.toggle('btn-menu-ativo', abaId === 'material');
    }

    function abrirModalCriar() {
        document.getElementById('modalCriar').style.display = 'flex';
    }

    function fecharModalCriar() {
        document.getElementById('modalCriar').style.display = 'none';
    }

    function validarInputCriar(input) {
        if (input.files.length > 10) {
            alert('Você só pode selecionar no máximo 10 imagens por postagem!');
            input.value = '';
        }
    }

    let dtEdit = new DataTransfer();

    const inputEditImagens = document.getElementById('edit_imagens');
    const containerPreviewEdit = document.getElementById('preview-edit');
    const erroLimiteEdit = document.getElementById('erro-limite-edit');

    function abrirModalEditar(id, titulo, categoria, comentario, fotosAtuais) {
        document.getElementById('formEditar').action = `/postagens/${id}`;
        document.getElementById('edit_titulo').value = titulo;
        document.getElementById('edit_categoria').value = categoria;
        document.getElementById('edit_comentario').value = comentario;

        const containerFotosAtuais = document.getElementById('container-fotos-atuais');
        containerFotosAtuais.innerHTML = '';

        if (fotosAtuais && fotosAtuais.length > 0) {
            fotosAtuais.forEach(fotoPath => {
                const item = document.createElement('div');
                item.className = 'foto-item';
                item.innerHTML = `
                    <img src="/storage/${fotoPath}" alt="Foto atual">
                    <label>
                        <input type="checkbox" name="remover_imagens[]" value="${fotoPath}">
                        Remover
                    </label>
                `;
                containerFotosAtuais.appendChild(item);
            });
        } else {
            containerFotosAtuais.innerHTML = '<p class="sem-fotos">Nenhuma foto salva.</p>';
        }

        dtEdit = new DataTransfer();
        inputEditImagens.value = '';
        containerPreviewEdit.innerHTML = '';
        erroLimiteEdit.hidden = true;

        document.getElementById('modalEditar').style.display = 'flex';
    }

    function fecharModalEditar() {
        document.getElementById('modalEditar').style.display = 'none';
    }

    inputEditImagens.addEventListener('change', function() {
        const novosArquivos = Array.from(this.files);

        if (dtEdit.files.length + novosArquivos.length > 10) {
            erroLimiteEdit.hidden = false;
            this.files = dtEdit.files;
            return;
        }

        erroLimiteEdit.hidden = true;

        novosArquivos.forEach(arquivo => {
            if (arquivo.type.startsWith('image/')) {
                dtEdit.items.add(arquivo);
            }
        });

        this.files = dtEdit.files;
        renderizarPreviewEdit();
    });

    function renderizarPreviewEdit() {
        containerPreviewEdit.innerHTML = '';

        Array.from(dtEdit.files).forEach((arquivo, index) => {
            const leitor = new FileReader();

            leitor.onload = function(e) {
                const div = document.createElement('div');
                div.className = 'preview-item';
                div.innerHTML = `
                    <img src="${e.target.result}" alt="Pré-visualização">
                    <button type="button" class="btn-remove-img" onclick="removerImagemEdit(${index})">✕</button>
                `;
                containerPreviewEdit.appendChild(div);
            };

            leitor.readAsDataURL(arquivo);
        });
    }

    function removerImagemEdit(index) {
        const auxDt = new DataTransfer();

        for (let i = 0; i < dtEdit.files.length; i++) {
            if (i !== index) {
                auxDt.items.add(dtEdit.files[i]);
            }
        }

        dtEdit = auxDt;
        inputEditImagens.files = dtEdit.files;

        if (dtEdit.files.length <= 10) {
            erroLimiteEdit.hidden = true;
        }

        renderizarPreviewEdit();
    }

    window.addEventListener('click', function(event) {
        const modalCriar = document.getElementById('modalCriar');
        const modalEditar = document.getElementById('modalEditar');

        if (event.target === modalCriar) fecharModalCriar();
        if (event.target === modalEditar) fecharModalEditar();
    });

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.carrossel-post').forEach(carrossel => {
            const slides = carrossel.querySelectorAll('.slide');

            slides.forEach((slide, index) => {
                if (index !== 0) slide.hidden = true;
            });
        });
    });

    function moverSlide(btn, direcao) {
        const carrossel = btn.closest('.carrossel-post');
        const slides = carrossel.querySelectorAll('.slide');
        const indicador = carrossel.querySelector('.indicador');

        let indexAtual = parseInt(carrossel.getAttribute('data-index')) || 0;

        slides[indexAtual].hidden = true;
        indexAtual += direcao;

        if (indexAtual >= slides.length) indexAtual = 0;
        if (indexAtual < 0) indexAtual = slides.length - 1;

        slides[indexAtual].hidden = false;
        carrossel.setAttribute('data-index', indexAtual);

        if (indicador) {
            indicador.innerText = (indexAtual + 1) + ' / ' + slides.length;
        }
    }
</script>

</body>
</html>