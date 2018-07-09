<?php
include("innerscript/connection.php");
if(isset($_SESSION["UserId"]))
{
	header("location:dasboard.php?getuser={$_SESSION["Username"]}");
	
	}



?>
<html>
<head>
<title>LIBRARY | New User</title>
 <?php
include("innerscript/css.php");
?>
		<style>
		.panel{
			margin:15%;
			
			}
			.back-image{
    width:100%;
    height:800px;
    background-image: url("img/library19.jpg");
    background-size: 100% 100%;
    border: 1px solid ;
	opacity:0.8;
	position:fixed;
}
		.inner-back-image{
			
    position:relative;
    padding-top: 6%;
    padding-bottom: 6%;
    margin-top: 12%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 660px;
		}
		</style>
</head>
<body>
<div class="back-image">
<div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
<div class="panel panel-default">
<div class="panel-heading"><b> New User</b>
</div>
<div class="panel-body">
<form method="post" action="">
<div class="form-group">
<input type="text" name="txtNUfullname" maxlength="20" id="NUfullname" class="form-control" placeholder="Enter Your Fullname" required>
</div>
<div class="form-group">
<input type="text" name="txtNUusername" id="NUusername" maxlength="20" class="form-control" placeholder="Enter Your Username" required>
</div>
<div class="form-group">
<input type="password" name="txtNUpassword" id="NUpassword" maxlength="8" class="form-control" placeholder="Enter Your Password" required>
</div>
<button class="btn btn-default" name="btnsignup"  type="submit"><b>SignUp</b></button>

</form>



<!--<script type="text/javascript">
function fnNU(){
	var f_name=document.getElementById("NUfullname").value;
	var u_name=document.getElementById("NUusername").value;
	var pwd=document.getElementById("NUpassword").value;
	if(f_name=="")
	{
		alert("Enter Fullname");
	}
	else if(u_name=="")
	{
		alert("Enter Username");
	}
	else if(pwd=="")
	{
		alert("Enter Password");
	}
	
}!-->
</script>
</div>
</div>
</div>
</div>
</div>
</body>
<?php


if(isset($_POST["btnsignup"]))
	
{
	$signup_query="INSERT INTO library.mstadminuser (userName,password,FullName) values('".$_POST["txtNUusername"]."','".$_POST["txtNUpassword"]."','".$_POST["txtNUfullname"]."')";
	if(mysql_query($signup_query))
	{
		$_SESSION["Username"]=$_POST["txtNUusername"];
		$get_query="select loginId from library.mstadminuser where userName='".$_POST["txtNUusername"]."' and 
		password='".$_POST["txtNUpassword"]."'and FullName='".$_POST["txtNUfullname"]."'";
		$get_res=mysql_query($get_query);
		if(mysql_num_rows($get_res)>0)
		{
			$getid=mysql_fetch_assoc($get_res);
			$_SESSION["UserId"]=$getid["loginId"];
		}
		header("location:dashboard.php?getuser={$_SESSION["Username"]}");
	}

	else{
		echo "error"; 
	}
	
	
	
}



?>
</html>

