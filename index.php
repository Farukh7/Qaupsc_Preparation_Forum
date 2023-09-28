<?php 

include('dbcon.php');
include('header.php');

?>

<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4842462768929207"
     crossorigin="anonymous"></script>
<style>.tabs {
  margin: 24px 0;
  max-width: 800px;
}
.tabRow a, .tabRow a:hover {
  text-decoration: none;
}
.tabRow ul {
  margin: 0 0 -1px;
  padding: 0;
  list-style-type: none;
  overflow: hidden;
}
.tabContainer {
  background: aliceblue;
  border: 1px solid silver;
  min-height: 200px;
  margin: -1px 0 0;
  border-radius: 3px;
  border-top-left-radius: 0;
}
.tabContent {
  padding: 12px;
  background-color: white;
}
.tab {
  color: gray;
  border: 1px solid silver;
  background: white;
  border-left: none;
  text-decoration: none;
  cursor: pointer;
  float: left;
  padding: 5px;
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
}
.tab:hover {
  color: dodgerblue;
}
.tab.active {
  color: dodgerblue;
  background: aliceblue;
  border-bottom: none;
  padding-bottom: 6px;
}
.tab:nth-child(1) {
  border-left: 1px solid silver;
  border-top-left-radius: 3px;
}
.tab:nth-last-child(1) {
  border-top-right-radius: 3px;
}

/*#tabs1{*/
/*  max-width:600px;*/
/*}*/
/*#tabs2{*/
/*  max-with:600px;*/
/*  margin-top: 25px;*/
/*  margin-left: 15px;*/
/*}*/
/*#tabs3{*/
/*  max-width: 600px;*/
/*}*/
/*#tabs4{*/
/*  max-width: 700px;*/
/*  margin-top: 40px;*/
/*  margin-left: 15px;*/
}
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: white;
}
.tabContainer{
  max-width: 600px;
}

</style>
<script>addEventListener('DOMContentLoaded', (event) => {

  function showTabs(ids, index) {

      // Convert ids to array if needed
    if ( Array.isArray(ids) == false ) {
      ids = new Array(ids);
    }
      // For each tab container there is
    ids.forEach( ( id ) => {

      let container = document.getElementById(id);

      if ( container ) {

        let tabs = container.querySelectorAll( ".tab" );
        let tabContents = container.querySelectorAll( ".tabContent" );

          // If tabs and contents count differs, we want smaller number, otherwise we run out of bounds.
        let maxIterate = Math.min(tabs.length, tabContents.length);
          //console.log(maxIterate);

          // If selected tab has bigger nuber than we can give
        index = index > maxIterate ? maxIterate : index;

        for ( let i = 0; i < maxIterate; i++ ) {
          let tab = tabs[i];
          let content = tabContents[i];

          tab.classList.remove("active");
          content.style.display = "none";
          content.style.visibility = "hidden";

          tabs[i].onclick = function() { showTabs(id, i) };

          if ( i == index ) {
            tab.classList.add("active");
            content.style.display = "block";
            content.style.visibility = "visible";
          }
        }
      }
    });
  }
  showTabs("tabs1", 0);
  showTabs(["tabs2", "tabs3","tabs4","tabs5","tabs6"], 0);
  
});
</script>


</head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4842462768929207"
     crossorigin="anonymous"></script>
<body>


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 650px;">
                    <img class="w-100" src="img/qabanner1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">We provide personal mentorship to help you succeed!</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn more</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 650px;">
                    <img class="w-100" src="img/qabanner2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">  
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">QAUPSC a digital approach towards Civil Services Prep.</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn more</a>
                                    <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Objective</h5>
                            <span style="text-align: justify;">To inculate in aspirants question solving qualities through the best guidance and practice modules to clear the UPSC exam.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Mission</h5>
                            <span style="text-align: justify;">To provide aspirants the best practice opportunities and environment and enable them to achieve higher levels of competitive excellence.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Vision</h5>
                            <span style="text-align: justify;">To create administratively competent human resources excelling in both moral and ethical values in public life and nation building.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->










