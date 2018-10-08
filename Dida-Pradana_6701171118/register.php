<?php 

include ('db.php');


 ?>
 <form method="post">
 	<input type="text" name="username"> Username <br><br>
 	<input type="password" name="password"> Password <br><br>
 	<input type="submit" name="kirim">
 </form>
 <?php
 if (isset($_POST['kirim'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	$sql = "INSERT INTO akun (username, password) 
	            VALUES ('$username', '$password')";

	    if (mysqli_query($conn, $sql)) {
	        echo "	<script>
         				alert('Data berhasil di tambah');
         				location='login.php';
         			</script>";
	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
	    }

	    mysqli_close($conn);
 }

 ?>