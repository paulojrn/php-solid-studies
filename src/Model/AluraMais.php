<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements IPontuavel, IAssistivel
{
    private string $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    public function recuperarUrl(): string
    {
        return self::URL_BASE . str_replace(' ', '-', strtolower($this->categoria));
    }
}
