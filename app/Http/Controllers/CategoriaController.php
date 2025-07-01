<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index () {
        $categorias = Categoria::all()->pluck('nome', 'id')->toArray();
        return view('categorias.index', compact('categorias'));
    }

    public function listar () {
        $categorias = Categoria::all()->pluck('nome', 'id')->toArray();
        return $categorias;
    }

    public function adicionar (Request $request) {
        $nome = $request->input('nome');

        Categoria::create([
            'nome' => $nome
        ]);

        return redirect()->route('categorias.index');
    }

    public function create(){
        return view('categorias.create');
    }

    public function deletar (string $id) {
        $categoria = Categoria::find($id);
        if ($categoria) {
            $categoria->delete();
        }
        return redirect()->route('categorias.index');
    }

    public function editar (Request $request) {
        $id = $request->input('id');
        $nome = $request->input('nome');

        $categoria = Categoria::find($id);
        if ($categoria) {
            $categoria->nome = $nome;
            $categoria->save();
        }

        return redirect()->route('categorias.index');
    }

    public function edit (Request $request) {
        $id = $request->input('id');
        $nome = Categoria::find($id)->pluck('nome')->first();

        if ($nome) {
            return view('categorias.edit', [
                'id' => $id,
                'nome' => $nome
            ]);
        }
        
        return redirect()->route('categorias.index');
    }
}