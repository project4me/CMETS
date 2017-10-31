@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>
<div class="card border-success">
    <div class="card-header">Profile</div>
    <div class="card-body">
        @if (Session::has('alert'))
        <div class="alert alert-success" role="alert">
            {!! Session::get('alert') !!}
        </div>
        @endif
        <form action="/profile/edit" method="post">
            <input name="_method" type="hidden" value="PUT">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="email" class="sr-only">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="form-group col-md-6">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ Auth::user()->name }}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="sr-only">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ Auth::user()->address }}" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                <label for="city" class="sr-only">District</label>
                <input type="text" class="form-control" id="city" name="district" placeholder="District" value="{{ Auth::user()->city }}" required>
                </div>
                <div class="form-group col-md-5">
                <label for="province" class="sr-only">Province</label>
                <input type="text" class="form-control" id="province" name="province" placeholder="Province" value="{{ Auth::user()->province }}" required>
                </div>
                <div class="form-group col-md-2">
                <label for="zip" class="sr-only">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" value="{{ Auth::user()->zip }}" required>
                </div>
            </div>
            <button class="btn btn-outline-primary btn-block" type="submit">Update</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection
