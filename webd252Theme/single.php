<?php get_header(); ?>

	<section>
	<div id="content" class="container">
			<aside id="sidebar">
				<?php get_sidebar(); ?>
			</aside>
	<?php while( have_posts() ): the_post(); ?>
			<article>
				<a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>
				<p><?php the_content(); ?></p>
				<p class="posted">Posted by <?php the_author(); ?> on <?php the_date(); ?></p>
			</article>
			<article class="comment">
				<?php comments_template(); ?>
			</article>
		</div>
<?php  endwhile; ?>
	</section>
<?php get_footer(); ?>
