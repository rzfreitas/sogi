<?php /* Template Name: Home */ 

get_header(); ?>

<section>
<?php $image = get_field('img_banner'); if( !empty($image) ): ?>
<div style="background: url(<?php echo $image['url']; ?>) no-repeat center center;   
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	min-height: 100vh;">
<?php endif; ?>
	<div class="container v-center-p text-banner">
		<div class="dp-flex">
			<div class="col-7 d-none d-sm-block"></div>
			<div class="col-md-5 col-12 p-t-c-100">
				<h1><?php the_field('titulo_banner'); ?></h1>
				<p><?php the_field('texto_banner'); ?></p>
				<div class="p-t-25 p-b-c">
					<a class="btn-def btn-yellow" data-toggle="modal" data-target="#SogiContato">Contrate o sogi</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section>	
	<div class="container p-t-25">
		<?php if( have_rows('clientes') ): ?>
		<ul class="clientes dp-flex flex-wrap">
		<?php while( have_rows('clientes') ): the_row(); 
			// vars
			$imagecliente = get_sub_field('logo_cliente'); ?>
			<li class="cliente flex-one">
				<img src="<?php echo $imagecliente['url']; ?>" alt="<?php echo $imagecliente['alt'] ?>" />
			</li>
		<?php endwhile; ?>
		</ul>
		<?php endif; ?>
		<div class="text-center i-load-more"></div>
	</div>
	<div class="container more-clientes p-t-50 p-b-50 d-none">
		<?php 
		$imagesMore = get_field('more_clientes');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)

		if( $imagesMore ): ?>
		    <ul class="clientes dp-flex flex-wrap">
		        <?php foreach( $imagesMore as $imagesMore ): ?>
		            <li class="cliente">
		            	<?php echo wp_get_attachment_image( $imagesMore['ID'], $size ); ?>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
		<script>
			$(".i-load-more").click(function(){
				$(".more-clientes").toggleClass('d-none');
				$(".i-load-more").toggleClass('swap-icon')
			});
		</script>
	</div>
</section>

<section>
<div class="bg-cinza">
	<div class="container p-t-50 p-b-50">
		<div class="row dp-flex">
			<div class="col-12 col-md-4 b-r-c text-center">
				<h2 class="v-center no-m title-blue">Facilidades</h2>
			</div>
			<div class="col-12 col-md-8 p-t-c">
				<ul class="facilidades dp-flex flex-wrap">
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/balance.png" alt="leis aplicáveis negócio">
						</div>
						<div class="w-80 p-l-10">
							<p>Identifica e interpreta leis aplicáveis ao negócio.</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/alertas.png" alt="Monitora alertas">
						</div>
						<div class="w-80 p-l-10">
							<p>Monitora e dá alertas para seu cumprimento.</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/guia.png" alt="guia Compliance">
						</div>
						<div class="w-80 p-l-10">
							<p>Cria um guia específico para Compliance em Sustentabilidade.</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/multas.png" alt="Reduz multas">
						</div>
						<div class="w-80 p-l-10">
							<p>Diminui riscos com multas e outras penalidades.</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/balance.png" alt="reduz custos auditorias">
						</div>
						<div class="w-80 p-l-10">
							<p>Reduz 90% dos custos com Auditorias anuais de Due Delligence Ambiental.</p>
						</div>
					</li>
					<li class="col-md-4 d-flex">
						<div class="w-20">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/leis.png" alt="banco dados leis">
						</div>
						<div class="w-80 p-l-10">
							<p>Banco de dados com + de 110 mil leis.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>

<section>
	<div class="dp-flex">
		<div class="w-40">
			<div class="box-blue">
				<div class="v-center text-center">
					<h2>Várias funcionalidades <br> em uma plataforma*</h2>
					<div class="text-right p-t-15">
						<a class="btn-def btn-yellow" data-toggle="modal" data-target="#SogiContato">Contrate o SOGI</a>
					</div>
				</div>				
			</div>
		</div>
		<div class="w-60">
			<div id="site-video">
	            <video poster="" playsinline="" autoplay="" muted="" loop="" controls>
	                <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI.mp4" type="video/mp4">
	            </video>
	        </div>
	        <div class="bg-marinho">
				<div class="container text-right p-t-15 p-b-15 p-t-n">
					<a class="f-w p-r-25" href="<?php echo get_template_directory_uri(); ?>/assets/audios/podcast-sogi.mp3" download><i class="fa fa-podcast"></i>  Baixar como podcast</a>
					<a class="f-w" href="<?php the_field('l_youtube'); ?>" target="_blank"><i class="fa fa-play"></i>  Ver vídeo completo</a>
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
									<li>Geração de relatórios em PDF para download, com posicionamento sobre auditorias, tratamento de não conformidade e de pendências.</li>
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
									<li>Fornecimento de estatísticas da conformidade legal para acompanhamento, apresentadas através de gráficos gerados pelo Módulo SOGI Indicadores.</li>
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
									<li>Apresentação de gráficos estatísticos de atendimento à conformidade legal e de auditoria e tratamento de não conformidade.</li>
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
									<li>Possibilidade de controle do acesso dos usuários e de visualização e impressão dos relatórios, além de definição de permissões para grupos de usuários.</li>
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
									<li>Disponibilização de auto-filtros em todo o SOGI, permitindo a realização de buscas personalizadas e refinadas.</li>
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

<section>
	<div class="bg-royal" id="diagonal-border-w">
		<div class="container p-t-50 p-b-50">
			<div class="row dp-flex">
				<div class="col-12 col-md-6">
					<div class="p-t-50 p-b-50 b-r-r v-center">
						<h2>Igual ao SOGI, <br> não tem! Veja <br> seus diferenciais:</h2>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="box-lira-dif d-flex">
						<div>
							<span>1</span>
						</div>
						<div>
							<p class="v-center">Versão corporativa para controle de várias unidades em apenas um lugar.</p>
						</div>
					</div>
					<div class="box-lira-dif d-flex">
						<div>
							<span>2</span>
						</div>
						<div>
							<p class="v-center">Foco em resultados e indicadores de Governança, Risco e Compliance Sustentável.</p>
						</div>
					</div>
					<div class="box-lira-dif d-flex">
						<div>
							<span>3</span>
						</div>
						<div>
							<p class="v-center">Gestão integrada de diversas áreas, como meio ambiente e saúde e segurança ocupacional.</p>
						</div>
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
	</script> 
</section>-->

<?php get_footer(); ?>