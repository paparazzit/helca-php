<?php $page='babycare' ?>
<?php include "partials/header.php"?>
		<!-- Products BABY care-->

		<section class="product-header">
			<div class="header-img img-3">
				<div class="logos-left">
					<a href="products-antibacterical.php"
						><img loading="lazy" src="img/blue-logo-round.png" alt=""
					/></a>
					<a href="products-hygiene.php"
						><img loading="lazy" src="img/green-logo-round.png" alt=""
					/></a>
					<a href="products-babycare.php" class="active"
						><img loading="lazy" src="img/pink-logo-round.png" alt=""
					/></a>
				</div>
				<article class="left">
					<div class="text-wrapper">
						<h2>babycare</h2>
						<p>
						Designed especially for little humans. Each product is based on a mild and 
						non-irritating formula that 
						provides perfect care for the most delicate skin. From now 
						on you don't have to worry about choosing the right products you can rely on for your family.
						</p>
					</div>
				</article>
			</div>
		</section>
		<div class="antibacterical nav">
			<ul>
				<li>
					<a class="active-nav" href="javascript:void(0)" id="gel"
						>BABY WET WIPES</a
					>
				</li>
			</ul>
		</div>
		<div class="relative">
			<!-- prod list 1 -->
			<section class="product-list" id="prod-1">
				<?php include "partials/product-cards/prod-descriptions/baby_wipes.php"?>
				<article class="prod-shop">
				<?php include "partials/product-cards/baby-care/baby_wipes_15.php"?>
				<?php include "partials/product-cards/baby-care/baby_wipes_72.php"?>
					
				</article>
			</section>
		</div>

		<!-- FOOTER -->

		<?php include "partials/footer.php" ?>