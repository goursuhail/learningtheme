<?php
/** The template for displaying all pages */

get_header();


        while (have_posts()):
            the_post();
?>
            <article>
                <div>
                    <?php wp_title(); ?>
                </div>
                <div>
                    <h1><?php the_title(); ?></h1>
                    <div><p><?php the_date(); ?>   by  <?php the_author(); ?></p></div>
                    <div>
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <div>
                        <?php

                        if (comments_open() || get_comments_number()):
                            comments_template();
                        endif;

                        ?>
                    </div>
                </div>
            </article>



<?php




       wp_link_pages(

               array(
                       'before' => '<div>' . __('pages:'),
                        'after' => '</div>'
               )
       );
        endwhile;
get_footer();

?>