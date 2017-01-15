<?php get_header(); ?>
<section id="welcome">
	<div class="wrap">
     <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" class="logo">
    </a>
    <?php
        if( function_exists('icl_get_languages') ):
            $languages = icl_get_languages('skip_missing=0');
            $link = '<ul class="lang-selector">';
            foreach($languages as $language) {
                if($language['language_code']=="ja"){
                    $font = 'tk-heisei-kaku-gothic-std';
                }else{
                    $font = 'tk-brandon-grotesque';
                }
                $link .= '<li><a class="' . $font . '" href="' . $language['url'] . '">';

                if($language['language_code']=="ja"){
                	$link .= '日本語';
                } else if($language['language_code']=="nl") {
                	$link .= 'Nederlands';
                } else {
                	$link .= 'English';
                }
                

                $link .='</a>';
            }
            $link .= '</ul>';
         
            echo $link;
        endif;
    ?>
    </div>
</section>
<section id="intro">
	<?php 
		echo do_shortcode('[rev_slider alias="home-slides"]');
	?>
	<div class="intro-text hide-mobile-1">
		<p>
<?php
	$icl_object_id = icl_object_id(995, 'page', true);
	$post = get_post($icl_object_id);
	echo $post->post_content;
?>
		</p>
		<span class="close">
			<svg  x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20">
				<g>
					<defs>
						<rect id="SVGID_1_" width="20" height="20"/>
					</defs>
					<clipPath id="SVGID_2_">
						<use xlink:href="#SVGID_1_"  overflow="visible"/>
					</clipPath>
					<circle clip-path="url(#SVGID_2_)" fill="none" stroke="#FF6600" stroke-width="2" cx="10" cy="10" r="9"/>
				</g>
				<line fill="none" stroke="#FF6600" stroke-width="2" x1="5.859" y1="14.141" x2="14.142" y2="5.858"/>
				<line fill="none" stroke="#FF6600" stroke-width="2" x1="14.141" y1="14.142" x2="5.858" y2="5.859"/>
			</svg>
		</span>
	</div>
</section>
<section id="about">
	<div class="wrapper container">
		<div class="section-title grid-8 prefix-4 suffix-2 grid-mobile-12 prefix-mobile-1 suffix-mobile-1" ><span>About</span></div>
		<div class="grid-8 prefix-4 suffix-2 grid-small-9 grid-mobile-12 prefix-mobile-1 suffix-mobile-1">
<?php
	$icl_object_id = icl_object_id(13, 'page', true);
	$post = get_post($icl_object_id);
	echo apply_filters('the_content', $post->post_content);
?>
		</div>
	</div>
</section>
<section id="projects">
	<div class="wrapper container">
		<div class="section-title grid-9 prefix-4 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1"><span>Highlight<!-- Projects --></span></div>
		<div class="grid-9 prefix-4 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1 margin-bottom">
<?php if(ICL_LANGUAGE_CODE=="ja"): ?>
「オランダ＆九州」プログラムは様々な文化協力プロジェクトから成り立っています。そのうちのいくつかをご紹介します：
<?php elseif(ICL_LANGUAGE_CODE=="en"): ?>
The programme Holland Kyushu consists of various forms of cultural cooperation. We highlight a number of them below:
<?php else: ?>
Het programma Holland Kyushu bestaat uit uiteenlopende culturele samenwerkingsprojecten. Hieronder lichten we enkele projecten uit:
<?php endif; ?>
			
		</div>
		
		<ul class="grid-14 parent">

<?php
    $args = array(
      'post_type' => 'projects',
      'post_status' => 'publish',
      // 'post_parent' => 65,
      'orderby' => 'menu_order',
      'order'   => 'DESC',
      'posts_per_page' => -1
    );
    $the_query = new WP_Query( $args );
    // $col_count = 1;
    
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $dateformatstring = "D d F, Y";
?>

			<li>
				<div class="grid-2 prefix-4 grid-mobile-12 prefix-mobile-1 grid-tablet-8"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
				<div class="grid-7 suffix-1 prefix-0 grid-mobile-12 prefix-mobile-1 grid-tablet-8 prefix-tablet-4">
					<h3 class="uppercase bigger margin-short"><?php the_title(); ?></h3>
					<h4 class="margin-short"><?php the_field("oneliner"); ?></h4>
					<?php the_excerpt(); ?>
					<div class="readmore"><a href="<?php the_permalink(); ?>"><?php _e("READ MORE","hxk"); ?></a></div>
				</div>
			</li>

<?php
		endwhile;
	endif;
    wp_reset_postdata();

?>

		</ul>
		<div class="section-title grid-9 prefix-4 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1"><span>More Projects<!-- Tips --></span></div>
		<div class="grid-9 prefix-4 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1 margin-bottom">
<?php if(ICL_LANGUAGE_CODE=="ja"): ?>
…この他にも様々なプロジェクトをご紹介します：
<?php elseif(ICL_LANGUAGE_CODE=="en"): ?>
…and there are many more projects to mention:
<?php else: ?>
…en natuurlijk zijn er meer projecten die de komende tijd de aandacht verdienen:
<?php endif; ?>			
		</div>
		<ul class="grid-14 parent tips-list">
<?php
    $args = array(
      'post_type' => 'tips',
      'post_status' => 'publish',
      // 'post_parent' => 65,
      'orderby' => 'menu_order',
      'order'   => 'DESC',
      'posts_per_page' => -1
    );
    $the_query = new WP_Query( $args );
    // $col_count = 1;
    
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
        $dateformatstring = "D d F, Y";
