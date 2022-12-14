<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function all(Request $request)
    {
        $contatos = Contato::all();

        return response()->json($contatos);
    }

    public function create(Request $request)
    {
        $contatos = Contato::create([
            'tipo' => $request->tipo,
            'descricao' => $request->descricao,
            'idPessoa' => $request->idPessoa
        ]);

        return response()->json($contatos);
    }

    public function update(Request $request)
    {
        $contato = Contato::findOrFail($request->id)->update([
            'tipo' => $request->tipo,
            'descricao' => $request->descricao,
            'idPessoa' => $request->idPessoa
        ]);

        return response()->json($contato);
    }

    public function view(int $id)
    {
        $contato = Contato::findOrFail($id);

        return response()->json($contato);
    }

    public function delete(Request $request)
    {
        $return = Contato::findOrFail($request->id)->delete();

        return response()->json($return);
    }
}
