<?php
use kartik\social\GooglePlugin;
use kartik\social\FacebookPlugin;
use yii\helpers\Html;
use dosamigos\ckeditor\CKEditorInline;
use yii\helpers\Url;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Yii::$app->view->title =$model->puja_name;
//Yii::$app->view->registerMetaTag([ 'name' => 'title','content' => $model->meta_title]);
//Yii::$app->view->registerMetaTag([ 'name' => 'description','content' => $model->meta_desc]);
//Yii::$app->view->registerMetaTag([ 'name' => 'description','content' => $model->meta_keyword]);

//echo "<pre>"; print_r($model);
//echo "puja_name :" . $model->puja_name;
//echo "<br>";
//echo "price_without_material : " . $model->price_without_material;
//echo "<br>";
//echo "price_with_material : " . $model->price_with_material;
//echo "<br>";
//echo $model->image;
//echo "<br>";
 
foreach($model as $model)
{
   //echo $model->image;
?>


<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_half portfolio-single-image nobottommargin">
						<a href="#"><?php echo $model->image; ?></a>
					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_half portfolio-single-content col_last ">

						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2><?php echo  $model->puja_name; ?> : </h2>
						</div>
						<p><?php echo $model->sub_content?></p>
						<!-- <p>Illum molestias cupiditate eveniet dolore obcaecati voluptatibus est quos eos id recusandae officia. Cupiditate, voluptates quibusdam ipsum vel corporis laboriosam id est doloremque?</p> -->
						<!-- Portfolio Single - Description End -->

						<div class="line"></div>

						<!-- Portfolio Single - Meta
						============================================= -->
						<ul class="portfolio-meta bottommargin">
<!--							<li><span><i class="icon-user"></i>Duration:</span><?php echo $model->pooja_duration; ?></li>
							<li><span><i class="icon-calendar3"></i>price_with_material:</span> <?php echo $model->price_with_material; ?></li> 
							<li><span><i class="icon-lightbulb"></i>price_without_material:</span> <?php echo $model->price_without_material; ?></li>-->
<!--							<li><span><i class="icon-link"></i>god_name:</span> <a href="#"><?php echo $model->god_name; ?></a></li>-->
                                                        
                                                        <li><span><i class="icon-user"></i>Duration:</span><?php echo $model->pooja_duration; ?>Hrs</li>
							<li><span><i class="icon-calendar3"></i>Price with material:</span> Rs <?php echo $model->price_with_material; ?></li>
							<li><span><i class="icon-calendar3"></i>without material:</span> Rs <?php echo $model->price_without_material; ?></li>
<!--							<li><span><i class="icon-link"></i>Client:</span> <a href="#">Google</a></li>-->
						</ul>
						<!-- Portfolio Single - Meta End -->

						<!-- Portfolio Single - Share
						============================================= -->
						<div class="si-share clearfix">
							<span>Share:</span>
							<div>
								<a href="#" class="social-icon si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-email3">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>
							</div>
						</div>
						<!-- Portfolio Single - Share End -->

					</div><!-- .portfolio-single-content end -->

					<div class="clear"></div>
					<div class="tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-9">

							<ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
								<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-33" aria-labelledby="ui-id-17" aria-selected="true" aria-expanded="true"><a href="#tabs-33" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-17"><i class="icon-home2 norightmargin"></i></a></li>
								<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-34" aria-labelledby="ui-id-18" aria-selected="false" aria-expanded="false"><a href="#tabs-34" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-18">Nunc tincidunt</a></li>
								<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-35" aria-labelledby="ui-id-19" aria-selected="false" aria-expanded="false"><a href="#tabs-35" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-19">Proin dolor</a></li>
								<li class="hidden-phone ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-36" aria-labelledby="ui-id-20" aria-selected="false" aria-expanded="false"><a href="#tabs-36" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-20">Aenean lacinia</a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-33" aria-labelledby="ui-id-17" role="tabpanel" aria-hidden="false">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.
								</div>
								<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-34" aria-labelledby="ui-id-18" role="tabpanel" aria-hidden="true" style="display: none;">
									Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.
								</div>
								<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-35" aria-labelledby="ui-id-19" role="tabpanel" aria-hidden="true" style="display: none;">
									<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
									Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.
								</div>
								<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-36" aria-labelledby="ui-id-20" role="tabpanel" aria-hidden="true" style="display: none;">
									Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.
								</div>

							</div>

						</div>
					<div class="clear"></div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Related Projects:</h4>

					<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="false" data-autoplay="5000" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-lg="4">

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Open Imagination</a></h3>
									<span><a href="#">Media</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
									<span><a href="#">Illustrations</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
									</a>
									<div class="portfolio-overlay">
										<a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/4/4.jpg" alt="Mac Sunglasses">
									</a>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/5.jpg" alt="Console Activity">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Console Activity</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single-gallery.html">
										<img src="images/portfolio/4/6.jpg" alt="Shake It!">
									</a>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
									</a>
									<div class="portfolio-overlay">
										<a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
									<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
									<span><a href="#">Graphics</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single.html">
										<img src="images/portfolio/4/9.jpg" alt="Bridge Side">
									</a>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/9.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/9-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/full/9-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single.html">Bridge Side</a></h3>
									<span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="portfolio-single-video.html">
										<?php echo $model->image; ?>
									</a>
									<div class="portfolio-overlay">
										<a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-video.html">Study Table</a></h3>
									<span><a href="#">Graphics</a>, <a href="#">Media</a></span>
								</div>
							</div>
						</div>

					</div><!-- .portfolio-carousel end -->


				</div>

			</div>

		</section><!-- #content end -->

<?php } ?>

