<!DOCTYPE html>
<html>
<head>

 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<style>
  #ide{
    margin-left: 700px;
    margin-top: 100px;
    border: 3px solid black; 
    width: 20;
  }
  #id{
    margin-left: 730px;
    margin-top: 50px;
    border: 3px solid black; 
    width: 20;
  }
  h1{
   color:black ;
   font-weight: bold;
   margin-left: 430px;
  }
  #tabledata{
    font-size: 20px;
  }
</style>
</head>

<body style="background-color:lightgrey">
 
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 > STUDENT DATA </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Sid </th>
 <th> Fname </th>
 <th> Lname </th>
 <th> Course </th>
 <th> Hname </th>
 <th> email </th>
 <th> Gadhar </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'connect.php'; 
 $q = "select * from studentrecord ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Sid'];  ?> </td>
 <td> <?php echo $res['Fname'];  ?> </td>
 <td> <?php echo $res['Lname'];  ?> </td>
 <td> <?php echo $res['Course'];  ?> </td>
 <td> <?php echo $res['Hname'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['Gadhar'];  ?> </td>

 <td> <button class="btn-danger btn"> <a href="delete.php?Sid=<?php echo $res['Sid']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?Sid=<?php echo $res['Sid']; ?>"class="text-white">
 Update </a></button></td>
 </tr>
 

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>
 <div>
  <a href="insert.php"><button type="button" id="ide" class="btn">ADD DETAILS</button></a><br>
</div>
<div>
  <a href="admin.php"><button type="button" id="id" class="btn">BACK</button></a><br>
</div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
 
   
 

</body>
</html>