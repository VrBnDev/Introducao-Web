<?php include("../view/template/cabecalho.php"); ?>
<?php include("../view/template/msg.php"); ?>

  <!-- Form Element area Start-->
  <form action="../controller/disciplinaController.php" method="POST" >
    <input type="hidden" name="acao" value="salvar">
    <input type="hidden" name="id" value="<?=$disciplina->id?>">
    <div class="form-element-area">
        <div class="container">
  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap mg-t-30">
                        <div class="cmp-tb-hd cmp-int-hd">
                            <h2>Formulário de Disciplina</h2>
                        </div>
                        <div class="form-example-int form-horizental">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Nome</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="nome" value="<?=$disciplina->nome?>" class="form-control input-sm" placeholder="Entre com o Nome">
                                        </div>
                                    </div>
                                </div>
                            </div>
	
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Ementa</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="text" name="ementa" value="<?=$disciplina->ementa?>" class="form-control input-sm" placeholder="Entre com a matrícula">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                        <label class="hrzn-fm">Carga Horária</label>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                        <div class="nk-int-st">
                                            <input type="number" name="cargahoraria" value="<?=$disciplina->cargahoraria?>" class="form-control input-sm" placeholder="Entre com a matrícula">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int mg-t-15">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                </div>
                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                    <button class="btn btn-success notika-btn-success">Enviar</button>
                                </div>
                            </div>
                        </div>
                   
				   </div>
                </div>
            </div>
        
           
        </div>
    </div>
    <!-- Form Element area End-->
	</form>
<?php include("../view/template/rodape.php"); ?>
