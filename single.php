<?php

get_header();


    while (have_posts()):
        the_post();

?>

        <article>
            <div>
            <?php the_post_thumbnail(); ?>
            </div>
            <div>
                <p><?php the_time('F j, Y g:i a'); ?>  | by <a href="<?php echo  get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | posted in

                <?php

                $categories = get_the_category();
                $separator = ", ";
                $output = "";


                if ($categories){

                    foreach ($categories as $category){


                        $output .= '<a href="' .get_category_link($category->term_id). '">' .$category->cat_name. '</a>' . $separator;
                    }

                    echo trim($output, $separator);

                }


                ?>


                </p>
            </div>
            <h1><?php the_title(); ?></h1>
            <div>
            <?php the_content(); ?>
            </div>
            <div>
                <p>Category: <?php the_category(); ?></p>
            </div>
        </article>

<?php

        if (comments_open() || get_comments_number()):
            comments_template();

        endif;

        the_post_navigation(

                array(
                        'prev_text' =>  __('previous post: %title'),
                        'next_text' =>  __('next post: %title')
                )

        );

        endwhile;



get_footer();

?>
