<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/images/favicon.ico">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
	<!-- js -->
	<script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
	<?php wp_head(); ?>
</head>


<body <?php body_class() ?>>

	<div class="mouse-cursor" id="mouse-cursor" >
		<div class="mc-b link">
			<svg class="mc-loupe" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="m51.6 96.7c11 0 21-3.9 28.8-10.5l35 35c0.8 0.8 1.8 1.2 2.9 1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-35-35c6.5-7.8 10.5-17.9 10.5-28.8 0-24.9-20.2-45.1-45.1-45.1-24.8 0-45.1 20.3-45.1 45.1 0 24.9 20.3 45.1 45.1 45.1zm0-82c20.4 0 36.9 16.6 36.9 36.9 0 20.4-16.5 36.9-36.9 36.9s-36.9-16.6-36.9-36.9 16.6-36.9 36.9-36.9z"></path></svg>
			<svg class="mc-cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="m10.7 99.5h4.8c-3.3 5.9-2.5 13.5 2.5 18.5 2.9 2.9 6.8 4.5 11 4.5s8-1.6 11-4.5c2.9-2.9 4.5-6.8 4.5-11 0-2.7-0.7-5.2-2-7.5h19.3c-3.3 5.9-2.5 13.5 2.5 18.5 2.9 2.9 6.8 4.5 11 4.5s8-1.6 11-4.5c2.9-2.9 4.5-6.8 4.5-11 0-2.7-0.7-5.2-2-7.5h5.2c2.3 0 4.1-1.8 4.1-4.1 0-2.3-1.8-4.1-4.1-4.1h-79.2v-8h90c1.8 0 3.4-1.2 3.9-3l13.6-49.7c0.3-1.2 0.1-2.5-0.7-3.5-0.8-1-2-1.6-3.2-1.6h-103.6v-14.9c0-2.3-1.8-4.1-4.1-4.1s-4.1 1.8-4.1 4.1v18.9 49.7 16.1c0 2.4 1.8 4.2 4.1 4.2zm59.3 2.3c1.4-1.4 3.2-2.2 5.2-2.2 2 0 3.8 0.8 5.2 2.2 1.4 1.4 2.2 3.2 2.2 5.2 0 2-0.8 3.8-2.2 5.2-2.8 2.8-7.6 2.8-10.4 0-2.9-2.9-2.9-7.5 0-10.4zm-46.2 0c1.4-1.4 3.2-2.2 5.2-2.2 2 0 3.8 0.8 5.2 2.2 1.4 1.4 2.2 3.2 2.2 5.2 0 2-0.8 3.8-2.2 5.2-2.8 2.8-7.6 2.8-10.4 0-2.9-2.9-2.9-7.5 0-10.4zm-9-68.2h98.2l-11.4 41.6h-86.8v-41.6z"></path></svg>
			<svg class="mc-cancel" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="M7.6 121.4c0.8 0.8 1.8 1.2 2.9 1.2s2.1-0.4 2.9-1.2l51.1-51.1 51.1 51.1c0.8 0.8 1.8 1.2 2.9 1.2 1 0 2.1-0.4 2.9-1.2 1.6-1.6 1.6-4.2 0-5.8L70.3 64.5l51.1-51.1c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8 0L64.5 58.7 13.4 7.6C11.8 6 9.2 6 7.6 7.6s-1.6 4.2 0 5.8l51.1 51.1L7.6 115.6C6 117.2 6 119.8 7.6 121.4z"></path></svg>
			<svg class="mc-next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="m40.4 121.3c-0.8 0.8-1.8 1.2-2.9 1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8 0l53.9 53.9c1.6 1.6 1.6 4.2 0 5.8l-53.9 53.9z"></path></svg>
			<svg class="mc-prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129"><path d="m88.6 121.3c0.8 0.8 1.8 1.2 2.9 1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8 0l-54 53.9c-1.6 1.6-1.6 4.2 0 5.8l54 53.9z"></path></svg>
			<svg class="mc-play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><path d="M36.1 20.2l-29-20C6.8 0 6.4-0.1 6 0.1 5.7 0.3 5.5 0.6 5.5 1v40c0 0.4 0.2 0.7 0.5 0.9 0.1 0.1 0.3 0.1 0.5 0.1 0.2 0 0.4-0.1 0.6-0.2l29-20c0.3-0.2 0.4-0.5 0.4-0.8S36.3 20.4 36.1 20.2zM7.5 39.1V2.9l26.2 18.1L7.5 39.1z"></path></svg>
		</div>
	</div>
	<div class="preloader-area">
		<div class="preloader-folding-cube">
			<div class="preloader-cube1 preloader-cube"></div>
			<div class="preloader-cube2 preloader-cube"></div>
			<div class="preloader-cube4 preloader-cube"></div>
			<div class="preloader-cube3 preloader-cube"></div>
		</div>
	</div>
	<div class="bg_opacity"></div>

	<?php if ( wp_is_mobile() ) { ?>
		<div id="menu_mobile_full">
			<nav class="mobile-menu">
				<p class="close_menu"><span><i class="fa fa-times" aria-hidden="true"></i></span></p>
				<?php 
				$args = array('theme_location' => 'menu_mobile');
				?>
				<?php wp_nav_menu($args);?>
			</nav>
		</div>
	<?php }?>
	<?php if(!is_product_category()) { ?>
		<header class="header">
			<div class="top_header">
				<!-- display account top_header mobile -->
				<?php if (is_user_logged_in() && wp_is_mobile() ): ?>
				<div class="after_login after_login_mb">
					<a href="<?php echo get_site_url();?>/tai-khoan">	
						<?php  $current_user = wp_get_current_user();
						echo '' . $current_user->user_login . '';
						?></a>
						| <a href="<?php echo wp_logout_url(); ?>" > Đăng xuất</a>
					</div>
				<?php endif; ?>
				<span class="icon_mobile_click"><i class="fa fa-bars" aria-hidden="true"></i></span>
				<div class="container">
					<div class="logo_site">
						<?php 
						if(has_custom_logo()){
							the_custom_logo();
						}
						else { ?> 
							<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
						<?php } ?>
					</div>
					
					<div class="search_address">
						<?php if(get_option('address_header') || get_option('phone')) { ?>
							<div class="address_header">
								<?php if(get_option('phone')){ ?>
									<p><i class="fa fa-phone" aria-hidden="true"></i><strong>Hotline : </strong><a href="tel:<?php echo get_option('phone'); ?>"> <?php echo get_option('phone'); ?></a></p>
								<?php }?>
								<?php if(get_option('address_header')){ ?>
									<p><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Địa chỉ : </strong><?php echo get_option('address_header'); ?></p>
								<?php }?>
							</div>
						<?php }?>
						<div class="search_header">
							<?php //get_search_form(); ?>
							<form role="search" method="get" id="searchform" action="<?php echo home_url('/');  ?>">
								<div class="search">
									<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Tìm kiếm">
									<input type="hidden" value="product" name="post_type">
									<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="middle_header sticky">
				<div class="container">
					<span class="icon_mobile_click"><i class="fa fa-bars" aria-hidden="true"></i></span>
					<nav class="nav nav_primary">
						<?php 
						$args = array('theme_location' => 'primary');
						?>
						<?php wp_nav_menu($args); ?>
					</nav>
					<div class="cart_login">
						<?php if (is_user_logged_in()): ?>
							<div class="after_login">
								<a href="<?php echo get_site_url();?>/tai-khoan">	
									<?php  $current_user = wp_get_current_user();
									echo '' . $current_user->user_login . ' ';
									?></a>
									|  <a href="<?php echo wp_logout_url(); ?>" > Đăng xuất</a>
								</div>
							<?php endif; ?>
							<div class="tg_user <?php if (is_user_logged_in()): echo 'user_logged_in'; ?> <?php endif; ?> ">
								<a href="<?php echo get_site_url().'/tai-khoan';?>"><i class="fa fa-user" aria-hidden="true"></i></a>
								<div class="tg-sub-menu">
									<p><a href="<?php echo get_site_url().'/tai-khoan';?>">Đăng nhập</a> | <a href="<?php echo get_site_url().'/tai-khoan';?>">Đăng kí</a></p>
								</div>
							</div>
							<div class="g_cart">

								<?php global $woocommerce; ?>
								<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Xem giỏ hàng', 'woothemes'); ?>">
									<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> <?php //echo $woocommerce->cart->get_cart_total(); ?> 

								</a>
								<div class="header-quickcart">
									<?php woocommerce_mini_cart(); ?>
								</div>

							</div>
						</div>
					</div>
				</div>
				<?php if(is_front_page() && !is_home()){ ?>
					<div class="tg_commit">
						<div class="container">
							<div class="wrap_ul_commit">
								<ul class="row">
									<?php if(get_option('idx_commit_title_one')  ){ ?>
										<li class="col-sm-4">
											<div class="wrap_commit">
												<figure class="thumbnail"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></figure>
												<div class="textwidget">
													<p><?php echo get_option('idx_commit_title_one'); ?> </p>
													<span><?php echo get_option('idx_commit_desc_one'); ?></span>	
												</div>
											</div>
										</li>
									<?php } ?>
									<?php if(get_option('idx_commit_title_two')  ){ ?>
										<li class="col-sm-4">
											<div class="wrap_commit">
												<figure class="thumbnail"><i class="fa fa-star-o" aria-hidden="true"></i></figure>
												<div class="textwidget">
													<p><?php echo get_option('idx_commit_title_two'); ?> </p>
													<span><?php echo get_option('idx_commit_desc_two'); ?></span>
												</div>
											</div>
										</li>
									<?php } ?>
									<?php if(get_option('idx_commit_title_two')  ){ ?>
										<li class="col-sm-4">
											<div class="wrap_commit">
												<figure class="thumbnail"><i class="fa fa-phone" aria-hidden="true"></i></figure>
												<div class="textwidget">
													<p><?php echo get_option('idx_commit_title_three'); ?> </p>
													<span><?php echo get_option('idx_commit_desc_three'); ?></span>
												</div>

											</div>
										</li>
									<?php } ?>
								</ul>
							</div>

						</div>
					</div>
				<?php } ?>
			</header>
		<?php } // is_shop ?>


