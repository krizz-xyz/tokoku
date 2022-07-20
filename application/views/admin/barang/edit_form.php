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
			<a href="<?php echo site_url('admin/barang/') ?>"><i class="fa fa-fw fa-arrow-left"></i>Back</a>
		</div>
		<div class="card-body">
			<form action="" method="post" enctype="multipart/form-data">
			<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
			oleh controller tempat view ini digunakan. Yakni localhost/tokoku/index.php/admin/barang/edit/ID 
			<!--?php base_url('admin/barang/edit') ?>
			--->
				<input type="hidden" name="kodebrg" value="<?php echo $barang->kodebrg?>" />
				<div class="form-group">
					<label for="name">Namabrg*</label>
					<input class="form-control <?php echo form_error('namabrg') ? 'is-invalid':'' ?>"
					 type="text" name="namabrg" placeholder="Nama barang" value="<?php echo $barang->namabrg ?>" />
					<div class="invalid-feedback">
					<?php echo form_error('namabrg') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="price">Hargabeli</label>
					<input class="form-control <?php echo form_error('hargabeli') ? 'is-invalid':'' ?>"
					 type="number" name="hargabeli" min="0" placeholder="Harga beli" value="<?php echo $barang->hargabeli ?>" />
					<div class="invalid-feedback">
					<?php echo form_error('hargabeli') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="price">Hargajual</label>
					<input class="form-control <?php echo form_error('hargajual') ? 'is-invalid':'' ?>"
					 type="number" name="hargajual" min="0" placeholder="Harga jual" value="<?php echo $barang->hargajual ?>" />
					<div class="invalid-feedback">
					<?php echo form_error('hargajual') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="name">Gambar</label>
					<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
					 type="file" name="gambar" />
					<input type="hidden" name="gambar_lama" value="<?php echo $barang->gambar ?>" />
					<div class="invalid-feedback">
					<?php echo form_error('gambar') ?>
					</div>
				</div>
				<div class="form-group">
					<label for="name">Keterangan*</label>
					<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
					 name="keterangan" placeholder="Keterangan..."><?php echo $barang->keterangan ?></textarea>
					<div class="invalid-feedback">
					<?php echo form_error('keterangan') ?>
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
