<?php $page='hygiene' ?>
<?php include "partials/header.php" ?>
		<!-- Products Hygine-->

		<section class="product-header">
			<div class="header-img img-2">
				<div class="logos-left">
					<a href="products-antibacterical.php"
						><img src="img/blue-logo-round.png" alt=""
					/></a>
					<a href="products-hygiene.php" class="active"
						><img src="img/green-logo-round.png" alt=""
					/></a>
					<a href="products-babycare.php"
						><img src="img/pink-logo-round.png" alt=""
					/></a>
				</div>
				<article class="left">
					<div class="text-wrapper">
						<h2>daily hygiene</h2>
						<p>
						We deliver you optimized daily hygiene - from now on you don't have to worry about 
						choosing the right products you can rely on. Mindfully picked ingredients meet deep
						 nourishment for a pampering experience you will enjoy every day.
						</p>
					</div>
				</article>
			</div>
		</section>
		<div class="antibacterical nav">
			<ul>
				<li>
					<a class="active-nav" href="javascript:void(0)" id="gel"
						>LIQUID SOAP</a
					>
				</li>
				<li><a href="javascript:void(0)" id="spray">SHOWER GEL</a></li>
				<li><a href="javascript:void(0)" id="wipes">SHAMPOO</a></li>
				<li>
					<a href="javascript:void(0)" id="conditioner">HAIR CONDITIONER</a>
				</li>
			</ul>
		</div>
		<div class="relative">
			<!-- prod list 1 -->
			<section class="product-list" id="prod-1">
				<?php include "partials/product-cards/prod-descriptions/soap_red.php" ?>
				<article class="prod-shop">
					<?php include "partials/product-cards/hygiene/soap_red_fruit_500ml.php"?>
					<?php include "partials/product-cards/hygiene/soap_red_fruit_1000ml.php"?>
					
				</article>

				<?php include "partials/product-cards/prod-descriptions/soap_sensitive.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/soap_blue_500ml.php"?>
				<?php include "partials/product-cards/hygiene/soap_blue_1000ml.php"?>
					
				</article>
				<?php include "partials/product-cards/prod-descriptions/soap_honey.php" ?>
				
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/soap_honey_500ml.php"?>
				<?php include "partials/product-cards/hygiene/soap_honey_1000ml.php"?>
					
				</article>
			</section>

			<!-- prod list 2 -->

			<section class="product-list hide" id="prod-2">
				<?php include "partials/product-cards/prod-descriptions/shower_coconut.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/shower_gel_coconut_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_coconut_1000ml.php"?>
					
				</article>

				<?php include "partials/product-cards/prod-descriptions/shower_avocado.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/shower_gel_avocado_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_avocado_1000ml.php"?>
					
				</article>
				
				<?php include "partials/product-cards/prod-descriptions/shower_honey.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/shower_gel_honey_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_honey_1000ml.php"?>
					
				</article>
			</section>

			<!-- prod list 3 -->
			<section class="product-list hide" id="prod-3">
			<?php include "partials/product-cards/prod-descriptions/shampoo_apple.php" ?>	

				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/shampoo_apple_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_apple_1000ml.php"?>
					
				</article>

				<?php include "partials/product-cards/prod-descriptions/shampoo_nettle.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/shampoo_nettle_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_nettle_1000ml.php"?>
					
				</article>

				<?php include "partials/product-cards/prod-descriptions/shampoo_chamomile.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/shampoo_chamomile_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_chamomile_1000ml.php"?>
					
				</article>
			</section>
			<!-- prod list 4 -->
			<section class="product-list hide" id="prod-4">
			<?php include "partials/product-cards/prod-descriptions/conditioner.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/conditioner_500ml.php"?>
				</article>
			</section>
		</div>

		<!-- FOOTER -->
		<?php include "partials/footer.php" ?>