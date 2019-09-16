<!-- site-footer -->

<footer class="site-footer">

    <!-- footer navigation menu -->
    <nav class="site-nav">
        <?php

        $args = array(

            'theme_location' => 'footer'
        );

        ?>

        <?php wp_nav_menu( $args ); ?>
    </nav><!-- footer navigation menu -->

    <p><?php bloginfo('name');?> - &copy; <?php echo date('Y'); ?></p>
</footer><!-- site-footer -->
<?php wp_footer(); ?>
</body>
</html>