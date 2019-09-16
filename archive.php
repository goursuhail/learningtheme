<?php

get_header(); ?>



    <?php  if (have_posts()): ?>


        <header>
            <h2><?php the_archive_title(); ?></h2>
            <p><?php the_archive_description(); ?></p>
        </header>




<?php
    while (have_posts()):
        the_post();
        ?>
        <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <p><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | posted in

                    <?php


                    $categories = get_the_category();
                    $separator = ", ";
                    $output = "";

                    if ($categories){

                        foreach ($categories as $category){


                            $output .= '<a href="' .get_category_link($category->term_id). '">' .$category->cat_name. '</a>'. $separator;
                        }

                        echo trim($output, $separator);

                    }


                    ?>

                </p>
            </div>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php
    endwhile;

else :

    echo '<p>no content found</p>';
endif;

get_footer();
?>
