<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>confirmation page</title>
	<style>
		table{
			margin-top: 100px;
			height: 400px;
			width: 700px;
			background-color:#c8b8e6;
		
		}
		label{
			font-size: 25px;
			font-weight: bold;
		}
		input{
			padding: 10px;
			font-weight: bold;
		}
		body{
				background-color:#8f60e0;
		}
		button{
			margin-left: 650px;
			margin-top: 50px;
			height: 50px;
			width: 200px;
			font-weight: bold;
			border-radius: 30px;
			font-size: 15px;
			color:red;


		}
		input{
			font-size: 15px;
		}


	</style>
</head>
<body>
	<table border=0 align="center">
			<form method = "post" action = "forms.html">
				<h1 align="center"><b><font color="Black">CONFIRMATION</font></b></h1>
				<hr>
				<tr> 
					<td>
						<label>Visitor Name </label>
					</td>
					<td>
						<input type = "text" name = "Name" size=54 placeholder="Wilson Gupta" /> 
					</td>
				</tr>
				<tr> 
					<td>
						<label>Student Name </label>
					</td>
					<td>
						<input type = "text" name = "Name" size=54 placeholder="Devanshi Gupta" /> 
					</td>
				</tr>
				
				<tr>
					<td>
						<label> Student ID </label>
					</td>
					<td>
						<input type = "text" name = "email" size=54 placeholder="BTBTI19005" /> 
					</td>
				</tr>
				<tr>
					<td>
						<label>Date</label>
					</td>
					<td>
						<input type = "text" name = "email" size=54 placeholder="25/04/2022" /> 
					</td>
				</tr>
				<tr>
					<td>
						<label> Time</label>
					</td>
					<td>
						<input type = "text" name = "email" size=54 placeholder="1.00 PM" /> 
					</td>
				</tr>
			</form>
		</table>
			<button type="submit"class="submit-btn" name="submit">THANKS FOR VISITING!</button>
				
				

</body>
</html>