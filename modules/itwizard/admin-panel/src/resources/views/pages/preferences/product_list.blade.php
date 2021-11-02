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
                <div class="card-title"> {{__('Product List Creation Code')}} </div>
                <div class="input-group">
                    <input type="text" class="form-control" id="myInput" value="Text to copy!">
                    <div class="input-group-text">
                         <button onclick="Copycode()" data-title="Secondary" data-toggle="popover-product-list" data-bs-toggle="text-ligth bg-secondary" data-bs-content="Copied!" id="my-button" type="button" data-clipboard-target="myInput" class="btn btn-outline-secondary clipboard-trigger">
                        <i class="fa fa-copy"></i>
                       </button>
                    </div>
                </div>                
            </div>
        </div>
        <div class="card mb-3 card-btm-border border-primary card">
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
    function Copycode() {
    var copyText = document.getElementById('myInput')
    copyText.select();
    document.execCommand('copy')
    console.log('Copied Text')
  }  
</script>

{{-- <script>
//     $('#my-button').click(function(){
//         Swal.fire({
//                     icon: 'success',
//                     title : 'Success',
//                     showConfirmButton: false,
//                     timer: 1500
//                 })
//     }) --}}
        

<script>
    $(document).ready(function(){
        $('[data-toggle="popover-product-list"]').popover({
        placement: 'top',
        delay: {
            "show": 300,
            "hide": 100
        }
    });

    $('[data-toggle="popover-product-list"]').click(function () {

        setTimeout(function () {
            $('.popover').fadeOut('slow');
        }, 2000);

    });
    })
</script>

  
@stop