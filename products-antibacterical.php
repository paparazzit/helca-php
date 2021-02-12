<?php $page='antibacterical' ?>
<?php include "partials/header.php" ?>
		<!-- Products Antibacerical-->

		<section class="product-header">
			<div class="header-img img-1">
				<div class="logos-left">
					<a href="products-antibacterical.php" class="active"
						><img src="img/blue-logo-round.png" alt=""
					/></a>
					<a href="products-hygiene.php"
						><img src="img/green-logo-round.png" alt=""
					/></a>
					<a href="products-babycare.php"
						><img src="img/pink-logo-round.png" alt=""
					/></a>
				</div>
				<article class="left">
					<div class="text-wrapper">
						<h2>antibacterilal</h2>
						<p>
						We made it for real adventure seekers, for travel junkies, for those who use public transport and cars,
					    for those who visit supermarkets…..in short - everyone needs it, it’s basic hygiene! 
						</p>
					</div>
				</article>
			</div>
		</section>
		<div class="antibacterical nav">
			<ul>
				<li>
					<a class="active-nav" href="javascript:void(0)" id="gel"
						>DISINFECTION GEL</a
					>
				</li>
				<li><a href="javascript:void(0)" id="spray">DISINFECTION SPRAY</a></li>
				<li><a href="javascript:void(0)" id="wipes">WET WIPES</a></li>
			</ul>
		</div>
		<div class="relative">
			<section class="product-list show" id="prod-1">
				<?php include "partials/product-cards/prod-descriptions/gel.php" ?>
				<article class="prod-shop">
			
					<?php include "partials/product-cards/antibacterical/gel_70ml.php"?>
					<?php include "partials/product-cards/antibacterical/gel_500ml.php"?>
					<?php include "partials/product-cards/antibacterical/gel_1000ml.php"?>

					
				</article>
			</section>

			<section class="product-list hide" id="prod-2">
			  <?php include "partials/product-cards/prod-descriptions/spray.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/antibacterical/spray_70ml.php"?>
				</article>
			</section>

			<section class="product-list hide" id="prod-3">
			<?php include "partials/product-cards/prod-descriptions/wet_wipes.php" ?>
				<article class="prod-shop">
				<?php include "partials/product-cards/antibacterical/wipes_15.php"?>
				<?php include "partials/product-cards/antibacterical/wipes_72.php"?>
					
				</article>
			</section>
		</div>

		<!-- FOOTER -->
		<?php include "partials/footer.php" ?>