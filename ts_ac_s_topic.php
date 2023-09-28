  <?php include('header.php'); 

$temp 

?>

<br><br><br><br>
<br><br><br><br>

<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <br>
        <div class="row "   >
            <div class="col-lg-4" style="background-color: #f7f7f7; padding-top: 30px;" >
                <div class="container">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h-100">
                                <h6 class="text-primary text-uppercase mb-2">QA UPSC</h6>
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
                                <br>
                            </div>
                        </div>
                    </div>
            </div>
            </div>


            
            <div class="col-lg-8">
                <?php  
                
                $sql=mysqli_query($con,"SELECT * FROM `ts_ac_s_topic` ORDER BY ts_ac_s_topic_id DESC"); 
                
               while($fetch=mysqli_fetch_array($sql)){
                extract($fetch);
                
                    ?>
                    <div class=" wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-white shadow d-flex align-items-center " style="min-height: 150px;     padding-right: 45px;     padding-left: 45px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-book text-white"></i>
                                </div>
                                <div class="ps-4">
                                 <a href="ts_ac_s_topic_question.php?id=<?php echo $ts_ac_s_topic_id;?>" id="nm" class="list-group-item " style="color:black;text-align:left;font-weight:bold;font-size:22px;letter-spacing:1.5px;line-height:1.4;"><?php echo $ts_ac_s_topic_topic?></a> 
                             </div>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
</div>
</div>
</div>



<section>




</section>




<?php include('footer.php'); ?>