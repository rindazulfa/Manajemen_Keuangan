@extends('auth.main')

@section('content')


        <div class="card bg-dark">
            <div class="card-header text-center p-3 mb-2 bg-dark text-white ">
                <a href="../index.html"><img  class="mb-2" src="../assets/images/logo.png" alt="logo"></a>
                <span class="splash-description">Silakan login terlebih dahulu ;))</span></div>
            <div class="card-body bg-dark">
                @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{$errors->first()}}
                </div>
                @endif
                <form method="POST" action="{{Route('login')}}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" 
                        type="text" name="email" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" 
                        name="password" placeholder="Kata Sandi">
                    </div>

                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Login</button>
                </form>
            </div>
            <div class="card-footer bg-dark  text-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <p>Belum punya akun?<a href="{{Route('register.index')}}" class="footer-link"> Buat akun</a></p>
                </div>


            </div>
        </div>

@endsection