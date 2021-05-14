<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>

<html>
	<head>
		<title>Transfer</title>
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			
			
			.form{
				text-align:center;
				
			}
			.button{
				text-align:center;
			}
			
			
			table{
				background-color:#8bd2ee;
				padding:50px;
				border:2px ridge black;
			}
			
			
		</style>
	</head>
	<body>
	<ul>
  <li><a   href="index.php">Home</a></li>
 
  <li style="float:right"><a  href="transaction.php">All Transection</a></li>
 
  <li style="float:right"><a  href="transfer.php">Credit Transfer</a></li>

  <li style="float:right"><a  href="getdetail.php">View User</a></li>
</ul>
		<center>
		<div class="view">
			<br><br><h2 >Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border">
					<table>
						<tr>
							<td style="font-size:12pt;color:#010114;">
								<label for="sender" align="left">Receiver Name:</label>
								&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
									<?php while($row = $result->fetch_assoc()) { ?>
									<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
									<?php } ?>
								</td>
							</tr><br>
							<tr>
								<td>
									<br><label for="transfer">Amount:</label>
								&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
							</tr>
							<tr>
								<td>
									<div class="button">
										<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" class="c" onMouseOver="this.style.color='brown'"onMouseOut="this.style.color='black'" value="Credit" style="color:black;font-size:18px;height:40px; width:100px;">Transfer</button>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</form>
			</div><br>
			<form action="user.php" method="post">
				<div class="buttons">
					<button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
				</div>
			</form>
			</center>
		</body>
	</html>