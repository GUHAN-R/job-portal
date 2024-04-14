
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		.regf{
	background-color: #0b062e;
}
.frm{
	border: 2px solid;
	border-color: inherit;
	border-radius: 20px;
	width: 300px;
	justify-content: center;
	background-color: #f5f5f5;
	padding: 50px;
	padding-left: 50px;
	margin-left: 500px;
	margin-top: 100px;
	margin-bottom: 25px;
}
.sig{
	font-size: 20px;
	font-weight: bold;
	font-family: cursive;
	text-align: center;
	color: #3d3837;
}
.cnt a{
	font-size: 18px;
	font-weight: bold;
	font-family: calibri;
	color:  #3d3b3a;
	padding: 5px;
	margin: 10px;
}
.ip{
	padding: 5px;
	margin: 5px;
	margin-left: 25px;
	border: 1px solid;

}
.fil{
	margin-left: 15px;
	padding: 10px;
}
.submit{
	margin-top: 5px;
	margin-left: 120px;
	padding: 10px 18px;
	margin-bottom: 0px;
	border: 1px solid;
	border-radius: 20px;
	background-color:#0b062e ;
	color: #f5f5f5;
}
.head{
	margin-left: 50px;
	font-weight: bolder;
	font-family: "Calibri", cursive;
	color: #3d3837;
}
	</style>
	<script defer src="formvalidate.js"></script>
	<title>Sign up</title>
</head>
<body class="regf">
	<form class="frm" id="regform" action="registration.php" method="post">
		<h2 class="head"> Create Your Account</h2>
		<div class="sig">Sign up</div><br>
		<div id="error"></div>
		<div class="cnt">
			<a>First Name</a><br>
			<input type="text" name="fname" placeholder="First name" class="ip" id="fname"><br>
			<a>Last Name</a><br>
			<input type="text" name="lname" placeholder="Last name" class="ip" id="lname"><br>
			<a>User Name</a><br>
			<input type="text" name="uname" placeholder="User name" class="ip" id="Uname"><br>
			<a>Email</a><br>
			<input type="email" name="eid"placeholder="Email" class="ip" id="email"><br>
			<a>Phone no</a><br>
			<input type="number" name="pno" placeholder="Ph.no" class="ip" id="phno"><br>
			<a>Password</a><br>
			<input type="password" name="pwrd" placeholder="Password" class="ip" id="pas"><br>
			<a>Confirm Password</a><br>
			<input type="password" name="confpwrd" placeholder="Password" class="ip" id="cnfpas"><br>
			<input type="submit" value="submit" name="end" class="submit"><br>
		</div>
	</form>

</body>
</html>