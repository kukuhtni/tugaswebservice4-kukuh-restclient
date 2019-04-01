<?php
include 'vendor/autoload.php';
$id = $_GET['id'];
use GuzzleHttp\Client;

$client = new Client();
$data = $client->request('DELETE','http://pkl.notaxcloth.com/kukuh-restserver/api/mekanik',[
    'form_params' => ['id' => $id]
]);

    header('location: index.php');
    exit();