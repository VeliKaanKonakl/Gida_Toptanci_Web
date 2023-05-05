<?php 

$servername = "localhost";
$usernameserver = "root";
$passwordserver = "";
$dbname = "gida_toptanci";

$conn = mysqli_connect($servername,$usernameserver,$passwordserver,$dbname);

$username = $_POST["username"];
$password = $_POST["password"];

$loginsqlsorgu = "SELECT * FROM kullanicilar WHERE user_name = '$username' AND password = '$password'";
$result = mysqli_query($conn,$loginsqlsorgu);

if(mysqli_num_rows($result) == 1){
    header("Location: http://localhost/Gida-Toptanci-Uygulama/dashboard.php");
}else{
    echo "kullanici adi veya sifre yanlis";
}
?>