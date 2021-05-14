<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;
?>

<html>
	<head>
		<title><?php echo $name?></title>
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body {
				font-family: "Lato", sans-serif;
				margin: 0px;
				text-align:center;
				}
			.nav-ul {
				list-style-type: none;
				margin: 0;
				padding: 10px;
				verflow: hidden;
				
				}
			.nav-li {
			float:left;
			}
			.nav-li a {
				
			display: block;
			color:#010114;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			text-transform:uppercase;
			}
			
			table{
				text-align:center;
				margin-left: auto;
				margin-right: auto;
				border:4px solid gray;
				border-collapse:collapse;
				}
			th{
				color:violet;
				font-size:24px;
				padding:16px;
			}
			
			td{
				font-size:22px;
				
				padding: 11px 16px 11px 18px;
			}
			
			}
			th,td{
				
				border:2px groove gray;
			}
			body{
				background-image:url("images/star.jpg");
				background-position: center;
				background-repeat: no-repeat;
				background-size:cover;
			}
			
			.btn {
				background-color:RoyalBlue;
				border: none;
				color: white;
				padding: 12px 16px;
				font-size: 23px;
				cursor: pointer;
			}
			.btn:hover {
				background-color:RoyalBlue;
			}
			th {
    background-color: #7cd1f3;
    color: white;}

		</style>
	</head>
	<body>
	<ul>
  <li><a   href="index.php">Home</a></li>
 
  <li style="float:right"><a  href="transaction.php">All Transection</a></li>
 
  <li style="float:right"><a  href="transfer.php">Credit Transfer</a></li>

  <li style="float:right"><a class="active" href="getdetail.php">View User</a></li>
</ul>
		
		<br><br><br>
		<div class="view">
			<table class="flat-table-1">
				<tr>
					<th>Name</th>
					<td><?php echo $name?></td>
				</tr>
				
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<th>Email</th>
					<td><?php echo $mail?></td>
				</tr>
				
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<th> Credits</th>
					<td><?php echo $amount?></td>
				</tr>
			</table>
		</div>
		<br>
		<br>
		<div class="buttons">
			<a href="transfer_to.php">
				<button class="glow-on-hover"> Transfer To</button>
			</a>
		</div>
		<br>
		<br>
		
		
		
	</body>
</html>