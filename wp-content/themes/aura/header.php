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
                    <!-- Primary Navigation -->
                    <nav id="primary-menu" class="navigation-one">
					
                        <!-- Top Cart -->
						<div id="cart-dropdown">
                            <a href="#" id="top-cart-icon"><i class="fa fa-shopping-cart"></i><span>4</span></a>
                            <div class="cart-dropdown-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/cart/cart1.jpg" alt="White Tshirt" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">White Tshirt</a>
											<span class="top-cart-item-quantity">x 2</span>
                                            <span class="top-cart-item-price">$200</span>
                                            
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#"><img src="images/shop/cart/cart2.jpg" alt="Black Tshirt" /></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Black Tshirt</a>
											<span class="top-cart-item-quantity">x 2</span>
                                            <span class="top-cart-item-price">$300</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">$500</span>
                                    <button class="button shop cart-button">View Cart</button>
                                </div>
                            </div>
                        </div> 
						<!-- top-cart end -->
						
                        <!-- Top Search -->
                        <div id="top-search">
							
                            <a href="#" id="top-search-trigger"><i class="fa fa-search"></i></a>
							<div class="search-wrapper">
							<i class="fa fa-times"></i>
								<form method="post" class="form">
									<input type="text" name="q" class="form-control" value="" placeholder="Enter you Search..">
								</form>
							</div> 
                        </div> 
						<!-- top search end -->
						
						<!-- menu -->
						<div class="mobil-menu">
							<i class="fa fa-bars"></i>
							<i class="fa fa-times"></i>
						</div>
                        <ul class="main-navigation">
                            <li class="main-row-menu drop-main-row-menu"><a href="#"><div>Home</div></a>
                                <ul>
                                    <li><a href="index-home-2.html"><div>Home - Portfolio</div></a></li>
                                    <li><a href="index-home-image.html"><div>Home - Image Slider</div></a></li>
                                    <li><a href="index-home-left.html"><div>Home - Image Slider Left</div></a></li>
                                    <li><a href="index-home-revolution.html"><div>Home - Revolution</div></a></li>
                                    <li><a href="index-home-rotator.html"><div>Home - Slide Rotator One</div></a></li>
                                    <li><a href="index-home-rotator-2.html"><div>Home - Slide Rotator Two</div></a></li>
                                    <li><a href="index-home-rotator-3.html"><div>Home - Slide Rotator Tree</div></a></li>
                                    <li><a href="index-home-rotator-4.html"><div>Home - Slide Rotator Four</div></a></li>
                                    <li><a href="index-home-video.html"><div>Home - Video Slider</div></a></li> 
                                </ul>
                            </li>
                            <li class="main-row-menu drop-main-row-menu"><a href="#"><div>Features</div></a>
								<ul>
                                    <li  class="drop-main-row-menu" ><a href="#"><div>Headers</div></a>
										<ul>
                                            <li><a href="index-home-image.html"><div>Header 1</div></a></li> 
											<li><a href="index-home-left.html"><div>Header Left</div></a></li>
											<li><a href="index-home-revolution.html"><div>Header 2</div></a></li> 
											<li><a href="index-home-rotator.html"><div>Header 3</div></a></li> 
											<li><a href="index-home-rotator-2.html"><div>Header 4</div></a></li> 
											<li><a href="index-home-rotator-3.html"><div>Header 5</div></a></li> 
											<li><a href="index-home-video.html"><div>Header 6</div></a></li> 
                                        </ul>
                                    </li>
                                    <li  class="drop-main-row-menu" ><a href="#"><div>Main Sliders</div></a>
										<ul>
                                            <li><a href="index-home-image.html"><div>Image Slider</div></a></li>  
											<li><a href="index-home-revolution.html"><div>Revolution Slider</div></a></li> 
											<li><a href="index-home-rotator.html"><div>Slide Rotator 1</div></a></li> 
											<li><a href="index-home-rotator-2.html"><div>Slide Rotator 2</div></a></li> 
											<li><a href="index-home-rotator-3.html"><div>Slide Rotator 3</div></a></li> 
											<li><a href="index-home-rotator-4.html"><div>Slide Rotator 4</div></a></li> 
											<li><a href="index-home-video.html"><div>Video Slider</div></a></li> 
                                        </ul>
                                    </li> 
                                </ul> 
                            </li>
                            <li class="main-row-menu drop-main-row-menu"><a href="#"><div>Pages</div></a>
                                <ul>
                                    <li><a href="about-2.html"><div>About</div></a></li>
                                    <li><a href="about.html"><div>About Alternative</div></a></li>
                                    <li><a href="about-me.html"><div>About Me</div></a></li>
                                    <li><a href="parallax.html"><div>Parallax</div></a></li>  
                                </ul>
                            </li>
                            <li class="main-row-menu drop-main-row-menu"><a href="#"><div>Elements</div></a>
                                <ul> 
									<li><a href="accordion.html"><div>Accordion</div></a></li>
									<li><a href="counter.html"><div>Counter</div></a></li>
									<li><a href="team.html"><div>Team</div></a></li>
									<li><a href="testimonials.html"><div>Testimonials</div></a></li>
									<li><a href="text-with-icon.html"><div>Text with Icon</div></a></li>  
									<li><a href="columns.html"><div>Columns</div></a></li> 
									<li><a href="title.html"><div>Titles</div></a></li>
									<li><a href="buttons.html"><div>Buttons</div></a></li>
									<li><a href="tabs.html"><div>Tabs</div></a></li>
								</ul>
                            </li>
                            <li class="current main-row-menu drop-main-row-menu"><a href="#"><div>Blog</div></a>
                                <ul>
                                    <li  class="drop-main-row-menu" ><a href="#"><div>Large</div></a>
										<ul>
                                            <li><a href="blog-large-full.html"><div>Full</div></a></li> 
											<li><a href="blog-large-left.html"><div>Left</div></a></li>
											<li><a href="blog-large-right.html"><div>Right</div></a></li>  
                                        </ul>
                                    </li>
                                    <li><a href="blog-list.html"><div>List</div></a></li>
                                    <li><a href="blog-masonry.html"><div>Masonry</div></a></li>
                                    <li><a href="blog-medium.html"><div>Medium</div></a></li>  
									<li><a href="blog-packery.html"><div>Packery</div></a></li>  
									<li><a href="blog-shari.html"><div>Shari</div></a></li> 
                                    <li  class="drop-main-row-menu" ><a href="#"><div>Single</div></a>
										<ul>
                                            <li><a href="blog-single-audio.html"><div>Audio</div></a></li> 
											<li><a href="blog-single-gallery.html"><div>Gallery</div></a></li>
											<li><a href="blog-single-quote.html"><div>Quote</div></a></li> 
											<li><a href="blog-single-link.html"><div>Link</div></a></li> 
											<li><a href="blog-single-video.html"><div>Video</div></a></li> 
											<li><a href="blog-single-right.html"><div>Standart</div></a></li> 	
											<li><a href="blog-single-left.html"><div>Sidebar Left</div></a></li> 
											<li><a href="blog-single-right.html"><div>Sidebar Right</div></a></li> 											
                                        </ul>
                                    </li>
                                </ul>
                            </li>
							
                            <li class="main-row-menu drop-main-row-menu"><a href="#"><div>Portfolio</div></a>
                                <ul>
                                    <li  class="drop-main-row-menu" ><a href="#"><div>Image Animation</div></a>
										<ul>
                                            <li><a href="portfolio-image-animation.html"><div>One</div></a></li> 
											<li><a href="portfolio-image-animation-tree.html"><div>Two</div></a></li>
											<li><a href="portfolio-image-animation-two.html"><div>Tree</div></a></li>  
                                        </ul>
                                    </li>
                                    <li><a href="portfolio-2grid.html"><div>2 Column</div></a></li>
                                    <li><a href="portfolio-3grid.html"><div>3 Column</div></a></li> 
									<li><a href="portfolio-4grid.html"><div>4 Column</div></a></li>
									<li><a href="portfolio-5grid.html"><div>5 Column</div></a></li> 
                                    <li  class="drop-main-row-menu" ><a href="#"><div>Single</div></a>
										<ul>
                                            <li><a href="portfolio-single.html"><div>One</div></a></li> 
											<li><a href="portfolio-single-two.html"><div>Two</div></a></li> 											
                                        </ul>
                                    </li>
                                    <li  class="drop-main-row-menu" ><a href="#"><div>Type</div></a>
										<ul>
                                            <li><a href="portfolio-type-one.html"><div>One</div></a></li> 
											<li><a href="portfolio-type-two.html"><div>Two</div></a></li>
											<li><a href="portfolio-type-tree.html"><div>Tree</div></a></li> 											
                                        </ul>
                                    </li>
                                </ul>
                            </li>
							
                            <li class="main-row-menu drop-main-row-menu"><a href="#"><div>Shop</div></a>
                                <ul> 
                                    <li><a href="shop-cart.html"><div>Cart</div></a></li>
                                    <li><a href="shop-full.html"><div>Full</div></a></li> 
									<li><a href="shop-sidebar.html"><div>With Sidebar</div></a></li>
									<li><a href="shop-single.html"><div>Single</div></a></li>  
                                </ul>
                            </li>
							
                        </ul>
						<!-- menu end -->



                    </nav><!-- #primary menu end -->

                </div>

            </div>
			</div>

        </header><!-- #header end -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
