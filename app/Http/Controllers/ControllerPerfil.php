<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ControllerPerfil extends Controller
{
    public function up(Request $request){
        
            
        return redirect('/perfil');
        }
}
