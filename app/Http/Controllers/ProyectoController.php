<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){

        $proyectos = proyectos::paginate(8);

        return view('proyectos.index', [
            'proyectos' => $proyectos,
        ]);
    }

    public function about(){
        return view('proyectos.about');
    }

    public function destroy(proyectos $proyecto) {;
        $proyecto->delete();
        return redirect()->route('indexProyectos');
    }
}
