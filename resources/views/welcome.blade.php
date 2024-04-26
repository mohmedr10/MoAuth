@extends('layout')
@section('title','Hello')
@section('content')
    <div class="container bg-secondary rounded mt-5 p-5">
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

        <h1 class="display-1"><span><h1 class="display-6">Welcome to</h1></span>MoAuth</h1>
    </div>


@endsection