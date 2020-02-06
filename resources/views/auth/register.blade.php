@extends('auth.main')

@section('content')
<div class="card bg-dark text-white">
    <div class="card-header bg-dark text-white">
        <h3 class="mb-1 text-white">Daftar Akun</h3>
        <p>Silakan, Daftarkan data diri kalian!</p>
    </div>
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        {{$errors->first()}}
    </div>
    @endif
<form action="{{Route('register')}}" method="POST" >
        @csrf
    <div class="card-body">
        <div class="form-group">
            <input class="form-control form-control-lg" 
            type="text" name="name" required="" placeholder="Username" autocomplete="off">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" 
            type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" id="pass1" name="password" 
            type="password" required="" placeholder="Kata Sandi">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" required="" name="c_password"  
            type="password"  placeholder="Konfirmasi Kata Sandi">
        </div>
        <div class="form-group pt-2">
            <button class="btn btn-block btn-secondary text-center" type="submit">DAFTAR</button>
        </div>
    </div>
</form>
    <div class="card-footer bg-dark">
    <p>Sudah punya akun? <a href="{{Route('login.index')}}" class="text-secondary">Login Disini</a></p>
    </div>
</div>
@endsection
