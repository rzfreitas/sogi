<?php /*Template Name: Blog */ ?>

<?php get_header(); ?>

<section>
<div class="container m-t-145 text-center">
	<?php
	$imageBB = get_field('img_banner');
	if( !empty($imageBB) ): ?>
		<a href="<?php the_field('link_banner'); ?>" target="_blank"><img src="<?php echo $imageBB['url']; ?>" alt="<?php echo $imageBB['alt']; ?>" /></a>
	<?php endif; ?>
</div>
</section>

<div class="container p-t-70 title-blog text-center">
	<h1>BLOG SOGI</h1>
</div>

<div class="container m-t-50">
	<div class="row">
		<div class="col-md-8">
			<?php 
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$custom_args = array(
				'post_type' => 'post',
				'posts_per_page' => 18,
				'paged' => $paged
			);
			$custom_query = new WP_Query( $custom_args ); ?>

			<?php if ( $custom_query->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
				<article class="row blog-box">
					<div class="col-3 b-r-blue text-center">
						<span class="color-rand"><?php the_terms( $post->ID, 'grupos' ); ?></span>

						<?php if ( has_post_thumbnail() ) { ?>
						    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('', array( 'class' => 'img-responsive img-circle' , 'alt' => get_the_title(), 'title' => get_the_title() ) ); ?></a>
						<?php } else { ?>
						    <img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/404.png" alt="<?php the_title(); ?>" />
						<?php } ?>

					</div>
					<div class="col-9">
						<div class="titulo-post">
							<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
							<small><?php the_time('j \d\e F \d\e Y') ?></small>
						</div>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink();?>"><div class="text-left">Continuar lendo</div></a>
					</div>
				</article>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->
			<div class="p-t-25 p-b-50">
				<?php custom_pagination($custom_query->max_num_pages,"",$paged); ?>
			</div>

			<?php wp_reset_postdata(); ?>

			<?php else:  ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>	
		</div>

		<div class="col-md-4 sidebar-blog">
			<?php get_template_part('search-form'); ?>

			<div class="mais-lidas p-t-25">
				<h2 class="text-center">Mais Lidos</h2>
				<div class="p-t-20">
					<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5'); ?>
					<ol>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</li>
						<?php endwhile; endif; ?>
					</ol>
					<?php wp_reset_query(); ?>
				</div>
			</div>

			<div class="sidebar-item">
				<a class="twitter-timeline" data-height="400" href="https://twitter.com/VerdeGhaia">Tweets by VerdeGhaia</a> 	<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>

			<div class="fb-page sidebar-item"
				data-href="https://www.facebook.com/verdeghaia"
				data-width="380"
				data-hide-cover="false"
				data-show-facepile="true">
			</div>

			<div class="sidebar-item">
				<iframe width="370" height="250" src="https://www.youtube.com/embed?max-results=1&controls=0&showinfo=1&rel=0&modestbranding=0&listType=user_uploads&list=canalverdegaia" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				<script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channel="canalverdegaia" data-layout="full" data-count="default"></div>
			</div>

			<div class="sidebar-item p-t-50 p-b-50">
				<!-- InstaWidget -->
				<a href="https://instawidget.net/v/user/verdeghaia" id="link-08d41fcc5583ae889f2dfc6a177e8d5d5941ea150b3901e8b8e7f1b1b0bac0f9">@verdeghaia</a>
				<script src="https://instawidget.net/js/instawidget.js?u=08d41fcc5583ae889f2dfc6a177e8d5d5941ea150b3901e8b8e7f1b1b0bac0f9&width=300px"></script>
			</div>

		</div>
	</div> <!-- row -->
</div> <!-- container -->

<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

<?php get_footer(); ?>