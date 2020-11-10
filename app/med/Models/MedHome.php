<?php

namespace med\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of MEdArtHome
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class MedHome
{

    private $Resultado;

    public function listarPaginas()
    {
        $listar = new \Med\Models\helper\StsRead();
        $listar->fullRead('SELECT id, nome, apelido, email, usuario, created, modified FROM med_medicos 
                ORDER BY id DESC');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }

}
