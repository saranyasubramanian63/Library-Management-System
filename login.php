<html>
<head>
<title>LIBRARY | Login</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<div class="panel panel-default" style="opactiy:0.7;">
<div class="panel-body">
<h3>LOGIN</h3>
<form action="" method="post">

  <div class="form-group " >
  
    
    <input type="text" id="u_name" class="form-control" placeholder="enter your username" name="txtusername" >
  
  </div>
  <div class="form-group ">
 
    
    <input type="password" id="pwd" class="form-control" placeholder="enter your password" name="txtpassword">
    
  
  </div>
  
  <button type="submit" onclick="fnlogin()" name="btnlogin" class="btn btn-primary " > LOGIN </button>
  
  
</form>
</div>
<div class="panel-footer"><a href="newuser.php" style="color:red"><u><b>New User</b></u></a></div>
</div>
</div>
</div>
</div>
</center>
</div>
</div>
</body>
</html>