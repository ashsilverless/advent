<?php
/**
 * Header
 *
 * @package silverless
 */

?>
<!doctype html>
<?php
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';
?>

<html <?php language_attributes(); ?> class="<?php echo $dir ?>">  
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Glastonbury Advent Calendar (Unofficial)</title>
<meta name="description" content="Countdown to Glastonbury Festival with a new box of goodies available each day. Lovingly produced by Silverless." />
<meta name="keywords" content="advent calendar, web, html template, 3d, cubes, css, javascript, anime.js" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="https://use.typekit.net/wqu4hiv.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script>document.documentElement.className = 'js';</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"><!-- Font Awesome CDN-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141207669-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141207669-1');
</script>

<?php wp_head(); ?>
</head>

<body>

<div class="left-border"></div>
<div class="bottom-border"></div>	
<div class="right-border"></div>

<a href="https://www.glastonburyfestivals.co.uk/information/green-glastonbury/" class="love-farm" target="_blank">Love The Farm - Leave No Trace</a>

	<header>
    	
        	<!--<div class="logo">
            	
            <img src="<?php the_field('logo', 'options');?>"/>
            
        	</div>-->
        
        	<div class="page-title">
            	<h2 class="heading heading__sm">Glastonbury</h2>
            	<h1 class="heading heading__xl"><span>Unofficial</span>Advent Calendar</h1>
        
        	</div>
        		
        	<div id="counter" class="countdown">
            	
            	<div class="date"><p>26th - 30th June 2019</p></div>
            	
            <div class="days banner">
                <p>DAYS<span class="the_days"></span></p>
            </div>
            
            <div class="hours banner">
                <p>HOURS<span class="the_hours"></span></p>
            </div>
            
            <div class="minutes banner">
                <p>MINS<span class="the_minutes"></span></p>
            </div>            	     	

            <div class="seconds banner">
                <p>SECS<span class="the_seconds"></span></p>
            </div>

            	            	
        	</div> 

        	<!--<div class="pledge">
            	
            	<a href="https://www.glastonburyfestivals.co.uk/information/green-glastonbury/love-the-farm-leave-no-trace/" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/greenpledgebadge.png"/>
            	</a>
            	
        	</div>-->
  	
	</header>	