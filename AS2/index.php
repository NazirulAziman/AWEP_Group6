<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Homepage</title>
</head>
<link rel="stylesheet" type="text/css" href="css/index.css">
<style type="text/css">
	#logo{
		display: block;
		max-width: 300px;
		margin-left: auto; margin-right: auto;
	}
	#profile{
		display: block;
		width: 90%; height: 90%;
		margin-top: 4px;
		border-radius: 50%;
		margin-left: auto; margin-right: auto;
	}
	#profile:hover{
		cursor: pointer;
	}
	#c1{
		display: block;
		width: 95%; height: 80vh;
		margin: auto; margin-top: 30px;
	}

	#c2,#c3,#c4,#c5{
		display: none;
		width: 95%; height: 80vh;
		margin: auto; margin-top: 30px;
	}
	.welcome{
		display: block;
		width: 1000px; height: 650px;
		border: 1px solid #F1F1F1;
		background-color: #F1F1F1;
		border-radius: 20px;
		box-shadow: 0px 3px 2px 3px #888888;
		padding-left: 20px; padding-top: 10px;
	}
	#selection{
		display: block;
		width: 200px; height: 4vh;
		border: 1px solid black;
		margin-top: 30px;
	}
	#myPic{
		display: block;
		max-width: 550px;
		border: 1px solid grey;
		border-radius: 10px;
	}
</style>

<body>

	<!--whole start-->
	<div class="wrap">

		<!--navigation start-->
		<div id="side">

			<!--logo start-->
			<div id="myLogo">
				<img src="img/myLogo.png" id="logo">
			</div>
			<!--logo end-->

			<!--my navigation list start-->
			<div class="nav" onclick="dashboard()">Dashboard</div>
			<div class="nav" onclick="loan()">Loan</div>
			<div class="nav" onclick="borrow()">Borrow Inventory</div>
			<div class="nav" onclick="merchandise()">Merchandise</div>
			<div class="nav" onclick="approval()">Approval</div>
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
					<h2>Welcome to PB inventory system</h2>
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
					<h2>Loan</h2>
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

<script type="text/javascript">
	function dashboard(){
		document.getElementById("c1").style.display = "block";
		document.getElementById("c2").style.display = "none";
		document.getElementById("c3").style.display = "none";
		document.getElementById("c4").style.display = "none";
		document.getElementById("c5").style.display = "none";
	}

	function loan(){
		document.getElementById("c2").style.display = "block";
		document.getElementById("c1").style.display = "none";
		document.getElementById("c3").style.display = "none";
		document.getElementById("c4").style.display = "none";
		document.getElementById("c5").style.display = "none";
	}

	function borrow(){
		document.getElementById("c3").style.display = "block";
		document.getElementById("c1").style.display = "none";
		document.getElementById("c2").style.display = "none";
		document.getElementById("c4").style.display = "none";
		document.getElementById("c5").style.display = "none";
	}

	function merchandise(){
		document.getElementById("c4").style.display = "block";
		document.getElementById("c1").style.display = "none";
		document.getElementById("c3").style.display = "none";
		document.getElementById("c2").style.display = "none";
		document.getElementById("c5").style.display = "none";
	}

	function approval(){
		document.getElementById("c5").style.display = "block";
		document.getElementById("c1").style.display = "none";
		document.getElementById("c3").style.display = "none";
		document.getElementById("c4").style.display = "none";
		document.getElementById("c2").style.display = "none";
	}
</script>