<?php
session_start();
include 'connect.php';

if(isset($_POST['done'])){

 $Sid =mysqli_real_escape_string($conn,$_POST['Sid']);
 $Fname =mysqli_real_escape_string($conn,$_POST['Fname']);
 $Lname = mysqli_real_escape_string($conn,$_POST['Lname']);
 $Course =mysqli_real_escape_string($conn,$_POST['Course']);
 $Hname =mysqli_real_escape_string($conn,$_POST['Hname']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $Gadhar = mysqli_real_escape_string($conn,$_POST['Gadhar']);
 if(strlen($Sid)!=10)
 {

            ?>
               <script>
                  alert("Check the Sid");
               </script>
               <?php
         
 }
 $squery= "select * from studentrecord where Sid = '$Sid' ";
      $query=mysqli_query($conn,$squery);
      $sidcount = mysqli_num_rows($query);
      if($sidcount>0)
      {
            ?>
               <script>
                  alert("Sid already existed");
               </script>
               <?php
         
      }
 else if(strlen($Gadhar)!=12)
 {
     
            ?>
               <script>
                  alert("Check adhar number");
               </script>
               <?php
         
 }
 else
 {
 $q = "insert into studentrecord(Sid,Fname,Lname,Course,Hname,email,Gadhar)values( '$Sid', '$Fname', '$Lname','$Course' ,'$Hname' ,'$email' ,'$Gadhar')";

 $query = mysqli_query($conn,$q);
}
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
 <h1 class="text-white text-center">  Insert Details </h1>
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
 <label> Email: </label>
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