<!-- About Start -->
<div class="container-xxl py-2">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/qabanner1.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/logo.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                    <h1 class="display-6 mb-4">QA UPSC is an online problem solver for UPSC Civil Services Exams (CSE)</h1>
                    
                    <p style="text-align: justify;">We provide smart solutions to the aspirants who are willing or already appearing in UPSC CSE Exams through Tutorials/ Video classes, Important Notes based on the demand of the candidates of any part state district of India. </p> 
                    <p class="mb-4" style="text-align: justify;">We started with a vision of quality and affordable Aspirants centric online education that giving stress to self-study or home-study.</p>
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
                            <a href="about.php" class="btn btn-primary py-3 px-5" href="">Read More</a>
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
<!-- About End -->



<!-- Courses Start -->
<div class="container-xxl  my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Our Courses</h6>
            <h1 class="display-6 mb-4">Prepare yourself with our custom created courses.</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php        
                $sql=mysqli_query($con,"SELECT * FROM `course`");           
                while($fetch=mysqli_fetch_array($sql)){
                extract($fetch);           
            ?>
             
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"><?php echo $cou_price ?></div>
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













<!-- Courses Start -->
<!--<div class="container-xxl courses my-6 py-6 pb-0">-->
<!--    <div class="container">-->
<!--        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 850px;">-->
<!--            <h6 class="text-primary text-uppercase mb-2">Our Courses</h6>-->
<!--            <h1 class="display-6 mb-4">fast and focused with QAUPSC! personal mentorship to help you succeed on the UPSC Civil Services Exam.</h1>-->
<!--        </div>-->
<!--        <div class="row g-4 justify-content-center">-->
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
<!--            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
<!--                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">-->
<!--                    <div class="text-center p-4 pt-0">-->
<!--                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>-->
<!--                        <h5 class="mb-3">Premium Lessons</h5>-->
<!--                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>-->
<!--                        <ol class="breadcrumb justify-content-center mb-0">-->
<!--                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>-->
<!--                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>-->
<!--                        </ol>-->
<!--                    </div>-->
<!--                    <div class="position-relative mt-auto">-->
<!--                        <img class="img-fluid" src="img/courses-1.jpg" alt="">-->
<!--                        <div class="courses-overlay">-->
<!--                            <a class="btn btn-outline-primary border-2" href="">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
            
            
<!--            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">-->
<!--                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">-->
<!--                    <div class="text-center p-4 pt-0">-->
<!--                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>-->
<!--                        <h5 class="mb-3">Platinum Courses</h5>-->
<!--                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>-->
<!--                        <ol class="breadcrumb justify-content-center mb-0">-->
<!--                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>-->
<!--                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>-->
<!--                        </ol>-->
<!--                    </div>-->
<!--                    <div class="position-relative mt-auto">-->
<!--                        <img class="img-fluid" src="img/courses-2.jpg" alt="">-->
<!--                        <div class="courses-overlay">-->
<!--                            <a class="btn btn-outline-primary border-2" href="">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
            
            
            
            
            
<!--            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">-->
<!--                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">-->
<!--                    <div class="text-center p-4 pt-0">-->
<!--                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$99</div>-->
<!--                        <h5 class="mb-3">Gold Classes</h5>-->
<!--                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>-->
<!--                        <ol class="breadcrumb justify-content-center mb-0">-->
<!--                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>-->
<!--                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>-->
<!--                        </ol>-->
<!--                    </div>-->
<!--                    <div class="position-relative mt-auto">-->
<!--                        <img class="img-fluid" src="img/courses-3.jpg" alt="">-->
<!--                        <div class="courses-overlay">-->
<!--                            <a class="btn btn-outline-primary border-2" href="">Read More</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Courses End -->


<!-- Features Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    
                  <h1 style="    text-align: center; padding-top: 100px;">Daily Mains Practice</h1>

    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">




           <!--  <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">

                        <div class="ps-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>
        -->




        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

         <div id="tabs1" class="tabs">

             <div class="tabRow"> 
              <h3>GS PAPER-1</h3>
              <ul>
                <li class="tab" id="Topic1">Topic</li>
                <li class="tab" id="Topic2">Topic</li>
                <li class="tab" id="Topic3">Topic</li>
                <li class="tab" id="Topic4">Topic</li>
                <li class="tab" id="Topic5">Topic</li>
                <li class="tab" id="Topic6">Topic</li>
                <!-- if you have more tabs than content containers then tab is just unclickable -->
            </ul>
        </div>


        <div class="tabContainer">
         <div id="Topic1" class="tabContent"  style="overflow-y: auto; height: 400px;" >

            <h3 style="text-align: center;"> Modern Indian History</h3>
            <?php
            $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Modern Indian History' AND chapter_id='6'  ORDER BY question_id DESC ");           
            while($fetch=mysqli_fetch_array($sql)){
              extract($fetch);           
              ?>

              <a href="question.php?id=6"><p style="color:black">
                <?php echo $chapter_question ?>
            </p></a>
        <?php } ?>
    </div>



      <div id="Topic2" class="tabContent"  style="overflow-y: auto; height: 400px;" >
        <h3 style="text-align: center;"> History of the world</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='History of the world' AND chapter_id='9' ORDER BY question_id DESC ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>

          <a href="question.php?id=9"><span>  <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>








      <div id="Topic3" class="tabcontent"   style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Society</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Indian Society' AND chapter_id='16' ORDER BY question_id DESC ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=16"><span><p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>



<div id="Topic4" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Physical Geography</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Physical Geography' AND chapter_id='22' ORDER BY question_id DESC ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=22"><span><p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic5" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Geophysical phenomena and Changes</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Geophysical phenomena and Changes' AND chapter_id='25' ORDER BY question_id DESC ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=25"><span><p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic6" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Art Culture & Heritage</h3>
        <?php 

        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-1' AND subject_name='Art Culture & Heritage' AND chapter_id='118' ORDER BY question_id DESC ");

        while($fetch=mysqli_fetch_array($sql)){

          extract($fetch);

          ?>



          <a href="question.php?id=118"><p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></a>
        <?php } ?>
      </div>



</div>
</div>










</div>





            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                 <div id="tabs2" class="tabs">
    <div class="tabRow">
      <h3>GS-PAPER-2</h3>
      <ul>
        <li class="tab" id="Topic7">Topic</li>
        <li class="tab" id="Topic8">Topic</li>
        <li class="tab" id="Topic9">Topic</li>
        <li class="tab" id="Topic10">Topic</li>
        <li class="tab" id="Topic11">Topic</li>
        <li class="tab" id="Topic12">Topic</li>
      </ul>
    </div>
    <div class="tabContainer">
      <div id="Topic7" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Constitution</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Indian Constitution' AND chapter_id='30' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=30"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic8" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Functions and Responsibilities of Authorities</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Functions and Responsibilities of Authorities' AND chapter_id='37' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=37"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>


      <div id="Topic9" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Parliament and State Legislatures</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Parliament and State Legislatures' AND chapter_id='42' ORDER BY question_id DESC  ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=42"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic10" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Governance</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Indian Governance' AND chapter_id='46' ORDER BY question_id DESC  ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=46"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic11" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Social Sector</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='Social Sector' AND chapter_id='57' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=57"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic12" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">International Relations</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-2' AND subject_name='International Relations' AND chapter_id='61' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=61"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
    </div>
  </div>

</div>


        </div>
    </div>
</div>



<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
               <div id="tabs3" class="tabs">
    <div class="tabRow">
      <h3>GS-PAPER-3</h3>
      <ul>
        <li class="tab" id="Topic13">Topic</li>
        <li class="tab" id="Topic14">Topic</li>
        <li class="tab" id="Topic15">Topic</li>
        <li class="tab" id="Topic16">Topic</li>
        <li class="tab" id="Topic17">Topic</li>
        <li class="tab" id="Topic18">Topic</li>
      </ul>
    </div>
    <div class="tabContainer">
      <div id="Topic13" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Indian Economy</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Indian Economy' AND chapter_id='64' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=64"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic14" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Agriculture Sector</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Agriculture Sector' AND chapter_id='70' ORDER BY question_id DESC  ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=70"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic15" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Food Sector</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Food Sector' AND chapter_id='75' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=75"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic16" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Science & Technology (S&T)</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Science & Technology (S&T)' AND chapter_id='80' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=80"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>

      <div id="Topic17" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Disaster Management</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Disaster Management' AND chapter_id='84' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=84"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
      <div id="Topic18" class="tabcontent"  style="overflow-y: auto; height: 400px;">
        <h3 style="text-align: center;">Security issues in India</h3>
        <?php
        $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-3' AND subject_name='Security issues in India' AND chapter_id='88' ORDER BY question_id DESC ");           
        while($fetch=mysqli_fetch_array($sql)){
          extract($fetch);           
          ?>

          <a href="question.php?id=88"><span> <p style="color:black" width="100%" direction="up" height="100px">
            <?php echo $chapter_question ?>
          </p></span></a>
        <?php } ?>
      </div>
    </div>
</div>
  </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div id="tabs4" class="tabs">
      <div class="tabRow">
        <h3>GS-PAPER-4</h3>
        <ul>
          <li class="tab" id="Topic19">Topic</li>
          <li class="tab" id="Topic20">Topic</li>
          <li class="tab" id="Topic21">Topic</li>
          <li class="tab" id="Topic22">Topic</li>
          <li class="tab" id="Topic23">Topic</li>
          <li class="tab" id="Topic24">Topic</li>
        </ul>
      </div>
      <div class="tabContainer">

        <div id="Topic19" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Ethics and Human Interface</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Ethics and Human Interface' AND chapter_id='92' ORDER BY question_id DESC ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=92"><span> <p style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic20" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Attitude</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Attitude' AND chapter_id='97' ORDER BY question_id DESC ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=97"><span> <p style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic21" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Ethics in Public Administration</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Ethics in Public Administration' AND chapter_id='101' ORDER BY question_id DESC ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=101"><span> <p style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic22" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Probity in Governance</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Probity in Governance' AND chapter_id='110' ORDER BY question_id DESC ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=110"><span> <p style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic23" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Contributions of moral thinkers and philosophers from India and world</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Contributions of moral thinkers and philosophers from India and world' AND chapter_id='119' ORDER BY question_id DESC ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=88"><span> <p style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        <div id="Topic24" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Case Studies</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='GS Paper-4' AND subject_name='Case Studies' AND chapter_id='120' ORDER BY question_id DESC ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=120"><span> <p  style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
      </div>
    </div>
            </div>




            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div id="tabs5" class="tabs">
      <div class="tabRow">
        <h3>Current Issues</h3>
        <ul>
          <li class="tab" id="Topic25">Topic </li>
          
          
        </ul>
      </div>
      <div class="tabContainer">

        <div id="Topic25" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Current Issues</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='Current Issues' AND subject_name='Current Issues<br>Current Affairs<br>Current Events' AND chapter_id='121' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=121"><span> <p style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        
      </div>
    </div>
            </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div id="tabs6" class="tabs">
      <div class="tabRow">
        <h3>Essay Writitng</h3>
        <ul>
          <li class="tab" id="Topic26">Topic </li>
          
        </ul>
      </div>
      <div class="tabContainer">

        <div id="Topic19" class="tabcontent"  style="overflow-y: auto; height: 400px;">
          <h3 style="text-align: center;">Essay Writing</h3>
          <?php
          $sql=mysqli_query($con,"SELECT * FROM `question` where board_name='Essay Writing' AND subject_name='Introduction<br>Body Paragraphs<br>Conclusion' AND chapter_id='122' ");           
          while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);           
            ?>

            <a href="question.php?id=122"><span> <p style="color:black" width="100%" direction="up" height="100px">
              <?php echo $chapter_question ?>
            </p></span></a>
          <?php } ?>
        </div>
        
      </div>
    </div>
            </div>
        </div>




    </div>
