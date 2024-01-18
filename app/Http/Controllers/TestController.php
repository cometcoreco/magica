<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use OpenAI;
use App\Models\OpenAIGenerator;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Client;

class TestController extends Controller
{  
    public function test(){
        $client = new Client();
        $prompt = "dsf";
        $headers = [
        'X-API-KEY' => '',
        'Content-Type' => 'application/json'
        ];
        $body = [
            'q' => $prompt,
        ];
        $response = $client->post('https://google.serper.dev/search', [
            'headers' => $headers,
            'json' => $body,
        ]);
         // Get the response body as a string
         $bodyContents = $response->getBody()->getContents();

         // Dump and die with the response body
         dd($bodyContents);
    }
}
