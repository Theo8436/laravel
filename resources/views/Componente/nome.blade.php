<div>
    <form action="{{ route('componente.nome') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="hora_inicio">Hora Início</label>
        <input type="text" name="hora_inicio" id="hora_inicio">

        <label for="hora_fim">Hora Fim</label>
        <input type="text" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($componentes)
            @foreach($componentes as $componente)
                <h3>{{ $componente->nome }}</h3>
                <h3>{{ $componente->hora_inicio }}</h3>
                <h3>{{ $componente->hora_fim }}</h3>
            @endforeach
    @endisset
</div>
