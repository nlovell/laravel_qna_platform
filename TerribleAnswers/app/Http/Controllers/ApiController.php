<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Http\Request;

const GITHUB = "api.github.com/users/";


class ApiController extends Controller
{

    public function github($username)
    {
        $client = new GuzzleClient();
        $response = $client->get("https://api.github.com/users/$username");

        $body = json_decode($response->getBody()->getContents());
        //dd($body);

        print "Name: $body->name </br>";
        $companyid = str_replace('@', '', $body->company);

        if ($companyid != null) {
            $company = json_decode($client->get("https://api.github.com/users/$companyid")->getBody()->getContents())->name;
            print "Company: $company </br>";
        }
        print "Location: $body->location </br>";
        print "Bio: $body->bio </br>";
    }

    public function getWeather()
    {
        return view('weather');
    }

    public function postWeather(Request $request)
    {
        $this->validate($request, ['location' => 'required|min:5']);

        $googleClient = new GuzzleClient();
        $response = $googleClient->get('https://maps.googleapis.com/maps/api/geocode/json', ['query' => [
            'address' => $request->location,
            'key' => env('GOOGLE_API')
        ]]);

        $googleBody = json_decode($response->getBody());
        $coords = $googleBody->results[0]->geometry->location;

        print "lat: $coords->lat <br />";
        print "long: $coords->lng <br />";
    }
}
