<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>
<?php get_header(); ?>


<section class="padding-top padding-bottom">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <span class="text-gradient-small fs-16 mt-4 d-block font-weight-600"><?php echo get_post_meta($post->ID,'label',true);?></span>
                <h4 class="h2 font-weight-600 mt-2 text-body"><?php echo get_the_title(); ?></h4>
                <span class="fs-6 paragraph"><?php the_time('j F, Y') ?></span>
            </div>
            <div class="row mx-0 px-0">
                <div class="col-lg-12">
                    <div class="blog-image verflow-hidden">
                        <?php the_post_thumbnail('full', array("class" => "img_fit")); ?>
                    </div>
                    <div class="fs-5 mt-3 blog-desc paragraph">
                        <?php echo get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>