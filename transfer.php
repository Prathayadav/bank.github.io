<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="home.css">
	<style>
	body{
		text-align:center;
	}
	
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#8bd2ee;
		padding:50px;
		
	}
	.ho{
		padding-top:50px;
	}
	
	}
	
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Anmol"){
				 var arr=["Pooja","Pratha","Mehak","Abhiraj","Sonu","Shadow","puja","bruno","bluto"];
				 }
				 else if(a==="Pooja"){
					var arr=["Anmol","Pratha","Mehak","Abhiraj","Sonu","Shadow","puja","bruno","bluto"];
				}
				else if(a==="Pratha"){
					var arr=["Anmol","Pooja","Mehak","Abhiraj","Sonu","Shadow","puja","bruno","bluto"];
				}
				else if(a==="Mehak"){
					var arr=["Anmol","Pooja","Pratha","Abhiraj","Sonu","Shadow","puja","bruno","bluto"];
				 }
				 else if(a==="Abhiraj"){
					var arr=["Anmol","Pooja","Pratha","Mehak","Sonu","Shadow","puja","bruno","bluto"];
				 }
				 else if(a==="Sonu"){
					
					var arr =["Anmol","Pooja","Pratha","Mehak","Abhiraj","Shadow","puja","bruno","bluto"];
				 }
				 else if(a==="Shadow"){
					var arr=["Anmol","Pooja","Pratha","Mehak","Sonu","Abhiraj","puja","bruno","bluto"];
				 }
				 else if(a==="puja"){
					var arr=["Anmol","Pooja","Pratha","Mehak","Sonu","Shadow","Abhiraj","bruno","bluto"];
				 }
				 else if(a==="bruno"){
					var arr=["Anmol","Pooja","Pratha","Mehak","Sonu","Shadow","puja","Abhiraj","bluto"];
				 }
				 else if(a==="bluto"){
				 var arr=["Anmol","Pooja","Pratha","Mehak","Sonu","Shadow","puja","bruno","Abhiraj"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }

	</script>	
</head>

<body>
<ul>
  <li><a   href="index.php">Home</a></li>
 
  <li style="float:right"><a  href="transaction.php">All Transection</a></li>
 
  <li style="float:right"><a class="active" href="transfer.php">Credit Transfer</a></li>

  <li style="float:right"><a href="getdetail.php">View User</a></li>
</ul>
	<h1>Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Anmol">Anmol</option>
			<option value="Pooja">Pooja</option>
			<option value="Pratha">Pratha</option>
			<option value="Mehak">Mehak</option>
			<option value="Abhiraj">Abhiraj</option>
			<option value="Sonu">Sonu</option>
			<option value="Shadow">Shadow</option>
			<option value="puja">puja</option>
			<option value="bruno">bruno</option>
			<option value="bluto">bluto</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>

	
	
</div>
</body>
</html>