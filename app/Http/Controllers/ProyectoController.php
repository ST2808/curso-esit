<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ProyectoController extends Controller
{
    public function index(Request $request){
        $url = $request->path();

        $proyectos = proyectos::paginate(8);

        return view('proyectos.index', [
            'proyectos' => $proyectos,
            'path' => $url,
        ]);
    }

    public function find(Request $request){
        $url = $request->path();

        $proyectos = proyectos::where('NombreProyecto', 'like', '%' . $request->nombre . '%')->paginate(8);

        return view('proyectos.index', [
            'proyectos' => $proyectos,
            'path' => $url,
        ]);
    }

    public function about(){
        return view('proyectos.about');
    }

    public function create() {
        return view('proyectos.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'NombreProyecto' => ['required', 'max:200', ],
            // 'UrlLogo' => ['required', 'img', 'mimes:jpeg,png,gif'],
            'FuenteFondos' => ['required', 'max:200', ],
            'descripcion' => ['required', 'max:400', ],
            'MontoPlanificado' => ['required' ],
            'MontoPatrocinado' => ['required' ],
            'MontoFondosPropios' => ['required' ],
            'FechaInicio' => ['required', 'max:200', ],
            'FechaFin' => ['required', 'max:200', ],
        ]);

        proyectos::create([
            'NombreProyecto' => $request->NombreProyecto,
            'UrlLogo' => 'quemado',
            'FuenteFondos' => $request->FuenteFondos,
            'descripcion' => $request->descripcion,
            'MontoPlanificado' => $request->MontoPlanificado,
            'MontoPatrocinado' => $request->MontoPatrocinado,
            'MontoFondosPropios' => $request->MontoFondosPropios,
            'FechaInicio' => Carbon::parse($request->FechaInicio),
            'FechaFin' => Carbon::parse($request->FechaFin),
        ]);

        return redirect()->route('indexProyectos');
    }

    public function update(proyectos $proyecto) {
        return view('proyectos.update', ['proyecto' => $proyecto]);
    }

    public function put(Request $request, proyectos $proyecto) {
        $this->validate($request, [
            'NombreProyecto' => ['required', 'max:200', ],
            // 'UrlLogo' => ['required', 'img', 'mimes:jpeg,png,gif'],
            'FuenteFondos' => ['required', 'max:200', ],
            'descripcion' => ['required', 'max:400', ],
            'MontoPlanificado' => ['required' ],
            'MontoPatrocinado' => ['required' ],
            'MontoFondosPropios' => ['required' ],
            'FechaInicio' => ['required', 'max:200', ],
            'FechaFin' => ['required', 'max:200', ],
        ]);

        $proyecto->update([
            'NombreProyecto' => $request->NombreProyecto,
            'UrlLogo' => 'quemado',
            'FuenteFondos' => $request->FuenteFondos,
            'descripcion' => $request->descripcion,
            'MontoPlanificado' => $request->MontoPlanificado,
            'MontoPatrocinado' => $request->MontoPatrocinado,
            'MontoFondosPropios' => $request->MontoFondosPropios,
            'FechaInicio' => '1999-12-31 23:59:59',
            'FechaFin' => '1999-12-31 23:59:59',
        ]);

        return redirect()->route('indexProyectos');
    }

    public function destroy(proyectos $proyecto) {
        // $proyecto->delete();
        // return redirect()->route('indexProyectos');
    }
}
