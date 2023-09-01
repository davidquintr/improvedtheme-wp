<?php
    get_header();
?>

 <article class="">

    <ul class="flex gap-2">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    get_template_part('template-parts/content','archive');
                }
            }
        ?>
    </ul>

 </article>

<?php
    get_footer();
?>