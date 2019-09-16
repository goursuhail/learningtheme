<?php
/** The template for displaying  for all 404 pages */

get_header(); ?>




<section>
    <header>
        <h1><?php _e('Oops! this page can not be found..'); ?></h1>
    </header>
    <div>
        <p><?php _e('It looks like nothing was found at this location. Maybe try a search?'); ?></p>

        <?php get_search_form(); ?>
    </div>
</section>




<?php

get_footer();

?>
