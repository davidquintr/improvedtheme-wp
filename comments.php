<article class="comment-area">

    <header>
        <h2>
            <?php
            if (!have_comments()) {
                echo "Deja un comentario";
            } else {
                echo get_comment_count() . "comentarios";
            }

            ?>
        </h2>

    </header>

    <?php

        wp_list_comments(
            array(
                'avatar_size' => 120,
                'style' => 'div',
            )
        );

    ?>

    <?php

        if(comments_open( )){
            comment_form(
                array(
                    'class-form' => '',
                    'title_reply_before'=> '<h2></h2>',
                    'title_reply_after' => '</h2>'
                )
            );
        }

    ?>


</article>