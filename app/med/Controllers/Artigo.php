<?php

namespace App\med\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Artigo
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Artigo
{

    private $Dados;
    private $Artigo;

    public function index($Artigo = null)
    {
        $listarMenu = new \Med\Models\StsMenu();
        $this->Dados['menu'] = $listarMenu->listarMenu();
        
        $this->Artigo = (string) $Artigo;
        //echo "<br><br><br>{$this->Artigo}";

        $visualizarArt = new \Med\Models\StsArtigo();
        $this->Dados['sts_artigos'] = $visualizarArt->visualizarArtigo($this->Artigo);

        $listarArtRecente = new \Med\Models\StsArtRecente();
        $this->Dados['artRecente'] = $listarArtRecente->listarArtRecente();

        $listarArtDestaque = new \Med\Models\StsArtDestaque();
        $this->Dados['artDestaque'] = $listarArtDestaque->listarArtDestaque();

        $visSobreAutor = new \Med\Models\StsSobreAutor();
        $this->Dados['sobreAutor'] = $visSobreAutor->sobreAutor();

        $listarSeo = new \Med\Models\StsSeo();
        $this->Dados['seo'] = $listarSeo->listarSeo();
        if (!empty($this->Dados['sts_artigos'][0])) {
            $artProxAnt = new \Med\Models\StsArtProxAnt();
            $this->Dados['artProximo'] = $artProxAnt->artigoProximo($this->Dados['sts_artigos'][0]['id']);
            $this->Dados['artAnterior'] = $artProxAnt->artigoAnterior($this->Dados['sts_artigos'][0]['id']);
            $this->Dados['seo'] = $listarSeo->listarSeo('sts_artigos', 'slug', $this->Artigo);
        }else{
            $this->Dados['seo'] = $listarSeo->listarSeo();
        }

        $carregarView = new \Core\ConfigView('sts/Views/blog/artigo', $this->Dados);
        $carregarView->renderizar();
    }

}
