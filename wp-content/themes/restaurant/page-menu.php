<?php
/*
Template Name: Menu
*/
?>
<?php get_header(); ?>

<?php
$front_page_id = get_option('page_on_front');
?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>
</div>
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
                $menu_sections = carbon_get_post_meta($front_page_id, 'items');
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

<?php get_footer(); ?>