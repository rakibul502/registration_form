<?php 
require_once("dtcn.php");

$message=$name=$email=$password=$c_pass="";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $c_pass = $_POST["c_pass"];

    //duplicate email
   
    $email_chak = "SELECT * FROM registration WHERE email='$email'";
    $email_query = mysqli_query($connect, $email_chak);
    $num_row = mysqli_num_rows($email_query);
    if ($num_row > 0) {
        $message = "email already exist";
    }
    else {
        if ($password == $c_pass) {
            $special_character = preg_match('@£$%@', $password);
            if (!$special_character || strlen($password == 8) || strlen($password)< 8) {
                $message ="special_character din";
            }
            else {
                $insert = "INSERT INTO registration(name, email,password,c_pass) VALUES('$name','$email','$password','$c_pass')";
                $query=mysqli_query($connect, $insert);
                if($query){
                    $message="rejester success";
                }else{
                    $message="rejester not success";
                }
            }
        }
        else {
            $message= "con pass no match";
        }
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
    <title>Document</title>
</head>

<body>
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <h1 style="color:red"> <?php echo $message ?></h1>
                                <br />
                                <form action="" method="post">

                                    <div class="form-outline mb-4">
                                        <input placeholder="Your fast Name" type="text" id="" value="<?php echo$name?>"
                                            class="form-control form-control-lg" name="name" />
                                        <label class="form-label" for="form3Example1cg">Your Fat Name</label>
                                    </div>
                                    <!-- <div class="form-outline mb-4">
                                        <input placeholder="Your last Name" type="text" id=""
                                            class="form-control form-control-lg" name="lname" />
                                        <label class="form-label" for="form3Example1cg">Your last Name</label>
                                    </div> -->

                                    <div class="form-outline mb-4">
                                        <input placeholder="Your Email" type="email" id="" value="<?php echo$email?>"
                                            class="form-control form-control-lg" name="email" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input placeholder="Password" type="password" id="" name="password"
                                            value="<?php echo$password?>" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input placeholder="confirm password" type="password" id=""
                                            value="<?php echo$c_pass?>" name="c_pass"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">confirm password</label>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already ccount? <a href="login.php"
                                            class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>