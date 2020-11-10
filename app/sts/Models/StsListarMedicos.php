<?php

namespace Sts\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsListarMedicos
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsListarMedicos
{
    private $Resultado;
    
    public function listarMedicos()
    {
        $listar = new \Sts\Models\helper\StsRead();
        // $listar->fullRead('SELECT id, nome, apelido, crm, email, imagem, created, modified, ordem 
                // FROM medico
        //         WHERE med_medicos_id =:med_espec_id
        //         ORDER BY id ASC', 'med_medicos_id=1');
        
        $listar->fullRead('SELECT id, nome, crm, apelido, email, imagem, created, modified 
        FROM med_medicos
        ORDER BY id ASC', 'med_medicos_id=1');
        $this->Resultado = $listar->getResultado();

        $listar->fullRead("SELECT med.id, med.nome, med.imagem, med.created, med.email,  med.crm,med.modified, 
        esp.nomeesp 
        FROM med_medicos med
        INNER JOIN med_espec esp ON esp.id=med.id
        WHERE med.id =esp.id 
        ORDER BY id ASC ");
        $this->Resultado = $listar->getResultado();
        
        // echo "<br><br><br>";
        // var_dump($this->Resultado);
        // die();
        return $this->Resultado;
    }
}
