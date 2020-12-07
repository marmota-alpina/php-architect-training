<?php

namespace Architect\Solid\Service;

use Architect\Solid\Model\AluraMais;
use Architect\Solid\Model\Curso;

class Assistidor
{
    public function assisteCurso(Curso $curso)
    {
        foreach ($curso->recuperarVideos() as $video) {
            $video->assistir();
        }
    }

    public function assisteAluraMais(AluraMais $aluraMais)
    {
        $aluraMais->assistir();
    }
}
