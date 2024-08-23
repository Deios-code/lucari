<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getUrlApi(){
        return 'https://patopixel.com/api/pages/lucari/';
    }

    public function getInfoContact(){
        $response = Http::get($this->getUrlApi().'infoContact');
       return $response->successful() ? $response->json() : [];
    }

}
