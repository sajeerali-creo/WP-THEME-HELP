<?php
/* Template Name: home */
?>
<?php get_header(); ?>

<?php 
    $args = array( 'post_type' => 'home_banner', 'posts_per_page' => 1);
    $the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $image = get_field('banner_image');?>
<section class="main-banner" style="background-image:url(<?php echo $image;?>);">
    <div class="container py-5 d-flex flex-column align-items-center justify-content-center align-items-lg-baseline">
        <div class="strip-head mb-3 font-weight-600" data-aos="fade-up">
            <div class="uppercase fs-6"><?php echo get_post_meta($post->ID,'small_title',true);?></div>
        </div>
        <h1 class="mb-3" data-aos="fade-up">
        <?php echo get_post_meta($post->ID,'heading_1',true);?>
        </h1>
        <h1 class="mb-3" data-aos="fade-up">
        <?php echo get_post_meta($post->ID,'heading_2',true);?>
        </h1>
        <h1 class="mb-3" data-aos="fade-up">
        <?php echo get_post_meta($post->ID,'heading_3',true);?>
        </h1>
        <p class="mb-4 fs-5 w-100 w-lg-60" data-aos="fade-up"><?php echo get_post_meta($post->ID,'paragraph',true);?>
        </p>
        <a href="/contact" class="btn-primary" data-aos="fade-up" data-aos-duration="1000">
        <?php echo get_post_meta($post->ID,'button_label',true);?>
        </a>
    </div>
</section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else:  ?>
    <p class="d-flex text-center w-100">
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    </p>
<?php endif; ?>


<section id="about-us" class="stripe-banner d-flex justify-content-lg-around align-items-center scroll-h gap-3">
    <div class="d-flex align-items-center gap-2 w-100 text-center justify-content-center px-4 px-lg-0">
        <div><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M23.8334 7.31254H20.812C20.1609 7.31254 19.8352 7.31254 19.5282 7.21957C19.2212 7.12661 18.9502 6.94599 18.4083 6.58476C17.5956 6.04291 16.6684 5.42478 16.2078 5.28532C15.7472 5.14587 15.2588 5.14587 14.2819 5.14587C12.9535 5.14587 12.0973 5.14587 11.5 5.39326C10.9028 5.64065 10.4331 6.11033 9.49378 7.04968L8.66711 7.87635C8.45542 8.08805 8.34956 8.1939 8.28422 8.2984C8.04198 8.68578 8.06883 9.18351 8.35132 9.54259C8.42753 9.63947 8.54415 9.73331 8.77738 9.92101C9.63948 10.6148 10.8823 10.5456 11.663 9.76025L13 8.41522H14.0834L20.5834 14.9539C21.1817 15.5558 21.1817 16.5316 20.5834 17.1335C19.985 17.7354 19.015 17.7354 18.4167 17.1335L17.875 16.5885M17.875 16.5885L14.625 13.3193M17.875 16.5885C18.4733 17.1904 18.4733 18.1663 17.875 18.7681C17.2767 19.37 16.3067 19.37 15.7084 18.7681L14.625 17.6784M14.625 17.6784C15.2233 18.2802 15.2233 19.256 14.625 19.8579C14.0267 20.4597 13.0567 20.4597 12.4584 19.8579L10.8334 18.2232M14.625 17.6784L12.4584 15.5117M10.8334 18.2232L10.2917 17.6784M10.8334 18.2232C11.4317 18.8251 11.4317 19.801 10.8334 20.4029C10.2351 21.0047 9.265 21.0047 8.66669 20.4029L5.60775 17.2802C4.97918 16.6385 4.6649 16.3177 4.26223 16.1484C3.85957 15.9792 3.41044 15.9792 2.51221 15.9792H2.16669"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M23.8333 15.9791H21.125" stroke="white" stroke-linecap="round" />
                <path d="M9.20835 7.3125H2.16669" stroke="white" stroke-linecap="round" />
            </svg>
        </div>
        <div class="fs-5">Business Consultancy</div>
    </div>
    <div>
        <svg width="1" height="59" viewBox="0 0 1 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="-0.00750732" width="1" height="59" fill="white" />
        </svg>
    </div>
    <div class="d-flex align-items-center gap-2 w-100 text-center justify-content-center px-4 px-lg-0">
        <div>
            <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.0181 6.04097C13.3016 6.52937 13.4433 6.77356 13.4433 7.04171C13.4433 7.30985 13.3016 7.55405 13.0181 8.04245L11.6645 10.3743C11.3811 10.8627 11.2393 11.1069 11.0058 11.2409C10.7724 11.375 10.4889 11.375 9.92188 11.375H7.21478C6.6478 11.375 6.3643 11.375 6.13083 11.2409C5.89736 11.1069 5.75561 10.8627 5.47212 10.3743L4.11857 8.04245C3.83507 7.55405 3.69333 7.30985 3.69333 7.04171C3.69333 6.77356 3.83507 6.52937 4.11857 6.04097L5.47212 3.70911C5.75561 3.22071 5.89736 2.97652 6.13083 2.84245C6.3643 2.70837 6.6478 2.70837 7.21478 2.70837H9.92188C10.4889 2.70837 10.7724 2.70837 11.0058 2.84245C11.2393 2.97652 11.3811 3.22071 11.6645 3.70911L13.0181 6.04097Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M23.8514 12.5409C24.1349 13.0294 24.2766 13.2736 24.2766 13.5417C24.2766 13.8098 24.1349 14.054 23.8514 14.5425L22.4978 16.8743C22.2144 17.3627 22.0726 17.6069 21.8391 17.7409C21.6057 17.875 21.3222 17.875 20.7552 17.875H18.0481C17.4811 17.875 17.1976 17.875 16.9641 17.7409C16.7307 17.6069 16.5889 17.3627 16.3055 16.8743L14.9519 14.5425C14.6683 14.054 14.5266 13.8098 14.5266 13.5417C14.5266 13.2736 14.6683 13.0294 14.9519 12.5409L16.3055 10.2091C16.5889 9.72072 16.7307 9.47652 16.9641 9.34245C17.1976 9.20837 17.4811 9.20837 18.0481 9.20837H20.7552C21.3222 9.20837 21.6057 9.20837 21.8391 9.34245C22.0726 9.47652 22.2144 9.72072 22.4978 10.2091L23.8514 12.5409Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M13.0181 17.9576C13.3016 18.446 13.4433 18.6902 13.4433 18.9583C13.4433 19.2265 13.3016 19.4706 13.0181 19.9591L11.6645 22.2909C11.3811 22.7794 11.2393 23.0235 11.0058 23.1576C10.7724 23.2917 10.4889 23.2917 9.92188 23.2917H7.21478C6.6478 23.2917 6.3643 23.2917 6.13083 23.1576C5.89736 23.0235 5.75561 22.7794 5.47212 22.2909L4.11857 19.9591C3.83507 19.4706 3.69333 19.2265 3.69333 18.9583C3.69333 18.6902 3.83507 18.446 4.11857 17.9576L5.47212 15.6258C5.75561 15.1373 5.89736 14.8931 6.13083 14.7591C6.3643 14.625 6.6478 14.625 7.21478 14.625H9.92188C10.4889 14.625 10.7724 14.625 11.0058 14.7591C11.2393 14.8931 11.3811 15.1373 11.6645 15.6258L13.0181 17.9576Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="fs-5">Operations</div>
    </div>
    <div>
        <svg width="1" height="59" viewBox="0 0 1 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="-0.00750732" width="1" height="59" fill="white" />
        </svg>
    </div>
    <div class="d-flex align-items-center gap-2 w-100 text-center justify-content-center px-4 px-lg-0">
        <div>
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.9661 10H11.9811M11.9698 16H11.9848" stroke="white" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.96997 13H15.97" stroke="white" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M18.47 5C19.2984 5 19.97 5.67157 19.97 6.5C19.97 7.32843 19.2984 8 18.47 8C17.6415 8 16.97 7.32843 16.97 6.5C16.97 5.67157 17.6415 5 18.47 5Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M3.7442 11.1439C2.74105 12.2643 2.71947 13.9546 3.64013 15.1437C5.46708 17.5033 7.46671 19.5029 9.8263 21.3298C11.0154 22.2505 12.7057 22.2289 13.8261 21.2258C16.8679 18.5022 19.6535 15.6559 22.3419 12.5279C22.6077 12.2187 22.7739 11.8397 22.8112 11.4336C22.9762 9.63798 23.3152 4.46467 21.9103 3.05974C20.5053 1.65481 15.332 1.99377 13.5364 2.15876C13.1303 2.19608 12.7513 2.36233 12.442 2.62811C9.31409 5.31646 6.46778 8.10211 3.7442 11.1439Z"
                    stroke="white" stroke-width="1.5" />
            </svg>
        </div>
        <div class="fs-5">Sales</div>
    </div>
    <div>
        <svg width="1" height="59" viewBox="0 0 1 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="-0.00750732" width="1" height="59" fill="white" />
        </svg>
    </div>
    <div class="d-flex align-items-center gap-2 w-100 text-center justify-content-center px-4 px-lg-0">
        <div>
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.455 19.5V11.5C14.455 10.5572 14.455 10.0858 14.1621 9.79289C13.8692 9.5 13.3978 9.5 12.455 9.5C11.5122 9.5 11.0408 9.5 10.7478 9.79289C10.455 10.0858 10.455 10.5572 10.455 11.5V19.5C10.455 20.4428 10.455 20.9142 10.7478 21.2071C11.0408 21.5 11.5122 21.5 12.455 21.5C13.3978 21.5 13.8692 21.5 14.1621 21.2071C14.455 20.9142 14.455 20.4428 14.455 19.5Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M21.455 12.5V19.5C21.455 20.4428 21.455 20.9142 21.1621 21.2071C20.8692 21.5 20.3978 21.5 19.455 21.5C18.5122 21.5 18.0408 21.5 17.7479 21.2071C17.455 20.9142 17.455 20.4428 17.455 19.5V12.5"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M18.3925 9.16667V3.83333M19.955 3.83333V2.5M19.955 10.5V9.16667M18.3925 6.5H21.5175M21.5175 6.5C22.0353 6.5 22.455 6.94772 22.455 7.5V8.16667C22.455 8.71895 22.0353 9.16667 21.5175 9.16667H17.455M21.5175 6.5C22.0353 6.5 22.455 6.05228 22.455 5.5V4.83333C22.455 4.28105 22.0353 3.83333 21.5175 3.83333H17.455"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M7.45496 19.5V14.5C7.45496 13.5572 7.45496 13.0858 7.16207 12.7929C6.86917 12.5 6.39777 12.5 5.45496 12.5C4.51215 12.5 4.04075 12.5 3.74785 12.7929C3.45496 13.0858 3.45496 13.5572 3.45496 14.5V19.5C3.45496 20.4428 3.45496 20.9142 3.74785 21.2071C4.04075 21.5 4.51215 21.5 5.45496 21.5C6.39777 21.5 6.86917 21.5 7.16207 21.2071C7.45496 20.9142 7.45496 20.4428 7.45496 19.5Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

        </div>
        <div class="fs-5">Marketing</div>
    </div>
    <div>
        <svg width="1" height="59" viewBox="0 0 1 59" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.5" x="-0.00750732" width="1" height="59" fill="white" />
        </svg>
    </div>
    <div class="d-flex align-items-center gap-2 w-100 text-center justify-content-center px-4 px-lg-0">
        <div>
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.7414 6.48949L14.227 5.00392C15.8997 3.3312 18.0896 2.63737 20.4072 2.52399C21.3087 2.47989 21.7594 2.45784 22.1208 2.81928C22.4823 3.18071 22.4602 3.63143 22.4161 4.53289C22.3027 6.8505 21.6089 9.04042 19.9362 10.7131L18.4506 12.1987C17.2272 13.4221 16.8794 13.77 17.1362 15.097C17.3897 16.1107 17.635 17.0923 16.8979 17.8294C16.0038 18.7235 15.1882 18.7235 14.2941 17.8294L7.11064 10.646C6.21655 9.75188 6.21652 8.9363 7.11064 8.04219C7.84773 7.30509 8.82935 7.55044 9.84303 7.80389C11.1701 8.06073 11.518 7.71289 12.7414 6.48949Z"
                    stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                <path d="M17.936 7H17.945" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M3.44006 21.5L8.44006 16.5" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                <path d="M9.44006 21.5L11.4401 19.5" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                <path d="M3.44006 15.5L5.44006 13.5" stroke="white" stroke-width="1.5" stroke-linecap="round" />
            </svg>

        </div>
        <div class="fs-5">Market entry & Expansion</div>
    </div>
</section>

