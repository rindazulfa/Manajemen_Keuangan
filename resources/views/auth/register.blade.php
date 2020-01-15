@extends('auth.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="mb-1">Registrations Form</h3>
        <p>Please enter your user information.</p>
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
            <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Username" autocomplete="off">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" id="pass1" name="password" type="password" required="" placeholder="Password">
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" required="" name="c_password"  type="password"  placeholder="Confirm">
        </div>
        <div class="form-group pt-2">
            <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
        </div>
    </div>
</form>
    <div class="card-footer bg-white">
    <p>Already member? <a href="{{Route('login.index')}}" class="text-secondary">Login Here.</a></p>
    </div>
</div>
@endsection
