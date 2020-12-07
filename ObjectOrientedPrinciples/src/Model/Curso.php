<?php

namespace Architect\Solid\Model;

class Curso
{
    private array $videos;
    private array $feedbacks;

    public function __construct(private string $nome)
    {
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receberFeedback(int $nota, ?string $depoimento): void
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->feedbacks[] = [$nota, $depoimento];
    }

    public function adicionarVideo(Video $video)
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    public function recuperarVideos(): array
    {
        return $this->videos;
    }
}
