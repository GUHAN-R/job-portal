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
	<style type="text/css">
		
*{
	text-decoration: none;
}
.backimg{
	background-image: url(back1_ind.jpg);
	height: 100vh;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
.backimg h1{
	font-size: 60px;
	font-family: Courier, monospace,cursive;
	color: #f5f5f5;
	text-align: center;
	padding-top: 50px;
}
body{
	background-color: #f5f5f5;
	margin: 0px;
	padding: 0px;
}
.Contact{
	margin-left: 70px;
}
.Contact h2{
	font-family: "calibri";
	font-size: 40px;
}
.Contact p{
	font-size: 15px;

}
.icons i{
	padding: 5px;
}
.infor{
	border: 1px solid;
	border-color: inherit;
	width: 20%;
	float: right;
	text-align: center;
	margin-top: -280px;
	margin-right: 600px;
	border-radius: 20px;
	background-color:  #f5f5f5;
	color: #000003;
	border-color: inherit;
}
.employer{
	width: 30%;
	height: 40%;
	margin: 65px;
	margin-left: 80px;
	border: 2px solid;
	background-color:#f5f5f5;
	border-color: #f5f5f5;
	border-radius: 20px;
	text-align: center;
}
.employee{
	float: right;
	width: 30%;
	height: 40%;
	margin: 65px;
	margin-left: 80px;
	margin-top: -310px;
	margin-right: 100px;
	border: 2px solid;
	background-color:#f5f5f5;
	border-color: #f5f5f5;
	border-radius: 20px;
	text-align: center;

}
.employer h2{
	font-size: 30px;
	font-weight: bolder;
	font-family: "calibri",monospace;
	color: #000033;
}
.employee h2{
	font-size: 30px;
	font-weight: bolder;
	font-family: "calibri", monospace;
	color: #000033;

}

.ele{
	font-size: 23px;
	font-family: calibri;
	font-weight: bold;
	color: #000033 ;
}
.click{
	border-color: inherit;
	margin: 30px;
	margin-right: 50px;
}
.click button{
	background-color: #000033 ;
	border-color: inherit;
	border-radius: 25px;
	padding: 10px;
}
.click a{
	padding: 10px;
	color: white;
}
*{
	text-decoration: none;
}
.navbar{
	background-color:#f5f5f5;
	font-family: calibri;
	margin-bottom: -20px;

}

.navdiv{
	display: flex;
	justify-content: space-between;
}
.logo a{
	display: flex;
	margin:15px;
	margin-left: 50px;
	margin-top: 30px;
	color: #0f2661;
	font-size: 30px;
	font-weight: bolder;

}
.us_name{
	margin-top: 30px;
	margin-left: 700px;
	font-size: 30px;
	font-weight:bold;
	font-family:"calibri";
	color:#0f2661;
}
.us_name i{
	padding:10px;
}
.out{
	text-decoration:none;
	margin-top:40px;
	margin-bottom:10px;
	margin-right:130px;
	font-size:20px;
	border:2px solid;
	border-radius:10px;
	border-color:#0f2661;
	font-weight:bold;
	font-family:"calibri";
}
.out a{
	
	padding:10px;
	padding-right:10px;
	padding-left:10px;
	
	color:#0f2661;

}

	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	<title>JOB PORTAL</title>
</head>
<body>
	<nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="#">Job search</a></div>
			<?php
			if(isset($_SESSION['login_status']))
			{?>
			
			<div class="us_name"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $_SESSION['name']; ?></div>
			<div class="out"><a href="logout.php">Logout</a></div>

			<?php } ?>
        </div>
    </nav>
    <div class="bod">
    	<div class="backimg"><h1>Find Your Dream Job</h1>
    		<div class="employer">
    			<h2>Are you an employer?</h2>
    			<div class="ele">Post your job here</div>
    			<div class="click"><button><a href="post.php">Post</a></button></div>
    		</div>
    		<div class="employee">
    			<h2>Searching for a job?</h2>
    			<div class="ele">Find the role that suits you</div>
    			<div class="click"><button><a href="view.php">Search</a></button></div>
    		</div>
    	</div>
    		
    	</div>
    	
   		<div class="Contact">
    		<h2>Get in touch</h2>
			<p>Have questions or want to discuss?  We're here to help!</p>
			<p>Feel free to reach out to us via the contact information provided</p>
			<div class="icons">
				 <i class="far fa-envelope"></i>
				 <i class="fab fa-twitter"></i>
				 <i class="fab fa-instagram"></i>
				 <i class="fab fa-facebook"></i>
				 <i class="fab fa-youtube"></i>
			</div>
    	</div>
    	<div class="infor">
    		<div class="subinfo">
    			<h3>Call us</h3>
    			<p>987654321</p>
    		</div>
    		<div class="subinfo">
    			<h3>Mail us</h3>
    			<p>jobsearch@gmail.com</p>
    		</div>
    		<div class="subinfo">
    			<h3>Connect with us</h3>
    			<p>jobsearchfacebook</p>
    		</div>
    	</div>
    </div>

</body>
</html>