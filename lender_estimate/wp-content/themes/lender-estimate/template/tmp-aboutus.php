<?php
/**

 * Template Name: About Us

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
                        <h2><?php echo get_field('about_us_title'); ?></h2>
                  </div>
                  <nav aria-label="breadcrumb" class="custom-inner-breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><span class="demo"><i class="fa-solid fa-house-chimney"></i></span> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                  </nav>
               </div>
               
            </div>
      </div>
   </div>
</section> -->



<!--about_us_inner_starts-->

<?php $hero_about = get_field('about_inner'); ?>
<div class="about_us_inner">
   <div class="container">
      <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5 align-self-center">
               <div class="img_abt_inr">
                  <img src="<?php echo $hero_about['inner_image']; ?>" alt="">
               </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7">
               <div class="abt_inr_text">
               	<?php echo $hero_about['inner_text_1']; ?>                  
               </div>
            </div>
            
            <div class="col-12">
               <div class="abt_inr_text_two">
               	<?php echo $hero_about['inner_text_2']; ?>
               </div>
            </div>
      </div>
   </div>
</div>
<!--about_us_inner_ends-->

<!--about_us_inner_starts-->

<?php $why_best = get_field('why_best'); ?>
<div class="about_us_inner why_best">
   <div class="container">
      <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
               <div class="abt_inr_text">
               	<?php echo $why_best['why_best_details']; ?>
               </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 align-self-center">
               <div class="img_abt_inr">
                  <img src="<?php echo $why_best['why_best_image']; ?>" alt="">
               </div>
            </div>
      </div>
   </div>
</div>
<!--about_us_inner_ends-->

<!--how_it_works_section_starts-->
<?php $how_works = get_field('how_it_works'); ?>
<div class="how_it_works_section" style="background: url(<?php echo $how_works['works_background_image']; ?>);">
   <div class="container">
      <div class="portion">
            <div class="row">
               <div class="col-md-5 col-sm-12 col-lg-5">
                  <div class="com_image">
                           
                  </div>
               </div>
               <div class="col-md-7 col-sm-12 col-lg-7">
                  <div class="com_text">
                  	<?php echo $how_works['work_details_1']; ?>
                  </div>
                  <div class="ico_text_at">
                        <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-6">
                              <div class="at_i_box">
                                    <img src="<?php echo $how_works['work_details_2_icon']; ?>" alt="">
                                    <?php echo $how_works['work_details_2']; ?> 
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-12 col-lg-6">
                              <div class="at_i_box">
                                    <img src="<?php echo $how_works['work_details_3_icon']; ?>" alt="">
                                    <?php echo $how_works['work_details_3']; ?>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>
<!--how_it_works_section_ends-->

<!--why_shoose_us_section_inner_starts-->
<?php $choose_us = get_field('choose_us'); ?>
<div class="why_shoose_us_section">
   <div class="container">
      <div class="text_part">

            <h6><?php echo $choose_us['choose_us_title1']; ?></h6>
            <h2><?php echo $choose_us['choose_us_title2']; ?> </h2>
      </div>
      <div class="rai_box_section">
            <div class="carousel-wrap">
               <div class="owl-carousel owl-theme raisonssection">
               	<?php for($i=1; $i<=4; $i++) { ?>

                  <div class="item">
                        <div class="rai_box_slide">
                           <div class="icon_box">
                              <img src="<?php echo $choose_us['a_image_'.$i]; ?>" alt="">
                              <div class="numbr_box">
                                    <span>
                           <?php
									$num = $i;
									$num_padded = sprintf("%02d", $num);
									echo $num_padded; // returns 04
									?>	 
                                    </span>
                              </div>
                           </div>
                           <h3><?php echo $choose_us['a_title_'.$i]; ?></h3>
                           <p><?php echo $choose_us['a_description_'.$i]; ?></p>
                        </div>    
                  </div>
                <?php } ?>
               </div>
            </div>
      </div>
   </div>
</div>
<!--why_shoose_us_section_inner_ends-->



<?php
get_footer();