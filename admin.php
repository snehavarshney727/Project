<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
      function preback() {window.history.forward();}
      setTimeout("preback()",0);
      window.onunload=function() {null};
   </script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
</head>
<body background="b10.jpeg">

<div class="Container">
	<div class="navbar">
		<img src="bvlogo.png" class="logo">
		<nav>
			<ul>
				<li><a href="website.php">Home</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="website.php">Logout</a></li>
			</ul>
		</nav>
		<div class="row">
			<a href="display.php"><button type="button" class="btn">View Database</button></a><br>
			<a href="view.php"><button type="button" class="btn">View Approvals</button></a>
			
		</div>

		
	</div>
</div>
<style>
	.Container{
		padding-left: 8%;
		padding-right: 8%;
		box-sizing: border-box;

	}
	.logo{
		width: 550px;
		cursor: pointer;
		margin-right: -50px;
		margin-left: 400px;
		margin-bottom: -600px;
		opacity: 20%;
	}
	nav{
		flex: 1;
		text-align: right;
		font-weight: bolder;


	}
	nav ul li{
		list-style: none;
		display: inline-block;
		margin-left: 60px;
	}
	nav ul li a{
		text-decoration: none;
        font-weight: bolder;
		font-size: 25px;
		color: darkblue;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;

	}
	button{
	width: 300px;
	background: transparent;
	border: 3px solid #041642;
	margin: 30px 0 10px;
	margin-bottom: -40px;
	margin-top: 120px;
	height: 60px;
	font-size: 25px;
	border-radius: 20px;
	padding: 0 5px;
	box-sizing: border-box;
	outline: none;
	color: whitesmoke;
	cursor: pointer;
	font-weight: bolder;
    }
    .btn:hover{
            color:#fff;
            border: 5px solid skyblue;
            box-shadow: 0 5px 50px 0 #186c7a inset,0 5px 50px 0 #a47ba8,
            0 5px 50px 0 #a47ba8 inset,0 5px 50px 0 #a47ba8;
            /text-shadow: 0 0 5px #141717,0 0 5px #141717;/
        }

</style>
</body>
</html>