<?php 
   
  
?>

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
            <div class="container-fluid" data-aos="fade-down" style="opacity: 1; margin-top: 12%;"> 
              <h2 class="mt-4"></h2> 
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <b style='font-size:15px;'>User Managment </b>
                  </div>
            
                  <div class="card-body">
				  <?php  foreach($data as $row) {  ?>
                    <form method="post" enctype="multipart/form-data">
                      <input type="hidden" id="slno" name="slno"/>
                        <div id="preview"></div>
                      <div class="row">
                        <div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>First Name</b></label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" name="first" id="category" placeholder="Enter  Name" value="<?php echo $row->first_name; ?>" required="required" style="height:33px; padding:4px;">
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Last Name</b></label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" name="last" id="category" value="<?php echo $row->last_name; ?>" placeholder="Enter Last Name" required="required" style="height:33px; padding:4px;">
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Email</b></label>
                        </div>
						
						  <div class="col-md-3">
                          <input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>" id="category" placeholder="Enter Email" required="required" style="height:33px; padding:4px;">
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Mobile</b></label>
                        </div>
						

                        <div class="col-md-3">
                          <input type="text" class="form-control" name="mobile" id="category" value="<?php echo $row->mobile; ?>" placeholder="Enter Mobile" required="required" style="height:33px; padding:4px;">
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Password</b></label>
                        </div>
						

                        <div class="col-md-3">
                          <input type="password" class="form-control" value="<?php echo $row->password; ?>" name="password" id="category" placeholder="Enter Password" required="required" style="height:33px; padding:4px;">
                        </div>
						
						
						
						 <div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>User Type</b></label>
                        </div>

                        <div class="col-md-3">
                          <select style="width:100%;" name="type" required>
						  <option value="">Select Type</option>
						  <?php 
							$sql="select * from roles where status=1";
							$query=$this->db->query($sql);
							foreach($res=$query->result() as $rows)
							{    ?>
							<option <?php if($rows->role_id==$row->user_type) { echo "selected";}  ?> value="<?php  echo $rows->role_id; ?>"><?php  echo $rows->role_name; ?></option>
							<?php }  ?>
							</select>
                        </div>
						
                       
                        <div class="col-md-2">
                          <label for="name" style="font-size:17px; margin-top:6px;"><b style='font-size:15px;'>Active</b></label>
                    
                          <input <?php  if($row->status=='1' )  { echo "checked"; } ?>  type="checkbox" id="flag" name="flag" value="1" >
                        </div>
						
						<div class="col-md-2">
                          <label for="name" style="font-size:17px; margin-top:6px;"><b style='font-size:15px;'>Email Verify</b></label>
                    
                          <input <?php  if($row->is_email_verified=='1' )  { echo "checked"; } ?>  type="checkbox" id="flag" name="everify" value="1" ">
                        </div>
						
						<div class="col-md-2">
                          <label for="name" style="font-size:17px; margin-top:6px;"><b style='font-size:15px;'>Mobile Verify</b></label>
                    
                          <input <?php  if($row->is_mobile_verified=='1' )  { echo "checked"; } ?>  type="checkbox" id="flag" name="mverify" value="1" >
                        </div>

                        <div>
                          <input type="submit" id="submit" class="btn btn-success" name="submit" value="Save"/>

                          <input type="button" id="reset" class="btn btn-info" name="reset" onclick="clearit()"  value="Clear"/>
                        </div>
                      </div>
                    </form>
				  <?php  } ?>
                  </div>
                </div>

             
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
  AOS.init();
</script>
       <script>
	   function deleteit(myval)
		{
			var nconf;
      nconf = confirm("Do you really want to delete?")
      if(nconf==true){}else{return false;}
			
      var dataString = 'id='+ myval;
	  alert(myval);

      $.ajax(
			{  
				type: "POST",  
				url: "<?php echo base_url() ?>Category/delete", 
				data: dataString, 
				cache: false, 
				success: function(result)
				{	
					alert(result);
					if(result == "1")
					{
						alert('Record Delete');

					}
					else
					{
						$("#preview").html(result);
					}
        }
			});
		}
	   </script>
    </body>
</html>
