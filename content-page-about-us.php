<?php 
    $about_us_page = get_field('about_us_content'); 

    if($about_us_page): 
        ?>
            <section class="about-us-inner section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3></h3>
                            <div class="about-page-section">
                                <?php echo $about_us_page['about_us_content']; ?>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <img class="img-fluid about-us-bg" src="<?php echo $about_us_page['background_image']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>
        <?php 
    endif; 
?>

<section class="access-cdf-services section-padding text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4 class="m-0">Access NG-CDF Information on your Mobile</h4>
            </div>
            <div class="col-md-7">
                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                   <li><img class="img-fluid" src="<?php echo wp_get_attachment_url('80', 'full'); ?>"></li>
                   <li><a href="https://play.google.com/store/apps/details?id=com.ujuzicode.ngcdf&hl=en" target="_blank"><img class="img-fluid" src="<?php echo wp_get_attachment_url('82', 'full'); ?>"></a></li>
                    <li><img class="img-fluid" src="<?php echo wp_get_attachment_url('81', 'full'); ?>"></li>
                </ul>          
             </div>
        </div>
    </div>
</section>
<section class="const section-padding">
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <h3 class="section-title">County Assembly Wards in :</h3>
        </div>
    </div>
    &nbsp; 
    <div class="row wards">
            <?php 
                $const_wards = get_field('county_assembly_wards_group');

                $repeater = $const_wards['county_assembly_wards']; 

               if($repeater): 
                    foreach($repeater as $item): 
                        ?>
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <h5><?php echo $item['heading']; ?></h5>
                                        <?php echo $item['ward_content']; ?>
                                    </div>
                                </div>
                            </div>
                           
                        <?php 
                    endforeach; 
               endif; 
            ?>
    </div>
</div>
</section>
