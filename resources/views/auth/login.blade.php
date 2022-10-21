@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center custom-login">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                </div>
                <form>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control"
                            id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="Enter Email Address">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control"
                            id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <br>
                <div class="text-center">
                    <a class="small text-decoration-none" href="">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <a class="small text-decoration-none" href="">Create an Account!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection