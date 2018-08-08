<?php
include 'head2.php';
include 'include/op_cadastro.php';
include 'include/antisql.php';
?>
<!-- Preloader Start -->
<div class="preloaders">
    <div class="preloader">
        <img src="img/carrega.gif" alt="Loading">
    </div>
</div>
<div class="conter-site limpar">
	<!--Servicos-->
	<div class="linha">
		<div class="conjunto">
			<div class="colunas-desktop-12">
				<div class="conjunto limpar">
					<!--Servicos-->
					<div class="texto-centro">
						<div class="conjunto">
							<ol>
								<li class="material-icons">home</li>
								<i>/ Ínicio</i> <i>/ Contato</i>
							</ol>
							<div class="colunas-1">
								<div class="colunas"></div>
							</div>
							<h4 class="texto-centro"> <strong>Sites gerenciáveis&nbsp;com layout responsivo que se adaptam a qualquer dispositivo móvel.</strong> </h4>
							<p class="texto-centro">Serviços de manutenção e atualização de sites em contrato mensal ou por projeto.</p>
							<p class="rubrica">" Somos o que nossos pensamentos fizeram de nós; portanto tome cuidado com o que você pensa. Os pensamentos vivem; eles viajam longe. As palavras são secundárias. " – Swami Vivekananda, </p>
							<h3 class="texto-centro">
							 	<strong> Deixe seu recado pra mim </strong>
							</h3>
							<p class="texto-centro c12a">Me deixe uma sugestão, proposta de trabalho ou semelhante. Agradeço sua visita!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /serviços -->

<!-- conteudo -->
<div clas="conjunto">
	<div class="colunas-12 texto-centro">
		<?php if (isset($_GET["success"])) { ?>
			<div class="alerta alerta-sucesso" role="alert">
				<center><strong>Sucesso!</strong> logo entrarei em contato!</center>
			</div>
		<?php } ?>
		<?php if (isset($_GET["error"])) { ?>
			<div class="alerta alerta-perigo" role="alert">
				<center><strong>Erro!</strong> Houve algum erro para inserir os dados! Consulte o administrador.</center>
			</div>
		<?php } ?>
	</div>
</div>
<div class="conter-site-fluid">
	<div class="linha texto-centro">
		<div class="form-destino ">
		<div class="colunas-3">
			<div class="colunas"></div>
		</div>
		<div class="colunas-6 texto-centro">
			<div class="inicio-form nota">
				<form action="include/op_cadastro.php" method="post">
					<div class="grupo-form">
						<div class="form-form-inp">
							<span>
						<input name="nome" placeholder="Nome" size="45" type="text" value="" />
							</span>

							<span>
						<input name="email" placeholder="Email" size="45" type="email" value=""/>
							</span>
							<span>
						<input name="tel" placeholder="Telefone" size="45" type="tel" value=""/>
							</span>

						</div>
						<div class="form-form-inp">
							<section class="iniciar_opcao">
								<div class="opcao">
									<select class="seletor" name="opcao">
										<option value="">
											Interesse
										</option>
										<option value="DS">
											Desenvolvimento Sistemas
										</option>
										<option value="WS">
											WebSite
										</option>
										<option value="3">
											Designer Gráfico
										</option>
										<option value="WP">
											Wordpress
										</option>
										<option value="MD">
											marketing Digital
										</option>
										<option value="OT">
											Outros
										</option>
									</select>
								</div>
							</section>
							<span>
								<textarea name="mensagem" placeholder="Deixe seu recado..."></textarea>
							</span>
						</div>
					</div>

					<div class="separa">
						<!-- <div class="box-btn"> -->
						<button class="btn btn-informacao btn-centro" type="submit" value="enviar" name="acao">
					Enviar
				</button>
						<!--  </div>   -->
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>

	<!-- /conteudo -->
	<?php
    include 'footer.php';
    ?>