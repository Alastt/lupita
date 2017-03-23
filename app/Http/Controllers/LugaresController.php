<?php

namespace App\Http\Controllers;

use App\Lugar;
use Illuminate\Http\Request;

class LugaresController extends Controller
{
    public function index(Request $request){
        $lugares = Lugar::orderBy('id', 'ASC')->paginate(5);
        return view ('lugares.index')->with('lugares', $lugares);
    }

    public function create(){
        return view('lugares.create');
    }

    public function store(Request $request){
        $lugar = new Lugar($request->all());
        $lugar->save();

        return redirect()->route('lugares.index');
    }

    public function show($id){

    }

    public function edit($id){
        $lugar = Lugar::Find($id);
        return view('lugares.edit')->with('lugar', $lugar);
    }

    public function update(Request $request, $id){
        $lugar = Lugar::Find($id);
        $lugar -> nombre = $request -> nombre;
        $lugar -> descripcion = $request -> descripcion;
        $lugar -> save();
        return redirect()->route('lugares.index');
    }

    public function destroy($id){
        $lugar = Lugar::Find($id);
        $lugar->delete();

        return redirect()->route('lugares.index');
    }
}
