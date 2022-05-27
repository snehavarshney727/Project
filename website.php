<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>front page</title>
	
</head>
<body background="bg2.png">
	<div class="container">

		<div class="navbar">
			<img src="logo3.png" class="logo">
			<h3>Gatepass System</h3>
			<nav>
				<ul>
					<li><a href="Home.html">HOME</a></li>
					<li><a href="About.html">ABOUT</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					
				</ul>
			</nav>
				
	</div>
	  <div class="row">
	  	<div class="col">
	  		<h1>Welcome</h1>
	  		<a href="http://localhost/adm/index.php"><button type="button" class="btn">ADMIN</button></a>
	  		<a href="http://localhost/adm/visitor1.php"><button  type="button" class="btn" >VISITOR</button></a>
	  		
	  	</div>
	  	<div class="col">
	  		<div class="card">
	  			<h2>BANASTHALI VIDYAPITH</h2>
	  			<img src="bv.jpeg" width="500px" height="200px">
	  		</div>
	  		
	  	</div>
	  </div>	
	  </div>	
</div>	

<style>
	.container{
		padding-left: 8%;
		padding-right: 8%;
		box-sizing: border-box;

	}
	.navbar{
		height: 12%;
		display: flex;
		align-items: center;
	}
	.logo{
		width: 70px;
		cursor: pointer;
		margin-right: 40px;
	}
	h3{
		margin-left: -40px;
		margin-top: -1px;
		font-family: fantasy;
		font-weight: normal;
		font-size: 25px;
		color: white;
		 text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
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
	
	.row{
		display: flex;
		height: 88%;
		align-items: center;
		margin-top: 110px;

	}
	.col{
		text-align: right;
	}
	h1{
		font-size: 100px;
		color: darkblue;
		text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
}
	button{
	width: 180px;
	background: transparent;
	border: 2px solid #041642;
	margin: 30px 0 10px;
	height: 45px;
	font-size: 20px;
	border-radius: 20px;
	padding: 0 5px;
	box-sizing: border-box;
	outline: none;
	color: darkblue;
	cursor: pointer;
	font-weight: bolder;
    }
    .btn:hover{
            color:#fff;
            border: 4px solid skyblue;
            box-shadow: 0 5px 50px 0 #186c7a inset,0 5px 50px 0 #a47ba8,
            0 5px 50px 0 #a47ba8 inset,0 5px 50px 0 #a47ba8;
            /text-shadow: 0 0 5px #141717,0 0 5px #141717;/
        }

	.card{
		width: 800px;
		height: 350px;
		cursor: pointer;
		flex: 1;
		text-align: right;
		transition: transform 0.5s;
	}
	.card:hover{
		transform: translateY(-10px);
	}
	h2{
		color: darkblue;
		font-weight: bold;

	}
	


	


	
</style>


</body>
</html>