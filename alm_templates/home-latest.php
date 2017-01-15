<li class="grid-14">
	<div class="grid-2 prefix-4 grid-mobile-12 prefix-mobile-1 grid-tablet-8"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("thumbnail-crop"); ?></a></div>
	<div class="grid-7 suffix-1 prefix-0 grid-mobile-12 prefix-mobile-1 grid-tablet-8 prefix-tablet-4">
		<h3 class="uppercase bigger margin-short"><?php the_title(); ?></h3>
		<h4 class="margin-short"><?php the_field("oneliner"); ?></h4>
		<?php the_excerpt(); ?>
		<div class="readmore"><a href="<?php the_permalink(); ?>"><?php _e("READ MORE","hxk"); ?></a></div>
	</div>
</li>