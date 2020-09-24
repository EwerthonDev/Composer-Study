<?php

use GuzzleHttp\Client;

$client = new Client();

$resposta = $client->request('GET', 'https://cursos.alura.com.br/category/programacao/php');

$html = $resposta->getBody();