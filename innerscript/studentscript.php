<script type="text/javascript">
function fnstudent(){
	var s_name=document.getElementById("Studentname").value;
	var dpt=document.getElementById("Departmentname").value;
	var s_id=document.getElementById("Studentid").value;
	
	if(s_name=="")
	{
		alert("enter Student name");
	}
	else if(dpt=="")
	{
		alert("enter Department name");
	}
	else if(s_id=="")
	{
		alert("enter Student ID ");
	}
	
}
</script>
<script type="text/javascript">
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript">
function fnadd(){
	var s_name=document.getElementById("Studentname").value;
	var dpt=document.getElementById("Departmentname").value;
	
	if(s_name=="")
	{
		alert("enter Student name");
	}
	else if(dpt=="")
	{
		alert("enter Department name");
	}
	
	
}
</script>
 <script type="text/javascript">
	 function fnbooks()
	 {
		 var b_name=document.getElementById("bookname").value;
		 if(n_name=="")
		 {alert("Enter Book Name");
	 }
	 }</script>
	 <script type="text/javascript">
	 function fnnewbook()
	 {
		 var bk_name=document.getElementById("newbook").value;
		  var au_name=document.getElementById("newauthor").value;
		   var ed_name=document.getElementById("newedition").value;
		    var pu_name=document.getElementById("newpublisher").value;
			 
		 if(bk_name=="")
		 {alert("Enter Book Name");
	 }
	else if(au_name=="")
		 {alert("Enter Author Name");
	 }else if(ed_name=="")
		 {alert("Enter Edition ");
	 }else if(pu_name=="")
		 {alert("Enter publisher Name");
	 }
	 }</script>