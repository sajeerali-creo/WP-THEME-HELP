<?php
/* Template Name: Marketing Insights */
?>
<?php get_header(); ?>

<section class="pb-5 inner-head bg-hero">
    <div class="container-xl text-center">
        <h2 class="text-white text-center font-weight-600 h2 pt-4">
            Marketing insights
        </h2>
    </div>
</section>

<section class="padding-bottom padding-top">
    <div class="container-xl">
        <div class="row">
        <?php 
  $args = array( 'post_type' => 'market_insights');
  $the_query = new WP_Query( $args ); 
?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-lg-4">
                <a href="<?php the_permalink(); ?>" class="d-flex mb-3">
                    <div class="article-image">
                        <?php the_post_thumbnail('full',array("class"=>"img_fit")); ?>
                    </div>
                </a>
                <h2 class="fs-4 font-weight-600 text-body">
                    <?php echo get_the_title(); ?>
                </h2>
                <span class="fs-16 paragraph d-block mb-3">
                    <?php the_time('j F, Y') ?>
                </span>
                <p class="paragraph">
                    <?php echo wp_trim_words(get_the_content(), 20); ?>
                    <a href="<?php the_permalink(); ?>" class="text-body opacity-50">more</a>
                </p>
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