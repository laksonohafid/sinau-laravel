@extends('master')
@section('content')

<style>
	.form-control{
		background: transparent;
	}
	.form-gruop{
		color: white;
	}
	.text-center{
		color: white;
	}
	.btn{
		
	}

</style>

<div class="bg-transparant">
	<div class="card-body">
		<h5 class="text-center">Daftar Member</h5>
		<hr>
		<form action="/member" method="post">
			@csrf
			<div class="form-gruop">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="nama">
			</div>

			<div class="form-gruop">
				<label for="">No.Handphone</label>
				<input type="text" class="form-control" name="no_handphone">
			</div>

			<div class="form-gruop">
				<label for="">Alamat</label>
				<textarea class="form-control" name="alamat" cols="30" rows="10"></textarea>
			</div>

			<button class="btn btn-primary mt-3" type="submit">simpan</button>
		</form>
	</div>
</div>


@endsection