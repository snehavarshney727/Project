
 <?php
session_start();
  $msg="";

//create a connection

	$conn = mysqli_connect('localhost','root');
	if($conn)
	{
		echo"Connection successfully";

	}
	else
	{
		echo"no successfull";
	}
     mysqli_select_db($conn,'adminlogin');

	    if(isset($_POST['login'])){
	    	 
	   $EmailID=trim($_POST['EmailID']);
	   $Password=trim($_POST['Password']);
	   
	   //$q="select * from registration where  EmailID = '''$EmailID""
	   //$sql = "select * from users where EmailID ='$EmailID';
	   $result= mysqli_query($conn,"select * from registration where EmailID ='$EmailID'");
	   
	   if(mysqli_num_rows($result)>0)
	   {
	   	$row=mysqli_fetch_assoc($result);
	   	$verify=password_verify($Password,$row['Password']);
	   	if($verify==1){

	   	header('location:http://localhost/adm/admin.php');
	   }
	   else
	   {    $_SESSION['status'] ="WRONG Password";
	
           header('location:http://localhost/adm/index.php');
           //echo"wrong info";
	   

         }
     }
     else
     {
     	$_SESSION['status'] ="WRONG details";
	
           header('location:http://localhost/adm/index.php');
           //echo"wrong info";
	   
     }
   
}



?>