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

    <header class="bg-stone-200 p-2 flex-col sm:flex-row flex justify-center items-center gap-6">
        <div class="">
            <div class="">
                <?php
                    if(function_exists("the_custom_logo")) {
                        $custom_logo_id = get_theme_mod("custom_logo");
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    } 
                ?>
            
                <img class="w-[64px] h-auto" src="<?php echo $logo[0] ?>">
                <h1 class="text-xl font-bold"><?php echo wp_get_document_title(); ?></h1>
                <p class="">Testing page for learn WordPress</p>
            </div>
        </div>
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'container' => '',
                        'items_wrap' => '<ul id="flex items-center" class="">%3$s</ul>'
                    )
                );
            ?>
    </header>

    