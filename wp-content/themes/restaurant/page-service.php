<?php
/*
Template Name: Service
*/
?>
<?php get_header(); ?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
            </ol>
        </nav>
    </div>
</div>


    <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                    <h1 class="mb-5">Explore Our Services</h1>
                </div>
                <div class="row g-4">
                <?php
                // Получение массива карточек
                $cards = carbon_get_post_meta(24, 'sec2_cards');
                if ($cards) :
                // Ограничение до 4 карточек
                ?>
                <?php foreach ($cards as $card) : ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <h5><?php echo esc_html($card['sec2_card_title']); ?></h5>
                            <p><?php echo esc_html($card['sec2_card_text']); ?></p>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
            </div>
        </div>
      


<?php get_footer(); ?>