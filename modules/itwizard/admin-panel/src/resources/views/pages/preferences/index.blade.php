@extends('Admin::layouts.master')
@section('title') {{__('Configuration')}} @endsection

@inject('t','App\Helper\Helper')

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
                <button id="reload_page" type="button" data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                    class="btn-shadow me-3 btn btn-info" data-bs-original-title="Refresh">
                    <i class="pe-7s-refresh-2"></i>
                </button>
                <button class="btn btn-primary" id="s_edit_settings"> {{ __('Edit') }} </button>
                <button class="btn btn-success d-none" id="s_save_settings"> {{ __('Save') }} </button>
            </div>
        </div>
    </div>
    {{-- <div class="card  border-primary">
        <div class="card-body">
            <ul class="nav tabs-animated">
                @foreach ($data['langs'] as $key => $lang)
                    <li class="nav-item">
                        <a role="tab" class="nav-link @if ($key === 0) active @endif" id="tab-c1-{{ $lang->id }}"
                            data-bs-toggle="tab" href="#tab-animated1-{{ $lang->id }}">
                            <span class="nav-text">{{ $lang->country }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div> --}}

    {{-- <div class="tab-content mt-3">
        @foreach ($data['langs'] as $key => $lang)
            <div class="tab-pane fade @if ($key === 0) active show @endif" id="tab-animated1-{{ $lang->id }}" role="tabpanel"> --}}

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
                            @foreach ($model[$name->group] as $inputs)
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bold">
                                        {{ $t->translateText($inputs->display_name) ?? $inputs->display_name }}
                                    </label>
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
                                                    placeholder="{{ $t->translateText($inputs->display_name) }}"
                                                    value="{{ $inputs->value }}" id="{{ $inputs->key }}"
                                                    inputs-id="{{ $inputs->id }}">
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
                                                        data-id="{{ $inputs->id }}"> {{ __('Delete') }}
                                                    </button>
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
                                                        data-id="{{ $inputs->id }}"> {{ __('Delete') }}
                                                    </button>
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
                                            <textarea class="form-control ckeditor" id="{{ $inputs->key }}" cols="30"
                                                rows="10">{{ $inputs->value }}</textarea>
                                            {{-- <input type="hidden" name="{{ $inputs->key }}" > --}}
                                        @break
                                        @case('select_dropdown')
                                            <div class="float-end mb-2">
                                                <button type="button" class="btn btn-outline-danger btn-sm delete_settings"
                                                    data-id="{{ $inputs->id }}"> {{ __('Delete') }} </button>
                                            </div>
                                            <div class="input-group">
                                                @if (isset(json_decode($inputs->details, true)['options']))
                                                    <select name="{{ $inputs->key }}" id="{{ $inputs->key }}"
                                                        {{ $inputs->display_name }} class="form-control form-select">
                                                        @foreach (json_decode($inputs->details, true)['options'] as $key => $rr)
                                                            <option value="{{ $key }}" @if ($key == $inputs->value) selected @endif>
                                                                {{ $rr }} </option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <div class="alert alert-danger"> JSON format error </div>
                                                @endif
                                                <select class="form-select change-group" style="max-width: 100px"
                                                    data-id="{{ $inputs->id }}">
                                                    @foreach ($group as $changer)
                                                        <option value="{{ $changer->group }}" @if ($changer->group == $inputs->group) selected @endif>
                                                            {{ $changer->group }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        @break
                                        @case('file')
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
                                        @case('checkbox')

                                            <div class="float-start">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input form-check-input-lg" type="checkbox"
                                                        @if ($inputs->value == 'on') checked @endif>
                                                    <input type="hidden" name="{{ $inputs->key }}" id="{{ $inputs->key }}"
                                                        value="{{ $inputs->value }}">
                                                    <label class="form-check-label" for="{{ $inputs->key }}">
                                                        @if ($inputs->value == 'on')
                                                            {{ isset(json_decode($inputs->details, true)['on']) }}
                                                        @else
                                                            {{ isset(json_decode($inputs->details, true)['off']) }}
                                                        @endif
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="float-end">
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

                                        @break
                                        @case('radio_btn')
                                            <div class="clearfix"></div>

                                            @if (isset(json_decode($inputs->details, true)['options']))
                                                @foreach (json_decode($inputs->details, true)['options'] as $key => $radio)
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="{{ $inputs->key }}" id="{{ $inputs->key }}"
                                                            value="{{ $key }}" @if ($key == $inputs->value) checked @endif>
                                                        <label class="form-check-label" for="inlineRadio1">
                                                            {{ $radio }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="alert alert-danger"> {{ __('"options" JSON error') }} </div>
                                            @endif

                                            <div class="float-end">
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

                                        @break
                                        @default
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

                                    @endswitch

                                </div>
                                <div class="clearfix"></div>
                                <div class="divider"></div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="card mb-3 border-primary">
        <div class="card-body">
            <ul class="nav tabs-animated">
                @foreach ($data['langs'] as $key => $lang)
                    <li class="nav-item">
                        <a role="tab" class="nav-link @if ($key === 0) active @endif" id="tab-c1-{{ $lang->id }}"
                            data-bs-toggle="tab" href="#tab-animated1-{{ $lang->id }}">
                            <span class="nav-text">{{ $lang->country }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div> --}}



    <div class="card card-btm-border border-primary mb-3">
        <div class="card-body">
            <div class="card-title"> {{ __('Add new settings') }} </div>
            <div class="divider"></div>
            <form action="#" id="addNewItemForm">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <div class="tab-content ">
                            @foreach ($data['langs'] as $key => $lang)
                                <div class="tab-pane fade @if ($key === 0) active show @endif" id="tab-animated1-{{ $lang->id }}"
                                    role="tabpanel">

                                    <label for="" class="fw-bold form-label"> {{ __('Name') }} </label>
                                    <input type="text" name="info_name" class="form-control"
                                        placeholder="Name" id="info_name" required
                                        data-msg-required=" {{ __('This Field is Required') }} "
                                        data-parent-id="tab-c1-{{ $lang->id }}">

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label for="" class="fw-bold form-label"> {{ __('Key') }} </label>
                        <input type="text" class="form-control" placeholder="Key" id="info_key" required
                            data-msg-required=" {{ __('This Field is Required') }}  ">
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label for="" class="fw-bold form-label"> {{ __('Type') }} </label>
                        <select name="info_type" id="info_type" class="form-control form-select" required
                            data-msg-required=" {{ __('This Field is Required') }}  ">
                            <option value="">{{ __('Choose Type') }}</option>
                            <option value="text"> {{ __('Text Box') }} </option>
                            <option value="text_area"> {{ __('Text Area') }} </option>
                            <option value="rich_text_box"> {{ __('Editor') }} </option>
                            <option value="checkbox"> {{ __('Check Box') }} </option>
                            <option value="radio_btn"> {{ __('Radio Button') }} </option>
                            <option value="select_dropdown"> {{ __('Select Dropdown') }} </option>
                            <option value="file"> {{ __('File') }} </option>
                        </select>
                    </div>
                    <div class="mb-3 col-lg-3">
                        <label for="" class="fw-bold form-label"> {{ __('Group') }} </label>
                        <input type="text" name="info_group" id="info_group" list="groups" class="form-control form-select"
                            placeholder="Choose group" required
                            data-msg-required=" {{ __('This Field is Required') }}  ">
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
                        <textarea name="" id="options_editor" cols="30" rows="10" class="form-control d-none my-3"
                            placeholder="Enter your input's options, example: { { options: { 'key' : 'value' } } }"></textarea>
                        <div class="float-end">
                            <a href="javascript:;" id="open_options" class="me-2"> Options <i
                                    class="fa fa-angle-double-down" id="openclose" aria-hidden="true"></i> </a>
                            <button type="button" class="btn btn-success" id="add_new_setting">
                                <span class="btn-icon-wrapper pe-2 opacity-7">
                                    <i class="pe-7s-plus"></i>
                                </span>
                                {{ __('Add new setting') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')

    <script>
        $('#open_options').click(function() {
            $('#openclose').toggleClass('fa-angle-double-up')
            $('#options_editor').toggleClass('d-none').animate()
        })
    </script>
    {{-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
    {{-- item's change group --}}
    <script>
        $('.change-group').on('focusin', function() {
            $(this).data('val', $(this).val())
        }).on('change', function(old) {
            const id = $(this).data('id');
            const group = $(this).val();
            const data = {
                id: id,
                group: group
            }
            Swal.fire({
                title: '{{__('Do you want to change group?')}}',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: '{{ __('Yes') }}',
                denyButtonText: `{{ __('No') }}`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Axios.post('/api/preferences/change', data).then((resp) => {
                        Swal.fire('Changed!', '', 'success')
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
                    $(this).val($(this).data('val'))
                    Swal.fire('{{ __('Changes are not saved') }}', '', 'info')
                }
            })

        })
    </script>
    {{-- Delete item --}}
    <script>
        $('.delete_settings').click(function() {
            const settings_id = $(this).data('id')
            const data = {
                id: settings_id
            }
            Swal.fire({
                title: '{{__('Do you want to delete this settings?')}}',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "{{ __('Delete') }}",
                denyButtonText: `{{ __('Cancel') }}`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Axios.post('/api/preferences/delete', data).then((resp) => {
                        Swal.fire('{{__('Deleted!')}}', '', 'success')
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
        $('.form-check-input').on('change', function() {
            if ($(this).is(':checked') == true) {
                $(this).next().val('on')
            } else {
                $(this).next().val('off')
            }
        });
    </script>

    <script>
        $('#s_settings input, #s_settings select, #s_settings button').attr('disabled', true)
        let theEditor = [];
        var allEditors = document.querySelectorAll('.ckeditor');
        let EditorId = [];

        $('#s_edit_settings').click(function() {
            $(this).toggleClass('d-none')
            $('#s_settings input, #s_settings select, #s_settings textarea, #s_settings button').removeAttr(
                'disabled')
            $('#s_save_settings').toggleClass('d-none')
        })
        $('#s_save_settings').click(function() {

            let data = $('#s_settings').serializeArray();
            $.each(theEditor, function(i, item) {
                data.push({
                    name: item.name,
                    value: item.editor.getData()
                })
            })
            data['user_id'] = '{{ Auth::user()->id }}';

            Axios.post('/api/preferences/update', data).then((resp) => {
                console.log(resp.data)
            }).catch((err) => {
                console.log(err)
                Swal.fire({
                    icon: 'error',
                    title: err
                });
            });
            $('#s_settings input, #s_settings select, #s_settings textarea, #s_settings button').attr('disabled',
                true)
            $('#s_save_settings').toggleClass('d-none')
            $('#s_edit_settings').toggleClass('d-none')
            Swal.fire({
                icon: 'success',
                title: '{{__('Success')}}',
                showConfirmButton: false,
                timer: 1500
            })
            // setInterval(() => {
            //     window.location.reload()
            // }, 1500);
        })
    </script>
    {{-- Add new Item --}}
    <script>
        $(document).ready(function() {
            let langs = {!! $data['langs'] !!}

            $('#add_new_setting').click(function() {
                $('#addNewItemForm').validate({
                    ignore: "",
                    errorPlacement: function(error, element) {
                        // Add the `invalid-feedback` class to the error element
                        error.addClass("invalid-feedback");
                        if (element.prop("type") === "checkbox") {
                            // error.insertAfter(element.next("label"));
                        } else {
                            // error.insertAfter(element);
                        }
                    },
                    highlight: function(element, errorClass, validClass) {

                        $(element).addClass("is-invalid").removeClass("is-valid");
                        const parantId = $(element).data('parent-id');
                        $('#' + parantId).addClass("text-danger").removeClass("text-success");
                    },
                    unhighlight: function(element, errorClass, validClass) {

                        const parantId = $(element).data('parent-id');
                        $('#' + parantId).addClass("text-success").removeClass("text-danger");
                        $(element).addClass("is-valid").removeClass("is-invalid");
                    },
                });

                // let item_name = {};

                // $.each(langs, function(i, v) {
                //     const code = v.country_code;
                //     item_name[code] = $('#info_name' + v.country_code).val();
                // })

                const data = {
                    name: $('#info_name').val(),
                    key: $('#info_group').val() + '_' + $('#info_key').val(),
                    type: $('#info_type').val(),
                    group: $('#info_group').val(),
                    details: $('#options_editor').val()
                }

                if ($('#addNewItemForm').valid({
                        ignore: ""
                    })) {
                    Axios.post('/api/preferences/create', data).then((resp) => {
                        Swal.fire({
                            icon: 'success',
                            title: '{{__('Success')}}',
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
                }
            })

            // console.log(filemanager)
            $.each(allEditors, function(i, item) {
                EditorId[i] = allEditors[i].id

                ClassicEditor
                    .create(allEditors[i], {
                        uploadUrl: filemanager.ckEditorBrowse

                    })
                    .then(editor => {
                        theEditor.push({
                            name: EditorId[i],
                            editor
                        }); // Save for later use.
                    })
                    .catch(error => {
                        console.error(error);
                    });
            })

            // $.each(allEditors, function(i, item) {
            //     console.log(item)
            // })
            // window.onload = function() {
            //     CKEDITOR.replace('.ckeditor', {
            //         filebrowserBrowseUrl: filemanager.ckBrowseUrl,
            //         language: 'ko'
            //     });
            // }

            $('#reload_page').click(function() {
                location.reload(true);
            });
        })
    </script>
@endsection
