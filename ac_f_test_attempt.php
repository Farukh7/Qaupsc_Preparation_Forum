<?php 
include('header.php');

$test_id=$_GET['test_id'];
?>


<br><br><br>


<section class="ftco-section" style="margin-bottom: -50px;">
  
    <h5 class="font-50 text-center pb-5" style="margin-top:-80px"><strong>  </strong></h5>
      
      <div class="container">
          <form action="ac_f_test_data.php?test_id=<?php echo $test_id ?>" method="post">
            <div class="row">

             <?php 
             
             $sql=mysqli_query($con,"SELECT * FROM `ac_f_test_questions` where ac_f_test_topic='$test_id'");
             $a=0;
             $r=mysqli_num_rows($sql);
             if($r==0){?>
                <marquee><p style="font-size:16px;color:red">No questions found. Will be available shortly.</p></marquee>
                
            <?php }else{
             while($fetch=mysqli_fetch_array($sql)){
                
                $a=$a+1;
                extract($fetch);
                ?>
                
                <div class="col-md-12 course ftco-animate container p-3 my-3 border ">
                    Question <?php echo $a;?>  <h5><?php echo $ac_f_test_question ?></h5>
                    
                    
                    <input type="radio" name="select_op<?php  echo $a;   ?>" 
                    value="<?php echo '1'; ?>">
                    &nbsp;&nbsp;<?php echo $ac_f_test_op1; ?><br>
                    
                    <input type="radio" name="select_op<?php  echo $a;   ?>"
                    value="<?php echo '2'; ?>">
                    &nbsp;&nbsp;<?php echo $ac_f_test_op2; ?><br> 

                    <input type="radio" name="select_op<?php  echo $a;   ?>" 
                    value="<?php echo '3'; ?>">
                    &nbsp;&nbsp;<?php echo $ac_f_test_op3; ?><br>    
                    
                    <input type="radio" name="select_op<?php  echo $a;   ?>" 
                    value="<?php echo '4'; ?>">
                    &nbsp;&nbsp;<?php echo $ac_f_test_op4; ?><br>
                    
                    
                    <input type="hidden" name="question<?php  echo $a;   ?>" value="<?php echo $ac_f_test_id?>">
                    

                    
                </div>
                
                <?php


            }?>
            <input type="hidden" name="total_question" value="<?php echo $r?>">
            <input type="submit" class="btn btn-danger" name="submit">
        <?php }?>
    </form>
</div>
</div>

</section>













<?php include('footer.php'); ?>