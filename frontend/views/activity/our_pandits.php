<style>
.single-contact-form>.form-group {
    margin-bottom: 20px;
}
.input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1;
    text-align: center;
    background-color: #F8F8F8;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.form-inline .input-group .input-group-addon {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
}
.input-group {
    position: relative;
    display: table;
    border-collapse: separate;
    width: 100%;
}
</style>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-pattern page-title-center">

			<div class="container clearfix">
				<h1>Page Title with Pattern</h1>
				<span>A Short Page Title Tagline</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li class="active">Page Titles</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		
		<!-- Page Sub Menu
		============================================= -->
<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title">Call us today at <span>+91.22.57412541</span> or Email us at <span>support@Pandit Services.com</span></div>

					<nav>
						<ul>
							<li><a href="#" class="button button-xlarge">Start Now</a></li>
						</ul>
					</nav>

					<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div>

<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<!--<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter=".pf-icons">Icons</a></li>
						<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
						<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
						<li><a href="#" data-filter=".pf-media">Media</a></li>
						<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

					</ul><!-- #portfolio-filter end -->

					<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container portfolio-3 portfolio-masonry clearfix">
 
						<?php foreach($pandits as $pandit) { ?>
						<article class="portfolio-item pf-media pf-icons">
							<div class="portfolio-image">
								<a href="#">
									<?php echo  $pandit->image;   ?>
								</a>
								<div class="portfolio-overlay">
									<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
									<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="#"><?php echo $pandit->name; ?></a></h3>
								<span><a href="#">Media</a>, <a href="#"><?php echo $pandit->name; ?></a></span>
							</div>
						</article>
						<?php } ?>
					</div><!-- #portfolio end -->

				</div>

			</div>

		</section><!-- #content end -->
				</div>