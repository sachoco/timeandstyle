<?php get_header(); ?>

<section class="column animsition">
    <div class="page-content">
    <div class="inner">
        <div class="page-header"><h2>News</h2></div>
        <div class="page-body w700">
    <?php
        $args = array( 'post_type' => 'post', 'posts_per_page' => -1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $post; ?>
            <?php if (has_post_thumbnail( $loop->post->ID )): ?>
            <div class="image-wrapper">
            <?php echo get_the_post_thumbnail($loop->post->ID, 'large'); ?>
            </div>
            <?php endif; ?>

            <p><?php the_title(); ?></p>
            <?php the_content(); ?>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
<!--          <p>
Recruit<br><br>

Industry: Retail / Sales<br>
Category: Sales assistant<br>
· Sales of furniture and tableware, etc.<br>
· Store management assistant, event planning assistant, etc.<br>
· Inventory management, logistics operations, etc.<br>
Eligibility: Those interested in Japanese interior and furniture, Japanese culture, tradition, goods<br>
Language skills: Dutch ＋ English or Japanese<br>
Employment form: Negotiable<br>
Working hours: Negotiable<br>
Location of work: Amsterdam<br><br>

Please send CV to e-mail.<br><br>

Ryoichi Satake<br>
rsatake@timeandstyle.nl
        </p> -->

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
<div class="collapsed-button-container">
    <div id="back-to-top-page" class="collapsed-button back-to-top fixed" role="button">
        <div class="circle">
            <div class="icon">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="31.131px" height="17.097px" viewBox="0 0 31.131 17.097" enable-background="new 0 0 31.131 17.097" xml:space="preserve">
<polyline id="line-1" fill="none" stroke="#FFFFFF" stroke-width="1" stroke-miterlimit="10" points="30.581,16.369 15.715,1.503 0.848,16.369 
    "/>
</svg>

            </div>
            <div class="bg circular-anim"></div>  
        </div>
                                    
    </div>
</div>
<?php get_footer(); ?>
