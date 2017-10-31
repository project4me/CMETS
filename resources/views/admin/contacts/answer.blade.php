@extends('admin.layouts.app')

@section('title', 'Admin | Contacts')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact list</li>
        <li class="breadcrumb-item active" aria-current="page">Answer</li>
    </ol>
</nav>
<p>{{ $contact->subject }}</p>
<p>{{ $contact->message }}</p>
<form action="/admin/contacts/{{ $contact->id }}" method="post">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="answer" class="sr-only">Answer</label>
        <textarea class="form-control" id="answer" name="answer" placeholder="Answer"></textarea>
    </div>
    <button class="btn btn-outline-primary btn-block" type="submit">Update</button>
</form>
@endsection

@section('scripts')

@endsection