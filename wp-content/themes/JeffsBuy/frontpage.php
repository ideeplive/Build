<?php global $deeplive; ?>
<?php /* Template Name: Home */ ?>
<!--------------Header Area--------------->
<?php get_header(); ?>

<?php

$layout = $deeplive['homepage-blocks']['enabled'];

if ($layout): foreach ($layout as $key=>$value) {

    switch($key) {

        case 'slider': get_template_part( 'home_templates/slider', 'slider' );
        break;

        case 'mens': get_template_part( 'home_templates/mensection', 'mens' );
        break;

        case 'womens': get_template_part( 'home_templates/womensection', 'womens' );
        break;

        case 'accessories': get_template_part( 'home_templates/accessoriesection', 'accessories' );    
        break;  

        case 'electronics': get_template_part( 'home_templates/electronicsection', 'electronics' );    
        break;  
        
        case 'home': get_template_part( 'home_templates/homesection', 'home' );    
        break;  
        
        case 'kids': get_template_part( 'home_templates/kidsection', 'kids' );    
        break;

        case 'appliances': get_template_part( 'home_templates/appliancesection', 'appliances' );    
        break;  

    }

}

endif;

?>


<?php // get_template_part( 'home_templates/slider', 'slider' ); ?>
<?php // get_template_part( 'home_templates/accessoriesection', 'accessories' ); ?>
<?php // get_template_part( 'home_templates/appliancesection', 'appliances' ); ?>
<?php // get_template_part( 'home_templates/electronicsection', 'electronicsection' ); ?>
<?php // get_template_part( 'home_templates/homesection', 'homesection' ); ?>
<?php // get_template_part( 'home_templates/kidsection', 'kidsection' ); ?>
<?php // get_template_part( 'home_templates/mensection', 'mensection' ); ?>
<?php // get_template_part( 'home_templates/womensection', 'womensection' ); ?>


 <!--------------Footer--------------->
<?php get_footer(); ?>