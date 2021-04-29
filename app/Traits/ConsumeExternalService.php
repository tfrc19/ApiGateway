<?php

namespace App\Traits;
use Illuminate\Http\Response;
use GuzzleHttp\Client;

trait ConsumeExternalService
{
    /*
    @return string
    */
    public function performRequest($method, $requestUrl,$formParams =[],$headers=[])
    {
        $client = new Client([
            'base_uri'=> $this->baseUri,
        ]);

        $response = $client->request($method, $requestUrl,['form_params'=>$formParams,'headers'=>$headers]);
        return $response->getBody()->getContents();

    }
}