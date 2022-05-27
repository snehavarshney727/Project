
<html>
	<head>
		<title> Visitor Page  form</title>
		<link rel="stylesheet" href="visitorlogin.css">
	</head>
	
	<style>
		.container{
			padding-left: 8%;
		padding-right: 8%;
		box-sizing: border-box;

		}
      #ide{
    margin-left: 1300px;
    color: black;
    
    width: 40;
  }
  .navbar{
		height: 12%;
		display: flex;
		align-items: center;
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
        text-shadow: -1px 0 white, 0 1px white, 1px 0 black, 0 -1px black;

	}
	.btn1{
		font-size: 20px;
	}
	
    </style>
	<body>
		<div class="container">
			<div class="navbar">
			
			<nav>
				<ul>
					<li><a href="website.php">HOME</a></li>
					<li><a href="About.html">ABOUT</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					
				</ul>
			</nav>
				
	</div>
			
	      <div class="box">
	   <h1><i>Hey! VISITOR...</i></h1>
        <h1><i>Whom do you want to meet?</i></h1>
             <a href="student.php"><button  class="btn1">STUDENT</button></a>
             <a href="https://docs.google.com/forms/d/e/1FAIpQLScpRRzTfTLdZsN6qZZFB8s_aiBFho2jZe7OcbzJpJjd7N0dXQ/viewform?usp=sf_link"<button class="btn2">FACULTY MEMBER</button></a>
	</div>
	
    </div>
  
 
    </body>
</html>