<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage lender
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> <?php lender_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_option('site_name'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    
    <!-- ================= HEADER SECTION ================= -->
    <header>
        <div class="header-top">      
            <div class="container ">
              <div class="header-top-content d-flex justify-content-between">
                <ul role="list" class="d-flex">
                  <li class="d-flex align-items-center">
                      <a href="tel:<?php echo get_option('consult_number'); ?>"> <span class="header-top-icon-left" ><i class="fa-solid fa-phone"></i></span><p class="demo"> <?php echo get_option('consult_number'); ?> </p></a>
                   
                  </li>
                  <li class="d-flex align-items-center">
                      <a href="mailto:<?php echo get_option('email'); ?>"><span class="header-top-icon-left"><i class="fa-solid fa-envelope"></i></span><p class="demo"><?php echo get_option('email'); ?></p></a>
                      
                    </li>
                </ul>
                <ul role="list" class="d-flex header-top-socials">
                  <li><a href="<?php echo get_option('facebook_url'); ?>" class="header-top-icon-right"><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href="<?php echo get_option('twitter_url'); ?>" class="header-top-icon-right"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a href="<?php echo get_option('linkedin_url'); ?>" class="header-top-icon-right"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>     
        </div>
        <div class="header-bottom">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="<?php echo site_url();?>">
                <img src="<?php echo get_option('logo'); ?>" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-dash"></span>
                <span class="hamburger-dash"></span>
                <span class="hamburger-dash"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 

                wp_nav_menu( array(
                         'menu'              => "Main_menu",
                         'menu_class'        => "navbar-nav custom-navbar-nav align-items-center mb-2 mb-lg-0",
                         'container_class'   => '',

                        ) );
                ?>
              </div>
            </div>
          </nav>
        </div>
    </header>


<?php if(!is_front_page()) { ?>
      <?php if(get_the_post_thumbnail_url()!='') {?>

<section class="custom-inner-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">

  <?php } else { ?>
        <section class="custom-inner-banner" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/loan-program-inner-banner-bg.jpg);">
      <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-inner-banner-content text-center">
                    <div class="custom-inner-main-heading">
                     <?php $secondary1 = get_field('secondary_title_onoff');
                           $secondary2 = get_field('secondary_page_title');
                     //print_r($secondary2);

                     ?>
                      <?php if($secondary1 == true || $secondary1 != 0 && is_null($secondary2) ) {
                        echo '<h2>'. $secondary2 .'</h2>';
                      }
                      else {
                        echo '<h2>'. get_the_title() .'</h2>';
                      }

                      ?>
                       <!--  <h2><?php echo get_the_title(); ?></h2> -->
                    </div>
                    <nav aria-label="breadcrumb" class="custom-inner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><span class="demo"><i class="fa-solid fa-house-chimney"></i></span> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section>
 <?php } ?>
