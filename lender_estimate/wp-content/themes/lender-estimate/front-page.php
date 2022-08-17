<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage lender
 */
get_header(); ?>

<?php
    $hero_inner= get_field('banner');
    if($hero_inner['section_enabled']){
?>

<section class="hero-banner">
  <div id="heroBannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
    <div class="carousel-inner">
     
      <?php $inner_boxes = $hero_inner['all_banners']; 
      $j=1;

      ?>
      <?php foreach ($inner_boxes as $eachinner) { ?>
      <div class="carousel-item <?php if($j == 1){ echo 'active';}?>">
        <img src="<?php echo get_the_post_thumbnail_url($eachinner); ?>" class="d-block w-100" alt="Landscape scenic banner">
        <div class="carousel-caption">
          
          <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 align-self-center">
                   <div class="hero-banner-left-content">
                    <div class="hero-banner-text">
                        <h2 class="main-heading"><?php echo get_the_title($eachinner); ?></h2>                        
                    </div>
                    <div class="hero-banner-cta">
                        <a href="<?php echo get_field('banner_button',$eachinner); ?>" class="custom-button"><span class="demo">Apply now </span></a>
                    </div>
                   </div>
                </div>

            </div>
          </div>
        </div>
      </div>
      <?php
           $j++;
         }
      ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <div class="hero-banner-right-content hero_banner_form_right align-self-center">
      <div class="hero-banner-form-wrap">
          <div class="hero-banner-form-heading">
              <h4 class="form-heading"> <?php echo $form_title= $hero_inner['form_title']; ?></h4>
              <p class="demo"><?php echo $form_details= $hero_inner['form_detail']; ?></p>
          </div>
          <div class="hero-banner-form-body">
            <?php 
             $hero_form= $hero_inner['banner_form'];
             echo do_shortcode($hero_form);
            ?>
          </div>
      </div>
  </div>
  </div>
</section>

<?php } ?>

