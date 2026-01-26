@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="login-card">
    <h2>Login</h2>
    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert-error">{{ session('error') }}</div>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" class="form-control">
        <input type="password" name="password" placeholder="Password" class="form-control">
        <button type="submit" class="btn btn-info">Login</button>
    </form>
</div>
@endsection
