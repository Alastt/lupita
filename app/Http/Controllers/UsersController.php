<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){

        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view ('users.index')->with('users', $users);

    }

    public function create(){

        return view('users.create');

    }

    public function store(Request $request){
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.index');
    }

    public function show($id){

    }

    public function edit($id){
        $user = User::Find($id);
        return view('users.edit')->with('user', $user);

    }

    public function update(Request $request, $id){
        $user = User::Find($id);
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> type = $request -> type;
        $user -> save();
        return redirect()->route('users.index');
    }

    public function destroy($id){
        $user = User::Find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
