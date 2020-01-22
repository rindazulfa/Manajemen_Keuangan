@extends('auth.main')

@section('content')
<div class="card ">
    <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            {{$errors->first()}}
        </div>
        @endif
        <form method="POST" action="{{Route('login')}}">
            @csrf
            <div class="form-group">
                <input class="form-control form-control-lg" id="email" type="text" name="email" placeholder="Email" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </form>
    </div>
    <div class="card-footer bg-white p-0  ">
        <div class="card-footer-item card-footer-item-bordered">
            <p>Doesn't have many account? <a href="{{Route('register.index')}}" class="footer-link">Create An Account</a></p>
        </div>
        


    </div>
</div>
@endsection