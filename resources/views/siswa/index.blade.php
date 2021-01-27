@extends('master.master')
@section('title', 'Data Siswa')
<link rel="icon" type="image/png" href="/bg/smk1.png">
@section('content')
<div class="container" style="margin-top: 20px;">
	<div class="col-md-12 mb-3">
		<h1 class="text-center">Data Siswa</h1>
	</div>
	<table class="table table-striped table-hover">
		<thead class="" style="font-size: 20px; background-color: white;">
			<th class="text-center">No.</th>
			<th class="text-center">NISN</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Alamat</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($siswa as $s)
			<tr style="font-size: 20px; ">
				<th scope="row">{{$loop->iteration}}</th>
				<td style="width: 1%; white-space: nowrap;">{{ $s->nisn }}</td>
				<td class="text-center">{{ $s->nama }}</td>
				<td class="text-center">{{ $s->alamat }}</td>
				<td style="width: 1%; white-space: nowrap;">
					<a class="btn btn-sm btn-warning" href="{{ route('editData', $s->id) }}">Edit</a>
					<a class="btn btn-sm btn-danger" href="{{ route('deleteData', $s->id) }}">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection