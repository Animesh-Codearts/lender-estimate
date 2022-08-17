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


?>
<section class="custom-inner-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-inner-banner-content text-center">
                    <div class="custom-inner-main-heading">
                     <?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
						if(get_the_content()!= '')
						{
							the_content();
						}
						else
						{
							echo "<h3>Content Coming Soon ...</h3>";
						}
					endwhile; ?>
				<?php endif; ?>
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



<?

get_footer();
