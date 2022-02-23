<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Homepage</title>
</head>
<link rel="stylesheet" type="text/css" href="css/homepage.css">
<script type="text/javascript" src="js/homepage.js"></script>
<style>
#addcart{
	display: inline-block;
	width: 400px; height: 750px;
	border: 1px solid #F1F1F1;
	border-radius: 20px;
	padding-left: 20px; padding-right: 20px;
	box-shadow: 0px 3px 2px 3px #888888;
	background-color: #F1F1F1;
}

.content {
	display: inline-block;
	width: 200px;
	height: 280px;
	background-color: #F1F1E3;
	border-radius: 20px;
	box-shadow: 0px 3px 2px 3px #888888;
	text-align:center;
	margin-left: 30px;
	margin-top: 10px;
	}

.flex-container {
  display: flex;
  flex-direction: column;
}

.flex-container > div {
  border:2px solid black;
  border-radius:10px;
  background-color: #f1f1f1;
  width: 380px;
  margin: 5px;
  line-height: 50px;
}

.addcontent {
	float:left; 
	width:120px; 
	height:100px;
	margin: 5px 5px 5px 5px;
}

.proceed {
  background-color: #4CAF50; 
  border: none;
  color: white;
  bottom: 80px;
  position:fixed;
  margin-left:130px;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
}

#item1,#item2,#item3,#item4 {
	display: none;
}

