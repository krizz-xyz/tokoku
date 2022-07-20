  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="collapse navbar-collapse" id="navbarResponsive">
	  <!-- Start sidebar -->
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>" data-toggle="tooltip" data-placement="right" title="Overview">
          <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Overview</span>
          </a>
        </li>
 
        <li class="nav-item <?php echo $this->uri->segment(2) == 'barang' ? 'active': '' ?>" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menubarang" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Barang</span>
          </a>
          <ul class="sidenav-second-level collapse" id="menubarang">
            <li>
              <a href="<?php echo site_url('admin/barang/add') ?>">Barang Baru</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/barang') ?>">Daftar Barang</a>
            </li>
          </ul>
        </li>
 
        <li class="nav-item <?php echo $this->uri->segment(2) == 'customer' ? 'active': '' ?>" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menucustomer" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span class="nav-link-text">Customer</span>
          </a>
          <ul class="sidenav-second-level collapse" id="menucustomer">
            <li>
              <a href="<?php echo site_url('admin/customer/add') ?>">Customer Baru</a>
            </li>
            <li>
              <a href="<?php echo site_url('admin/customer') ?>">Daftar Customer</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Settings</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
