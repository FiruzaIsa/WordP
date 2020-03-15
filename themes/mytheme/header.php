<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>My theme</title>

    <?php wp_head();
    ?>
</head>
<body>
<div class="container">
            <div class="row">
<div class="col-lg-10 col-sm-12">
        <div class="container">
  <div class="d-flex justify-content-between mt-1">
     <?php if(is_active_sidebar('custom-contact-widget')):?>
     <?php dynamic_sidebar('custom-contact-widget'); ?>
     <?php endif; ?>
    <?php if(is_active_sidebar('custom-social-widget')):?>
     <?php dynamic_sidebar('custom-social-widget'); ?>
     <?php endif; ?>
  </div>
<hr>	
  
  <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
   
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php if ( function_exists( 'the_custom_logo' ) ) 
    {
    the_custom_logo();
    }
    ?>
    <?php $blog_title = get_bloginfo( 'name' ); ?>
    <a class="navbar-brand" href="<?php echo site_url(''); ?>"><?php echo $blog_title; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
  </nav>
  
         </div>
         </div>
        </div>
        </div>