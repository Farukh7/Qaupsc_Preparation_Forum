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
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">GS</h6>
                    <h1 class="display-6 mb-4">We Help Students To Pass Test & Get A License On The First Try</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Online Tracking
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Best Trainers
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </span>
                                <span class="px-3">+012 345 6789</span>
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

                    $sql=mysqli_query($con,"SELECT * FROM `ias_prelims_test` ORDER BY ias_prelims_test_id  DESC");

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
                                                
                                                if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['email']!="")
                                                {
                                                    echo  "ias_prelims_test_attempt.php?test_id=".$ias_prelims_test_id."";
                                                }
                                                else
                                                {
                                                   echo  "''"."data-bs-toggle='modal' data-bs-target='#exampleModal' ";  
                                                }
                                                
                                                ?> class="list-group-item"  style="color:black;text-align:center;font-weight:bold;font-size:22px;letter-spacing:1.5px;line-height:2.0;"><?php echo $ias_prelims_test_topic?></h3></a>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="col-md-4" style=" height: auto;">
                <div class="container">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h6 class="text-primary text-uppercase mb-2">CSAT</h6>
                                <h6 class="display-6 mb-4">We Help Students To Pass Test & Get A License On The First Try</h6>
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <div class="row g-2 mb-4 pb-2">
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Online Tracking
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Best Trainers
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                            <span class="flex-shrink-0 btn-square bg-primary">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </span>
                                            <span class="px-3">+012 345 6789</span>
                                        </a>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</section>


<?php  include('footer.php'); ?>