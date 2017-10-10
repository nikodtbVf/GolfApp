<?php

namespace AppGolf\Http\Controllers;

use Illuminate\Http\Request;

use AppGolf\Http\Requests;
use AppGolf\Http\Controllers\Controller;
use AppGolf\Modulo;
use AppGolf\ModuloUso;
use Carbon\Carbon;
use Session;
use Redirect;
use Auth;
use DB;

class ModuloUsoController extends Controller
{
    
    public function index()
    {

      $modules = DB::table('modulos')
            ->orderBy('id', 'asc')
            ->get();

      $modulesuse = DB::table('modulo_usos')   
                ->where('status', '=', 1)
                ->get();   


      foreach ($modules as $module){
        $module->status = 0;
        $module->init_time = 0;
        $module->end_time =0;
         foreach ($modulesuse as $mu ) {
             if($module->id == $mu->modulo_id){
                $module->status = 1;
                $module->init_time = $mu->init_time;
                $module->end_time = $mu->end_time;
             }
         }

      }

     return view('usomodulo.index',compact('modules'));    
    }

    public function asignar($idmodulo){
        $modulo = Modulo::find($idmodulo);
        return view('usomodulo.asignar',compact('modulo'));
    }

    public function terminar($idmodulo)
    {
        
        ModuloUso::where('modulo_id', $idmodulo)->where('status',1)->update(array('status' => 0));
        Session::flash('message','Modulo Editado Correctamente');
        return $this->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $numero = $request['numero'];
        $module = DB::table('modulos')
                ->where('numero', '=', $numero)
                ->first();
        ModuloUso::create([
            'modulo_id' => $module->id, 
            'user_id' => Auth::user()->id,
            'init_time' => Carbon::now(),
            'end_time' =>  Carbon::now()->addMinutes($request['minutos']),
            'status' => 1,
        ]);
        return redirect('/uso')->with('message','Modulo creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
