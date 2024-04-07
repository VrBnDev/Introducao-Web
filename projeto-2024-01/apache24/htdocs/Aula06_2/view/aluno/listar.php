<?php include("../view/template/cabecalho.php"); ?>

<?php include("../view/template/msg.php"); ?>

 <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
			
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
                    <div class="data-table-list">
					
                        <div class="basic-tb-hd">
                            <h2>Listagem de Alunos</h2>
                           <button onclick="location='../controller/alunoController.php?acao=listar'" class="btn btn-primary notika-btn-primary waves-effect">Recarregar</button>
						   <button onclick="location='../controller/alunoController.php?acao=formulario'" class="btn btn-primary notika-btn-primary waves-effect">Novo</button>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" data-order-by="2" class="table table-striped">
                                <thead>
									  <tr>
									   <th>ID</th>
									   <th>Nome</th>
									   <th>Idade</th>
									  </tr>
                                </thead>
                                <tbody>
								<?php foreach ($alunos as $item): ?>
									<tr>
									   <td><?=$item->id ?></td>
									   <td><?=$item->nome ?></td>
									   <td><?=$item->idade?> Anos</td>
								   </tr>
								<?php endforeach; ?>
                                </tbody>
                                <tfoot>
									  <tr>
									   <th>ID</th>
									   <th>Nome</th>
									   <th>Idade</th>
									  </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->



<?php include("../view/template/rodape.php"); ?>