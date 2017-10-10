<?php

namespace AppGolf\Http\Controllers;

use Illuminate\Http\Request;
use AppGolf\Http\Requests\UserCreateRequest;
use AppGolf\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;


use AppGolf\Http\Requests;
use AppGolf\Http\Controllers\Controller;
use AppGolf\User;

class UsuarioController extends Controller
{

    public function index()
    {
        $users = User::paginate(5);
        return view('usuario.index',compact('users'));
    }


    public function create()
    {
        return view('usuario.create');
    }

    public function store(UserCreateRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'rol' => $request['rol'],
        ]);
        return redirect('/usuario')->with('message','store');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }


    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }
}
