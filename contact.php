<?php $page='contact' ?>
<?php include "partials/header.php" ?>

		<!-- contact -->

		<section class="contact-us container">
			<div class="cta">
				<h3>reach out to us</h3>
				<form action="">
					<input type="text" name="name" placeholder="name" />
					<input type="email" name="email" placeholder="email address" />
					<input type="text" name="phone" placeholder="phone number" />
					<input type="text" name="msg-title" placeholder="message title" />
					<textarea name="" id="" rows="10" placeholder="message"></textarea>
					<button class="btn btn-blue">send</button>
				</form>
			</div>
			<?php include "partials/sidebar.php" ?>
		</section>
		<!-- FOOTER -->
		<?php include "partials/footer.php" ?>