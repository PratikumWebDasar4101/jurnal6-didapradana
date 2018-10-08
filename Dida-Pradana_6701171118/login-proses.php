<?php 
session_start();
include("db.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * from akun where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
	$_SESSION["username"] = $username;
	header("Location: form.php");
}else {
	echo "Gagal Login";
}
?>