<?php
    get_header();
?>

 <article class="container p-2">
    <header class="container p-5">
        <h2><?php echo get_the_date(); ?></h2>
        <div class="tags">
            <?php the_tags('<span class="tag"><i class="fa-solid fa-tag me-2"></i>','</span><span class="tag"><i class="fa-solid fa-tag me-2"></i>','</span>' ); ?>
        </div>
        <p><?php comments_number() ?></p>
    </header>


    <?php
        the_content();

    ?>

    <?php
        comments_template();
    ?>

<?php
    get_footer();
?>