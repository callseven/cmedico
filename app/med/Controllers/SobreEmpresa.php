<?php

namespace med\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of SobreEmpresa
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class SobreEmpresa
{

    private $Dados;

    public function index()
    {
        $listarMenu = new \Med\Models\StsMenu();
        $this->Dados['menu'] = $listarMenu->listarMenu();

        $listarSeo = new \Med\Models\StsSeo();
        $this->Dados['seo'] = $listarSeo->listarSeo();
        
        $listarSobEmp = new \Med\Models\StsSobEmp();
        $this->Dados['sts_sobs_emps'] = $listarSobEmp->listarSobEmp();
        
        $carregarView = new \Core\ConfigView('Med/Views/sobEmp/sobEmp', $this->Dados);
        $carregarView->renderizar();
    }

}
