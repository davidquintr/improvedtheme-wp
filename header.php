<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        wp_head();
    ?>
</head>
<body>

    <header class="d-flex justify-content-center flex-column py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <?php
                    if(function_exists("the_custom_logo")) {
                        $custom_logo_id = get_theme_mod("custom_logo");
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    } 
                ?>
            
                <img class="mb-3 mx-auto logo w-25" src="<?php echo $logo[0] ?>">
                <h1><?php echo  get_bloginfo('name') ?></h1>
                <h2 class="fw-bolder"><?php the_title(); ?></h2>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
        </div>
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'container' => '',
                        'items_wrap' => '<ul id="" class="nav col-12 col-lg-auto me-lg-auto mb-2 gap-5 justify-content-center mb-md-0">%3$s</ul>'
                    )
                );
            ?>
    </header>

    