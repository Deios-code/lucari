<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AboutController extends Controller
{
    public function index(Request $request){
        try {
            $infoContact = $this->getInfoContact();
            // dd($infoContact);
            $data['infoContact'] = json_decode($infoContact['content'], true);

            $response = Http::get($this->getUrlApi().$request->path());

            if($response->successful()){
                $records = $response->json();
                $data['about'] = json_decode($records['content'], true);
            }
            $status = $response->status();
            return view('pages/about', compact('data', 'status'));

        } catch (\Throwable $th) {
            return view('pages/about', ['data'=>[], 'status'=> 404]);
        }
    }
}
