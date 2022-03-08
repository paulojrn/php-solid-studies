<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\IAssistivel;

class Assistidor
{
    public function assistir(IAssistivel $conteudo): void
    {
        $conteudo->assistir();
    }
}
