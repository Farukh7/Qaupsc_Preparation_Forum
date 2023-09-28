<?php include('header.php');
      include("dbcon.php"); 

if(isset($_POST['submit'])) {
   
      // $ans=$_POST['ans'];
      $question_id=$_POST['question_id'];
      $topic_id=$_POST['topic_id'];
      $student_email=$_POST['student_email'];


      $img=$_FILES['img']['name'];

      $date=date('d-m-y');
 
      

    foreach ($img as $index => $names) {
    $c=rand(1111,9999).$names;
    // $n=$ans[$index];
    $z=$question_id[$index];
    move_uploaded_file($_FILES['img']['tmp_name'][$index],"images/answer/".$c);


 
$sql=mysqli_query($con,"INSERT INTO `ts_ias_mains_topic_answer`(`ts_ias_mains_topic_question_id`,`ts_ias_mains_topic_id`,`file`,`student_email`,`ts_ias_mains_topic_answer_date`) VALUES ('$z','$topic_id','$c', trim('$student_email') ,'$date')");
        if($sql){

        }else{
          echo "<script>alert('Something Went Wrong');</script>";
        }
      
    }
  }
?> 
<style>
   
   

  .pr_image {
    width: 150px;
    height: 150px;
    border: 1px solid #cecece;
    border-radius: 50%;
  }

  #up_img {
    width: 15%;
    height: 15%;
  }

 
  @media(max-width:768px) {
    .panel {
      width: 100% !important;
    }

    #w3review {
      width: 100% !important;
    }

    #imgInp {
      width: 100% !important;
    }
  }

  @media(max-width:1024px) {
    .panel {
      width: 100% !important;
    }

    #w3review {
      width: 100% !important;
    }

    #imgInp {
      width: 100% !important;
    }
  }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="ftco-section">
  <div class="container">
    <div class="accordion-div p-3">
     
        
       <h2><strong>Questions </strong></h2>   
       

       <form method="POST" enctype="multipart/form-data">
        <?php  include("dbcon.php");
      @$chap_name=$_GET['id'];
      $sql=mysqli_query($con,"SELECT * FROM `ts_ias_mains_topic_question` where ts_ias_mains_topic_id='$chap_name'  ORDER BY ts_ias_mains_topic_question_id  DESC  ");
      $a=0;
       
        while($f=mysqli_fetch_array($sql))
          
        {
          extract($f);
          $a=$a+1;
          ?>
 
          <button class="accordion" type="button" style="width: 80%"> <?php echo @$ts_ias_mains_topic_questions;?>&nbsp;? </button>
          <div class="panel">
            <br>
            <div class="container bootstrap snippets bootdey">
              
              <div class="row ">
                <div class="col-md-12">
                  <div class="form-group">
                    <p>
                      <!-- <b>Answer :</b> -->
                    </p>
                    <!-- <textarea id="w3review" name="ans[]" rows="3" cols="100" style="border-color: black;border-radius: 5px;border-width: 2px; width: 80%;" required></textarea> -->
                    <input type="hidden" name="question_id[]" class="form-control" value="
                              <?php echo $ts_ias_mains_topic_question_id;?>" >
                    <input type="hidden" name="topic_id" class="form-control" value="
                                <?php echo $ts_ias_mains_topic_id;?>">
                    <input type="hidden" name="student_email" class="form-control" value="<?php echo $st_email;?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <b>Upload Answer</b>
                    <br>
                    <input type="file" accept=".pdf,.jpg,.jpeg,.png" name="img[]" id="imgInp" class="my-3 btn btn-sm btn-success" style="border-radius: 5px!important;" >
                    
                    <!-- <a class="btn btn-primary" href="ts_ias_mains_all_answers.php?id=<?php echo $ts_ias_mains_topic_question_id ?>">View All Answers</a> -->
                  </div>
                </div>
                <b><hr></b><br><br>
               </div>
              <?php }  ?>
              <input type="submit" name="submit" class="my-3 btn btn-primary" style="border-radius: 5px!important; width: 80%;">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
<script>
  let active = document.querySelectorAll(".accordion-div .accordion.active");
  for (let j = 0; j < active.length; j++) {
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
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        let active = document.querySelectorAll(".accordion-div .accordion.active");
        for (let j = 0; j < active.length; j++) {
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