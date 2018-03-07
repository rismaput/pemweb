<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Rumus Balok</title>
	  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<div class="border">
<!--judul pada bagian-->
<h1 align="center">Menghitung Rumus Balok</h1>

<div class="subborder">

<!--menampilkan kolom inputan-->
<form action="index.php" method="get">
	Panjang : <br>
	<input type="text" name="long"><br><br>
	Lebar : <br>
	<input type="text" name="width"><br><br>
	Tinggi : <br>
	<input type="text" name="height"><br><br>
	<input type="submit"> <br> <br>

<!--rumus volume balok-->
	Volume Balok : <br>
	<?php echo $_GET["long"] * $_GET["width"] * $_GET["height"]; ?><br><br>
<!--rumus luas balok-->
	Luas Balok   : <br>
	<?php echo (2 * $_GET["long"] * $_GET["width"]) + (2 * $_GET["long"] * $_GET["height"]) + (2 * $_GET["width"] * $_GET["height"]); ?><br><br>
<!--rumus keliling balok-->
	Keliling Balok : <br>
	<?php echo (4 * ($_GET["long"] + $_GET["width"] + $_GET["height"]) ); ?>

</form>
</div>
</div>
</body>
</html>