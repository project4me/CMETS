@extends('admin.layouts.app')

@section('title', 'Admin | Tours')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">About us</li>
    </ol>
</nav>
Tours

<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="filepath">
 </div>
 <img id="holder" style="margin-top:15px;max-height:100px;">
@endsection

@section('scripts')

@endsection