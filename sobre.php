<?php include "header.php" ?>

<link rel="stylesheet" type="text/css" href="css/jquery.capty.css">
<script type="text/javascript" src="js/jquery.capty.min.js"></script>
<script type="text/javascript" src="js/jquery.hoverizr.min.js"></script>

<div class="container main" style="position: relative">
	<div class="text-center">
		<ul class="nav navbar-nav navbar-nav-center" id="tabs">
			<li class="active">
				<a href="#sobre" data-toggle="tab">Sobre nós</a>
			</li>
			<li>
				<a href="#direcao" data-toggle="tab">Direção</a>
			</li>
			<li>
				<a href="#administracao" data-toggle="tab">Administração</a>
			</li>
			<li>
				<a href="#atendimento" data-toggle="tab">Atendimento</a>
			</li>
			<li>
				<a href="#criacao" data-toggle="tab">Criação</a>
			</li>
			<li>
				<a href="#midia" data-toggle="tab">Mídia e Produção</a>
			</li>
		</ul>
	</div>
	<div>
		<div class="tab-content">
			<div class="tab-pane active" id="sobre">
				<h1>Sobre nós</h1>

				<p>
					A Saminina surgiu em 2010 após uma análise do potencial do mercado publicitário no interior de Pernambuco. Tem como premissa trabalhar de forma colaborativa com seus clientes, prezando pela qualidade e buscando alcançar os melhores resultados de curto e longo prazo, destacando o diferencial competitivo de cada empresa.</p>
				<p>
					Desde 2012, recebeu a certificação do Conselho Executivo das Normas-Padrão (CENP), entidade criada pelo mercado publicitário para zelar pela observância das Normas-Padrão da Atividade Publicitária. Em 2013, associou-se ao SINAPRO-PE, entidade sindical que representa as agências de propagandas do Pernambuco.</p>
				<p>
					A Saminina é formada por duas agências especializadas em comunicação e promoção de vendas e eventos. A Saminina Comunicação e a Saminina Promo apostam em um time de profissionais seletos e em uma estrutura física de ponta para fornecer um conteúdo de qualidade e proporcionar sempre as melhores soluções para a sua empresa.</p>
				<p>
					O nome “Saminina” traz consigo características regionais, além de ser criativo, divertido e de fácil assimilação como toda boa propaganda. 
				</p>

			</div>
			<div class="tab-pane tab-pane-gallery" id="direcao">
				
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="img/equipe/andre01.png" name="#capty-1" height="375" width="250" alt="" class="capty hoverizr">
						<div id="capty-1" class="capty-sub">
							<h3>Nome do Membro</h3>
							Cargo
						</div>	
					</div>
					
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="img/equipe/daniele01.png" name="#capty-2" height="375" width="250" alt="" class="capty hoverizr">
						<div id="capty-2" class="capty-sub">
							<h3>Nome do Membro</h3>
							Cargo
						</div>	
					</div>
					
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="img/equipe/dayanne01.png" name="#capty-3" height="375" width="250" alt="" class="capty hoverizr">
						<div id="capty-3" class="capty-sub">
							<h3>Nome do Membro</h3>
							Cargo
						</div>	
					</div>			
				</div>
			</div>
			<div class="tab-pane" id="administracao">administração</div>
			<div class="tab-pane" id="atendimento">atendimento</div>
			<div class="tab-pane" id="criacao">criação</div>
			<div class="tab-pane" id="midia">midia</div>
		</div>

		<script>
		  $(function () {
		    $('#tabs a:first').tab('show');
		    $('.capty').capty({
				height: 70,
				opacity: .6
			});
			$('.hoverizr').hoverizr({
				speedIn: 'fast',
				speedOut: 'fast'
			});
		  })
		</script>
	</div>
</div>

<?php include "footer.php" ?>