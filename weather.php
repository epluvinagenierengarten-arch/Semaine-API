<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

header('Content-Type: application/json');

$apiKey = 'aa08f06fab3f4c4ead05d17a4505a6db';
$city = $_GET['city'] ?? 'Nice';

try {
    
    $client = new Client();
    
    $response = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather', [
        'query' => [
            'q' => $city,   //ville
            'appid' => $apiKey, //cléAPI
            'units' => 'metric',    //Unité Celcius
            'lang' => 'fr'  //français
        ],
        'timeout' => 5  //timeout de 5secondes
    ]);


    // Affiche le contenu de la réponse
    echo $response->getBody();
    

    //pour les erreurs
} catch (RequestException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Erreur API: ' . $e->getMessage()]);
}

?>