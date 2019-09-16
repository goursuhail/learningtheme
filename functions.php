<?php

function learningtheme_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learningtheme_resources');

//Navigation menus

register_nav_menus(array(
   'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),

));


function new_excerpt_more($more) {
    global $post;
    return '... <a href="'. get_permalink($post->ID) . '">read more</a>.';
}
add_filter('excerpt_more', 'new_excerpt_more');



add_shortcode('MYSHORTCODE', 'myfunction' );
function myfunction( $atts ){

    $default = [
        'id' => 4,
        'col' => 5
    ];

    $atts = shortcode_atts( $default , $atts, 'MYSHORTCODE' );

    $sum = $atts['id'] + $atts['col'];

    $str = '<h1>Total is '.$sum.'</h1>';

    return $str;
}


add_shortcode('SECONDCODE', 'toofunction');

function toofunction( $atts ){


    $sum = $atts['id'] + $atts['col'];

    echo $sum;
}


add_shortcode('THIRDCODE', 'wtsfunction');

function wtsfunction( $atts ){

    $default = [

        'id' => 6,
        'col' => 7
    ];

    $atts = shortcode_atts($default, $atts, 'THIRDCODE');

    $sum = $atts['id'] + $atts['col'];

    $str = '<h1>Total is '.$sum.'</h1>';

    return $str;
}

add_shortcode('FOURCODE', 'wordfunction');

function wordfunction( $atts ){

    $default = [

        'name' => "suhail",
        'sername' => "gour"
    ];

    $atts = shortcode_atts($default, $atts, 'FOURCODE');

    $sum = $atts['name'] .' '. $atts['sername'];

    $str = '<h1>my name is '.$sum.'</h1>';

    return $str;
}

add_shortcode('AJMERCODE', 'worldfunction');

function worldfunction($atts){

    $args = array(

        'numberposts' => 5,
        'post_type' => 'employee'
    );

    $latestposts = get_posts($args);

    if (count($latestposts ) ){

        ?>

<div class="container">
    <div class="row">


<?php
        foreach ($latestposts as $post){
?>

        <div class="col"> <!--employee 1 -->
            <div class="row-1">
                <div class="col-image">
                    <img src="assets/img/suhail.jpg" width="100px" height="100px" alt="employee-image">
                </div>
                <div class="col-detail">
                    <div class="form-group">
                        <label><strong>Name</strong></label>
                        <span><p>Suhail Gour</p></span>
                    </div>
                    <div class="form-group">
                        <label><strong>Designation</strong></label>
                        <span><p>Developer</p></span>
                    </div>
                    <div class="form-group">
                        <label><strong>City</strong></label>
                        <span><p>Ajmer</p></span>
                    </div>
                    <div class="form-group">
                        <label><strong>Mobile</strong></label>
                        <span><p>7906863537</p></span>
                    </div>
                </div>
            </div>
        </div>


        <?php
        }
?>


    </div>
</div>
<?php

    }

}

?>



