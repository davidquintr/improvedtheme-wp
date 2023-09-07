
<li class="bg-white hover:brightness-95 active:scale-95 transition-all">
    <a class="flex flex-col w-[250px] h-[290px]" href="<?php the_permalink()?>">
        <img class="w-full h-auto" src="<?php the_post_thumbnail_url() ?>">
        <div class="font-article py-[22px] px-[28px] max-h-[calc(100%_-_50px)] overflow-hidden">
            <h3 class="article-title font-[700] color-[#385CAD] uppercase"><?php the_title() ?></h3>
            <p class="font-[700] pt-2"><?php echo substr(get_the_excerpt(),0, 65)."..." ?></p>
        </div>
    </a>
</li>`