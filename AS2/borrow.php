<!DOCTYPE html>
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
		width: 1300px; height: 740px;
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
		margin-bottom: 20px;
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
</style>
<body>
	<!--big Box start-->
	<div id="formBox">
		<!--header start-->
		<div id="boxHeader">
			<h2>Thank you for submitting your request, We will get in touch as soon as possible</h2>
		</div>
		<!--header end-->
		<h3>Borrower Details</h3>
		<!--table start-->
		<div id="myTable">
		<!--Borrower start-->
		<table>
			<!--row 1 start-->
			<tr>
				<th>Fullname</th>
				<th>Contact Number</th>
				<th>Home Address</th>
				<th>Email Address</th>
				<th>Department</th>
			</tr>
			<!--row 1 end-->

			<!--row 2 start-->
			<tr>
				<td>
					<?php
						echo $_POST['fname'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['contact'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['myAddress'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['email'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['dept'];
					?>
				</td>
			</tr>
			<!--row 2 end-->
		</table>
		<!--Borrower end-->
		<br>

		<!--Student start-->
		<h3>Student Details - Optional</h3>
		<table>
			<!--row 1 start-->
			<tr>
				<th>Courses</th>
				<th>Intake</th>
				<th>Graduation Date</th>
			</tr>
			<!--row 1 end-->

			<!--row 2 start-->
			<tr>
				<td>
					<?php
						echo $_POST['course'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['intake'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['date'];
					?>
				</td>
			</tr>
			<!--row 2 end-->
		</table>
		<!--Student start-->
		<br>
		<h3>Item Details</h3>
		<!--item start-->
		<table>
			<!--row 1 start-->
			<tr>
				<th>Item</th>
				<th>Model/Brand</th>
				<th>Included</th>
				<th>Intended Use</th>
				<th>Location</th>
				<th>Date Needed</th>
				<th>Duration</th>
			</tr>
			<!--row 1 end-->

			<!--row 2 start-->
			<tr>
				<td>
					<?php
						echo $_POST['item'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['model'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['include'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['use'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['where'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['date1'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['duration'];
					?>
				</td>
			</tr>
			<!--row 2 end-->
		</table>
		<!--item end-->
		<!--going back button start-->
		<form action="index.php" method="POST">
			<button type="submit" class="mySubmit1">To Login Page</button>
		</form>
		<!--going back button end-->
		<br>
		<?php
			echo "Submitted on : ";
			echo date('l jS \of F Y h:i A');
		?>
		</div>
		<!--table end-->
	</div>
	<!--big Box end-->
</body>
</html>