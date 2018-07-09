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
		<style>.back-image{
    width:100%;
    height:610px;
    background-image: url("img/library10.jpg");
    background-size: 100% 100%;
    border: 1px solid ;
	opacity:0.8;
	position:fixed;
	border-color:white;
}
.button1:hover {
    background-color: grey;
    color: black;
	font-weight:bold;
	
}
.button1{
	border-color:yellow;
	background-color:black;
	color:white;
		font-weight:bold;

	
}
.form{
	font-weight:bold;
	color:black;
	font-size:15px;
	border-width:medium;
	padding-top:100px;
}
.dim{
	border-color:white;
	border-radius:0px;
	height:40px;
}
.navbar {
    margin-bottom: 0px;
}




</style>
</head>


<body>

<?php
include("innerscript/navbar.php");
?>
<div class="back-image">
<div class="container">
<div class="row">
<div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
<form class="form" method="post" action="">

  <div class="form-group" >
  
    
  STUDENT ID:<input type="text" id="studentid" class=" dim form-control" placeholder="enter student ID" name="txtstudentid" required >
  
  
  </div>
   <div class="form-group " >
  
    
  BOOK ID:<input type="text" id="bookid" class="dim form-control" placeholder="enter book ID" name="txtbookid" required>
  
  
  </div>

  
  <button type="submit" name="btnreturn" class="button1 btn btn-default"  id="issuesubmit">RETURN</button>
  <button type="submit" name="btnissue" class="button1 btn btn-default" style="float:right;width:80px;" id="returnsubmit">ISSUE</button>
  <?php
if(isset($_POST["btnreturn"]))
{

$return_query="update library.trnissueentry set isReturn=1 where bookId='".$_POST["txtbookid"]."' and studentId='".$_POST["txtstudentid"]."'"; 
$return_book="update library.mstbook set isReturn=1 where bookId='".$_POST["txtbookid"]."' ";
if(mysql_query($return_query))
{
if(mysql_query($return_book))
echo <<<HTML

<center><strong style="color:black; ">SUCCESS!!
</strong></center>
HTML;

}
}

if(isset($_POST["btnissue"]))
{ 
	$issue_query="call prissue(".$_POST["txtbookid"].",".$_POST["txtstudentid"].")";
	
	$issue_result=mysql_query($issue_query);
	
	
$issue_array=mysql_fetch_array($issue_result);
$issue_value=$issue_array["result"];

if($issue_value){
	echo <<<HTML
<br><br><center><div class=' alert alert-warning'>
<strong style="color:black; ">ISSUED SUCCESSFULLY!!
</strong></center></div>
HTML;
}
else {
	echo <<<HTML
<br><br><center><div class='alert alert-warning'>
<strong style="color:black; ">BOOK NOT AVAILABLE!!
</strong></div></center>
HTML;

	}
}
	
	?>
</form>

  
</div>
</div>
</div>
</div>

</body>




</html>