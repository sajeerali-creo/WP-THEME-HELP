<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<footer class="padding-bottom padding-top text-center border-top">
    <div class="container-xl">
        <a href="index.html" class="barnd" data-aos="fade-up">
            <img src="https://socialkapita.com/wp-content/themes/socialkapita/assets/img/logo-footer.svg" alt="">
        </a>
        <ul class="main-menu py-5 d-flex flex-lg-row flex-column" data-aos="fade-up">
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
                <a href="/#partner">Partner</a>
            </li>
            <li>
                <a href="/market-insights">Market Insights</a>
            </li>
            <li>
                <a href="/contact">Contact Us</a>
            </li>
        </ul>
        <div class="social gap-3 d-flex align-items-center justify-content-center mb-5" data-aos="fade-up">

            <a href="https://www.linkedin.com/company/social-kapita
            ">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="23" cy="23" r="23" fill="#3E5064" />
                    <path d="M18 21V28" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M22 24V28M22 24C22 22.3431 23.3431 21 25 21C26.6569 21 28 22.3431 28 24V28M22 24V21"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18.008 18H17.999" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M13.5 23C13.5 18.5217 13.5 16.2825 14.8912 14.8912C16.2825 13.5 18.5217 13.5 23 13.5C27.4783 13.5 29.7175 13.5 31.1088 14.8912C32.5 16.2825 32.5 18.5217 32.5 23C32.5 27.4783 32.5 29.7175 31.1088 31.1088C29.7175 32.5 27.4783 32.5 23 32.5C18.5217 32.5 16.2825 32.5 14.8912 31.1088C13.5 29.7175 13.5 27.4783 13.5 23Z"
                        stroke="white" stroke-width="1.5" stroke-linejoin="round" />
                </svg>

            </a>

        </div>
        <div class="text-center w-100 fs-6 opacity-50">
            Copyright © 2024, Social Kapita. Designed with <a href="https://www.behance.net/creotopi"
                target="_blank" class="text-body">Creotopi</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".desk-header").addClass("fix-tp");
    } else {
        $(".desk-header").removeClass("fix-tp");
    }
});
$(".main-menu li a").click(function(){
    $('.offcanvas').offcanvas('hide');
});
</script>

</body>
</html>
