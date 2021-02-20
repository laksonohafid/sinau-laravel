@extends('master.master')

@section('title', 'Login')
@section('login-nav', 'active')
<link rel="icon" type="image/png" href="/bg/smk1.png">

@section('content')
<div class="card mt-5 w-100">
  <div class="card-body">
    <h5 class="card-title text-center">Login</h5>
    <h6 class="card-subtitle mb-3 text-muted text-center">Login untuk melanjutkan</h6>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form method="post" action="{{ route('postlogin') }}">
            @csrf

            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <a class="btn btn-danger" href="/" type="button" style="font-size: 12px">Kembali</a>
                <button type="submit" class="btn btn-success" style="font-size: 12px">login</button>

            </form>
        </div>
        <div class="col-2"></div>
    </div>
  </div>
</div>
@endsection