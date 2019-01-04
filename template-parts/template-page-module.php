<?php /* Template Name: Página dos módulos */ 

get_header(); ?>

<section>
<div class="p-relative">
	<?php $gif = get_field('gif_banner'); if( !empty($gif) ): ?>
	<div style="background: url(<?php echo $gif['url']; ?>) no-repeat center center fixed;   
		-webkit-background-size: 50%;
		-moz-background-size: 50%;
		-o-background-size: 50%;
		background-size: 50%;
		height: 96vh;
		background-color: #3c393f;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
		<?php endif; ?>
		<div class="container align-container-bot">
			<div class="row">
				<?php $cbanner = get_field('content_banner');
					if( $cbanner ): ?>
				<div class="col-md-6">
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
				</div> <!-- col-6 -->
				<div class="col-md-6 text-center p-relative">
					<a class="link-vid" href="<?php echo $cbanner['video_youtube']; ?>"><i class="fa fa-play"></i>  Ver vídeo completo</a>
				</div>
				<?php endif; ?>
			</div><!-- row -->
		</div>
	</div>
</div>
</section>

<section>
	<div class="p-relative">
		<div class="container p-t-50">
			<div class="row">
				<?php $content_m = get_field('infos_modulo');
				if( $content_m ): ?>
					<div class="col-md-6">
						<?php if( get_field('modulo') == 'lira' ): ?>
						<h2 class="t-lira">
						<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
						<h2 class="t-aud">
						<?php elseif ( get_field('modulo') == 'gaia' ): ?>
						<h2 class="t-gaia">
						<?php elseif ( get_field('modulo') == 'prsst' ): ?>
						<h2 class="t-prsst">
						<?php elseif ( get_field('modulo') == 'tnc' ): ?>
						<h2 class="t-tnc">
						<?php elseif ( get_field('modulo') == 'rl' ): ?>
						<h2 class="t-rl">
						<?php elseif ( get_field('modulo') == 'rn' ): ?>
						<h2 class="t-rn">
						<?php elseif ( get_field('modulo') == 'licencas' ): ?>
						<h2 class="t-licencas">
						<?php elseif ( get_field('modulo') == 'doc' ): ?>
						<h2 class="t-doc">
						<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
						<h2 class="t-liracorp">
						<?php endif ?>
							<?php echo $content_m['t_modulo']; ?>		
						</h2>
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
	<div class="container p-t-100 p-b-50">
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
				     	<div class="m-center"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>				     	
				     	<div><p class="v-center"><?php echo $content; ?></p></div>
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

<?php if( get_field('modulo') == 'lira' ){ ?>
	<?php get_template_part('template-parts/content' , 'app'); ?>
<?php } ?>

<?php if( get_field('modulo') == 'lira' ) {
	get_template_part('template-parts/content' , 'integracao-lira');
} else {
	get_template_part('template-parts/content' , 'integracao');
} ?>

<?php get_template_part('template-parts/content' , 'modulos'); ?>

<?php get_footer(); ?>