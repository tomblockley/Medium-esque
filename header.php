<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=0.5">
		<title><?php wp_title( 'by', true, 'right' ); bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.ico" />
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php

			wp_enqueue_script('jquery');

			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			$options = get_option ( 'svbtle_options' ); 

			echo $options['google_analytics'];
 
			if( isset( $options['color'] ) && '' != $options['color'] )
				$color = $options['color'];
			else 
				$color = "#ff0000";
	
		?>
		

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		  $(".logo").mouseenter(function(){
		    $(".menu").stop().fadeIn("fast");
		});
		$("#user_nav").mouseleave(function(){
		    $(".menu").stop().fadeOut("fast");
		  });
		
		 
		});
		
		</script>

		
		
		<?php wp_head();  ?>

		
	</head>
	<body <?php body_class(); ?>>

		<header id="sidebar">
			
			
			<!-- Old location of h1, h2, and h3 -->

			<ul id="user_nav">
				<figure class="logo medium">
					<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
				</figure>
			
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				
				
				
				<?php if ($options['rss-link']): ?>
					<li class="link feed">
				      <a href="<?php bloginfo('rss_url'); ?>">feed</a>
				    </li>		
				<?php endif ?>		
		
				
				
				
		  </ul>
		  
		  <hgroup>
		  	<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><a href="<?php echo home_url( '/' ); ?>"><?php echo $options['theme_username'] ?></a></h2>
			<h3><?php bloginfo( 'description' ); ?></h3>
			<?php if ( is_active_sidebar( 'sidebar' ) ) dynamic_sidebar( 'sidebar' ); ?>
		  </hgroup>
		  
		</header>
		
		<section id="river" role="main">
        
        <?php if (isset($_GET['not_found'])): ?>
        <div id="notice"><span>:(</span><br><br>Not found.</div>
        <?php endif; ?>
