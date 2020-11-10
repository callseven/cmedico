<?php
if (!defined('URL')) {
    header("Location: /");
    exit();
}

//echo "View HOME <br>";
//var_dump($this->Dados['sts_carousels']);
?>
<!-- <head> -->
<style>.wizard-container2 {
  padding-top: 1px;
  z-index: 3; }
  .wizard-container2 .wizard-navigation2 {
    position: relative; }

    /* .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
     */
    </style>
	<!-- <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" /> -->
    <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
<!-- </head>  -->

<body>
	<!-- <div class="image-container set-full-height" style="background-image: url('assets/img/wizard-book.jpg')">
	    <!--   Creative Tim Branding   -->
	    <!-- <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Creative Tim
	            </div>
	        </div>
	    </a> -->

		 <!-- Made With Material Kit 
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a> --> 

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-12 col-sm-offset-0">
		            <!--      Wizard container        -->
		            <div class="wizard-container2">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="" method="">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Médicos 
		                        	</h3>
									<h5>Lsita de médicos cadastrados e especialidades</h5>
                                </div>
                                
								<div class="wizard-navigation">
									<!-- <ul>
			                            <li><a href="#details" data-toggle="tab">Account</a></li>
			                            <li><a href="#captain" data-toggle="tab">Room Type</a></li>
			                            <li><a href="#description" data-toggle="tab">Extra Details</a></li>
			                        </ul>
								</div> -->

                                

                                

    <div class="jumbotron servicos">
      
    <div class="container">
    <div class="row col-md-12 col-md-offset-0 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="#"  class="btn btn-xs btn-dark">Cadastrar Médico</a>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CRM</th>
            <th>Email</th>
            <th>Especialidades</th>
            <th>Imagem</th>
            <th>Criado</th>
            <!-- <th>Editado</th> -->
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <?php
                foreach ($this->Dados['medicos'] as $medicos) {
                    extract($medicos);
                    ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nome; ?></td>
                <td><?php echo $crm; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $nomeesp; ?></td>
                <td><?php echo $imagem; ?></td>
                <td><?php echo $created; ?></td>
                <!-- <td><?php echo $modified; ?></td> -->

                <td class="text-center">
                <a class='btn btn-round btn-info btn-xs' href="#">
                <span class="glyphicon glyphicon-edit"></span>Editar</a> 
                <a href="#" class="btn btn-round btn-danger btn-xs">
                <span class="glyphicon glyphicon-remove"></span>Apagar</a></td>
                
            </tr>
<?php
                }
                ?>
            
    </table>
    </div>
