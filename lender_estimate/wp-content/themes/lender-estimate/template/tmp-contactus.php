<?php
/**

 * Template Name: Contact Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage lender

 */
get_header(); ?>

<!-- <section class="custom-inner-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-inner-banner-content text-center">
                    <div class="custom-inner-main-heading">
                        <h2>Get In Touch</h2>
                    </div>
                    <nav aria-label="breadcrumb" class="custom-inner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><span class="demo"><i class="fa-solid fa-house-chimney"></i></span> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section> -->



<!--conatct_page_starts-->

<?php $contact_us = get_field('contact_box'); ?>
<div class="conatct_page">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact_box">
                    <div class="img_icon">
                        <img src="<?php echo $contact_us['a_image_1']; ?>" alt="">
                    </div>
                    <h3><?php echo $contact_us['a_title_1']; ?></h3>
                    <h6><a href="tel:<?php echo get_option('consult_number'); ?>"><?php echo get_option('consult_number'); ?> </a></h6>
                </div>
            </div>


           <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact_box">
                    <div class="img_icon">
                        <img src="<?php echo $contact_us['a_image_2']; ?>" alt="">
                    </div>
                    <h3><?php echo $contact_us['a_title_2']; ?></h3>
                    <h6><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></h6>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="contact_box">
                    <div class="img_icon">
                        <img src="<?php echo $contact_us['a_image_3']; ?>" alt="">
                    </div>
                    <h3><?php echo $contact_us['a_title_3']; ?></h3>
                    <h6><?php echo get_option('address'); ?></h6>
                </div>
            </div> 
        </div>
    </div>
</div>
<!--conatct_page_ends-->

<!--contact_form_starts-->
<div class="contact_form_img">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/services.png" alt="">
</div>
<div class="contact_form">
    <div class="container">
        <div class="text_contact">
        	<?php $hero_form= get_field('contact_form'); ?>
            <h3><?php echo $hero_form['contact_title']; ?></h3>
        </div>    
        <div class="form_box">
        	<?php 
             $form= $hero_form['form'];
             echo do_shortcode($form);
            ?>
        </div>
    </div>
</div>
<!--contact_form_ends-->

<!--map_section_starts-->
<div class="map_section">
	<?php echo $map = get_field('map'); ?>
</div>
<!--map_section_ends-->



<?php
get_footer();