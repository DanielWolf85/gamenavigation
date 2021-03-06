<?php
/**
 * Template Name: Main
 *
 * @package  Gamenavigation
 */

get_header();
?>

<div class="content">

  <div class="container black-container">
  
    <!-- SLIDER -->

    <?php get_template_part( 'template-part/sliders/main_slider' ); ?>

    <!-- SLIDER end -->
    

    <!-- SECTION-INFO -->

    <?php get_template_part( 'template-part/main-index/main_info' ); ?>

    <!-- SECTION-INFO end -->


    <!-- LAST GAMINGS -->
    
    <?php get_template_part( 'template-part/main-index/last_gamings' ) ?>

    <!-- LAST GAMINGS end -->


    <!-- BUTTON-GAMING-CATALOG -->
    
    <?php get_template_part( 'template-part/main-index/button_gaming_catalog' ); ?>

    <!-- BUTTON-GAMING-CATALOG -->
  
  </div>
    
</div>

<?php
get_footer();
