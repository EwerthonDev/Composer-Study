<?php

require 'vendor/autoload.php';

require 'src/BuscadorDeCurso.php';

use Estudo\BuscadorDeCurso\BuscadorDeCurso;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new BuscadorDeCurso($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}