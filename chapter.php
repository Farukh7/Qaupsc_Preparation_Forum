<?php include('header.php'); 

$temp 

?>

<br><br><br><br>
<br><br><br><br>

<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <br>
        <div class="row "   >
            <div class="col-lg-4" style="background-color: #f7f7f7; padding-top: 30px; text-align: justify;" >
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
                                        <i class="fa fa-check text-primary me-2"></i>Best Mentors</div>
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
                                <br><br>
                                <!-- <marquee width="100%" direction="up" height="300px"> -->
                                    <?php 
                                    @$board=$_GET['board'];
                                    $sql=mysqli_query($con,"SELECT * FROM `subject` WHERE subject_board_name='$board'; ");

                                    while($fetch=mysqli_fetch_array($sql)){

                                       extract($fetch);

                                       ?>
                                       <div class="bg-white shadow d-flex align-items-center p-4" style="min-height: auto;">

                                            <div class="d-flex">


                                                <div class="ps-4">
                                                    <a href="chapter.php?id=<?php echo $subject_id;?>&subject_name=<?php echo $subject_name;?>&board=<?php echo $board ?>">
                                                     <span><?php echo $subject_name ?></span>
                                                     </a>
                                                     
                                                </div>

                                            </div>

                                        </div>
                                        <?php } ?>
                                <!-- </marquee>  -->
                            </div>
                        </div>
                    </div>
            </div>
            </div>


            
            <div class="col-lg-8">
                <div class="container">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-8 col-md-6 " >
                            <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                                <div class="text-center p-4 pt-0">
                                    <div class="row gx-0">
                                     <h2 class="font-50 text-center pb-5" style="margin-top:-80px"><strong>

                                       <?php 
                                       $id=$_GET['id'];
                                       $fuzail =$_GET['subject_name'];
                                       $sql=mysqli_query($con,"SELECT * FROM `subject` where subject_id='".$id."'");

                                       $fetch=mysqli_fetch_array($sql);
                                       echo $fetch['subject_name'];
                                       ?>
                                   </strong></h2>
                                   <div class="row">

                                       <?php  $id=$_GET['id'];
                                       $sql=mysqli_query($con,"SELECT * FROM `chapter` where subject_name='$id'");
                                       $r=mysqli_num_rows($sql);
                                       if($r==0){
                                        ?>



                                        <marquee><p style="color:red;font-size:15px;text-align:center;">No chapter is found.It will be avaivalbe as soon.</p> </marquee> 



                                    <?php  }else{

                                        while($fetch=mysqli_fetch_array($sql)){
                                            extract($fetch);
                                            {
                                                $temp = $chapter_id;
                                                ?>
                                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Mains Practice</div>
                                                <h5 class="mb-3"><?php echo $fuzail; ?></h5>
                                                <a href="question.php?id=<?php echo $chapter_id;?>" ><?php echo $chapter_name; ?></a>
                                                <a href="question.php?id=<?php echo $chapter_id;?>"><div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-1">View Questions</div></a>
                                                <br><br><br><br>
                                                
                                            <?php }
                                        }
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <marquee width="100%" direction="down" height="60%">
            <?php 
                                $sql=mysqli_query($con,"SELECT * FROM `question` where chapter_id='$temp' ");           
                                while($fetch=mysqli_fetch_array($sql)){
                                  extract($fetch);           
                                  ?>
            <div style="background-color: green;"> 
                <div class="row gx-0">

                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            
                            
                                <?php echo $chapter_question ?>
                            
                            
                        </div>
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



<section>




</section>




<?php include('footer.php'); ?>