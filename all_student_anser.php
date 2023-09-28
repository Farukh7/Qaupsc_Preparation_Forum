<?php include('header.php'); 
$question_id = $_GET["question"];

?>
<br>
<br>
<section>
 <div class="container bootstrap snippets bootdey">
    <h4 class="font-50 text-center pb-4">Question: 

        <?php
        $query3=mysqli_query($con,"SELECT * FROM question where question_id = $question_id   ");
        $result3=mysqli_fetch_array($query3);
        echo $result3['chapter_question'];
        
        ?>    
        
    </h4></div>
    <h2 class="font-50 text-center pb-4"><strong>Image Answers</strong></h2>

    <div class="container bootstrap snippets bootdey">
        <div class="row">
         <?php
         $query=mysqli_query($con,"SELECT * FROM answer where answer_question_id = $question_id  AND answer_image_path NOT LIKE '%.pdf' ");
         while($get=mysqli_fetch_array($query))
            { ?>
                <div class="col-md-12">
                    <ul class="list-listings">
                        <li class="featured">                            

                           <div class="listing-header bg-base">
                               <?php $temp =$get['st_email'];  
                               $sql=mysqli_query($con,"SELECT * FROM student WHERE student_email = '$temp'");  
                               $s=mysqli_fetch_array($sql);  
                               echo $s["student_name"]; 
                               ?>
                           </div>

                           <div class="listing-image">
                            <img src="images/answer/<?php echo $get['answer_image_path']; ?>" style="object-fit: cover;width:100%;height:200px; margin-bottom: 10px; margin-top: 10px; " ><br> 
                        </div>

                        <div class="listing-body">
                           <p>
                              <?php echo @$get['answer_student_id'];?>
                          </p>

                      </div>
                  </li>
              </ul> 
          </div>

      <?php } ?>
  </div>
</section>

 


<br><br>

<section class="mb-5">
    <h2 class="font-50 text-center pb-4"><strong>Question Answer PDF</strong></h2>
    <div class="container bootstrap snippets bootdey">

        <div class="row">

          <?php  @$pdf=$_GET['answer_image_path']; 

          $sql2=mysqli_query($con,"SELECT * FROM `answer` where answer_question_id = $question_id  AND  answer_image_path LIKE '%.pdf'  ORDER BY answer_id DESC "); 
          $r=mysqli_num_rows($sql2);
          if($r==0){
            ?>  



        <?php  }else{
         while($fetch=mysqli_fetch_array($sql2)){
            extract($fetch);

            ?>

            <div class="col-md-12">
                <ul class="list-listings">
                    <li class="featured">
                      <div class="listing-header bg-base">
                       <?php  $sqln=mysqli_query($con,"SELECT * FROM student WHERE student_email = '$st_email'");  $s=mysqli_fetch_array($sqln);  echo $s["student_name"]; ?>
                   </div>

                   <div class="col-md-12">
                      <embed src="images/answer/<?php echo $answer_image_path; ?>" type='application/pdf'style="object-fit: cover;width:100%;height:200px; margin-bottom: 10px; margin-top: 10px; "/> </a>
                          <h5 class="mt-2"style="text-align:center;color:white;background-color:black"><a href="images/answer/<?php echo $answer_image_path;?>" download> Download File
                          </a></h5>
                      </div>
                      <div class="listing-body">
                       <p>
                          <?php echo @$get['answer_student_id']; ?>
                      </p>
                  </div>
                  
              </li>
              
          </ul> 
          
      </div>


  <?php }} ?>

</div>
</div>



</section>





<?php include('footer.php'); ?>