</div>

                <!-- <teste servi> -->
    
    <div class="container">
            <!--     -->
            <!-- <div class="card-deck">
                <div class="card text-center anim_left">
                    <div class="icon-row tamanh-icone">
                        <span class="step size-96 text-danger">
                            <i class="icon <?php echo $nome; ?>"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nome; ?></h5>
                        <p class="card-text lead"><?php echo $descricao_um; ?></p>      
                    </div>
                </div>
                <div class="card text-center anim_bottom">
                    <div class="icon-row tamanh-icone">
                        <span class="step size-96 text-danger">
                            <i class="icon <?php echo $icone_dois; ?>"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nome_dois; ?></h5>
                        <p class="card-text lead"><?php echo $descricao_dois; ?></p>
                    </div>
                </div>
                <div class="card text-center anim_right">
                    <div class="icon-row tamanh-icone ">
                        <span class="step size-96 text-danger">
                            <i class="icon <?php echo $icone_tres; ?>"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nome_tres; ?></h5>
                        <p class="card-text lead"><?php echo $descricao_tres; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->

    <!-- <div class="content p-1">
    <div class="list-group-item">
        <div class="d-flex">
            <div class="mr-auto p-2">
                <!-- <h2 class="display-4 titulo">Listar Carousel</h2> -->
            </div>
            <!-- <?php
            if ($this->Dados['botao']['cad_medicos']) {
                ?> -->
                <a href="<?php echo URL . 'cadastrar-medicos/cad-medicos'; ?>">
                    <div class="p-2">
                        <button class="btn btn-outline-success btn-sm">
                            Cadastrar
                        </button>
                    </div>
                </a>
                <?php
            }
            ?>

        </div>
        <?php
        if (empty($this->Dados['listMedicos'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                Nenhum Medico encontrado!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th class="d-none d-sm-table-cell">Email</th>
                        <th class="d-none d-sm-table-cell">Ordem</th>
                        <th class="d-none d-lg-table-cell">Situação</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->Dados['listMedicos'] as $medicos) {
                        extract($medicos);
                        ?>
                        <tr>
                            <th><?php echo $id; ?></th>
                            <td><?php echo $nome; ?></td>
                            <td class="d-none d-sm-table-cell">
                                <?php echo "<img src='" . URL . "assets/imagens/carousel/$id/$imagem' width='150' height='60'>"; ?>
                            </td>
                            <td><?php echo $ordem; ?></td>
                            <td class="d-none d-lg-table-cell">
                                <?php
                                if ($this->Dados['botao']['alt_sit_carousel']) {
                                    echo "<a href='" . URL . "alt-sit-carousel/alt-sit-carousel/$id'><span class='badge badge-pill badge-$cor_cr'>$nome_sit</span></a>";
                                } else {
                                    echo "<span class='badge badge-pill badge-$cor_cr'>$nome_sit</span>";
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <span class="d-none d-md-block">
                                    <?php
                                    if ($this->Dados['botao']['ordem_carousel']) {
                                        echo "<a href='" . URL . "alt-ordem-carousel/alt-ordem-carousel/$id' class='btn btn-outline-secondary btn-sm'><i class='fas fa-angle-double-up'></i></a> ";
                                    }
                                    if ($this->Dados['botao']['vis_carousel']) {
                                        echo "<a href='" . URL . "ver-carousel/ver-carousel/$id' class='btn btn-outline-primary btn-sm'>Visualizar</a> ";
                                    }
                                    if ($this->Dados['botao']['edit_carousel']) {
                                        echo "<a href='" . URL . "editar-carousel/edit-carousel/$id' class='btn btn-outline-warning btn-sm'>Editar</a> ";
                                    }
                                    if ($this->Dados['botao']['del_carousel']) {
                                        echo "<a href='" . URL . "apagar-carousel/apagar-carousel/$id' class='btn btn-outline-danger btn-sm' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a> ";
                                    }
                                    ?>
                                </span>
                                <div class="dropdown d-block d-md-none">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ações
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                        <?php
                                        if ($this->Dados['botao']['vis_carousel']) {
                                            echo "<a class='dropdown-item' href='" . URLADM . "ver-carousel/ver-carousel/$id'>Visualizar</a>";
                                        }
                                        if ($this->Dados['botao']['edit_carousel']) {
                                            echo "<a class='dropdown-item' href='" . URLADM . "editar-carousel/edit-carousel/$id'>Editar</a>";
                                        }
                                        if ($this->Dados['botao']['del_carousel']) {
                                            echo "<a class='dropdown-item' href='" . URLADM . "apagar-carousel/apagar-carousel/$id' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a>";
                                        }
                                        ?>


                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?> -->

                </tbody>
            </table>
<!-- <termino carousel> -->

		                        <!-- <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Let's start with the basic details.</h4>
			                            	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Your Email</label>
			                                          	<input name="name" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Your Password</label>
			                                          	<input name="name2" type="password" class="form-control">
			                                        </div>
												</div>

		                                	</div>
		                                	<div class="col-sm-6">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Country</label>
	                                        		<select class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afghanistan </option>
	                                                	<option value="Albania"> Albania </option>
	                                                	<option value="Algeria"> Algeria </option>
	                                                	<option value="American Samoa"> American Samoa </option>
	                                                	<option value="Andorra"> Andorra </option>
	                                                	<option value="Angola"> Angola </option>
	                                                	<option value="Anguilla"> Anguilla </option>
	                                                	<option value="Antarctica"> Antarctica </option>
	                                                	<option value="...">...</option>
		                                        	</select>
		                                    	</div>
												<div class="form-group label-floating">
		                                        	<label class="control-label">Daily Budget</label>
	                                        		<select class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> < $100 </option>
	                                                	<option value="Albania"> $100 - $499 </option>
	                                                	<option value="Algeria"> $499 - $999 </option>
	                                                	<option value="American Samoa"> $999+ </option>
		                                        	</select>
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="captain">
		                                <h4 class="info-text">What type of room would you want? </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
		                                                <input type="radio" name="job" value="Design">
		                                                <div class="icon">
		                                                    <i class="material-icons">weekend</i>
		                                                </div>
		                                                <h6>Single</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
		                                                <input type="radio" name="job" value="Code">
		                                                <div class="icon">
		                                                    <i class="material-icons">home</i>
		                                                </div>
		                                                <h6>Family</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
		                                                <input type="radio" name="job" value="Code">
		                                                <div class="icon">
		                                                    <i class="material-icons">business</i>
		                                                </div>
		                                                <h6>Business</h6>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Drop us a small description.</h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            <label>Room description</label>
		                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group">
		                                            <label class="control-label">Example</label>
		                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer"> -->
	                            	<!-- <div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' /> -->

										<!-- <div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Subscribe to our newsletter
											  </div>
										  </div>
										</div>
	                                </div> -->
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <!-- <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/material-bootstrap-wizard">here.</a>
	        </div>
	    </div> -->
	</div>


</main>