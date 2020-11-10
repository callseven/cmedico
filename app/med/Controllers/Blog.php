<?php

namespace med\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Blog
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Blog
{

    private $Dados;
    private $PageId;

    public function index()
    {
        $listarMenu = new \Med\Models\StsMenu();
        $this->Dados['menu'] = $listarMenu->listarMenu();

        $listarSeo = new \Med\Models\StsSeo();
        $this->Dados['seo'] = $listarSeo->listarSeo();
        
        $this->PageId = filter_input(INPUT_GET, 'pg', FILTER_SANITIZE_NUMBER_INT);
        $this->PageId = $this->PageId ? $this->PageId : 1;
        //echo "<br><br><br> {$this->PageId}";
        $listar_art = new \Med\Models\StsBlog();
        $this->Dados['artigos'] = $listar_art->listarArtigos($this->PageId);
        $this->Dados['paginacao'] = $listar_art->getResultadoPg();

        $listarArtRecente = new \Med\Models\StsArtRecente();
        $this->Dados['artRecente'] = $listarArtRecente->listarArtRecente();

        $listarArtDestaque = new \Med\Models\StsArtDestaque();
        $this->Dados['artDestaque'] = $listarArtDestaque->listarArtDestaque();

        $visSobreAutor = new \Med\Models\StsSobreAutor();
        $this->Dados['sobreAutor'] = $visSobreAutor->sobreAutor();

        $carregarView = new \Core\ConfigView('med/Views/blog/blog', $this->Dados);
        $carregarView->renderizar();
    }

}
