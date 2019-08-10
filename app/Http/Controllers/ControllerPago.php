<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Proyecto;
class ControllerPago extends Controller
{
    public function inicio(){
        
        $pagos = Pago::all();
        $proyectos = Proyecto::all();
        return view('contenido/pago',['pagos'=>$pagos,'proyectos'=>$proyectos]);
    } 
  
    public function store(Request $request)
    {
        $pagos = new Pago(); 
        $pagos->id_persona=request('id_persona');
        $pagos->cantidad=request('cantidad');
        //$pagos->fecha_hora=request('fecha_hora');
        $pagos->id_proyecto=request('id_proyecto');
        $pagos->estado=request('estado');
        $pagos->descripcion=request('descripcion');
        $pagos->save();
        return redirect('/pagos');
  
    
    }
    public function desactivar($id){
        $pagos = Pago::findOrFail($id);
        $pagos->condicion = '0';
        $pagos->save();
            
        return redirect('/pagos');
    }
    public function activar($id){
        $pagos = Pago::findOrFail($id);
        $pagos->condicion = '1';
        $pagos->save();         
        return redirect('/pagos');
    }

    public function edit(Request $request)
    {
        $pagos = Pago::findOrFail(request('id'));
        $proyectos = Proyecto::all();
       return view('contenido.pagosEdit',['pagos'=>$pagos,'proyectos'=>$proyectos]);
    
    }
    public function update(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');
        
        $pagos =  Pago::findOrFail($request->id);
        $pagos->id_persona=request('id_persona');
        $pagos->cantidad=request('cantidad');
        //$pagos->fecha_hora=request('fecha_hora');
        $pagos->id_proyecto=request('id_proyecto');
        $pagos->estado=request('estado');
        $pagos->descripcion=request('descripcion');
        $pagos->condicion=request('condicion');
        $pagos->save();
        return redirect('/pagos');
       
    }
}
