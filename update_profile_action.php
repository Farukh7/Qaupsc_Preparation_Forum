 
<?php 
include("dbcon.php");
if(isset($_POST['submit'])){
	$student_id=$_GET['id'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$img =$_FILES['student_photo']['name'];
	$hm_image_name=$_POST['hm_image_name'];
if($img!=null){
		move_uploaded_file($_FILES["student_photo"]["tmp_name"],"images/register/".$img);
}

		 $sql=mysqli_query($con,"UPDATE `student` SET `student_name`='$name',`student_password`='$password',`student_phone`='$phone',`student_photo`='$img' WHERE student_id='$student_id'");

if($sql){
	$msg="Profile Updated Successfully 🗸";
		header("location:profile_card.php?status=$msg");
		
}else{
	$msg="Something Went Wrong";
		header("location:profile_card.php?status1=$msg");
}



}
?>
