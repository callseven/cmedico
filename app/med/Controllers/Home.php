<?php

namespace med\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Home
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Home
{

    private $Dados;

    public function index()
    {
        $listarMenu = new \Med\Models\StsMenu();
        $this->Dados['menu'] = $listarMenu->listarMenu();

        $listarSeo = new \Med\Models\StsSeo();
        $this->Dados['seo'] = $listarSeo->listarSeo();

        $listar_car = new \Med\Models\StsCarousel();
        $this->Dados['sts_carousels'] = $listar_car->listar();

        $listar_ser = new \Med\Models\StsServico();
        $this->Dados['sts_servicos'] = $listar_ser->listar();

        $listar_vid = new \Med\Models\StsVideo();
        $this->Dados['sts_videos'] = $listar_vid->listar();

        $listar_art_home = new \Med\Models\StsArtHome();
        $this->Dados['sts_artigos'] = $listar_art_home->listarArtHome();

        // $listarmedicos = new \Med\Models\MedHome();
        // $this->Dados['med_medicos'] = $listarmedicos->listarMedHome();


        $carregarView = new \Core\ConfigView("app/med/Views/home/home", $this->Dados);
        $carregarView->renderizar();
    }

}
