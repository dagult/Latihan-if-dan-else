<html>
<head>
	<title>.:: Contoh Seleksi Kondisi ::.</title>
</head>
<body>
<font face=verdana size=2>
<?php
	if(!empty($_POST['proses'])) { 
		$nilai = $_POST['nilai'];
	


			//$nilai =70;

			if ($nilai>70){
				echo "Nilai Ujian anda : $nilai<br>";
				echo "Anda Kompeten<br>";
			} else	{
				echo "Nilai Ujian anda : $nilai<br>";			
				echo "Anda Tidak Kompeten<br>";
			}

	} else {

		echo "tidak diizin kan";
	}
?>
</body>
</html>
