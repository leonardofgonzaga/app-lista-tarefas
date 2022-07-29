<?php include_once 'header.php'?>

        <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
            <div class="bg-success pt-2 text-white d-flex justify-content-center ">
                <h5>Tarefa inserida com sucesso!</h5>
            </div>
        <?php } ?>

		<div class="container app">
			<div class="row">
            
                <?php include_once 'menu.php' ?> 

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />

								<form method="POST" action="tarefa_controller.php?acao=inserir">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input name="tarefa" type="text" class="form-control" placeholder="Exemplo: Lavar o carro">
									</div>

									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include_once 'footer.php' ?>