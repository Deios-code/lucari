<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    public function index(Request $request){
        $infoContact = $this->getInfoContact();
        $data['infoContact'] = json_decode($infoContact['content'], true);
        $response = Http::get($this->getUrlApi().$request->path());

        if($response->successful()){
            $records = $response->json();
            $data['reports'] = json_decode($records['content'], true);
        }else{
            $error['message'] = $response->body();
            $error = json_decode($error['message'], true);
            $data['error'] = $error['error'];
        }
        $status = $response->status();

        return view('pages/report', compact('data', 'status'));
    }
}