</div>

</div>
</div>
</div>







</div>
</div>
</div>


    <!-- <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Best Driving Training Agency In Your City</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Fully Licensed</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Online Tracking</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Affordable Fee</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Best Trainers</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-xxl py-6 courses">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <h1 class="display-6 mb-4 ">Daily Prelims Practice</h1>
        </div>
        <div class="row g-0 team-items">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div  class="tabContent"  style="overflow-y: auto; height: 400px;" >
                    <h3 style="text-align: center;"> GS</h3>
                    <?php 

                    $sql=mysqli_query($con,"SELECT * FROM `pp_test` where pp_test_type='GS' ORDER BY pp_test_id DESC ");

                    while($fetch=mysqli_fetch_array($sql)){

                      extract($fetch);

                      ?>

                      <a href="prelims_topic_gs.php"><span>  <p style="color:black" width="100%" direction="up" height="100px">
                        <?php echo $pp_test_topic ?>
                    </p></span></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div  class="tabContent"  style="overflow-y: auto; height: 400px;" >
                        <h3 style="text-align: center;"> CSAT</h3>
                        <?php 

                        $sql=mysqli_query($con,"SELECT * FROM `pp_test` where pp_test_type='CSAT' ORDER BY pp_test_id DESC ");

                        while($fetch=mysqli_fetch_array($sql)){

                          extract($fetch);

                          ?>

                          <a href="prelims_topic_csat.php"><span>  <p style="color:black" width="100%" direction="up" height="100px">
                            <?php echo $pp_test_topic ?>
                        </p></span></a>
                        <?php } ?>
                    </div>
            </div>
                <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Trainer</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!--<div class="container-xxl py-6">-->
    <!--    <div class="container">-->
    <!--        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">-->
    <!--            <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>-->
    <!--            <h1 class="display-6 mb-4">What Our Clients Say!</h1>-->
    <!--        </div>-->
    <!--        <div class="row justify-content-center">-->
    <!--            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                <div class="owl-carousel testimonial-carousel">-->
    <!--                    <div class="testimonial-item text-center">-->
    <!--                        <div class="position-relative mb-5">-->
    <!--                            <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">-->
    <!--                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">-->
    <!--                                <i class="fa fa-quote-left fa-2x text-primary"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>-->
    <!--                        <hr class="w-25 mx-auto">-->
    <!--                        <h5>Client Name</h5>-->
    <!--                        <span>Profession</span>-->
    <!--                    </div>-->
    <!--                    <div class="testimonial-item text-center">-->
    <!--                        <div class="position-relative mb-5">-->
    <!--                            <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">-->
    <!--                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">-->
    <!--                                <i class="fa fa-quote-left fa-2x text-primary"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>-->
    <!--                        <hr class="w-25 mx-auto">-->
    <!--                        <h5>Client Name</h5>-->
    <!--                        <span>Profession</span>-->
    <!--                    </div>-->
    <!--                    <div class="testimonial-item text-center">-->
    <!--                        <div class="position-relative mb-5">-->
    <!--                            <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">-->
    <!--                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">-->
    <!--                                <i class="fa fa-quote-left fa-2x text-primary"></i>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>-->
    <!--                        <hr class="w-25 mx-auto">-->
    <!--                        <h5>Client Name</h5>-->
    <!--                        <span>Profession</span>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Testimonial End -->


   <?php include('footer.php'); ?>
</body>

</html>