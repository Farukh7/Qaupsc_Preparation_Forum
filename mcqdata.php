<?php 
include("dbcon.php");
session_start();
$ques=array();
$ans=array();
if(isset($_POST['submit'])){
    
 $type=$_GET['test_id'];
 $em=$_SESSION['email'];
  $total_question=$_POST['total_question'];

 $date=date('d-m-y');
 if($em==null){
      header("location:signup.php");
 }else{
for ($i =1  ; $i<=$total_question ; $i++ )
{

	$temp = $_POST['select_op'.$i] ; 
	$question = $_POST['question'.$i] ;
	$ques[]=$question;
	$ans[]=$temp;
}
		
foreach($ques as $index=> $value){
    $q=$value;
    $a=$ans[$index];
    $qry=mysqli_query($con,"SELECT * FROM `attempt` where question='$q' && student_email='$em' && date='$date'");
   echo $r=mysqli_num_rows($qry);
    if($r>0){
        $qy=mysqli_query($con,"DELETE FROM `attempt` where question='$q' && student_email='$em' && date='$date'");
        if($qy){
            $sql2=mysqli_query($con,"INSERT INTO `attempt`(`test_type`,`question`, `answer`,`student_email`,`date`) VALUES ('$type','$q','$a','$em','$date')");
      
             
    header("location:attempt_answer.php?test_id=$type"); 
        }
    }else{
         $sql3=mysqli_query($con,"INSERT INTO `attempt`(`test_type`,`question`, `answer`,`student_email`,`date`) VALUES ('$type','$q','$a','$em','$date')");
    header("location:attempt_answer.php?test_id=$type"); 
 
    }
    
   
}

}
}
?>
