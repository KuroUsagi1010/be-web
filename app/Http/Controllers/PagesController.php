<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

class PagesController extends Controller
{
    public function index()
    {
        $verses = [
            'JER.29.11',
            'PSA.23',
            '1COR.4.4-8',
            'PHP.4.13',
            'JHN.3.16',
            'ROM.8.28',
            'ISA.41.10',
            'PSA.46.1',
            'GAL.5.22-23',
            'HEB.11.1',
            '2TI.1.7',
            '1COR.10.13',
            'PRO.22.6',
            'ISA.40.31',
            'JOS.1.9',
            'HEB.12.2',
            'MAT.11.28',
            'ROM.10.9-10',
            'PHP.2.3-4',
            'MAT.5.43-44',
          ];
         $headers = [
            'Content-Type' => 'application/text',
            'api-key' => '29404787f4eb81a4a8679f7825e5a7b3',
        ];
        $client = new Client([
            'headers' => $headers
        ]);
        $response = $client->request('GET', 'https://api.scripture.api.bible/v1/bibles/de4e12af7f28f599-01/search?query='. $verses[rand(0, count($verses) -1)]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $verse_data = json_decode($body);
        $passages = collect($verse_data->data->passages);
        $this->data['vod'] = $passages->first();
        return view('welcome', $this->data);
    }
}
