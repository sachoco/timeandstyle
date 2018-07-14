<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="column animsition">
    <div class="page-content">
    <div class="inner">
        <div class="page-header"><h2><?php the_title(); ?></h2></div>
        <div class="page-body">

            <?php the_content(); ?>

        </div>
    </div>
    </div>
</div>
<div class="clear"></div>
<ul>
    <li class="footer">
        <footer class="footer">
            <?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>
             &COPY; Copyright PRESTIGE JAPAN INC. ALL rights reserved.
        </footer>
    </li>    
</ul>

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
