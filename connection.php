<?php
session_start();
$msg="";
header('location:index.php');


$server = "localhost";
$username = "root";
$password ="";
$dbname = "adminlogin";

//create a connection

	$conn = mysqli_connect($server , $username , $password , $dbname);


	if(isset($_POST['submit'])){
		//echo "connection sucessfully";
		if(!empty($_POST['Name']) && !empty($_POST['BanasthaliID']) && !empty($_POST['EmailID']) && !empty($_POST['Password'])){
	   $Name=$_POST['Name'];
	   $BanasthaliID=$_POST['BanasthaliID'];
	   $EmailID=$_POST['EmailID'];
	   //$Password=$_POST['Password'];
	   //if(isset($_POST['Password'])) {
        // $Password = $_POST['Password'];
         $number = preg_match('@[0-9]@', $Password);
         $uppercase = preg_match('@[A-Z]@', $Password);
         $lowercase = preg_match('@[a-z]@', $Password);
         $specialChars = preg_match('@[^\w]@', $Password);
 
        if(strlen($Password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
         $msg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
         } else {
            $msg = "Your password is strong.";
           }
        
	   $sql_u = "select * from registration where Name = '$Name' ";
	   $sql_e = "select * from registration where EmailID = '$EmailID' "; 
	   $res_u =  mysqli_query($conn,$sql_u) or die(mysqli_error($conn));
	   $res_e = mysqli_query($conn,$sql_e) or die(mysqli_error($conn));
	   $num_u = mysqli_num_rows($res_u);
	   $num_e = mysqli_num_rows($res_u);
	   if($num_u > 0)
	   {
	   	$name_error = "Sorry....Name existed";
	   	echo" Already existing data";
	   }
	   else if($num_e > 0)
	   {  
	   	$name_error = "Sorry....Email existed";
	   	echo" Already existing data";

	   }
	   else
	   {

	   $query = "insert into registration(Name,BanasthaliID,EmailID,Password) values('$Name','$BanasthaliID','$EmailID', '$Password')";
	   $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
	   
	   	echo"registration successfully";
	   

}
}
else
{
	echo"all fields required";
}
}

?>
	