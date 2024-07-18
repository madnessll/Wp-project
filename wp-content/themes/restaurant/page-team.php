<?php
/*
Template Name: Team
*/
?>
<?php
$front_page_id = get_option('page_on_front');
?>

<?php get_header(); ?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
            </ol>
        </nav>
    </div>
</div>
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
                $post_id = get_option('page_on_front');
                // Получаем массив членов команды из мета-полей записи
                $team_members = carbon_get_post_meta($post_id, 'team');
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

<?php get_footer(); ?>