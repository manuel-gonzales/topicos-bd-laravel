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

    public function edit(Servicio $id){
        return view('servicios.edit',[
            'servicio' => $id
        ]);
    }

    public function update($id, CreateServicioRequest $request){
        $servicio = Servicio::findOrFail($id);

        $servicio->update($request->validated());

        return redirect()->route('servicios.show',$id);
    }

    public function store(CreateServicioRequest $request){
        Servicio::create($request->validated());

        return redirect()->route('servicios.index');
    }

    public function show($id){
        return view('servicios.show', ['servicio' => Servicio::find($id)]);
    }
}
