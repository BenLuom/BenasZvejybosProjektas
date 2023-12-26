<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $response = Http::get('https://api.meteo.lt/v1/places');

        $jsonData = $response->json();

        dd($jsonData);
    }
}
