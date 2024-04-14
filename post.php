<?php
	session_start();
        if(!isset($_SESSION['login_status']))
        {
                header ('Location:login.php');
        }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Post</title>
        <link rel="stylesheet" type="text/css" href="nav1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
                .formdiv{
                        text-decoration:none;
                        margin:70px;
                        margin-left:100px;
                }
                .table td{
                        padding:20px;
                        font-family:'calibri';
                        font-size:20px;
                }
                input{
                        margin-left:100px;
                        width:200%;
                        height:40px;
                        
                }
                select{
                        margin-left:100px; 
                        width:200px;
                        height:50px;
                        font-size:25px;
                        font-family:'calibri';
                }
                .submit{
                        all:initial;
                        margin-top:40px;
                        margin-left:500px;
                        padding:15px;
                        border:1px solid;
                        border-radius:20px;
                        background-color:white;
                        
                        
                }

        </style>
</head>
<body>
        <?php  require_once('nav.html')?>
        <div class="formdiv">
                <form class="frm" action="post_reg.php" method="post">
                        <table class="table">
                                <tr class="row">
                                        <td>Organization name</td>
                                        <td><input type="text" name="orgname" required="required"></td>
                                </tr>
                                <tr class="row">
                                        <td>What position you are looking for</td>
                                        <td><input type="text" name="posname" required="required"></td>
                                </tr>
                                <tr class="row">
                                        <td>Type of the job</td>
                                        <td>
                                            <select name="jobtype">
                                            <option value="part-time">Part-time</option>
                                            <option value="full-time">Full-time</option>
                                            </select></td>
                                </tr>
                                <tr class="row">
                                        <td>Salary Range</td>
                                        <td><input type="text" name="sal" required="required"></td>
                                </tr>
                                <tr class="row">
                                        <td>Needs Work Experience of</td>
                                        <td><input type="number" name="work_exp" required="required"></td>
                                </tr>
                                <tr class="row">
                                        <td>Contact no</td>
                                        <td><input type="number" name="contact" required="required"></td>
                                </tr>
                        </table>
                        <input class="submit" type="submit" value="submit">
                </form>
        </div>
</body>
</html>

