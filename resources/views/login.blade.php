@extends('layout')
@section('title','login')
@section('content')
    <div class="container bg-secondary rounded mt-5 p-5">

        <div>
            @if($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>

        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px;">
            @csrf

            <p class="fs-1">Sign In</p>
            <p class="fs-5">Enter your information please to sign in.</p>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
            <a class="link-underline link-underline-opacity-0 float-end" aria-current="page" href="/registration"><button type="button" class="  btn btn-success">Register a new account</button></a>

          </form>
    </div>
@endsection