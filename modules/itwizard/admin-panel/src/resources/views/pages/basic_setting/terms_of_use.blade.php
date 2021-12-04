@extends('Admin::layouts.blank')
@section('content')
    <style>
        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

    </style>
    
    <div class="card-body">
        <h1 class="display-2 mb-5" style="text-align: center;">이용약관</h1>
        <div class="page">
            {!! $site_info->terms_of_condition !!}
        </div>
    </div>

    <script>
        window.print();
    </script>
@endsection
