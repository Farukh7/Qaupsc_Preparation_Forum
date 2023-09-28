<?php 
include("dbcon.php");

if(isset($_POST['submit'])){
 
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $s=mysqli_query($conn,"SELECT * FROM `registration` WHERE email='$email'");
    $r=mysqli_num_rows($s);
   
     if($r==1){
      
header("location:change_pass.php?email=$email");
$otp=rand(111111,999999);
$header="Your 6-Digit Otp Verification Code-".$otp;
$from="dxgiexdemo@gmail.com";
mail($email,$from,$header);
$a=mysqli_query($conn,"UPDATE `registration` SET `otp`='$otp' WHERE email='$email'");
    }else{
         echo "<script>alert('Email Is Not Regitered With US');</script>";
    }
    
   
   

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login/css/style.css">

    <title>Education</title>
  </head>
  <style>
       @media only screen and (max-width: 600px) {
       .bgimg{
       background-image: url('login/images/mobile-login-concept-illustration_114360-83 (1).webp');
       display:none;
   }
   }
   
   .bgimg{
       background-image: url('login/images/mobile-login-concept-illustration_114360-83 (1).webp');
   }
   
  </style>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2 bgimg" ></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          
                    <div class="col-md-7">
                    <div class="mb-4"><a href="https://dextlearning.com/"><img src="images/logo/Dlogo.png" width="150px"
                    height= "110px"></a>
                         
               <h3 style="padding-top:5px;"><b> Your Learning <font color="#699DF0">Destination</font></b></h3>
                    <h3 style="color: #699DF0">Enter Your Registered Mail </h3>
                    <!--<p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>-->
                    </div>
                    <form  method="post">
                    <div class="form-group first" style=" padding: 5px;
                    border: 1px solid #699DF0;
                    border-radius: 50px;
                    margin-bottom: 10px;
                    padding-left: 15px;">
                    <label for="username">Email Address</label>
                    <input type="text" class="form-control" id="username" name="email">
                    </div><br>
                    <button type="submit" value="Submit " name="submit" class="btn btn-block btn-primary" style="border-radius: 50px;
                    border-color: #699DF0; background:#699DF0!important;"> Forget Password </button>
                    
                    </form>
                    </div>                
               
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
  </body>
</html>