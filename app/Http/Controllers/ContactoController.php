<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateContactoRequest;
use App\Mail\MensajeRecibido;
use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(CreateContactoRequest $request){
        $mensaje = Contacto::create($request->validated());

        Mail::to('t032700220@unitru.edu.pe')->send(new MensajeRecibido($mensaje));

        return redirect()->route('mensaje-enviado');
    }
}
