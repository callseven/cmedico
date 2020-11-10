<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php
        if (!empty($this->Dados['seo'][0])) {
            extract($this->Dados['seo'][0]);
            echo "<title>$titulo</title>";
            echo "<meta name='robots' content='$tipo_rob'>";
            echo "<meta name='description' content='$description'>";
            echo "<meta name='author' content='$author'>";
            echo "<link rel='canonical' href='" . URL . "$endereco'>";
            echo "<meta name='keywords' content='$keywords'>";

            echo "<meta property='og:site_name' content='$og_site_name'>";
            echo "<meta property='og:locale' content='$og_locale'>";
            //https://pt.piliapp.com/facebook/id/
            echo "<meta property='fb:admins' content='$fb_admins'>";
            echo "<meta property='og:url' content='" . URL . "$endereco'>";
            echo "<meta property='og:title' content='$titulo'>";
            echo "<meta property='og:description' content='$description'>";
            echo "<meta property='og:image' content='" . URL . "assets/imagens/$dir_img/$id/$imagem'>";
            echo "<meta property='og:type' content='website'>";
            echo "<meta property='og:image:width' content='1200'>";
            echo "<meta property='og:image:height' content='630'>";
            //https://developers.facebook.com/tools/debug/

            echo "<meta name='twitter:site' content='$twitter_site'>";
            echo "<meta name='twitter:card' content='summary_large_image'>";
            echo "<meta name='twitter:title' content='$titulo'>";
            echo "<meta name='twitter:description' content='$description'>";
            echo "<meta name='twitter:image:src' content='" . URL . "assets/imagens/$dir_img/$id/$imagem'>";
            //https://cards-dev.twitter.com/validator

            echo "<meta itemprop='name' content='$titulo'>";
            echo "<meta itemprop='description' content='$description'>";
            echo "<meta itemprop='image' content='" . URL . "assets/imagens/$dir_img/$id/$imagem'>";
            echo "<meta itemprop='url' content='" . URL . "$endereco'>";
        }
        ?>
        <link rel="icon" href="<?php echo URL; ?>assets/imagens/icone/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/personalizado.css">
        <!-- <link rel="stylesheet" href="<?php echo URL; ?>assets/scss/material-bootstrap-wizard"> -->
        <!-- <link rel="stylesheet" href="<?php echo URL; ?>assets/css/material-bootstrap-wizard.css" rel="stylesheet" /> -->


        <link href="<?php echo URL; ?>aassets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="<?php echo URL; ?>assets/css/material-bootstrap-wizard.css" rel="stylesheet"/> -->
	<link href="<?php echo URL; ?>assets/css/demo.css" rel="stylesheet" />
    
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

	<style>
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.btn-primary .caret{
		    border-top-color: #3472F7;
		    color: #3472F7;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.table-shopping .td-name{
			min-width: 130px;
		}
	</style>
</head>

    
    <body>
