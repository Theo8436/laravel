<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login | Beth Cientista</title>


    {{-- FAVICON --}}

    <link
        rel="icon"
        type="image/jpeg"
        href="{{ asset('images/beth-logo.jpeg') }}"
    >


    {{-- FONTES --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Kavoon&family=Luckiest+Guy&display=swap"
        rel="stylesheet"
    >


    {{-- ÍCONES --}}

    <script src="https://unpkg.com/lucide@latest"></script>


    {{-- CSS --}}

    <link
        rel="stylesheet"
        href="{{ asset('css/login.css') }}"
    >

</head>


<body>


    {{-- =====================================================
        PÁGINA DE LOGIN
    ====================================================== --}}

    <main class="login-page">


        {{-- =================================================
            TEXTURA
        ================================================== --}}

        <div class="grain-texture"></div>



        {{-- =================================================
            ESTRELAS
        ================================================== --}}

        <div class="sparkles">


            <span class="sparkle sparkle-1"></span>

            <span class="sparkle sparkle-2"></span>

            <span class="sparkle sparkle-3"></span>

            <span class="sparkle sparkle-4"></span>

            <span class="sparkle sparkle-5"></span>

            <span class="sparkle sparkle-6"></span>

            <span class="sparkle sparkle-7"></span>

            <span class="sparkle sparkle-8"></span>

            <span class="sparkle sparkle-9"></span>

            <span class="sparkle sparkle-10"></span>

            <span class="sparkle sparkle-11"></span>

            <span class="sparkle sparkle-12"></span>

            <span class="sparkle sparkle-13"></span>

            <span class="sparkle sparkle-14"></span>

            <span class="sparkle sparkle-15"></span>


        </div>



        {{-- =================================================
            CARD DE LOGIN
        ================================================== --}}

        <section class="login-card-wrapper">


            <div class="login-glow"></div>


            <div class="login-card">


                {{-- =================================================
                    CABEÇALHO
                ================================================== --}}

                <header class="login-header">


                    <div class="login-logo">

                        <img
                            src="{{ asset('images/beth-logo.jpeg') }}"
                            alt="Beth Cientista"
                        >

                    </div>


                    <h1>
                        Beth Cientista
                    </h1>


                    <p class="login-description">
                        Área exclusiva para clubistas e professores
                    </p>


                </header>



                {{-- =================================================
                    FORMULÁRIO
                ================================================== --}}

                <form
                    action="{{ url('/login') }}"
                    method="POST"
                    class="login-form"
                >

                    @csrf



                    {{-- =================================================
                        TIPO DE ACESSO
                    ================================================== --}}

                    <div class="form-group">


                        <label>
                            Tipo de Acesso
                        </label>


                        <div class="access-type">


                            <label
                                class="access-option selected"
                                id="studentOption"
                            >

                                <input
                                    type="radio"
                                    name="tipo"
                                    value="aluno"
                                    checked
                                >

                                <span>
                                    Aluno
                                </span>

                            </label>



                            <label
                                class="access-option"
                                id="teacherOption"
                            >

                                <input
                                    type="radio"
                                    name="tipo"
                                    value="professor"
                                >

                                <span>
                                    Professor
                                </span>

                            </label>


                        </div>

                    </div>



                    {{-- =================================================
                        EMAIL
                    ================================================== --}}

                    <div class="form-group">


                        <label for="email">
                            Email
                        </label>


                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="seu.email@exemplo.com"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                        >


                        @error('email')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- =================================================
                        SENHA
                    ================================================== --}}

                    <div class="form-group">


                        <label for="password">
                            Senha
                        </label>


                        <div class="password-wrapper">


                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="••••••••"
                                required
                                autocomplete="current-password"
                            >


                            <button
                                type="button"
                                class="password-toggle"
                                id="passwordToggle"
                                aria-label="Mostrar senha"
                            >

                                <i
                                    data-lucide="eye"
                                    id="passwordIcon"
                                ></i>

                            </button>


                        </div>


                        @error('password')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror


                    </div>



                    {{-- =================================================
                        BOTÃO
                    ================================================== --}}

                    <button
                        type="submit"
                        class="login-button"
                    >

                        <i data-lucide="log-in"></i>

                        <span>
                            Entrar
                        </span>

                    </button>



                    {{-- =================================================
                        DEMONSTRAÇÃO
                    ================================================== --}}

                    <div class="demo-box">


                        <p class="demo-title">
                            Demo: use qualquer email e senha
                        </p>


                        <p class="demo-description">
                            Aluno: acessa área de publicações |
                            Professor: acessa área administrativa
                        </p>


                    </div>


                </form>


            </div>

        </section>

    </main>



    {{-- =====================================================
        JAVASCRIPT
    ====================================================== --}}

    <script>


        /*
        |--------------------------------------------------------------------------
        | ÍCONES
        |--------------------------------------------------------------------------
        */

        lucide.createIcons();



        /*
        |--------------------------------------------------------------------------
        | TIPO DE ACESSO
        |--------------------------------------------------------------------------
        */

        const studentOption =
            document.getElementById('studentOption');

        const teacherOption =
            document.getElementById('teacherOption');

        const accessInputs =
            document.querySelectorAll(
                'input[name="tipo"]'
            );


        accessInputs.forEach(function (input) {

            input.addEventListener(
                'change',
                function () {

                    studentOption.classList.remove(
                        'selected'
                    );

                    teacherOption.classList.remove(
                        'selected'
                    );


                    if (this.value === 'aluno') {

                        studentOption.classList.add(
                            'selected'
                        );

                    }


                    if (this.value === 'professor') {

                        teacherOption.classList.add(
                            'selected'
                        );

                    }

                }
            );

        });



        /*
        |--------------------------------------------------------------------------
        | MOSTRAR / ESCONDER SENHA
        |--------------------------------------------------------------------------
        */

        const password =
            document.getElementById('password');

        const passwordToggle =
            document.getElementById('passwordToggle');

        const passwordIcon =
            document.getElementById('passwordIcon');


        passwordToggle.addEventListener(
            'click',
            function () {

                if (
                    password.type === 'password'
                ) {

                    password.type = 'text';

                    passwordIcon.setAttribute(
                        'data-lucide',
                        'eye-off'
                    );

                    passwordToggle.setAttribute(
                        'aria-label',
                        'Ocultar senha'
                    );

                } else {

                    password.type = 'password';

                    passwordIcon.setAttribute(
                        'data-lucide',
                        'eye'
                    );

                    passwordToggle.setAttribute(
                        'aria-label',
                        'Mostrar senha'
                    );

                }


                lucide.createIcons();

            }
        );



        /*
        |--------------------------------------------------------------------------
        | ESTRELAS INTERATIVAS
        |--------------------------------------------------------------------------
        |
        | Cada tecla pressionada faz com que as estrelas
        | mudem para novas posições aleatórias.
        |
        */

        const sparkles =
            document.querySelectorAll('.sparkle');



        function randomNumber(min, max) {

            return Math.random() * (max - min) + min;

        }



        function moveSparkles() {


            sparkles.forEach(function (sparkle) {


                /*
                |--------------------------------------------------------------------------
                | NOVA POSIÇÃO
                |--------------------------------------------------------------------------
                */

                const newTop =
                    randomNumber(3, 94);


                const newLeft =
                    randomNumber(3, 94);



                /*
                |--------------------------------------------------------------------------
                | NOVO TAMANHO
                |--------------------------------------------------------------------------
                */

                const newScale =
                    randomNumber(0.65, 1.25);



                /*
                |--------------------------------------------------------------------------
                | NOVA OPACIDADE
                |--------------------------------------------------------------------------
                */

                const newOpacity =
                    randomNumber(0.35, 0.90);



                /*
                |--------------------------------------------------------------------------
                | APLICA AS ALTERAÇÕES
                |--------------------------------------------------------------------------
                */

                sparkle.style.top =
                    `${newTop}%`;

                sparkle.style.left =
                    `${newLeft}%`;

                sparkle.style.transform =
                    `scale(${newScale})`;

                sparkle.style.opacity =
                    newOpacity;

            });

        }



        /*
        |--------------------------------------------------------------------------
        | QUALQUER TECLA
        |--------------------------------------------------------------------------
        */

        document.addEventListener(
            'keydown',
            function () {

                moveSparkles();

            }
        );


    </script>

</body>

</html>