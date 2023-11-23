<?php

namespace App\Http\Controllers;
use App\Models\Servicios;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicios::all();
        return view("servicios.index", compact("servicios"));
    }


    public function create()
    {
        return view("servicios.create");
    }

    public function store(Request $request)
    {

        Servicios::create($request->all());


        return redirect()->route("servicios.index")->with("success","servicio exitoso");
    }

    public function show($id_servicio)
{
    $servicios = Servicios::find($id_servicio);

    if (!$servicios) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('servicios.index')->with('error', ' no encontrado');
    }

    return view('servicios.shows', ['servicios' => $servicios]);
}

    public function edit($id_servicio)
    {
        $servicio = Servicios::find($id_servicio);
        return view('servicios.edit', compact('servicios'));
    }

    public function update(Request $request, $id_servicio)
    {
       

        // Actualiza el usuario
        Servicios::where('id_servicio', $id_servicio)->update($request->except('_token', '_method'));

        return redirect('/servicios')->with('success', 'Servicio actualizado correctamente');
    }

        

    

public function destroy($id_servicio)
    {
        
        $servicio = Servicios::find($id_servicio);
        $servicio->delete(); 
        return redirect('/servicios')->with('success', 'servicio eliminado correctamente');
        
    }
}
