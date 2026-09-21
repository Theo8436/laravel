<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Área | Beth Cientista</title>

    <!-- Fontes e Ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(180deg, #6f0ea7 0%, #b217c7 55%, #ea6b72 100%);
            color: #333;
            min-height: 100vh;
        }

        /* ================= HEADER ================= */
        header {
            width: 100%;
            background: #ff7a00;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 60px;
            box-shadow: 0 5px 18px rgba(0,0,0,.25);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: white;
            object-fit: cover;
        }

        .logo h2 {
            color: white;
            font-size: 26px;
            font-weight: 800;
            line-height: 1.1;
        }

        .logo p {
            color: white;
            font-size: 13px;
        }

        /* ================= NAVBAR ================= */
        nav {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        nav a, nav button {
            border: none;
            background: white;
            color: #ff7a00;
            padding: 10px 18px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
        }

        nav a:hover, nav button:hover {
            transform: translateY(-3px);
            background: #ffe3cb;
        }

        nav .ativo {
            background: #ffd84f;
            color: #333;
        }

        /* ================= MAIN CONTAINER ================= */
        main {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* ================= PERFIL ================= */
        .perfil {
            background: white;
            border-radius: 25px;
            padding: 35px;
            display: flex;
            align-items: center;
            gap: 30px;
            box-shadow: 0 10px 25px rgba(0,0,0,.20);
            margin-bottom: 35px;
        }

        .foto {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(180deg,#cf5df7,#ff70b7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            position: relative;
            flex-shrink: 0;
        }

        .foto i { font-size: 50px; }

        .foto span {
            position: absolute;
            bottom: -10px;
            background: #9b4dff;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .perfil h1 {
            color: #222;
            font-size: 32px;
            margin-bottom: 5px;
        }

        .perfil p {
            color: #666;
            font-size: 16px;
        }

        /* ================= MENU DE NAVEGAÇÃO INTERNA ================= */
        .menu-area {
            display: flex;
            gap: 15px;
            margin-bottom: 35px;
        }

        .menu-area button {
            flex: 1;
            border: none;
            background: white;
            color: #333;
            padding: 16px;
            border-radius: 18px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
            box-shadow: 0 8px 18px rgba(0,0,0,.15);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .menu-area button:hover, .menu-area button.btn-menu-ativo {
            background: #ff7a00;
            color: white;
        }

        /* ================= HEADER DA SEÇÃO ================= */
        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .header-top h1 {
            color: #fff;
            font-size: 28px;
            font-weight: 800;
        }

        .btn-novo-post {
            background: #111;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-novo-post:hover {
            background: #ff7a00;
            transform: translateY(-2px);
        }

        /* ================= ALERTAS ESTILIZADOS COM CORES DO TEMA ================= */
        .alerta-sucesso {
            background: #6f0ea7;
            color: #ffffff;
            padding: 16px 20px;
            border-radius: 16px;
            margin-bottom: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            font-size: 15px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 12px;
            border-left: 6px solid #ffd84f;
        }

        .alerta-erro {
            background: #fee2e2;
            color: #991b1b;
            padding: 14px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 1px solid #fecaca;
            font-size: 14px;
        }

        /* ================= POST CARD ================= */
        .post-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .post-autor {
            font-size: 14px;
            color: #666;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .categoria-badge {
            background: #eef2ff;
            color: #6f0ea7;
            font-weight: 700;
            font-size: 12px;
            padding: 4px 12px;
            border-radius: 12px;
            text-transform: uppercase;
        }

        .post-titulo {
            font-size: 22px;
            color: #1a1a1a;
            margin-bottom: 10px;
            line-height: 1.3;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .post-resumo {
            color: #4b5563;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 12px;
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-all;
        }

        .btn-ler-mais {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #ff7700;
            color: #ffffff;
            padding: 8px 18px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 15px;
            text-decoration: none;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .btn-ler-mais:hover {
            background-color: #e66a00;
            transform: translateY(-1px);
        }

        /* ================= CARROSSEL ================= */
        .carrossel-container {
            position: relative;
            max-width: 100%;
            height: 320px;
            border-radius: 12px;
            overflow: hidden;
            background: #000;
            margin-bottom: 20px;
        }

        .carrossel-container img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            display: block;
        }

        .btn-seta {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s ease, transform 0.2s ease;
            user-select: none;
            z-index: 5;
        }

        .btn-seta:hover {
            background: rgba(0, 0, 0, 0.9);
            transform: translateY(-50%) scale(1.1);
        }

        .btn-anterior { left: 10px; }
        .btn-proximo { right: 10px; }

        .indicador-contador {
            position: absolute;
            bottom: 10px;
            right: 12px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        /* ================= AÇÕES DO CARD ================= */
        .post-acoes {
            display: flex;
            gap: 10px;
            border-top: 1px solid #f0f0f0;
            padding-top: 15px;
        }

        .btn-acao {
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 13px;
            cursor: pointer;
            border: none;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: opacity 0.2s;
            text-decoration: none;
        }

        .btn-editar-post { background: #f3f4f6; color: #374151; }
        .btn-excluir-post { background: #fef2f2; color: #dc2626; }
        .btn-acao:hover { opacity: 0.8; }

        /* ================= SEÇÕES EXTRAS ================= */
        #calendario, #material {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 20px rgba(0,0,0,.20);
        }

        #calendario h2, #material h2 { color: #333; margin-bottom: 20px; }
        #calendario input {
            width: 100%;
            padding: 18px;
            border: 2px solid #ddd;
            border-radius: 15px;
            font-size: 18px;
        }

        /* ================= MODAIS ================= */
        .modal-overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .modal-card {
            background: #fff;
            width: 90%;
            max-width: 550px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            font-size: 18px;
            font-weight: 800;
            color: #6f0ea7;
            text-transform: uppercase;
        }

        .btn-fechar {
            background: none; border: none;
            font-size: 22px; cursor: pointer; color: #888;
        }

        .form-group { margin-bottom: 16px; }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 13px;
            color: #444;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            background-color: #f9fafb;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            background-color: #fff;
            border-color: #6f0ea7;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .btn-cancelar {
            background: #f3f4f6;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
            color: #4b5563;
        }

        .btn-salvar {
            background: #6f0ea7;
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .btn-confirmar-deletar {
            background: #dc2626;
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
        }

        .fotos-atuais-grid, .preview-grid {
            display: flex; gap: 10px; flex-wrap: wrap; margin-top: 8px;
        }

        .foto-item, .preview-item {
            position: relative;
            border: 1px solid #e5e7eb;
            padding: 4px; border-radius: 8px; background: #fafafa;
        }

        .foto-item img, .preview-item img {
            width: 70px; height: 70px; object-fit: cover; border-radius: 6px;
        }

        .foto-item label {
            font-size: 11px; color: #dc2626; font-weight: bold; margin-top: 4px; cursor: pointer;
        }

        .btn-remove-img {
            position: absolute; top: -5px; right: -5px;
            background: red; color: white; border: none;
            border-radius: 50%; width: 20px; height: 20px;
            font-size: 11px; cursor: pointer;
        }

        /* MODAL EXCLUIR ESTILIZADO */
        .modal-excluir-body {
            text-align: center;
            padding: 10px 0;
        }

        .modal-excluir-body i {
            font-size: 55px;
            color: #ea6b72;
            margin-bottom: 12px;
        }

        .modal-excluir-body h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 8px;
        }

        .modal-excluir-body p {
            color: #666;
            font-size: 14px;
        }

        /* RESPONSIVO */
        @media(max-width: 1000px){
            header { flex-direction: column; padding: 20px; }
            nav { flex-wrap: wrap; justify-content: center; margin-top: 15px; }
            main { width: 95%; padding: 0 10px; }
            .perfil { flex-direction: column; text-align: center; }
            .menu-area { flex-direction: column; }
            .header-top { flex-direction: column; gap: 15px; text-align: center; }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header>
    <div class="logo">
        <img src="{{ asset('Beth.jpg') }}" alt="Beth Logo">
        <div>
            <h2>BETH CIENTISTA</h2>
            <p>Divulgação Científica</p>
        </div>
    </div>

    <nav>
        <a href="{{ route('aluno.inicio') }}">Início</a>
        <a href="{{ route('aluno.sobre') }}">Sobre</a>
        <a href="{{ route('aluno.galeria') }}">Galeria</a>
        <a href="{{ route('aluno.biblioteca') }}">Biblioteca</a>
        <a href="{{ route('aluno.mencao') }}">Menções honrosas</a>
        <button class="ativo">Minha Área</button>
        <a href="{{ route('inicio') }}">Sair</a>
    </nav>
</header>

<main>
    <!-- PERFIL -->
    <section class="perfil">
        <div class="foto">
            <i class="bi bi-person"></i>
            <span>Clubista</span>
        </div>
        <div>
            <h1>{{ Auth::guard('alunos')->user()->nome ?? 'Clubista' }}</h1>
            <p>Bem-vindo(a) à sua área!</p>
        </div>
    </section>

    <!-- MENU DE ABAS -->
    <section class="menu-area">
        <button id="btnPubs" class="btn-menu-ativo" onclick="mostrarAba('publicacoes')">
            <i class="bi bi-file-earmark-text"></i> Minhas Publicações
        </button>
        <button id="btnCal" onclick="mostrarAba('calendario')">
            <i class="bi bi-calendar3"></i> Calendário
        </button>
        <button id="btnMat" onclick="mostrarAba('material')">
            <i class="bi bi-book"></i> Material de Apoio
        </button>
    </section>

    <!-- SEÇÃO PUBLICAÇÕES -->
    <section id="publicacoes">
        <div class="header-top">
            <h1>GERENCIAR PUBLICAÇÕES</h1>
            <button type="button" onclick="abrirModalCriar()" class="btn-novo-post">
                <i class="bi bi-plus-circle-fill"></i> Nova Publicação
            </button>
        </div>

        <!-- MENSAGEM DE SUCESSO ESTILIZADA -->
        @if(session('sucesso'))
            <div class="alerta-sucesso">
                <i class="bi bi-check-circle-fill" style="font-size: 22px; color: #ffd84f;"></i>
                <span>{{ session('sucesso') }}</span>
            </div>
        @endif

        <!-- MENSAGENS DE ERRO -->
        @if(session('erro'))
            <div class="alerta-erro">
                {{ session('erro') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alerta-erro">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- LISTA DE POSTAGENS -->
        @foreach($postagens as $postagem)
            <article class="post-card">
                <div class="post-header">
                    <span class="post-autor"><i class="bi bi-person-circle"></i> {{ $postagem->user->nome ?? 'Anônimo' }}</span>
                    <span class="categoria-badge">{{ $postagem->categoria ?? 'Geral' }}</span>
                </div>

                <h2 class="post-titulo">{{ $postagem->titulo }}</h2>

                <p class="post-resumo">
                    {{ $postagem->comentario }}
                </p>

                <div>
                    <a href="{{ route('postagens.show', $postagem->id) }}" class="btn-ler-mais">
                        Ler mais <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- CARROSSEL DE IMAGENS -->
                @if($postagem->imagem)
                    @php
                        $fotos = json_decode($postagem->imagem, true) ?? [];
                        if (!is_array($fotos)) {
                            $fotos = [$postagem->imagem];
                        }
                    @endphp

                    @if(count($fotos) > 0)
                        <div class="carrossel-container carrossel-post" data-index="0">
                            <div>
                                @foreach($fotos as $foto)
                                    <div class="slide">
                                        <img src="{{ asset('storage/' . $foto) }}" alt="Foto da postagem">
                                    </div>
                                @endforeach
                            </div>

                            @if(count($fotos) > 1)
                                <button type="button" class="btn-seta btn-anterior" onclick="moverSlide(this, -1)">❮</button>
                                <button type="button" class="btn-seta btn-proximo" onclick="moverSlide(this, 1)">❯</button>
                                <span class="indicador-contador indicador">1 / {{ count($fotos) }}</span>
                            @endif
                        </div>
                    @endif
                @endif

                <div class="post-acoes">
                    <button type="button" class="btn-acao btn-editar-post" 
                        onclick="abrirModalEditar({{ $postagem->id }}, '{{ addslashes($postagem->titulo) }}', '{{ $postagem->categoria }}', '{{ addslashes($postagem->comentario) }}', {{ json_encode($fotos) }})">
                        <i class="bi bi-pencil"></i> Editar
                    </button>

                    <!-- BOTÃO EXCLUIR USANDO MODAL FORMATADO -->
                    <button type="button" class="btn-acao btn-excluir-post" onclick="abrirModalExcluir({{ $postagem->id }})">
                        <i class="bi bi-trash"></i> Excluir
                    </button>
                </div>
            </article>
        @endforeach
    </section>

    <!-- SEÇÃO CALENDÁRIO -->
    <section id="calendario" style="display: none;">
        <h2>Calendário</h2>
        <input type="date">
    </section>

    <!-- SEÇÃO MATERIAL -->
    <section id="material" style="display: none;">
        <h2>Material de Apoio</h2>
        <p>Arquivos, PDFs e vídeos ficarão aqui.</p>
    </section>
</main>

<!-- MODAL CONFIRMAR EXCLUSÃO -->
<div id="modalExcluir" class="modal-overlay" style="display: none;">
    <div class="modal-card">
        <div class="modal-excluir-body">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <h3>Excluir Publicação</h3>
            <p>Tem certeza de que deseja apagar esta publicação? Esta ação não pode ser desfeita.</p>
        </div>
        
        <form id="formExcluir" method="POST" style="margin: 0;">
            @csrf
            @method('DELETE')

            <div class="modal-footer" style="justify-content: center;">
                <button type="button" class="btn-cancelar" onclick="fecharModalExcluir()">Cancelar</button>
                <button type="submit" class="btn-confirmar-deletar">Sim, Excluir</button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL CRIAR -->
<div id="modalCriar" class="modal-overlay" style="display: none;">
    <div class="modal-card">
        <div class="modal-header">
            <h2>Criar Nova Publicação</h2>
            <button type="button" class="btn-fechar" onclick="fecharModalCriar()">✕</button>
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
                <label for="input-imagem">Imagens (máximo 10 em JPG)</label>
                <input type="file" name="imagens[]" id="input-imagem" multiple accept="image/*" class="form-control" required onchange="validarInputCriar(this)">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-cancelar" onclick="fecharModalCriar()">Cancelar</button>
                <button type="submit" class="btn-salvar">Publicar</button>
            </div>
        </form>
    </div>
</div>

<!-- MODAL EDITAR -->
<div id="modalEditar" class="modal-overlay" style="display: none;">
    <div class="modal-card">
        <div class="modal-header">
            <h2>Editar Publicação</h2>
            <button type="button" class="btn-fechar" onclick="fecharModalEditar()">✕</button>
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
                <label>Fotos Atuais (Marque para remover):</label>
                <div id="container-fotos-atuais" class="fotos-atuais-grid"></div>
            </div>

            <div class="form-group">
                <label for="edit_imagens">Adicionar Novas Fotos (Opcional):</label>
                <input type="file" name="imagens[]" id="edit_imagens" multiple accept="image/*" class="form-control">
                <span id="erro-limite-edit" style="color: red; font-size: 12px;" hidden>Máximo de 10 imagens excedido!</span>
                <div id="preview-edit" class="preview-grid"></div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn-cancelar" onclick="fecharModalEditar()">Cancelar</button>
                <button type="submit" class="btn-salvar">Salvar Alterações</button>
            </div>
        </form>
    </div>
</div>

<script>
    /* --- TROCA DE ABAS DO MENU --- */
    function mostrarAba(abaId) {
        document.getElementById('publicacoes').style.display = 'none';
        document.getElementById('calendario').style.display = 'none';
        document.getElementById('material').style.display = 'none';

        document.getElementById('btnPubs').classList.remove('btn-menu-ativo');
        document.getElementById('btnCal').classList.remove('btn-menu-ativo');
        document.getElementById('btnMat').classList.remove('btn-menu-ativo');

        document.getElementById(abaId).style.display = 'block';

        if(abaId === 'publicacoes') document.getElementById('btnPubs').classList.add('btn-menu-ativo');
        if(abaId === 'calendario') document.getElementById('btnCal').classList.add('btn-menu-ativo');
        if(abaId === 'material') document.getElementById('btnMat').classList.add('btn-menu-ativo');
    }

    /* --- MODAL EXCLUIR --- */
    function abrirModalExcluir(id) {
        document.getElementById('formExcluir').action = `/postagens/${id}`;
        document.getElementById('modalExcluir').style.display = 'flex';
    }

    function fecharModalExcluir() {
        document.getElementById('modalExcluir').style.display = 'none';
    }

    /* --- MODAIS --- */
    function abrirModalCriar() {
        document.getElementById('modalCriar').style.display = 'flex';
    }

    function fecharModalCriar() {
        document.getElementById('modalCriar').style.display = 'none';
    }

    function validarInputCriar(input) {
        if (input.files.length > 10) {
            alert("Você só pode selecionar no máximo 10 imagens por postagem!");
            input.value = "";
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
            fotosAtuais.forEach((fotoPath) => {
                const item = document.createElement('div');
                item.className = 'foto-item';
                item.innerHTML = `
                    <img src="/storage/${fotoPath}" alt="Foto">
                    <label>
                        <input type="checkbox" name="remover_imagens[]" value="${fotoPath}"> Remover
                    </label>
                `;
                containerFotosAtuais.appendChild(item);
            });
        } else {
            containerFotosAtuais.innerHTML = '<p style="font-size: 12px; color: #777;">Nenhuma foto salva.</p>';
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

    if(inputEditImagens) {
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
    }

    function renderizarPreviewEdit() {
        containerPreviewEdit.innerHTML = '';
        Array.from(dtEdit.files).forEach((arquivo, index) => {
            const leitor = new FileReader();
            leitor.onload = function(e) {
                const div = document.createElement('div');
                div.className = 'preview-item';
                div.innerHTML = `
                    <img src="${e.target.result}" alt="Preview">
                    <button type="button" class="btn-remove-img" onclick="removerImagemEdit(${index})">✕</button>
                `;
                containerPreviewEdit.appendChild(div);
            }
            leitor.readAsDataURL(arquivo);
        });
    }

    function removerImagemEdit(index) {
        const auxDt = new DataTransfer();
        const arquivos = dtEdit.files;

        for (let i = 0; i < arquivos.length; i++) {
            if (i !== index) { auxDt.items.add(arquivos[i]); }
        }

        dtEdit = auxDt;
        inputEditImagens.files = dtEdit.files;

        if (dtEdit.files.length <= 10) {
            erroLimiteEdit.hidden = true;
        }

        renderizarPreviewEdit();
    }

    window.onclick = function(event) {
        const modalCriar = document.getElementById('modalCriar');
        const modalEditar = document.getElementById('modalEditar');
        const modalExcluir = document.getElementById('modalExcluir');
        if (event.target === modalCriar) fecharModalCriar();
        if (event.target === modalEditar) fecharModalEditar();
        if (event.target === modalExcluir) fecharModalExcluir();
    }

    /* --- CARROSSEL DE FOTOS --- */
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.carrossel-post').forEach(carrossel => {
            const slides = carrossel.querySelectorAll('.slide');
            slides.forEach((slide, idx) => {
                if (idx !== 0) slide.hidden = true;
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

        if (indexAtual >= slides.length) {
            indexAtual = 0;
        } else if (indexAtual < 0) {
            indexAtual = slides.length - 1;
        }

        slides[indexAtual].hidden = false;
        carrossel.setAttribute('data-index', indexAtual);

        if (indicador) {
            indicador.innerText = (indexAtual + 1) + ' / ' + slides.length;
        }
    }
</script>

</body>
</html>