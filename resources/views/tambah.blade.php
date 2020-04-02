<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				

				<h2 class="text-center"><a>Laravel</a></h2>
				<!-- <h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> -->

				<h3>Tambah Data Pegawai</h3>

	<h3><a class="btn btn-primary" href="/pegawai">Kembali</a></h3>
	
	<!-- <br/> -->
	<br/>

	<form action="/pegawai/store" method="post">
	{{ csrf_field() }}

		Nama <input class="form-control" type="text" name="nama" required="required">
		
		Jabatan <input class="form-control" type="text" name="jabatan" required="required">
		
		Umur <input class="form-control" type="number" name="umur" required="required">
		
		Alamat <textarea class="form-control" name="alamat" required="required"></textarea>
		<br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

	<!-- <form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> -->

</body>
</html>