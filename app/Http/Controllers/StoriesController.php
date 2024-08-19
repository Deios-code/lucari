<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoriesController extends Controller
{

    public function index(Request $request){
        try {
            $data['infoContact'] = $this->getInfoContact();
            $data['infoContact'] = json_decode($data['infoContact']['content'], true);

            $response = Http::get($this->getUrlApi().$request->path());

            if($response->successful()){
                $records = $response->json();
                $data['stories'] = collect($records)->map(function ($record, $key) {
                        return json_decode($record['content'], true);
                });
            }

            $status = $response->status();

            return view('pages/stories', compact('data', 'status'));

        } catch (\Throwable $th) {
            dd($th);
            return view('pages/stories', ['data'=>[], 'status'=> 404]);
        }
    }
}
