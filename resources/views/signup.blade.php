@extends('layouts.app')

@section('title', 'Sign up')

@section('content')
<div class="card border-success">
  <div class="card-header">Please sign up</div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul style="margin-bottom: 0;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form class="form-signup" action="/signup" method="post">
      {{ csrf_field() }}
      <label for="name" class="sr-only">Name</label>
      <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required autofocus>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      <button class="btn btn-outline-primary btn-block" type="submit">Sign up</button>
    </form>
  </div>
</div>
@endsection
