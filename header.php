<?php  
 include("dbcon.php");   

 
 if(session_status() !== PHP_SESSION_ACTIVE)
 {
  
    session_start();
 }
 

if(isset($_POST['submit1'])  ){
 
  $email=$_POST['em'];
  $pas=$_POST['pas'];
 
  $sql=mysqli_query($con,"SELECT * FROM `student` where student_email='$email' && student_password='$pas'");
  $fetch=mysqli_fetch_array($sql);
   
 $r=mysqli_num_rows($sql);
if($r==1){
  // session_start();
           $_SESSION['name']=$fetch['student_name'];
      $_SESSION['email']=$fetch['student_email'];
echo "<script>alert('Login Successful') </script>";
}else{
   echo "<script>alert('Invalid Details') </script>";
}
 
}

  ?>

<!-- PushAlert -->
<script type="text/javascript">
        (function(d, t) {
                var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
                g.src = "https://cdn.pushalert.co/integrate_6e7a90578af49a22de8f3035a1d331cd.js";
                s.parentNode.insertBefore(g, s);
        }(document, "script"));
</script>
<!-- End PushAlert -->




    <!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 
<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




 


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex" style="border-bottom: solid 0.1px grey;">
            <div class="col-lg-7 px-5 text-start">

            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 7985280690</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/profile.php?id=100088755229580"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://twitter.com/QaUpsc"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.linkedin.com/in/qa-upsc-0462b8263/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/qaupsc/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0" style="border-bottom: 0.1px solid rgb(227, 227, 227);">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-1 px-lg-2">
            <img src="images/logo/11logo.png" style="height: 100px; width: auto; padding-top: 21px;"> <!-- <h2 class="m-0">Q&A UPSC</h2> -->
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mains Practice</a>
                    <div class="dropdown-menu bg-light m-0">
                        <?php include("dbcon.php");
                        $sql3=mysqli_query($con,"SELECT distinct(board_name) from board");
                        while($fetch=mysqli_fetch_array($sql3)){
                            extract($fetch);?>
                            <a class="dropdown-item"  href="subject.php?board=<?php echo $board_name;?>"><?php echo $board_name;?></a>
                        <?php }?>
                    </div>
                </div>
                    <a href="courses.php" class="nav-item nav-link">Courses</a>
                    
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Prelims Practice</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="prelims_topic_gs.php" class="dropdown-item">GS</a>
                        <a href="prelims_topic_csat.php" class="dropdown-item">CSAT</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Important Notes</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="notes.php" class="dropdown-item">Free Notes</a>
                        <a href="premium_notes1.php" class="dropdown-item">Premium Notes</a>
                    </div>
                </div>




                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Test Series</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="ts_ias_mains_topic.php" class="dropdown-item">IAS MAINS</a>
                        <a href="ts_uppsc_mains.php" class="dropdown-item">UPPSC MAINS</a>
                        <a href="ts_ac_s_topic.php" class="dropdown-item">ASSISTANT COMMANDANT P-II</a>
                        <hr><hr>
                        <a href="ias_prelims_test.php" class="dropdown-item">IAS Prelims Test</a>
                        <a href="epfo_test.php" class="dropdown-item">EPFO</a>
                        <a href="uppsc_test.php" class="dropdown-item">UPPSC</a>
                        <a href="ac_f_test.php" class="dropdown-item">ASSISTANT COMMANDANT P-I</a>
                    </div>
                </div>
                <a href="analysis_evaluation.php" class="nav-item nav-link">Analysis & Evaluation</a>
            



          

              <?php
                if(   isset($_SESSION['email']))
                    {
                     // session_start();
                      $st_email=$_SESSION['email'];

                      ?>
            <div class="nav-item dropdown">
                <a href="#" class="btn btn-primary py-4 px-lg-5 " style="background-color: #0C2B48;" data-bs-toggle="dropdown">Profile</a>
                <div class="dropdown-menu bg-light" style="min-width: 147px;">
                        <?php 
                        $sql2=mysqli_query($con,"SELECT * FROM `student`");
                        $row3=mysqli_fetch_array($sql2)
                            ?>
                    <a href="profile_card.php?st_email=<?php echo $_SESSION['email']; ?>" class="dropdown-item " >
                      Profile</a>
                     <a href="logout.php" class="dropdown-item" >Logout</a>
                </div>
            </div>
                <?php                     
                    }
                    
                    else {     

                ?>
              <a   data-bs-toggle='modal' data-bs-target='#exampleModal'
              class="btn btn-primary py-4 px-lg-5  d-lg-block" style="background-color: #0C2B48;" >Login <i class="fa fa-arrow-right ms-3"></i></a>
              <?php 
              }

               
              ?>

 
            </div>
 
        </div>

    </nav>
    <!-- Navbar End -->
 
                <!-- modal popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
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
            <input type="submit" value="Login" name="submit1"  class="btn btn-primary" style="background-color: #0C2B48;" />

          </form>


          
          <form action="registerdata.php" enctype="multipart/form-data" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
           
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name"  />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"  />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" placeholder="Mobile No." name="phone"  />
            </div>
             <div class="input-field">
              <i class="fas fa-camera"></i>
              <input type="file" placeholder="Select Your Photo" name="st_img"  />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass"  />
            </div>
            <input type="submit" class="btn btn-primary" style="background-color: #0C2B48;" name="submit" value="Sign up" />
     
          </form>
        </div>
      </div>

     
    </div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4842462768929207"
     crossorigin="anonymous"></script>



 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> 