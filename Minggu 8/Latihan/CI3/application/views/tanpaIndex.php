 <!DOCTYPE html>
<html>
<head>
	<title>Latihan 1 Hapus url index.php</title>
</head>
<body>
	<!-- Jawaban dari soal nomor 1 :
		 Untuk menghilangkan url index.php saat mengakses sebuah controller untuk di load di dalam web browser adalah sebagai berikut :
		 1. Membuat file .htaccess pada folder dari CI 3 nya dan isikan pada file .htaccess dengan property ini :
		 RewriteEngine On
		 RewriteCond %{REQUEST_FILENAME} !-f
		 RewriteCond %{REQUEST_FILENAME} !-d
		 RewriteRule ^(.*)$ index.php/$1 [L] 
		 lalu save file .htaccess tersebut
		 2. Langkah ke dua adalah mencari file config pada folder config lalu cari pada file config tersebut yaitu 
		 $config['index_page'] = 'index.php'; lalu hapuslah nilai index.php pada config tersebut sehingga menjadi $config['index_page'] = '';	lalu save file config.
		 3. Langkah ke 3 untuk menguji apakah bisa berjalan atau tidak coba jalankan controller welcome yang memiliki fungsi profil maka nanti url yang di tuliskan pada web browser adalah sebagai berikut : " http://localhost/smt4/Minggu7/Latihan/CI3/profil " tanpa mencantumkan index.php. akan tetapi sebelumnya untuk route nya sudah di masukkan ke dalam file route url dari function profil sehingga tidak perlu memanggil nama controller. hanya memanggil nama function saja maka pada layar web browser akan menampilkan file view yang di load di dalam controller. 
	-->
	<h2>Ini adalah halaman menghilangkan url index.php</h2>
</body>
</html>