<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include "link.php"; ?>
      
    </head
    
    <body class="bg-primary">
      <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
          <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"  style="padding: 0px !important;"><h3 class="text-center font-weight-light my-4"><b>Admin Login</b></h3></div>
                    <div class="card-body">
                      <form method="post">
                        <div id="message" style="color:red; font-size: 18px; text-align:center; font-weight:700; center;"><?php if(!empty($this->session->flashdata('rec'))) {  $flash=$this->session->flashdata('rec'); echo $flash;} ?></div>
                        <div class="form-group">
                          <label class="small mb-1" for="inputEmailAddress" style="font-size: 18px;">User Name</label>
                          <input class="form-control py-4" id="username" name="username" type="email" placeholder="Enter Username" required />
                        </div>
                        
                        <div class="form-group">
                          <label class="small mb-1" for="inputPassword" style="font-size: 18px;">Password</label>
                          <input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter Password" required="" />
                        </div>
                                            
                        <center>
                          <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <input value="Submit" class="btn btn-primary" style="color:white;background-color: #F84B3F;border:1px solid #F84B3F;" type="submit" name="submit"  >
                            
                          </div>
                        </center>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
        </div>  
      </div>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

     
    </body>
  </html>