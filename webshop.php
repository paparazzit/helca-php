

<?php $page='webshop' ?>
<?php include "partials/header.php" ?>
		<!-- WEB-PAGE -->

		<section class="webshop-page">
			<aside id="side-nav">
				<a href="#antibacterical"
					><img src="img/blue-logo-round.png" alt=""
				/></a>
				<a href="#hygiene"><img src="img/green-logo-round.png" alt="" /></a>
				<a href="#babycare"><img src="img/pink-logo-round.png" alt="" /></a>
			</aside>
			<h1>webshop</h1>
			<div class="divider" id="antibacterical">
				<h4>antibacterical</h4>
				<div></div>
			</div>

			<section class="product-list">
				<article class="prod-shop">
				<?php include "partials/product-cards/antibacterical/gel_70ml.php"?>
					<?php include "partials/product-cards/antibacterical/gel_500ml.php"?>
					<?php include "partials/product-cards/antibacterical/gel_1000ml.php"?>
					<?php include "partials/product-cards/antibacterical/spray_70ml.php"?>
					<?php include "partials/product-cards/antibacterical/wipes_15.php"?>
				<?php include "partials/product-cards/antibacterical/wipes_72.php"?>
				</article>
			</section>

			<div class="divider" id="hygiene">
				<h4>daily hygiene</h4>
				<div></div>
			</div>

			<section class="product-list">
				<article class="prod-shop">
				<?php include "partials/product-cards/hygiene/soap_red_fruit_500ml.php"?>
					<?php include "partials/product-cards/hygiene/soap_red_fruit_1000ml.php"?>
					<?php include "partials/product-cards/hygiene/soap_blue_500ml.php"?>
				<?php include "partials/product-cards/hygiene/soap_blue_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/soap_honey_500ml.php"?>
				<?php include "partials/product-cards/hygiene/soap_honey_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_coconut_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_coconut_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_avocado_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_avocado_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_honey_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shower_gel_honey_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_apple_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_apple_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_nettle_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_nettle_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_chamomile_500ml.php"?>
				<?php include "partials/product-cards/hygiene/shampoo_chamomile_1000ml.php"?>
				<?php include "partials/product-cards/hygiene/conditioner_500ml.php"?>	
					
				</article>
			</section>
			<div class="divider" id="babycare">
				<h4>babycare</h4>
				<div></div>
			</div>

			<section class="product-list">
				<article class="prod-shop">
				<?php include "partials/product-cards/baby-care/baby_wipes_15.php"?>
				<?php include "partials/product-cards/baby-care/baby_wipes_72.php"?>
					
				</article>
			</section>
		</section>

		<!-- FOOTER -->

		<?php include "partials/footer.php" ?>