?>
			<li>
		<div class="grid-9 prefix-4 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1">
				<div class="table">
					<div class="table-cell grid-2 prefix-4 grid-mobile-14 prefix-mobile-0 parent grid-tablet-14 prefix-tablet-0">
						<div class="table">
							<div class="table-cell">
								<div class="table">
								<div class="table-row"><div class="table-cell">
									<?php the_post_thumbnail("medium"); ?>
								</div></div>
								<div class="table-row"><div class="table-cell">
									<p>
									<div class="location"><?php the_field("location"); ?></div>
									</p>
								</div></div>
								</div>
							</div>			
						</div>
					</div>
					<div class="table-cell grid-7 suffix-1 prefix-0 grid-mobile-14 prefix-mobile-0 parent grid-tablet-14 prefix-tablet-0">
						<h3 class="uppercase"><?php the_title(); ?></h3>
						<p>
							<?php the_content(); ?>
						</p>
						<div class="clear"></div>
					</div>
				</div>
		</div>
				<div class="grid-7 prefix-6 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1 grid-tablet-8 prefix-tablet-4">
					<div class="link">
						<?php the_field("links"); ?>
					</div>
				</div>

<!-- 				<div class="grid-4 prefix-4 grid-small-10 grid-tablet-10 grid-mobile-12 prefix-mobile-1"> -->
<!--
				<div class="grid-2 prefix-4 grid-mobile-12 prefix-mobile-1">
					<?php the_post_thumbnail(); ?>
					<div class="location"><?php the_field("location"); ?></div>

				</div>
				<div class="grid-7 suffix-1 prefix-0 grid-mobile-12 prefix-mobile-1">
-->
<!-- 				<div class="grid-5 suffix-1 prefix-0 grid-small-9 prefix-small-4 grid-tablet-9 prefix-tablet-4 grid-mobile-12 prefix-mobile-1"> -->
<!--
					<h3 class="uppercase"><?php the_title(); ?></h3>
					<p>
						<?php the_content(); ?>
					</p>
					<div class="link">
						<?php the_field("links"); ?>
					</div>
				</div>
-->
			</li>

<?php
		endwhile;
	endif;
    wp_reset_postdata();

?>
		</ul>
<!--
		<div class="grid-9 prefix-4 suffix-1 grid-small-10 grid-mobile-12 prefix-mobile-1 more-tips">
			<img src="<?php echo get_template_directory_uri(); ?>/images/more.svg" alt=""><span>more projects tips</span>
		</div>
-->
	</div>
</section>
<section id="contact">
	<div class="wrapper container">
		<div class="section-title grid-9 prefix-4 grid-tablet-9 grid-mobile-12 prefix-mobile-1 suffix-mobile-1"><span>Contact</span></div>
		<div class="grid-4 prefix-4 grid-mobile-12 prefix-mobile-1">
			<strong>Melchior Bussink</strong><br>
			DutchCulture<br>
			+31 (0)20 6164225<br>
			<a href="mailto:M.bussink@dutchculture.nl"><img class="mail" src="<?php echo get_template_directory_uri(); ?>/images/mail-white.svg"></a>
			<div class="logo"><a href="http://dutchculture.nl" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/dutchculture-white.svg"></a></div>
		</div>
		<div class="tablet-margin-top grid-5 suffix-1 grid-tablet-9 prefix-tablet-4 grid-mobile-12 prefix-mobile-1">
			<strong>Bas Valckx</strong><br>
			Netherlands Embassy Tokyo, Japan<br>
			+81 (0)3 5776 5440<br>
			<a href="mailto:Bas.valckx@minbuza.nl"><img class="mail" src="<?php echo get_template_directory_uri(); ?>/images/mail-white.svg"></a>	
			<div class="logo embassy"><a href="http://japan.nlambassade.org" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/dutchembassy-white.svg"></a></div>		
		</div>		
	</div>
</section>
<section id="partners">
	<div class="wrapper container">
		<div class="section-title grid-9 prefix-4 grid-tablet-9 grid-mobile-12 prefix-mobile-1 suffix-mobile-1"><span>Partners</span></div>
		<div class="grid-9 prefix-4 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1 margin-bottom">
<?php if(ICL_LANGUAGE_CODE=="ja"): ?>
「オランダ＆九州」プログラムには、次の通り、多くのパートナーが参加しています：
<?php elseif(ICL_LANGUAGE_CODE=="en"): ?>
Many organisations contribute to the Holland Kyushu programme, among others:
<?php else: ?>
Bij het programma van Holland Kyushu zijn vele partners betrokken:, onder andere:
<?php endif; ?>			
		</div>
		<div class="grid-9 prefix-4 suffix-1 grid-mobile-12 prefix-mobile-1 suffix-mobile-1">
<?php
	$icl_object_id = icl_object_id(200, 'page', true);
	$post = get_post($icl_object_id);
	echo apply_filters('the_content', $post->post_content);
?>			
		</div>
		<div class="grid-9 prefix-4 grid-mobile-12 prefix-mobile-1 copyright ">
			All rights reserved. ©DutchCulture ©Netherlands Embassy Tokyo 2015 <!-- Site designed by CCC www.ccc.com -->
		</div>		
	</div>
</section>
<?php get_footer(); ?>
