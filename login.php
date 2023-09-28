<?php include('header.php'); ?>




<?php 
include("dbcon.php");   
if(isset($_POST['submit1'])){
 
  
  $email=$_POST['em'];
  $pas=$_POST['pas'];
  $email=mysqli_real_escape_string($con,htmlentities(trim($email)));           
$pas=mysqli_real_escape_string($con,htmlentities(trim($pas)));
  $sql=mysqli_query($con,"SELECT * FROM `student` where student_email='$email' && student_password='$pas'");
  $fetch=mysqli_fetch_array($sql);
  $nam=$fetch['student_name'];
 $r=mysqli_num_rows($sql);
if($r==1 && $_SESSION['email']=="" ){
  session_start();
      $_SESSION['name']=$nam;
      $_SESSION['email']=$email;
      //session_id("my_session_id");
echo "<script>alert('Login Successfully')";//window.location.href='index.php'</script>";
}
// else{
//    echo "<script>alert('Invalid Details');window.location.href='signup.php'</script>";
//}
}

 
  ?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          












    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="#" class="sign-in-form" method="post">

            <h2 class="title">Sign in</h2>
          
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email Address" name="em" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i> 
              <input type="password" placeholder="Password" name="pas" />
            </div>
            <input type="submit" value="Login" name="submit1" class="btn solid" />

          </form>


          
          <form action="registerdata.php?chap_name=<?php echo $chap_name?>" enctype="multipart/form-data" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
           
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name" required />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" placeholder="Mobile No." name="phone" required />
            </div>
             <div class="input-field">
              <i class="fas fa-camera"></i>
              <input type="file" placeholder="Select Your Photo" name="st_img" required />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" required />
            </div>
            <input type="submit" class="btn" name="submit" value="Sign up" />
     
          </form>
        </div>
      </div>

     
    </div>












      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>