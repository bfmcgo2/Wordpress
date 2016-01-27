<?php get_header(); ?>

<h1>Home: Most recent posts</h1>

<section id="content" role="main">
<?php if ( have_posts() ) :
	while ( have_posts() ) :
	the_post(); ?>

		<h1><? the_title(); ?></h1>
		<? the_excerpt(); ?>
		<a href="<? the_permalink(); ?>">View Post</a>
		<br>

	<?php endwhile;
	 endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>