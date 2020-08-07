<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

							<div class="form-group">
								<label for="name">Sender*</label>
                                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                                type="text" name="sender" placeholder="Product sender" value="<?php echo $product->sender ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('sender') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Name*</label>
                                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                                type="text" name="name" placeholder="Product name" value="<?php echo $product->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Link*</label>
                                <input class="form-control <?php echo form_error('link') ? 'is-invalid':'' ?>"
                                type="text" name="link" placeholder="Product link" value="<?php echo $product->link ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('link') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Status*</label>
								<label class="checkbox-inline toggle-btn">
									<input type="checkbox" <?php if($product->status == 1) echo 'checked'?>  data-toggle="toggle" 
									data-on="Diterima" data-off="Ditolak" data-onstyle="success" data-offstyle="danger" data-width="100" 
									data-style="ios" name="status" value="1"/>
								</label>
							</div>

							<div class="form-group">
								<label for="name">Photo</label>
                                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                                type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
                                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                                name="description" placeholder="Product description..."><?php echo $product->description ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>