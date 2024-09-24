<?php

namespace App\Http\Controllers;

use App\Mail\CorreoContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request){
        $status =  200;
        $infoContact = $this->getInfoContact();
        $data['infoContact'] = json_decode($infoContact['content'], true);
        return view('pages/contact', compact('data', 'status'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:6,20',
            'message' => 'required|string|max:255',
        ], [
            'name.required' => 'Por favor, ingrese su nombre.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'Debe ingresar un correo electrónico válido.',
            'phone.required' => 'El teléfono es obligatorio.',
            'phone.numeric' => 'El teléfono debe contener solo números.',
            'phone.digits_between' => 'El teléfono debe tener entre 6 y 20 dígitos.',
            'message.required' => 'Por favor, ingrese un mensaje.',
            'message.max' => 'El Mensaje no puede tener mas de 255 caracteres.',
        ]);
        try {
            // Mail::to('comunicaciones@fundacionlucari.org')->send(new CorreoContacto(['nombre'=>$request->name,'telefono'=>$request->phone, 'email'=>$request->email, 'mensaje'=>$request->message]));
            Mail::to('deios.code@gmail.com')->send(new CorreoContacto(['nombre'=>$request->name,'telefono'=>$request->phone, 'email'=>$request->email, 'mensaje'=>$request->message]));
            return redirect()->route('contacto')->with('status', 'Mensaje enviado correctamente');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('contacto')->with('error', 'Error al enviar el mensaje');
        }
    }
}
