<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $request){
        $categorias = Categoria::orderBy('id', 'ASC')->paginate(5);
        return view ('categorias.index')->with('categorias', $categorias);
    }

    public function create(){
        return view('categorias.create');
    }

    public function store(Request $request){
        $categoria = new Categoria($request->all());
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function show($id){

    }

    public function edit($id){
        $categoria = Categoria::Find($id);
        return view('categorias.edit')->with('categoria', $categoria);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::Find($id);
        $categoria -> nombre = $request -> nombre;
        $categoria -> save();
        return redirect()->route('categorias.index');
    }

    public function destroy($id){
        $categoria = Categoria::Find($id);
        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}
