<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage lender
 */

?>



<footer class="footer-section">
    <div class="footer-main" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-section-background-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 align-self-end">
                    <div class="footer-content">
                        <div class="footer-logo">
                            <a href="<?php echo site_url();?>"><img src="<?php echo get_option('footer_logo'); ?>" alt=""></a>
                        </div>
                        <div class="footer-text">
                            <p class="demo"><?php echo get_option('messages'); ?></p>
                        </div>
                        <ul class="footer-socials d-flex align-items-center" role="list">
                            <li><a href="<?php echo get_option('facebook_url'); ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo get_option('twitter_url'); ?>"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="<?php echo get_option('linkedin_url'); ?>"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-content">

                        <div class="footer-heading">
                            <h5>useful links</h5>
                        </div>
                        <?php dynamic_sidebar('sidebar-usefull-links'); ?>
                    </div>                        
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-content">
                        <div class="footer-heading">
                            <h5>Our service</h5>
                        </div>
                        <?php dynamic_sidebar('sidebar-our-services'); ?>
                    </div>                        
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-content">
                        <div class="footer-heading">
                            <h5>contact us</h5>
                        </div>
                        <ul class="footer-text" role="list">
                            <li><a href="https://goo.gl/maps/MhTNRMi8bMChTMS49"><span class="demo"><i class="fa-solid fa-location-dot"></i></span><?php echo get_option('address'); ?></a></li>
                            <li><a href="mailto:<?php echo get_option('email'); ?>"><span class="demo"><i class="fa-solid fa-envelope"></i></span><?php echo get_option('email'); ?></a></li>
                            <li><a href="tel:<?php echo get_option('consult_number'); ?>"><span class="demo"><i class="fa-solid fa-phone"></i></span>Business Phone: <?php echo get_option('consult_number'); ?></a></li>
                        </ul>
                    </div>                        
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <div class="footer-text text-center">
                            <p class="demo">
                                <?php echo get_option('copyright'); ?> 
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
