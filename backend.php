<?php
	// Konfigurasi database
	$db_url = getenv('DATABASE_URL');
	$db_host = parse_url($db_url, PHP_URL_HOST);
	$db_user = parse_url($db_url, PHP_URL_USER);
	$db_pass = parse_url($db_url, PHP_URL_PASS);
	$db_name = trim(parse_url($db_url, PHP_URL_PATH), '/');
	
	// Koneksi ke database
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
		die('Koneksi ke database gagal: ' . mysqli_connect_error());
	}
	
	// Mendapatkan data dari database
	$result = mysqli_query($conn, 'SELECT * FROM kontak');
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$data[] = array(
			'nama' => $row['nama'],
			'telepon' => $row['telepon']
		);
	}
	
	// Mengirim data ke frontend
	header('Content-Type: application/json');
	echo json_encode($data);
?>