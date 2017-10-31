@extends('layouts.app')

@section('title', 'About us')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About us</li>
  </ol>
</nav>
{!! Thoeng::setting('site.about') !!}
@endsection

@section('scripts')

@endsection
