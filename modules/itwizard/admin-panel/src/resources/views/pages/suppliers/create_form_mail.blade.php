@extends('Admin::layouts.master')
@section('content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-mail-open icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Create a Form Mail') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus"></i>
                    {{ __('Create a Form Mail') }}
                </button>
            </div>
        </div>
    </div>
    <div class="card card-btm-border card-primary">
        <div class="card-body">
            <div class="card-title"> Total number of form mails: 3</div>
            <table class="table table-striped table-hover" id="BasicTable">
                <thead>
                    <tr>
                        <th> {{ __('Number') }} </th>
                        <th> {{ __('Form Mail Name') }} </th>
                        <th> {{ __('Action') }} </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Development Quote Inquiry </td>
                        <td>
                            <button class="btn-outline-primary btn" data-bs-toggle="modal" data-bs-target="#EditMail">
                                {{ 'Edit' }}
                            </button>
                            <button class="btn-outline-danger btn-link btn">
                                {{ 'Delete' }}
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ __('Create a Form Mail') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <small>
                        <ul class="todo-list-wrapper list-group list-group-flush">
                            <div class="card-title"> {{ __('Checklist') }} </div>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-info"></div>
                                <ul>
                                    <li>The e-mail is sent with the values ​​entered in the same name (Co.) > Basic Settings
                                        > Site Information > "Site Name" and "Administrator E-mail"</li>
                                    <li> E-mails can be received by multiple people at the same time. Enter the emails you
                                        want to receive, separated by commas (,). </li>
                                    <li> 예) test@test.com,tago@tago.com / 010-1234-5678.010-2512-5232 </li>
                                </ul>
                            </li>
                        </ul>
                    </small>
                    <div class="divider"></div>
                    <form action="#" class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="" class="form-label fw-bold"> {{ __('Form Mail Name') }} </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="" class="form-label fw-bold"> {{ __('Form Mail Code') }} </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="" class="form-label fw-bold"> {{ __('Terms and Conditions') }} </label>

                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            <div class="form-check d-inline-block float-end fw-bold"><input type="checkbox" id="receive"
                                    class="form-check-input"><label for="receive" class="form-check-label">
                                    {{ __('Used') }} </label></div>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="" class="form-label fw-bold"> {{ __('Receive Settings') }} </label>

                            <input type="text" class="form-control">
                            <div class="form-check d-inline-block float-end fw-bold"><input type="checkbox" id="receive"
                                    class="form-check-input"><label for="receive" class="form-check-label">
                                    {{ __('receive email') }} </label></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> {{ __('Close') }} </button>
                    <button type="button" class="btn btn-success"> {{ __('Create a Form Mail') }} </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="EditMail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ __('Edit a Form Mail') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <small>
                        <ul class="todo-list-wrapper list-group list-group-flush">
                            <div class="card-title"> {{ __('Checklist') }} </div>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-info"></div>
                                <ul>
                                    <li>The e-mail is sent with the values ​​entered in the same name (Co.) > Basic Settings
                                        > Site Information > "Site Name" and "Administrator E-mail"</li>
                                    <li> E-mails can be received by multiple people at the same time. Enter the emails you
                                        want to receive, separated by commas (,). </li>
                                    <li> 예) test@test.com,tago@tago.com / 010-1234-5678.010-2512-5232 </li>
                                </ul>
                            </li>
                        </ul>
                    </small>
                    <div class="divider"></div>
                    <form action="#" class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="" class="form-label fw-bold"> {{ __('Form Mail Name') }} </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="" class="form-label fw-bold"> {{ __('Form Mail Code') }} </label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label for="" class="form-label fw-bold"> {{ __('Terms and Conditions') }} </label>

                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            <div class="form-check d-inline-block float-end fw-bold"><input type="checkbox" id="receive"
                                    class="form-check-input"><label for="receive" class="form-check-label">
                                    {{ __('Used') }} </label></div>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="" class="form-label fw-bold"> {{ __('Receive Settings') }} </label>

                            <input type="text" class="form-control">
                            <div class="form-check d-inline-block float-end fw-bold"><input type="checkbox" id="receive"
                                    class="form-check-input"><label for="receive" class="form-check-label">
                                    {{ __('receive email') }} </label></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> {{ __('Close') }} </button>
                    <button type="button" class="btn btn-primary"> {{ __('Save Changes') }} </button>
                </div>
            </div>
        </div>
    </div>
@endsection
