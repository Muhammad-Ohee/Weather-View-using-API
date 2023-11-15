<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

        <h1>Location: {{$location}}</h1>
        <h1>Current Temp: {{$current_temp}} Degree Celcius</h1>
        <h1>Weather Condition: {{$weather_condition}}</h1>
        <h1>Humidity: {{$humidity}} Degree Celcius</h1>
        <h1>Observation Date and Time: {{$localObsDateTime}}</h1>
        <h1>Country: {{$country}}</h1>

        <!--<img width="500" src="{{asset('images/freezing.jpg')}}"> -->

        @if($current_temp < 0)
            <img width="500" src="{{ asset('images/freezing.jpg') }}">
            <!--<p>Condition 1 is true</p>-->
        @elseif($current_temp > 0 && $current_temp < 24)
            <img width="500" src="{{ asset('images/winter.jpg') }}">
            <!--<p>Condition 2 is true</p>-->
        @elseif($current_temp > 24 && $current_temp < 40)
            <img width="500" src="{{ asset('images/sunny.jpg') }}">
            <!--<p>Condition 2 is true</p>-->
        @else($current_temp > 40)
            <img width="500" src="{{ asset('images/hot.jpg') }}">
            <!--<p>Condition 2 is true</p>-->
        @endif

    

</body>
</html>