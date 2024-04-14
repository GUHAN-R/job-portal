<?php
  session_start();
  if(isset($_SESSION['login_status']) && $_SESSION['login_status']==true)
  {
    header('Location:index.php');
  }

?>
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
	padding: 40px;
	padding-top: 20px;
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
	margin-top: 10px;
	margin-left: 120px;
	padding: 10px 18px;
	margin-bottom: 0px;
	border: 1px solid;
	border-radius: 20px;
	background-color:#0b062e ;
	color: #f5f5f5;
}
.head{
	margin-left: 70px;
	font-weight: bolder;
	font-family: "Calibri", cursive;
	color: #3d3837;
}
.ermsg{
	padding: 2px;
	padding-top: 5px;
	color: red;
	padding-left: 5px;
	margin: 5px;
	margin-left: 20px;

}
	</style>
	<title>Login</title>
</head>
<body class="regf">
	<form class="frm" id="LogFrm">
		<h2 class ="head">Welcome User</h2>
		<div class="sig">Login</div>
		<div class="cnt">
			<a>User Name</a><br>
			<input type="text" name="uname" placeholder="User name" class="ip" id="uname"><br>
			<a>Email</a><br>
			<input type="email" name="eid" placeholder="Email" class="ip" id="eid"><br>
			<a>Password<a><br>
			<input type="password" name="pwrd" placeholder="Password" class="ip" id="pwrd"><br>
			<a>Want to sign up?</a> <a href="reg.php">sign up here</a><br>
			<input type="submit" value="submit" name="end" class="submit"><br>
		</div>
		<div id="errmsg" class="ermsg"></div>
	</form>
	<script type="text/javascript">
		
		document.getElementById('LogFrm').addEventListener('submit', function(event){
			event.preventDefault();
			var username=document.getElementById('uname').value;
			var email=document.getElementById('eid').value;
			var password=document.getElementById('pwrd').value;
			console.log(email);

			var xhr= new XMLHttpRequest();
			xhr.open('POST','verify.php',true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onreadystatechange=function(){
				if(xhr.readyState===4){
					if(xhr.status===200){
						var res=xhr.responseText;
						var sess=
						console.log(res);
						if(res==='valid'){
							window.location.href = 'index.php';
						}
						else{
							document.getElementById('errmsg').innerHTML = 'Username or password is not valid.';
						}
					}
					else{
						 document.getElementById('errmsg').innerHTML = 'An error occurred while processing your request.';
					}
				}
			};

		var data = 'username=' + encodeURIComponent(username) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password);
    	xhr.send(data);
    });
		
	</script>

</body>
</html>