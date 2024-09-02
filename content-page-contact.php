<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cissabi
 */

$contact_page = get_fields(); // Retrieve all ACF fields for the current post/page

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="contact pt-5">
        <div class="container">
            <div class="row pb-5">
                
                <div class="col-md-4 details">
                    <div class="row">
                        <div class="col-4">
                            <span class="flaticon-location"></span>
                        </div>
                        <div class="col-8">
                            <h4>LOCATION</h4>
                            <p><?php echo esc_html($contact_page['office_location']); ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <span class="flaticon-smartphone"></span>
                        </div>
                        <div class="col-8">
                            <h4>PHONE</h4>
                            <a href="tel:<?php echo esc_attr($contact_page['office_phone_number']); ?>"><?php echo esc_html($contact_page['office_phone_number']); ?></a>
                        </div>
                    </div>
                    <div class="row border-0">
                        <div class="col-4">
                            <span class="flaticon-email"></span>
                        </div>
                        <div class="col-8">
                            <h4>Email</h4>
                            <a href="mailto:<?php echo esc_attr($contact_page['email']); ?>"><?php echo esc_html($contact_page['email']); ?></a>
                        </div>
                    </div>

                    <div class="row">
                        <ul class="list-inline d-flex socials justify-content-around w-100 mb-0">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 form">
                    <h4>Drop us a line</h4>
                    <?php echo do_shortcode('[contact-form-7 id="196" title="Contact Us"]'); ?>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               <?php echo($contact_page['office_location_map']); ?>
            </div>     
        </div>
        
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
