<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Satusehat\Integration\OAuth2Client;
use Satusehat\Integration\FHIR\Encounter;

class FhirController extends Controller
{
    //
    public function token()
    {
        $client = new OAuth2Client;
        dd($client->token());
    }

    public function encounter()
    {
        $encounter = new Encounter;
        $encounter->addRegistrationId('123456789');
        dd($encounter->getEncounter());
    }
}
