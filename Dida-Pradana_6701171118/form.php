<?php 
session_start();
include ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="proses.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio" name="kelas"> D3MI-41-01<br>
					<input type="radio" name="kelas"> D3MI-41-02<br>
					<input type="radio" name="kelas"> D3MI-41-03
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="jenkel">Laki-laki <input type="radio" value="Perempuan" name="jenkel">Perempuan</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td> <input type="checkbox" name="hobi"> Makan<br>
 					 <input type="checkbox" name="hobi"> Minum<br>
 					 <input type="checkbox" name="hobi"> Tidur<br> 
 				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td> <select name="fakultas">
						  <option value="FIT">FIT</option>
						  <option value="FTE">FTE</option>
						  <option value="FIK">FIK</option>
						  <option value="FKB">FKB</option>
					</select> 
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea rows="10" cols="30" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Kirim"></td>
				<td><a href="edit.php">Edit</a></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 

?>
