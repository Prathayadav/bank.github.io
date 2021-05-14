<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>

<html>
	<head>
		<title>viewUser</title>
		<link rel="stylesheet" href="home.css">
		
		<style>
			body{
				text-align:center;
			}
			
			th {
    background-color: #7cd1f3;
    color: white;
  }
  tr {background-color: #d2e8fa;
	text-align:center;
}
			h1{
				font-family: Arial, Times, serif;
			}
			table {
				align: center;
  width: 90%;
}

th {
  height: 50px;
  text-align:center;
}
			
			}
			.css-button{
				margin-left:auto;
				margin-right:auto;
			}
			.button1{
				background-color:white;
				text-align:center;
				padding-top:2px;
			}
			
			.button1:hover{
				background-color:blues;
			}
			.view{
				top:50%;
				padding-top:20px;
				text-align:center;
			}
			.ho{
				padding-top:50px;
				padding-bottom:100px;
			}
			body{
				background-color:white;
			}
			
		}
		</style>
		
	</head>
	
	<body>
	<ul>
  <li><a   href="index.php">Home</a></li>
 
  <li style="float:right"><a  href="transaction.php">All Transection</a></li>
 
  <li style="float:right"><a  href="transfer.php">Credit Transfer</a></li>

  <li style="float:right"><a class="active" href="getdetail.php">View User</a></li>
</ul>
		<h1 >User Information</h1>
		<table class="flat-table-1">
			<thead>
				<th>NO</th>
				<th>Name</th>
				<th>Email</th>
				<th>Credit</th>
				<th></th>
			</thead>
			<tbody>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 1</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post"  class="view">
							<button class="button1" type="submit" name="name" value="Anmol">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 2</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Pooja">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 3</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Pratha">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 4</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Mehak">View</button>
						</form>
					</td>
					
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 5</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Abhiraj">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 6</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1" type="submit" name="name" value="Sonu">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
					
						$row=mysqli_fetch_array($result);
					?>
					<td> 7</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="Shadow">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 8</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="puja">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 9</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="bruno">View</button>
						</form>
					</td>
				</tr>
				<tr>
					<?php
						$row=mysqli_fetch_array($result);
					?>
					<td> 10</td>
					<td><?php echo  $row["name"]; ?></td>
					<td><?php echo  $row["email"]; ?></td>
					<td><?php echo  $row["amount"]; ?></td>
					<td>
						<form action="user.php" method="post" class="view">
							<button class="button1"type="submit" name="name" value="bluto">View</button>
						</form>
					</td>
				</tr>
			</tbody>
		</table><br><br>
		
	</body>
</html>