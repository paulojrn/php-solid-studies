<?php

namespace Alura\Solid\Model;

class Curso
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

    public function receberFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function adicionarVideo(Video $video)
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
}
