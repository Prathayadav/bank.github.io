<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="home.css">
		<style>
		
				   th {
    background-color: #7cd1f3;
    color: white;
  }
  tr {background-color: #d2e8fa;
	text-align:center;
}

		
			table{
				
				margin-left: auto;
				margin-right: auto;
				border:4px solid gray;
				border-collapse:collapse;
				
				}
			th{
				
				font-size:26px;
				padding:16px;
			}
			
			td{
				font-size:23px;
				color: ;
				padding: 10px 20px 10px 22px;
			}
			
		
			
		</style>
	</head>
	<body>
	<ul>
  <li><a   href="index.php">Home</a></li>
 
  <li style="float:right"><a class="active" href="transaction.php">All Transection</a></li>
 
  <li style="float:right"><a  href="transfer.php">Credit Transfer</a></li>

  <li style="float:right"><a  href="getdetail.php">View User</a></li>
</ul><br><br><br><br><br>
		
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
				
				<?php while($row = $result->fetch_assoc()) { ?>
				
				<tr>
					<td><?php echo $row["sender"]; ?></td>
					<td><?php echo $row["receiver"]; ?></td>
					<td><?php echo $row["amount"]; ?></td>
				</tr>
				<?php } ?>
			</table>
			<br>
			<br>
			
			
		</body>
	</html>