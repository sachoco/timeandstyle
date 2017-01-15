<li class="grid-14">
	<div class="grid-5 prefix-4 grid-mobile-12 prefix-mobile-1 grid-tablet-8 ">
		<h3 class="margin-short category">
		<?php 
			$terms = get_the_terms( $post->ID, 'mention_category', array( 'fields' => 'names' ) );
			echo $terms[0]->name;
		?>
		</h3>
		<div class="margin-short date">
			<?php
				$update = strtotime(get_field("update"));
				if($update){
	        		$update = date_i18n("d F Y", $update);
					echo "Update: ".$update;
				}
			?>
		</div>
		<h3 class="uppercase bigger margin-short"><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
		<div class="readmore">
			<?php
				$link = get_field("link");
				if($link){
					echo "<a href='". $link ."' target='_blank'>"._x("READ","hxk")."</a>";
				}
			?>
		</div>
	</div>
	<div class="grid-4 suffix-1 prefix-0 grid-mobile-12 prefix-mobile-1 grid-tablet-8 prefix-tablet-4"><?php the_post_thumbnail("large"); ?></div>
</li>