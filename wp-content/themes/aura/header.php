<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <div id="wrapper" class="clearfix">

        <header id="header" class="full-header header-type-one">
			
            <div id="header-wrap">
			<div class="header-wrap-overlay">
                <div class="container clearfix">
 
                    <!-- Logo -->
                    <div id="logo">
                        <a href="<?php echo home_url(); ?>" class="dark-logo"><img src="<?php  echo get_theme_file_uri( '/assets/images/logo_black.png' ) ?>" alt="Logo"></a>
					</div>
					<!-- Logo end -->

					<?php
						
						wp_nav_menu( array( 'theme_location' => 'main_menu', 'container' => '') ); 

					?>
     
                       
					 

                </div>

            </div>
			</div>

        </header><!-- #header end -->

	 
 