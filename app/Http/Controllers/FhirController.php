<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Satusehat\Integration\OAuth2Client;

class FhirController extends Controller
{
    //
    public function token()
    {
        $client = new OAuth2Client;
        dd($client->token());
    }
}
