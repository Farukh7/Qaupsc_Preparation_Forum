<?php 

include('header.php');
include("dbcon.php");


?>
<?php

include("dbcon.php");
if(isset($_POST['submit'])  ){
  if(session_status() == PHP_SESSION_ACTIVE)
  {
    @$chap_name1=$_GET['chap_name'];
    $ans=$_POST['ans'];
    @$session_email=$_SESSION['email'];
    if($session_email==null){
      echo "<a data-bs-toggle='modal' data-bs-target='#exampleModal' ></a>";  

    }else{
      $question=$_POST['question'];
      $img=$_FILES['img']['name'];
      $img_code=rand(1111,9999).$img;
      $date=date('d-m-y');
      $sql=mysqli_query($con,"SELECT * FROM `answer` WHERE answer_question_id='$question' AND answer_student_id='$ans' AND st_email='$session_email'  ");
      $row=mysqli_num_rows($sql);
      if($row==1){
        echo "<script>alert('Answer Already Submitted');</script>";
      }else{
        
        $sql1=mysqli_query($con,"SELECT * FROM `question` WHERE chapter_question='$question'   ");
        $row1=mysqli_num_rows($sql1);
        move_uploaded_file($_FILES['img']['tmp_name'],"images/answer/".$img_code);
        $sqll=mysqli_query($con,"INSERT INTO `answer`(`answer_question_id`, `answer_student_id`, `answer_image_path`, `st_email`,`date`) VALUES ('$question','$ans','$img_code','$session_email','$date')");
        if($sqll){
          echo "<script>alert('Answer Submitted Successfully');</script>";
        }else{
          echo "<script>alert('Something Went Wrong');</script>";
        }
      }

    }
    

  }
  else
  {
    echo "data-bs-toggle="."modal"." data-bs-target="."#exampleModal"." ";  
  }
}

?>




<style>
  .accordion {
    color: #000;
    font-weight:500;
    background-color: #cfcfcf;
    cursor: pointer;
    padding: 10px 10px;
    margin-top:20px;
    width: 100%;
    border: 1px solid #00000042;
    text-align: left;
    outline: none;
    transition: 0.4s;
  }

  .active, .accordion:hover {
    background-color: #000;
    color:#fff;
    border: 1px solid #cecece;
  }

  .panel {
    padding: 0 18px;
    font-size: 18px;
    background-color: #f0f0f0;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
  }
  .pr_image{
    width:150px;
    height:150px;
    border:1px solid #cecece;
    border-radius:50%;
  }

  #up_img{
    width:15% ;
    height:15%;
  }

  blockquote {
    border-color: #fd5f00!important;
  }

  ul, ol, pre, blockquote {
    margin-bottom: 2.3125rem;
  }
  blockquote {
    font-style: italic;
    padding: 1rem;
    font-size: 1.09rem;
    position: relative;
    border-left: 3px solid;
  }
  blockquote {
    margin: 0 0 1rem;
  }
  @media(max-width:768px){
    .panel
    {
      width:100%!important;
    }
    #w3review{
      width:100%!important;
    }
    #imgInp{
      width:100%!important;
    }
  }

  @media(max-width:1024px){
    .panel
    {
      width:100%!important;
    }
    #w3review{
      width:100%!important;
    }
    #imgInp{
      width:100%!important;
    }
  }
