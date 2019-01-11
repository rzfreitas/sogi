<?php /* Template Name: Página dos módulos */ 

get_header(); ?>

<section>
<div class="bg-modulos p-t-100">
	<!-- <?php $gif = get_field('gif_banner');
	if( !empty($gif) ): ?>
	<div style="background: url(<?php echo $gif['url']; ?>) no-repeat center center fixed;   
		-webkit-background-size: 50%;
		-moz-background-size: 50%;
		-o-background-size: 50%;
		background-size: 50%;
		height: 96vh;
		background-color: #3c393f;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
		<?php else : ?>
		<div class="empty-banner">
		<?php endif; ?> -->

		<?php $cbanner = get_field('content_banner');
		if( $cbanner ): ?>
		<div class="container v-center">
			<div id="site-video-modulos">
	            <video poster="" playsinline="" autoplay="" muted="" loop="">	                
	            	<?php if( get_field('modulo') == 'lira' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-Lira.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-Auditoria.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'gaia' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-Gaia.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'prsst' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-P.R.S.S.O.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'tnc' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-TNC.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'rl' ): ?>
					
					<?php elseif ( get_field('modulo') == 'rn' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-Riscos-Negocio.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'licencas' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-Licencas.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'doc' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-Documentos.mp4" type="video/mp4">
					<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/SOGI-Administrativo.mp4" type="video/mp4">
					<?php endif ?>
	            </video>
	        </div>
	        <div class="bg-marinho text-right p-t-15 p-b-15">
				<div class="container">
					<a class="link-vid" href="<?php echo $cbanner['video_youtube']; ?>"><i class="fa fa-play"></i>  Ver vídeo completo</a>
				</div>
			</div>			
		</div>
	
		<?php if( get_field('modulo') == 'lira' ): ?>
		<div class="bg-lira box-content-mod">
		<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
		<div class="bg-aud box-content-mod">
		<?php elseif ( get_field('modulo') == 'gaia' ): ?>
		<div class="bg-gaia box-content-mod">
		<?php elseif ( get_field('modulo') == 'prsst' ): ?>
		<div class="bg-prsst box-content-mod">
		<?php elseif ( get_field('modulo') == 'tnc' ): ?>
		<div class="bg-tnc box-content-mod">
		<?php elseif ( get_field('modulo') == 'rl' ): ?>
		<div class="bg-rl box-content-mod">
		<?php elseif ( get_field('modulo') == 'rn' ): ?>
		<div class="bg-rn box-content-mod">
		<?php elseif ( get_field('modulo') == 'licencas' ): ?>
		<div class="bg-licencas box-content-mod">
		<?php elseif ( get_field('modulo') == 'doc' ): ?>
		<div class="bg-doc box-content-mod">
		<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
		<div class="bg-liracorp box-content-mod">
		<?php endif ?>		
			<div class="d-flex">							
				<div class="w-20">								
					<img class="v-center" src="<?php echo $cbanner['img_modulo']['url']; ?>" alt="<?php echo $cbanner['img_modulo']['alt']; ?>" />
				</div>
				<div class="w-80">							
					<h1><?php echo $cbanner['titulo_banner']; ?></h1>
					<p><?php echo $cbanner['descricao_banner']; ?></p>
					<a class="btn-def btn-yellow" onclick="scrollToElement('#conversionRow', -100)">Quero comprar</a>		
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
</section>

<section>
	<div class="p-relative">
		<div class="container p-t-100">
			<?php if( get_field('modulo') == 'lira' ): ?>
				<h2 class="t-lira p-l-30">
				<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
				<h2 class="t-aud p-l-30">
				<?php elseif ( get_field('modulo') == 'gaia' ): ?>
				<h2 class="t-gaia p-l-30">
				<?php elseif ( get_field('modulo') == 'prsst' ): ?>
				<h2 class="t-prsst p-l-30">
				<?php elseif ( get_field('modulo') == 'tnc' ): ?>
				<h2 class="t-tnc p-l-30">
				<?php elseif ( get_field('modulo') == 'rl' ): ?>
				<h2 class="t-rl p-l-30">
				<?php elseif ( get_field('modulo') == 'rn' ): ?>
				<h2 class="t-rn p-l-30">
				<?php elseif ( get_field('modulo') == 'licencas' ): ?>
				<h2 class="t-licencas p-l-30">
				<?php elseif ( get_field('modulo') == 'doc' ): ?>
				<h2 class="t-doc p-l-30">
				<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
				<h2 class="t-liracorp p-l-30">
				<?php endif ?>
					<?php echo $content_m['t_modulo']; ?>		
			</h2>
			<div class="row p-t-25">
				<?php $content_m = get_field('infos_modulo');
				if( $content_m ): ?>
					<div class="col-md-6">
						<p class="p-t-25"><?php echo $content_m['coluna_1']; ?></p>
					</div>
					<div class="col-md-6 p-t-70">
						<p><?php echo $content_m['coluna_2']; ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="container text-center">
			<?php $images = get_field('app_screens');
			if( $images ): ?>
			    <div class="app-slideshow img-floating">
			        <?php foreach( $images as $image ): ?>
			            <img src="<?php echo $image['url']; ?>" />
			        <?php endforeach; ?>
			    </div>
			<?php endif; ?>		
		</div>
		<?php get_template_part('template-parts/content' , 'conversion-row'); ?>
	</div>
</section>

<section>
	<div class="container p-t-25 p-b-50">
		<div class="dp-flex">
			<div class="col-12 col-md-3 b-r-w text-center">
				<?php if( get_field('modulo') == 'lira' ): ?>
				<h2 class="t-lira v-center">
				<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
				<h2 class="t-aud v-center">
				<?php elseif ( get_field('modulo') == 'gaia' ): ?>
				<h2 class="t-gaia v-center">
				<?php elseif ( get_field('modulo') == 'prsst' ): ?>
				<h2 class="t-prsst v-center">
				<?php elseif ( get_field('modulo') == 'tnc' ): ?>
				<h2 class="t-tnc v-center">
				<?php elseif ( get_field('modulo') == 'rl' ): ?>
				<h2 class="t-rl v-center">
				<?php elseif ( get_field('modulo') == 'rn' ): ?>
				<h2 class="t-rn v-center">
				<?php elseif ( get_field('modulo') == 'licencas' ): ?>
				<h2 class="t-licencas v-center">
				<?php elseif ( get_field('modulo') == 'doc' ): ?>
				<h2 class="t-doc">
				<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
				<h2 class="t-liracorp v-center">
				<?php endif ?>
					Vantagens
				</h2>
			</div>
			<div class="col-12 col-md-9">
				<?php if( have_rows('vantagens') ): ?>
				 <ul class="vantagens dp-flex flex-wrap">
				    <?php while ( have_rows('vantagens') ) : the_row();
				    	$image = get_sub_field('v_icone'); 
				    	$content = get_sub_field('v_text'); ?>
				     <li>
				     	<div class="m-center w-15"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>				     	
				     	<div class="w-85"><p><?php echo $content; ?></p></div>
				     </li>
				    <?php endwhile; ?>
				</ul>
				<?php else :
				    // no rows found
				endif;	?>
			</div>
		</div>
	</div>
</section>

<section>
	<div>
		<?php $imagepap = get_field('img_pap');
		if( !empty($imagepap) ): ?>
			<img class="w-100" src="<?php echo $imagepap['url']; ?>" alt="<?php echo $imagepap['alt']; ?>" />
		<?php endif; ?>
	</div>
</section>

<section>
	<div class="bg-royal" id="diagonal-border-w">
		<?php $diferenciais = get_field('c_diferenciais');
		if( $diferenciais ): ?>
		<div class="container p-t-50 p-b-50">
			<div class="row dp-flex">
				<div class="col-12 col-md-5 m-r-4p">
					<div class="p-t-50 p-b-50 b-r-r v-center">
						<h2><?php echo $diferenciais['t_dif']; ?></h2>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="box-lira-dif d-flex">
						<div>
							<span>1</span>
						</div>
						<div>
							<p class="v-center"><?php echo $diferenciais['bloco_1']; ?></p>
						</div>
					</div>
					<div class="box-lira-dif d-flex">
						<div>
							<span>2</span>
						</div>
						<div>
							<p class="v-center"><?php echo $diferenciais['bloco_2']; ?></p>
						</div>
					</div>
					<div class="box-lira-dif d-flex">
						<div>
							<span>3</span>
						</div>
						<div>
							<p class="v-center"><?php echo $diferenciais['bloco_3']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	</div>
</section>

<?php if( get_field('modulo') == 'lira' ){ ?>
	<?php get_template_part('template-parts/content' , 'app'); ?>
<?php } ?>

<!-- <?php if( get_field('modulo') == 'lira' ) {
	get_template_part('template-parts/content' , 'integracao-lira');
} else {
	get_template_part('template-parts/content' , 'integracao');
} ?> -->

<?php if( get_field('modulo') != 'liracorp' && get_field('modulo') != 'lira' ) {
	get_template_part('template-parts/content' , 'integracao');
} ?>

<?php get_template_part('template-parts/content' , 'modulos'); ?>

<?php get_footer(); ?>