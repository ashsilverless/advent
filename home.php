<?php
/**
 * ============== Template Name: Home
 *
 * @package firstpress
 */
get_header();?>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

<main>

	<div class="calendar-wrap">

        	<div class="calendar">
        
        <?php if( have_rows('item') ): 	
            $i = 0; 
        		while ( have_rows('item') ) : the_row(); 
            $i++;?>
            
            <div class="cube" <?php $testa = the_sub_field('active_tile'); echo $testa;?> data-bg-color="#F7E8ED" data-title="<?php the_sub_field('title'); ?>" style="background-image:<?php the_sub_field('background_image'); ?><?php the_sub_field('background_image_link'); ?>;"></div>
        		
            <?php $tCount = $i;
              endwhile; 
              endif;?>
        
        	</div>

	</div><!--cal-wrap-->

</main>

<div class="content">

    <?php if( have_rows('item') ): 	
    $i = 0; 
    while ( have_rows('item') ) : the_row(); 
    $i++;?>
    
        <div class="content__block">
        	
        	<h3 class="content__title"><?php the_sub_field('title'); ?></h3>
        	
        	<p class="content__description"><?php the_sub_field('initial_copy'); ?></p>
        	
        	<div class="content__meta"><?php the_sub_field('main_copy'); ?>

        <?php if( get_sub_field('button_text') ): ?>
                	
            <a href="<?php the_sub_field( 'button_target' );?>" type="button" class="button" target="_blank">
            
                <?php the_sub_field( 'button_text' );?>
            
            </a>
        
        <?php endif; ?>        	
        	
        	</div>


        	<div class="content__image">
            <img src="<?php the_sub_field('image'); ?>"/>
        	</div>
        		
        </div>
    
    <?php 
    $tCount = $i;
    endwhile; 
    endif;
    ?>					

    <div class="content__number">0</div>
    
    <button class="btn-back" aria-label="Back to the grid view">&crarr;</button>
</div><!-- /content -->

<?php get_footer(); ?>
