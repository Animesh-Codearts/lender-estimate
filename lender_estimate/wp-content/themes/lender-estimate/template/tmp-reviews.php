<?php
/**

 * Template Name: Reviews

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
                        <h2><?php echo $hero_title = get_field('head_title_1'); ?></h2>
                    </div>
                    <nav aria-label="breadcrumb" class="custom-inner-breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html"><span class="demo"><i class="fa-solid fa-house-chimney"></i></span> Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Google Reviews</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section> -->



<!--Google_Reviews_starts-->
<section class="custom-testimonials custom-pad" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tes-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-10 text-center m-auto">
          <div class="custom-heading">
            <h6 class="mb-4"><?php echo $hero_title = get_field('head_title_1'); ?></h6>
            <h2><?php echo $hero_title = get_field('head_title_2'); ?></h2>
          </div>
        </div>
      </div>
      <div class="row">

      	            <?php
                    $args = array(
                     'numberposts' => -1,
                     'offset' => 0,

                     'orderby' => 'post_date',
                     'order' => 'ASC',
                     'include' => '',
                     'exclude' => '',
                     'meta_key' => '',
                     'meta_value' => '',
                     'post_type' => 'cpt_reviews',
                     'post_status' => 'publish',
                     'suppress_filters' => true
                    );
                    $banners = wp_get_recent_posts( $args, ARRAY_A );
                    foreach ( $banners as $banner ) {
                    	//print_r($banner);



                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $banner[ 'ID' ] ), 'single-post-thumbnail' );
                       // print_r($banner);

                    ?>

<div class="col-lg-6">
    <div class="tetimonials-content testi_inr_contnt">
        <p class="demo"><?php echo $banner[ 'post_content' ] ; ?></p>
        <div class="tetimonials-client">
            <div class="d-flex d_inr">
                <div class="flex-shrink-0 client-img client_img_inr"> <img
                        src="<?php echo $image[0]; ?>" alt="Client Image 1">
                </div>
                <div class="flex-grow-1 ms-3 client-deg client_deg_inr">
                    <h4><?php echo $banner[ 'post_title' ] ; ?></h4>
                    <h6 class="demo"><?php echo get_field('designation', $banner ); ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
            <?php
                 }
            ?>
          
        </div>
      </div>
</section>
<!--Google_Reviews_ends-->


<?php
get_footer();