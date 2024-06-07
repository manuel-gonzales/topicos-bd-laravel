<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function index(){
        $servicios = Servicio::latest()->paginate(2);

        return view('servicios',compact('servicios'));
    }

    public function show($id){
        return view('servicios.show', ['servicio' => Servicio::find($id)]);
    }
}
