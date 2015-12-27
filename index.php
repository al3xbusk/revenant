<?php get_header(); ?>

<section class="slideshow slide-this">
	<div class="slideshow-wrap">
		<div class="slideshow-title">
			<h3>REVENANT IS A RESPONSIVE THEME</h3>
			<p>
				Lorem ipsum dolor sit amet, consecte
				adipiscing elit. Fusce at justo eget lorem 
				port titor tincidunt.
			</p>
		</div>
	</div>
</section>
<section class="quote">
	<div class="slide-button-container">
		<button class="slide-button">
			<img src="http://theme-t/wp-content/themes/theme-test/img/Polygon.png" height="8" width="14" alt="">
		</button>
	</div>

	<div class="quote-wrap">
		<?php
				get_sidebar();
			?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="main-posts">
					<div class="post-image">
						<a href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail( $id, $size, $attr ); ?>
						</a>
					</div>
					<h4>
						<span>	
							<a href="<?php the_permalink(); ?>#comments">
								<?php comments_number('no comments','1 comment','% comments'); ?>
							</a>
						</span>

						<a href="<?php the_permalink(); ?>"> 
							<?php the_title(); ?>
						</a> 
					</h4>
					<div class="main-post-content">
						<p>
							<?php the_excerpt(); ?>		
						</p>
					</div>
				</div>
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			    <div class="pagenavi">
  					<?php if(function_exists('my_pagenavi')) { my_pagenavi(); } ?>
					</div> <!--end pagination-->
			<?php else : ?>
			<?php endif; ?>
	</div>
</section>
<section class="featured-circles">
	<div class="featured-circles-wrap">
		<div class="circle-container">
			<img src="http://theme-t/wp-content/themes/theme-test/img/camera-icon.png" alt="">
			<div class="circle-text-container">
				<h5>Responsive Design</h5>
				<p>
					Lorem ipsum dolor sit amet, co
					ctetuer adipiscing elit, sed di
					nonummy nibh euismod te.
				</p>
				<a href="#" class="read-more-arrow">Read more</a>
			</div>
		</div>
		<div class="circle-container">
			<img src="http://theme-t/wp-content/themes/theme-test/img/camera-icon.png" alt="">
			<div class="circle-text-container">
				<h5>Responsive Design</h5>
				<p>
					Lorem ipsum dolor sit amet, co
					ctetuer adipiscing elit, sed di
					nonummy nibh euismod te.
				</p>
				<a href="#" class="read-more-arrow">Read more</a>
			</div>
		</div>
		<div class="circle-container">
			<img src="http://theme-t/wp-content/themes/theme-test/img/camera-icon.png" alt="">
			<div class="circle-text-container">
				<h5>Responsive Design</h5>
				<p>
					Lorem ipsum dolor sit amet, co
					ctetuer adipiscing elit, sed di
					nonummy nibh euismod te.
				</p>
				<a href="#" class="read-more-arrow">Read more</a>
			</div>
		</div>
		<div class="circle-container">
			<img src="http://theme-t/wp-content/themes/theme-test/img/camera-icon.png" alt="">
			<div class="circle-text-container">
				<h5>Responsive Design</h5>
				<p>
					Lorem ipsum dolor sit amet, co
					ctetuer adipiscing elit, sed di
					nonummy nibh euismod te.
				</p>
				<a href="#" class="read-more-arrow">Read more</a>
			</div>
		</div>
	</div>
</section>
<section class="recent-portfolio">
	<div class="recent-portfolio-title">
		<h3>RECENT PORTFOLIO</h3>
	</div>
	<div class="recent-portfolio-description">
		<p>
			Lorem ipsum dolor sit amet, coctetuer adipiscing elit, sed di nonummy nibh euismod te.
		</p>
	</div>
</section>
<section class="slider-inside">
	<div class="slider-container">
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img1.jpg" alt="">
			<h5>Work at the office</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img2.jpg" alt="">
			<h5>Outdoor Desktop</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img3.jpg" alt="">
			<h5>Mouse and a Keyboard</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img4.jpg" alt="">
			<h5>Chart Analusis</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img1.jpg" alt="">
			<h5>Work at the office</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img2.jpg" alt="">
			<h5>Outdoor Desktop</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img3.jpg" alt="">
			<h5>Mouse and a Keyboard</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
		<div class="slider-item1">
			<img src="http://theme-t/wp-content/themes/theme-test/img/slider-img4.jpg" alt="">
			<h5>Chart Analusis</h5>
			<p>
				Lorem ipsum dolor sit amet, cocteru
				adipiscing elit, 
			</p>
		</div>
	</div>