<section class="abt-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-lg-between">   

            <?php 
                $args = array( 'post_type' => 'who_we_are', 'posts_per_page' => 1);
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-lg-5 position-relative d-flex gap-3">
                <div class="abt-one" data-aos="fade-up">
                    <?php $image = get_field('who_we_are_image_2');?>
                    <img src="<?php echo $image;?>">
                </div>
                <div class="abt-two" data-aos="fade-up" data-aos-duration="1000">
                <?php $image = get_field('who_we_are_image_1');?>
                    <img src="<?php echo $image;?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="abt-strp mb-3">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_30_3389)">
                            <path
                                d="M11.6567 6.66663H8.32333C6.255 6.66663 5.82333 7.09829 5.82333 9.16663V18.3333H14.1567V9.16663C14.1567 7.09829 13.725 6.66663 11.6567 6.66663Z"
                                stroke="#47B298" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M9.15668 10H10.8233M9.15668 12.5H10.8233M9.15668 15H10.8233" stroke="#47B298"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M17.49 18.3333V6.82133C17.49 5.79775 17.49 5.28596 17.2411 4.87468C16.9922 4.46339 16.5439 4.23452 15.6474 3.77676L12.0293 1.92943C11.0623 1.43566 10.8233 1.60968 10.8233 2.69057V6.41954"
                                stroke="#47B298" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.49001 18.3333V10.8333C2.49001 10.1439 2.6339 10 3.32334 10H5.82334"
                                stroke="#47B298" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.3233 18.3334H1.65668" stroke="#47B298" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_30_3389">
                                <rect width="20" height="20" fill="white" transform="translate(-0.00999451)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <?php echo get_post_meta($post->ID,'about_us_label',true);?>
                </div>
                <h2 class="mb-4 h2" data-aos="fade-up"><?php echo get_post_meta($post->ID,'label_who_we_are',true);?></h2>
                <p class="paragraph mb-4" data-aos="fade-up">
                    <?php echo get_post_meta($post->ID,'who_we_are_content',true);?>
                </p>
                <div class="d-flex gap-3 mt-5" data-aos="fade-up">
                    <div class="circle-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.5 8.18677C2.60406 6.08705 2.91537 4.77792 3.84664 3.84664C4.77792 2.91537 6.08705 2.60406 8.18677 2.5M21.5 8.18677C21.3959 6.08705 21.0846 4.77792 20.1534 3.84664C19.2221 2.91537 17.9129 2.60406 15.8132 2.5M15.8132 21.5C17.9129 21.3959 19.2221 21.0846 20.1534 20.1534C21.0846 19.2221 21.3959 17.9129 21.5 15.8132M8.18676 21.5C6.08705 21.3959 4.77792 21.0846 3.84664 20.1534C2.91537 19.2221 2.60406 17.9129 2.5 15.8132"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M19.6352 11.3178C19.8784 11.6224 20 11.7746 20 12C20 12.2254 19.8784 12.3776 19.6352 12.6822C18.5423 14.0504 15.7514 17 12 17C8.24862 17 5.45768 14.0504 4.36483 12.6822C4.12161 12.3776 4 12.2254 4 12C4 11.7746 4.12161 11.6224 4.36483 11.3178C5.45768 9.9496 8.24862 7 12 7C15.7514 7 18.5423 9.9496 19.6352 11.3178Z"
                                stroke="white" stroke-width="1.5" />
                            <path
                                d="M14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12Z"
                                stroke="white" stroke-width="1.5" />
                        </svg>

                    </div>
                    <div>
                        <h3 class="h3 fs-4"><?php echo get_post_meta($post->ID,'label_our_mission_',true);?></h3>
                        <p class="paragraph"><?php echo get_post_meta($post->ID,'our_mission_content',true);?>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mt-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="circle-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M14 2.20004C13.3538 2.06886 12.6849 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 11.3151 21.9311 10.6462 21.8 10"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M12.0303 11.9624L16.5832 7.40949M19.7404 4.34451L19.1872 2.35737C19.0853 2.03 18.6914 1.89954 18.4259 2.11651C16.9898 3.29007 15.4254 4.8708 16.703 7.36408C19.2771 8.56443 20.7466 6.94573 21.8733 5.58519C22.0975 5.31449 21.9623 4.90756 21.6247 4.80994L19.7404 4.34451Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="h3 fs-4"><?php echo get_post_meta($post->ID,'label_our_vision_',true);?></h3>
                        <p class="paragraph"><?php echo get_post_meta($post->ID,'our_vision_content',true);?>
                        </p>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p class="d-flex text-center w-100">
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>

        </div>
    </div>
</section>

