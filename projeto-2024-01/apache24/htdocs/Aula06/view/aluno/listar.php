<?php include("../view/template/cabecalho.php"); ?>

<div class="container">


	<h1>Lista de Alunos</h1>

	<button class="btn btn-primary" onclick="location.href='../controller/alunoController.php?funcao=formulario'">Novo Aluno</button><br><br>

	<!-- Data Table area Start-->
	<div class="data-table-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="data-table-list">
						<div class="basic-tb-hd">
							<h2>Basic Example</h2>
							<p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
						</div>
						<div class="table-responsive">
							<table id="data-table-basic" class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nome</th>
										<th>Idade</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($alunos as $item) : ?>
										<tr>
											<td><?= $item->id ?></td>
											<td><?= $item->nome ?></td>
											<td><?= $item->idade ?> Anos</td>
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

</div>

<?php include("../view/template/rodape.php"); ?>