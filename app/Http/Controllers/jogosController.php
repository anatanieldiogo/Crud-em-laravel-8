<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class jogosController extends Controller
{
    //

    public function index()
    {
        $jogos = Jogo::all();
        $jogos = Jogo::orderBy('id', 'desc')->get();
        return view('/jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('/jogos.create');
    }

    public function store(Request $request)
    {
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id)
    {
        $jogo = Jogo::where('id', $id)->first();
        if (!empty($jogo)) {
            return view('/jogos.edit', ['jogo' => $jogo]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];

        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }

    public function destroy($id)
    {
        Jogo::where('id', $id)->delete($id);
        return redirect()->route('jogos-index');
    }
}
