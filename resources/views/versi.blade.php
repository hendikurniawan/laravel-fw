<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Versi')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Versi</p>
	<p>
		<h2>V 1.0</h2>
	</p>

@endsection

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

				<h3>Data Pegawai</h3>
				<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-2" type="submit" value="CARI">
				</form>

				<br/>

				<p>Cari Data Umur :</p>

				<div class="form-group">
					
				</div>
				<form action="/pegawai/cariumur" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cariumur" placeholder="Cari Umur Pegawai .." value="{{ old('cariumur') }}">
					<input class="btn btn-primary ml-2" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				<br/>

				{{ $pegawai->links() }}
			</div>
		</div>
	</div>


</body>
</html>