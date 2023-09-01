<?php
    get_header();
?>

 <article class="p-5">
    <div class="text-center">
        <p class="color-blue text-[20px] font-[600]">FROM THE</p>
        <h2 class="font-black text-[42px]">NEWSROOM</h2>
    </div>
    <ul class="flex gap-2 justify-center p-4 flex-wrap">
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
   the_posts_pagination( );
 ?>

<?php
    get_footer();
?>