<section class="py-5 bg-hero">
    <div class="container">
        <div class="text-center">
            <h2 class="h2 text-white" data-aos="fade-up">Our Values</h2>
            <p class="text-white opacity-50 mt-lg-3 fs-5 text-center" data-aos="fade-up">The foundation of everything we
                do</p>
        </div>
    </div>
    <div class="marquee-cont">
        <div class="marquee-slider">
            <?php 
                $args = array( 'post_type' => 'values');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <p class="bold text-white"><?php echo get_the_title(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="marquee-slider">
            <?php 
                $args = array( 'post_type' => 'values');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <p class="bold text-white"><?php echo get_the_title(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="marquee-slider">
            <?php 
                $args = array( 'post_type' => 'values');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <p class="bold text-white"><?php echo get_the_title(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="marquee-slider">
            <?php 
                $args = array( 'post_type' => 'values');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <p class="bold text-white"><?php echo get_the_title(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="marquee-slider">
            <?php 
                $args = array( 'post_type' => 'values');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <p class="bold text-white"><?php echo get_the_title(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <p>
                    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="marquee-slider">
            <?php 
                $args = array( 'post_type' => 'values');
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <p class="bold text-white"><?php echo get_the_title(); ?></p>
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

<section class="padding-bottom padding-top border-top" id="service">
    <div class="container">

        <div class="col-lg-12  text-center">
            <h2 class="h2 text-body" data-aos="fade-up">Comprehensive Business Solution</h2>
            <p class="paragraph mb-5 mt-3 text-center" data-aos="fade-up">
                Our approach is based on deeply understanding our clients' needs and delivering exceptional value in
                every service we provide. Our clients benefit from our extensive expertise, global reach and a
                comprehensive suite of customized solutions.
            </p>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="white-dec">
                    <h3 class="fs-5 font-weight-600" data-aos="fade-up">Consultancy & Operations</h3>
                    <div class="devider my-3" data-aos="fade-up"></div>
                    <ul data-aos="fade-up">
                        <li data-aos="fade-up" data-aos-duration="1000">Corporate Strategy</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Logistics & Supply Chain</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Employee Assessment & Coaching</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Tailored Training & Mentoring</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Data Tools & Automation</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Advanced Analytics</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Sustainability</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Technology Integration</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Corporate events management</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Resourcing</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white-dec">
                    <h3 class="fs-5 font-weight-600" data-aos="fade-up">Sales & Marketing</h3>
                    <div class="devider my-3" data-aos="fade-up"></div>
                    <ul data-aos="fade-up">
                        <li data-aos="fade-up" data-aos-duration="1000">Brand Strategies</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Channel & Go-to-market Strategies</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Brand Positioning</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Market Research</li>
                        <li data-aos="fade-up" data-aos-duration="1000">New Products & Services</li>
                        <li data-aos="fade-up" data-aos-duration="1000">E-commerce Optimization</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Social Media Management</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Content Creation</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Digital Marketing</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Web3</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="white-dec">
                    <h3 class="fs-5 font-weight-600" data-aos="fade-up">Expansion & Market Entry</h3>
                    <div class="devider my-3" data-aos="fade-up"></div>
                    <ul data-aos="fade-up">
                        <li data-aos="fade-up" data-aos-duration="1000">Market Entry in Middle East & Africa</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Products Sourcing Solutions</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Enhanced Distribution Coverage</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Regulatory & Compliance Guidance</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Distributor & Customer Identification</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Whitespace Opportunity Exploration</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Localization Strategies</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Competitive Landscape Analysis</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Expert Contract Negotiation</li>
                        <li data-aos="fade-up" data-aos-duration="1000">Post-Entry Market Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding-bottom padding-top bg-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  text-center">
                <h2 class="h2 text-white" data-aos="fade-up">Our Collaborative
                    Experience</h2>
                <p class="text-white mb-5 mt-3 fs-5  text-center opacity-50" data-aos="fade-up">
                    At Social Kapita, we pride ourselves on collaborating with a diverse team of experts and strategic
                    partners who bring a wealth of knowledge and experience across various industries and sectors. Our
                    expert team includes professionals in:

                </p>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="box-gray p-4" data-aos="fade-up">
                    <div class="mb-4">
                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_113_575)">
                                <path d="M7.75 7.75V54.25H54.25" stroke="#47B298" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.0835 23.2499C18.0835 24.6202 18.6278 25.9344 19.5968 26.9033C20.5657 27.8722 21.8799 28.4166 23.2502 28.4166C24.6204 28.4166 25.9346 27.8722 26.9035 26.9033C27.8725 25.9344 28.4168 24.6202 28.4168 23.2499C28.4168 21.8796 27.8725 20.5655 26.9035 19.5965C25.9346 18.6276 24.6204 18.0833 23.2502 18.0833C21.8799 18.0833 20.5657 18.6276 19.5968 19.5965C18.6278 20.5655 18.0835 21.8796 18.0835 23.2499Z"
                                    stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M43.9165 18.0834C43.9165 19.4537 44.4608 20.7679 45.4298 21.7368C46.3987 22.7057 47.7129 23.2501 49.0832 23.2501C50.4535 23.2501 51.7676 22.7057 52.7366 21.7368C53.7055 20.7679 54.2498 19.4537 54.2498 18.0834C54.2498 16.7131 53.7055 15.399 52.7366 14.43C51.7676 13.4611 50.4535 12.9167 49.0832 12.9167C47.7129 12.9167 46.3987 13.4611 45.4298 14.43C44.4608 15.399 43.9165 16.7131 43.9165 18.0834Z"
                                    stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M31 38.7499C31 40.1202 31.5443 41.4344 32.5133 42.4033C33.4822 43.3722 34.7964 43.9166 36.1667 43.9166C37.537 43.9166 38.8511 43.3722 39.8201 42.4033C40.789 41.4344 41.3333 40.1202 41.3333 38.7499C41.3333 37.3796 40.789 36.0655 39.8201 35.0965C38.8511 34.1276 37.537 33.5833 36.1667 33.5833C34.7964 33.5833 33.4822 34.1276 32.5133 35.0965C31.5443 36.0655 31 37.3796 31 38.7499Z"
                                    stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M26.2466 27.4351L32.2916 34.8751" stroke="#47B298" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M38.9775 34.4307L46.3065 22.5835" stroke="#47B298" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_113_575">
                                    <rect width="62" height="62" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="fs-4 font-weight-600 text-white">FMCG & Sales Growth</h3>
                    <p class="paragraph text-white opacity-50">Leveraging deep industry insights to develop
                        effective
                        business strategies, drive sales growth, and optimize distribution channels for maximum reach.
                        Expertise in launching new FMCG products.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="box-gray-2 p-4">
                    <div class="mb-4">
                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_113_583)">
                                <path d="M7.75 25.8333V46.4999L25.8333 38.7499V32.0333L7.75 25.8333Z" stroke="#47B298"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.75 15.5L31 23.25L54.25 15.5L31 7.75L7.75 15.5Z" stroke="#47B298"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M36.167 31.7749V54.2499L54.2503 46.4999V25.8333L36.167 31.7749Z"
                                    stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_113_583">
                                    <rect width="62" height="62" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="fs-4 font-weight-600 text-white">Retail and Distribution</h3>
                    <p class="paragraph text-white opacity-50">Specializing in business development, product
                        management,
                        and retail strategies to enhance market presence and drive distribution success. Expertise in
                        omnichannel strategies and e-commerce optimization.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="box-gray-2 p-4">
                    <div class="mb-4">

                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_111_7)">
                                <path
                                    d="M46.5 20.6667C48.5554 20.6667 50.5267 21.4833 51.9801 22.9367C53.4335 24.3901 54.25 26.3613 54.25 28.4167C54.25 30.4722 53.4335 32.4434 51.9801 33.8968C50.5267 35.3502 48.5554 36.1667 46.5 36.1667"
                                    stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M25.8334 20.6667V49.0834C25.8334 49.7686 25.5612 50.4256 25.0767 50.9101C24.5923 51.3946 23.9352 51.6667 23.25 51.6667H20.6667C19.9816 51.6667 19.3245 51.3946 18.84 50.9101C18.3555 50.4256 18.0834 49.7686 18.0834 49.0834V36.1667"
                                    stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M31 20.6666L42.687 10.9274C43.0266 10.6446 43.4398 10.4644 43.8781 10.408C44.3164 10.3515 44.7618 10.4212 45.162 10.6088C45.5621 10.7964 45.9005 11.0942 46.1375 11.4672C46.3745 11.8403 46.5002 12.2732 46.5 12.7151V44.1181C46.5002 44.5601 46.3745 44.9929 46.1375 45.366C45.9005 45.739 45.5621 46.0368 45.162 46.2244C44.7618 46.412 44.3164 46.4817 43.8781 46.4253C43.4398 46.3688 43.0266 46.1886 42.687 45.9058L31 36.1666H10.3333C9.64819 36.1666 8.99111 35.8944 8.50664 35.41C8.02217 34.9255 7.75 34.2684 7.75 33.5833V23.2499C7.75 22.5648 8.02217 21.9077 8.50664 21.4233C8.99111 20.9388 9.64819 20.6666 10.3333 20.6666H31Z"
                                    stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_111_7">
                                    <rect width="62" height="62" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h3 class="fs-4 font-weight-600 text-white">Branding and Digital Marketing
                    </h3>
                    <p class="paragraph text-white opacity-50">Expertise in branding, digital marketing, website
                        development, content creation, and SEO. We help brands establish a strong online presence and
                        engage effectively with their target audience.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="box-gray-2 p-4">
                    <div class="mb-4">


                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M43.9167 51.6667C46.7701 51.6667 49.0833 49.3535 49.0833 46.5C49.0833 43.6466 46.7701 41.3334 43.9167 41.3334C41.0632 41.3334 38.75 43.6466 38.75 46.5C38.75 49.3535 41.0632 51.6667 43.9167 51.6667Z"
                                stroke="#47B298" stroke-width="2" />
                            <path
                                d="M18.0833 51.6667C20.9368 51.6667 23.25 49.3535 23.25 46.5C23.25 43.6466 20.9368 41.3334 18.0833 41.3334C15.2299 41.3334 12.9167 43.6466 12.9167 46.5C12.9167 49.3535 15.2299 51.6667 18.0833 51.6667Z"
                                stroke="#47B298" stroke-width="2" />
                            <path
                                d="M28.4167 43.9167H38.75M34.875 18.0834H37.3108C40.696 18.0834 42.3889 18.0834 43.8239 18.8959C45.259 19.7084 46.2158 21.2085 48.1296 24.2086C49.4713 26.3123 50.88 27.8393 52.8607 29.1979C54.8548 30.5655 55.8031 31.2341 56.3293 32.3072C56.8333 33.3349 56.8333 34.5521 56.8333 36.9864C56.8333 40.1957 56.8333 41.8004 55.9317 42.8201C55.893 42.864 55.8535 42.9066 55.8127 42.948C54.8635 43.9167 53.3701 43.9167 50.3827 43.9167H49.0833"
                                stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M33.5833 18.0834L36.1517 24.5044C37.41 27.6505 38.0393 29.2235 39.3514 30.1116C40.6635 31 42.3576 31 45.7459 31H54.25"
                                stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M12.5797 43.9167C9.08517 43.9167 7.33791 43.9167 6.25229 42.7818C5.16667 41.6467 5.16667 39.8201 5.16667 36.1667V18.0834C5.16667 14.43 5.16667 12.6033 6.25229 11.4683C7.33791 10.3334 9.08517 10.3334 12.5797 10.3334H26.1702C29.6649 10.3334 31.412 10.3334 32.4978 11.4683C33.5833 12.6033 33.5833 14.43 33.5833 18.0834V43.9167H22.4638"
                                stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                    </div>
                    <h3 class="fs-4 font-weight-600 text-white">Logistics & Supply Chain Management
                    </h3>
                    <p class="paragraph text-white opacity-50">Providing expertise in logistics and supply chain
                        optimization to ensure efficient operations and seamless market expansion. Solutions include
                        cost reduction strategies, data automation, and advanced analytics for improved efficiency.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="box-gray-2 p-4">
                    <div class="mb-4">
                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46.5 25.8334C46.5 25.8334 31 36.1667 31 54.25" stroke="#47B298" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M24.1511 28.8881C19.9894 32.0052 14.0617 31.6717 10.2778 27.8879C4.01666 21.6267 5.26888 7.85222 5.26888 7.85222C5.26888 7.85222 19.0434 6.6 25.3045 12.8611C27.7832 15.3399 28.7814 18.7387 28.2986 21.9583"
                                stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M38.6565 33.1119C35.247 29.4066 35.3392 23.6371 38.9329 20.0432C44.4984 14.4778 56.7424 15.5909 56.7424 15.5909C56.7424 15.5909 57.8556 27.8349 52.29 33.4004C50.3432 35.3472 47.7581 36.2664 45.2083 36.1581"
                                stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.5 18.0834C15.5 18.0834 31 31 31 54.25" stroke="#47B298" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <h3 class="fs-4 font-weight-600 text-white">Sustainability and Environmental Impact
                    </h3>
                    <p class="paragraph text-white opacity-50">Focusing on air pollution and climate change, with
                        an
                        emphasis on greenhouse gas emission auditing and reduction, to help businesses achieve their
                        sustainability goals. Providing corporate sustainability solutions, regulatory compliance, and
                        environmental impact assessments.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="box-gray-2 p-4">
                    <div class="mb-4">
                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M43.9167 35.6616C43.9167 34.7685 43.9167 34.3221 44.051 33.9243C44.4416 32.768 45.4713 32.3196 46.5028 31.8496C47.6625 31.3214 48.2422 31.0573 48.8167 31.0108C49.469 30.9581 50.1223 31.0987 50.6798 31.4115C51.4189 31.8261 51.9343 32.6143 52.4621 33.2552C54.8989 36.2152 56.1175 37.6955 56.5634 39.3276C56.9232 40.6446 56.9232 42.022 56.5634 43.339C55.9131 45.7196 53.8586 47.7152 52.3378 49.5623C51.56 50.507 51.1709 50.9795 50.6798 51.2551C50.1223 51.568 49.469 51.7085 48.8167 51.6558C48.2422 51.6093 47.6625 51.3453 46.5028 50.817C45.4713 50.3471 44.4416 49.8986 44.051 48.7423C43.9167 48.3445 43.9167 47.8981 43.9167 47.005V35.6616Z"
                                stroke="#47B298" stroke-width="2" />
                            <path d="M24.5417 54.25C28.1085 57.6944 33.8915 57.6944 37.4583 54.25" stroke="#47B298"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M18.0833 35.6617C18.0833 34.5374 18.0518 33.5271 17.1428 32.7366C16.8121 32.449 16.3738 32.2493 15.4972 31.85C14.3375 31.3219 13.7577 31.0579 13.1832 31.0114C11.4594 30.8719 10.532 32.0484 9.53799 33.2556C7.10093 36.2155 5.88239 37.6955 5.43651 39.3277C5.0767 40.6447 5.0767 42.0221 5.43651 43.3391C6.08684 45.7196 8.14142 47.7147 9.6622 49.5618C10.6208 50.7261 11.5366 51.7886 13.1832 51.6553C13.7577 51.6088 14.3375 51.3448 15.4972 50.8165C16.3738 50.4174 16.8121 50.2177 17.1428 49.9302C18.0518 49.1397 18.0833 48.1294 18.0833 47.0048V35.6617Z"
                                stroke="#47B298" stroke-width="2" />
                            <path
                                d="M5.16666 41.3333V31C5.16666 16.7326 16.7326 5.16663 31 5.16663C45.2672 5.16663 56.8333 16.7326 56.8333 31L56.8336 41.3333"
                                stroke="#47B298" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <h3 class="fs-4 font-weight-600 text-white">Training and Development
                    </h3>
                    <p class="paragraph text-white opacity-50">Offering internationally certified training in
                        mental
                        health, soft skills, & leadership. Empowering senior leaders and employees through in-office
                        workshops and external training programs to achieve their full potential.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="team" class="padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5 text-center">
                <h2 class="h2" data-aos="fade-up">Meet the Team & Strategic Partners
                </h2>
            </div>

            <?php 
                $args = array( 'post_type' => 'team', 'posts_per_page' => 4);
                $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <div class="col-lg-3 col-sm-6 col-12 mb-4 mb-lg-0" data-aos="fade-up">
                <div class="team-box mb-3">
                    <?php $image = get_field('photo');?>
                    <img src="<?php echo $image;?>">
                </div>
                <div class="fs-5 text-white font-weight-600 text-body d-flex justify-content-between">
                        <?php echo get_post_meta($post->ID,'name',true);?>
                    <a href="<?php echo get_post_meta($post->ID,'linkedin_url',true);?>" target="_blank"
                        class="d-flex gap-2 justify-content-center align-items-center">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M30.5602 30.565H26.1177V23.6037C26.1177 21.9437 26.084 19.8075 23.8027 19.8075C21.4865 19.8075 21.1327 21.6138 21.1327 23.4812V30.565H16.6902V16.25H20.9577V18.2012H21.0152C21.6115 17.0762 23.0615 15.8887 25.2277 15.8887C29.729 15.8887 30.5615 18.8513 30.5615 22.7075L30.5602 30.565ZM11.6727 14.2912C10.2427 14.2912 9.09396 13.1337 9.09396 11.71C9.09396 10.2875 10.244 9.13125 11.6727 9.13125C13.0977 9.13125 14.2527 10.2875 14.2527 11.71C14.2527 13.1337 13.0965 14.2912 11.6727 14.2912ZM13.9002 30.565H9.44522V16.25H13.9002V30.565ZM32.7827 5H7.21521C5.99146 5 5.00146 5.9675 5.00146 7.16125V32.8388C5.00146 34.0337 5.99146 35 7.21521 35H32.779C34.0015 35 35.0015 34.0337 35.0015 32.8388V7.16125C35.0015 5.9675 34.0015 5 32.779 5H32.7827Z"
                                fill="#0077B5" />
                        </svg>
                    </a>
                </div>
                <div class="text-white opacity-50 text-body">
                    <?php echo get_post_meta($post->ID,'sector',true);?>
                </div>
                <div class="text-white text-body mb-3">
                    <?php echo get_post_meta($post->ID,'title',true);?>
                </div>
                <p class="paragraph border-top pt-3">
                    <?php echo get_post_meta($post->ID,'about_team',true);?>
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






<section class="padding-bottom padding-top bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  text-center">
                <h2 class="h2 text-body" data-aos="fade-up">Our Diverse Sectors</h2>
                <p class="paragraph mb-5 mt-3 fs-5  text-center" data-aos="fade-up">
                    Social Kapita leverages its expertise to cover multiple sectors and categories, ensuring
                    comprehensive solutions
                    across various geographies.
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div
                    class="p-5 p-lg-4 sector-box d-flex flex-column justify-content-center align-items-center gap-3 text-center">
                    <svg width="62" height="62" viewBox="0 0 103 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_77_411)">
                            <path
                                d="M55.9258 31.7852C56.3526 31.7852 56.762 31.6156 57.0638 31.3138C57.3656 31.012 57.5352 30.6026 57.5352 30.1758V15.8926C57.5352 15.4657 57.3656 15.0564 57.0638 14.7546C56.762 14.4528 56.3526 14.2832 55.9258 14.2832C55.4989 14.2832 55.0896 14.4528 54.7878 14.7546C54.486 15.0564 54.3164 15.4657 54.3164 15.8926V30.1758C54.3164 30.6026 54.486 31.012 54.7878 31.3138C55.0896 31.6156 55.4989 31.7852 55.9258 31.7852ZM8.75098 45.8672H19.4131C19.8399 45.8672 20.2493 45.6976 20.5511 45.3958C20.8529 45.094 21.0225 44.6846 21.0225 44.2578C21.0225 43.831 20.8529 43.4216 20.5511 43.1198C20.2493 42.818 19.8399 42.6484 19.4131 42.6484H8.75098C8.32414 42.6484 7.91479 42.818 7.61298 43.1198C7.31116 43.4216 7.1416 43.831 7.1416 44.2578C7.1416 44.6846 7.31116 45.094 7.61298 45.3958C7.91479 45.6976 8.32414 45.8672 8.75098 45.8672ZM43.7549 45.8672H48.9854C49.4122 45.8672 49.8215 45.6976 50.1234 45.3958C50.4252 45.094 50.5947 44.6846 50.5947 44.2578C50.5947 43.831 50.4252 43.4216 50.1234 43.1198C49.8215 42.818 49.4122 42.6484 48.9854 42.6484H43.7549C43.3281 42.6484 42.9187 42.818 42.6169 43.1198C42.3151 43.4216 42.1455 43.831 42.1455 44.2578C42.1455 44.6846 42.3151 45.094 42.6169 45.3958C42.9187 45.6976 43.3281 45.8672 43.7549 45.8672ZM32.8916 45.8672H38.1221C38.5489 45.8672 38.9583 45.6976 39.2601 45.3958C39.5619 45.094 39.7314 44.6846 39.7314 44.2578C39.7314 43.831 39.5619 43.4216 39.2601 43.1198C38.9583 42.818 38.5489 42.6484 38.1221 42.6484H32.8916C32.4648 42.6484 32.0554 42.818 31.7536 43.1198C31.4518 43.4216 31.2822 43.831 31.2822 44.2578C31.2822 44.6846 31.4518 45.094 31.7536 45.3958C32.0554 45.6976 32.4648 45.8672 32.8916 45.8672ZM22.3991 75.7096C22.2496 75.8591 22.1311 76.0365 22.0502 76.2318C21.9693 76.427 21.9277 76.6363 21.9277 76.8477C21.9277 77.059 21.9693 77.2683 22.0502 77.4636C22.1311 77.6588 22.2496 77.8362 22.3991 77.9857C22.5485 78.1351 22.7259 78.2537 22.9212 78.3346C23.1165 78.4155 23.3258 78.4571 23.5371 78.4571C23.7485 78.4571 23.9577 78.4155 24.153 78.3346C24.3483 78.2537 24.5257 78.1351 24.6751 77.9857L31.1126 71.5482C31.4145 71.2464 31.584 70.837 31.584 70.4102C31.584 69.9833 31.4145 69.574 31.1126 69.2721C30.8108 68.9703 30.4015 68.8007 29.9746 68.8007C29.5478 68.8007 29.1384 68.9703 28.8366 69.2721L22.3991 75.7096ZM62.0931 65.7516C61.7912 65.4499 61.3819 65.2804 60.9551 65.2804C60.5283 65.2804 60.1189 65.4499 59.817 65.7516L47.445 78.1237C47.1432 78.4255 46.9736 78.8349 46.9736 79.2617C46.9736 79.6886 47.1432 80.0979 47.445 80.3998C47.7468 80.7016 48.1562 80.8711 48.583 80.8711C49.0099 80.8711 49.4192 80.7016 49.721 80.3998L62.0931 68.0277C62.2426 67.8782 62.3611 67.7008 62.442 67.5056C62.5229 67.3103 62.5645 67.101 62.5645 66.8897C62.5645 66.6783 62.5229 66.469 62.442 66.2738C62.3611 66.0785 62.2426 65.9011 62.0931 65.7516ZM65.0475 70.1774L58.61 76.6149C58.3082 76.9167 58.1386 77.3261 58.1386 77.7529C58.1386 78.1798 58.3082 78.5891 58.61 78.891C58.9118 79.1928 59.3212 79.3624 59.748 79.3624C60.1749 79.3624 60.5843 79.1928 60.8861 78.891L67.3236 72.4535C67.6254 72.1516 67.795 71.7423 67.795 71.3154C67.795 70.8886 67.6254 70.4792 67.3236 70.1774C67.0218 69.8756 66.6124 69.706 66.1855 69.706C65.7587 69.706 65.3493 69.8756 65.0475 70.1774Z"
                                fill="#47B298" />
                            <path
                                d="M97.9707 0.201172H50.4941C47.8318 0.201172 45.666 2.36719 45.666 5.0293V35.2051H5.0293C2.36699 35.2051 0.201172 37.3711 0.201172 40.0332V97.9707C0.201172 100.633 2.36699 102.799 5.0293 102.799H97.9707C100.633 102.799 102.799 100.633 102.799 97.9707V5.0293C102.799 2.36719 100.633 0.201172 97.9707 0.201172ZM48.8848 5.0293C48.8848 4.14193 49.6068 3.41992 50.4941 3.41992H97.9707C98.8581 3.41992 99.5801 4.14193 99.5801 5.0293V38.4238H57.2583C56.5939 36.5507 54.8051 35.2051 52.707 35.2051H48.8848V5.0293ZM63.4194 99.5801H55.0708V95.6572H63.4194V99.5801ZM65.0288 92.4385H36.8145C36.3707 92.4385 36.0098 92.0776 36.0098 91.6338V89.1191H82.4805V91.6338C82.4805 92.0776 82.1196 92.4385 81.6758 92.4385H65.0288ZM28.8682 91.1309C20.3823 91.1309 13.4785 84.2272 13.4785 75.7412C13.4785 67.2552 20.3823 60.3516 28.8682 60.3516C30.3327 60.3516 31.7479 60.562 33.0902 60.947C32.8927 61.4284 32.7911 61.9436 32.791 62.4639V63.3782C31.5229 62.9728 30.1996 62.7661 28.8682 62.7656C21.7135 62.7656 15.8926 68.5865 15.8926 75.7412C15.8926 82.8959 21.7135 88.7168 28.8682 88.7168C30.1996 88.7163 31.5229 88.5097 32.791 88.1042V90.6169C31.5112 90.9574 30.1925 91.1301 28.8682 91.1309ZM32.791 73.6104C32.5516 73.6884 32.334 73.8217 32.1559 73.9997L29.6413 76.5143C29.3394 76.8161 29.1699 77.2255 29.1699 77.6523C29.1699 78.0792 29.3394 78.4886 29.6413 78.7904C29.9431 79.0922 30.3525 79.2618 30.7793 79.2618C31.2061 79.2618 31.6155 79.0922 31.9173 78.7904L32.791 77.9167V84.672C31.5553 85.2179 30.2191 85.4992 28.8682 85.498C23.4882 85.498 19.1113 81.1212 19.1113 75.7412C19.1113 70.3613 23.4882 65.9844 28.8682 65.9844C30.2191 65.9831 31.5553 66.2644 32.791 66.8102V73.6104ZM82.4805 85.9004H36.0098V62.4639C36.0098 62.0201 36.3707 61.6592 36.8145 61.6592H81.6758C82.1196 61.6592 82.4805 62.0201 82.4805 62.4639V85.9004ZM5.0293 38.4238H52.707C53.5944 38.4238 54.3164 39.1458 54.3164 40.0332V49.2871H3.41992V40.0332C3.41992 39.1458 4.14193 38.4238 5.0293 38.4238ZM3.41992 97.9707V52.5059H54.3164V58.4404H36.8145C36.5187 58.4404 36.2311 58.4746 35.9534 58.5356C33.7068 57.6071 31.2991 57.1305 28.8682 57.1328C18.6074 57.1328 10.2598 65.4804 10.2598 75.7412C10.2598 86.002 18.6074 94.3496 28.8682 94.3496C30.4027 94.3496 31.9312 94.1593 33.4189 93.7829C34.133 94.9075 35.3865 95.6572 36.8145 95.6572H51.8521V99.5801H5.0293C4.14193 99.5801 3.41992 98.8581 3.41992 97.9707ZM97.9707 99.5801H66.6382V95.6572H81.6758C83.8943 95.6572 85.6992 93.8523 85.6992 91.6338V62.4639C85.6992 60.2453 83.8943 58.4404 81.6758 58.4404H57.5352V41.6426H99.5801V97.9707C99.5801 98.8581 98.8581 99.5801 97.9707 99.5801Z"
                                fill="#47B298" />
                        </g>
                        <defs>
                            <clipPath id="clip0_77_411">
                                <rect width="103" height="103" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="fs-5 text-body font-weight-600">Electronics & Appliances
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div
                    class="p-5 p-lg-4 sector-box d-flex flex-column justify-content-center align-items-center gap-3 text-center">
                    <svg width="62" height="62" viewBox="0 0 103 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M94.6618 64.7226L81.2783 65.4468V60.5447H97.9063C98.0913 60.5448 98.2745 60.5084 98.4453 60.4377C98.6162 60.367 98.7715 60.2632 98.9023 60.1324C99.0331 60.0017 99.1368 59.8464 99.2076 59.6755C99.2783 59.5046 99.3146 59.3214 99.3145 59.1365V23.9523C99.3108 22.3492 98.9909 20.7627 98.373 19.2835C97.7551 17.8043 96.8514 16.4615 95.7137 15.3322C94.576 14.2028 93.2266 13.3091 91.7429 12.7021C90.2591 12.0952 88.6702 11.7869 87.0672 11.7951C83.1588 11.7951 75.9142 11.8691 72.1966 11.9118C71.8262 11.9164 71.4725 12.0668 71.2122 12.3304C70.952 12.594 70.806 12.9495 70.8061 13.32V58.8411C69.9791 57.7558 69.0453 56.7562 68.0186 55.8574C68.1032 55.4236 68.1463 54.9828 68.1474 54.5409V46.5841C68.1455 44.7552 67.4181 43.0018 66.125 41.7085C64.8318 40.4152 63.0785 39.6877 61.2496 39.6856H58.4332C58.0519 38.3611 57.2507 37.1963 56.1502 36.3665C55.0497 35.5366 53.7095 35.0867 52.3312 35.0843H44.6408V32.6952C44.6394 31.5056 44.1662 30.3651 43.3251 29.5238C42.4839 28.6826 41.3435 28.2092 40.1539 28.2075H29.808C28.6183 28.209 27.4777 28.6823 26.6364 29.5236C25.7951 30.3649 25.3218 31.5055 25.3203 32.6952V35.0843H17.6283C16.2491 35.0866 14.908 35.5369 13.807 36.3675C12.706 37.1981 11.9047 38.364 11.5239 39.6896H8.70752C6.87953 39.6921 5.12711 40.4193 3.8343 41.7116C2.54149 43.004 1.81374 44.7561 1.81055 46.5841V54.5409C1.81246 56.3699 2.53976 58.1234 3.83288 59.4168C5.126 60.7102 6.87936 61.4379 8.70833 61.4403H13.0303L13.0013 74.5309C12.9993 75.2336 13.1362 75.9298 13.4041 76.5795C13.672 77.2291 14.0656 77.8194 14.5623 78.3164C15.0591 78.8135 15.6491 79.2075 16.2986 79.4757C16.9481 79.744 17.6442 79.8813 18.3469 79.8797H36.5328C38.3219 83.5715 41.1922 86.6313 44.7621 88.6526C48.332 90.6739 52.4326 91.5608 56.5187 91.1956C60.6049 90.8304 64.4831 89.2302 67.638 86.6078C70.7929 83.9855 73.0749 80.465 74.1809 76.5145L94.665 77.6225C95.5181 77.6321 96.3646 77.4723 97.1555 77.1524C97.9464 76.8325 98.666 76.359 99.2727 75.7591C99.8793 75.1592 100.361 74.4449 100.69 73.6577C101.018 72.8704 101.187 72.0257 101.187 71.1726C101.187 70.3194 101.018 69.4748 100.69 68.6875C100.361 67.9002 99.8793 67.1859 99.2727 66.5861C98.666 65.9862 97.9464 65.5126 97.1555 65.1927C96.3646 64.8729 95.5181 64.7131 94.665 64.7226H94.6618ZM78.4619 65.5989L74.2413 65.8274C74.0677 65.1802 73.8617 64.5421 73.6241 63.9155V60.5447H78.4619V65.5989ZM96.4981 23.9523V57.7283H92.564V23.9523C92.5648 22.1744 92.1772 20.4179 91.4281 18.8055C90.6791 17.1932 89.5867 15.764 88.2275 14.6179C90.5071 14.8981 92.6057 16.0014 94.1288 17.7204C95.6519 19.4394 96.4945 21.6556 96.4981 23.9523ZM73.6241 14.7105L81.4698 14.6115C83.754 14.8848 85.8584 15.9868 87.3842 17.7085C88.9099 19.4301 89.7509 21.6518 89.7476 23.9523V57.7283H73.6241V14.7105ZM65.3358 46.5841V53.8658C64.5425 53.3744 63.716 52.9388 62.8622 52.5622V46.383C62.8623 46.198 62.8259 46.0148 62.7552 45.8439C62.6845 45.673 62.5808 45.5178 62.45 45.387C62.3192 45.2562 62.1639 45.1525 61.993 45.0817C61.8221 45.011 61.6389 44.9747 61.454 44.9748H58.6488C58.6695 44.8483 58.6824 44.7206 58.6875 44.5925V42.5004H61.2512C62.3337 42.5016 63.3714 42.9324 64.1366 43.698C64.9018 44.4637 65.3319 45.5017 65.3326 46.5841H65.3358ZM56.9083 50.9641L56.9003 47.7912H60.0426V51.5603C59.0153 51.2786 57.9672 51.0792 56.9083 50.9641ZM35.0321 66.4672H15.8354L15.8499 60.0297L15.8612 54.7469V54.7396L15.8773 47.7912H54.0839L54.0919 50.8586C49.6405 51.0018 45.3606 52.6087 41.9149 55.4305C38.4692 58.2522 36.05 62.1314 35.0321 66.4672ZM13.0641 47.7896L13.0512 53.3331H9.91697V47.7912L13.0641 47.7896ZM28.1399 32.6936C28.1401 32.2504 28.3163 31.8254 28.6297 31.512C28.9431 31.1987 29.3681 31.0225 29.8113 31.0223H40.1539C40.5972 31.0225 41.0222 31.1986 41.3358 31.512C41.6493 31.8254 41.8256 32.2503 41.826 32.6936V35.0843H28.1367L28.1399 32.6936ZM17.6283 37.9008H52.3312C52.7962 37.9008 53.2566 37.9923 53.6862 38.1703C54.1157 38.3482 54.5061 38.609 54.8348 38.9378C55.1636 39.2666 55.4244 39.6569 55.6024 40.0864C55.7803 40.516 55.8719 40.9764 55.8719 41.4414V44.5982C55.8717 44.6996 55.8312 44.7968 55.7594 44.8685C55.6876 44.9402 55.5903 44.9804 55.4888 44.9804H14.4715C14.3703 44.9802 14.2733 44.9398 14.2017 44.8682C14.1302 44.7965 14.0901 44.6994 14.0901 44.5982V41.4357C14.0916 40.4981 14.4649 39.5993 15.1282 38.9366C15.7916 38.2739 16.6907 37.9014 17.6283 37.9008ZM8.70833 58.6239C7.62599 58.6226 6.58838 58.192 5.8232 57.4265C5.05803 56.661 4.6278 55.6232 4.62695 54.5409V46.5841C4.62802 45.5019 5.05833 44.4644 5.82349 43.6991C6.58864 42.9338 7.62613 42.5032 8.70833 42.502H11.2737V44.5941C11.2788 44.7222 11.2917 44.8499 11.3123 44.9764H8.50877C8.32381 44.9763 8.14064 45.0126 7.96974 45.0834C7.79885 45.1541 7.64356 45.2578 7.51278 45.3886C7.382 45.5194 7.27827 45.6747 7.20754 45.8456C7.13681 46.0165 7.10046 46.1996 7.10056 46.3846V54.7429C7.10046 54.9278 7.13681 55.111 7.20754 55.2819C7.27827 55.4528 7.382 55.6081 7.51278 55.7389C7.64356 55.8696 7.79885 55.9734 7.96974 56.0441C8.14064 56.1148 8.32381 56.1512 8.50877 56.1511H13.0424L13.0359 58.6239H8.70833ZM18.3469 77.0633C18.0145 77.0649 17.685 77.0006 17.3776 76.8743C17.0701 76.7479 16.7907 76.5619 16.5555 76.327C16.3203 76.0921 16.134 75.8129 16.0072 75.5056C15.8804 75.1983 15.8158 74.869 15.8169 74.5366L15.829 69.2852H34.5782C34.5267 69.8702 34.4978 70.4608 34.4978 71.0555C34.4961 73.0912 34.803 75.1155 35.4079 77.0593L18.3469 77.0633ZM54.7188 88.4593C51.2773 88.4599 47.9129 87.44 45.0511 85.5284C42.1893 83.6169 39.9586 80.8997 38.6412 77.7203C37.3237 74.541 36.9787 71.0424 37.6497 67.667C38.3207 64.2915 39.9776 61.1909 42.4109 58.7572C44.8442 56.3234 47.9445 54.666 51.3198 53.9943C54.6951 53.3227 58.1938 53.6671 61.3734 54.9839C64.553 56.3008 67.2706 58.5309 69.1827 61.3924C71.0947 64.2538 72.1153 67.618 72.1153 71.0595V71.0651C72.1078 75.6765 70.2725 80.0968 67.0116 83.3573C63.7506 86.6178 59.3301 88.4525 54.7188 88.4593ZM94.8171 74.811L74.7506 73.7254C74.9818 72.0314 74.9913 70.3145 74.7788 68.6181L94.8155 67.5342C95.7643 67.5586 96.6659 67.9527 97.3283 68.6323C97.9907 69.312 98.3614 70.2235 98.3614 71.1726C98.3614 72.1216 97.9907 73.0331 97.3283 73.7128C96.6659 74.3925 95.7643 74.7865 94.8155 74.811H94.8171Z"
                            fill="#47B298" />
                        <path
                            d="M54.7188 56.5969C51.8582 56.5963 49.0617 57.444 46.6829 59.0328C44.3041 60.6215 42.4499 62.8801 41.3548 65.5227C40.2596 68.1654 39.9728 71.0734 40.5304 73.8791C41.0881 76.6848 42.4653 79.2621 44.4878 81.2851C46.5103 83.308 49.0873 84.6858 51.8929 85.2441C54.6984 85.8024 57.6066 85.5162 60.2495 84.4216C62.8923 83.3271 65.1513 81.4734 66.7406 79.0949C68.3299 76.7165 69.1782 73.9202 69.1782 71.0596C69.174 67.2257 67.6493 63.55 64.9387 60.8388C62.228 58.1275 58.5527 56.602 54.7188 56.5969ZM54.7188 82.705C52.4152 82.7056 50.1632 82.0231 48.2475 80.7438C46.3319 79.4644 44.8387 77.6457 43.9567 75.5176C43.0748 73.3896 42.8437 71.0478 43.2928 68.7884C43.7419 66.529 44.8509 64.4535 46.4796 62.8245C48.1083 61.1954 50.1835 60.086 52.4428 59.6364C54.7021 59.1869 57.044 59.4175 59.1722 60.299C61.3005 61.1805 63.1195 62.6733 64.3992 64.5887C65.679 66.5041 66.362 68.756 66.3618 71.0596C66.3582 74.1466 65.1305 77.1062 62.9478 79.2893C60.7652 81.4724 57.8058 82.7008 54.7188 82.705ZM94.1702 69.7664H91.5687C91.1952 69.7664 90.837 69.9148 90.5729 70.1789C90.3088 70.443 90.1605 70.8012 90.1605 71.1746C90.1605 71.5481 90.3088 71.9063 90.5729 72.1704C90.837 72.4345 91.1952 72.5828 91.5687 72.5828H94.1702C94.5437 72.5828 94.9019 72.4345 95.166 72.1704C95.4301 71.9063 95.5784 71.5481 95.5784 71.1746C95.5784 70.8012 95.4301 70.443 95.166 70.1789C94.9019 69.9148 94.5437 69.7664 94.1702 69.7664Z"
                            fill="#47B298" />
                        <path
                            d="M54.7189 76.937C53.1619 76.934 51.6695 76.3141 50.5685 75.2132C49.4675 74.1122 48.8477 72.6198 48.8447 71.0627C48.8447 70.6893 48.6964 70.3311 48.4323 70.067C48.1682 69.8029 47.81 69.6545 47.4365 69.6545C47.063 69.6545 46.7049 69.8029 46.4408 70.067C46.1767 70.3311 46.0283 70.6893 46.0283 71.0627C46.0317 73.3666 46.9484 75.5751 48.5775 77.2042C50.2066 78.8333 52.4151 79.75 54.7189 79.7534C55.0924 79.7534 55.4506 79.605 55.7147 79.3409C55.9788 79.0768 56.1271 78.7186 56.1271 78.3452C56.1271 77.9717 55.9788 77.6135 55.7147 77.3494C55.4506 77.0853 55.0924 76.937 54.7189 76.937Z"
                            fill="#47B298" />
                    </svg>

                    <div class="fs-5 text-body font-weight-600">Kitchenware
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div
                    class="p-5 p-lg-4 sector-box d-flex flex-column justify-content-center align-items-center gap-3 text-center">
                    <svg width="62" height="62" viewBox="0 0 103 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M48.2983 87.0843V47.9192C48.2983 41.0282 52.4519 34.8168 58.82 32.1843L63.422 30.1106M90.2726 99.2526C92.4457 99.2526 94.2074 97.4909 94.2074 95.3179V47.9194C94.2074 41.0284 90.054 34.817 83.6857 32.1845L78.7425 30.1108V23.1404H63.422V30.1108H71.2529M78.0613 8.12193H91.3131L96.1581 12.8358M71.0823 11.0122V22.7381M78.0613 10.6098H64.103V7.03661C64.103 5.34173 65.477 3.96753 67.1721 3.96753H74.9922C76.6871 3.96753 78.0613 5.34153 78.0613 7.03661V10.6098Z"
                            stroke="#47B298" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M94.2076 80.915H66.4366V53.4255H94.2076M9.62326 91.347V82.433H27.4314V91.347M18.3479 77.1183V41.3887C18.3479 38.3957 20.7742 35.9694 23.7673 35.9694H47.0278C48.8093 35.9694 50.3903 36.8292 51.3781 38.1565M45.6735 35.9694V30.0438C45.6735 28.9638 44.7422 28.0883 43.5933 28.0883H27.2019C26.053 28.0883 25.1217 28.9638 25.1217 30.0438V35.9694M9.02055 91.347H30.7678L41.9246 94.3808H79.6971C81.1533 94.3808 82.334 95.5615 82.334 97.0178C82.334 98.4741 81.1533 99.6547 79.6971 99.6547H39.7443L28.947 96.7281H9.02055C7.5347 96.7281 6.33008 95.5235 6.33008 94.0376C6.33008 92.5516 7.53449 91.347 9.02055 91.347Z"
                            stroke="#47B298" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M42.3768 69.6771H26.0264V50.3258H42.3768" stroke="#47B298" stroke-width="3"
                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="fs-5 text-body font-weight-600">Home & Personal Care
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div
                    class="p-5 p-lg-4 sector-box d-flex flex-column justify-content-center align-items-center gap-3 text-center">
                    <svg width="62" height="62" viewBox="0 0 103 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M37.8204 83.9691C37.7399 83.1443 38.3434 82.4201 39.1682 82.3396C39.993 82.2591 40.7172 82.8626 40.7977 83.6875C40.9586 85.3773 43.9762 86.3027 45.7264 84.8945C46.169 84.5324 46.4506 84.0697 46.4506 83.5667C46.4506 80.0462 37.8204 83.2851 37.8204 76.5056C37.8204 74.0513 39.7717 72.2005 42.1053 71.6574V70.6314C42.1053 69.8066 42.7692 69.1427 43.6543 69.1427C44.4993 69.1427 45.1631 69.8267 45.143 70.6515L45.1229 71.6373C47.4766 72.1804 49.4481 74.0312 49.4481 76.5056C49.4481 77.3304 48.7842 77.9943 47.9594 77.9943C47.1346 77.9943 46.4707 77.3304 46.4707 76.5056C46.4707 74.7152 43.3325 73.7093 41.542 75.1578C41.0995 75.5199 40.8178 76.0027 40.8178 76.5056C40.8178 80.0261 49.4481 76.7873 49.4481 83.5667C49.4481 86.021 47.4766 87.8919 45.1229 88.415L45.1028 89.441C45.1028 90.2658 44.4389 90.9296 43.6141 90.9296C42.7893 90.9296 42.1254 90.2658 42.1254 89.441V88.415C39.8924 87.9121 38.0416 86.2625 37.8204 83.9691ZM43.6141 63.1478C47.4766 63.1478 51.0575 64.4554 53.894 66.6482V52.1638C53.894 51.339 54.5578 50.6751 55.4028 50.6751H62.8059C63.6307 50.6751 64.3147 51.339 64.3147 52.1638V81.5953C64.3147 82.4201 63.6508 83.1041 62.8059 83.1041H60.2309C58.7825 91.0302 51.842 96.9246 43.6141 96.9246C33.3342 96.9246 25.4483 87.8316 26.8967 77.6523C26.8163 77.6724 26.7559 77.6724 26.6955 77.6724C25.8305 77.7931 24.9454 77.8132 24.0401 77.7126C22.3704 77.8937 20.7409 77.6925 19.212 77.1695C13.72 75.2785 10.2196 69.5048 9.23383 63.7312C8.65043 60.3515 8.8516 56.6701 10.0788 53.1294C10.2598 52.5863 10.7225 52.2242 11.2455 52.1437C11.9094 52.023 12.5733 51.9626 13.2371 51.9828C13.3579 43.5738 16.637 34.7222 23.1348 29.8539C23.678 29.4314 24.4424 29.4716 24.9454 29.874C27.9428 32.1472 30.4575 35.4666 32.1875 39.4699C33.7768 43.1513 34.7223 47.4363 34.8028 51.9828C35.4465 51.9828 36.1104 52.023 36.7944 52.1437C37.3174 52.2443 37.76 52.5863 37.9612 53.1294C39.1682 56.6097 39.4096 60.3113 38.786 63.8519C40.3149 63.3892 41.9243 63.1478 43.6141 63.1478ZM56.8914 69.6054C59.1446 72.4822 60.5125 76.1636 60.4924 80.1066H61.2971V53.6525H56.8914V69.6054ZM27.6813 74.3933C29.9948 67.8753 35.2856 65.4009 35.3661 65.2802C35.869 63.5904 36.1305 61.7798 36.1104 59.9291C36.0903 58.2794 35.869 56.6097 35.3862 54.9601C33.4952 54.8394 31.7047 55.4027 30.1356 56.4689C28.2647 57.7363 26.6955 59.7279 25.6092 62.1017C27.0979 66.0447 27.3996 70.4705 26.3938 74.6951C26.8364 74.6347 27.2789 74.5341 27.6813 74.3933ZM53.4313 70.2089C47.9996 64.7773 39.2084 64.7773 33.7768 70.2089C28.3452 75.6406 28.3452 84.4318 33.7768 89.8634C39.2084 95.2951 47.9996 95.2951 53.4313 89.8634C58.8629 84.4318 58.8629 75.6406 53.4313 70.2089ZM49.6493 24.6636C49.6493 28.4658 46.5713 31.5437 42.7692 31.5437C38.967 31.5437 35.8891 28.4658 35.8891 24.6636C35.8891 21.7064 37.5186 19.916 38.8664 17.6226L41.4817 13.0962C42.0651 12.0904 43.4934 12.1105 44.0567 13.0962L46.6719 17.6226C47.9996 19.8958 49.6493 21.6863 49.6493 24.6636ZM45.5252 27.4197C46.2293 26.7156 46.6719 25.75 46.6719 24.6636C46.6719 22.7324 45.2034 21.0023 44.117 19.1113L42.7893 16.8179C42.045 18.1054 41.3409 19.3728 40.5563 20.6C39.6913 21.988 38.9067 23.1951 38.9067 24.6636C38.8866 28.1037 43.0911 29.8539 45.5252 27.4197ZM42.7893 6.07534C51.5604 6.07534 58.6618 13.1767 58.6618 21.9478C58.6618 30.6988 51.5604 37.8203 42.7893 37.8203C34.0383 37.8203 26.937 30.7189 26.937 21.9478C26.9168 13.1767 34.0182 6.07534 42.7893 6.07534ZM51.8823 12.8347C46.853 7.80542 38.7055 7.80542 33.6762 12.8347C28.6469 17.864 28.6469 26.0115 33.6762 31.0408C38.7055 36.0701 46.853 36.0701 51.8823 31.0408C56.9116 26.0115 56.9116 17.864 51.8823 12.8347ZM94.0881 59.4462V81.5953C94.0881 82.4201 93.4243 83.1041 92.5995 83.1041H85.1963C84.3715 83.1041 83.7077 82.4402 83.7077 81.5953V48.3818C83.7077 47.557 84.3715 46.873 85.1963 46.873H92.5995C93.4243 46.873 94.0881 47.5369 94.0881 48.3818V59.4462ZM91.0907 80.1066V49.8705H86.685V80.0865H91.0907V80.1066ZM76.2039 63.3892H71.7983V80.1066H76.2039V63.3892ZM70.2895 60.3918H77.6926C78.5174 60.3918 79.1813 61.0556 79.1813 61.8804V81.5751C79.1813 82.4 78.5174 83.0839 77.6926 83.0839H70.2895C69.4647 83.0839 68.8008 82.4201 68.8008 81.5751V61.8804C68.8008 61.0757 69.4647 60.3918 70.2895 60.3918ZM70.6516 53.1496C70.1084 52.546 70.1487 51.6005 70.7723 51.0574C71.3758 50.5142 72.3213 50.5544 72.8846 51.1781L73.4077 51.7615L73.9307 51.1781C74.4739 50.5746 75.4194 50.5142 76.043 51.0574C76.6465 51.6005 76.7069 52.546 76.1637 53.1496L74.4135 55.1009C73.81 55.6441 72.8645 55.6039 72.3213 54.9802L70.6516 53.1496ZM79.7043 49.1865C79.1612 49.8101 78.2157 49.8503 77.592 49.3072C76.9684 48.764 76.9282 47.8185 77.4713 47.1949L78.7186 45.8068C79.2618 45.1832 80.2073 45.1429 80.8309 45.6861C81.4545 46.2292 81.4948 47.1748 80.9516 47.7984L79.7043 49.1865ZM84.6532 43.6744C84.11 44.298 83.1645 44.3382 82.561 43.7951C81.9373 43.2519 81.8971 42.3064 82.4403 41.6828L83.8887 40.0533C84.4319 39.4296 85.3774 39.3894 86.001 39.9326C86.6045 40.4757 86.6649 41.4212 86.1217 42.0449L84.6532 43.6744ZM89.7026 38.0214C89.1594 38.625 88.2139 38.6853 87.6104 38.1421C86.9868 37.599 86.9465 36.6535 87.4897 36.0298L89.4209 33.8974C89.9641 33.2738 90.9096 33.2335 91.5332 33.7767C92.1368 34.3199 92.1971 35.2654 91.6539 35.889L89.7026 38.0214ZM69.3239 47.215C69.867 47.8185 69.8268 48.764 69.2032 49.3273C68.5795 49.8705 67.6541 49.8302 67.0909 49.2066L65.8436 47.8185C65.3004 47.1949 65.3407 46.2695 65.9643 45.7062C66.5879 45.163 67.5133 45.2033 68.0766 45.8269L69.3239 47.215ZM64.7371 42.0851C65.2803 42.6886 65.2401 43.6341 64.6165 44.1974C63.9928 44.7406 63.0674 44.7003 62.5041 44.0767L58.2594 39.3492L44.9821 53.4916C44.4188 54.0951 43.4733 54.1152 42.8698 53.5519C42.2663 52.9886 42.2461 52.0431 42.8094 51.4396L57.2133 36.1103C57.8168 35.4867 58.8227 35.4867 59.4061 36.1304L64.7371 42.0851ZM66.8293 20.0166C67.5334 27.4599 74.675 26.7357 79.2819 31.423C80.5291 26.2328 75.6809 20.2378 70.1487 19.6142C68.9819 19.4935 67.8352 19.6343 66.8293 20.0166ZM77.7329 34.1791C73.9911 29.532 65.9241 30.0751 64.1538 22.2294C63.4094 23.4365 63.1278 24.9251 63.2887 26.4742C63.7916 31.0408 67.9961 35.2453 72.5627 35.7482C74.5342 35.9695 76.4252 35.4666 77.7329 34.1791ZM60.3315 26.796C59.4866 19.1113 66.4873 14.5044 73.81 17.522C73.9508 14.5044 74.9969 11.7685 76.6264 9.73667C80.5493 4.84819 87.0471 4.84819 90.97 9.73667C94.7319 14.424 94.7319 21.9076 90.97 26.5949C88.8577 29.2302 85.7395 30.6988 82.4604 30.1556C82.2793 35.6878 77.8334 39.3492 72.261 38.7255C66.2661 38.0617 60.9752 32.791 60.3315 26.796ZM76.8477 19.2521C79.483 21.2236 81.3741 24.0199 82.1184 27.0173C82.6415 27.1783 83.1645 27.2789 83.7278 27.2789C83.9692 24.9654 83.2047 22.7726 82.4604 20.6402C81.1729 16.9386 79.9457 13.3779 82.561 9.21362C81.1729 9.5355 79.9256 10.4005 78.96 11.6076C77.3707 13.5791 76.5862 16.3955 76.8477 19.2521ZM86.0211 9.5355C81.2534 15.289 86.8057 19.8355 86.7655 26.4138C91.312 23.6376 92.1368 15.9529 88.6565 11.6076C87.9122 10.6822 87.0069 9.97808 86.0211 9.5355ZM21.4047 43.3525C20.5799 43.3525 19.9161 42.6886 19.9161 41.8638C19.9161 41.039 20.5799 40.3751 21.4047 40.3751H21.7668C22.5916 40.3751 23.2555 41.039 23.2555 41.8638C23.2555 42.6886 22.5916 43.3525 21.7668 43.3525H21.4047ZM26.253 48.2812C25.4282 48.2812 24.7442 47.6173 24.7442 46.7925C24.7442 45.9677 25.408 45.2837 26.253 45.2837H26.6151C27.4399 45.2837 28.1239 45.9476 28.1239 46.7925C28.1239 47.6173 27.46 48.2812 26.6151 48.2812H26.253ZM26.253 53.1093C25.4282 53.1093 24.7442 52.4455 24.7442 51.6005C24.7442 50.7757 25.408 50.1119 26.253 50.1119H26.6151C27.4399 50.1119 28.1239 50.7757 28.1239 51.6005C28.1239 52.4253 27.46 53.1093 26.6151 53.1093H26.253ZM26.253 43.3525C25.4282 43.3525 24.7442 42.6886 24.7442 41.8638C24.7442 41.039 25.408 40.3751 26.253 40.3751H26.6151C27.4399 40.3751 28.1239 41.039 28.1239 41.8638C28.1239 42.6886 27.46 43.3525 26.6151 43.3525H26.253ZM21.4047 48.2812C20.5799 48.2812 19.9161 47.6173 19.9161 46.7925C19.9161 45.9677 20.5799 45.2837 21.4047 45.2837H21.7668C22.5916 45.2837 23.2555 45.9476 23.2555 46.7925C23.2555 47.6173 22.5916 48.2812 21.7668 48.2812H21.4047ZM21.4047 53.1093C20.5799 53.1093 19.9161 52.4455 19.9161 51.6005C19.9161 50.7757 20.5799 50.1119 21.4047 50.1119H21.7668C22.5916 50.1119 23.2555 50.7757 23.2555 51.6005C23.2555 52.4253 22.5916 53.1093 21.7668 53.1093H21.4047ZM16.2145 52.4253C19.4735 53.391 22.1491 55.7648 23.9998 58.8025C25.8305 55.8251 28.5061 53.391 31.7852 52.4253C31.7651 45.1832 29.2303 37.5185 23.9998 32.972C18.7694 37.4984 16.2346 45.163 16.2145 52.4253ZM20.1776 74.3531C21.1633 74.6951 22.2094 74.856 23.2957 74.7755C24.7844 69.5853 23.8791 63.6306 20.8213 59.4261C18.8096 56.65 15.953 54.7589 12.5934 54.9802C11.1047 60.1705 12.01 66.1252 15.0678 70.3296C16.476 72.2408 18.2262 73.6691 20.1776 74.3531Z"
                            fill="#47B298" />
                    </svg>

                    <div class="fs-5 text-body font-weight-600">Commodities
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div
                    class="p-4 sector-box d-flex flex-column justify-content-center align-items-center gap-3 text-center">
                    <svg width="62" height="62" viewBox="0 0 103 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_77_520)">
                            <path
                                d="M57.1703 80.7822C57.1703 78.3015 55.536 76.1957 53.2877 75.4841C52.6407 66.3222 44.9795 59.0655 35.6556 59.0655H26.7578L25.3603 38.8639H76.3049L73.1305 28.7631H69.6864L67.4643 21.8945H51.514V11.2793L60.1223 9.27055C62.1905 8.78794 63.635 6.96774 63.635 4.84398V4.64421C63.635 3.23943 63.0013 1.93645 61.8964 1.06899C60.7914 0.201744 59.375 -0.104439 58.0106 0.228902L42.4232 4.03909V21.8949H26.473L24.2508 28.7635H20.8068L17.6323 38.8643H22.3228L23.7203 59.0659H21.5145C12.1904 59.0659 4.52958 66.3226 3.88241 75.4845C1.63432 76.1957 0 78.3017 0 80.7822C0 82.3724 0.671711 83.8088 1.74637 84.8225C0.671711 85.8362 0 87.2726 0 88.8628C0 91.3566 1.65162 93.4719 3.91842 94.172C4.54386 99.089 8.75398 102.903 13.838 102.903H43.3323C48.4165 102.903 52.6265 99.089 53.2519 94.172C55.5187 93.4717 57.1703 91.3566 57.1703 88.8628C57.1703 87.2726 56.4986 85.8362 55.424 84.8225C56.4986 83.8088 57.1703 82.3724 57.1703 80.7822ZM45.4535 6.41794L58.7298 3.17264C58.9528 3.11746 59.1854 3.114 59.4099 3.16254C59.6344 3.21107 59.8449 3.31032 60.0251 3.45268C60.2062 3.59398 60.3526 3.77482 60.453 3.98138C60.5535 4.18793 60.6054 4.41473 60.6047 4.64441V4.84418C60.6058 5.18644 60.4905 5.51891 60.2777 5.78702C60.065 6.05514 59.7674 6.243 59.4339 6.31977L48.4839 8.87465V21.8949H45.4537V6.41794H45.4535ZM28.6774 24.9249H65.26L66.5017 28.7633H27.4358L28.6774 24.9249ZM21.7609 35.8338L23.0307 31.7935H70.9063L72.1761 35.8338H21.7609ZM21.5147 62.0958H35.6558C43.2201 62.0958 49.4636 67.8603 50.2243 75.2268H6.94625C7.70688 67.8603 13.9504 62.0958 21.5147 62.0958ZM5.55535 91.3879C4.16284 91.3879 3.03025 90.2551 3.03025 88.8628C3.03025 87.4703 4.16304 86.3377 5.55535 86.3377H7.23533L14.3799 91.3881H5.55535V91.3879ZM26.1624 90.5346L22.2924 93.2701L12.4851 86.3377H20.2252L26.1624 90.5346ZM25.4747 86.3377H45.0894L35.2819 93.2701L25.4747 86.3377ZM43.3323 99.8728H13.838C10.5152 99.8728 7.728 97.5351 7.03436 94.4184H18.6671L22.2924 96.9809L28.7872 92.39L35.2823 96.9809L38.9076 94.4184H50.1362C49.4423 97.5351 46.6551 99.8728 43.3323 99.8728ZM51.615 91.3879H43.1943L50.3391 86.3375H51.6148C53.0073 86.3375 54.1399 87.4703 54.1399 88.8626C54.1401 90.2554 53.0075 91.3879 51.615 91.3879ZM51.615 83.3075H5.55535C4.16284 83.3075 3.03025 82.1749 3.03025 80.7824C3.03025 79.3899 4.16304 78.2573 5.55535 78.2573H51.615C53.0075 78.2573 54.1401 79.3899 54.1401 80.7824C54.1401 82.1749 53.0075 83.3075 51.615 83.3075Z"
                                fill="#47B298" />
                            <path
                                d="M100.806 59.0656V39.672H91.715V46.3384H82.6243V41.8941H73.5335V46.3384H70.6042V41.8941H61.5135V59.0656H57.9053L62.6797 102.903H98.2253L103 59.0656H100.806ZM94.7455 42.7022H97.7757V59.0656H94.7455V42.7022ZM88.685 49.3689H91.7152V64.8277L89.4368 71.1866H88.685V49.3689ZM82.6245 49.3689H85.6547V71.1866H82.6245V49.3689ZM76.564 44.9244H79.5942V71.1866H76.564V44.9244ZM70.6045 49.3689H73.5337V71.1866H71.4689L70.6045 68.7741V49.3689ZM64.5439 44.9244H67.5742V60.3175L67.1256 59.0656H64.5439V44.9244ZM95.5073 99.8729H65.3981L61.284 62.096H64.9928L69.3361 74.217H91.5698L95.9131 62.096H99.6219L95.5073 99.8729Z"
                                fill="#47B298" />
                            <path
                                d="M65.982 77.2471L68.1163 96.8427H92.7894L94.9234 77.2471H65.982ZM90.0714 93.8124H70.8343L69.3601 80.2774H91.5453L90.0714 93.8124ZM17.8784 65.3279H20.9087V68.3581H17.8784V65.3279ZM24.0057 67.1461H27.036V70.1763H24.0057V67.1461ZM30.1348 67.1461H33.1651V70.1763H30.1348V67.1461ZM36.2619 65.3279H39.2922V68.3581H36.2619V65.3279ZM30.2318 41.8942H46.1909V44.9244H30.2318V41.8942ZM49.2212 41.8942H53.2318V44.9244H49.2212V41.8942Z"
                                fill="#47B298" />
                            <path
                                d="M79.0383 85.5295H82.0686V88.5598H79.0383V85.5295ZM85.0988 85.5295H87.9271V88.5598H85.0988V85.5295ZM72.978 85.5295H76.0083V88.5598H72.978V85.5295Z"
                                fill="#47B298" />
                        </g>
                        <defs>
                            <clipPath id="clip0_77_520">
                                <rect width="103" height="103" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <div class="fs-5 text-body font-weight-600">Food & Beverages
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div
                    class="p-5 p-lg-4 sector-box d-flex flex-column justify-content-center align-items-center gap-3 text-center">
                    <svg width="62" height="62" viewBox="0 0 103 103" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M88.5156 48.402V46.6719C88.5156 41.9767 86.6504 37.4739 83.3305 34.1539C80.0105 30.8339 75.5076 28.9688 70.8125 28.9688C66.1173 28.9688 61.6144 30.8339 58.2945 34.1539C54.9745 37.4739 53.1093 41.9767 53.1093 46.6719V53.1094H46.6718C46.245 53.1094 45.8356 53.2789 45.5338 53.5807C45.232 53.8826 45.0625 54.2919 45.0625 54.7188V61.1562C45.0625 61.5831 45.232 61.9924 45.5338 62.2943C45.8356 62.5961 46.245 62.7656 46.6718 62.7656H46.8328L48.3568 77.25H41.8437V8.04688C41.8437 6.76638 41.335 5.53832 40.4296 4.63288C39.5241 3.72743 38.2961 3.21875 37.0156 3.21875C35.7351 3.21875 34.507 3.72743 33.6016 4.63288C32.6961 5.53832 32.1875 6.76638 32.1875 8.04688V77.25H16.0937C15.2404 77.251 14.4222 77.5905 13.8188 78.1939C13.2154 78.7973 12.876 79.6154 12.875 80.4688V85.0987L9.70429 97.7816C9.64498 98.0189 9.64053 98.2665 9.69127 98.5058C9.74201 98.745 9.8466 98.9695 9.99711 99.1623C10.1476 99.3551 10.3401 99.511 10.5599 99.6183C10.7797 99.7255 11.021 99.7812 11.2656 99.7812H86.9062C87.333 99.7812 87.7424 99.6117 88.0442 99.3099C88.346 99.0081 88.5156 98.5987 88.5156 98.1719V91.8189L90.7872 70.2388C91.5653 69.812 92.2136 69.1829 92.6636 68.418C93.1136 67.6531 93.3486 66.7809 93.3437 65.8934V54.3164C93.3421 52.9256 92.861 51.5779 91.9815 50.5005C91.102 49.4231 89.8779 48.682 88.5156 48.402ZM56.3281 46.6719C56.3281 44.7698 56.7027 42.8863 57.4306 41.1289C58.1585 39.3716 59.2255 37.7749 60.5705 36.4299C61.9155 35.0849 63.5122 34.018 65.2695 33.2901C67.0268 32.5621 68.9103 32.1875 70.8125 32.1875C72.7146 32.1875 74.5981 32.5621 76.3554 33.2901C78.1127 34.018 79.7095 35.0849 81.0545 36.4299C82.3995 37.7749 83.4664 39.3716 84.1943 41.1289C84.9222 42.8863 85.2968 44.7698 85.2968 46.6719V48.2812H70.4101C69.0193 48.2829 67.6716 48.764 66.5942 49.6435C65.5168 50.523 64.7757 51.7471 64.4957 53.1094H56.3281V46.6719ZM48.2812 56.3281H64.375V59.5469H48.2812V56.3281ZM50.0688 62.7656H64.375V65.8959C64.3777 66.5527 64.5102 67.2026 64.7648 67.8081C65.0195 68.4136 65.3913 68.9628 65.8588 69.4242C66.3071 69.872 66.8405 70.2255 67.4276 70.4639C68.0147 70.7023 68.6435 70.8207 69.2771 70.8123C70.4392 70.7916 71.5551 70.3543 72.4218 69.5799C73.3062 70.3734 74.4524 70.8123 75.6406 70.8123C76.8287 70.8123 77.975 70.3734 78.8593 69.5799C79.7434 70.3731 80.8892 70.812 82.077 70.8123C83.2647 70.8126 84.4108 70.3743 85.2952 69.5815C85.9195 70.1426 86.6805 70.5293 87.5017 70.7029L85.4578 90.125H62.4127L61.1562 85.0987V80.4688C61.1552 79.6154 60.8158 78.7973 60.2123 78.1939C59.6089 77.5905 58.7908 77.251 57.9375 77.25H51.5929L50.0688 62.7656ZM35.4062 8.04688C35.4062 7.62004 35.5758 7.21069 35.8776 6.90888C36.1794 6.60706 36.5887 6.4375 37.0156 6.4375C37.4424 6.4375 37.8518 6.60706 38.1536 6.90888C38.4554 7.21069 38.625 7.62004 38.625 8.04688V77.25H35.4062V8.04688ZM16.0937 80.4688H57.9375V83.6875H16.0937V80.4688ZM19.7643 96.5625L22.1784 86.9062H25.2981L22.8841 96.5625H19.7643ZM15.7409 86.9062H18.8606L16.4466 96.5625H13.3268L15.7409 86.9062ZM28.6159 86.9062H31.9738L30.7668 96.5625H26.2018L28.6159 86.9062ZM34.0105 96.5625L35.2175 86.9062H38.8137L40.0207 96.5625H34.0105ZM43.2644 96.5625L42.0574 86.9062H45.4153L47.8294 96.5625H43.2644ZM51.1471 96.5625L48.733 86.9062H51.8528L54.2669 96.5625H51.1471ZM57.5846 96.5625L55.1705 86.9062H58.2903L60.7044 96.5625H57.5846ZM85.2968 96.5625H64.0221L63.2174 93.3438H85.2968V96.5625ZM90.125 61.1562V65.8934C90.1324 66.3175 89.9788 66.7286 89.695 67.0438C89.4113 67.3589 89.0185 67.5548 88.596 67.5917C88.3782 67.6026 88.1604 67.5692 87.9559 67.4933C87.7514 67.4174 87.5644 67.3008 87.4064 67.1505C87.2484 67.0002 87.1225 66.8193 87.0365 66.6188C86.9505 66.4183 86.9062 66.2025 86.9062 65.9844V59.5469H83.6875V65.9844C83.6875 66.4112 83.5179 66.8206 83.2161 67.1224C82.9143 67.4242 82.5049 67.5938 82.0781 67.5938C81.6512 67.5938 81.2419 67.4242 80.9401 67.1224C80.6383 66.8206 80.4687 66.4112 80.4687 65.9844V59.5469H77.25V65.9844C77.25 66.4112 77.0804 66.8206 76.7786 67.1224C76.4768 67.4242 76.0674 67.5938 75.6406 67.5938C75.2137 67.5938 74.8044 67.4242 74.5026 67.1224C74.2008 66.8206 74.0312 66.4112 74.0312 65.9844V59.5469H70.8125V65.9844C70.8129 66.407 70.647 66.8128 70.3505 67.114C70.0541 67.4151 69.651 67.5875 69.2284 67.5938H69.2063C68.7965 67.5896 68.405 67.4233 68.1176 67.1311C67.9534 66.9698 67.8226 66.7777 67.7329 66.5657C67.6431 66.3538 67.5961 66.1262 67.5945 65.8961V54.3164C67.5953 53.5697 67.8923 52.8538 68.4203 52.3258C68.9483 51.7978 69.6642 51.5008 70.4109 51.5H87.3094C88.0561 51.5008 88.772 51.7978 89.3 52.3258C89.828 52.8538 90.125 53.5697 90.1258 54.3164L90.125 61.1562Z"
                            fill="#47B298" />
                        <path
                            d="M78.8592 78.8594H82.078V86.9062H78.8592V78.8594ZM78.8592 72.4219H82.078V75.6406H78.8592V72.4219ZM19.3951 55.2277C19.5019 55.5481 19.7068 55.8267 19.9808 56.0242C20.2548 56.2216 20.584 56.3279 20.9217 56.3279C21.2595 56.3279 21.5886 56.2216 21.8626 56.0242C22.1366 55.8267 22.3416 55.5481 22.4484 55.2277C22.872 53.9672 23.5817 52.8219 24.522 51.8816C25.4623 50.9413 26.6077 50.2316 27.8682 49.8081C28.1887 49.7014 28.4675 49.4965 28.6651 49.2224C28.8627 48.9484 28.969 48.6191 28.969 48.2812C28.969 47.9434 28.8627 47.6141 28.6651 47.3401C28.4675 47.066 28.1887 46.8611 27.8682 46.7544C26.6077 46.3309 25.4623 45.6212 24.522 44.6809C23.5817 43.7406 22.872 42.5953 22.4484 41.3348C22.3416 41.0144 22.1366 40.7358 21.8626 40.5383C21.5886 40.3409 21.2595 40.2346 20.9217 40.2346C20.584 40.2346 20.2548 40.3409 19.9808 40.5383C19.7068 40.7358 19.5019 41.0144 19.3951 41.3348C18.9715 42.5953 18.2618 43.7406 17.3215 44.6809C16.3812 45.6212 15.2358 46.3309 13.9753 46.7544C13.6548 46.8611 13.376 47.066 13.1784 47.3401C12.9808 47.6141 12.8745 47.9434 12.8745 48.2812C12.8745 48.6191 12.9808 48.9484 13.1784 49.2224C13.376 49.4965 13.6548 49.7014 13.9753 49.8081C15.2358 50.2316 16.3812 50.9413 17.3215 51.8816C18.2618 52.8219 18.9715 53.9672 19.3951 55.2277ZM20.9217 45.3777C21.7141 46.5063 22.6965 47.4888 23.8251 48.2812C22.6965 49.0737 21.7141 50.0561 20.9217 51.1848C20.1294 50.0561 19.147 49.0737 18.0184 48.2812C19.147 47.4888 20.1294 46.5063 20.9217 45.3777ZM98.6807 27.4419C97.4202 27.0184 96.2748 26.3087 95.3345 25.3684C94.3942 24.4281 93.6845 23.2828 93.2609 22.0223C93.1541 21.7019 92.9491 21.4233 92.6751 21.2258C92.4011 21.0284 92.072 20.9221 91.7342 20.9221C91.3965 20.9221 91.0673 21.0284 90.7933 21.2258C90.5193 21.4233 90.3144 21.7019 90.2076 22.0223C89.784 23.2828 89.0743 24.4281 88.134 25.3684C87.1936 26.3087 86.0483 27.0184 84.7878 27.4419C84.4673 27.5486 84.1885 27.7535 83.9909 28.0276C83.7933 28.3016 83.687 28.6309 83.687 28.9687C83.687 29.3066 83.7933 29.6359 83.9909 29.9099C84.1885 30.184 84.4673 30.3889 84.7878 30.4956C86.0483 30.9191 87.1936 31.6288 88.134 32.5691C89.0743 33.5094 89.784 34.6547 90.2076 35.9152C90.3144 36.2356 90.5193 36.5142 90.7933 36.7117C91.0673 36.9091 91.3965 37.0154 91.7342 37.0154C92.072 37.0154 92.4011 36.9091 92.6751 36.7117C92.9491 36.5142 93.1541 36.2356 93.2609 35.9152C93.6845 34.6547 94.3942 33.5094 95.3345 32.5691C96.2748 31.6288 97.4202 30.9191 98.6807 30.4956C99.0012 30.3889 99.28 30.184 99.4776 29.9099C99.6752 29.6359 99.7815 29.3066 99.7815 28.9687C99.7815 28.6309 99.6752 28.3016 99.4776 28.0276C99.28 27.7535 99.0012 27.5486 98.6807 27.4419ZM91.7342 31.8723C90.9419 30.7436 89.9595 29.7612 88.8309 28.9687C89.9595 28.1763 90.9419 27.1938 91.7342 26.0652C92.5266 27.1938 93.509 28.1763 94.6376 28.9687C93.509 29.7612 92.5266 30.7436 91.7342 31.8723ZM11.2655 75.6406C11.6033 75.6406 11.9324 75.5343 12.2064 75.3368C12.4805 75.1393 12.6854 74.8606 12.7922 74.5402C13.2157 73.2797 13.9255 72.1344 14.8658 71.1941C15.8061 70.2538 16.9514 69.5441 18.212 69.1206C18.5325 69.0139 18.8113 68.809 19.0088 68.5349C19.2064 68.2609 19.3127 67.9316 19.3127 67.5937C19.3127 67.2559 19.2064 66.9266 19.0088 66.6526C18.8113 66.3785 18.5325 66.1736 18.212 66.0669C16.9514 65.6434 15.8061 64.9337 14.8658 63.9934C13.9255 63.0531 13.2157 61.9078 12.7922 60.6473C12.6853 60.3269 12.4804 60.0483 12.2064 59.8508C11.9324 59.6534 11.6032 59.5471 11.2655 59.5471C10.9278 59.5471 10.5986 59.6534 10.3246 59.8508C10.0506 60.0483 9.84566 60.3269 9.7388 60.6473C9.31527 61.9078 8.60553 63.0531 7.66521 63.9934C6.7249 64.9337 5.57958 65.6434 4.31903 66.0669C3.99851 66.1736 3.71971 66.3785 3.52214 66.6526C3.32458 66.9266 3.21826 67.2559 3.21826 67.5937C3.21826 67.9316 3.32458 68.2609 3.52214 68.5349C3.71971 68.809 3.99851 69.0139 4.31903 69.1206C5.57958 69.5441 6.7249 70.2538 7.66521 71.1941C8.60553 72.1344 9.31527 73.2797 9.7388 74.5402C9.84562 74.8606 10.0505 75.1393 10.3245 75.3368C10.5985 75.5343 10.9277 75.6406 11.2655 75.6406ZM11.2655 64.6902C12.0579 65.8188 13.0402 66.8013 14.1688 67.5937C13.0402 68.3862 12.0579 69.3687 11.2655 70.4973C10.4731 69.3687 9.49074 68.3862 8.36218 67.5937C9.49074 66.8013 10.4731 65.8188 11.2655 64.6902Z"
                            fill="#47B298" />
                    </svg>

                    <div class="fs-5 text-body font-weight-600">Household Cleaning & Disinfecting
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  text-center">
                <h2 class="h2 text-body" data-aos="fade-up">The Social Kapita Advantage
                </h2>
                <p class="paragraph mb-5 mt-3 fs-5  text-center" data-aos="fade-up">
                    Choosing Social Kapita means partnering with a company that is dedicated to your growth and success.
                    Our expertise & extensive network in the region make us the ideal partner for businesses looking to
                    expand in MENA.

                </p>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="d-flex w-100 flex-column flex-lg-row gap-3 align-items-center">
                    <div class="w-100 text-center">
                        <div class="icon-box">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_81_530)">
                                    <path
                                        d="M20.6665 18.0833C20.6665 20.8239 21.7552 23.4522 23.6931 25.3901C25.6309 27.328 28.2593 28.4167 30.9998 28.4167C33.7404 28.4167 36.3687 27.328 38.3066 25.3901C40.2445 23.4522 41.3332 20.8239 41.3332 18.0833C41.3332 15.3428 40.2445 12.7144 38.3066 10.7766C36.3687 8.83869 33.7404 7.75 30.9998 7.75C28.2593 7.75 25.6309 8.83869 23.6931 10.7766C21.7552 12.7144 20.6665 15.3428 20.6665 18.0833Z"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M15.5 54.25V49.0833C15.5 46.3428 16.5887 43.7144 18.5266 41.7766C20.4644 39.8387 23.0928 38.75 25.8333 38.75H36.1667C36.8564 38.75 37.5332 38.8172 38.1842 38.9463"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M49.0832 41.3334L43.9165 49.0834H54.2498L49.0832 56.8334" stroke="#47B298"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_81_530">
                                        <rect width="62" height="62" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="text-body font-weight-600 fs-5 mt-4">Expertise</div>
                        <p class="paragraph">
                            Deep industry knowledge and experience across multiple sectors.
                        </p>
                    </div>
                    <div class="w-100 text-center">
                        <div class="icon-box">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_81_535)">
                                    <path
                                        d="M15.5 23.25C15.5 27.3609 17.133 31.3033 20.0398 34.2102C22.9467 37.117 26.8891 38.75 31 38.75C35.1109 38.75 39.0533 37.117 41.9602 34.2102C44.867 31.3033 46.5 27.3609 46.5 23.25C46.5 19.1391 44.867 15.1967 41.9602 12.2898C39.0533 9.38303 35.1109 7.75 31 7.75C26.8891 7.75 22.9467 9.38303 20.0398 12.2898C17.133 15.1967 15.5 19.1391 15.5 23.25Z"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M31 7.75C34.4436 8.61025 36.1667 13.7769 36.1667 23.25C36.1667 32.7231 34.4436 37.8897 31 38.75"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M31.0002 7.75C27.5566 8.61025 25.8335 13.7769 25.8335 23.25C25.8335 32.7231 27.5566 37.8897 31.0002 38.75"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M15.5 23.25H46.5" stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7.75 51.6666H25.8333" stroke="#47B298" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M36.1665 51.6666H54.2498" stroke="#47B298" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M25.8335 51.6667C25.8335 53.037 26.3778 54.3511 27.3468 55.3201C28.3157 56.289 29.6299 56.8333 31.0002 56.8333C32.3704 56.8333 33.6846 56.289 34.6535 55.3201C35.6225 54.3511 36.1668 53.037 36.1668 51.6667C36.1668 50.2964 35.6225 48.9822 34.6535 48.0133C33.6846 47.0443 32.3704 46.5 31.0002 46.5C29.6299 46.5 28.3157 47.0443 27.3468 48.0133C26.3778 48.9822 25.8335 50.2964 25.8335 51.6667Z"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M31 38.75V46.5" stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_81_535">
                                        <rect width="62" height="62" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="text-body font-weight-600 fs-5 mt-4">Network</div>
                        <p class="paragraph">
                            Extensive connections that unlock new opportunities and markets.

                        </p>
                    </div>
                    <div class="w-100 text-center">
                        <div class="icon-box">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_90_2)">
                                    <path
                                        d="M7.75 31H10.3333M31 7.75V10.3333M51.6667 31H54.25M14.4667 14.4667L16.275 16.275M47.5333 14.4667L45.725 16.275"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M23.25 41.3335C21.0812 39.7069 19.4792 37.4392 18.6709 34.8515C17.8625 32.2638 17.8889 29.4874 18.7462 26.9156C19.6035 24.3437 21.2482 22.1068 23.4475 20.5216C25.6468 18.9365 28.289 18.0835 31 18.0835C33.711 18.0835 36.3532 18.9365 38.5525 20.5216C40.7518 22.1068 42.3965 24.3437 43.2538 26.9156C44.1111 29.4874 44.1375 32.2638 43.3291 34.8515C42.5208 37.4392 40.9188 39.7069 38.75 41.3335C37.7414 42.3319 36.982 43.5537 36.5332 44.9001C36.0844 46.2465 35.9588 47.6796 36.1667 49.0835C36.1667 50.4538 35.6223 51.7679 34.6534 52.7369C33.6844 53.7058 32.3703 54.2502 31 54.2502C29.6297 54.2502 28.3156 53.7058 27.3466 52.7369C26.3777 51.7679 25.8333 50.4538 25.8333 49.0835C26.0412 47.6796 25.9156 46.2465 25.4668 44.9001C25.018 43.5537 24.2586 42.3319 23.25 41.3335Z"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M25.0583 43.9165H36.9417" stroke="#47B298" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_90_2">
                                        <rect width="62" height="62" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </div>
                        <div class="text-body font-weight-600 fs-5 mt-4">Innovation</div>
                        <p class="paragraph">
                            Commitment to innovative solutions and cutting-edge strategies.

                        </p>
                    </div>
                    <div class="w-100 text-center">
                        <div class="icon-box">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_81_556)">
                                    <path
                                        d="M30.9946 5.16663L31.0773 5.17179L31.2994 5.18471C31.6077 5.22047 31.907 5.31148 32.1829 5.45338L32.4542 5.61354L32.7048 5.80988L32.7461 5.84863L33.3842 6.39113C38.5956 10.7197 45.1819 13.044 51.9558 12.945L52.8393 12.9192C53.4169 12.8929 53.9866 13.0611 54.4573 13.3969C54.928 13.7327 55.2725 14.2167 55.4355 14.7715C56.705 19.0897 57.0934 23.6191 56.5778 28.0904C56.0622 32.5617 54.653 36.8838 52.4341 40.7998C50.2151 44.7158 47.2316 48.1457 43.6608 50.8859C40.0901 53.626 36.005 55.6205 31.6482 56.7506C31.2229 56.8609 30.7766 56.8609 30.3514 56.7506C25.9944 55.6207 21.9089 53.6265 18.3379 50.8865C14.7669 48.1465 11.7831 44.7165 9.56385 40.8005C7.34462 36.8845 5.93523 32.5623 5.41946 28.0909C4.90368 23.6194 5.29203 19.0899 6.56143 14.7715C6.72447 14.2167 7.0689 13.7327 7.53961 13.3969C8.01031 13.0611 8.58007 12.8929 9.15768 12.9192C16.5348 13.2564 23.7535 10.7084 29.2844 5.81504L29.4033 5.72204L29.5402 5.61613C29.7145 5.49714 29.9028 5.39997 30.1008 5.32679L30.2945 5.26738L30.3875 5.24154C30.4896 5.21631 30.5931 5.19733 30.6975 5.18471L30.9197 5.17179L30.9946 5.16663ZM30.9998 11.098L30.5451 11.4467C25.088 15.5189 18.522 17.8361 11.7178 18.091L11.0358 18.1065L10.8704 18.9074C9.66465 25.2189 10.6336 31.7528 13.6191 37.4428L14.0583 38.254C17.7065 44.6906 23.7213 49.4505 30.8241 51.522L30.9998 51.571V11.098Z"
                                        fill="#47B298" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_81_556">
                                        <rect width="62" height="62" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="text-body font-weight-600 fs-5 mt-4">Reliability</div>
                        <p class="paragraph">
                            A trusted partner that delivers consistent, high-quality results.

                        </p>
                    </div>
                    <div class="w-100 text-center">
                        <div class="icon-box">
                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_81_559)">
                                    <path
                                        d="M54.25 28.4166V15.5C54.25 14.8148 53.9778 14.1577 53.4934 13.6733C53.0089 13.1888 52.3518 12.9166 51.6667 12.9166H10.3333C9.64819 12.9166 8.99111 13.1888 8.50664 13.6733C8.02217 14.1577 7.75 14.8148 7.75 15.5V46.5C7.75 47.1851 8.02217 47.8422 8.50664 48.3267C8.99111 48.8111 9.64819 49.0833 10.3333 49.0833H33.5833"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M43.9165 43.9167C43.9165 45.287 44.4608 46.6011 45.4298 47.5701C46.3987 48.539 47.7129 49.0833 49.0832 49.0833C50.4535 49.0833 51.7676 48.539 52.7366 47.5701C53.7055 46.6011 54.2498 45.287 54.2498 43.9167C54.2498 42.5464 53.7055 41.2322 52.7366 40.2633C51.7676 39.2943 50.4535 38.75 49.0832 38.75C47.7129 38.75 46.3987 39.2943 45.4298 40.2633C44.4608 41.2322 43.9165 42.5464 43.9165 43.9167Z"
                                        stroke="#47B298" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M25.8335 33.5833V23.25H36.1668" stroke="#47B298" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M36.1668 33.5833L25.8335 23.25" stroke="#47B298" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_81_559">
                                        <rect width="62" height="62" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <div class="text-body font-weight-600 fs-5 mt-4">En-to-End Service
                        </div>
                        <p class="paragraph">
                            A full suite of services tailored to meet your unique needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding-bottom padding-top bg-main-hero">
    <div class="container">

        <h2 class="h2 text-white my-4" data-aos="fade-up">Contact Us and Get the Best<br class="d-none d-lg-block">
            Service on The Market</h2>
        <div class="d-flex justify-content-center">
            <a href="/contact" class="btn-primary" data-aos="fade-up" data-aos-duration="1000">
                Get started now
            </a>
        </div>
    </div>
