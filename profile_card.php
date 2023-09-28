<?php include('header.php'); ?>


<br><br><br>

<style type="text/css">
	 .inf-content{
    border:1px solid #DDDDDD;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
}			                                                      
</style>


 
 <?php 
         	$st_email=$_SESSION['email'];
            
            

            $sql=mysqli_query($con,"SELECT * FROM `student` WHERE student_email='$st_email'");
           
           $row=mysqli_fetch_array($sql)
            ?>

<div class="container bootstrap snippets bootdey">

<div class="panel-body inf-content">
    <div class="row " style="padding: 30px">
        <div class="profile-header " >
                    <a href="update_profile.php?id=<?php echo $st_email ?>" class="btn btn-primary edit-profile" style=" right: 18%; border-radius: 10px;">
                        <i class="bi bi-pencil-fill"></i> Edit profile
                    </a>
                </div>
        <div class="col-md-4">
            <img alt="" style="width:500px; height: 330px; border-radius: 200PX;" title="" class=" img-thumbnail isTooltip" src="images/register/<?php echo $row['student_photo'] ?>" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
        <div class="col-md-6 ">
            <strong>Information</strong><br> 
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                Identificacion                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $row['Student_code'] ?>
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                Name                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                           <?php echo $row['student_name'] ?>   
                        </td>
                    </tr>
                     


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                Role                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            Student
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                Email                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $row['student_email'] ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                 Phone                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $row['student_phone'] ?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                               Premium End Date                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                             <?php echo $row['premiuim_end_date'] ?>
                        </td>
                    </tr>                                    
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>                                        
















<?php include('footer.php'); ?>