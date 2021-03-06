<?php

namespace med\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of MedPaginas
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class MedPaginas
{
    private $Resultado;
    private $UrlController;
    
    public function listarPaginas($UrlController = null)
    {
        $this->UrlController = (string) $UrlController;
        $listar = new \Med\Models\helper\MedRead();
        $listar->fullRead('SELECT pg.id,
                tpg.tipo tipo_tpg
                FROM sts_paginas pg            
                INNER JOIN sts_tps_pgs tpg ON tpg.id=pg.sts_tps_pg_id
                WHERE pg.sts_situacaos_pg_id =:sts_situacaos_pg_id
                AND pg.controller =:controller
                LIMIT :limit', "sts_situacaos_pg_id=1&controller={$this->UrlController}&limit=1");
        
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }
}
