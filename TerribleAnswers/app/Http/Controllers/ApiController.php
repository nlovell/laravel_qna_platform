<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client as GuzzleClient;

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
}

$likethis = "hell yeah";

$a = "can_insert_variable/$likethis"; //can_insert_variable/hellyeah
$b = 'dollar_is_literal/$likethis';

