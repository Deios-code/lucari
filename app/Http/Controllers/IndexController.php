<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    public function index(Request $request){
        $infoContact = $this->getInfoContact();
        $data['infoContact'] = json_decode($infoContact['content'], true);
        $response = Http::get($this->getUrlApi());
        if($response->successful()){
            $records = $response->json();
            $data['banners'] = json_decode($records['home'][0]['content'], true);
            $data['banners'] = $data['banners']['banners'];
            $data['valores'] = json_decode($records['about']['content'], true);
            $data['valores'] = $data['valores']['valores'];
            $data['stories'] = collect($records['stories'])->map(function ($record, $key) {
                    return json_decode($record['content'], true);
            });
            $data['allies'] = json_decode($records['home'][1]['content'], true);
            $data['allies'] = $data['allies']['allies'];

            $temp = collect($records['programs'])->map(function ($record, $key) {
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
        return view('pages/index', compact('data', 'status'));
    }
}
