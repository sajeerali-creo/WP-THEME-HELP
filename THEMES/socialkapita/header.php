<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<!-- CSS frame work -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- main-stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <!-- icon font -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- scroll animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="main-header">
    <!-- desktop -->
    <div class="desk-header w-100 d-none d-xl-block" id="home">
        <div class="d-flex justify-content-between align-items-center">
            <a href="https://www.socialkapita.com/" class="barnd">
                <img src="https://socialkapita.com/wp-content/themes/socialkapita/assets/img/logo.svg" alt="">
            </a>
            <div>
                <ul class="main-menu">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/#about-us">About Us</a>
                    </li>
                    <li>
                        <a href="/#service">Services</a>
                    </li>
                    <li>
                        <a href="/#team">Team</a>
                    </li>
                    <li>
                        <a href="/#partner">Partners</a>
                    </li>
                    <li>
                        <a href="/market-insights">Market Insights</a>
                    </li>
                   
                </ul>
            </div>
            <a href="/contact" class="contact-btn d-flex gap-2">
                Contact Us
                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_30_3336)">
                        <g clip-path="url(#clip1_30_3336)">
                            <g clip-path="url(#clip2_30_3336)">
                                <path
                                    d="M1.00006 3.58716H12.0001M12.0001 3.58716L7.00006 -0.912842M12.0001 3.58716L7.00006 8.5872"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </g>
                    </g>
                    <defs>
                        <clipPath id="clip0_30_3336">
                            <rect width="13" height="8" fill="white" />
                        </clipPath>
                        <clipPath id="clip1_30_3336">
                            <rect width="13" height="8" fill="white" />
                        </clipPath>
                        <clipPath id="clip2_30_3336">
                            <rect width="13" height="12" fill="white" transform="translate(6.10352e-05 -2)" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
    </div>

    <!-- mobile -->
    <div class="mob-header py-3 d-xl-none">
        <div class="container-xl d-flex justify-content-between">
            <a href="https://www.socialkapita.com/" class="barnd">
                <img src="https://socialkapita.com/wp-content/themes/socialkapita/assets/img/logo.svg" alt="">
            </a>
            <a class="menu-mob" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <i class="ri-menu-5-line"></i>
            </a>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">

            <div class="offcanvas-body">
                <ul class="main-menu">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/#about-us">About Us</a>
                    </li>
                    <li>
                        <a href="/#service">Services</a>
                    </li>
                    <li>
                        <a href="/#team">Team</a>
                    </li>
                    <li>
                        <a href="/#partner">Partners</a>
                    </li>
                    <li>
                        <a href="/market-insights">Market Insights</a>
                    </li>
                   
                </ul>
            </div>

            <a href="/contact" class="contact-btn d-flex gap-2">
                 Contact Us
                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_30_3336)">
                        <g clip-path="url(#clip1_30_3336)">
                            <g clip-path="url(#clip2_30_3336)">
                                <path
                                    d="M1.00006 3.58716H12.0001M12.0001 3.58716L7.00006 -0.912842M12.0001 3.58716L7.00006 8.5872"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </g>
                    </g>
                    <defs>
                        <clipPath id="clip0_30_3336">
                            <rect width="13" height="8" fill="white" />
                        </clipPath>
                        <clipPath id="clip1_30_3336">
                            <rect width="13" height="8" fill="white" />
                        </clipPath>
                        <clipPath id="clip2_30_3336">
                            <rect width="13" height="12" fill="white" transform="translate(6.10352e-05 -2)" />
                        </clipPath>
                    </defs>
                </svg>
            </a>

        </div>
    </div>
    </div>
</header>