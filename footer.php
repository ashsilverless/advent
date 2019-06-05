<?php
/**
 * The template for displaying the footer
 * @package silverless
 */
?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/charming.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/anime.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/textfx.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main2.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/theme.js"></script>
<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/three.r92.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vanta.clouds.min.js"></script>
<script>
VANTA.BIRDS({
el: "#birds",
backgroundColor: 0x294d7a,
speedLimit: 4.00,
cohesion: 66.00
})
</script>-->

	<footer>
    	
        <div class="links">
            
            <a href="https://www.bbc.co.uk/music/festivals/glastonbury/webcam" target="_blank"><h2 class="heading heading__sm"><i class="fas fa-video"></i> Check The Latest Webcam</h2></a>

            <a href="https://www.facebook.com/glastonburyofficial/" target="_blank"><h2 class="heading heading__sm"><i class="fab fa-facebook-square"></i> On Facebook</h2></a>

            <a href="https://twitter.com/GlastoFest" target="_blank"><h2 class="heading heading__sm"><i class="fab fa-twitter-square"></i> On Twitter</h2></a>

            <a href="https://www.glastonburyfestivals.co.uk/" target="_blank"><h2 class="heading heading__sm"><i class="fas fa-mouse-pointer"></i> Official Website</h2></a>        
        
        <div class="logo-holder">
                            
                            <a href="https://silverless.co.uk">
                                
                                <?php get_template_part('img/silverless', 'logo');?>
                            
                            </a>
                        
                        </div>

        
        </div>    	

                            	
	</footer>
				
    <?php wp_footer(); ?>				
				
	</body>
	
</html>