<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Beth Cientista')
    </title>


    {{-- Fontes --}}
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Kavoon&family=Luckiest+Guy&display=swap"
        rel="stylesheet"
    >


    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    >


    {{-- CSS da navbar --}}
    <link
        rel="stylesheet"
        href="{{ asset('css/navbar.css') }}"
    >


    @stack('styles')

</head>

<body>

    @include('components.navbar')


    @yield('content')


    @include('components.footer')


    @stack('scripts')

</body>

</html>