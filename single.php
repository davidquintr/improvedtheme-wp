<?php
    get_header();
?>

 <article class="container p-2">
    <header class="container">
        <p><?php the_tags( ); ?></p>
        <p><?php echo get_the_date(); ?></p>

    </header>


    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
    ?>
    
 </article>

<?php
    get_footer();
?>