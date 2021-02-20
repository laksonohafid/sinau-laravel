@extends('master.master')
@section('title', 'Data Siswa')
<link rel="icon" type="image/png" href="/bg/smk1.png">
@section('content')
<div class="container" style="margin-top: 20px;">
	<div class="col-md-12 mb-3">
		 
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-family: serif;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Data Siswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-link active" aria-current="page" href="datasiswa/create">+ Tambah Siswa</a>
      </div>
    </div>
  </div>
</nav>

	</div>
	<table class="table table-striped">
		<thead class="" style="font-size: 15px; background-color: white;">
			<th class="text-center">No.</th>
			<th class="text-center">NISN</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Alamat</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($siswa as $s)
			<tr style="font-size: 15px; ">
				<th scope="row">{{$loop->iteration}}</th>
				<td style="width: 1%; white-space: nowrap;">{{ $s->nisn }}</td>
				<td class="text-center">{{ $s->nama }}</td>
				<td class="text-center">{{ $s->alamat }}</td>
				<td style="width: 1%; white-space: nowrap;">
					<a class="btn btn-sm btn-primary" href="{{ route('editData', $s->id) }}">Edit</a>
					<a class="btn btn-sm btn-danger" href="{{ route('deleteData', $s->id) }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection