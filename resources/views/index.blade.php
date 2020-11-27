<!DOCTYPE html>
<html>
<head>
	
	<title>Daftar Member Kerabat Kopi</title>
</head>
<body>
 
	<a href="/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>No.Handphone</th>
			<th>Alamat</th>
		</tr>
		@foreach($members as $m)
		<tr>
			<td>{{ $m->nama }}</td>
			<td>{{ $m->no_handphone}}</td>
			<td>{{ $m->alamat }}</td>
			<td>
				<a href="/member/edit/{{ $m->id }}">Edit</a>
				|
				<a href="/member/hapus/{{ $m->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>