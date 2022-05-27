<?php session_start(); ?>
<?php
    include('connect.php');

    if(isset($_POST["click"])){
        $Sid = $_POST["Sid"];
        $name = $_POST["name"];
        $Date =$_POST["Date"];
        $email = $_POST["email"];

        $check_query = mysqli_query($conn, "SELECT * FROM studentrecord where Sid='$Sid' && email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($Sid) && !empty($email)){
            if($rowCount==1){
                $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='shubhi1913623@gmail.com';
                    $mail->Password='shubhI@123';
    
                    $mail->setFrom('shubhi1913623@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code for meeting with $Sid Student in campus at $Date is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>
                    <b>Banasthali Vidyapith</b>
                    Thanks";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Sending Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                 mysqli_query($conn,"insert into otp(Sid,name,Date,email) values('$Sid','$name','$Date', '$email')");
                                ?>
                                <script>
                                    alert("<?php echo "Sending Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }

            }else{
                 ?>
                <script>
                    alert("Please enter valid Student Id or Registered EmailID!");
                </script>
                <?php
                
                    
                
            }
        }
    }

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
     <script type="text/javascript">
      function preback() {window.history.forward();}
      setTimeout("preback()",0);
      window.onunload=function() {null};
   </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="styleforget.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Register Form</title>
</head>
<body style="background-color:lightblue">

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">OTP Form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" >Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="website.php" style="font-weight:bold; color:black; text-decoration:underline">HOME</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verification</div>
                    <div class="card-body">
                        <form action="#" method="POST" name="register">
                            <div class="form-group row">
                                <label for="Sid" class="col-md-4 col-form-label text-md-right">Enter Student id</label>
                                <div class="col-md-6">
                                    <input type="text" id="Sid" class="form-control" name="Sid" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Enter your name</label>
                                <div class="col-md-6">
                                    <input type="name" id="name" class="form-control" name="name" required>
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>
                               <div class="form-group row">
                                <label for="Date" class="col-md-4 col-form-label text-md-right">Date for meeting</label>
                                <div class="col-md-6">
                                    <input placeholder="Date of Visit"class="input-box"type="text"onfocus="(this.type='date')"id="date"name="Date" required>

                                    
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>
                          


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Enter Guardian registered gmail</label>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" name="email" required>
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="click" name="click">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>
<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    toggle.addEventListener('click', function(){
        if(password.type === "password"){
            password.type = 'text';
        }else{
            password.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });
</script>