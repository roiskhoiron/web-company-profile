<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("main/_partials/head.php")?>
</head>

<body>

	<div class="super_container">

		<!-- Header -->
		<?php $this->load->view("main/_partials/header.php")?>

		<!-- Menu -->

		<!-- Home -->
		<?php $this->load->view("main/_partials/home.php")?>

		<!-- Services -->
		<div class="services">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_title">
							<h1>Explore our Creativity</h1>
							<span>We have successfully built and developed.</span>
						</div>
					</div>
				</div>
			</div>

            <!-- Katalog -->
			<?php $this->load->view("main/_partials/list.php")?>
		</div>
	</div>

	<!-- Footer -->
	<?php $this->load->view("main/_partials/footer.php")?>	

	<?php $this->load->view("main/_partials/js.php")?>	
	
</body>
</html>