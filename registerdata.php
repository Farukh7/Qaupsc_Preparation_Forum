<?php 
include("dbcon.php");
if(isset($_POST['submit'])){
	
	session_destroy();
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];
	$st_img=$_FILES['st_img']['name'];
	$st_m=rand(1111,9999).$st_img;
	$student_code="ST-".rand(1111,9999);
	
	$sql=mysqli_query($con,"SELECT * FROM `student` where student_email='$email'");
	$row=mysqli_num_rows($sql);
	if($row==1){
		echo "<script>alert('Student Already Registered');window.location.href='signup.php'</script>";
	}else{
		move_uploaded_file($_FILES['st_img']['tmp_name'],"images/register/".$st_m);
		$sql1=mysqli_query($con,"INSERT INTO `student`(`student_name`, `student_email`, `student_phone`, `student_password`, `student_photo`,`Student_code`,`premiuim_end_date`) VALUES ('$name','$email','$phone','$pass','$st_m','$student_code','1')");
		if($sql1){
			
			session_start();
			$_SESSION['st_email']=$email;
			echo "<script>alert('Student Registered Successfully');window.location.href='index.php'</script>";
		}else{
			echo "<script>alert('Something went Wrong');window.location.href='index.php'</script>";
		}
	}

	
}



?>