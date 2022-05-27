
<?php
session_start();
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
                  alert("Please enter your registered adhar number or you can try with otp");
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
                        window.location.replace("approve.php");
                    </script>
                <?php
      
         }
      else
      {  
              ?>
               <script>
                  alert("Please try again with your registered adhar number or you can try with otp ");
                  //window.location.replace("disallowed.php");
                    
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
 <html>
<head>
    <script type="text/javascript">
      function preback() {window.history.forward();}
      setTimeout("preback()",0);
      window.onunload=function() {null};
   </script>

    <title> student form</title>
    <link rel="stylesheet"href="studentform.css">
</head>
<body>
   <div class="container">
      <h2>Please...<br>Fill the Form<br>For Any Query</h2>
     <a href="contact.html"> <button type="button"class="idk">CONTACT US</button></a>
      
      
   	    <div class="card">
   	    	<div class="inner-box" id="card">
   	    		<div class="card-front">

                  
   	    		<h2> YOUR DETAILS</h2>
   	    		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
   	    			<input type="text" class="input-box" placeholder="Your Name" name="Vname" required>
   	    			<input type="email" class="input-box" placeholder="Your Email" name="Vemail" required>
                  <input type="phone" class="input-box" placeholder="Your Phone Number" name="Vphone" required>
                  <input type="relation" class="input-box" placeholder="Relation with Student" name="Relation" required>
                  <input type="adhar" class="input-box" placeholder="Your Adhar Number" name="Gadhar" required>

   	    				
   	    	
   	    		<button type="button"class="btn"onclick="openStudentDetails()">NEXT</button>	
               <a href="otp9.php"><button type="button" class="btn">TRY WITH OTP</button></a><br>
               <a href="visitor1.php"><button type="button" class="btn">HOME</button></a><br>
               

     
               	
   	    		

   	    			</div>
   	    		<div class="card-back">
   	    			<h2>STUDENT DETAILS</h2>
   	    		
   	    			<input type="text" class="input-box" placeholder="Student ID" name="Sid" required>
   	    			<input type="text" class="input-box" placeholder="First Name" name="Fname" required>
                  <input type="text" class="input-box" placeholder="Last Name" name="Lname" required>
                  <input type="text" class="input-box" placeholder="Course" name="Course" required>
                  <input type="text" class="input-box" placeholder="Hostel Name" name="Hname" required>
                  
   	    			<input placeholder="Date of Visit"class="input-box"type="text"onfocus="(this.type='date')"id="date"name="Date">
                  <input placeholder="Time of Visit"class="input-box"type="text"onfocus="(this.type='time')"id="time" name="Time">
   	    			
   	    				<button type="submit"class="submit-btn" name="submit">Submit</button>
   	    		
   	    		<button type="button"class="btn"onclick="openYourDetails()">BACK</button>		
   	    		</form>
                
   	    		</div>
   	    	</div>
   	    </div>
   	</div>
   	<script>
   		var card=document.getElementById("card");
   		function openStudentDetails(){
   			card.style.transform="rotateY(-180deg)";
   		}
   		function openYourDetails(){
   			card.style.transform="rotateY(0deg)";
   		}
</script>

</body>
</html>   	
