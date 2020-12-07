<?php

namespace Architect\Solid\Service;

use Architect\Solid\Model\Pontuavel;

class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo): int
    {
        return $conteudo->recuperarPontuacao();
    }
}
