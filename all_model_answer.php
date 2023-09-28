<?php include('header.php'); 
$question_id = $_GET["question"];

?>
<br>
<br>
 
    

<br><br>

<section class="mb-5">
    <h2 class="font-50 text-center pb-4"><strong>Model Answer PDF</strong></h2>
    <div class="container bootstrap snippets bootdey">

        <div class="row">

          <?php  @$pdf=$_GET['model_answer']; 

          $sql2=mysqli_query($con,"SELECT * FROM `question` where question_id = $question_id  ORDER BY question_id DESC "); 
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
                     <div class="col-md-12">
                      <embed src="admin/upload/model_A/<?php echo $model_answer; ?>" type='application/pdf'style="object-fit: cover;width:100%;height:200px; margin-bottom: 10px; margin-top: 10px; "/> </a>
                          <h5 class="mt-2"style="text-align:center;color:white;background-color:black"><a href="admin/upload/model_A/<?php echo $model_answer;?>" download> Download File</a></h5>
                      </div>
                    </li>
                </ul> 
            </div>


  <?php }} ?>

</div>
</div>



</section>





<?php include('footer.php'); ?>