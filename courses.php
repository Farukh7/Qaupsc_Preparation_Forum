<?php include('header.php');
      include('dbcon.php');
?>


 
<!-- Courses Start -->
<div class="container-xxl courses my-4 py-5 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Our Courses</h6>
            <h1 class="display-6 mb-4">Prepare yourself with our custom created courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php        
                $sql=mysqli_query($con,"SELECT * FROM `course`");           
                while($fetch=mysqli_fetch_array($sql)){
                extract($fetch);           
            ?>
             
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="padding-bottom: 10px; ">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">₹<?php echo $cou_price ?></div>
                        <h5 class="mb-3"><?php echo $cou_name ?></h5>
                        <!-- <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p> -->
                        <p><?php echo $cou_title ?></p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $date ?></li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="admin/upload/course/<?php echo $cou_image?>" style="width: 450px; height: 300px;">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="course_detail.php?course_id=<?php echo $id;?>">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
<!-- Courses End -->



<?php include('footer.php') ?>