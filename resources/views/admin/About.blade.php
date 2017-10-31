@extends('admin.layouts.app')

@section('title', 'Admin | About')

@section('content')
<nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">About details</li>
    </ol>
</nav>
@if (Session::has('alert'))
<div class="alert alert-success" role="alert">
    {!! Session::get('alert') !!}
</div>
@endif
<form action="/admin/about" method="post">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}
    <input type="hidden" name="key" value="site.about">
    <div class="form-group">
        <label class="sr-only" for="display_name">Display name</label>
        <input type="text" class="form-control my-editor" id="display_name" name="display_name" placeholder="Display name" value="{{ $about->display_name }}">
    </div>
    <div class="form-group">
        <label class="sr-only" for="value">Value</label>
        <textarea class="form-control my-editor" id="value" name="value">{{ $about->value }}</textarea>
    </div>
    <button class="btn btn-outline-primary btn-block" type="submit">Update</button>
</form>
@endsection

@section('scripts')
<script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>
@endsection