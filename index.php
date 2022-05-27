<?php
session_start();
 include 'connect.php';


   if(isset($_POST['submit'])){
      $Name = mysqli_real_escape_string($conn,$_POST['Name']);
      $BanasthaliID= mysqli_real_escape_string($conn,$_POST['BanasthaliID']);
      $EmailID= mysqli_real_escape_string($conn,$_POST['EmailID']);
      $Password= mysqli_real_escape_string($conn,$_POST['Password']);
      $uppercase = preg_match('@[A-Z]@', $Password);
      $lowercase = preg_match('@[a-z]@', $Password);
      $number = preg_match('@[0-9]@', $Password);
      $specialChars = preg_match('@[^\w]@', $Password);
   
    //$pass = password_hash($Password, PASSWORD_BCRYPT);

      $emailquery= "select * from registration where EmailID = '$EmailID' ";
      $query=mysqli_query($conn,$emailquery);
      $emailcount = mysqli_num_rows($query);
      if($emailcount>0)
      {
            ?>
               <script>
                  alert("email already existed");
               </script>
               <?php
         
      }
      $bquery= "select * from registration where BanasthaliID = '$BanasthaliID' ";
      $squery=mysqli_query($conn,$bquery);
      $bcount = mysqli_num_rows($squery);
      if($bcount>0)
      {
            ?>
               <script>
                  alert("Banathali id already existed,try to forgot password");
               </script>
               <?php
         
      }

      else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) >= 8) {
         ?>
               <script>
                  alert("Password must be 8 characters in length with atleast one uppercase and lowercase letter, one numeric and special character");
               </script>
               <?php
            
      }
      else
      {
          
            $pass = password_hash($Password, PASSWORD_BCRYPT);
             $insertquery = "insert into registration(Name,BanasthaliID,EmailID,Password) values('$Name','$BanasthaliID','$EmailID', '$pass')";
             $run = mysqli_query($conn,$insertquery);
             if($run)
             {
               ?>
               <script>
                  alert("Registration successfull");
               </script>
               <?php
             }
             else
             {
                ?>
               <script>
                  alert("Registration not successfull");
               </script>
               <?php
             }
        
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
   <style>
      body{
         
         background-image:linear-gradient(rgba(217,217,217,.5),rgba(0,0,255,.5)),url(bg10.png);
      }
   </style>
         
     
    <title> login form </title>
    <link rel="stylesheet"href="style.css">
    

</head>
<body background="b10.jpeg">
   <div class="container">
      
   	    <div class="card">
   	    	<div class="inner-box" id="card">
               

   	    		<div class="card-front">
                  <?php
                  
                  if(isset($_SESSION['status'] ))
                  {
                     echo  $_SESSION['status'];
                     unset($_SESSION['status']); 
                  }
                  ?>
               
                  
               
                  

   	    		<h2>Hey! Admin</h2>

   	    		<form action="login.php" method="post" id="my_form">
                  
   	    			<input type="Email" class="input-box" placeholder="Your Email ID" id="EmailID" name="EmailID" required>
   	    			<input type="password" class="input-box" placeholder="Password" id="Password" name="Password" required>
   	    				<button type="submit"class="submit-btn" name="login" >Login</button>
   	    		</form>
               <script src="ind.js"></script>
   	    		<button type="button"class="btn"onclick="openRegister()">REGISTER HERE</button>		
   	    		<a href="recover_psw.php">Forgot Password?</a>
               <a href="website.php"><button type="but" class="btnn" width:"50px" >HOME</button></a><br>

               </div>
   	    		<div class="card-back">

                  

   	    			<h2>REGISTER</h2>
   	    		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
   	    			<input type="text" class="input-box" placeholder="Your Name" id="Name" name="Name" required>
                 
   	    			<input type="text" class="input-box" placeholder="Your Banasthali ID" id="BanasthaliID" name="BanasthaliID" required>
   	    			<input type="Email" class="input-box" placeholder="Your Email ID" id="EmailID" name="EmailID" required>
   	    			<input type="password" class="input-box" placeholder="Password" id="Password" name="Password" required>
   	    				<button type="submit"class="submit-btn" name="submit" >Submit</button>
   	    		</form>
   	    		<button type="button"class="btn"onclick="openHeyAdmin()">I have an account</button>

   	    		

   	    		</div>
   	    	</div>
   	    </div>
   	</div>
      
   	<script>
   		var card=document.getElementById("card");
   		function openRegister(){
   			card.style.transform="rotateY(-180deg)";
   		}
   		function openHeyAdmin(){
   			card.style.transform="rotateY(0deg)";
   		}
</script>

</body>
</html> 

 	
