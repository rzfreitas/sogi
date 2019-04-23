<section>
<div class="container p-b-100 p-t-100" id="noticias">
	<h2 class="t-noticias">Blog SOGI</h2>

	<?php $f_args = array(
	'post_type' => 'post',
	'showposts' => 1,
	'ignore_sticky_posts' => 1
	);
	$f_query = new WP_query ( $f_args );
	if ( $f_query->have_posts() ) { ?>

	<?php while ( $f_query->have_posts() ) : $f_query->the_post(); ?>
		<article class="first-post" id="post-<?php the_ID(); ?>">
			<div class="row">
				<div class="col-md-5 text-center">
					<?php if ( has_post_thumbnail() ) {
						    the_post_thumbnail();
						} else { ?>
						    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/404.png" alt="<?php the_title(); ?>" />
						<?php } ?>
				</div>
				
				<div class="col-md-7">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					<div class="date-post p-b-15"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div>
					<p><?php the_excerpt(); ?></p>
					<div class="p-t-15">
						<a class="cont-lendo" href="<?php the_permalink(); ?>">Continuar lendo...</a>
					</div>
				</div>
			</div>
  		</article>  
  	<?php endwhile; ?>  
  	<?php wp_reset_postdata(); ?>  
	<?php } ?>

	<div class="p-t-25">
		<?php $args = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
		'offset' => 1
		);
		$query = new WP_query ( $args );
		if ( $query->have_posts() ) { ?>

		<div class="row">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col text-center old-posts">
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'book' ); ?>>
						<?php if ( has_post_thumbnail() ) {
						    the_post_thumbnail();
						} else { ?>
						    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/404.png" alt="<?php the_title(); ?>" />
						<?php } ?>
						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<!-- <div class="date-post"><i class="fa fa-clock-o"></i><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div> -->
			  		</article>
			  	</div>
		  	<?php endwhile; ?>
		  	<?php wp_reset_postdata(); ?>  
			<?php } ?>
		</div>
	</div>
	<div class="p-t-50 text-center">
		<a class="btn-def btn-white" href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Leia mais...</a>
	</div>
</div>
</section>