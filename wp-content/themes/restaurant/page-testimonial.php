<?php
/*
Template Name: Testimonial
*/
?>

<?php
$front_page_id = get_option('page_on_front');
?>

<?php get_header(); ?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php
                    // $reviews = carbon_get_the_post_meta('reviews');
                    $reviews = carbon_get_post_meta( $front_page_id, 'reviews' );
                    if ($reviews) {
                        foreach ($reviews as $review) {
                            $person_descr = $review['person_descr'];
                            $person_name = $review['person_name'];
                            $person_profession = $review['person_profession'];
                            $person_image_id = $review['person_image'];
                            $person_image_url = wp_get_attachment_image_url($person_image_id, 'thumbnail');
                            ?>
                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p><?php echo esc_html($person_descr); ?></p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo esc_url($person_image_url); ?>" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1"><?php echo esc_html($person_name); ?></h5>
                                        <small><?php echo esc_html($person_profession); ?></small>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



<?php get_footer(); ?>