<?php
    $hero_welcome = get_field('welcome');
    if($hero_welcome['section_enabled']){
?>

<section class="welcome-to-section custom-pad" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/welcome-to-section-background-image.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-11 text-center m-auto">
              <div class="custom-heading">
                <h6 class="mb-2"><?php echo $hero_welcome['welcome_title1']; ?></h6>
                <h2><?php echo $hero_welcome['welcome_title2']; ?></h2>
                
              </div>
              <div class="welocome-to-heading-text">
                <p class="demo"><?php echo $hero_welcome['welcome_details']; ?></p>
              </div>
            </div>
          </div>
        <div class="welcome-to-content">
            <div class="row">
                <div class="col-lg-10 mx-auto px-lg-5">
                    <div class="row">
                      <?php for($i=1; $i<=3; $i++) { ?>
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <img src="<?php echo $hero_welcome['a_image_'.$i]; ?>" class="card-img-top" alt="Get pre-qualified lender services icon">
                                <div class="card-body">
                                  <h5 class="card-title"><?php echo $hero_welcome['a_title_'.$i]; ?></h5>
                                  <p class="card-text"><?php echo $hero_welcome['a_description_'.$i]; ?></p>
                                  <a href="<?php echo $hero_welcome['a_link_'.$i]; ?>" class="custom-button"><span class="demo">learn more</span></a>
                                </div>
                              </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>

<?php
    $hero_about = get_field('about');
    if($hero_about['section_enabled']){
?>

<section class="about-section custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12 pe-lg-5 align-self-center">
        <div class="about-section-left-content">
          <div class="about-section-left-img-top d-flex align-items-center mb-4 justify-content-between">
            <div class="top-image-1 ">
              <img src="<?php echo $hero_about['image1']; ?>" alt="">
            </div>
            <div class="top-image-2">
              <img src="<?php echo $hero_about['image2']; ?>" alt="">
            </div>
            
          </div>
          <div class="about-section-left-img-bottom">
            <img src="<?php echo $hero_about['image3']; ?>" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 ms-lg-4 col-md-12 ps-lg-0 align-self-center">
        <div class="about-section-right-content">
          <div class="custom-heading">
            <h6 class="mb-2"><?php echo $hero_about['about_title1']; ?></h6>
            <h2><?php echo $hero_about['about_title2']; ?></h2>
          </div>
          <div class="about-section-text">
            <?php echo $hero_about['about_detail']; ?>
          </div>
          <div class="about-section-button">
            <a href=" <?php echo $hero_about['about_link']; ?>" class="custom-button"><span class="demo">learn more</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php } ?>
<?php
    $hero_services = get_field('services');
    if($hero_services['section_enabled']){
?>

<section class="our-services-section custom-pad" >
  
  <div class="container-fluid">    
    <div class="row">
      <div class="col-lg-9 col-md-12 ps-lg-0 p-0">
        <div class="our-services-section-left custom-pad" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/services.png);">
          <div class="col-lg-8 offset-lg-2 col-11 m-auto">
            <div class="our-services-left-content">
              <div class="custom-heading">
                <h6 class="mb-2"><?php echo $hero_services['services_title_1']; ?></h6>
                <h2><?php echo $hero_services['services_title_2']; ?></h2>
              </div>
              <ul class="our-services-left-list">
                <?php $all_services= $hero_services['allservices']; ?>
                <?php foreach ($all_services as $services) { ?>
                <li>
                  <div class="services-left-list-wrap">
                    <div class="icon">
                      <img src="<?php echo get_field('service_icon',$services); ?>" alt="">
                    </div>
                    <div class="heading">
                      <h5><?php echo get_the_title($services); ?></h5>
                    </div>
                    <div class="text">
                      <p class="demo">
                        <?php echo get_the_excerpt($services); ?>
                      </p>
                    </div>
                  </div>
                </li>
                 <?php  }  ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="our-services-section-right">
        <div class="video-box">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/our-mortgage-services-section-thumbnail-image.png" alt="A Smiling man wearing suits">
          <a class="video-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="demo"><i class="fa-solid fa-circle-play"></i></span>
          </a>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <?php echo $hero_services['service_video']; ?>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
    
  </div>
</section>
<?php } ?>

<!-- DUPLICATE SECTION "MORTGAGE LOAN SECTION" -->
<?php
    $hero_programs = get_field('programs');
    if($hero_programs['section_enabled']){
?>
<section class="welcome-to-section mortgage-loan-section custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-11 text-center m-auto">
              <div class="custom-heading">
                <h6 class="mb-2"><?php echo $hero_programs['program_title_1']; ?></h6>
                <h2><?php echo $hero_programs['program_title_2']; ?></h2>
                
              </div>
              
            </div>
          </div>
        <div class="welcome-to-content">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                   <?php $all_programs= $hero_programs['allprograms']; ?>
                    <?php foreach ($all_programs as $programs) { ?>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card">
                                <img src="<?php echo get_the_post_thumbnail_url($programs); ?>" class="card-img-top" alt="Get pre-qualified lender services icon">
                                <div class="card-body">
                                  <h5 class="card-title"><?php echo get_the_title($programs); ?></h5>
                                  <p class="card-text"><?php echo $text= wp_trim_words(get_the_excerpt($programs), $num_words = 8 ); ?></p>
                                  <a href="<?php echo get_the_permalink($programs);?>" class="custom-button"><span class="demo">learn more</span></a>
                                </div>
                              </div>
                        </div>
                        <?php  }  ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php
    $hero_loans = get_field('loan_programs');
    if($hero_loans['section_enabled']){
?>
<section class="load-section custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="custom-loan-program-content">
          <div class="custom-heading"> <h6><?php echo $hero_loans['loan_title_1']; ?></h6>
            <h2><?php echo $hero_loans['loan_title_2']; ?></h2>
          </div>
        </div>
        <ul class="loan-prog-list-ul">
          <?php $all_loans= $hero_loans['allloans']; ?>
          <?php foreach ($all_loans as $loans) { ?>
          <li><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/load-section-tick-icon.png" alt=""></span><?php echo get_the_title($loans); ?></li>
          <?php  }  ?>
        </ul>
        <a href="<?php echo $hero_loans['loans_link']; ?>" class="custom-button"><span class="demo">learn more</span></a> </div>
    </div>
  </div>
  <div class="loan-prog-img-map"> <img src="<?php echo $hero_loans['loans_image']; ?>" alt=""> </div>
</section>
<?php } ?>


<?php
    $hero_reviews = get_field('reviews');
    if($hero_reviews['section_enabled']){
?>

<section class="custom-testimonials custom-pad" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tes-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-10 text-center m-auto">
          <div class="custom-heading">
            <h6 class="mb-4"><?php echo $hero_reviews['reviews_title_1']; ?></h6>
            <h2><?php echo $hero_reviews['reviews_title_2']; ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="custom-tes-owl" class="owl-carousel owl-theme">
            <?php $all_reviews= $hero_reviews['allreviews']; ?>
            <?php foreach ($all_reviews as $reviews) { ?>

            <div class="item tes-item-wrap">
              <div class="tetimonials-content">
                <p class="demo"><?php echo get_the_excerpt($reviews); ?></p>
              </div>
              <div class="tetimonials-client">
                <div class="d-flex">
                  <div class="flex-shrink-0 client-img"> <img src="<?php echo get_the_post_thumbnail_url($reviews); ?>" alt="Client Image 1"> </div>
                  <div class="flex-grow-1 ms-3 client-deg">
                    <h4><?php echo get_the_title($reviews); ?></h4>
                    <p class="demo"><?php echo get_field('designation',$reviews); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php  }  ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>




<?php
get_footer();