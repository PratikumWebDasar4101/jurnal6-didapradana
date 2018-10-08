<?php 

include ("db.php");
	if (isset($_POST['nim'])) {
		# code...

	    $nama       = $_POST['nama'];
	    $nim        = $_POST['nim'];
	    $kelas  	= $_POST['kelas'];
	    $jenkel		= $_POST['jenkel'];
	    $hobi		= $_POST['hobi'];
	    $fakultas	= $_POST['fakultas'];
	    $alamat		= $_POST['alamat'];
	    $sql = "INSERT INTO data (nama, nim, kelas, jenkel, hobi, fakultas, alamat) 
	            VALUES ('$nama', '$nim', '$kelas', '$jenkel', '$hobi', '$fakultas', '$alamat')";

	    if (mysqli_query($conn, $sql)) {
	        echo "	<script>
         				alert('Data berhasil di tambah');
         				location='form.php';
         			</script>";
	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
	    }


	    mysqli_close($conn);
	}
 ?>