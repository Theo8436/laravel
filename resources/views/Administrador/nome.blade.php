<div>
    <form action="{{ route('administrador.nome') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        
        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf">

        
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">

        
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha">

        
        <label for="status">Status</label>
        <input type="text" name="status" id="status">

        <button type="submit">Salvar</button>

        <div>
    <form action="{{ route('administrador.nome') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($administradores)
            @foreach($administradores as $administrador)
                <h3>{{ $administrador->nome }}</h3>
                <h3>{{ $administrador->email }}</h3>
                <h3>{{ $administrador->telefone }}</h3>
                <h3>{{ $administrador->cpf }}</h3>
                <h3>{{ $administrador->usuario }}</h3>
                <h3>{{ $administrador->senha }}</h3>
                <h3>{{ $administrador->status }}</h3>
            @endforeach
    @endisset
</div>

    </form>

</div>
