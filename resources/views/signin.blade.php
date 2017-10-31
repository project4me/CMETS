@extends('layouts.app')

@section('title', 'Sign in')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sign in</li>
    </ol>
</nav>
<div class="card border-success">
    <div class="card-header">Please sign in</div>
    <div class="card-body">
        @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {!! Session::get('error') !!}
        </div>
        @endif
        <form class="form form-signin" action="/signin" method="post">
            {{ csrf_field() }}
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-outline-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection
