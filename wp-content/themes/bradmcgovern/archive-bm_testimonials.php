<?php get_header(); ?>
<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div>
			<img src="<?=get_field('face')['sizes']['medium'];?>">
			<blockquote>"<? the_field('quote');?>"</blockquote>
			- <? the_field('name');?>, <? the_field('job');?>
		</div>
		

	<?php endwhile; endif; ?>
	<br>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>