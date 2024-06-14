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
        return view('servicios.create');
    }

    public function store(CreateServicioRequest $request){
        Servicio::create($request->validated());

        return redirect()->route('servicios.index');
    }

    public function show($id){
        return view('servicios.show', ['servicio' => Servicio::find($id)]);
    }
}
