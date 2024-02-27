<?php
session_start();
if($_SESSION['email']==true){
    echo"<h1>wlc new page $_SESSION[email]</h1>";
}else{
    echo"<h1>wlc rong page";
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <title></title>
</head>
<body>

<a class="dropdown-item" href="login.php">logout</a>
<script src="php.js"></script>
</body>
</html>