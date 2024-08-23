<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index(Request $request){
        $infoContact = $this->getInfoContact();
        $data['infoContact'] = json_decode($infoContact['content'], true);
        return view('pages/contact', compact('data', 200));
    }

    public function store(Request $request){
        $response = Http::post($this->getUrlApi().'contact', [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        if($response->successful()){
            return redirect()->route('contacto')->with('status', 'Mensaje enviado correctamente');
        }else{
            return redirect()->route('contacto')->with('status', 'Error al enviar el mensaje');
        }
    }
}
