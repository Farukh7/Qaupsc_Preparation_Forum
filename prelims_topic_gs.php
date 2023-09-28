<?php   
include('header.php');
include('dbcon.php');
?>

 
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden  pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="images/gs.jpeg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="images/gs.jpeg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="text-align: justify;">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">OUR VISION</h6>
                    <h1 class="display-6 mb-4">Vision of QA UPSC Online Platform</h1>
                    <p>We all know how important a civil servant's role is in building an ideal society and a strong nation. That’s why our vision is not just to teach and complete the syllabus; rather the larger agenda is to produce as many of successful students as is humanly possible. More importantly, we are aimed at instilling human values, ethical values and compassion into our students, to make them better human beings and civil servants.</p>
                    <!--<p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>24x7 Service
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Personal Guidance
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Affordable Fee 
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Best Mentors
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+91 6306 459 944">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </span>
                                <span class="px-3">+91 6306 459 944</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section>
    <div class="container facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">

            <div class="row">
                <div class="col-md-8" style=" height: auto;">  
                    <?php 

                    $sql=mysqli_query($con,"SELECT * FROM `pp_test` where pp_test_type='GS' ORDER BY pp_test_id DESC");

                    while($fetch=mysqli_fetch_array($sql)){

                       extract($fetch);

                       ?>
                    <div class="row gx-0">
                        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                                <div class="d-flex" >
                                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                                            <i class="fa fa-car text-white"></i>
                                        </div>
                                            <div class="ps-4" >
                                                <a  href= 
                                                
                                                 <?php 
                                                
                                                if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION["email"]))
                                                {
                                                    echo  "test_attempt.php?test_id=".$pp_test_id."" ; 
                                                }
                                                else
                                                {
                                                   echo  "''"."data-bs-toggle='modal' data-bs-target='#exampleModal' ";  
                                                }
                                                
                                                ?>








                                                class="list-group-item"  style="color:black;text-align:center;font-weight:bold;font-size:22px;letter-spacing:1.5px;line-height:2.0;"><?php echo $pp_test_topic?></h3></a>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="col-md-4" style=" height: auto; text-align: justify;">
                <div class="container">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h6 class="text-primary text-uppercase mb-2">OUR VISION</h6>
                                <h6 class="display-6 mb-4">Vision of QA UPSC Online Platform</h6>
                                <p>We all know how important a civil servant's role is in building an ideal society and a strong nation. That’s why our vision is not just to teach and complete the syllabus; rather the larger agenda is to produce as many of successful students as is humanly possible. More importantly, we are aimed at instilling human values, ethical values and compassion into our students, to make them better human beings and civil servants.</p>
                                <!--<p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
                                <div class="row g-2 mb-4 pb-2">
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>24x7 Service
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Personal Guidance
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Affordable Fee 
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Best Mentors
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+91 6306 459 944">
                                            <span class="flex-shrink-0 btn-square bg-primary">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </span>
                                            <span class="px-3">+91 6306 459 944</span>
                                        </a>
                                    </div>
                                </div>
                                <marquee width="100%" direction="down" height="300px">
                                    <?php 

                                    $sql=mysqli_query($con,"SELECT * FROM `pp_test` where pp_test_type='CSAT' ORDER BY pp_test_id DESC");

                                    while($fetch=mysqli_fetch_array($sql)){

                                       extract($fetch);

                                       ?>
                                       <div class="bg-white shadow d-flex align-items-center p-4" style="min-height: auto;">

                                            <div class="d-flex">


                                                <div class="ps-4">

                                                     <span><?php echo $pp_test_topic ?></span>

                                                </div>

                                            </div>

                                        </div>
                                        <?php } ?>
                                </marquee> 
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</section>


<?php  include('footer.php'); ?>