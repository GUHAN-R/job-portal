<?php
	    session_start();
        if(!isset($_SESSION['login_status']))
        {
                header ('Location:login.php');
        }
?>

<?php
$host="localhost";
$username="root";
$password="";
$db_name="posted_jobs";

$conn=mysqli_connect($host,$username,$password,$db_name);
if(!$conn){
    echo "Connection failed";
}
$on=$_POST['orgname'];
$pn=$_POST['posname'];
$jt=$_POST['jobtype'];
$sal=$_POST['sal'];
$we=$_POST['work_exp'];
$con=$_POST['contact'];

$sql="INSERT INTO tab(Organization_name,position_name,job_type,salary,Experience,contact)
VALUES('$on','$pn','$jt','$sal','$we','$con')";

if(mysqli_query($conn,$sql)){
    echo "Job posted, Thank you";
}
else{
    echo "error". mysqli_error($conn); ;
}
$conn->close();

?>