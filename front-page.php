<?php
    get_header();
?>

 <article class="container p-2">

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