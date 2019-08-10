<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Colaborador;

class ControllerColaborador extends Controller
{
    public function inicio(){
        
        $colaboradores = Colaborador::where('tipo','=','2')->select('*')->get();

        return view('contenido/colaborador',['colaboradores'=>$colaboradores]);
    } 
  
    public function store(Request $request)
    {
        $colaboradores = new Colaborador(); 
        $colaboradores->name=request('nombre');
      //  $colaboradores->apellido=request('apellido');
        $colaboradores->tipo='2';
        $colaboradores->email=request('correo_electronico');
        $colaboradores->password=Hash::make(request('contraseña'));
        $colaboradores->telefono=request('telefono');
        $colaboradores->save();
        return redirect('/colaboradores');
  
    
    }
    public function desactivar($id){
        $colaboradores = Colaborador::findOrFail($id);
        $colaboradores->condicion = '0';
        $colaboradores->save();
            
        return redirect('/colaboradores');
        }
        public function activar($id){
            $colaboradores = Colaborador::findOrFail($id);
            $colaboradores->condicion = '1';
            $colaboradores->save();
                
            return redirect('/colaboradores');
        }
}
