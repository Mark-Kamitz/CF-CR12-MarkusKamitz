<?php
require_once 'actions/db_connect.php';
require_once "api/RESTful.php";
if ($_GET) { 
    $city = "$_GET[lat],$_GET[long]";
    $url = 'https://api.darksky.net/forecast/e329256a741df2bcccffedd3600287c2/' . $city . '?exclude=minutely,hourly,daily,alerts,flags';
    $data = curl_get($url);
    $weather = json_decode($data);
    $fahrenheit= $weather->currently->temperature;
    $celsius = round(($fahrenheit - 32) * (5 / 9), 2);
    echo "
    <div class='card rounded-5 shadow  border-0' style='width: 18rem;'>
        <div class='card-body'>
            <h5 class='card-title'>Weather:{$weather->timezone}</h5>
            <p class='card-text'>{$weather->currently->summary} </p>
            <p class='card-text'>{$celsius} &deg;C</p>
            <p class='card-text'>{$fahrenheit} &deg;F</p>
        </div>
        </div>";
    }
 ?>  


       
