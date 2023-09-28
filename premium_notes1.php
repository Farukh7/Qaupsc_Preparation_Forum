
<?php 

include('header.php');
include('dbcon.php');
?>

<style>
#nm:hover {
background-color: #fd5f00;
font-size:25px;
}

</style>


<br><br><br><br><br>

<section class="mb-5">
                <h2 class="font-50 text-center pb-5" style="margin-top:-80px"><strong>Premium Notes</strong></h2>
<div class="container-fluid">
    <div class="row gx-0">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <?php 
            @$id=$_GET['id'];
            $sql=mysqli_query($con,"SELECT * FROM `notes_premium` ORDER BY notes_premium_id DESC ");
            while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);
            ?>
            <div class=" wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center " style="min-height: 150px;     padding-right: 45px;     padding-left: 45px;">
                      <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="fa fa-book text-white"></i></div>
                            <div class="ps-4">
                                <a  <?php 
                                
                                if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION["email"]))
                                {
                                echo "href= 'notes_premium_details.php?id=".$notes_premium_id."'"; 
                                }
                                else
                                {
                                echo "data-bs-toggle="."modal"." data-bs-target="."#exampleModal"." ";  
                                }
                                ?>       
                                
                                style="color:black;text-align:center;font-weight:bold;font-size:22px;letter-spacing:1.5px;line-height:2.0;" 
                                class="list-group-item list-group-item"><?php echo $notes_premium_heading?></h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-lg-4" style=" padding-left:10px; " > 
            <div class="container">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-12 wow fadeInUp bg-white shadow d-flex" data-wow-delay="0.5s">
                            <div class="h-100" style="padding:20px; text-align: justify;">
                                <h6 class="text-primary text-uppercase mb-2">OUR VISION</h6>
                                <h6 class="display-6 mb-4" style="padding-left: 10px">Vision of QA UPSC Online Platform</h6>
                                <p>We all know how important a civil servant's role is in building an ideal society and a strong nation. That’s why our vision is not just to teach and complete the syllabus; rather the larger agenda is to produce as many of successful students as is humanly possible. More importantly, we are aimed at instilling human values, ethical values and compassion into our students, to make them better human beings and civil servants.</p>
                                <!--<p class="mb-4" style="padding-left: 10px">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
                                <div class="row g-2 mb-4 pb-2" style="padding-left: 10px">
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>24x7 Service
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Personal Guidance
                                    </div>
                                    <div class="col-sm-6">
                                        <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
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
        </div>
        </div

</section>

<?php 

include('footer.php');
?>