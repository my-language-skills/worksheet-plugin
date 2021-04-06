<?php
/**
 * Custom widgets
 *
 * Description. (use period)
 *
 * @link URL
 *
 * @package wallpress-child
 * @subpackage wallpress-child/wallpress-child-custom-widgets
 * @since 0.1
 */

 /**
 * Register widget area
 *
 * @since 0.1
 *
 * @internal https://digwp.com/2010/02/how-to-widgetize-wordpress-theme/
 * @internal https://www.templatemonster.com/blog/add-widget-areas-to-wordpress-guide/
 * @internal https://premium.wpmudev.org/blog/how-to-widgetize-a-page-post-header-or-any-other-template-in-wordpress/?utm_expid=3606929-94.Ie3dH-CaRwe6MU3VrZsdvw.0&utm_referrer=https%3A%2F%2Fwww.google.es%2F
 *
 * @internal https://code.tutsplus.com/tutorials/dynamically-adding-four-footer-widget-areas--cms-22168
 *
 */

if ( function_exists ('register_sidebar')){
// Base Widget Area. Empty by default.
    register_sidebar( array(
       'name' => __( 'All Levels Widget Area', 'books4languages' ),
       'id' => 'all_levels-books4languages-widget-area',
       'description' => __( 'All Levels Widget Area', 'books4languages' ),
       'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after_title' => '</h3>',
    ) );

    // First widget area. Empty by default.
    register_sidebar( array(
       'name' => __( 'A1 Widget Area', 'books4languages' ),
       'id' => 'a1-books4languages-widget-area',
       'description' => __( 'A1 widget area', 'books4languages' ),
       'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after_title' => '</h3>',
    ) );

    // Second Widget Area. Empty by default.
    register_sidebar( array(
       'name' => __( 'A2 Widget Area', 'books4languages' ),
       'id' => 'a2-books4languages-widget-area',
       'description' => __( 'A2 Widget Area', 'books4languages' ),
       'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after_title' => '</h3>',
    ) );

    // Third Widget Area. Empty by default.
    register_sidebar( array(
       'name' => __( 'B1 Widget Area', 'books4languages' ),
       'id' => 'b1-books4languages-widget-area',
       'description' => __( 'B1 Widget Area', 'books4languages' ),
       'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after_title' => '</h3>',
    ) );

    // Fourth Widget Area. Empty by default.
    register_sidebar( array(
       'name' => __( 'B2 Widget Area', 'books4languages' ),
       'id' => 'b2-books4languages-widget-area',
       'description' => __( 'B2 Widget Area', 'books4languages' ),
       'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after_title' => '</h3>',
    ) );

    // Fifth Widget Area. Empty by default.
    register_sidebar( array(
       'name' => __( 'C1 Widget Area', 'books4languages' ),
       'id' => 'c1-books4languages-widget-area',
       'description' => __( 'C1 Widget Area', 'books4languages' ),
       'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after_title' => '</h3>',
    ) );

    // Sixt Widget Area. Empty by default.
    register_sidebar( array(
       'name' => __( 'C2 Widget Area', 'books4languages' ),
       'id' => '-books4languages-widget-area',
       'description' => __( 'C2 Widget Area', 'books4languages' ),
       'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
       'after_widget' => '</div>',
       'before_title' => '<h3 class="widget-title">',
       'after_title' => '</h3>',
    ) );

    // Widget area. Emtpy by default.
     register_sidebar( array(
         'name' => __( 'Search by grammar units', 'books4languages' ),
         'id' => 'grammar-books4languages-widget-area',
         'description' => __( 'Search by grammar units widget area', 'books4languages' ),
         'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
         'after_widget' => '</div>',
         'before_title' => '<h3 class="widget-title">',
         'after_title' => '</h3>',
    ) );

    // Widget area. Emtpy by default.
     register_sidebar( array(
         'name' => __( 'Search by vocabulary units', 'books4languages' ),
         'id' => 'vocabulary-books4languages-widget-area',
         'description' => __( 'Search by vocabulary units widget area', 'books4languages' ),
         'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
         'after_widget' => '</div>',
         'before_title' => '<h3 class="widget-title">',
         'after_title' => '</h3>',
     ) );
    // Widget area. Emtpy by default.
     register_sidebar( array(
         'name' => __( 'Search by orthography units', 'books4languages' ),
         'id' => 'orthography-books4languages-widget-area',
         'description' => __( 'Search by orthography units widget area', 'books4languages' ),
         'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
         'after_widget' => '</div>',
         'before_title' => '<h3 class="widget-title">',
         'after_title' => '</h3>',
    ) );
    // Widget area. Emtpy by default.
     register_sidebar( array(
         'name' => __( 'Search by cultural units', 'books4languages' ),
         'id' => 'culture-books4languages-widget-area',
         'description' => __( 'Search by cultural units widget area', 'books4languages' ),
         'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
         'after_widget' => '</div>',
         'before_title' => '<h3 class="widget-title">',
         'after_title' => '</h3>',
     ) );


}

?>
