<?php /* Template Name: Página dos módulos */ 

get_header(); ?>

<section>
	<?php if( get_field('modulo') == 'lira' ): ?>
	<div class="bg-banner-lira">
	<?php elseif ( get_field('modulo') == 'auditoria' ): ?>
	<div class="bg-banner-aud">
	<?php elseif ( get_field('modulo') == 'gaia' ): ?>
	<div class="bg-banner-gaia">
	<?php elseif ( get_field('modulo') == 'prsst' ): ?>
	<div class="bg-banner-prsst">
	<?php elseif ( get_field('modulo') == 'tnc' ): ?>
	<div class="bg-banner-tnc">
	<?php elseif ( get_field('modulo') == 'rl' ): ?>
	<div class="bg-banner-rl">
	<?php elseif ( get_field('modulo') == 'rn' ): ?>
	<div class="bg-banner-rn">
	<?php elseif ( get_field('modulo') == 'licencas' ): ?>
	<div class="bg-banner-licencas">
	<?php elseif ( get_field('modulo') == 'doc' ): ?>
	<div class="bg-banner-doc">
	<?php elseif ( get_field('modulo') == 'liracorp' ): ?>
	<div class="bg-banner-liracorp">
	<?php endif ?>
		<div class="container v-center">
			<div class="row">
				<?php					
				$cbanner = get_field('content_banner');
				if( $cbanner ): ?>
				<div class="col-md-8 align-vid">
					<?php echo $cbanner['video_youtube']; ?>
				</div>
				<div class="col-md-4 float-right">
					<div class="d-flex">
						<div class="w-img">
							<img src="<?php echo $cbanner['img_modulo']['url']; ?>" alt="<?php echo $cbanner['img_modulo']['alt']; ?>" />
						</div>
						<div class="w-text">
							
								<h1><?php echo $cbanner['titulo_banner']; ?></h1>
								<p><?php echo $cbanner['descricao_banner']; ?></p>
							<?php endif; ?>
						</div>
					</div>					
				</div>
			</div>
		</div>		
	</div>
</section>

<section>
	<div class="p-relative">
		<div class="container p-t-50">
			<p>
				<?php echo get_field('infos_modulo'); ?>
			</p>
			<div class="text-center p-t-50">
				<?php 

				$image = get_field('img_tela');

				if( !empty($image) ): ?>

					<img class="full-width" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
			</div>
		</div>
		<?php get_template_part('template-parts/content' , 'conversion-row'); ?>
	</div>
</section>

<?php get_template_part('template-parts/content' , 'modulos'); ?>

<?php get_footer(); ?>