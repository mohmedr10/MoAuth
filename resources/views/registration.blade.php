@extends('layout')
@section('title','Registration')
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

        <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px;">
            @csrf

            <p class="fs-1">Registration</p>
            <p class="fs-5">Enter your information please to sign up.</p>

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-success ">Sign Up</button>
            <a class="link-underline link-underline-opacity-0 float-end" aria-current="page" href="/login"><button type="button" class="btn btn-primary ">Sign in</button></a>
          </form>
    </div>
@endsection