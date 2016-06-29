<?php get_header(); ?>

<section>

	<div id="content" class="container">
		<aside id="sidebar">
			<?php get_sidebar(); ?>
		</aside>
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<article>
			<a href="<?php the_permalink(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
			<p><?php the_excerpt(); ?></p>
			<p class="posted">Posted by <?php the_author(); ?> on <?php the_date(); ?></p>
		</article>
		<?php 
		endwhile;
		endif;
		?>
	</div>	
</section>



<?php get_footer(); ?>

