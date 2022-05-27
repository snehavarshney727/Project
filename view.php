<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Approvals</title>

	<style>
		.container{
			height: 100%;
			align-items: center;
			justify-content: center;
			display: flex;
		}
		body{
		background-image: url("b10.jpeg");
			background-repeat: no-repeat;

		}
		.button{
		display: flex;
		flex-direction: column;
	    box-sizing: border-box;
		border: 0px solid #041642;
		height: 600px;
		width: 800px;
		border-radius: 20px;
		margin-top: 70px;
		background: #c3c6c7;
		box-shadow: 5px 5px 8px 5px gray;
      }
		.btn{
	width: 400px;
	text-decoration: none;
	background: #393a3b;
	border: 2px solid #041642;
	margin-bottom: 200px;
	height: 70px;
	font-size: 30px;
	border-radius: 10px;
	padding:10px 10px 10px;
	box-sizing: border-box;
	outline: none;
	color: white;
	cursor: pointer;
	font-weight: bolder;
	text-align: center;
	margin: 150px 0px 0px;
	margin-left: 180px;
	box-shadow: 2px 2px 3px 3px #56696e;

}

 .btn:hover{
            color:#fff;
            border: 4px solid #99d3f2;
            box-shadow: 0 5px 50px 0 #186c7a inset,0 5px 50px 0 #a47ba8,
            0 5px 50px 0 #a47ba8 inset,0 5px 50px 0 #a47ba8;
            /text-shadow: 0 0 5px #d590fc,0 0 5px #141717;/
        }
       .btn1{
        	width: 100px;
	text-decoration: none;
	background: #393a3b;
	border: 2px solid #041642;
	margin-top: 100px;
	
	height: 50px;
	font-size: 25px;
	border-radius: 10px;
	padding:10px 10px 10px;
	box-sizing: border-box;
	outline: none;
	color: white;
	cursor: pointer;
	font-weight: bolder;
	text-align: center;
	text-decoration: none;
	
	margin-left: 330px;
	box-shadow: 2px 2px 3px 3px #56696e;

        }
	</style>
</head>
<body>
<div class="container">
	<div class="button">
		<a href="displayapproval.php" class="btn"> Approvals by Form</a>
		<a href="displayotp1.php" class="btn"> Approvals by OTP</a>
		
        <a href="admin.php" class="btn1">BACK</a>
		
	</div>
</div>
</body>
</html>