<?php
$item1 = "Book";
$item2 = "Pen";
$item3 = "Shirt";

$price1 = "$5.00";
$price2 = "$6.00";
$price3 = "$20.00";

$discription1 = "A5 Size with 300 pages";
$discription2 = "Blue ink pens x3";
$discription3 = "Short Sleeve (Available size XS to XXL)";
?>

<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pending Approval</title>
</head>
<style type="text/css">
	body{
		margin: 0;
		scroll-behavior: smooth;
		background:  url("img/background.jpg");
		font-family: arial;
	}
	#formBox{
		display: block;
		width: 1300px; height: 700px;
		border: 1px solid #f2f2f2;
		box-shadow: 0px 3px 2px 3px #888888;
		margin: auto; margin-top: 50px;
		text-align: center;
	}
	#boxHeader{
		display: block;
		width: 100%; height: 80px;
		border: 1px solid #5A91AB;
		text-align: center; color: white;
		font-size: 18px; font-weight: bold;
		background-color: #5A91AB;
		margin-bottom: 60px;
	}
	#myTable{
		display: block;
		width: 1200px; height: 100px;
		margin: auto; margin-top: 20px;
	}
	.mySubmit1{
		width: 300px; height: 40px;
		font-size: 20px;
		margin-top: 50px;
		margin-left: 820px;
	}
	.mySubmit1:hover{
		cursor: pointer;
		color: red;
	}
	table,th,td{
		border: 1px solid black;
		margin: auto;
		font-size: 12px;
		padding: 10px;
	}
	th{
		font-size: 14px;
	}
	tr:nth-child(even){
		background-color: #f2f2f2;
	}
	table{
		width: 100%;
		border-collapse: collapse;
		text-align: center;
	}
	h3{
		font-size: 24px;
	}

	img {
		width:  250px;
		height: 150px;
	}
</style>
<body>
	<!--big Box start-->
	<div id="formBox">
		<!--header start-->
		<div id="boxHeader">
			<h2>Thank you for purchasing, can bring this form to PB administrator</h2>
		</div>
		<img src="img/pblogo.png">
		<!--header end-->
		<?php
			if(isset($_POST['submit'])){
                echo "<h2 align='center'>Your ticket is #".(rand(1,300))."</h2>"; //random number 1 - 200
            }
		?>
		<!--table start-->
		<div id="myTable">
		<!--personal start-->
		<table>
			<!--row 1 start-->
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Description</th>
			</tr>
			<!--row 1 end-->
			<tr>
				<td>
					<?php
					echo $item1;
					?>
				</td>
				<td>
					<?php
					echo $price1;
					?>
				</td>
				<td>
					<?php
					echo $discription1;
					?>
				</td>
			</tr>
			<!--row 2 end-->
			<tr>
				<td>
					<?php
					echo $item2;
					?>
				</td>
				<td>
					<?php
					echo $price2;
					?>
				</td>
				<td>
					<?php
					echo $discription2;
					?>
				</td>
			</tr>
			<!--row 3 end-->
			<tr>
				<td>
					<?php
					echo $item3;
					?>
				</td>
				<td>
					<?php
					echo $price3;
					?>
				</td>
				<td>
					<?php
					echo $discription3;
					?>
				</td>
			</tr>

		</table>
		<br>
		<p><b>Block 2E, Ong Sum Ping Condominium, Jalan Ong Sum Ping, Bandar Seri Begawan, BA1311, Brunei Darussalam
			<br><br>
			Tel: +673 2234466 Fax: 2234469 / 2234449 Email: contact@pb.edu.bn
		</b></p>
		<br>
		<?php
			echo "Submitted on : ";
			echo date('l jS \of F Y h:i A');
		?>
		</div>
		<!--table end-->
	</div>
	<!--big Box end-->
	<!--going back button start-->
	<form action="index.php" method="POST">
			<button type="submit" class="mySubmit1">To Login Page</button>
	</form>
		<!--going back button end-->
</body>
</html>