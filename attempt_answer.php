<?php 

    include('header.php');
   
   $totalmarks = 0 ;
   $achived = 0 ;
   $questionmarks = 0;
   $ttmarks = 2; 
   

?> 

<br>
<br>
<br> 
 

<section class="ftco-section" style="margin-bottom: -50px;">
  
        <h2 class="font-50 text-center pb-5" style="margin-top:-80px"><strong>
       <!--<?php echo @$_GET['test_id'];?> -->
            </strong></h2>
            <div class="container">
                  <form action="mcqdata.php" method="post">
        <div class="row">

   <?php 
       @$type=$_GET['test_id'];
            $sql=mysqli_query($con,"SELECT * FROM `test_question` where pp_test_topic='$type'");
           $a=0;
            $r=mysqli_num_rows($sql);
           while($fetch=mysqli_fetch_array($sql)){
                
            $a=$a+1;
             $tm = $a*$ttmarks ;
           extract($fetch);
      ?>
            <div class="col-md-12 course ftco-animate   container p-3 my-3 border  ">
                Question <?php echo $a;?>    <br>
                <?php echo $pp_test_question?> <br>
              <?php
              $em=$_SESSION['email'];
              $date=date('d-m-y');
              $sq=mysqli_query($con,"SELECT * FROM `attempt` where question='$id' AND student_email='$em' AND date='$date'");
              $ft=mysqli_fetch_assoc($sq);
                $ans=$ft['answer'];
              
              
              
            //   $s=mysqli_query($con,"SELECT * FROM `test_question` where pp_test_question='$pp_test_question'");
            //       $f=mysqli_fetch_assoc($s);
            //       $rightans = $f['pp_test_question_answer'];
            //       $questionmarks = $f['pp_test_question_answer_marks'];
            
            
                     
                   $rightans = $pp_test_question_answer;
                //  $questionmarks = $pp_test_question_answer_marks;
                  
                  
                  
          
              
              if($ans=="1"){        ?>
                <p  class="container p-3 my-3 border"  style=  <?php  if($ans == $rightans) {  echo "background:#00800059";  $questionmarks = $questionmarks +2 ; } else{ echo  "background:#ff000040" ; $questionmarks=$questionmarks-0.67; }   ?>   >1.&nbsp;&nbsp;<?php echo $pp_test_question_option1?> </p>
                <p>2.&nbsp;&nbsp;<?php echo $pp_test_question_option2?></p>
                <p>3.&nbsp;&nbsp;<?php echo $pp_test_question_option3?></p>
                <p>4.&nbsp;&nbsp;<?php echo $pp_test_question_option4?></p><br>
               
                
                <?php }elseif($ans=="2"){    ?>
                <p>1.&nbsp;&nbsp;<?php echo $pp_test_question_option1?></p>
                <p  class="container p-3 my-3 border"   style=   <?php  if($ans == $rightans) {  echo "background:#00800059";  $questionmarks = $questionmarks +2 ; } else{ echo  "background:#ff000040" ; $questionmarks=$questionmarks-0.67; }   ?>    >2.&nbsp;&nbsp;<?php echo $pp_test_question_option2?></span></p>
                <p>3.&nbsp;&nbsp;<?php echo $pp_test_question_option3?></p>
                <p>4.&nbsp;&nbsp;<?php echo $pp_test_question_option4?></p><br>
               
                
                <?php }elseif($ans=="3"){     ?>
                <p>1.&nbsp;&nbsp;<?php echo $pp_test_question_option1?></p>
                <p>2.&nbsp;&nbsp;<?php echo $pp_test_question_option2?></p>
                <p  class="container p-3 my-3 border" style=   <?php  if($ans == $rightans) {  echo "background:#00800059";  $questionmarks = $questionmarks +2 ; } else{ echo  "background:#ff000040" ; $questionmarks=$questionmarks-0.67; }   ?> >3.&nbsp;&nbsp;<?php echo $pp_test_question_option3?></p>
                <p>4.&nbsp;&nbsp;<?php echo $pp_test_question_option4?></p><br>
                
                
                
                <?php }elseif($ans=="4"){       ?>
                <p>1.&nbsp;&nbsp;<?php echo $pp_test_question_option1?></p>
                <p>2.&nbsp;&nbsp;<?php echo $pp_test_question_option2?></p>
                <p>3.&nbsp;&nbsp;<?php echo $pp_test_question_option3?></p>
                <p  class="container p-3 my-3 border" style=   <?php  if($ans == $rightans) {  echo "background:#00800059";  $questionmarks = $questionmarks +2 ; } else{ echo  "background:#ff000040" ; $questionmarks=$questionmarks-0.67; }   ?> >4.&nbsp;&nbsp;<?php echo $pp_test_question_option4?></p><br>
                 
                
                <?php }else{?>
                <p>1.&nbsp;&nbsp;<?php echo $pp_test_question_option1  ?></p>
                <p>2.&nbsp;&nbsp;<?php echo $pp_test_question_option2?></p>
                <p>3.&nbsp;&nbsp;<?php echo $pp_test_question_option3?></p>
                <p>4.&nbsp;&nbsp;<?php echo $pp_test_question_option4?></p><br>
                
                
                <?php } ?>
                
                
                <strong>Correct Answer:</strong> <?php echo $rightans;  ?> <br>
                  
                  
             
                  
                  <strong>Question Explanation:</strong> <?php echo $pp_test_question_answee_explanatoion ; ?> 
              
            
            </div>
            
           
           
<?php


 }
 
 
 echo  "<h2> Total marks achived: ". $questionmarks . "/ $tm </h2>"; 
  
 ?>
 </div>



<?php 

$pp_test_pdf =$_GET['test_id'];
$sql10=mysqli_query($con,"SELECT * FROM `pp_test` where pp_test_id='$pp_test_pdf' ");
  $fetch=mysqli_fetch_array($sql10);
  

  ?>

    <div class="col-md-12">
         <a  href="admin/upload/test_pdf/<?php echo $fetch["pp_test_pdf"]; ?>" download> Download Solution File
      </a></h5>
    </div>







</form>
   
</div>

</section>

<?php 


                
    include('footer.php');
?>