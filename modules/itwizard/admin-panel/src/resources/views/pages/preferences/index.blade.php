@extends('Admin::layouts.master')
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-cogs icon-gradient bg-mixed-hopes"></i>
                </div>
                <div>
                    {{ __('Basic Information') }}
                    <div class="page-title-subheading"></div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button class="btn btn-primary" id="s_edit_settings"> {{ __('Edit') }} </button>
                <button class="btn btn-success d-none" id="s_save_settings"> {{ __('Save') }} </button>
            </div>
        </div>
    </div>

    <div class="card card-btm-border border-primary mb-3">
        <div class="card-body">
            <form action="#" id="s_settings">
                <ul class="body-tabs body-tabs-layout tabs-animated nav" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    @foreach ($group as $key => $name)
                        <li class="nav-item   text-uppercase" role="presentation">
                            <a class="nav-link pt-2 pb-2 @if ($key == 0) active @endif" id="t-{{ $name->group }}-tab"
                                data-bs-toggle="tab" data-bs-target="#t-{{ $name->group }}" type="button" role="tab"
                                aria-controls="t-{{ $name->group }}" @if ($key == 0) aria-selected="true" @else aria-selected="false" @endif
                                style="font-weight: 500;">{{ $name->group }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="divider"></div>
                <div class="tab-content mt-4" id="navcontent">
                    @foreach ($group as $key => $name)
                        <div class="tab-pane fade @if ($key == 0) active show @endif" id="t-{{ $name->group }}" role="tabpanel"
                            aria-labelledby="t-{{ $name->group }}-tab">
                            @foreach ($data[$name->group] as $inputs)
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold"> {{ $inputs->display_name }} </label>
                                    <div class="d-inline-block bg-light ms-2 px-2"><code>
                                            Config::get('setting.{{ $inputs->key }}')
                                        </code>
                                    </div>
                                    @switch($inputs->type)
                                        @case('text')
                                            <div class="float-end mb-2">

                                                <button type="button" class="btn btn-outline-danger btn-sm delete_settings"
                                                    data-id="{{ $inputs->id }}"> {{ __('Delete') }} </button>

                                            </div>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="{{ $inputs->key }}"
                                                    placeholder="{{ $inputs->display_name }}" value="{{ $inputs->value }}"
                                                    id="{{ $inputs->key }}" inputs-id="{{ $inputs->id }}">
                                                <select class="form-select change-group" style="max-width: 100px"
                                                    data-id="{{ $inputs->id }}">
                                                    @foreach ($group as $changer)
                                                        <option value="{{ $changer->group }}" @if ($changer->group == $inputs->group) selected @endif>
                                                            {{ $changer->group }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        @break
                                        @case('text_area')
                                            <div class="float-end mb-2">
                                                <div class="input-group">
                                                    <button type="button" class="btn btn-outline-danger btn-sm delete_settings"
                                                        data-id="{{ $inputs->id }}"> {{ __('Delete') }} </button>
                                                    <select class="form-select change-group" style="max-width: 100px"
                                                        data-id="{{ $inputs->id }}">
                                                        @foreach ($group as $changer)
                                                            <option value="{{ $changer->group }}" @if ($changer->group == $inputs->group) selected @endif>
                                                                {{ $changer->group }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea name="{{ $inputs->key }}" id="{{ $inputs->key }}"
                                                placeholder="{{ $inputs->display_name }}" cols="30" rows="10"
                                                class="form-control">{{ $inputs->value }}</textarea>
                                        @break
                                        @case('rich_text_box')
                                            <div class="float-end mb-2">
                                                <div class="input-group">
                                                    <button type="button" class="btn btn-outline-danger btn-sm delete_settings"
                                                        data-id="{{ $inputs->id }}"> {{ __('Delete') }} </button>
                                                    <select class="form-select change-group" style="max-width: 100px"
                                                        data-id="{{ $inputs->id }}">
                                                        @foreach ($group as $changer)
                                                            <option value="{{ $changer->group }}" @if ($changer->group == $inputs->group) selected @endif>
                                                                {{ $changer->group }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <textarea name="{{ $inputs->key }}" id="{{ $inputs->key }}"
                                                {{ $inputs->display_name }} class="form-control ckeditor" cols="30"
                                                rows="10">{{ $inputs->value }}</textarea>
                                        @break
                                        @case('select_dropdown')
                                            <div class="float-end mb-2">
                                                <button type="button" class="btn btn-outline-danger btn-sm delete_settings"
                                                    data-id="{{ $inputs->id }}"> {{ __('Delete') }} </button>
                                            </div>
                                            <select name="" id=""></select>
                                            {{-- БОДОЖ БАЙНА --}}
                                        @break
                                        @case('image')
                                            <div class="float-end mb-2">
                                                <button type="button" class="btn btn-outline-danger btn-sm delete_settings"
                                                    data-id="{{ $inputs->id }}"> {{ __('Delete') }} </button>

                                            </div>
                                            <div class="input-group">
                                                <button type="button" onclick="filemanager.selectFile('{{ $inputs->key }}')"
                                                    class="btn btn-outline-primary">{{ __('Choose') }}</button>
                                                <input type="text" name="{{ $inputs->key }}" class="form-control"
                                                    id="{{ $inputs->key }}" inputs-id="{{ $inputs->id }}"
                                                    value="{{ $inputs->value }}">
                                                <img src="" id="profile-photo-preview-{{ $inputs->id }}">
                                                <select class="form-select change-group" style="max-width: 100px"
                                                    data-id="{{ $inputs->id }}">
                                                    @foreach ($group as $changer)
                                                        <option value="{{ $changer->group }}" @if ($changer->group == $inputs->group) selected @endif>
                                                            {{ $changer->group }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @break
                                        @default
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="{{ $inputs->key }}"
                                                    placeholder="{{ $inputs->display_name }}" value="{{ $inputs->value }}"
                                                    id="{{ $inputs->key }}" inputs-id="{{ $inputs->id }}">
                                                <select class="form-select change-group" style="max-width: 100px"
                                                    data-id="{{ $inputs->id }}">
                                                    @foreach ($group as $changer)
                                                        <option value="{{ $changer->group }}" @if ($changer->group == $inputs->group) selected @endif>
                                                            {{ $changer->group }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    @endswitch

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>

    <div class="card card-btm-border border-primary mb-3">
        <div class="card-body">
            <div class="card-title"> {{ __('Add new settings') }} </div>
            <div class="divider"></div>
            <div class="row">
                <div class="mb-3 col-lg-3">
                    <label for="" class="fw-bold form-label"> Name </label>
                    <input type="text" class="form-control" placeholder="Name" id="info_name">
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="" class="fw-bold form-label"> Key </label>
                    <input type="text" class="form-control" placeholder="Key" id="info_key">
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="" class="fw-bold form-label"> Type </label>
                    <select name="info_type" id="info_type" class="form-control form-select">
                        <option value="">Choose Type</option>
                        <option value="text">Text Box</option>
                        <option value="text_area">Text Area</option>
                        <option value="rich_text_box">Rich Textbox</option>
                        <option value="checkbox">Check Box</option>
                        <option value="radio_btn">Radio Button</option>
                        <option value="select_dropdown">Select Dropdown</option>
                        <option value="file">File</option>
                    </select>
                </div>
                <div class="mb-3 col-lg-3">
                    <label for="" class="fw-bold form-label"> Group </label>
                    <input type="text" name="info_group" id="info_group" list="groups" class="form-control form-select"
                        placeholder="Choose group">
                    <datalist id="groups">
                        @foreach ($group as $groups)
                            <option value="{{ $groups->group }}"> {{ $groups->group }} </option>
                        @endforeach
                    </datalist>
                    {{-- <select name="info_group" id="info_group" class="form-control form-select">
                        <option value=""> Choose group </option>
                        @foreach ($group as $groups)
                            <option value="{{ $groups->group }}"> {{ $groups->group }} </option>
                        @endforeach
                    </select> --}}
                </div>
                <div class="col-lg-12">
                    <div class="float-end">
                        <button type="button" class="btn btn-success" id="add_new_setting">
                            <i class="fa fa-plus"></i>
                            Add new setting
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        $('.delete_settings').click(function() {
            const settings_id = $(this).data('id')
            const data = {
                id: settings_id
            }
            Swal.fire({
                title: 'Do you want to delete this settings?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "{{ __('Delete') }}",
                denyButtonText: `{{ __('Cancel') }}`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Axios.post('/api/preferences/delete', data).then((resp) => {
                        Swal.fire('Deleted!', '', 'success')
                        console.log(resp)
                        setInterval(() => {
                            window.location.reload()
                        }, 1200);
                    }).catch((err) => {
                        Toast.fire({
                            icon: 'error',
                            title: err
                        });
                    })
                } else if (result.isDenied) {
                    Swal.fire('{{ __('Changes are not saved') }}', '', 'info')
                }
            })
        })
    </script>
    <script>
        $('#s_settings input, #s_settings button').attr('disabled', true)
        $('#s_edit_settings').click(function() {
            $(this).toggleClass('d-none')
            $('#s_settings input, #s_settings textarea, #s_settings button').removeAttr('disabled')
            $('#s_save_settings').toggleClass('d-none')
        })
        $('#s_save_settings').click(function() {
            const data = $('#s_settings').serializeArray();
            console.log(data)

            Axios.post('/api/preferences/update', data).then((resp) => {
                console.log(resp.data)
            }).catch((err) => {
                Toast.fire({
                    icon: 'error',
                    title: err
                });
            });
            $('#s_settings input, #s_settings textarea, #s_settings button').attr('disabled', true)
            $('#s_save_settings').toggleClass('d-none')
            Swal.fire({
                icon: 'success',
                title: 'Success',
                showConfirmButton: false,
                timer: 1500
            })
            setInterval(() => {
                window.location.reload()
            }, 1500);
        })
    </script>
    <script>
        $('#add_new_setting').click(function() {
            const data = {
                name: $('#info_name').val(),
                key: $('#info_group').val() + '_' + $('#info_key').val(),
                type: $('#info_type').val(),
                group: $('#info_group').val()
            }

            Axios.post('/api/preferences/create', data).then((resp) => {

                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    showConfirmButton: false,
                    timer: 1500
                })

                setInterval(() => {
                    window.location.reload()
                }, 1500);


            }).catch((err) => {
                Toast.fire({
                    icon: 'error',
                    title: err
                });
            });
        })

        window.onload = function() {
            CKEDITOR.replace('ckeditor', {
                filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                language: 'ko'
            });
        }
    </script>
@endsection