</section>
<section class="comments">
	<div class="comments-wrap">
		<div class="testimonials-container">
			<div class="testimonials-title">
				<h3>TESTIMONIALS</h3>
			</div>
			<div class="comments-container">
				<div class="comments-here">
					<div class="comment1">
						<div class="comment1-text">
							<p>
								"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque adipisci odio saepe, reprehenderit totam! Ipsa amet, perferendis quidem nisi asperiores"
							</p>
							<h4>Anna Doe, CEO</h4>
						</div>
						<img src="http://theme-t/wp-content/themes/theme-test/img/avatar.png" height="100" width="100" alt="">
					</div>
					<div class="comment1">
						<div class="comment1-text">
							<p>
								"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque adipisci odio saepe, reprehenderit totam! Ipsa amet, perferendis quidem nisi asperiores"
							</p>
							<h4>Anna Doe, CEO</h4>
						</div>
						<img src="http://theme-t/wp-content/themes/theme-test/img/avatar.png" height="100" width="100" alt="">

					</div>
				</div>
			</div>
		</div>
		<div class="faq">
			<div class="faq-title">
				<h3>FREQUENTLY ASKED QUESTIONS</h3>
			</div>
			<div class="faq-list">
				<ul>
					<li class="list-slide-button1" id="list-slide-button1">
						<button><img id="img1" src="http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png" alt="">
						</button>
						<h6>How to add icons to Button</h6>
					</li>
					<div class="list-slide-item1" id="list-slide-item1">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, harum. Maiores ut atque, in doloribus porro molestias sequi incidunt quae? Minus cumque, voluptatum temporibus maxime perferendis vel tempora rem laboriosam.
					</div>
					<li class="list-slide-button2" id="list-slide-button2">
						<button><img id="img2" src="http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png" alt="">
						</button>
						<h6>How to delete event</h6>
					</li>
					<div class="list-slide-item2" id="list-slide-item2">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, harum. Maiores ut atque, in doloribus porro molestias sequi incidunt quae? Minus cumque, voluptatum temporibus maxime perferendis vel tempora rem laboriosam.
					</div>
					<li class="list-slide-button3" id="list-slide-button3">
						<button><img id="img3" src="http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png" alt="">
						</button>
						<h6>How to install Wordpress</h6>
					</li>
					<div class="list-slide-item3" id="list-slide-item3">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, harum. Maiores ut atque, in doloribus porro molestias sequi incidunt quae? Minus cumque, voluptatum temporibus maxime perferendis vel tempora rem laboriosam.
					</div>
					<li class="list-slide-button4" id="list-slide-button4">
						<button><img id="img4" src="http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png" alt=""></button>
						<h6>How to create new FAQ</h6>
					</li>
					<div class="list-slide-item4" id="list-slide-item4">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, harum. Maiores ut atque, in doloribus porro molestias sequi incidunt quae? Minus cumque, voluptatum temporibus maxime perferendis vel tempora rem laboriosam.
					</div>
					<li class="list-slide-button5" id="list-slide-button5">
						<button><img id="img5" src="http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png" alt=""></button>
						<h6>How to install the demo Content?</h6>
					</li>
					<div class="list-slide-item5" id="list-slide-item5">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, harum. Maiores ut atque, in doloribus porro molestias sequi incidunt quae? Minus cumque, voluptatum temporibus maxime perferendis vel tempora rem laboriosam.
					</div>
					<li class="list-slide-button6" id="list-slide-button6">
						<button><img id="img6" src="http://theme-t/wp-content/themes/theme-test/img/faq-plus-icon.png" alt=""></button>
						<h6>Can the Theme be translated?</h6>
					</li>
					<div class="list-slide-item6" id="list-slide-item6">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, harum. Maiores ut atque, in doloribus porro molestias sequi incidunt quae? Minus cumque, voluptatum temporibus maxime perferendis vel tempora rem laboriosam.
					</div>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="recent-posts">
	<div class="recent-posts-title">
		<h3>OUR LATEST NEWS</h3>
		<p>
			Lorem ipsum dolor sit amet, coctetuer adipiscing elit, sed di nonummy nibh euismod te.
		</p>
	</div>
	<div class="post-container">
		<div class="this-is-post">
			<div class="post-title">
				<h3>
					This is the Post's title
				</h3>
				<p class="tags">
					<a href="#">tag,</a>
					<a href="#">post card,</a>
					<a href="#">rock</a>
				</p>
				<p class="post-text">
					Lorem ipsum dolor sit am
					tuer adipiscing elit, sed
					ummy nibh euismod.
				</p>
			</div>
			<div class="post-img-container">
				<img src="http://theme-t/wp-content/themes/theme-test/img/post-image1.jpg" alt="">
				<span>December 12, 2012</span>
			</div>
		</div>
		<div class="this-is-post">
			<div class="post-title">
				<h3>
					This is the Post's title
				</h3>
				<p class="tags">
					<a href="#">tag,</a>
					<a href="#">post card,</a>
					<a href="#">rock</a>
				</p>
				<p class="post-text">
					Lorem ipsum dolor sit am
					tuer adipiscing elit, sed
					ummy nibh euismod.
				</p>
			</div>
			<div class="post-img-container">
				<img src="http://theme-t/wp-content/themes/theme-test/img/post-image2.jpg" alt="">
				<span>April 24, 2013</span>
			</div>
		</div>
		<div class="this-is-post">
			<div class="post-title">
				<h3>
					This is the Post's title
				</h3>
				<p class="tags">
					<a href="#">tag,</a>
					<a href="#">post card,</a>
					<a href="#">rock</a>
				</p>
				<p class="post-text">
					Lorem ipsum dolor sit am
					tuer adipiscing elit, sed
					ummy nibh euismod.
				</p>
			</div>
			<div class="post-img-container">
				<img src="http://theme-t/wp-content/themes/theme-test/img/post-image1.jpg" alt="">
				<span>December 12, 2012</span>
			</div>
		</div>
	</div>
</section>
<section class="owl-slider-inside">
	<div class="owl-carousel">
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo1.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo2.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo3.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo4.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo5.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo1.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo2.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo3.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo4.png" alt="">
		</div>
		<div class="owl-item-custom">
			<img src="http://theme-t/wp-content/themes/theme-test/img/sponsor-logo5.png" alt="">
		</div>
	</div>
</section>

<?php get_footer(); ?>