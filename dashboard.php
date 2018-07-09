<?php
include("innerscript/connection.php");
if(!isset($_SESSION["UserId"]))
{
	header("location:index.php");

	}



?>
<!DOCTYPE html>
<html>
<head>
<?php
include("innerscript/css.php");
?>
		<style>
		.back-image{
    width:100%;
    height:610px;
    background-image: url("img/library11.jpg");
    background-size: 100% 100%;
    border: 1px solid ;
	opacity:1;
	position:relative;
	border-color:white;
}
	.navbar {
    margin-bottom: 0px;
}
* {
    box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
	height:150px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column  {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column  {
        width: 100%;
    }
}
.pstyle {
	color:#CC263C;
	font-size:30px;
}
.notes{
    margin-bottom: 15px;
    padding: 30px ;
}




.warning {
    background-color: #D1A3B6;
    border-left: 6px solid white;
	
	height:150px;
	text-align:center;
}

body {background-color:#8D194A;
background-image:url("img/library20.jpg");}
.jumbotron{
	height:175px;
}

		</style>
</head>
<body>
 <?php
include("innerscript/navbar.php");
?>

<div class="container">
<div class="jumbotron" style="text-align:center; margin-top:100px;"><h2>Welcome <?php
if($_GET["getuser"])
	{
		$u=$_GET["getuser"];
		echo $u;
	}
?>!</h2>
<h4>Learn.Achieve.Succed</h4>


</div>
</div>
<div class="container">
<div class="row">
<div class="col-xs-6">
<div class="warning notes">
  <p><strong>Library Working Hours</strong> </p>
  <p><b>Monday To Friday 9:00 AM - 8:30 PM</b></p>
   <p><b>Saturday & Sunday 10:00 AM - 2:00 PM</b></p>
</div>
</div>
<div class="col-xs-6">
<div class="warning notes">
  <p><strong>Vision</strong> </p>
  <p><b>Library was started in the year of 2018 with the scope of providing education to students even from poor family background. </b></p>
</div>
</div>
</div>
</div>


<div class="container-fluid">
<?php 
$numstud_query="select * from library.mststudent";
$numstud_res=mysql_query($numstud_query) or die(mysql_error($numstud_query));
$rowS=mysql_num_rows($numstud_res);
echo"<div class='row'>
  <div class='column' style='background-color:#aaa;text-align:center'>
    <h2 >"." Students"."</h2>
    <p class='pstyle'>".$rowS."</p>
</div>";
?>
<?php
$numbooks_query="select * from library.mstbook";
$numbooks_res=mysql_query($numbooks_query) or die(mysql_error($numbooks_query));
$rowT=mysql_num_rows($numbooks_res);
echo"<div class='column' style='background-color:#bbb;text-align:center'>
    <h2>"."Books"."</h2>
    <p class='pstyle'>".$rowT."</p>
</div>";?>
  <?php
  $numbooksIssued_query="select * from library.trnissueentry where isReturn=0";
  $numbooksIssued_res=mysql_query($numbooksIssued_query) or die (mysql_error($numbooksIssued_query));
  $rowI=mysql_num_rows($numbooksIssued_res);
  echo"
  <div class='column' style='background-color:#ccc;text-align:center'>
    <h2>"."Books Issued"."</h2>
    <p class='pstyle'>". $rowI."</p>
  </div>";?>
  <?php
  $numusers_query="select * from library.mstadminuser ";
  $numusers_res=mysql_query($numusers_query) or die (mysql_error($numusers_query));
  $rowU=mysql_num_rows($numusers_res);
  echo"
  <div class='column' style='background-color:#ddd;text-align:center'>
    <h2>"."Admin Users"."</h2>
    <p class='pstyle'>". $rowU."</p>
  </div>
  
</div>"
?>
</div>

</body>
</html>


</body>
</html>
