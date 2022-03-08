<?php

namespace Alura\Solid\Model;

interface IPontuavel
{
    public function recuperarPontuacao(): int;
    public function assistir(): void;
}