</style>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<section class="ftco-section">
  <div class="container">

    <div class="accordion-div p-3">
      <h2 class=""><strong>Questions </strong></h2>

      <h3 style="padding-top: 10px;padding-bottom: 10px;">  <?php echo @$_GET['chap_name'];?>&nbsp;</h3><br>

      <?php  include("dbcon.php");
      @$chap_name=$_GET['id'];
      $sql=mysqli_query($con,"SELECT * FROM `question` where chapter_id='$chap_name'  ORDER BY question_id DESC  ");
      $a=0;
      $r=mysqli_num_rows($sql);
      if($r==0){
        ?>



        <marquee><p style="color:red;font-size:15px;text-align:center;">We are still working on getting you the best questions.</p> </marquee> 
        
        

        <?php  
        
      }
      
      else
        
      {
        while($f=mysqli_fetch_array($sql))
          
        {
          extract($f);
          $a=$a+1;
          ?>
          <form method="POST"  enctype="multipart/form-data" > 
            <blockquote>   
              <button class="accordion" type="button"><?php echo @$chapter_question;?>&nbsp;?</button>


              <div class="panel"><br> <div class="container bootstrap snippets bootdey">
                <div class="row">
                 <?php
                 $query=mysqli_query($con,"SELECT * FROM answer  where answer_question_id='$question_id' AND  answer_image_path NOT LIKE '%.pdf' ORDER BY answer_id Desc limit 3");
                 while($get=mysqli_fetch_array($query))
                 { 
                  
                  ?>
                  <div class="col-md-12">
                    <ul class="list-listings">
                      <li class="featured">
                        <div class="listing-header bg-base">
                          
                         <?php

                         $temp = $get['st_email'] ;
                         
                         $sql2=mysqli_query($con,"SELECT * FROM `student` where student_email LIKE '$temp' ");
                         $fetch=mysqli_fetch_array($sql2);
                         echo   $fetch['student_name'];
                         
                         
                         
                         


                         ?>

                       </div>

                       <div class="listing-image">
                         <a href="all_student_anser.php?question=<?php echo $get['answer_question_id']; ?>" type='application/pdf'> 
                           <img src="images/answer/<?php echo $get['answer_image_path']?>" style="object-fit: cover;width:100%;height:200px; margin-bottom: 10px; margin-top: 10px; " ><br> </a>
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




              
              <div class="row pt-4">
                <div class="col-md-12">
                  <div class="form-group">
                    <p> <b>Answer :</b></p>
                    <textarea id="w3review" name="ans" rows="3" cols="100" style="border-color: #1a75ff;border-radius: 5px;border-width: 0px;"></textarea>
                    <input type="hidden" name="question" class="form-control" value="<?php echo $question_id;?>">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                   
                    <b>Upload Answer</b>
                    <br>
                    <input type="file" accept=".pdf,.jpg,.jpeg,.png" name="img" id="imgInp" class="my-3 btn btn-sm btn-success" style="border-radius: 5px!important;" required>
                    
                    
                    
                    
                 
                              
                    
                    
                    <?php 
                                
                                if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION["email"]))
                                {
                                    echo "<input  type='submit' name='submit' class='my-3 btn btn-primary' style='border-radius: 5px!important;'>  ";
                                }
                                else
                                {
                                // echo "data-bs-toggle="."modal"." data-bs-target="."#exampleModal"." ";
                                // echo" <input type='submit' value='Login' class='my-3 btn btn-primary' style='border-radius: 5px!important;'>";
                                echo " <button class='my-3 btn btn-primary' style='border-radius: 5px!important;' onclick='myFunction()'>submit</button>";
                                 
                                
                                }
                                ?>
                    
                    
                    
                    
          <script>
function myFunction() {
  alert("Please login first");
}
</script>
                  
                    
                    
                    
                    
                    
                    
                    
                    
                    <a  href="all_student_anser.php?question=<?php echo @$question_id; ?>" class="my-10 btn btn-primary" style="border-radius: 5px!important;"> View All Answers </a>
                    <a  href="all_model_answer.php?question=<?php echo @$question_id; ?>" class="my-10 btn btn-primary" style="border-radius: 5px!important;"> View Model Answer </a>
                  </div> </div>
                  
                  
                </div>
                
                
              </form>

              


            </div>

          </blockquote>

          <?php 
          
        }
        
      } ?>



    </div>
  </div>
</div>
</section>



<script>
  let active = document.querySelectorAll(".accordion-div .accordion.active");
  for(let j = 0; j < active.length; j++){
    active[j].classList.remove("active");
  active[j].nextElementSibling.style.maxHeight = null; //or 0px
}
</script>
<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {

      var panel = this.nextElementSibling;
      if (panel.style.maxHeight){
        panel.style.maxHeight = null;
      } else {
        let active = document.querySelectorAll(".accordion-div .accordion.active");
        for(let j = 0; j < active.length; j++){
          active[j].classList.remove("active");
          active[j].nextElementSibling.style.maxHeight = null;
        }
        this.classList.toggle("active");
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }

  imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      up_img.src = URL.createObjectURL(file)
    }
  }
</script>


<?php 

include('footer.php');
?>