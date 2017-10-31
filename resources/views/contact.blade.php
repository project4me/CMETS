@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
  </ol>
</nav>
{!! Thoeng::setting('site.contact') !!}
@auth
<table class="table table-sm table-striped table-responsive">
    <thead>
        <tr>
            <th scope="col" class="text-center">#</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col" class="text-center">Status</th>
        </tr>
    </thead>
    <tbody>
        @if ($contacts->count() > 0)
        @foreach ($contacts as $contact)
        <tr>
            <th scope="row" class="text-center"></th>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
            <td class="text-center"></td>
        </tr>
        @endforeach
        @else
        <tr>
            <td scope="row" class="text-center" colspan="4">ไม่มีข้อมูลการติดต่อ</td>
        </tr>
        @endif
    </tbody>
</table>
{{ $contacts->links('vendor.pagination.bootstrap-4') }}
<div class="card border-success">
    <div class="card-header">Contact us</div>
    <div class="card-body">
        @if (Session::has('alert'))
        <div class="alert alert-success" role="alert">
            {!! Session::get('alert') !!}
        </div>
        @endif
        <form class="form form-contact" action="/admin/contacts" method="post">
            {{ csrf_field() }}
            <label for="subject" class="sr-only">Subject</label>
            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
            <label for="message" class="sr-only">Message</label>
            <textarea id="message" name="message" class="form-control" placeholder="Message" required></textarea>
            <button class="btn btn-outline-primary btn-block" type="submit">Send message</button>
        </form>
    </div>
</div>
@endauth
@endsection

@section('scripts')

@endsection