.cancelbutton {
	background-color: red; 
	color: white;
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

				<!--username start-->
				<div id="myUser">
					Welcome, 
					<?php
						echo $_POST['username'];
					?>
				</div>
				
				<!--username end-->

				<!--Logout start-->
				<form action="index.php" method="POST">
				<button id="out" type="submit">
					<div id="outIcon"><img src="img/logout.png" style="max-width: 25px; margin-top: 5px;"></div>Log Out
				</button>
				</form>
				<!--Logout end-->

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
					<h2 style="color: #6B6B6B;">What is PB inventory system?</h3>
					<p>PB-Inventory actually is a methodical strategy to sourcing, lending, borrowing, and selling-buying (opt) in a nuanced manner in a for all intents and purposes major way. PB-Inventory exists to effectively for the most part handle and process applications for spectacle allowance, computer loan, and borrowing for students and administrators, therefore PB-Inventory is essentially a systematic way to sourcing, loaning, borrowing, and selling-buying (opt), which generally is highly significant, for all intents and purposes contrary to popular belief.</p>
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
				<!--bigBox start-->
				<div id="bigBox">
				<!--Application form page 1 start-->
				<div id="myApp1">
					<h2>Student Personal Information Section</h2>
					<form action="" method="POST">
						<input type="text" name="fname" placeholder="Enter your fullname" class="appInput"> &nbsp;
						<input type="text" name="id" placeholder="Enter your student ID" class="appInput"> &nbsp;
						<br><br>
						<select class="appInput">
							<option value="0">-- Select Gender --</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<br><br>
						<label class="forLabel">Upload Your Passport Size Photo: </label><input type="file" name="file" class="appInput">
						<br><br>
						<input type="text" name="course" placeholder="Enter Your Courses" class="appInput"> &nbsp;
						<input type="number" name="intake" placeholder="Intake" class="appInput" id="intake" min="8" max="11"> &nbsp;
						<label class="forLabel">Graduation: </label><input type="date" name="intake" placeholder="Enter Your Intake" class="appInput" id="date">
						<br><br>
						<input type="text" name="ic" placeholder="Enter Your IC Number" class="appInput"> &nbsp;
						<select class="appInput" id="ic">
							<option value="0">-- IC Color --</option>
							<option value="Yellow">Yellow</option>
							<option value="Purple">Purple</option>
							<option value="Green">Green</option>
							<option value="Red">Red</option>
						</select> &nbsp;
						<input type="text" name="ct" placeholder="Enter Your Citizenship" class="appInput"> &nbsp;
						<br><br>
						<textarea id="myAddress" placeholder="Enter Your Address"></textarea>
						<br><br>
						<input type="text" name="num" placeholder="Enter Your Contact Number" class="appInput"> &nbsp;
						<input type="email" name="email" placeholder="Enter Your Email Address" class="appInput"> &nbsp;
						<br><br>
						<h2>Student Bank Information Section</h2>
						<input type="text" name="num" placeholder="Enter Your Account Name" class="appInput" id="acc"> &nbsp;
						<input type="text" name="num" placeholder="Enter Your Account Number" class="appInput" id="acc"> &nbsp;
						<br><br>
						<input type="text" name="num" placeholder="Enter Your Bank Name" class="appInput" value="BIBD At-Tamwil">
						<br><br>
				</div>
				<!--Application form page 1 end-->

				<!--Application form page 2 start-->
				<div id="myApp2">
					<h2>Please Enclose One:</h2>
						<label class="forLabel">Upload a Copy of Your Student ID Card: </label><input type="file" name="sid" class="appInput">
						<br><br>
						<label class="forLabel">Upload a Copy of Your Account Book/Account Number Card: </label><input type="file" name="acc" class="appInput">
						<br><br>
						<label class="forLabel">Upload Your Original Quotation of Purchases: </label><input type="file" name="quo" class="appInput">
						<br><br>
					<h2>Group Coordinator Confirmation Section</h2>
						<label class="forLabel">Upload Your Documentation Approval from Group Coordinator: </label><input type="file" name="gc" class="appInput">
						<br><br>
					<h2>Student Acknowledgement Section</h2>
						<label class="forLabel">Upload Your Digital Signature: </label><input type="file" name="gc" class="appInput">
						<br><br>
						<label class="forLabel">Date: </label><input type="date" name="ackDate" class="appInput">
						<br><br>
						<label class="forLabel" style="font-size: 14px;">I declare that the information provided is true. 
						I will notify the Student Affairs Division of any changes as soon as possible</label>
						<input type="checkbox" name="agree">
						<br><br>
						<button type="Submit" class="mySubmit1">Submit Your Form</button>
					</form>
				</div>
				<!--Application form page 2 end-->


				<!--Application rules start-->
				<div id="appRules1">
					<h2 style="color:red;">*Important Notice*</h2>
					<ul>
						<li>Please fill in CAPITAL LETTERS</li>
						<li>Please enclose ONE (1) :
							<ul>
							<li><b>Copy of Student Identity Card</b></li>
							<li><b>Copy of Account Book/ Student Account Number Card</b></li>
							<li><b>Original quotation of purchases</b></li>
							</ul>
						</li>
						<br>
						<li>The price per purchase is limited to <b>$2,000.00BND only</b></li>
						<li>Students must be <b>18 years of age or older</b> when applying</li>
						<li>Please ensure all the information in the application form is correct</li>
					</ul>
				</div>
				<!--Application rules end-->
				</div>
				<div onclick="prev()" id="prev">Prev</div>
				<div onclick="next()" id="next">Next</div>
				<!--bigBox end-->
			</div>
			<!--content 2 end-->

			<!--content 3 start-->
			<div id="c3">
				<!--Welcome start-->
				<div class="welcome" id="myDetails">
					<h2>Borrower Details Section</h2>
					<form action="" method="POST">
						<input type="text" name="fname" placeholder="Enter your fullname" class="appInput"> &nbsp;
						<input type="text" name="contact" placeholder="Enter your Contact Number" class="appInput"> &nbsp;
						<br><br>
						<textarea id="myAddress" placeholder="Enter Your Address"></textarea>
						<br><br>
						<input type="email" name="email" placeholder="Enter your Email Address" class="appInput"> &nbsp;
						<select class="appInput" id="dept">
							<option value="0">-- Department --</option>
							<option value="Lecturer">Lecturer</option>
							<option value="Student">Student</option>
						</select> &nbsp;
					<h2>Optional For Student Details Section</h2>
						<input type="text" name="course" placeholder="Enter Your Courses" class="appInput"> &nbsp;
						<input type="number" name="intake" placeholder="Intake" class="appInput" id="intake" min="8" max="11"> &nbsp;
						<label class="forLabel">Graduation: </label><input type="date" name="intake" placeholder="Enter Your Intake" class="appInput" id="date">
						<br><br>
					<h2>Item Details Section</h2>
						<select class="appInput" id="item">
							<option value="0">-- Pick Item --</option>
							<option value="Laptop">Laptop</option>
							<option value="Tablet">Tablet</option>
							<option value="Speaker">Speakers</option>
							<option value="Projector">Projector</option>
						</select> &nbsp;
						<input type="text" name="model" placeholder="Enter Model Number or Name" class="appInput"> &nbsp;
						<input type="text" name="include" placeholder="What to Includes?" class="appInput"> &nbsp;
						<br><br>
						<input type="text" name="use" placeholder="Intended Use" class="appInput"> &nbsp;
						<input type="text" name="where" placeholder="Where this item be used?" class="appInput"> &nbsp;
						<br><br>
						<label class="forLabel">Date needed: </label><input type="date" name="intake" placeholder="Enter Your Intake" class="appInput" id="date">
						<select class="appInput" id="duration">
							<option value="0">-- Pick Your Durations --</option>
							<option value="1 Day">1 Day</option>
							<option value="1 Week">1 Week</option>
							<option value="1 Month">1 Month</option>
							<option value="1 Semester">1 Semester</option>
							<option value="1 Year">1 Year</option>
						</select> &nbsp;
						<br><br>
						<label class="forLabel" style="font-size: 14px;">I declare that the information provided is true. 
						I will notify the Student Affairs Division of any changes as soon as possible</label>
						<input type="checkbox" name="agree">
						<br><br>
						<button type="Submit" class="mySubmit1">Submit Your Form</button>
					</form>
				</div>
				<!--Welcome end-->
			</div>
			<!--content 3 end-->

			<!--content 4 start-->
			<div id="c4">
				<!--bigBox start-->
				<div id="bigBox">

					<!--merchandise box start-->
					<div id="myApp1">
						<h2>PB Merchandise</h2>
						<div>
							<div class="content">
							<img src="img/notebook.png">
							<p><b>Book</b><br>$5.00</p>
							<button onclick="pressone()" style="background-color: blue; width: 100px; height:20px; color: white;">Add to Cart</button>
							</div>
							<div class="content">
							<img src="img/file.png">
							<p><b>File</b><br>$2.00</p>
							<button onclick="presstwo()" style="background-color: blue; width: 100px; height:20px; color: white;">Add to Cart</button>
							</div>
							<div class="content">
							<img src="img/pen.png">
							<p><b>Pen</b><br>$6.00</p>
							<button onclick="pressthree()" style="background-color: blue; width: 100px; height:20px; color: white;">Add to Cart</button>
							</div>
							<div class="content">
							<img src="img/shirt.png">
							<p><b>Shirt</b><br>$20.00</p>
							<button onclick="pressfour()" style="background-color: blue; width: 100px; height:20px; color: white;">Add to Cart</button>
							</div>
						</div>
					</div>
					<!--merchandise box end-->
				
					<!--add to cart box start-->
					<div id="addcart">
						<h2>Add to cart</h2>
						<div class="flex-container">
  							<div id="item1">
							  <img src="img/notebook.png" class="addcontent">
							  <p><b>Notebook</b> $5.00<br><button onclick="cancelone()" class="cancelbutton">Cancel</button></p>
							</div>
  							<div id="item2">
							  <img src="img/file.png" class="addcontent">
							  <p><b>File</b> $2.00<br><button onclick="canceltwo()" class="cancelbutton">Cancel</button></p>
							</div>
  							<div id="item3">
							  <img src="img/pen.png" class="addcontent">
							  <p><b>Pen</b> $6.00<br><button onclick="cancelthree()" class="cancelbutton">Cancel</button></p>
							</div>
							<div id="item4">
								<img src="img/shirt.png" class="addcontent">
								<p><b>Shirt</b> $20.00<br><button onclick="cancelfour()" class="cancelbutton">Cancel</button></p>
							</div>  
						</div>
						<button class="proceed">Proceed</button>

					</div>
					<!--add to cart box end-->

				</div>
				<!--bigBox end-->

			</div>

			<!--content 5 start-->
			<div id="c5">
				<!--Welcome start-->
				<div class="welcome">
					<h2>My Approval</h2>
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