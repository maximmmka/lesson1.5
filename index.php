<?php
    error_reporting(E_ALL);
    header ("Content-Type: text/html; charset=UTF-8");
    $content = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Kazan,ru&appid=c0d81a9055477ae89352fc8fce5d46d2&units=metric&lang=ru");
    $data = json_decode($content, true);
    echo "Город: {$data['name']}";
    echo '<br/>';
    echo $data['weather'][0]['description'];
    echo '<br/>';
    echo "температура воздуха: {$data['main']['temp']} ºС";
    echo '<br/>';
    echo "влажность воздуха: {$data['main']['humidity']} %";
    echo '<br/>';
    echo "атмосферное давление: {$data['main']['pressure']} гПа";
    echo '<br/>';
    echo "направление ветра: {$data['wind']['deg']} º";
    echo '<br/>';
    echo "скорость ветра: {$data['wind']['speed']} м/с";

?>