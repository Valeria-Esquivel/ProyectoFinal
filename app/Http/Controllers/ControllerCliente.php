<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Cliente;

class ControllerCliente extends Controller
{
    public function inicio(){
        
        $colaboradores = Cliente::where('tipo', '=','3')->select('*')->get();
    
        return view('contenido/cliente',['colaboradores'=>$colaboradores]);
    } 
  
    public function store(Request $request)
    {
        $colaboradores = new Cliente(); 
        $colaboradores->name=request('nombre');
        //$colaboradores->apellido=request('apellido');
        $colaboradores->tipo='3';
        $colaboradores->email=request('correo_electronico');
        $colaboradores->telefono=request('telefono');
        $colaboradores->password=Hash::make(request('contraseña'));
        $colaboradores->save();
        return redirect('/clientes');
  
    
    }
    public function desactivar($id){
        $colaboradores = Cliente::findOrFail($id);
        $colaboradores->condicion = '0';
        $colaboradores->save();
            
        return redirect('/clientes');
        }
        public function activar($id){
            $colaboradores = Cliente::findOrFail($id);
            $colaboradores->condicion = '1';
            $colaboradores->save();
                
            return redirect('/clientes');
        }
       
}
