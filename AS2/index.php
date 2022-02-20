<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Homepage</title>
</head>
<link rel="stylesheet" type="text/css" href="css/index.css">
<script type="text/javascript" src="js/index.js"></script>
<style type="text/css">
	#nav1{
		color: red;
	}
</style>

<body>

	<!--whole start-->
	<div class="wrap">

		<!--navigation start-->
		<div id="side">

			<!--logo start-->
			<div id="myLogo">
				<img src="img/pb1.png" id="logo" style="max-width: 340px;">
			</div>
			<!--logo end-->

			<!--my navigation list start-->
			<div class="nav" id="nav1" onclick="dashboard()">Dashboard</div>
			<div class="nav" id="nav2" onclick="loan()">Loan</div>
			<div class="nav" id="nav3" onclick="borrow()">Borrow Inventory</div>
			<div class="nav" id="nav4" onclick="merchandise()">Merchandise</div>
			<div class="nav" id="nav5" onclick="approval()">Approval</div>
			<!--my navigation list end-->

		</div>
		<!--navigation end-->

		<!--main start-->
		<div id="main">
			<!--header of main start-->
			<div id="myHeader">
				<!--profile start-->
				<div id="myProf">
					<img src="img/cat.png" id="profile">
				</div>
				<!--profile end-->

				<!--search input start-->
				<input type="text" name="search" id="search" placeholder="Search...">
				<!--search input end-->
			</div>
			<!--header of main end-->

			<!--content 1 start-->
			<div id="c1">
				<!--Welcome start-->
				<div class="welcome">
					<h1>Welcome to PB inventory system</h1>
					<img src="img/bg.jpeg" id="myPic">
					<h2 style="color: #6B6B6B;">Subtitle</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<!--Welcome end-->

				<!--drop down start-->
				<select id="selection">
					<option value="0">English</option>
					<option value="1">Malay</option>
					<option value="2">Arabic</option>
				</select>
				<!--drop down end-->
			</div>
			<!--content 1 end-->

			<!--content 2 start-->
			<div id="c2">
				<!--Welcome start-->
				<div class="welcome">
					<h2>Loan Application Form</h2>
				</div>
				<!--Welcome end-->
			</div>
			<!--content 2 end-->

			<!--content 3 start-->
			<div id="c3">
				<!--Welcome start-->
				<div class="welcome">
					<h2>Borrow</h2>
				</div>
				<!--Welcome end-->
			</div>
			<!--content 3 end-->

			<!--content 4 start-->
			<div id="c4">
				<!--Welcome start-->
				<div class="welcome">
					<h2>Merchandise</h2>
				</div>
				<!--Welcome end-->
			</div>
			<!--content 4 end-->

			<!--content 5 start-->
			<div id="c5">
				<!--Welcome start-->
				<div class="welcome">
					<h2>Approval</h2>
				</div>
				<!--Welcome end-->
			</div>
			<!--content 5 end-->
		</div>
		<!--main end-->

	</div>
	<!--whole end-->

</body>


</html>