<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section>
	<div class="wrapper container">
		<div class="section-title grid-8 prefix-4 suffix-2"><span><?php echo get_post_type( get_the_ID() ); ?></span></div>

	</div>
</section>

		<?php endwhile; ?>


	<?php else : ?>

		<article id="post-not-found" class="hentry cf">
			<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'satopin' ); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'satopin' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'satopin' ); ?></p>
			</footer>
		</article>

	<?php endif; ?>			


<?php get_footer(); ?>
