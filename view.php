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
    echo "Error";
}

$sql= "SELECT * FROM tab";
$result=$conn->query($sql);
if($result->num_rows>0){?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>search</title>
        <link rel="stylesheet" type="text/css" href="nav1.css">
        <link rel="stylesheet" type="text/css" href="view.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
    <?php  require_once('nav.html')?>
    <?php
    echo "<table>";
    echo "<tr><th>Organisation Name</th><th>Job Position</th><th>Job Type</th><th>Salary</th><th>Work Experience</th><th>Contact</th><tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["Organization_name"] . "</td><td>" . $row["position_name"] . "</td><td>" . $row["job_type"] . "</td><td>" . $row["salary"] . "</td><td>" . $row["Experience"] . "</td><td>" . $row["contact"] . "</td></tr>";
        
        
    }
    echo "</table>";
    ?>
    </body>
<?php } ?>
<?php $conn->close(); ?>
</html>