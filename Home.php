<html>
<body>
<?php
	$nama = $NIM ="";
	if($_SERVER["REQUEST_METHOD"]== "POST"&& isset($_POST["nama"])&& isset($_POST["NIM"])){
		$nama =$_POST["nama"];
		$NIM = $_POST["NIM"];
	}
?>

<form method="POST"action="
<?php
	echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>">

	<p>Aldi Rizki</p>
	Nama 	:<input type="text" name="nama" min="1"><br>
	Nim 	:<input type="number" name="NIM"><br>
	<input type="submit">

</form>

<?php
	if(empty($nama) && empty($NIM) ){
	echo "Nama dan Nim Tidak Boleh Kosong!!";
	}

	elseif (!empty($nama)&& (($NIM)>9999999999)){
	echo "Maaf... NIM anda lebih dari 10 angka";
	}

	elseif (!empty($nama)&& !empty($NIM)){
	echo "<h2> Selamat Datang</h2>";
	echo $nama ."<br>".$NIM;
	}

?>
</body>
</html>