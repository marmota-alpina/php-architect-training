<?php


namespace Architect\Solid\Model;


final class Slug implements \Stringable
{
    private string $slug;

    public function __construct(string $conteudo)
    {
        $this->slug = str_replace(' ', '-', strtolower($conteudo));
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}