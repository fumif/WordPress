<?php get_header(); ?>
<?php while( have_posts() ): the_post();?>
	<section>
		<div class="container">
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside>
			<article>
				<h2><?php the_title(); ?></h2> 
				<?php the_content(); ?>
				<div class="posted">
					Posted by <?php the_author(); ?> on <?php the_date(); ?>
				</div>
			</article>
		</div>

	<?php  endwhile; ?>
</section>
<?php get_footer(); ?>
