<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Lugar;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(Request $request){

        $productos = Producto::orderBy('id', 'DESC')->paginate(5);
        $productos->each(function ($productos){
            $productos->categoria;
            $productos->lugar;

        });
        return view('productos.index')
            ->with('productos', $productos);

    }

    public function create(){

        $categorias = Categoria::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $lugares=Lugar::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        return view ('productos.create')
            ->with('categorias', $categorias)
            ->with('lugares', $lugares);

    }

    public function store(Request $request){

        $producto = new Producto($request->all());
        $producto->save();

        return redirect()->route('productos.index');

    }

    public function show($id){

    }

    public function edit($id){

        $article = Article::find($id);
        $article->category;
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'DESC')->pluck('name', 'id');

        $my_tags = $article->tags->pluck('id')->ToArray();

        return view('admin.articles.edit')
            ->with('categories', $categories)
            ->with('article', $article)
            ->with('tags', $tags)
            ->with('my_tags', $my_tags);
    }

    public function update(Request $request, $id){

        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        $article->tags()->sync( (array) $request->tags);

        Flash::warning('Se ha editado el artículo ' . $article->title . ' de forma exitosa!');

        return redirect()->route('articles.index');
    }

    public function destroy($id){
        $article = Article::Find($id);
        $article->delete();

        Flash::error("El artículo " . $article->title . " ha sido eliminado de forma exitosa!");

        return redirect()->route('articles.index');
    }
}
