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
    <!-- Icon Cards-->
	  <?php $this->load->view("admin/_partials/iconcards.php") ?>	  	  
	  <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chart Example</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>   
	    <!-- Example Bar Chart Card-->
      <?php $this->load->view("admin/_partials/chart.php") ?>	  	  
      <!-- Example DataTables Card-->
      <?php $this->load->view("admin/_partials/datatable.php") ?>	    
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