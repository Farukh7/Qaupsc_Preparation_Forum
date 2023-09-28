<?php 
include("dbcon.php");
session_start();
$ques=array();
$ans=array();
if(isset($_POST['submit'])){
    
    $fuzail = $_GET['test_id'];
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
    $qry=mysqli_query($con,"SELECT * FROM `ias_prelims_attempt` where ias_prelims_attempt_question='$q' && ias_prelims_attempt_user='$em' && ias_prelims_attempt_date='$date'");
   echo $r=mysqli_num_rows($qry);
    if($r>0){
        $qy=mysqli_query($con,"DELETE FROM `ias_prelims_attempt` where ias_prelims_attempt_question='$q' && ias_prelims_attempt_user='$em' && ias_prelims_attempt_date='$date'");
        if($qy){
            $sql2=mysqli_query($con,"INSERT INTO `ias_prelims_attempt`(`ias_prelims_test_topic`,`ias_prelims_attempt_question`, `ias_prelims_attempt_answer`,`ias_prelims_attempt_user`,`ias_prelims_attempt_date`) VALUES ('$fuzail','$q','$a',trim('$em'),'$date')");
      
             
    header("location:ias_prelims_attempt_answer.php?test_id=$fuzail"); 
        }
    }else{
         $sql3=mysqli_query($con,"INSERT INTO `ias_prelims_attempt`(`ias_prelims_test_topic`,`ias_prelims_attempt_question`, `ias_prelims_attempt_answer`,`ias_prelims_attempt_user`,`ias_prelims_attempt_date`) VALUES ('$fuzail','$q','$a',trim('$em'),'$date')");
    header("location:ias_prelims_attempt_answer.php?test_id=$fuzail"); 
 
    }
    
   
}





 
}
}
?>
