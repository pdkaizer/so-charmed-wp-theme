<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->

	<head>
		<meta charset="UTF-8"/>
		
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		
		 <meta name="viewport" content="width=device-width,initial-scale=1">


  		<script src="<?php bloginfo('template_url');?>/js/libs/modernizr-2.0.6.min.js"></script>
	    <script type="text/javascript" src="http://use.typekit.com/fik3rlm.js"></script>
	    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="container" id="header">
				<div class="push-16 span-7 pull-1" id="cart-links"><a href="/shopping-cart">checkout</a> <span class="pink big">&bull;</span> <a href="/shopping-cart">view cart</a></div>
				<div class="span-8 logo"><img src="<?php bloginfo('template_url');?>/images/sc-logo-type.png" alt="So Charmed"></div>
				<div class="span-9 push-1 last" id="header-name"><h3 class="blue">handcrafted jewelry</h3></div>
		    </div>
		</div>

		<div class="container" id="page">