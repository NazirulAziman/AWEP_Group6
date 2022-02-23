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
		<h3>Student Personal Information</h3>
		<!--table start-->
		<div id="myTable">
		<!--personal start-->
		<table>
			<!--row 1 start-->
			<tr>
				<th>Fullname</th>
				<th>IC</th>
				<th>Student ID</th>
				<th>Gender</th>
				<th>Courses</th>
				<th>Intake</th>
				<th>Graduation Date</th>
				<th>Home Address</th>
				<th>Contact Number</th>
				<th>Email Address</th>
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
						echo $_POST['ic'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['id'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['gender'];
					?>
				</td>
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
				<td>
					<?php
						echo $_POST['myAddress'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['num'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['email'];
					?>
				</td>
			</tr>
			<!--row 2 end-->
		</table>
		<!--personal end-->
		<br>
		<h3>Student Account Information</h3>
		<!--account start-->
		<table>
			<!--row 1 start-->
			<tr>
				<th>Account Name</th>
				<th>Account Number</th>
				<th>Bank Name</th>
			</tr>
			<!--row 1 end-->

			<!--row 2 start-->
			<tr>
				<td>
					<?php
						echo $_POST['accName'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['accNum'];
					?>
				</td>
				<td>
					<?php
						echo $_POST['bank'];
					?>
				</td>
			</tr>
			<!--row 2 end-->
		</table>
		<!--account end-->
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