<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;
use App\Proyecto;
use App\ProyectoDC;
use App\Colaborador;
use App\Pago;
class ControllerTarea extends Controller
{
    public function inicio(){
        
        $tareas = Tarea::all();
        $proyectos = Proyecto::all();
        $colaboradores = Colaborador::where('tipo','=','2')->select('*')->get();
        $pagos = Pago::all();
    
        return view('contenido/tarea',['pagos'=>$pagos,'tareas'=>$tareas,'proyectos'=>$proyectos,'colaboradores'=>$colaboradores]);
    } 
    public function inicioDC(){
        
        $tareas = Tarea::join('proyectos','proyectos.id','=','tareas.id_proyecto')->
        select('proyectos.id_cliente as cliente','tareas.id', 'tareas.id_proyecto', 'tareas.id_desarrollador', 'tareas.titulo', 'tareas.descripcion', 'tareas.pago_total', 'tareas.estado', 'tareas.condicion', 'tareas.fecha_inicio', 'tareas.fecha_vencimiento')->get();
        
        $tareasall = Tarea::all();
        return view('contenido/tareaDC',['tareas'=>$tareas,'tareasall'=>$tareasall]);
    } 
    public function store(Request $request)
    {
        $tareas = new Tarea(); 
        $tareas->id_proyecto=request('id_proyecto');
        $tareas->id_desarrollador=request('id_desarrollador');
        $tareas->titulo=request('titulo');
        $tareas->descripcion=request('descripcion');
        $tareas->fecha_inicio=request('fecha_inicio');
        $tareas->fecha_vencimiento=request('fecha_vencimiento');
        $tareas->pago_total=request('pago_total');
        $tareas->estado= '1';
        $proyecto = new ProyectoDC(); 
        $proyecto->id_proyecto=request('id_proyecto');
        $proyecto->id_desarrollador=request('id_desarrollador');
        $tareas->save();
        $proyecto->save();
        return redirect('/tareas');
  
    
    }
    public function desactivar($id){
        $tareas = Tarea::findOrFail($id);
        $tareas->condicion = '0';
        $tareas->save();
            
        return redirect('/tareas');
        }
        public function activar($id){
            $tareas = Tarea::findOrFail($id);
            $tareas->condicion = '1';
            $tareas->save();
                
            return redirect('/tareas');
        }

        public function fin($id){
            $tareas = Tarea::findOrFail($id);
            $tareas->estado = '0';
            $tareas->save();
                
            return redirect('/tareasDC');
            }
            public function act($id){
                $tareas = Tarea::findOrFail($id);
                $tareas->estado = '1';
                $tareas->save();
                    
                return redirect('/tareasDC');
            }
        public function edit(Request $request)
        {
            $tareas = Tarea::findOrFail(request('id'));
            $proyectos = Proyecto::all();
            $colaboradores = Colaborador::where('tipo','=','2')->select('*')->get();
            $pagos = Pago::all();
           return view('contenido.tareaEdit',['pagos'=>$pagos,'tareas'=>$tareas,'proyectos'=>$proyectos,'colaboradores'=>$colaboradores]);
        
        }
        public function update(Request $request)
        {
            $tareas = Tarea::findOrFail($request->id); 
            $tareas->id_proyecto=request('id_proyecto');
            $tareas->id_desarrollador=request('id_desarrollador');
            $tareas->titulo=request('titulo');
            $tareas->descripcion=request('descripcion');
            $tareas->fecha_inicio=request('fecha_inicio');
            $tareas->fecha_vencimiento=request('fecha_vencimiento');
            $tareas->pago_total=request('pago_total');
            $tareas->estado=request('estado');
            $tareas->condicion=request('condicion');
            $tareas->save();
            return redirect('/tareas');
        }
}
