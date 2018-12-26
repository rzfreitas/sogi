<?php /* Template Name: Home */ 

get_header(); ?>

<section>
<?php $image = get_field('img_banner'); if( !empty($image) ): ?>
<div style="background: url(<?php echo $image['url']; ?>) no-repeat center center fixed;   
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	height: calc(100vh);">
<?php endif; ?>
	<div class="container v-center text-banner">
		<div class="d-flex">
			<div class="col-7 d-none d-sm-block"></div>
			<div class="col-md-5 col-12">
				<h1><?php the_field('titulo_banner'); ?></h1>
				<p><?php the_field('texto_banner'); ?></p>
				<div class="p-t-25">
					<a class="btn-def btn-yellow">Contrate o sogi</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section>
	<div class="bg-cinza">
		<div class="container">
			<?php if( have_rows('clientes') ): ?>
			<ul class="clientes d-flex">
			<?php while( have_rows('clientes') ): the_row(); 
				// vars
				$imagecliente = get_sub_field('logo_cliente');
				?>

				<li class="cliente">
					<img src="<?php echo $imagecliente['url']; ?>" alt="<?php echo $imagecliente['alt'] ?>" />
				</li>
			<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50">
		<div class="row d-flex">
			<div class="col-4 b-r-w text-center">
				<h2 class="v-center no-m title-blue">Facilidades</h2>
			</div>
			<div class="col-8">
				<ul class="facilidades d-flex flex-wrap">
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/balance.png" alt="leis aplicáveis negócio">
						</div>
						<div class="w-80 p-l-10">
							<p>Identifica e interpreta leis aplicáveis ao seu negócio.</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/alertas.png" alt="Monitora alertas">
						</div>
						<div class="w-80 p-l-10">
							<p>Monitora e dá alertas para seu cumprimento</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/guia.png" alt="guia Compliance">
						</div>
						<div class="w-80 p-l-10">
							<p>Cria um guia específico para Compliance em sustentabilidade</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/multas.png" alt="Reduz multas">
						</div>
						<div class="w-80 p-l-10">
							<p>Reduz riscos com multas</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/balance.png" alt="reduz custos auditorias">
						</div>
						<div class="w-80 p-l-10">
							<p>Reduz 90% dos custos com Auditorias anuais de Due Delligence Ambiental</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/leis.png" alt="banco dados leis">
						</div>
						<div class="w-80 p-l-10">
							<p>Banco de dados com + de 110 mil leis</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-marinho p-t-50 p-b-50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-4 p-relative">
					<div class="box-blue">
						<h2>Várias funcionalidades <br> em uma plataforma*</h2>
						<div class="text-right p-t-15">
							<a class="btn-def btn-yellow" href="">Contrate o SOGI</a>
						</div>
					</div>
				</div>
				<div class="col-8">
					
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-white p-t-100 p-b-100">
		<div class="container">
			<div class="row p-b-50 vantagens-home">
				<div class="col-md-4">
					<table>
						<tr>
							<td>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/analytics.png" alt="monitoramento">
							</td>
							<td>
								<h3>Gráficos</h3>
								<ul>
									<li>Gráficos de tratamento de não conformidade, auditoria de conformidade legal, estatística de atendimento à conformidade legal</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4">
					<table>
						<tr>
							<td>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/relatorios.png" alt="relatorios">
							</td>
							<td>
								<h3>Relatórios</h3>
								<ul>
									<li>Geração de relatórios em PDF com posicionamento sobre auditorias, tratamento de não conformidade e de pendência</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4">
					<table>
						<tr>
							<td>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/indicadores.png" alt="indicadores">
							</td>
							<td>
								<h3>Indicadores</h3>
								<ul>
									<li>Acompanhe as estatísticas da sua conformidade legal através de gráficos gerados automaticamente pelo módulo soGi Indicadores</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row vantagens-home d-flex">
				<div class="col-md-4 d-flex">
					<table>
						<tr>
							<td>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/graficos.png" alt="monitoramento">
							</td>
							<td>
								<h3>Apresentações</h3>
								<ul>
									<li>Gráficos de tratamento de não conformidade, auditoria de conformidade legal, estatística de atendimento à conformidade legal </li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4">
					<table>
						<tr>
							<td>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/seguranca.png" alt="segurança">
							</td>
							<td>
								<h3>Segurança</h3>
								<ul>
									<li>Controle de acesso dos usuários, controle de visualização e impressão dos relatórios, permissões dos grupos de usuário</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4">
					<table>
						<tr>
							<td>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/filtros.png" alt="Filtros">
							</td>
							<td>
								<h3>Filtros</h3>
								<ul>
									<li>Disponibilização de auto-filtros em todo o soGi, facilitando e tornando sua busca ainda mais personalizada</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div> <!-- diagonal -->
</section>

<?php get_template_part('template-parts/content' , 'tabs'); ?>

<?php get_template_part('template-parts/content' , 'app'); ?>

<!-- <section>	
	<div class="container p-b-50">
		<?php if( have_rows('depoimentos') ): ?>
		<ul class="depoimentos b-top">
		<?php while( have_rows('depoimentos') ): the_row(); 
			// vars
			$img_cliente = get_sub_field('img_cliente');
			?>

			<li class="row">
				<div class="d-flex box-depoimento">
					<div class="col-xs-12 col-sm-12 col-md-4 text-center">
						<img src="<?php echo $img_cliente['url']; ?>" alt="<?php echo $img_cliente['alt'] ?>" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8">
						<p class="v-center text-depoimento"><?php the_sub_field('depoimento'); ?></p>
					</div>
				</div>		
			</li>
		<?php endwhile; ?>
		</ul>
		<?php endif; ?>
	</div> -->
	<!-- <script>
	$(document).ready(function(){
	  $('.depoimentos').slick({
	   	autoplay: true,
	    infinite: true,
	    speed: 300,
	  	slidesToShow: 1,
	  	dots: true
	  });
	});
	</script> 
</section>-->

<?php get_footer(); ?>