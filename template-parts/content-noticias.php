<section>
<div class="container p-b-100 p-t-100" id="noticias">
	<h2 class="t-noticias">Blog SOGI</h2>

	<?php $args = array(
	'post_type' => 'post',
	'posts_per_page' => 1
	);
	$query = new WP_query ( $args );
	if ( $query->have_posts() ) { ?>

	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<article class="first-post"" id="post-<?php the_ID(); ?>" <?php post_class( 'book' ); ?>>		<div class="row">
				<div class="col-md-5 text-center">			
					<?php if ( has_post_thumbnail() ) { ?>				
						<a href="<?php the_permalink(); ?>">				
							<?php the_post_thumbnail();	?>			
						</a>				
					<?php }?>				
				</div>
				
				<div class="col-md-7">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					<div class="date-post p-b-25"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div>
					<p><?php the_excerpt(); ?></p>
				</div>
			</div>
  		</article>  
  	<?php endwhile; ?>  
  	<?php wp_reset_postdata(); ?>  
	<?php } ?>

	<div class="m-t-50">
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
						<?php if ( has_post_thumbnail() ) { ?>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail();	?>
							</a>
						<?php }?>
						
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
		<a class="btn-def btn-white" href="">Leia mais...</a>
	</div>
</div>
</section>