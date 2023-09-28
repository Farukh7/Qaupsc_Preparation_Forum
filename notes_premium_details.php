<?php 
include('header.php');
include('dbcon.php');
?>

<br>

<link rel="stylesheet" type="text/css" href="notes.css">









<section id="premium_notes" >
<div class="container bootstrap snippets bootdey">
    
  <ol class="breadcrumb">
    <li><a href="#">Premium Note Details</a></li>
    
     
    <li class="pull-right"><a href="" class="text-muted">
      <i class="fa fa-refresh"></i></a>
    </li>
  </ol>
  
  
 
  
  
  
  <div class="row">
       
       
       
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              	 <?php 
                  $id=$_GET['id'];
                    $sql=mysqli_query($con,"SELECT * FROM `notes_premium` where notes_premium_id='$id'  ");
                   
                   while($fetch=mysqli_fetch_array($sql)){
        
                   extract($fetch);
                   
                    ?>

                    <div>
           
                  <div class="date warning">
                      <span class="blog-date"><?php echo $notes_premium_date ?></span>
                  </div>
                  <div class="row">
                     
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="blog-details">
                              <h2><?php echo $notes_premium_heading ?></h2>
                              
                              <?php
                                $sql=mysqli_query($con,"SELECT * FROM `student` where student_email='$st_email'");
                                $fetch=mysqli_fetch_assoc($sql);
                                   $end_date=$fetch['premiuim_end_date'];
                                  
                                  ?>
                                 
                                 
                                 
                                 
                                  
                             <section
                                <?php
                                
                                if($end_date == "1" )
                                    {
                                    echo "style='height: 500px; overflow: hidden'" ;
                                    }  
                                   
                                    else 
                                    {
                                        echo  "";
                                    }  ?>>
                              
                                
                               
                              <div>
                                  <?php echo $notes_premium_desc ?>
                              </div>
                         
                         
                         
                                              
       
  
  
  
  
  
                             
                                <div class="col-md-12">
                                    <ul class="list-listings">
                                        <li class="featured">
                                            <div class="listing-header bg-base">
                                                <p><?php echo $notes_premium_file; ?></p>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <embed src="admin/upload/notes_premium/<?php echo $notes_premium_file; ?>" type='application/pdf' 
                                                style="object-fit: cover;width:100%;height:200px; margin-bottom: 10px; margin-top: 10px; ">
                                                <h5 class="mt-2"style="text-align:center;color:white;background-color:black">
                                                    <a href="admin/upload/notes_premium/<?php echo $notes_premium_file; ?>" download> Download File</a></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                              
                         
                 
                                </section>
                              
                             
                             
                                                  
      </br></br>
                                <section> <?php
                                 $sql=mysqli_query($con,"SELECT * FROM `student` where student_email='$st_email'");
                                $fetch=mysqli_fetch_assoc($sql);
                                   $end_date=$fetch['premiuim_end_date'];
                                  
                                
                                if($end_date == "1" )
                                    {
                                    // echo "<input type='button' id='btnShowMsg1' class='btn btn-primary' value='Buy Now' onClick='showMessage1()' />" ;
                                    echo "  <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal1'>Read Full Article</button>" ;
                                    }  
                                   
                                    else 
                                    {
                                        echo  "";
                                    }
                                ?> </section>  
  
                           
                        
                          </div>
                      </div>
                  </div>
                       
                  
                                 
           </div>
          <?php }?> <br>
          
          
        
          
          
      </div> 
      <br>


  </div>
</div> 
</section>  



    <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="row modal-body">
                  <p>Buy Premium Notes @ Rs 99/- for 3 months</p>
                   
               <!--<img class="img-fluid" src="images/payment/barcode1.jpeg" style="width: 250px; height: 200px;">-->
               
               
              </div>
              <div class="modal-footer">
                <a href="buy_now.php" type="button"  >Buy now</a> &nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
              </div>
            </div>
          </div>
        </div>
        
        
        

            <?php 
            $st_email=$_SESSION['email'];
            
            $sql=mysqli_query($con,"SELECT * FROM `student` where student_email='$st_email'  ");
            $fetch=mysqli_fetch_array($sql)
           
            ?>


<!--<script type="text/javascript">-->
<!--            function showMessage() {-->
<!--                alert("<?php echo $fetch['premiuim_end_date']; ?>");-->
<!--            }-->
<!--        </script>-->
        
<!--        <script type="text/javascript">-->
<!--            function showMessage1() {-->
<!--                alert("Contact Admin +91 9151150848");-->
<!--            }-->
<!--        </script>-->
       
       
       
       
       
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php include('footer.php'); ?>