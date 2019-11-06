<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
</head>
<body>
<Center><a href="upload.php">Upload File</a></center>
<Center><a href="download.php">Download</a></center>
<Center><a href="hasil_upload.php">Hasil Upload</a></center>

<Center><h3>PENCARIAN KATA DASAR</h3></center>
<center><form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?>
<Center><h5>Nama Kelompok</h5></center>
<Center><h5>Andiyono 15.01.63.0022</h5></center
<Center><h5>Piskila Yusuf Hanif Burhanuddin 15.01.53.0120 </h5></center>
<Center><h5>Sidiq Eko B 18.01.53.5002</h5></center>


</Center>
</body>
</html>
