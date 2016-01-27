<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
	<ul>
		<?
	// WP_Query arguments
	$args = array (
		'post_type'              => array( 'bm_testimonials' ),
		'posts_per_page'         => '10000',
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts()): while ( $query->have_posts()):$query->the_post();?>
		<li>
			&quot;<?the_title();?>&quot;
			<em><? the_field("name");?></em>
		</li>
	<? endwhile; endif;
		

	// Restore original Post Data
	wp_reset_postdata();
	?>
	</ul>






</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>