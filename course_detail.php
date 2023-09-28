<?php include('header.php');
	  include('dbcon.php');
?>
<br><br><br><br>



<!-- About Start -->
<div class="container-xxl py-6">
	<?php 
            $course_id =$_GET['course_id'];
            $sql=mysqli_query($con,"SELECT * FROM `course` WHERE id='$course_id'");
           
           while($fetch=mysqli_fetch_array($sql)){


           extract($fetch);
           }
            ?>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="admin/upload/course/<?php echo $cou_image?>" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="admin/upload/course/<?php echo $cou_image?>" alt="" style="width: 200px; height: 200px;">
                </div>
            </div> 
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2"><?php echo $cou_name ?></h6>
                    <h1 class="display-6 mb-4"><?php echo $cou_title ?></h1>
                    <p><?php echo $cou_desc ?></p>
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
                            <a class="btn btn-primary py-3 px-5" href="buy_now.php?id=<?php echo $id;?>">Buy Now</a>
                        </div>
                        <div class="col-sm-6">
                            <button class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <!-- <i class="fa fa-phone-alt text-white"></i> -->
                                    <i class="fa fa-inr-alt text-white">₹</i>
                                </span>
                                <span class="px-3">₹&nbsp;<?php echo $cou_price;?>&nbsp;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



 





<?php include('footer.php'); ?>