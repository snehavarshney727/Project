<?php
//session_start();
//header('location:http://localhost/adm/disallowed.php');


$server = "localhost";
$username = "root";
$password ="";
$dbname = "adminlogin";

//create a connection

	$conn = mysqli_connect($server , $username , $password , $dbname);
	if(isset($_POST['submit'])){
		//echo "connection sucessfully";
		if(!empty($_POST['Vname']) && !empty($_POST['Vemail']) && !empty($_POST['Vphone']) && !empty($_POST['Relation']) && !empty($_POST['Gadhar']) && !empty($_POST['Sid']) && !empty($_POST['Fname']) && !empty($_POST['Lname']) && !empty($_POST['Course']) && !empty($_POST['Hname']) && !empty($_POST['Date']) && !empty($_POST['Time'])){

	
	   $Vname=mysqli_real_escape_string($conn,$_POST['Vname']);
	   $Vemail=mysqli_real_escape_string($conn,$_POST['Vemail']);
	   $Vphone=mysqli_real_escape_string($conn,$_POST['Vphone']);
	   $Relation=mysqli_real_escape_string($conn,$_POST['Relation']);
	   $Gadhar=mysqli_real_escape_string($conn,$_POST['Gadhar']);
	   $Sid=mysqli_real_escape_string($conn,$_POST['Sid']);
	   $Fname=mysqli_real_escape_string($conn,$_POST['Fname']);
	   $Lname=mysqli_real_escape_string($conn,$_POST['Lname']);
	   $Course=mysqli_real_escape_string($conn,$_POST['Course']);
	   $Hname=mysqli_real_escape_string($conn,$_POST['Hname']);
	   $Date=mysqli_real_escape_string($conn,$_POST['Date']);
	   $Time=mysqli_real_escape_string($conn,$_POST['Time']);

	   if(strlen($Sid)>12)
 {

            ?>
               <script>
                  alert("Check the Sid");
               </script>
               <?php
         
 }
 else if(strlen($Gadhar)!=12)
 {
     
            ?>
               <script>
                  alert("Check Length of adhar number");
               </script>
               <?php
         
 }
 else{
	   	$query = "insert into vstudent(Vname,Vemail,Vphone,Relation,Gadhar,Sid,Fname,Lname,Course,Hname,Date,Time) values('$Vname','$Vemail','$Vphone', '$Relation', '$Gadhar', '$Sid', '$Fname', '$Lname', '$Course', '$Hname', '$Date','$Time')";
	   $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
	   if($run)
	   {

         ?>
                    <script>
                        window.location.replace("allowed.php");
                    </script>
                <?php
	   
	   	}
	   else
	   {  
	   	     ?>
               <script>
                  alert("Please try again with your registered adhar number or you can try with otp ");
                  window.location.replace("disallowed.php");
                    
               </script>
               <?php
	   	
	   	
	   }
	  } 	
}

 else
{
	echo"all fields required";
}
}


?>