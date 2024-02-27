<?PHP
//Database Connection start
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "registrationfrom";
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$connect) {
    die("Data batch connection");
}
?>
