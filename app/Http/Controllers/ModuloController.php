<?php

namespace AppGolf\Http\Controllers;

use Illuminate\Http\Request;

use AppGolf\Http\Requests;
use AppGolf\Http\Controllers\Controller;
use AppGolf\Http\Requests\ModuleCreateRequest;
use AppGolf\Http\Requests\ModuleUpdateRequest;
use AppGolf\Modulo;
use Session;
use Redirect;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Modulo::paginate(5);
        return view('modulo.index',compact('modules'));
    }

   
    public function create()
    { 
        return view('modulo.create');
    }


    public function store(ModuleCreateRequest $request)
    {
        Modulo::create([
            'numero' => $request['numero'],
            'nombre' => $request['nombre'],
        ]);
        return redirect('/modulo')->with('message','Modulo creado exitosamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $module = Modulo::find($id);
        return view('modulo.edit',['module'=>$module]);
    }

    public function update(ModuleUpdateRequest $request, $id)
    {
        $module = Modulo::find($id);
        $module->fill($request->all());
        $module->save();
        Session::flash('message','Modulo Editado Correctamente');
        return Redirect::to('/modulo');
    }

    public function destroy($id)
    {
        Modulo::destroy($id);
        Session::flash('message','Modulo Eliminado Correctamente');
        return Redirect::to('/modulo');
    }
}
