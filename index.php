<!DOCTYPE html>
<html>
<head>
	<title>Daftar Kontak</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Daftar Kontak</h1>
	<ul>
	<?php
		// Mendapatkan data dari backend
		$url = getenv('BACKEND_URL') . '/kontak';
		$data = file_get_contents($url);
		$kontak = json_decode($data);
		
		// Menampilkan data ke halaman
		foreach ($kontak as $k) {
			echo '<li>' . $k->nama . ' (' . $k->telepon . ')</li>';
		}
	?>
	</ul>
</body>
</html>