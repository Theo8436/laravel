<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro | Beth Cientista</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');


/* =========================
   CONFIGURAÇÕES GERAIS
========================= */

*{

    margin:0;
    padding:0;

    box-sizing:border-box;

    font-family:'Poppins',sans-serif;

}


body{

    min-height:100vh;

    background:
        linear-gradient(
            180deg,
            #7000a8 0%,
            #b400d4 55%,
            #ef6c73 100%
        );

    display:flex;

    justify-content:center;

    align-items:center;

    padding:30px;

}


/* =========================
   FUNDO
========================= */

body::before{

    content:"";

    position:fixed;

    width:10px;
    height:10px;

    background:white;

    border-radius:50%;

    top:15%;
    left:12%;

    opacity:.7;

    box-shadow:

        200px 100px white,
        500px 40px white,
        750px 200px white,
        100px 500px white,
        850px 550px white,
        600px 650px white;

}


/* =========================
   CONTAINER
========================= */

.cadastro-container{

    width:100%;

    display:flex;

    justify-content:center;

}


/* =========================
   CARD
========================= */

.cadastro-card{

    width:460px;

    background:
        linear-gradient(
            180deg,
            #f9d9ff,
            #ffe2d2
        );

    padding:40px;

    border-radius:30px;

    box-shadow:
        0 15px 40px rgba(0,0,0,.28);

    position:relative;

    z-index:2;

}


/* =========================
   LOGO
========================= */

.logo{

    text-align:center;

    margin-bottom:25px;

}


.logo img{

    width:85px;

    height:85px;

    object-fit:cover;

    border-radius:50%;

    background:white;

    padding:4px;

    border:4px solid white;

    box-shadow:
        0 6px 15px rgba(0,0,0,.2);

}


.logo h1{

    margin-top:12px;

    color:#222;

    font-size:30px;

    font-weight:800;

}


.logo p{

    color:#666;

    font-size:14px;

}


/* =========================
   TÍTULO
========================= */

.titulo{

    text-align:center;

    margin-bottom:30px;

}


.titulo h2{

    color:#4c1d95;

    font-size:32px;

    font-weight:800;

}


.titulo p{

    color:#666;

    font-size:15px;

    margin-top:5px;

}


/* =========================
   CAMPOS
========================= */

.campo{

    margin-bottom:20px;

}


.campo label{

    display:block;

    color:#333;

    font-size:17px;

    font-weight:700;

    margin-bottom:8px;

}


.campo input,
.campo select{

    width:100%;

    padding:14px 16px;

    border:none;

    outline:none;

    border-radius:14px;

    background:#f1f1f1;

    color:#333;

    font-size:16px;

    transition:.3s;

}


.campo input:focus,
.campo select:focus{

    background:white;

    box-shadow:
        0 0 0 3px rgba(255,122,0,.25);

}


.campo input::placeholder{

    color:#999;

}


/* =========================
   SELECT
========================= */

.campo select{

    cursor:pointer;

}


/* =========================
   BOTÃO CADASTRAR
========================= */

.btn-cadastrar{

    width:100%;

    border:none;

    padding:15px;

    border-radius:30px;

    background:#ff7a00;

    color:white;

    font-size:20px;

    font-weight:700;

    cursor:pointer;

    box-shadow:
        0 7px 18px rgba(255,122,0,.35);

    transition:.3s;

}


.btn-cadastrar:hover{

    background:#ff9200;

    transform:translateY(-3px);

}


/* =========================
   BOTÃO VOLTAR
========================= */

.btn-voltar{

    width:100%;

    margin-top:15px;

    padding:12px;

    border:none;

    background:transparent;

    color:#5b21b6;

    font-size:15px;

    font-weight:600;

    cursor:pointer;

    transition:.3s;

}


.btn-voltar:hover{

    color:#ff7a00;

}


/* =========================
   MENSAGENS
========================= */

#mensagem{

    text-align:center;

    margin-bottom:15px;

    font-size:14px;

    font-weight:600;

}


.sucesso{

    color:#188038;

}


.erro{

    color:#d93025;

}


/* =========================
   RESPONSIVO
========================= */

@media(max-width:600px){

    body{

        padding:15px;

    }


    .cadastro-card{

        width:100%;

        padding:30px 25px;

        border-radius:25px;

    }


    .logo h1{

        font-size:25px;

    }


    .titulo h2{

        font-size:27px;

    }

}
</style>
<body>

    <main class="cadastro-container">

        <div class="cadastro-card">

            <!-- LOGO -->
            <div class="logo">

                <img src="img/logo.png" alt="Logo Beth Cientista">

                <h1>BETH CIENTISTA</h1>

                <p>Divulgação Científica</p>

            </div>

            <!-- TÍTULO -->
            <div class="titulo">

                <h2>CRIAR CONTA</h2>

                <p>Cadastre-se para fazer parte da Beth Cientista</p>

            </div>

            <!-- FORMULÁRIO -->
            <form id="formCadastro">

                <div class="campo">

                    <label for="nome">Nome</label>

                    <input
                        type="text"
                        id="nome"
                        placeholder="Digite seu nome"
                        required
                    >

                </div>

                <div class="campo">

                    <label for="email">E-mail</label>

                    <input
                        type="email"
                        id="email"
                        placeholder="seu.email@exemplo.com"
                        required
                    >

                </div>

                <div class="campo">

                    <label for="nivel">Nível</label>

                    <select id="nivel" required>

                        <option value="">Selecione seu nível</option>

                        <option value="Aluno Clubista">
                            Aluno Clubista
                        </option>

                        <option value="Professor">
                            Professor
                        </option>

                    </select>

                </div>

                <!-- MENSAGEM -->
                <div id="mensagem"></div>

                <!-- BOTÃO -->
                <button type="submit" class="btn-cadastrar">

                    Cadastrar

                </button>

            </form>

            <!-- VOLTAR -->
            <button
                type="button"
                class="btn-voltar"
                onclick="voltarInicio()">

                ← Voltar para o início

            </button>

        </div>

    </main>


    <script>

        const formulario = document.getElementById("formCadastro");
        const mensagem = document.getElementById("mensagem");


        formulario.addEventListener("submit", function(event){

            event.preventDefault();

            const nome = document.getElementById("nome").value.trim();
            const email = document.getElementById("email").value.trim();
            const nivel = document.getElementById("nivel").value;


            if(nome === "" || email === "" || nivel === ""){

                mensagem.textContent = "Preencha todos os campos.";

                mensagem.className = "erro";

                return;

            }


            // Salva os dados no navegador
            const usuario = {

                nome: nome,
                email: email,
                nivel: nivel

            };


            localStorage.setItem(
                "usuarioBeth",
                JSON.stringify(usuario)
            );


            mensagem.textContent = "Cadastro realizado com sucesso!";

            mensagem.className = "sucesso";


            // Depois de cadastrar, volta para a página inicial
            setTimeout(function(){

                window.location.href = "index.html";

            }, 1000);

        });


        function voltarInicio(){

            window.location.href = "index.html";

        }

    </script>

</body>
</html>