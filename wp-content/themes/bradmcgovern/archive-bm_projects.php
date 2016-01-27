<?php get_header(); ?>
<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div>
			<img src="<?=get_field('thumbnail')['sizes']['medium'];?>">
			<img src="<?=get_field('large_img')['sizes']['medium'];?>">
			 <? the_field('url_project');?>, <? the_field('coworkers');?>
		</div>
		

	<?php endwhile; endif; ?>
	<br>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>