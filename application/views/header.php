 <nav class="sb-topnav navbar navbar-expand" style="background-color: #142756;">
        <a class="navbar-brand" href="main.php" style="background-color: #142756; color:white">Doctor</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#" style="color:white"><i class="fas fa-bars"></i></button>
            
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
          <div class="input-group">
            <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" /> -->
            <!-- <div class="input-group-append">
              <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div> -->
          </div>
        </form>
            
        <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw" style="color: white;"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?php  echo site_url('Home/logout'); ?>">Logout</a>
            </div>
          </li>
        </ul>
      </nav>

      <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu" style="background-color: #142756;">
              <div class="nav">
                <a class="nav-link" href="<?php echo site_url('Category'); ?>" style="color: white;">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color:white;"></i></div>
                  Medicine Category 
                </a>

                <a class="nav-link" href="<?php echo site_url('Unit'); ?>" style="color: white;">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color:white;"></i></div>
                  Pharmacy Unit
                </a>
				
				<a class="nav-link"  href="<?php echo site_url('Manufacture'); ?>"  style="color: white;">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color:white;"></i></div>
                  Manufacture
                </a>

               

                <a class="nav-link" href="<?php echo site_url('Item'); ?>" style="color: white;">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color:white;"></i></div>
                  Medical Item 
                </a>
				
				 <a class="nav-link" href="<?php echo site_url('Role'); ?>" style="color: white;">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color:white;"></i></div>
                  Roles 
                </a>
                
                 
                 <a class="nav-link" href="<?php echo site_url('User'); ?>" style="color: white;">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color:white;"></i></div>
                  User Management
                </a> 
				 <a class="nav-link" href="<?php echo site_url('Userrole'); ?>" style="color: white;">
                  <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="color:white;"></i></div>
                  User Role
                </a> 
                
                
              </div>
            </div>     
          </nav>
        </div>