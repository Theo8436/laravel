<style>
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        margin-top: 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th {
        background-color: #4CAF50;
        color: white;
        padding: 12px;
        text-align: left;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e9f5e9;
        transition: 0.3s;
    }

    button {
        padding: 6px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }

    button:first-child {
        background-color: #e74c3c;
        color: white;
    }

    button:first-child:hover {
        background-color: #c0392b;
    }

    button:last-child {
        background-color: #3498db;
        color: white;
    }

    button:last-child:hover {
        background-color: #2980b9;
    }
</style>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{ $cliente['id']}}</td>
        <td>{{ $cliente['nome']}}</td>
        <td>{{ $cliente['email']}}</td>
        <td>
            <button>Remover</button>
            <button>Editar</button>
        </td>
    </tr>
    @endforeach
</table>