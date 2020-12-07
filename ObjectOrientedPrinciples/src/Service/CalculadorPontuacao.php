<?php

namespace Architect\Solid\Service;

use Architect\Solid\Model\AluraMais;
use Architect\Solid\Model\Curso;

class CalculadorPontuacao
{
    public function recuperarPontuacao($conteudo): int
    {
        if ($conteudo instanceof Curso) {
            return 100;
        } else if ($conteudo instanceof AluraMais) {
            return $conteudo->minutosDeDuracao() * 2;
        } else {
            throw new \DomainException('Apenas Cursos e videos Alura+ possuem pontuações');
        }
    }
}
