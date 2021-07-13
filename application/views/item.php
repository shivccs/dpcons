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
                    <b style='font-size:15px;'>Item Master </b>
                  </div>
            
                  <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                      <input type="hidden" id="slno" name="slno"/>
                        <div id="preview"></div>
                      <div class="row">
                        <div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Item Name</b></label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" name="name" id="category" placeholder="Enter Item Name" required="required" style="height:33px; padding:4px;">
                        </div>
						
						 <div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Item Category</b></label>
                        </div>

                        <div class="col-md-3">
                          <select style="width:100%;" name="cat" required>
						  <option value="">Select Category</option>
						  <?php 
							$sql="select * from medicine_category where status=1";
							$query=$this->db->query($sql);
							foreach($res=$query->result() as $rows)
							{    ?>
								<option value="<?php  echo $rows->med_cat_id; ?>"><?php  echo $rows->category_name; ?></option>
							<?php }  ?>
							</select>
                        </div>
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Item Manufacturer</b></label>
                        </div>

                        <div class="col-md-3">
                          <select style="width:100%;" name="man" required>
						  <option value="">Select Manufacturer</option>
						  <?php 
							$sql="select * from manufacturer where status=1";
							$query=$this->db->query($sql);
							foreach($res=$query->result() as $rows)
							{    ?>
								<option value="<?php  echo $rows->manufacture_id; ?>"><?php  echo $rows->manufacture_name; ?></option>
							<?php }  ?>
							</select>
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Item Unit</b></label>
                        </div>

                        <div class="col-md-3">
                          <select style="width:100%;" name="unit" required>
						  <option value="">Select Unit</option>
						  <?php 
							$sql="select * from pharmacy_unit where status=1";
							$query=$this->db->query($sql);
							foreach($res=$query->result() as $rows)
							{    ?>
								<option value="<?php  echo $rows->punit_id; ?>"><?php  echo $rows->punit_name; ?></option>
							<?php }  ?>
							</select>
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Quantity</b></label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" name="quantity" id="category" placeholder="Enter Quantity" required="required" style="height:33px; padding:4px;">
                        </div>
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Price</b></label>
                        </div>

                        <div class="col-md-3">
                          <input type="text" class="form-control" name="price" id="category" placeholder="Enter Price" required="required" style="height:33px; padding:4px;">
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Expiry Date</b></label>
                        </div>

                        <div class="col-md-3">
                          <input type="date" class="form-control" name="date" id="category" placeholder="Expiry Date" required="required" style="height:33px; padding:4px;">
                        </div>
						
						<div class="col-md-3">
                          <label for="name" style="margin-top:6px; font-size:17px;"><b style='font-size:15px;'>Description</b></label>
                        </div>

                        <div class="col-md-3">
                         <textarea name="description" style="width:100%; height:100px;" required></textarea>
                        </div>

                       
                        <div class="col-md-2">
                          <label for="name" style="font-size:17px; margin-top:6px;"><b style='font-size:15px;'>Active</b></label>
                    
                          <input type="checkbox" id="flag" name="flag" value="1" checked="checked">
                        </div>

                        <div>
                          <input type="submit" id="submit" class="btn btn-success" name="submit" value="Save"/>

                          <input type="button" id="reset" class="btn btn-info" name="reset" onclick="clearit()"  value="Clear"/>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="card mb-4">
                  <div class="card-header">     
                    <b style='font-size:15px;'>Table Record</b> 
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th style='font-size:15px;'>Item Name</th>
							<th style='font-size:15px;'>Price</th>
							<th style='font-size:15px;'>Quantity</th>
                            <th style='font-size:15px;'>Added By</th>
                            <th style='font-size:15px;'>Action</th>
                          </tr>
                        </thead>
                                        
                        <tbody>
						<?php
                       
						foreach($data as $row) {  ?>
                            <tr>
                            <th style='font-size:15px;'><?php echo $row->medical_item_name; ?></th>
							<th style='font-size:15px;'><?php echo $row->price; ?></th>
							<th style='font-size:15px;'><?php echo $row->aviable_qty; ?></th>
                            <th style='font-size:15px;'><?php $create=$row->created_by;
							$sql="select * from users where user_id=$create";
							$query=$this->db->query($sql);
							foreach($res=$query->result() as $rows)
							{
								echo $rows->first_name;
							}
							




							?></th>
                            <th style='font-size:15px;'><a style='cursor:pointer; float:left' href="<?php echo base_url('Item/delete/?id='.$row->medical_item_id);?>">Delete</a>&nbsp;&nbsp;
							<a style='cursor:pointer; float:left' href="<?php echo base_url('Item/edit/?id='.$row->medical_item_id);?>">Edit</a>
							
							
							</th>
                          </tr>
						<?php } ?>     
                        </tbody>
                      </table>
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
