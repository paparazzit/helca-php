<?php $page='home' ?>
<?php include "partials/header.php" ?>
		<!-- HEADER -->
		<header>
			<article class="left">			
				<div class="float-bg"></div>							
					<div id="sync1" class="owl-carousel owl-theme">
						<div class="item" data-hash="zero" >
							<img loading="lazy" src="img/antibacterical_slide.png" alt=""/>
						</div>
						<div class="item" data-hash="one" >
							<img loading="lazy" src="img/daily_higene_slide.png" alt="">
						</div>
						<div class="item" data-hash="two" >
							<img loading="lazy" src="img/Baby linija 001.png" alt="">
						</div>	
						<div class="item" data-hash="three" >
							<img loading="lazy" src="img/babycare_coming_soon.png" alt="">
						</div>				
					</div>								
			</article>

				<div id="sync3" class="owl-carousel owl-theme logo-round">
					<div class="item" data-hash="zero"><img class="logo_1"  src="img/logo.png" alt="" /></div>
					<div class="item " data-hash="one"><img class="logo_2" src="img/logo-with-borders/green-logo-round.png" alt=""></div>
					<div class="item " data-hash="two"><img class="logo_3" src="img/logo-with-borders/pink-logo-round.png" alt=""></div>
					<div class="item " data-hash="three"><img class="logo_4" src="img/logo-with-borders/Logo-purple.png" alt=""></div>
			</div>		
			<article class="slide">
				<div id="sync2"  class="owl-carousel owl-theme">
					<div class="item item-1" id="item-1" data-hash="zero" >
						<h2 class="slide-headline">antibacterical</h2>
						<p class="slide-text">
						We made it for real adventure seekers, for travel junkies, for those who use public
					    transport and cars, for those who visit supermarkets…..in short - everyone needs it, it’s basic hygiene!
						</p>
						<a class="btn btn-blue" href="products-antibacterical.php">find out more</a>
					</div>
					<div class="item item-2" id="item-2" data-hash="one">
						<h2 class="slide-headline">daily hygiene</h2>
						<p class="slide-text">
						We deliver you optimized daily hygiene - from now on you don't have to worry about choosing the right products 
						you can rely on. Mindfully picked ingredients meet deep nourishment for a pampering experience you will enjoy every day.
						</p>
						<a class="btn btn-blue" href="products-hygiene.php">find out more</a>
					</div>
					<div class="item item-3" id="item-3" data-hash="two">
						<h2 class="slide-headline">babycare</h2>
						<p class="slide-text">
						Designed especially for little humans. Each product is based on a mild and non-irritating formula that provides perfect care for the
						 most delicate skin. From now on you don't have to worry about choosing the right products you can rely on for your family.
						</p>
						<a class="btn btn-blue" href="products-babycare.php">find out more</a>
					</div>

					<div class="item item-4" id="item-4" data-hash="three">
						<h2 class="slide-headline">babycare</h2>
						<p class="slide-text">
						Designed especially for little humans. Each product is based on a mild and non-irritating formula that provides perfect care for the
						 most delicate skin. From now on you don't have to worry about choosing the right products you can rely on for your family.
						</p>
						<a class="btn btn-blue" href="products-babycare.php">find out more</a>
					</div>
				</div>
			</article>
		</header>

		<!-- HEALTH -->

		<section class="health box-art">
			<article class="left square">
			<div class="square-wrapper">
				<div class="box" id="leaf">
					<div class="content " id="box"><img loading="lazy" src="img/leaf.png" alt="" /></div>
					
				</div>
				<div class="box" id="health">
					<div class="content" >
						<img class="leaf-img" loading="lazy" src="img/leaf.png" alt="" />
						<h2>health</h2>
						<p>We treasure the relationship between you and your body.</p></div>
					
				</div>
				<div class="box" >
				<div class="content ">
					<h3 class="text-color">
						revolution begins <br />
						with hygiene
					</h3>
					<p class="text-color">
						We are on a mission to optimize your daily hygiene in the way that
						keeps you at ease when choosing the products that you can count on.
					</p>
					<div class="float-cube"></div>
				</div>
				
				</div>
				<div class="box blue">
					<div class="content " >
						<h2>
							we know <br />
							your needs
						</h2>
						<p>...and we take them seriously. Your comfort is our priority.</p>
						
					</div>
			</div>
			</div>
			
			</article>
			<article class="right square">
				 <div class="square-wrapper">
					<div class="box ">
						<div class="content">
							<h2>take care</h2>
						<p>
							Taking care of yourself is the best selfish thing you can do - for
							yourself and for others.
						</p>
						</div>
						
					</div>
				</div> 

			
			</article> 
		</section>
		

		<!-- WEB-NEWS -->
		<section class="web-news">
			<article class="webshop">
				<div class="vertical">
					<h2>webshop</h2>
				</div>
				<div class="wrapper">
					<img  loading="lazy" src="img/webshop-group.png" alt="" />
					<div class="text">
						<h3>coconut oil shower gel</h3>
						<p>
							Pampering time! Mindfully picked enchanting coconut scent meets
							deep nourishment, as coconut oil is famous for its vitamins and
							wonders. Gives your body hydration it needs and ensures a
							pleasurable and clean start of the day. Body cleanser with formula
							mild enough for everyday usage.
						</p>
						<p>Choose your size - 500ml & 1000ml</p>
						<p>Now available on our web shop</p>
						<a class="btn btn-blue" href="webshop.php">visit our web shop</a>
					</div>
				</div>
			</article>
			<article class="news">
				<div class="vertical">
					<h2>news</h2>
				</div>
				<div class="wrapper">
					<?php include "partials/news/news.php"?>
					<?php include "partials/news/news.php"?>
					<?php include "partials/news/news.php"?>
					<?php include "partials/news/news.php"?>
					<?php include "partials/news/news.php"?>
					<?php include "partials/news/news.php"?>		
				</div>
				<div class="slider-news">
				<div class="owl-carousel owl-theme" id="news">
					<div class="item"><?php include "partials/news/news.php"?></div>
					<div class="item"><?php include "partials/news/news.php"?></div>
					<div class="item"><?php include "partials/news/news.php"?></div>
					<div class="item"><?php include "partials/news/news.php"?></div>
					<div class="item"><?php include "partials/news/news.php"?></div>
					
				
                </div>
				</div>
				
		       <a href="news-all.php">all news...</a>
			</article>
		</section>

		<!-- BRAND-LINES -->

		<section class="brand-lines box-art">
			<article class="left square">
				<div class="square-wrapper">
					<div class="vertical"><h2 >brand-lines</h2></div>
					<div class="gray">
						
					</div>
					
					<div class="round-logos">
						<div class="scrolling">
							<a href="products-antibacterical.php"><img id="logo_1" src="img/blue-logo-round.png" alt="" class=" " /></a>
						<a href="products-hygiene.php"><img id="logo_2" src="img/green-logo-round.png" alt="" class="" /></a>
						<a href="products-babycare.php"><img id="logo_3" src="img/pink-logo-round.png" alt="" class="" /></div></a>
						
					</div>
					
				
					<div class="text">
						<p>
							We are on a mission to optimize your daily hygiene in the way that
							keeps you at ease when choosing the products that you can count on.
						</p>
					</div>
				</div>
			
			</article>
			<article class="right square visible" >
				<div class="square-wrapper">
					<div class="box" id="mask">
						<div class="content one">
							
								<img loading="lazy" src="img/mask.png" alt="" id="mask_img" />
								<p>stay safe</p>
							<div class="bg float"></div>
						</div>
					</div>
					<div class="box" >
						<div class="content two">
							<img  loading="lazy"  src="img/conditioner.png" alt="" />
							<img  loading="lazy" class="logo-abs" src="img/green-logo-vertical.png" alt="" />
							<div class="float"></div>
						
						</div>
					</div>
					<div class="box" id="baby-box">
						<div class="content three">
							<img loading="lazy" class="logo-abs" src="img/helca logo pink.png" alt="" />
					<img loading="lazy" src="img/wipes.png" alt="" />
					<p>designed for little humans</p>
					<div class="float"></div>
						</div>
					</div>
					<div class="box" id="text-box"><div class="content four">
						<blockquote>
							<span> &ldquo;</span>
							there is no bad hairday when you use helca hair conditioner
							<span>&rdquo;</span>
						</blockquote>
						<div class="float"></div>
					</div></div>
				</div>
				
				
			</article>
		</section>

		<!-- FOOTER -->
		<?php include "partials/footer.php" ?>