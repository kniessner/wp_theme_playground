<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		      <?php wp_head(); ?> 

        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/_/css/screen.css">
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/_/img/favicon.ico" />

			
				<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/86/three.min.js"></script>	
				<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/86/three.module.js"></script>
				<script src="http://threejs.org/examples/js/loaders/STLLoader.js"></script>
    		<script src="http://threejs.org/examples/js/controls/PointerLockControls.js"></script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

<meta property="og:type"               content="articel " />
<meta property="og:title"              content="Complex Photography" />
<meta property="og:description"        content="Copyright : Sascha-Darius Knießner" />
<?php
if( $_GET["id"] ) {
$cid = $_GET['id']; 

    ?> 
<meta property="og:image"  content="<?php echo wp_get_attachment_image_src( $cid, 'large')[0]; ?>" />
	<?php
	}
?>



    </head>
    <body <?php hybrid_attr( 'body' ); ?>>
    
    <?php // echo wp_get_attachment_url( $id ); ?>
        <div id="outer-wrap">
            <div id="inner-wrap" class="clearfix">
                <div class="skip-nav">
                    <a href="#content" class="screen-reader-text"><?php _e( 'Skip to content', 'hybrid-base' ); ?></a>
                </div><!-- .skip-nav -->
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle "  data-toggle="collapse" data-target="#dropmenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php bloginfo('url');?>"> <img src="<?php bloginfo('template_url');?>/_/img/logorbit.png"> 
            </div>
            <div class="navbar-collapse collapsing collapse" id="dropmenu">
                <?php get_template_part( 'menus/menu-primary' );
                
                    //echo wp_get_attachment_url( $id );
 ?>
	
            </div><!--/.nav-collapse -->
          </div>
        </div>
        
        
        
       