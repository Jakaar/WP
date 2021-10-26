@extends('Admin::layouts.master')
@section('content')
    <textarea name="ckeditor" id="ckeditor" rows="10" cols="80">
    </textarea>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>

        window.onload = function () {
            CKEDITOR.replace('ckeditor', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                language: 'ko'
            });
        }
    </script>
@endsection
