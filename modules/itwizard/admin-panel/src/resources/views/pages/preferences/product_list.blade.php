@extends('Admin::layouts.master')
@section('content')
<div class="app-main__inner p-0">
    <div class="app-inner-layout">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-drawer"></i>
                    </div>
                    <div>
                        {{ __('Product List Creation Code') }}
                        <div class="page-title-subheading"></div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom" class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                        <i class="pe-7s-refresh-2"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="card mb-3 card-btm-border border-primary card">

            <div class="card-body">
                <div class="float-start">
                    <div class="card-title"> {{__('Product List Creation Code')}} </div>
                </div>
                <div class="float-end">
                    <button class="btn btn-outline-secondary" id="generatorClick"> {{__('Copy generation code')}} </button>
                </div>
                <div class="clearfix"></div>
                <div class="bg-light p-3">
                    <code id="code"> </code>
                </div>
            </div>
        </div>

        <div class="card card-btm-border border-primary card">
            <div class="card-body">
                <div class="card-title"> {{__('Checklist')}} </div>
                <ul ul class="todo-list-wrapper list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-info">
                        </div>
                        <ul>
                            <li> Add the same block as the example code at the location where you want to print the bulletin board.</li>
                            <li> Add the same block as the example code at the location where you want to print the bulletin board.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .border-left-kant {
        padding: 1.25rem;
        margin-bottom: 1.25rem;
        border: 1px solid #eee;
        border-left-width: .25rem;
        border-radius: .25rem;
        border-left-color: #e92626;
        background-color: white;
        position: relative;
        z-index: 1;
    }
</style>
@endsection
@section('script')
<script>
    $('#code').text('@ include footer ')
</script>
<script>
    $(document).ready(function() {
        $("#generatorClick").click(function() {
            Swal.fire({
                title: "클립보드에 복사됨!",
                icon: "success",
                buttonS: true,
            })
        })
    });
</script>
@stop