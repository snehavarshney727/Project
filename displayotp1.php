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
    margin-left: 710px;
    margin-top: 50px;
    border: 3px solid black; 
    width: 20;
  }
  h1{
   color:black ;
   font-weight: bold;
   margin-left: 340px;
  }
  #tabledata{
    font-size: 17px;
    font-weight: bold;
    margin-left: -30px;
  }
</style>
</head>

<body style="background-color:lightgrey;">
 
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1  > APPROVALS BY OTP</h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Sid</th>
 <th> name </th>
 <th> Date </th>
 <th> email </th>
 



 </tr >

 <?php

 include 'connect.php'; 
 $q = "select * from otp ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Sid'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['Date'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 
 
 

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>
 <div>
  <a href="view.php"><button type="button" id="ide" class="btn">BACK</button></a><br>
</div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
 
   
 

</body>
</html>