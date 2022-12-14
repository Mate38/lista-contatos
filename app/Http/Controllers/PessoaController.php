<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function all(Request $request)
    {
        $pessoas = Pessoa::all();

        return response()->json($pessoas);
    }

    public function byNome(Request $request)
    {
        $pessoa = Pessoa::where('nome', $request->nome)->get();

        return response()->json($pessoa);
    }

    public function create(Request $request)
    {
        $pessoas = Pessoa::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf
        ]);

        return response()->json($pessoas);
    }

    public function update(Request $request)
    {
        $pessoa = Pessoa::findOrFail($request->id)->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf
        ]);

        return response()->json($pessoa);
    }

    public function view(int $id)
    {
        $pessoa = Pessoa::findOrFail($id);

        return response()->json($pessoa);
    }

    public function delete(Request $request)
    {
        $return = Pessoa::findOrFail($request->id)->delete();

        return response()->json($return);
    }
}
