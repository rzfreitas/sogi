<?php /* Template Name: Outsourcing */ 

get_header(); ?>

<?php get_template_part('template-parts/content' , 'tabs'); ?>

<section>
	<?php $image = get_field('img_outsrc');
	if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>
</section>

<?php get_footer(); ?>