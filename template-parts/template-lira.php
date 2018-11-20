<?php /* Template Name: Lira */ 

get_header(); ?>

<section>
	<div class="bg-banner-lira">
		<div class="container v-center">
			<div class="row">
				<div class="col-md-8">
					
				</div>
				<div class="col-md-4">
					<div class="d-flex">
						<div class="w-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/home/lira.png" alt="lira">
						</div>
						<div class="w-text">
							<?php
					
							$textb = get_field('texto_do_banner');	

							if( $textb ): ?>			
								<h1><?php echo $textb['titulo_banner']; ?></h1>
								<p><?php echo $textb['descricao_banner']; ?></p>
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