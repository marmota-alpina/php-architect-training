<?php


namespace Architect\Solid\Model;


class Feedback
{
    public const NOTA_MINIMA_SEM_DEPOIMENTO = 9;

    public function __construct(private int $nota, private ?string $depoimento)
    {
        if ($nota < self::NOTA_MINIMA_SEM_DEPOIMENTO && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }
    }

    public function recuperarNota(): int
    {
        return $this->nota;
    }

    public function recuperarDepoimento(): ?string
    {
        return $this->depoimento;
    }
}