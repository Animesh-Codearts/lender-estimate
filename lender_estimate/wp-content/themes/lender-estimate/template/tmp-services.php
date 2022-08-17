<?php
/**

 * Template Name: Program

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
                        <h2><?php echo $hero_title = get_field('service_title'); ?></h2>
                    </div>
                    <nav aria-label="breadcrumb" class="custom-inner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><span class="demo"><i class="fa-solid fa-house-chimney"></i></span> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mortgage Loans</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section> -->


<section class="custom-inner-services custom-pad">
    <div class="container">
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
                     'post_type' => 'cpt_programs',
                     'post_status' => 'publish',
                     'suppress_filters' => true
                    );
                    $banners = wp_get_recent_posts( $args, ARRAY_A );
                    foreach ( $banners as $banner ) {
                    	//print_r($banner);



                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $banner[ 'ID' ] ), 'single-post-thumbnail' );
                       // print_r($banner);

            ?>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $image[0]; ?>" alt="Auto Car Loan">
                        <a href="<?php echo get_the_permalink( $banner['ID'] ); ?>"></a>
                    </div>
                    <div class="service-card-content">
                        <div class="service-card-content-inner">
                            <div class="service-card-icon">
                                <i class="icon-car"></i>
                            </div>
                            <h3 class="service-card-title">
                                <a href="<?php echo get_the_permalink( $banner['ID'] ); ?>"><?php echo $banner[ 'post_title' ] ; ?></a>
                            </h3>
                            <p class="service-card-text"><?php echo get_the_excerpt( $banner['ID'] ); ?></p>
                            <a href="<?php echo get_the_permalink( $banner['ID'] ); ?>" class="service-card-link">
                                <i class="fa fa-angle-right"></i>
                            </a>
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


<?php
get_footer();