<?php

/**
 * Template Name: Lander Page Extra
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hubble
 */


 get_header();

?>
<main>
<?php 
if(have_posts()) :
    while(have_posts()) :
        the_post();
        get_template_part('template-parts/content-single', 'lander');
    endwhile;
endif;
?>
</main>
<?php get_footer() ?>