<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
</head>
<style type="text/css">
	body{
		margin: 0;
		scroll-behavior: smooth;
		font-family: arial;
		background:  url("img/background.jpg");
	}
	#loginBox{
		display: block;
		width: 650px; height: 650px;
		border: 1px solid white;
		border-radius: 20px;
		margin: auto; margin-top: 150px;
		text-align: center;
		box-shadow: 0px 3px 2px 3px #888888;
	}
	#pic{
		display: block;
		max-width: 350px;
		margin: auto; margin-top: 50px;
		animation: spin 5s linear infinite; /*for animation*/
	}
	#myLogin{
		display: block;
		width: 600px; height: 250px;
		margin: auto; margin-top: 80px;
	}
	.inputBox{
		display: flex;
		width: 300px; height: 40px;
		border: 1px solid;
		border-radius: 10px;
		margin: auto; margin-top: 20px;
		background-color: #F6FDFE;
	}
	.icons{
		position: relative;
		display: inline-block;
		width: 40px; height: 40px;
		outline: none;
		background-color: #C4E9EE;
		border-radius: 10px 0px 0px 10px;
	}
	input{
		position: relative;
		display: inline-block;
		background: none;
		width: 200px; height: 40px;
		outline: none;
		border: none;
		font-size: 20px;
		padding-left: 10px;
	}
	#myBtn{
		width: 300px; height: 40px;
		font-size: 20px;
		margin-top: 40px;
		background-color: #52949D;
		border: 1px solid grey;
		border-radius: 10px;
		cursor: pointer;
		color: white;
	}

	/*animation below*/
	@keyframes spin{
	100%{
	transform: rotateY(360deg);
	}
	}
</style>

<body>
	<!--medium size box start-->
	<div id="loginBox">
		
		<!--form for login to next page start-->
		<form action="homepage.php" method="post">
			<!--logo image start-->
			<img src="img/pblogo.png" id="pic">
			<!--logo image end-->

			<!--title start-->
			<h2>PB Inventory System</h2>
			<!--title end-->

			<!--login info start-->
			<div id="myLogin">
				<!--username start-->
				<div class="inputBox">
					<div class="icons">
						<img src="img/icons1.png" style="max-width: 20px; margin-top: 10px;">
					</div> 
					<input type="text" id="uname" name="username" placeholder="Enter your username" autocomplete="off">
				</div>
				<div class="inputBox">
					<div class="icons">
						<img src="img/icons2.png" style="max-width: 20px; margin-top: 10px;">
					</div>
					<input type="password" name="password" placeholder="Enter your password" autocomplete="off">
				</div>
				<!--password end-->

				<!--login button start-->
				<button type="submit" id="myBtn">Log In</button>
				<!--login button end-->

				<!--login function start-->

				<!--login function end-->
				
				
				
			</div>
			<!--login info end-->
		</form>
		<!--form for login to next page end-->
	</div>
	<!--medium size box end-->
</body>

</html>