<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div class="content-wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
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
			<a href="<?php echo site_url('admin/customer/') ?>"><i class="fa fa-fw fa-arrow-left"></i>Back</a>
		</div>
		<div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
			<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
			oleh controller tempat view ini digunakan. Yakni localhost/tokoku/index.php/admin/customer/add 
			<!--?php base_url('admin/customer/add') ?>
			--->
				<div class="form-group">
					<label for="name">kodecust*</label>
					<input class="form-control <?php echo form_error('kodecust') ? 'is-invalid':'' ?>"
					 type="text" name="kodecust" placeholder="Kode customer" />
					<div class="invalid-feedback">
					<?php echo form_error('kodecust') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="name">namacust*</label>
					<input class="form-control <?php echo form_error('namacust') ? 'is-invalid':'' ?>"
					 type="text" name="namacust" placeholder="Nama customer" />
					<div class="invalid-feedback">
					<?php echo form_error('namacust') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="price">alamat*</label>
					<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
					 type="text" name="alamat" placeholder="Alamat" />
					<div class="invalid-feedback">
					<?php echo form_error('alamat') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="price">telepon*</label>
					<input class="form-control <?php echo form_error('telepon') ? 'is-invalid':'' ?>"
					 type="text" name="telepon" placeholder="Telepon" />
					<div class="invalid-feedback">
					<?php echo form_error('telepon') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="name">foto</label>
					<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>"
					 type="file" name="foto" />
					<input type="hidden" name="foto" />
					<div class="invalid-feedback">
					<?php echo form_error('foto') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="name">email*</label>
					<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
					 type="text" name="email" placeholder="Email" />
					<div class="invalid-feedback">
					<?php echo form_error('email') ?>
					</div>
				</div>
				<input class="btn btn-success" type="submit" name="btn" value="Save" />
			</form>
		</div>
		<div class="card-footer small text-muted">* required fields</div>	
	  </div>  
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <?php $this->load->view("admin/_partials/footer.php") ?>	  
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>	  	
    <?php $this->load->view("admin/_partials/modal.php") ?>	  
    <?php $this->load->view("admin/_partials/js.php") ?>	  	
  </div>
</body>
</html>