</section>

<section class="py-5" id="partner">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 text-center mb-4 mb-lg-5">
                <h2 class="h2">Brands We Empower </h2>
            </div>
            <div class="col-lg-12 mb-3 mb-lg-0" data-aos="fade-up">
                <div class="logo-slider">
                    <div>
                        <?php 
                        $args = array( 'post_type' => 'partners');
                        $the_query = new WP_Query( $args ); 
                        ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php the_post_thumbnail('full',array("class"=>"logo-box")); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p>
                            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                        </p>
                        <?php endif; ?>

                    </div>
                    <div>
                        <?php 
                        $args = array( 'post_type' => 'partners' );
                        $the_query = new WP_Query( $args ); 
                        ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php the_post_thumbnail('full',array("class"=>"logo-box")); ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p>
                            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-weight-600 text-white text-left" data-aos="fade-up">Engage with our<br
                        class="d-none d-lg-block"> Experts! </h2>
            </div>
            <div class="col-lg-6 d-flex justify-content-lg-end" data-aos="fade-up">
                <div class="d-flex align-items-center gap-3">
                    <div>
                        <a href="/contact">
                            <svg width="90" height="91" viewBox="0 0 90 91" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="90" height="90" rx="45" fill="url(#paint0_linear_4_1745)" />
                                <g clip-path="url(#clip0_4_1745)">
                                    <g clip-path="url(#clip1_4_1745)">
                                        <g clip-path="url(#clip2_4_1745)">
                                            <path d="M60 30.5L43.5 47" stroke="white" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M60 30.5L49.5 60.5L43.5 47L30 41L60 30.5Z" stroke="white"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </g>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_4_1745" x1="0" y1="45.5" x2="90" y2="45.5"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0.12" stop-color="#47B298" />
                                        <stop offset="1" stop-color="#444B90" stop-opacity="0.92" />
                                    </linearGradient>
                                    <clipPath id="clip0_4_1745">
                                        <rect width="32" height="32" fill="white" transform="translate(29 29.5)" />
                                    </clipPath>
                                    <clipPath id="clip1_4_1745">
                                        <rect width="32" height="32" fill="white" transform="translate(29 29.5)" />
                                    </clipPath>
                                    <clipPath id="clip2_4_1745">
                                        <rect width="32" height="32" fill="white" transform="translate(29 29.5)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>

                    </div>
                    <div class="text-white">
                        <h3 class="fs-5">Connect With Us</h3>
                        <a href="mailto:contact@socialkapita.com" class="text-white">contact@socialkapita.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>