<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function index(){
        $servicios = Servicio::latest()->get();

        return view('servicios',compact('servicios'));
    }

    public function create(){
        return view('servicios.create',[
            'servicio' => new Servicio
        ]);
    }

    public function edit(Servicio $servicio){
        return view('servicios.edit',[
            'servicio' => $servicio
        ]);
    }

    public function update(Servicio $servicio, CreateServicioRequest $request){
        $servicio->update($request->validated());

        return redirect()->route('servicios.show', $servicio)->with('estado', 'El servicio fue actualizado correctamente.');
    }

    public function store(CreateServicioRequest $request){
        Servicio::create($request->validated());

        return redirect()->route('servicios.index')->with('estado', 'El servicio fue creado correctamente.');
    }

    public function show($id){
        return view('servicios.show', ['servicio' => Servicio::find($id)]);
    }

    public function destroy(Servicio $servicio){
        $servicio->delete();

        return redirect()->route('servicios.index')->with('estado', 'El servicio fue eliminado correctamente.');
    }
}
