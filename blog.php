<?php
/* Template Name: Market Insights */
?>
<?php get_header(); ?>

<section class="pb-5 inner-head bg-hero">
    <div class="container-xl text-center">
        <h2 class="text-white text-center uppercase pt-4 font-weight-400">
            Market Insights
        </h2>
    </div>
</section>
 
 <section class="padding-top padding-bottom">
        <div class="container-xl">
            <div class="row justify-content-lg-between">
                <?php 
                $args = array( 'post_type' => 'market_insights');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-lg-4 mb-4">
                    <div class="blog-image-thumb verflow-hidden">
                        <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', array("class" => "img_fit")); ?>
                    </a>
                    </div>
                    <span class="text-gradient-small fs-16 mt-4 d-block font-weight-600"><?php echo get_post_meta($post->ID,'label',true);?></span>
                <h4 class="mt-2 text-blue"><?php echo get_the_title(); ?></h4>
                <span class="fs-6 paragraph"><?php the_time('j F, Y') ?></span>
                    <div class="fs-19 mt-3 paragraph">
                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                    <a href="<?php the_permalink(); ?>">more</a>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>
            </div>
        </div>
 </section>
 <?php get_footer(); ?>