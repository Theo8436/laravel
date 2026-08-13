<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacao;

class PublicacaoController extends Controller
{
    // Lista as publicações reais na página do aluno
    public function index()
    {
        $publicacoes = Publicacao::orderBy('data', 'asc')->get();
        return view('loginaluno.alunologado', compact('publicacoes'));
    }

    // Salva uma nova publicação
    public function store(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string',
            'data'      => 'required|date',
        ]);

        Publicacao::create([
            'titulo'    => $request->titulo,
            'autor'     => $request->autor,
            'categoria' => $request->categoria,
            'data'      => $request->data,
            'status'    => 'Pendente' // Todo post novo começa como pendente
        ]);

        return redirect()->back()->with('success', 'Publicação agendada com sucesso!');
    }

    // Atualiza uma publicação existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'    => 'required|string|max:255',
            'autor'     => 'required|string|max:255',
            'categoria' => 'required|string',
            'data'      => 'required|date',
        ]);

        $publicacao = Publicacao::findOrFail($id);
        $publicacao->update($request->all());

        return redirect()->back()->with('success', 'Publicação atualizada com sucesso!');
    }

    // Remove uma publicação do banco
    public function destroy($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        $publicacao->delete();

        return redirect()->back()->with('success', 'Publicação excluída com sucesso!');
    }
}
