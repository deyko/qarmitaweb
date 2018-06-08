<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EventsController extends Controller
{
    public function index ()
    {
        /*----------------+
        | Consumo de API  |
        +-----------------*/
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:8888/ApiQarmita/public/api/eventos',
            // Tiempo de espera para obtener una respuesta.
            'timeout'  => 2.0,
        ]);

        $response = $client->request('GET', 'eventos');
        $events = json_decode ( $response->getBody()->getContents() );
        

        return view('events', compact('events'));
    }
}
