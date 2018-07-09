<?php
include("innerscript/connection.php");
if(isset($_SESSION["UserId"]))
{
	header("location:dashboard.php?getuser={$_SESSION["Username"]}");

	}



?>
<html>
<head>
<title>LIBRARY | Login</title>
<?php
include("innerscript/css.php");
?>
 
		<style>
		.content{
			min-height:600px;
			min-width:720px;
		}
		.back-image{
    width:100%;
    height:800px;
    background-image: url("img/library3.jpg");
    background-size: 100% 100%;
    border: 1px solid ;
	opacity:0.8;
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
		.panel-default{background-color: #f5f5f5;
  border-color: #000;
  border-radius:0;
  }

		</style>
		
 </head>
 

<body >
<div class="content">
<div class="back-image">
<center>
<div class="inner-back-image" style= "padding-top:50px">
<div class="row">
<div class="col-xs-offset-3 col-xs-6 col-xs-offset-3">
<div class="panel panel-default" style="opactiy:0.5;">
<div class="panel-body">
<h3 >LOGIN</h3>
<form action="" method="post">

  <div class="form-group " >
  
    
    <input type="text" id="u_name" class="form-control" placeholder="enter your username" name="txtusername" required >
  
  </div>
  <div class="form-group ">
 
    
    <input type="password" id="pwd" class="form-control" placeholder="enter your password" name="txtpassword" required>
    
  
  </div>
  
  <button type="submit" onclick="fnlogin()" name="btnlogin" class="btn btn-primary " > LOGIN </button>
  
  
</form>



</div>
<!--<script type="text/javascript">
function fnlogin(){
	var u_name=document.getElementById("u_name").value;
	var pwd=document.getElementById("pwd").value;
	if(u_name=="")
	{
		alert("enter username");
	}
	else if(pwd=="")
	{
		alert("enter password");
	}
	
}
</script>!-->

<div class="panel-footer"><a href="newuser.php" style="color:red"><u><b>New User</b></u></a></div>
</div>
</div>
</div>

</div>
</center>
</div>
<?php


if(isset($_POST["btnlogin"]))
{ $user_name=$_POST["txtusername"];
$password=$_POST["txtpassword"];
	$login_query= "select * from library.mstadminuser where userName='".$user_name."' and password='".$password."'";
	$login_result=mysql_query($login_query) or die(mysql_error($login_query));
	$login_result_rows=mysql_num_rows($login_result);
	if($login_result_rows>0)
	{
		$login_rows=mysql_fetch_assoc($login_result);
		
		$_SESSION["Username"]=$login_rows["userName"];
		$_SESSION["UserId"]=$login_rows["loginId"];
	
	 header("location:dashboard.php?getuser={$_SESSION["Username"]}");
	}
	else
	{
		
		echo  header("location:index.php");
		
		
	}


}
?>
</div>
</body>
</html>

