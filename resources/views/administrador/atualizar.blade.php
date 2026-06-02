<div>
    <form action="{{ route('administrador.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $administrador->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $administrador->nome }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>
