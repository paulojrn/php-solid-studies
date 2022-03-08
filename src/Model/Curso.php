<?php

namespace Alura\Solid\Model;

class Curso implements IPontuavel
{
    /**
     * @var string $nome
     */
    private string $nome;

    /**
     * @var Video[] $videos
     */
    private array $videos;

    /**
     * @var Feedback[] $feedbacks
     */
    private array $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function recuperarPontuacao(): int
    {
        return 100;
    }

    public function receberFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function adicionarVideo(Video $video): void
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /**
     * @return Video[]
     */
    public function recuperarVideos(): array
    {
        return $this->videos;
    }

    public function assistir(): void
    {
        /**
         * @var Video[] $videos 
         */

        foreach ($this->videos as $video) {
            $video->assistir();
        }
    }

    public function assistido(): bool
    {
        /**
         * @var Video[] $videos 
         */

         $assistido = false;

        foreach ($this->videos as $video) {
            $assistido = $video->assistido() || $assistido;
        }

        return $assistido;
    }
}
