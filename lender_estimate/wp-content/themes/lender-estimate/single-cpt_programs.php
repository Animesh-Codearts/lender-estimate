<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage lender
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
  the_post();

?>



<!-- <section class="custom-inner-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-inner-banner-content text-center">
                    <div class="custom-inner-main-heading">
                        <h2><?php echo get_the_title(); ?></h2>
                    </div>
                    <nav aria-label="breadcrumb" class="custom-inner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><span class="demo"><i class="fa-solid fa-house-chimney"></i></span> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Conventional Loans</li>
                        </ol>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
</section> -->

<div class="custom-loan-inner-main custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="loan-inner-sidebar">
                    <div class="loan-inner-sidebar-item loan-inner-sidebar-item-menu">
                        <h3>Loan programs:</h3>
                        <ul class="loan-inner-sidebar-menu">
                <?php
               		$pageID = get_the_ID();
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
                     //print_r($banners);
                     foreach ( $banners as $banner ) {



                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $banner[ 'ID' ] ), 'single-post-thumbnail' );
                          // print_r($banner);
               	?>
                            <li class="<?php if($pageID == $banner['ID']){ echo 'active';}?>"><a href="<?php echo get_the_permalink($banner['ID']); ?>"><span class="tab_btn"><?php echo $banner[ 'post_title' ] ; ?></span></a></li>

                <?php
                  
                    }
                ?>
                        </ul>
                    </div>
                    <div class="loan-inner-sidebar-item loan-inner-sidebar-item-contact">
                        <div class="loan-inner-sidebar-bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/conventional-loan-quick-access-bg.png);">
                        <div class="loan-inner-sidebar-contact">
                            <div class="loan-inner-sidebar-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <h3 class="loan-inner-sidebar-title"><?php echo get_field('info_title_1'); ?></h3>
                            <hr class="loan-inner-sidebar-separator">
                            <p class="loan-inner-sidebar-tagline"><?php echo get_field('info_title_2'); ?></p>
                            <a class="loan-inner-sidebar-phone" href="tel:<?php echo get_option('expert_number'); ?>"><?php echo get_option('expert_number'); ?></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="loan-inner-right-content">
                    <div class="loan-inner-right-content-top-img">
                        <img src="<?php echo get_field('loan_image_1'); ?>" alt="">
                    </div>
                    <div class="loan-inner-right-content-top-text">
                        <h3><?php echo get_the_title(); ?></h3>
                         <?php the_content(); ?>
                    </div>
                    <div class="loan-inner-benefits-content d-flex align-items-center mt-4">
                        <div class="loan-benefits-image">
                            <img src="<?php echo get_field('loan_image_2'); ?>" alt="">
                        </div>
                        <div class="loan-benefits-text">
                            <h3>Loan benefits</h3>
                            <ul class="list-unstyled ml-0 loan-details-list">
                                <?php echo get_field('featuers_lists'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
endwhile; // End of the loop.

get_footer();
