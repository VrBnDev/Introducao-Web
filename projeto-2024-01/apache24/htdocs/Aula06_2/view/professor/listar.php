<?php include("../view/template/cabecalho.php"); ?>
<?php include("../view/template/msg.php"); ?>

 <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
			
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
                    <div class="data-table-list">
					
                        <div class="basic-tb-hd">
                            <h2>Listagem de Professores</h2>
                           <button onclick="location='../controller/professorController.php?acao=listar'" class="btn btn-primary notika-btn-primary waves-effect">Recarregar</button>
						   <button onclick="location='../controller/professorController.php?acao=formulario'" class="btn btn-primary notika-btn-primary waves-effect">Novo</button>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" data-order-by="2" class="table table-striped">
                                <thead>
									  <tr>
									   <th>ID</th>
									   <th>Nome</th>
									   <th>Matrícula</th>
                                       <th>Ações</th>
									  </tr>
                                </thead>
                                <tbody>
								<?php foreach ($professores as $item): ?>
									<tr>
									   <td><?=$item->id ?></td>
									   <td><?=$item->nome ?></td>
									   <td><?=$item->matricula?></td>
                                       <td>
                                            <button type="button" class="btn btn-primary waves-effect" data-toggle="tooltip" data-placement="top" data-original-title="Editar" style="margin-right: 5px;"><i class="fa-solid fa-edit"></i>
                                            <button type="button" class="btn btn-danger waves-effect" data-toggle="tooltip" data-placement="top" data-original-title="Excluir"><i class="fa-solid fa-trash"></i>
                                        </td> 
                                    </tr>
								<?php endforeach; ?>
                                </tbody>
                                <tfoot>
									  <tr>
									   <th>ID</th>
									   <th>Nome</th>
									   <th>Matrícula</th>
                                       <th>Ações</th>
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