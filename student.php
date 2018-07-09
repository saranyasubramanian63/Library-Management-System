<?php
include("innerscript/connection.php");
if(!isset($_SESSION["UserId"]))
{
	header("location:index.php");
}



?>
<html>
<head>
<title>LIBRARY| STUDENT DETAILS</title>
<?php
include("innerscript/css.php");
?>
		<style>
		input{
			border-radius:0px;border-color:white;box-shadow: 3px 3px ;
			height:40px;
			
		}
		#mybtn{float:right;
		border-color:none;
		margin-right:60px;
		margin-top:60px;}
	.back-image{
    width:100%;
    height:400px;
    background-image: url("img/library19.jpg");
    background-size: 100% 100%;
    border: 1px solid ;
	opacity:0.8;
	border-color:transparent;
	
}
		.inner-back-image{
			
    position:relative;
    padding-top: 16%;
    padding-bottom: 6%;
    margin-top: 5%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 750px;
	height:300px;
		}	
.navbar a hover: {
    background-color: red;
    color: white;
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
    background-color:white;
    color: #5cb85c;
	height:50px;
	font-size:20px;
}

.modal-body {padding: 2px 16px;
height:200px;
margin-top:50px;
}

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

		</style>
</head>
<body>


<?php
include("innerscript/navbar.php");
?>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h4>ADD STUDENT DETAILS</h4>
    </div>
    <div class="modal-body">
	<div class="row">
	
     <form method="post" action="">
	<div class="col-xs-4">
<div class="form-group">
<font size="4" color="black"><b>STUDENT NAME</b></font>
<input type="text" name="txtStudentname" id="Studentname" class="form-conrol" placeholder="Enter Student name">
</div>
</div>
<div class="col-xs-4">
<div class="form-group">
<font size="4" color="black"><b>DEPARTMENT</b></font>
<input type="text" name="txtDepartmentname" id="Departmentname" class="form-conrol" placeholder="Enter Department name">
</div>
</div>
<div class="col-xs-4"><button onclick="fnadd()" class="btn btn-success" name="btnadd">ADD</center>
</div>
 </form>
 
 </div>
 </div>
   

</div>
</div>
<div class="back-image">


<center>
<div class="inner-back-image" style= "padding-top:50px">
<div class="row" style="padding-top:30px;">


<form method="post" style="margin-left:10px;" action="">
<div class="col-xs-3">
<div class="form-group">
<font size="4" color="WHITE"><b>NAME</b></font>
<input type="text" name="txtStudentname" id="Studentname" class="form-conrol" placeholder="Enter Student name" required>
</div>
</div>
<div class="col-xs-3">
<div class="form-group">
<font size="4" color="WHITE"><b>DEPARTMENT</b></font>
<input type="text" name="txtDepartmentname" id="Departmentname" class="form-conrol" placeholder="Enter Department name" required>
</div>
</div>
<div class="col-xs-3">
<div class="form-group">
<font size="4" color="WHITE"><b> STUDENT ID</b></font>
<input type="text" name="txtStudentid" id="Studentid" class="form-conrol" placeholder="Enter Student ID"required>
</div>
</div>
<div class="col-xs-3">
<center>
<button type="submit" class="button1 btn btn-success" name="btnStudent" style="margin-top:30px" id="btnstudent">SUBMIT</button>
</center>
</div>


</form>



</div>
<button class="btn btn-success"id="myBtn" data-toggle="tooltip" style="width:50px;" title="add new student" ><span class="glyphicon glyphicon-plus"></span>
</button>
</div>
</div>

<?php
 if(isset($_POST["btnStudent"]))
 {
echo"<div class='container'>
<div class='row'>
<div class='col-xs-12'>
<table class='table table-striped table-responsive'>
<tr><th>"."Student-name"."</th><th>"."Book-Name"."</th><th>"."Return-Date"."</th><th>"."Renew-Date"."</th><th>"."Status"."</th></tr>";




	$student_query = "SELECT S.StudentName,B.BookName,I.ExpiryDate,I.isReturn,I.RenewDate from library.mststudent as S 
	inner join library.trnissueentry as I on S.StudentId=I.StudentId inner join library.mstbook as B on B.bookId=I.bookId 
	where S.StudentId=".$_POST["txtStudentid"]."";
 
     
		$student_result = mysql_query( $student_query)or die($mysql_error());
if(mysql_num_rows($student_result)>=1)
	
	{
		while ($row = mysql_fetch_assoc($student_result)) 
   {
                                    
  echo "<tr><td>" . $row["StudentName"] . "</td><td>" . $row["BookName"] . "</td><td> " . $row["ExpiryDate"] . "</td>
  <td>".$row["RenewDate"]."</td><td>".$row["isReturn"]."</td></tr>";
                                
}
	}
	else {
        
    ?>
    <script type="text/javascript">
        alert("No Boooks Issued");</script>
    <?php
    }
}
   


echo"
</table>
</div>
</div>
</div>"
 ?>
<?php
include("innerscript/studentscript.php");
if(isset($_POST["btnadd"]))
{
	$insert_query="insert into library.mststudent(StudentName,DepartmentName)values('".$_POST["txtStudentname"]."','".$_POST["txtDepartmentname"]."')";
	
	if(mysql_query($insert_query))
	
	{ echo'<script type="text/javascript">alert("added!");</script>';
		
	}
}

?>
	
</body>
</html>