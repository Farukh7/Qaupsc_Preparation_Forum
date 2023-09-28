<?php 
include('header.php');
include('dbcon.php');
?>




<br>

<h2 class="font-50 text-center pb-5"><strong>Analysis & Evaluation</strong></h2>

<!--<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/qa_admin/upload/subject/<?php echo $subject_image;?>');border:2px solid black;background-size:100% 100%;">-->
  <section class="mb-5">

    <div class="container">

      <div class="row">

        <?php    

        $sql=mysqli_query($con,"SELECT * FROM `issue_anlysis` ORDER BY issue_anlysis_id DESC"); 
        $r=mysqli_num_rows($sql);
        if($r==0){
        ?>  <marquee><p style="color:red;font-size:15px;text-align:center;">No Issue & Evolution found. Will be avaivalbe soon.</p> </marquee> 



      <?php  }else{
       while($fetch=mysqli_fetch_array($sql)){
        extract($fetch);

        ?>


        <div class="col-md-12">
          <h5><?php echo $issue_anlysis_heading; ?></h5>
          <a href="<?php echo $issue_anlysis_youtube_link; ?>" target="_blank" style="background-color: black;"> <?php echo $issue_anlysis_youtube_link; ?></a>
          <object data="admin/upload/issue_anlysis/<?php echo $issue_anlysis_pdf; ?>" type="application/pdf" width='100%' height='320px'></object>
          <h5 class="mt-2"style="text-align:center;color:white;background-color:black">
            <a href="admin/upload/issue_anlysis/<?php echo $issue_anlysis_pdf;?>" download>Download File</a></h5>
          </div>


        <?php }} ?>

      </div>
    </div>
  </section>
</div>
</div>



<?php 
include('footer.php');
?>