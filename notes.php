<?php 
include('header.php');
include('dbcon.php');
?>
 
 
 
 
 <br>

<h2 class="font-50 text-center pb-5"><strong>Free Notes</strong></h2>

<!--<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/qa_admin/upload/subject/<?php echo $subject_image;?>');border:2px solid black;background-size:100% 100%;">-->
<section class="mb-5">
    
        <div class="container">
            <div class="row mb-4"> <div class="col-md-4"><a href="premium_notes1.php?notes=<?php  echo @$notes=$_GET['notes'];?>"><button class="btn btn-primary">Premium Notes</button></a></div></div>
    <div class="row">
         
      <?php    

           $sql=mysqli_query($con,"SELECT * FROM `notes_free` ORDER BY notes_free_id DESC"); 
           $r=mysqli_num_rows($sql);
            if($r==0){
?>  <marquee><p style="color:red;font-size:15px;text-align:center;">No Notes found. Will be avaivalbe soon.</p> </marquee> 
  
    

          <?php  }else{
           while($fetch=mysqli_fetch_array($sql)){
            extract($fetch);
           
            ?>


         <div class="col-md-4">
                            <h5><?php echo $notes_free_heading; ?></h5>
                           <object data="admin/upload/notes_free/<?php echo $notes_free_file; ?>" type="application/pdf" width='100%' height='320px'></object>
                          <h5 class="mt-2"style="text-align:center;color:white;background-color:black">
                              <a href="admin/upload/notes_free/<?php echo $notes_free_file;?>" download>Download File</a></h5>
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