<?php
include 'head2.php';
?>
<!-- Preloader Start -->
<div class="preloaders">
    <div class="preloader">
        <img src="img/carrega.gif" alt="Loading">
    </div>
</div>
<div class="linha">
	<div class="conjunto">
		<div class="texto-centro">
			<ol>
				<li class="material-icons">
					home
				</li>
				<i>
                / Ínicio
                </i>
				<i>
                / Portfólio
                </i>
			</ol>
			<strong>
              Vamos conversar sobre o seu projeto,
              <a href="contato.php" class="c12b" title="Sites, Blogs e Lojas Virtuais.">
                entre em contato!
              </a>
              </strong>


			<h3>Ideias hoje, ideias amanhã e ideias sempre!</h3>
			<p>Visite alguns dos meus trabalhos! Trago aqui uma amostra de cada página web e integração que desenvolvi ao longo do tempo que trabalhei como programador. </p>
		</div>
	</div>
</div>
<!-- conteudo -->
<div class="linha">
	<div class="conter-site">
		<section class="conjunto">
			<div class="colunas-4">
				<div class="colunas">
				</div>
			</div>
			<div class="colunas-laptop-4 colunas-tablet-12">
				<img class="img-responsivo" src="imagens/alguns_trabalhos.png">
			</div>
			<div class="linha">
				<div class="box-portfolio">
					<div class="linha">
						<button class="filtro active" data-filter="all">Todas</button>
						<button class="filtro" data-filter="cat-1">Sites</button>
						<button class="filtro" data-filter="cat-2">Sistemas Web</button>
						<button class="filtro" data-filter="cat-3">Designer Gráfico</button>
					</div>
					<div id="portfolio-items" class="conter-site">
						<div class="item cat-3 banner">
							<div class="cliper">
								<h4>FireGroups</h4>
							</div>
							<div class="item-cont">
								<h2>Banner</h2>
								<p>Escola de Bombeiro</p>
							</div>
							<img src="img/portfolio/firegroups.png" class="img-responsivo'" alt="firegroups"/>
						</div>
						<div class="item cat-3">
							<div class="cliper">
								<h4>Cartao de visita</h4>
							</div>
							<div class="item-cont">
								<h2>Semi - Jóias</h2>
								<p>Gabriela</p>
							</div>
							<img src="img/portfolio/img1.png" class="img-responsivo" alt="img01"/>
						</div>
						<div class="item cat-3">
							<div class="cliper">
								<h4>Cartao de visita</h4>
							</div>
							<div class="item-cont">
								<h2>Desenvolvedor</h2>
								<p>Diego</p>
							</div>
							<img src="img/portfolio/img2.png" class="img-responsivo" alt="img02"/>
						</div>
						<div class="item cat-3">
							<div class="cliper">
								<h4>Logo</h4>
							</div>
							<div class="item-cont">
								<h2>Ucap</h2>
								<p>#Design</p>
							</div>
							<img src="img/portfolio/img3.png" class="img-responsivo" alt="img03"/>
						</div>
						<div class="item cat-1">
							<div class="cliper">
								<h4>Escola</h4>
							</div>
							<div class="item-cont">
								<h2>Projeto</h2>
								<p>#Desenvolvimento</p>
							</div>
							<img src="img/portfolio/img9.png" class="img-responsivo" alt="img9"/>
						</div>
						<div class="item cat-1">
							<div class="cliper">
								<h4>TCC</h4>
							</div>
							<div class="item-cont">
								<h2>ETEC</h2>
								<p>#Desenvolvimento</p>
							</div>
							<img src="img/portfolio/img4.png" class="img-responsivo" alt="img11"/>
						</div>
						<div class="item cat-1">
							<div class="cliper">
								<h4>Jogo</h4>
							</div>
							<div class="item-cont">
								<div class="colunas-laptop-5 colunas-smart-7">
									<a href="http://www.inuyasha.dcfiuza.com.br" target="_blank">
										<h4>Inuyashas, estoure os balões</h4>
									</a>
								</div>
							</div>
							<img src="img/portfolio/img8.png" class="img-responsivo'" alt="img11"/>
						</div>
						<div class="item cat-2">
							<div class="cliper">
								<h4>Sistema</h4>
							</div>
							<div class="item-cont">
								<h2>Biblioteca</h2>
								<p>#Sistema #Web </p>
							</div>
							<img src="img/portfolio/img5.png" class="img-responsivo" alt="img03"/>
						</div>
						<div class="item cat-1">
							<div class="cliper">
								<h4>loja Virtual </h4>
							</div>
							<div class="item-cont">
								<h2>Responsivo</h2>
								<a href="http://www.cantinhoartes.dcfiuza.com.br/" target="_blank">
									<p>#web #E-commerce </p>
								</a>
							</div>
							<img src="img/portfolio/img11.png" class="img-responsivo" alt="img03"/>
						</div>
						<div class="dupilicata">
							<div class="item-content">
							</div>
						</div>
						<div class="portfolio-close">
							<i class="fa fa-times" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php
include 'footer.php';
?>