<?php include('header.php'); 

 
if(session_status() !== PHP_SESSION_ACTIVE)
{
echo "nahi chal raha session";  
}


?>

<br><br><br><br>

<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-8">
                <?php  
                
                @$board=$_GET['board']; 
                @$notes=$_GET['notes']; 
                @$class=$_GET['class']; 
                $sql=mysqli_query($con,"SELECT * FROM `subject` where subject_board_name='$board'"); 
                $r=mysqli_num_rows($sql);
                if($r==0){
                ?>  <marquee><p style="color:red;font-size:15px;text-align:center;">No Subject is found.It will be avaivalbe as soon.</p> </marquee> 



            <?php  }else{
               while($fetch=mysqli_fetch_array($sql)){
                extract($fetch);
                if($notes==null){
                    ?>
                    <div class=" wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-white shadow d-flex align-items-center " style="min-height: 150px;     padding-right: 45px;     padding-left: 45px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-book text-white"></i>
                                </div>
                                <div class="ps-4">
                                 <a href="chapter.php?id=<?php echo $subject_id;?>"> </a>
                                 <a href="chapter.php?id=<?php echo $subject_id;?>&subject_name=<?php echo $subject_name;?>&board=<?php echo $board ?>" id="nm" class="list-group-item " style="color:black;text-align:left;font-weight:bold;font-size:22px;letter-spacing:1.5px;line-height:1.4;"><?php echo $subject_name?></a> 
                             </div>
                         </div>
                     </div>
                 </div>
             <?php }}} ?>
         </div>



        <div class="col-lg-4" style=" padding-left:10px; " > 
            <div class="container">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-12 wow fadeInUp bg-white shadow d-flex" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h6 class="text-primary text-uppercase mb-2" style="padding-left: 10px; padding-top:10px">Our Vision</h6>
                                <h6 class="display-6 mb-4" style="padding-left: 10px">Vision of QA UPSC Online Platform</h6>
                                <p style="padding-left: 10px; padding-right: 10px; text-align: justify;">We all know how important a civil servant's role is in building an ideal society and a strong nation. That’s why our vision is not just to teach and complete the syllabus; rather the larger agenda is to produce as many of successful students as is humanly possible. More importantly, we are aimed at instilling human values, ethical values and compassion into our students, to make them better human beings and civil servants.</p>
                                <!--<p class="mb-4" style="padding-left: 10px">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
                                <div class="row g-2 mb-4 pb-2" style="padding-left: 10px">
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
                                <!-- <marquee width="100%" direction="up" height="300px"> -->
                                    <?php 

                                    $sql=mysqli_query($con,"SELECT * FROM `board` ");

                                    while($fetch=mysqli_fetch_array($sql)){

                                       extract($fetch);

                                       ?>
                                       <div class="bg-white shadow d-flex align-items-center p-4" style="min-height: auto;">

                                            <div class="d-flex">


                                                <div class="ps-4">
                                                    <a href="subject.php?board=<?php echo $board_name;?>"> 
                                                     <span><?php echo $board_name ?></span>
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
    </div>
</div>
</div>  


<?php include('footer.php'); ?>