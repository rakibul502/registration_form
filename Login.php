<?php 
session_start();
require_once("dtcn.php");
$mess="";
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['passw'];
   

    $select="SELECT * FROM registration WHERE email='$email' AND password='$pass'";
    $ex=mysqli_query($connect,$select);
    $row=mysqli_fetch_array($ex);
    if($row){
        $mess="login ok";
        header("location:wlc.php");
        $_SESSION['email']=$row['email'];
    }else{
        $mess="login not ok";
    }
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="sty.css">
    <title>LOGIN</title>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>
                            <h1"><?php echo $mess ?></h1>
                                <form action="" method="post">
                                    <div class="form-outline mb-4">
                                        <input type="email" id="" name="email" class="form-control form-control-lg" />
                                        <label class="form-label">Email</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" name="passw" id=""
                                            class="form-control form-control-lg" />
                                        <label class="form-label">Password</label>
                                    </div>

                                    <!-- Checkbox -->
                                    <button class="btn btn-primary btn-lg btn-block" type="" name="login">Login</button>

                                    <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a
                                            href="registr.php" class="fw-bold text-body"><u>Register here</u></a></p>
                                    </from>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>