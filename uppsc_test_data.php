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
    $qry=mysqli_query($con,"SELECT * FROM `uppsc_test_attempt` where uppsc_test_attempt_question='$q' && uppsc_test_attempt_user='$em' && uppsc_test_attempt_date='$date'");
   echo $r=mysqli_num_rows($qry);
    if($r>0){
        $qy=mysqli_query($con,"DELETE FROM `uppsc_test_attempt` where uppsc_test_attempt_question='$q' && uppsc_test_attempt_user='$em' && uppsc_test_attempt_date='$date'");
        if($qy){
            $sql2=mysqli_query($con,"INSERT INTO `uppsc_test_attempt`(`uppsc_test_test_topic`,`uppsc_test_attempt_question`, `uppsc_test_attempt_answer`,`uppsc_test_attempt_user`,`uppsc_test_attempt_date`) VALUES ('$fuzail','$q','$a',trim('$em'),'$date')");
      
             
    header("location:uppsc_test_attempt_answer.php?test_id=$fuzail"); 
        }
    }else{
         $sql3=mysqli_query($con,"INSERT INTO `uppsc_test_attempt`(`uppsc_test_test_topic`,`uppsc_test_attempt_question`, `uppsc_test_attempt_answer`,`uppsc_test_attempt_user`,`uppsc_test_attempt_date`) VALUES ('$fuzail','$q','$a',trim('$em'),'$date')");
    header("location:uppsc_test_attempt_answer.php?test_id=$fuzail"); 
 
    }
    
   
}





 
}
}
?>
