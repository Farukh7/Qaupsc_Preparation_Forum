<?php include('header.php'); 
	  include('dbcon.php');

	 
?>

<style type="text/css">
 
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
</style>

 
<div class="container-xl px-4 mt-4">
    <div class="row">
        
        </div>
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-12">
                <div class="card-header">Account Details</div>
                
                
                <?php 
                $user = $_GET['id'];
                
                     $sql=mysqli_query($con,"SELECT * FROM `student` where student_email='$user'");

                                       $fetch=mysqli_fetch_array($sql);
                                        echo $fetch['student_id'];
                
                ?>
                
                
                
                <div class="card-body">
                    <form method="POST" action="update_profile_action.php?id=<?php echo $st_email ?>" enctype="multipart/form-data">
                       


				                <div class="card-body text-center">

				                     

				                    <img id="imgPreview" style="width:200px; height:200px; border-radius: 100px" >
				                 

				                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 2 MB</div>
				              
				                </div>
				            
                    	<div class="col-xl-12">
				        
                        <div class="row gx-3 mb-3">

                            <div class="col-md-12">
                                <label class="small mb-1" for="inputFirstName">New Profile</label>
                                <input class="form-control" type="FILE" name="st_photo" onchange="previewImage(event)"  required>
                            </div>
                            
                        </div> 
                        
                        <div class="row gx-3 mb-3">

                            <div class="col-md-12">
                                <label class="small mb-1" for="inputFirstName">Full name</label>
                                <input class="form-control" id="inputFirstName" name="name" value="<?php echo $fetch['student_name'] ?>" type="text"
                                 placeholder="Enter your name" >
                            </div>
                            
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-12">
                                <label class="small mb-1" for="inputOrgName">Password</label>
                                <input class="form-control" id="inputOrgName" name="password" type="text" value="<?php echo $fetch['student_password'] ?>" placeholder="Enter your new password">
                            </div>
                          
                        </div>

                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter your email address" value="<?php echo $st_email ?>" readonly>
                        </div>

                        <div class="row gx-3 mb-3">

                            <div class="col-md-12">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" name="phone" type="tel" value="<?php echo $fetch['student_phone'] ?>" placeholder="Enter your phone number"  >
                            </div>
                           
                        </div>

                        <input class="btn btn-primary" type="submit" name="submit" style="border-radius: 10px"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 <script>
  function previewImage(event) {
  var preview = document.getElementById('imgPreview');
  var file = event.target.files[0];
  var reader = new FileReader();

  reader.onload = function() {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}

</script>

<?php include('footer.php'); ?>