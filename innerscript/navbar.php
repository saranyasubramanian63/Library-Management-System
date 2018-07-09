<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  <div class="chip navbar-brand ">
  <img src="img/library22.png" alt="Person" width="96" height="96"><strong style="color:white;"><?php
 if($_GET["getuser"])
	 {
		 $u=$_GET["getuser"];
		 echo $u;
	 
	 }?>
  </strong>
</div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <?php 
	 echo" <ul class='nav navbar-nav'>
        <li class='active'><a href=\"dashboard.php?getuser=".$_SESSION["Username"]."\">Home </a></li>
		
        <li><a class='navbar-hover'  href=\"student.php?getuser=".$_SESSION["Username"]."\">Student</a></li>
        <li><a class='navbar-hover' href=\"books.php?getuser=".$_SESSION["Username"]."\" >Books</a></li>
          <li><a href=\"return.php?getuser=".$_SESSION["Username"]."\">Entry</a></li>
          
        
      </ul>";?>
      <ul class="nav navbar-nav navbar-right">
        <li><a  href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
