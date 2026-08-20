<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Beth Cientista</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(180deg, #6f00a8 0%, #b316d1 55%, #ef6b72 100%);
            overflow: hidden;
            position: relative;
        }

        body::before,
        body::after {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            background: white;
            border-radius: 50%;
            opacity: .7;
        }

        body::before {
            top: 12%;
            left: 15%;
            box-shadow:
                200px 80px white,
                500px 150px white,
                800px 50px white,
                950px 320px white,
                120px 500px white,
                650px 620px white,
                980px 700px white;
        }

        body::after {
            bottom: 8%;
            right: 12%;
        }

        .login-box {
            width: 430px;
            background: linear-gradient(180deg, #f8d7ff, #ffe2d2);
            padding: 35px;
            border-radius: 30px;
            box-shadow: 0 15px 35px rgba(0,0,0,.25);
            position: relative;
            z-index: 2;
        }

        .avatar {
            width: 110px;
            height: 110px;
            margin: auto;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid white;
            box-shadow: 0 8px 20px rgba(0,0,0,.20);
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 40px;
            color: #1e1e1e;
            font-weight: 800;
        }

        .subtitle {
            text-align: center;
            color: #555;
            font-size: 18px;
            margin: 12px 0 30px;
        }

        label {
            display: block;
            color: #333;
            font-weight: 700;
            margin-bottom: 8px;
            font-size: 18px;
        }

        .access {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .access button {
            flex: 1;
            border: none;
            padding: 12px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .student, .teacher {
            background: #ececec;
            color: #333;
        }

        .access button.selected {
            background: #8b2cf5;
            color: white;
            box-shadow: 0 5px 15px rgba(139,44,245,.3);
        }

        .access button:hover {
            transform: translateY(-3px);
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 15px;
            background: #f2f2f2;
            margin-bottom: 22px;
            font-size: 16px;
            outline: none;
            transition: .3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            background: white;
            box-shadow: 0 0 0 2px #ff8b00;
        }

        .login-btn {
            width: 100%;
            border: none;
            background: #ff7a00;
            color: white;
            padding: 15px;
            border-radius: 30px;
            font-size: 22px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s;
            box-shadow: 0 8px 18px rgba(255,122,0,.35);
        }

        .login-btn:hover {
            background: #ff9500;
            transform: translateY(-3px);
        }

        .demo {
            margin-top: 25px;
            background: white;
            border-left: 6px solid #ff8b00;
            padding: 18px;
            border-radius: 15px;
        }

        .demo p {
            color: #555;
            font-size: 15px;
            line-height: 26px;
        }

        .mensagem {
            margin-top: 15px;
            padding: 12px;
            background: #ffdede;
            color: #a00000;
            border-radius: 10px;
            text-align: center;
        }

        @media(max-width:768px) {
            .login-box {
                width: 92%;
                padding: 25px;
            }

            h1 {
                font-size: 32px;
            }

            .subtitle {
                font-size: 16px;
            }

            .access {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <div class="login-box">

        <div class="avatar">
            <img src="{{ asset('Beth.jpg') }}" alt="Beth Cientista">
        </div>

        <h1>BETH CIENTISTA</h1>

        <div class="subtitle">
            Área exclusiva para clubistas e professores
        </div>

        @if(session('erro'))
            <div class="mensagem">
                {{ session('erro') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <label>Tipo de Acesso</label>

            <div class="access">
                <button type="button" class="student selected" id="alunoBtn">
                    Aluno
                </button>
                <button type="button" class="teacher" id="professorBtn">
                    Professor
                </button>
            </div>

            <input type="hidden" name="tipo" id="tipoAcesso" value="aluno">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="seu.email@exemplo.com" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="******" required>

            <button type="submit" class="login-btn">
                ↗ Entrar
            </button>
        </form>

        <div class="demo">
            <p>Demo: use qualquer email e senha</p>
            <p>Aluno: acessa área de publicações | Professor: acessa área administrativa</p>
        </div>

    </div>

    <script>
        const alunoBtn = document.getElementById("alunoBtn");
        const professorBtn = document.getElementById("professorBtn");
        const tipoAcesso = document.getElementById("tipoAcesso");

        alunoBtn.addEventListener("click", function () {
            tipoAcesso.value = "aluno";
            alunoBtn.classList.add("selected");
            professorBtn.classList.remove("selected");
        });

        professorBtn.addEventListener("click", function () {
            tipoAcesso.value = "professor";
            professorBtn.classList.add("selected");
            alunoBtn.classList.remove("selected");
        });
    </script>

</body>
</html>

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| ROTAS DE LOGIN
|--------------------------------------------------------------------------
*/

// 1. Rota GET: Apenas exibe a página do formulário
Route::get('/login', function () {
    return view('login');
})->name('login');

// 2. Rota POST: Processa o envio dos dados do formulário
Route::post('/login', function (Request $request) {

    $tipo = $request->input('tipo');

    if ($tipo === 'aluno') {
        return redirect()->route('aluno');
    }

    if ($tipo === 'professor') {
        return redirect()->route('professor');
    }

    return redirect()
        ->route('login')
        ->with('erro', 'Selecione Aluno ou Professor.');
});

/*
|--------------------------------------------------------------------------
| PAINÉIS
|--------------------------------------------------------------------------
*/

Route::get('/aluno', function () {
    return view('aluno');
})->name('aluno');

Route::get('/professor', function () {
    return view('professor');
})->name('professor');