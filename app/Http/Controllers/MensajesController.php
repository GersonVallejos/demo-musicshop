<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function store(Request $request)
    {
        $mensaje = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'motivo' => 'required',
            'contenido'=>'required|min:3'
        ]);

        Mail::to('gerfriend1@gmail.com')->queue(new MensajeRecibido($mensaje));

        return back()->with('status','Mensaje recibido con éxito');
    }
}
