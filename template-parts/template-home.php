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

<!-- <section>
	<div class="bg-blue p-t-75 p-b-75" id="diagonal-border">
		<div class="container text-center">
			<h2 class="f-normal">Soluções para gestão integrada com foco em compliance <br> e prevenção riscos. Encontre a ideal para sua empresa.</h2>
			<ul class="inline-list p-t-25">
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>lira"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lira.png" alt="lira"></a></li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>\auditoria"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/auditoria.png" alt="auditoria"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gaia"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/gaia.png" alt="gaia"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>prsst"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/prsst.png" alt="prsst"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>tnc"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/tnc.png" alt="tnc"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>risco-legal"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/risco-legal.png" alt="risco legal"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>risco-do-negocio"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/risco-negocio.png" alt="gestão riscos"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>licencas"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/licencas.png" alt="licenças"></a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>administrativo"><img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/administativo.png" alt="administativo"></a></li>
			</ul>
		</div>
	</div>
</section> -->

<section>
	<div class="bg-royal p-t-100 p-b-75" id="diagonal-border">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2>Várias funcionalidades em uma plataforma*</h2>
					<div class="p-t-50">
						<a class="btn-def btn-yellow v-center">Contrate o sogi</a>
					</div>
				</div>
				<div class="col-md-8">
					
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-blue p-t-100 p-b-75">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
				</div>
				<div class="col-md-4">
					<h2>Assista um case de sucesso*</h2>
					<div class="p-t-50">
						<a class="btn-def btn-yellow v-center">Torne-se um case de sucesso também!</a>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>

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
	</script> -->
</section>

<?php get_footer(); ?>