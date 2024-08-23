<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProgramsController extends Controller
{
    public function index(Request $request){
        $infoContact = $this->getInfoContact();
        $data['infoContact'] = json_decode($infoContact['content'], true);
        $response = Http::get($this->getUrlApi().$request->path());

        if($response->successful()){
            $records = $response->json();
            $temp = collect($records)->map(function ($record, $key) {
                    return json_decode($record['content'], true);
            });
            $data['programOne'] = $temp[0];
            $data['programTwo'] = $temp[1];
            $data['programThree'] = $temp[2];
            $data['programFour'] = $temp[3];
        }else{
            $error['message'] = $response->body();
            $error = json_decode($error['message'], true);
            $data['error'] = $error['error'];
        }
        $status = $response->status();
        return view('pages/programs', compact('data', 'status'));
    }
}
