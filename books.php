<?php
include("innerscript/connection.php");
if(!isset($_SESSION["UserId"]))
{
	header("location:index.php");

	}



?>
<html>
<head>
<title>LIBRARY| BOOK DETAILS</title>
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
    height:665px;
    background-image: url("img/library18.jpg");
    background-size: 100% 100%;
    border: 1px solid ;
	opacity:0.8;
	border-color:transparent;
	
}
		.inner-back-image{
			
    position:relative;
    padding-top: 16%;
    padding-bottom: 6%;
    margin-top: 20%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 600px;
	height:300px;
		}
		.form{
	font-weight:bold;
	color:black;
	font-size:15px;
	border-width:medium;
	
}
.dim{
	border-color:#3D9C35;
	border-radius:0px;
	height:40px;
	width:200px;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}
.navbar{margin-bottom:0px;}
/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color:#3D9C35;
    color: white;
	height:50px;
	font-size:20px;
}

.modal-body {padding: 2px 16px;
height:200px;
margin-top:50px;}


.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}
 .add{
        display: inline-block;
        text-align: left;
        float: right;
    }
	

		</style>
</head>
<body>
<?php
include("innerscript/navbar.php");

?>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h4><i>ADD BOOK DETAILS</i></h4>
    </div>
    <div class="modal-body">
	
	<div class="container">
     <form method="post" action="" style="padding-top:10px;">
	 <div class="row">
	<div class="col-xs-3">
<div class="form-group">
<label><b>BOOK</b></label>
<input type="text" name="txtbook" id="newbook" class=" add form-conrol" placeholder="Enter Book name">
</div>
</div>
<div class="col-xs-3">
<div class="form-group">
<label><b>AUTHOR</b></label>
<input type="text" name="txtauthor" id="newauthor" class="add form-conrol" placeholder="Enter Author name">
</div></div>

<div class="col-xs-3">
<div class="form-group">
<label><b>EDITION  </b></label>
<input type="text" name="txtedition" id="newedition" class=" add form-conrol" placeholder="Enter Edition name">
</div>
</div>

<div class="col-xs-3">
<div class="form-group">
<label><b>PUBLISHER</b></label>
<input type="text" name="txtpublisher" id="newpublisher" class=" add form-conrol" placeholder="Enter Publisher name">
</div>
</div>
</div>
<center><button onclick="fnnewbook()" class="btn btn-success" name="btnnew">ADD</center>
 </form>
 
 </div>
 </div>  

</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-xs-6">
<div class="back-image">


<center>
<div class="inner-back-image" style= "padding-top:50px">



<div class="col-xs-offset-3 col-xs-6 col-xs-offset-3">


<form class="form" method="post" action="">

  
<font color="white">BOOK NAME</font>
</br></br>
 <div class="form-group"  >
 <input type="text" id="bookname" class=" dim form-control" placeholder="Enter Book Name" name="txtbookname" >
  </div>
 </br></br>
  <div >
  
    <button type="submit" name="btnavailable" class="button1 btn btn-success" onclick="fnbooks()" id="bookavailable">Availabe books</button>
	
	 
	  <button type="submit" name="btnall" class="button1 btn btn-success" onclick="fnbooks()" id="bookall">All Books</button>


  </div>
</form>


</div>
<!-- Trigger/Open The Modal -->
<button class="btn btn-success"id="myBtn" style="float:bottom; margin-top:0px; margin-right:20px ;" data-toggle="tooltip" title="Add new Book" >
<span class="glyphicon glyphicon-plus"></span></button>
</div> </div></div>
<?php

if(isset($_POST["btnall"]))
{	echo"
<div class='col-xs-6' style='margin-top:30px;'>
<h1>"."BOOK DETAILS"."</h1>
<table class='table table-striped table-responsive' >

<tr><th>"."Book-Name"."</th><th>"."Author-Name"."</th><th>"."Edition"."</th><th>"."Status"."</th></tr>";

	$student_query = "select B.BookName,B.AuthorName,B.Edition,B.isReturn from library.mstbook as B
	 where B.BookName='".$_POST["txtbookname"]."'" ;

     
		$student_result = mysql_query( $student_query)or die($mysql_error());
if(mysql_num_rows($student_result)>=1)
	
	{
		while ($row = mysql_fetch_assoc($student_result)) 
   {
                                    
  echo "<tr><td>" . $row["BookName"] . "</td><td>" . $row["AuthorName"] . "</td><td> " . $row["Edition"] . "</td>
  <td>".$row["isReturn"]."</td></tr>";
                                
}
	}
	else {
        
    ?>
    <script type="text/javascript">
        alert("No Boooks To Display");</script>
    <?php
    }
	echo"<table>
</div>
";
}
elseif(isset($_POST["btnavailable"]))
{
	echo"
<div class='col-xs-6' style='margin-top:30px;'>
<h1>"."BOOK DETAILS"."</h1>
<table class='table table-striped table-responsive'>
<tr><th>"."Book-Name"."</th><th>"."Author-Name"."</th><th>"."Edition"."</th><th>"."Status"."</th></tr>";
	$student_query="select BookName,AuthorName,Edition,isReturn from library.mstbook where BookName='".$_POST["txtbookname"]."' and isReturn=1";
	$student_result = mysql_query( $student_query)or die($mysql_error());
if(mysql_num_rows($student_result)>=1)
	
	{
		while ($row = mysql_fetch_assoc($student_result)) 
   {
                                    
  echo "<tr><td>" . $row["BookName"] . "</td><td>" . $row["AuthorName"] . "</td><td> " . $row["Edition"] . "</td>
  <td>".$row["isReturn"]."</td></tr>";
                                
}
	}
	else {
        
    ?>
    <script type="text/javascript">
        alert("No Boooks To Display");</script>
    <?php
    }
	echo"<table>

</div>";
}

    ?>
	
	 <?php include("innerscript/studentscript.php");
	 if(isset($_POST["btnnew"]))
{
	$insert_query="insert into library.mstbook(BookName,AuthorName,Publisher,Edition)
	values('".$_POST["txtbook"]."','".$_POST["txtauthor"]."','".$_POST["txtpublisher"]."','".$_POST["txtedition"]."')";
	
	if(mysql_query($insert_query))
	
	{ echo'<script type="text/javascript">alert("added!");</script>';
		
	}
}

	 ?>
	


</div>
</div>
</body>
</html>
	




