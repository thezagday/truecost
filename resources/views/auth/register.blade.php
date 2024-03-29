@extends('layouts.app')

@section('content')
<div class="peers ai-s fxw-nw h-100vh">
    <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("assets/static/images/bg.jpg")'>
        <div class="pos-a centerXY">
            <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
                <img class="pos-a centerXY" src="assets/static/images/logo.png" alt="">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
        <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="text-normal text-dark">Username</label>
                <input type="text" name="name" class="form-control" Placeholder='John Doe'>
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Email Address</label>
                <input type="email" name="email" class="form-control" Placeholder='name@email.com'>
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
