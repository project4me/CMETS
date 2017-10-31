@extends('admin.layouts.app')

@section('title', 'Admin | Contacts')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact list</li>
    </ol>
</nav>
<table class="table table-sm table-striped table-responsive">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Subject</th>
            <th>Message</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($contacts->count() > 0)
        @foreach ($contacts as $key => $contact)
        <tr>
            <th class="text-center">{{ $key + $contacts->firstItem() }}</th>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
            <td class="text-center">{{ $contact->status }}</td>
            <td class="text-center"><a href="/admin/contacts/{{ $contact->id }}">Answer</a></td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">Contact(s) not available.</td>
        </tr>
        @endif
    </tbody>
    <tfoot></tfoot>
</table>
{{ $contacts->links('vendor.pagination.bootstrap-4') }}
@endsection

@section('scripts')

@endsection