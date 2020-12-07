<?php

namespace Architect\Solid\Service;

use Architect\Solid\Model\Assistivel;
use Architect\Solid\Model\Pontuavel;

class Assistidor
{
    public function assistir(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
