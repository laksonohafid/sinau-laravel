@extends('master.master')
@section('title', 'Tambah Data')
<link rel="icon" type="image/png" href="/bg/smk1.png">
@section('content')
<div class="container" style="margin-top: 20px;">
<div class="col-md-12 mb-3">
	<h1 class="text-center">Tambah Data Siswa</h1>
</div>
				<form method="post" action="/datasiswa">
			@csrf
			  	<div class="form-group">
			    	<label for="inputEmail4">NISN</label>
			    	<input type="number" class="form-control" name="nisn">
			    	@error('nisn')
			    	<div class="small text-danger">{{ $message }}</div>
			    	@enderror
			  	</div>
			  	<div class="form-group">
			    	<label for="inputAddress">Nama</label>
			    	<input type="text" class="form-control" name="nama">
			    	@error('nama')
			    	<div class="small text-danger">{{ $message }}</div>
			    	@enderror
			  	</div>
			  	<div class="form-group">
			    	<label for="inputAddress2">Alamat</label>
			    	<input name="alamat" type="text" class="form-control">
			    	@error('alamat')
			    	<div class="small text-danger">{{ $message }}</div>
			    	@enderror
			  	</div>

		<button type="submit" class="btn btn-primary">Tambah</button>
	</form>
</div>
@endsection