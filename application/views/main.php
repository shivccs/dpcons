<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include "link.php"; ?>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>

    <body class="sb-nav-fixed">
       <?php 
        include "header.php";
       ?>

        <div id="layoutSidenav_content" style="background-color: #e4eae6;">
          <main>
            <div class="container-fluid" data-aos="fade-down"> 
              <h1 class="mt-4"></h1> 
              <div class="row">
                <div class="col-xl-3 col-md-6">
                  <div class="card text-white mb-4" style="background-color: #2ccbba;">
                    <div class="card-body">Category Master</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="<?php echo site_url('Category'); ?>">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                  
                <div class="col-xl-3 col-md-6">
                  <div class="card text-white mb-4" style="background-color: #ff8a66">
                    <div class="card-body">Pharmacy Unit</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="<?php echo site_url('Unit'); ?>">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                  <div class="card  text-white mb-4" style="background-color: #f57a82">
                    <div class="card-body">Manufacturer</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="<?php echo site_url('Manufacture'); ?>">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                  <div class="card text-white mb-4" style="background-color: #9575cd"> 
                    <div class="card-body">Item</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="<?php echo site_url('Item'); ?>">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-md-6">
                  <div class="card  text-white mb-4" style="background-color: #ff8a66">
                    <div class="card-body">Roles</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="<?php echo site_url('Role'); ?>">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-3 col-md-6">
                  <div class="card  text-white mb-4" style="background-color: #9575cd">
                    <div class="card-body">Users</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="<?php echo site_url('User'); ?>">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                
                <!--<div class="col-xl-3 col-md-6">
                  <div class="card  text-white mb-4" style="background-color: #2ccbba">
                    <div class="card-body">Item Size</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="itemsize.php">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                  <div class="card text-white mb-4" style="background-color: #f57a82"> 
                    <div class="card-body">Pending Order</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="order.php">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>-->
                
                <div class="col-xl-3 col-md-6">
                  <div class="card text-white mb-4" style="background-color: #2ccbba;">
                    <div class="card-body">User Role</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="<?php echo site_url('Userrole'); ?>">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                
                <!--<div class="col-xl-3 col-md-6">
                  <div class="card  text-white mb-4" style="background-color: #f57a82">
                    <div class="card-body">Configuration</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="config.php">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                  <div class="card text-white mb-4" style="background-color: #ff8a66">
                    <div class="card-body">Coupon Master</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="coupon.php">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-3 col-md-6">
                  <div class="card text-white mb-4" style="background-color: #9575cd"> 
                    <div class="card-body">SEO Master</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                      <a class="small text-white stretched-link" href="seo.php">View Details</a>
                      <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>-->
                
              </div>     
            </div>
          </main>
          
          
        </div>
      </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
  AOS.init();
</script>
    </body>
</html>
