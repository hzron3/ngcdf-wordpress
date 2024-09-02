<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cissabi
 */

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
                            <p>Contituency Office Location, Nyandarua County Commissioners grounds
Olkalou-Gilgil Road
</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <span class="flaticon-smartphone"></span>
                        </div>
                        <div class="col-8">
                            <h4>PHONE</h4>
                            <a href="telto:"></a>
                        </div>
                    </div>
                    <div class="row border-0">
                        <div class="col-4">
                            <span class="flaticon-email"></span>
                        </div>
                        <div class="col-8">
                            <h4>Email</h4>
                            <a href="mailto:cdfolkalou@ngcdf.go.ke">cdfolkalou@ngcdf.go.ke</a>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.09131655272!2d36.368222221919254!3d-0.27360573926108395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1829b8e1f1bc200b%3A0xc99c9a687005570c!2sOl%20Kalou!5e0!3m2!1sen!2ske!4v1626866602181!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>     
        </div>
        
    </div>

</article><!-- #post-<?php the_ID(); ?> -->