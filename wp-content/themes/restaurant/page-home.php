<?php
/*
Template Name: Главная
*/
?>
<?php
$text = carbon_get_the_post_meta('main_title');
if ($text) {
    $formatted_text = nl2br($text);
}
?>
<?php

$main_bg_id = carbon_get_post_meta(get_the_ID(), 'main_bg');
$main_bg_url = wp_get_attachment_url($main_bg_id);
$main_img_id = carbon_get_post_meta(get_the_ID(), 'main_img');
$main_img_url = wp_get_attachment_image_url($main_img_id, 'full');
$book_img_id = carbon_get_post_meta(get_the_ID(), 'book_img');
$book_img_url = wp_get_attachment_url($book_img_id);
?>
<?php get_header(); ?>
<style>
    .hero-header {
        background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url('<?php echo esc_url($main_bg_url); ?>');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .video {
        background: linear-gradient(rgba(15, 23, 43, .1), rgba(15, 23, 43, .1)), url('<?php echo esc_url($book_img_url); ?>');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft"><?php echo $formatted_text; ?></h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><?php echo carbon_get_post_meta( get_the_ID(), 'main_subtitle' ); ?></p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"><?php echo carbon_get_post_meta( get_the_ID(), 'main_btn' ); ?></a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="<?php echo esc_url($main_img_url); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
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
                $cards = array_slice($cards, 0, 4);?>
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
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo get_template_directory_uri(); ?>/verstka/img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo get_template_directory_uri(); ?>/verstka/img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo get_template_directory_uri(); ?>/verstka/img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo get_template_directory_uri(); ?>/verstka/img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                        <p class="mb-4"><?php echo carbon_get_post_meta( get_the_ID(), 'about_descr' ); ?></p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?php echo carbon_get_post_meta( get_the_ID(), 'about_digit_left' ); ?></h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?php echo carbon_get_post_meta( get_the_ID(), 'about_digit_right' ); ?></h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo get_permalink(55); ?>">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
       <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <?php 
                $menu_sections = carbon_get_post_meta(get_the_ID(), 'items');
                if ($menu_sections) : 
                    foreach ($menu_sections as $index => $section) : 
                        $tab_index = $index + 1; // Adjust the index to start from 1
                ?>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 <?php echo $index == 0 ? 'ms-0 pb-3 active' : 'pb-3'; ?>" data-bs-toggle="pill" href="#tab-<?php echo $tab_index; ?>">
                                <div class="ps-3">
                                    <small class="text-body"><?php echo esc_html($section['items_subtitle']); ?></small>
                                    <h6 class="mt-n1 mb-0"><?php echo esc_html($section['items_title']); ?></h6>
                                </div>
                            </a>
                        </li>
                <?php endforeach; endif; ?>
            </ul>
            <div class="tab-content">
                <?php if ($menu_sections) : 
                    foreach ($menu_sections as $index => $section) : 
                        $tab_index = $index + 1; // Adjust the index to start from 1
                ?>
                        <div id="tab-<?php echo $tab_index; ?>" class="tab-pane fade show p-0 <?php echo $index == 0 ? 'active' : ''; ?>">
                            <div class="row g-4">
                                <?php 
                                if (!empty($section['items_menu_items'])) :
                                    foreach ($section['items_menu_items'] as $item) : ?>
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <?php if ($item['item_image']) : 
                                                    $image_url = wp_get_attachment_image_url($item['item_image'], 'thumbnail'); ?>
                                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php echo esc_url($image_url); ?>" alt="" style="width: 80px;">
                                                <?php endif; ?>
                                                <div class="w-100 d-flex flex-column text-start ps-4">
                                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                        <span><?php echo esc_html($item['item_title']); ?></span>
                                                        <span class="text-primary"><?php echo esc_html($item['item_price']); ?></span>
                                                    </h5>
                                                    <small class="fst-italic"><?php echo esc_html($item['item_description']); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; endif; ?>
                            </div>
                        </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form id='contactForm' action="<?php echo admin_url('admin-ajax.php?action=send_mail');?>">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6 w100p">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                          <option value="1">People 1</option>
                                          <option value="2">People 2</option>
                                          <option value="3">People 3</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                <?php
                // Получаем ID текущего поста
                $post_id = get_the_ID();
                // Получаем массив членов команды из мета-полей записи
                $team_members = carbon_get_post_meta($post_id, 'team');
                $team_members = array_slice($team_members, 0, 4);
                $delay = 0.1; // Начальное значение задержки анимации
                if ($team_members) {
                    foreach ($team_members as $member) { ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?php echo wp_get_attachment_image_url($member['item_image'], 'full'); ?>" alt="">
                                </div>
                                <h5 class="mb-0"><?php echo esc_html($member['person_name']); ?></h5>
                                <small><?php echo esc_html($member['person_position']); ?></small>
                                <div class="d-flex justify-content-center mt-3">
                                    <?php if ($member['person_facebook']) : ?>
                                        <a class="btn btn-square btn-primary mx-1" href="<?php echo esc_url($member['person_facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if ($member['person_twitter']) : ?>
                                        <a class="btn btn-square btn-primary mx-1" href="<?php echo esc_url($member['person_twitter']); ?>"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if ($member['person_instagram']) : ?>
                                        <a class="btn btn-square btn-primary mx-1" href="<?php echo esc_url($member['person_instagram']); ?>"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay += 0.2; // Увеличиваем задержку для следующего элемента
                    }
                }
                ?>
                </div>


            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php
                    $reviews = carbon_get_the_post_meta('reviews');
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