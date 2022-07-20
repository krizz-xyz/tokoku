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
      <!-- DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">	  
		  <a href="<?php echo site_url('admin/barang/add') ?>">
		  <i class="fa fa-fw fa-plus"></i> Add New</a></div>
        <div class="card-body">
          <div class="table-responsive">
             <!-- contents DataTables Card-->			
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Gambar</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
				<?php foreach ($list_barang as $barang): ?>
                <tr>
                  <td><?php echo $barang->kodebrg ?></td>
                  <td width="150"><?php echo $barang->namabrg ?></td>
                  <td><?php echo $barang->hargabeli ?></td>
                  <td><?php echo $barang->hargajual ?></td>
                  <td><img src="<?php echo base_url('upload/barang/'.$barang->gambar) ?>" width="64" /></td>
                  <td><?php echo $barang->keterangan ?></td>
                  <td width="250">
					<a href="<?php echo site_url('admin/barang/edit/'.$barang->kodebrg) ?>"
   				    class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit</a>
											
					<a onclick="deleteConfirm('<?php echo site_url('admin/barang/delete/'.$barang->kodebrg) ?>')"
					href="#!" class="btn btn-small text-danger"><i class="fa fa-fw fa-trash"></i> Hapus</a>
				  </td>
                </tr>
				<?php endforeach; ?>				
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php $this->load->view("admin/_partials/footer.php") ?>	  
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>	  	
    <?php $this->load->view("admin/_partials/modal.php") ?>	  
    <?php $this->load->view("admin/_partials/js.php") ?>	
	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
  </div>
</body>

</html>
