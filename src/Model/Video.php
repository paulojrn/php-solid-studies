<?php

namespace Alura\Solid\Model;

use DateInterval;

class Video
{
    protected const URL_BASE = "http://videos.alura.com.br/";
    protected bool $assistido = false;
    protected string $nome;
    protected DateInterval $duracao;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = DateInterval::createFromDateString('5 minutes');
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    public function assistido(): bool
    {
        return $this->assistido;
    }

    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    public function recuperarUrl(): string
    {
        return self::URL_BASE . http_build_query(['nome' => $this->nome]);
    }
}
