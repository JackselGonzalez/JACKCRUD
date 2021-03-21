<?php

namespace App\Http\Controllers;

use App\celular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class celularcontroller extends Controller
{
    //
    public function create(){
        return view('celular.create');
    }

        public function insertar(){

        }
        public function index(){
            $datos = DB::table('celular')->get();
            return view('/celular/index',['datos'=>$datos]);

            
        }


    public function store(Request $request)
    {
        $datoscelular= request()->except('_token');
             celular::insert($datoscelular);
        return Redirect::to('/celular/index')->with('Mensaje','Modelo De Celular Guardado');


    }

   
    //metodo actualizar
    public function actualizar(Request $request, $id){
        $datoscelular= request()->except(['_token','_method']);
        celular::where('id',"=",$id)->update($datoscelular);
        return Redirect::to('/celular/index')->with('Mensaje','Fue Actualizado Exitosamente');
    }


    //metodo editar
    public function editar($id){
        $celular= celular::findOrFail($id);
        return view('/celular/edit',compact('celular'));
    }
     //metodo eliminar
     public function eliminar($id){
        $cel = celular::findOrFail($id);
        $cel->delete();
       return Redirect::to('/celular/index')->with('Mensaje','Tu Modelo Fue Eliminado Exitosamente');
    }
    
}
