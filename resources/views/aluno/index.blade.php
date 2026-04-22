<div>
   <form action="{{ route('aluno.add') }}" method="post">
    @csrf
    <label for="nome">Nome do Aluno</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Salvar</button>

    @isset($success)
    <h1></h1>
    @endisset
   </form>
</div>
