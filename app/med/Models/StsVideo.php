<?php

namespace med\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsVideo
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsVideo
{
    private $Resultado;
    
    public function listar()
    {
        $listar = new \Med\Models\helper\StsRead();
        $listar->exeRead('sts_videos', 'LIMIT :limit', 'limit=1');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }
}
