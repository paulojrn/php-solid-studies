<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\IAssistivel;
use Alura\Solid\Model\IPontuavel;

class Assistidor
{
    public function assistir(IPontuavel $conteudo)
    {
        $conteudo->assistir();
    }
}
