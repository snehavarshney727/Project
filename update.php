<?php

 include 'connect.php';

 if(isset($_POST['done'])){

 $Sid = $_GET['Sid'];
 $Fname = $_POST['Fname'];
 $Lname = $_POST['Lname'];
 $Course = $_POST['Course'];
 $Hname = $_POST['Hname'];
 $email = $_POST['email'];
 $Gadhar = $_POST['Gadhar'];
 $q = " UPDATE 'studentrecord' SET Fname='$Fname', Lname='$Lname' ,Course='$Course',Hname='$Hname',email='$email',Gadhar='$Gadhar' WHERE Sid=$Sid  ";

 $query = mysqli_query($conn,$q);

 header('location:display.php');
 }

?>
<!DOCTYPE html>
<html>
<head>
   <style>
      label{
         font-size: 20px;
         font-weight: bold;
         margin-left: 10px;
      }
      form{
         width: 900px;

      }
      input{
         width: 300px;

      }
   </style>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color:lightgrey">

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Details </h1>
 </div><br>

 <label> Sid: </label>
 <input type="text" name="Sid" class="form-control" placeholder="Enter Student id" required> <br>

 <label> Fname: </label>
 <input type="text" name="Fname" class="form-control" placeholder="Enter first name" required> <br>
 <label> Lname: </label>
 <input type="text" name="Lname" class="form-control" placeholder="Enter last name" required> <br>
 <label> Course: </label>
 <input type="text" name="Course" class="form-control" placeholder="Enter student course" required> <br>
 <label> Hname: </label>
 <input type="text" name="Hname" class="form-control" placeholder="Enter student hostel name" required> <br>
 <label> email: </label>
 <input type="text" name="email" class="form-control" placeholder="Enter guardian's email" required> <br>
 <label> Gadhar: </label>
 <input type="text" name="Gadhar" class="form-control" placeholder="Enter Guardian adhar number" required> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 <div>
    
    <a href="display.php"><button type="button" class="btn">BACK</button></a><br>
</div>
 </form>
 </div>
</body>
</html>