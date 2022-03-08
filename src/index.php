<?php

namespace Alura\Solid;

include "./vendor/autoload.php";

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\Video;
use Alura\Solid\Service\Assistidor;

$videoA = new Video("Vídeo Comum A");
$videoB = new Video("Vídeo Comum B");
$videoC = new Video("Vídeo Comum C");
$aluraMais = new AluraMais("Vídeo A+", "Inicial");

$curso = new Curso("SOLID com PHP");
$curso->adicionarVideo($videoA);
$curso->adicionarVideo($videoB);

$assistidor = new Assistidor();
$assistidor->assistir($curso);
$assistidor->assistir($aluraMais);

var_dump("=== Vídeos ===");
var_dump($videoA->assistido());
var_dump($videoB->assistido());
var_dump($videoC->assistido());
var_dump("=== Alura Mais ===");
var_dump($aluraMais->assistido());
var_dump("=== Curso ===");
var_dump($curso->assistido());