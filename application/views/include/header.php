<!DOCTYPE html>
<html lang="en">
<head>
	<title>BDNEWS24</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="<?=base_url()?>asset/news/images/icons/favicon.png"/> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/css/util.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/news/css/main.css">
	<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								
							</span>

							<img class="m-b-1 m-rl-8" src="<?=base_url()?>asset/news/images/icons/icon-night.png" alt="IMG">

							<span>
								
							</span>
						</span>
						
						<?php if (!empty($this->session->userdata('userid'))) {  ?>

							<a href="<?=base_url()?>Logout" class="left-topbar-item">
								Log out
							</a>

						<?php } else{ ?>
							<a href="<?=base_url()?>Register" class="left-topbar-item">
								Sign Up
							</a>

							<a href="<?=base_url()?>Login" class="left-topbar-item">
								Log in
							</a>

						<?php } ?>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="<?=base_url()?>"><img src="<?=base_url()?>asset/news/images/icons/logo-0001.png" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="<?=base_url()?>asset/news/images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="<?=base_url()?>asset/news/#" class="left-topbar-item">
							About
						</a>

						<a href="<?=base_url()?>asset/news/#" class="left-topbar-item">
							Contact
						</a>
						<?php if (!empty($this->session->userdata('userid'))) { 
							echo $this->session->userdata('userid'); ?>
							<a href="<?=base_url()?>asset/news/#" class="left-topbar-item">
								Log out
							</a>

						<?php } else{ ?>
							<a href="<?=base_url()?>Register" class="left-topbar-item">
								Sign Up
							</a>

							<a href="<?=base_url()?>Login" class="left-topbar-item">
								Log in
							</a>

						<?php } ?>
					</li>
					<li class="right-topbar">
						<a href="<?=base_url()?>asset/news/#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="<?=base_url()?>asset/news/#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="<?=base_url()?>asset/news/#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="<?=base_url()?>asset/news/#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="<?=base_url()?>asset/news/#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="<?=base_url()?>asset/news/index.html">Home</a>
					</li>

					<li>
						<a href="<?=base_url()?>asset/news/category-01.html">News</a>
					</li>

					<li>
						<a href="<?=base_url()?>asset/news/category-02.html">Entertainment </a>
					</li>

					<li>
						<a href="<?=base_url()?>asset/news/category-01.html">Business</a>
					</li>

					<li>
						<a href="<?=base_url()?>asset/news/category-02.html">Travel</a>
					</li>

					<li>
						<a href="<?=base_url()?>asset/news/category-01.html">Life Style</a>
					</li>

					<li>
						<a href="<?=base_url()?>asset/news/category-02.html">Video</a>
					</li>

					<li>
						<a href="<?=base_url()?>asset/news/#">Features</a>
						<ul class="sub-menu-m">
							<li><a href="<?=base_url()?>asset/news/category-01.html">Category Page v1</a></li>
							<li><a href="<?=base_url()?>asset/news/category-02.html">Category Page v2</a></li>
							<li><a href="<?=base_url()?>asset/news/blog-grid.html">Blog Grid Sidebar</a></li>
							<li><a href="<?=base_url()?>asset/news/blog-list-01.html">Blog List Sidebar v1</a></li>
							<li><a href="<?=base_url()?>asset/news/blog-list-02.html">Blog List Sidebar v2</a></li>
							<li><a href="<?=base_url()?>asset/news/blog-detail-01.html">Blog Detail Sidebar</a></li>
							<li><a href="<?=base_url()?>asset/news/blog-detail-02.html">Blog Detail No Sidebar</a></li>
							<li><a href="<?=base_url()?>asset/news/about.html">About Us</a></li>
							<li><a href="<?=base_url()?>asset/news/contact.html">Contact Us</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
				</ul>
			</div>

			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="<?=base_url()?>"><img src="<?=base_url()?>asset/news/images/icons/logo-0001.png" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					<div class="right-topbar">
						<span><strong>Follow us on </strong></span>
						<a style="padding: 10px;background: #3B5998;color: white;" target="_blank" href="https://www.facebook.com/">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a style="padding: 10px;background: #50ABF1;color: white;" target="_blank" href="https://twitter.com/">
							<span class="fab fa-twitter"></span>
						</a>


						<a style="padding: 10px;background: #1AB7EA;color: white;" target="_blank" href="https://vimeo.com/">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a style="padding: 10px;background: #E02F2F;color: white;" target="_blank" href="https://www.youtube.com/">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>	

			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="<?=base_url()?>asset/news/index.html">
							<img src="<?=base_url()?>asset/news/images/icons/logo-0001.png" alt="LOGO">
						</a>

						<ul class="main-menu">
							<?php foreach ($categories as $category) { ?>
								<li class="mega-menu-item">
									<a href="<?=base_url()?>News/category/<?=$category['id']?>"><?php  echo $category['name']; ?> </a>
								</li>
							<?php } ?>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>
