<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
//use Http;

class WeatherController extends Controller
{
    function weather($location='Dhaka'){
        $weatherDetails = Http::get("https://wttr.in/{$location}?format=j1")->json();

        $current_temp = $weatherDetails["current_condition"][0]["temp_C"];
        $weather_condition = $weatherDetails["current_condition"][0]["weatherDesc"][0]["value"];
        $humidity = $weatherDetails["current_condition"][0]["humidity"];
        $localObsDateTime = $weatherDetails["current_condition"][0]["localObsDateTime"];
        $country = $weatherDetails["nearest_area"][0]["country"][0]["value"];

        return view("weather", compact("current_temp", "weather_condition", "humidity", "localObsDateTime", "country", "location"));

    }


}
