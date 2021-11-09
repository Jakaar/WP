<!doctype html>
<html lang="{{Session::get('locale')}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>wPanel | {{ env('ORG_NAME') }}</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Nunito:wght@200;300;400;600;700;800&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- <meta name="description" content="This is an example dashboard created using build-in elements and components."> --}}
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <style>
        body {
            -ms-overflow-style: none;
            /* for Internet Explorer, Edge */
            scrollbar-width: none;
            /* for Firefox */
            overflow-y: scroll;

        }

        body::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }

    </style>

    <link rel="stylesheet" href="{{ asset('aPanel/css/admin.css') }}">
    @FilemanagerScript
</head>

<body>
    <div id="sideBarMini" class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('Admin::includes.header')
        @include('Admin::includes.ui-settings')
        <div class="app-main">
            @include('Admin::includes.side-bar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card mb-3 text-wrap">
                                <ul class="body-tabs body-tabs-layout tabs-animated body-tabs nav">
                                    @foreach (Config::get('Menu') as $menu => $menus)
                                        <li class="nav-item ml-2">
                                            <a role="tab"
                                                class="nav-link {{ Request::is($menus['url'] . '*') ? 'active' : null }}"
                                                href="/{{ $menus['url'] }}">
                                                <span class="text-wrap">{{ __($menus['title']) }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                </div>
                @include('Admin::includes.footer')
            </div>
        </div>
    </div>

    <div class="app-drawer-wrapper">
        <div class="drawer-nav-btn">
            <button type="button" class="hamburger hamburger--elastic is-active">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <div class="drawer-content-wrapper">
            <div class="scrollbar-container">
                <h3 class="drawer-heading">
                    <div class="card-title mb-0">{{ __('Weather') }}</div>
                </h3>
                <div class="drawer-section" id="weather_section">
                    <div class="card-title"> {{ __('Today') }} </div>
                    <div class="col-12">
                        <div class="card mb-3 dd card-btm-border rounded-3 border-primary shadow">
                            <div class="card-body">
                                <div class="float-start">
                                    <h3 class="text-dark fw-bold"> {{ now()->format('l') }} </h3>
                                    <div class="text-dark"> {{ now()->format('d M Y') }} </div>
                                </div>
                                <div class="float-end">
                                    <h5 class="text-dark fw-bold" id="weather-location"> </h5>
                                    <div class="text-dark float-end">
                                        <div><b> {{ __('Wind') }}:</b> <span class=""
                                                id="weather-wind"> </span></div>
                                        <div><b> {{ __('Humidity') }}:</b> <span class=""
                                                id="weather-humidity"> </span></div>
                                        {{-- <div><b> {{ __('Precipitation') }}:</b> <span class="" id="weather-precipitation"> </span></div> --}}
                                    </div>

                                </div>
                                <div class="clearfix py-5"></div>

                                <div class="fs-1 fw-bold text-dark float-start">
                                    <span id="weather-temp" class="fw-bold"> </span>
                                    <div class="fs-5 opacity-10 text-dark fw-bold" id="weather-type"></div>
                                </div>
                                <div class="float-end">
                                    <div class=" rounded" id="weather-icon"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row" id="forecast">
                            <div class="card-title"> {{ __('Daily Forecast') }} </div>

                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                {{-- <h3 class="drawer-heading">File Transfers</h3>
                <div class="drawer-section p-0">
                    <div class="files-box">
                        <ul class="list-group list-group-flush">
                            <li class="pt-2 pb-2 pe-2 list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div
                                            class="widget-content-left opacity-6 fsize-2 me-3 text-primary center-elem">
                                            <i class="fa fa-file-alt"></i>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading fw-normal">TPSReport.docx</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                <i class="fa fa-cloud-download-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-2 pb-2 pe-2 list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div
                                            class="widget-content-left opacity-6 fsize-2 me-3 text-warning center-elem">
                                            <i class="fa fa-file-archive"></i>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading fw-normal">Latest_photos.zip</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                <i class="fa fa-cloud-download-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-2 pb-2 pe-2 list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left opacity-6 fsize-2 me-3 text-danger center-elem">
                                            <i class="fa fa-file-pdf"></i>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading fw-normal">Annual Revenue.pdf</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                <i class="fa fa-cloud-download-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="pt-2 pb-2 pe-2 list-group-item">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div
                                            class="widget-content-left opacity-6 fsize-2 me-3 text-success center-elem">
                                            <i class="fa fa-file-excel"></i>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading fw-normal">Analytics_GrowthReport.xls</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                <i class="fa fa-cloud-download-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <h3 class="drawer-heading">Tasks in Progress</h3>
                <div class="drawer-section p-0">
                    <div class="todo-box">
                        <ul class="todo-list-wrapper list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="todo-indicator bg-warning"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left me-2">
                                            <div class="custom-checkbox custom-control form-check">
                                                <input type="checkbox" id="exampleCustomCheckbox1266"
                                                    class="form-check-input">
                                                <label class="form-label form-check-label"
                                                    for="exampleCustomCheckbox1266">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Wash the car
                                                <div class="badge bg-danger ms-2">Rejected</div>
                                            </div>
                                            <div class="widget-subheading"><i>Written by Bob</i></div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-focus"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left me-2">
                                            <div class="custom-checkbox custom-control form-check">
                                                <input type="checkbox" id="exampleCustomCheckbox1666"
                                                    class="form-check-input">
                                                <label class="form-label form-check-label"
                                                    for="exampleCustomCheckbox1666">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Task with hover dropdown menu</div>
                                            <div class="widget-subheading">
                                                <div>By Johnny
                                                    <div class="badge rounded-pill bg-info ms-2">NEW</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <div class="d-inline-block dropdown">
                                                <button type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                    class="dropdown-menu dropdown-menu-right">
                                                    <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" disabled="" tabindex="-1"
                                                        class="disabled dropdown-item">Action</button>
                                                    <button type="button" tabindex="0" class="dropdown-item">Another
                                                        Action</button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <button type="button" tabindex="0" class="dropdown-item">Another
                                                        Action</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-primary"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left me-2">
                                            <div class="custom-checkbox custom-control form-check">
                                                <input type="checkbox" id="exampleCustomCheckbox4777"
                                                    class="form-check-input">
                                                <label class="form-label form-check-label"
                                                    for="exampleCustomCheckbox4777">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Badge on the right task</div>
                                            <div class="widget-subheading">This task has show on hover actions!</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                        </div>
                                        <div class="widget-content-right ms-3">
                                            <div class="badge rounded-pill bg-success">Latest Task</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-info"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left me-2">
                                            <div class="custom-checkbox custom-control form-check">
                                                <input type="checkbox" id="exampleCustomCheckbox2444"
                                                    class="form-check-input">
                                                <label class="form-label form-check-label"
                                                    for="exampleCustomCheckbox2444">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left me-3">
                                            <div class="widget-content-left">
                                                <!--                                                    <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="" />-->
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Go grocery shopping</div>
                                            <div class="widget-subheading">A short description ...</div>
                                        </div>
                                        <div class="widget-content-right widget-content-actions">
                                            <button class="border-0 btn-transition btn btn-sm btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="todo-indicator bg-success"></div>
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left me-2">
                                            <div class="custom-checkbox custom-control form-check">
                                                <input type="checkbox" id="exampleCustomCheckbox3222"
                                                    class="form-check-input">
                                                <label class="form-label form-check-label"
                                                    for="exampleCustomCheckbox3222">&nbsp;</label>
                                            </div>
                                        </div>
                                        <div class="widget-content-left flex2">
                                            <div class="widget-heading">Development Task</div>
                                            <div class="widget-subheading">Finish React ToDo List App</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="badge bg-warning me-2">69</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <button class="border-0 btn-transition btn btn-outline-success">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button class="border-0 btn-transition btn btn-outline-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                {{-- <h3 class="drawer-heading">Urgent Notifications</h3>
                <div class="drawer-section">
                    <div class="notifications-box">
                        <div
                            class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <p>Yet another one, at
                                            <span class="text-success">15:00 PM</span>
                                        </p>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">
                                            Build the production release
                                            <div class="badge bg-danger ms-2">NEW</div>
                                        </h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">
                                            Something not important
                                            <!--                                                <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/1.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/2.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/3.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/4.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/5.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/6.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/7.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <img src="images/avatars/8.jpg" alt="">-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                    <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">-->
                                            <!--                                                        <div class="avatar-icon">-->
                                            <!--                                                            <i>+</i>-->
                                            <!--                                                        </div>-->
                                            <!--                                                    </div>-->
                                            <!--                                                </div>-->
                                        </h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                    <div class="vertical-timeline-element-content bounce-in">
                                        <h4 class="timeline-title">This dot has an info state</h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                <div>
                                    <span class="vertical-timeline-element-icon is-hidden"></span>
                                    <div class="vertical-timeline-element-content is-hidden">
                                        <h4 class="timeline-title">This dot has a dark state</h4>
                                        <span class="vertical-timeline-element-date"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <div class="body-block-example-1 d-none">
        <div class="loader bg-transparent no-shadow p-0">
            <div class="ball-grid-pulse">
                <div class="bg-blue"></div>
                <div class="bg-white"></div>
                <div class="bg-warning"></div>

                <div class="bg-white"></div>
                <div class="bg-warning"></div>
                <div class="bg-blue"></div>

                <div class="bg-warning"></div>
                <div class="bg-blue"></div>
                <div class="bg-white"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('aPanel/js/main.js') }}"></script>
    <script>
        // $(document).ready(function(){
        //     $.blockUI.defaults = {
        //          timeout: 2000,
        //         fadeIn: 200,
        //         fadeOut: 400,
        //     };
        //     $.blockUI({ message: $(".body-block-example-1") });
        // })
    </script>
    <script>
        $(document).ready(function() {
            // function getLocation() {
            //     if (navigator.geolocation) {
            //         navigator.geolocation.getCurrentPosition(showPosition);
            //     } else {
            //         x.innerHTML = "Geolocation is not supported by this browser.";
            //     }
            // }
            // getLocation()

            // function showPosition(position) {
            //     localStorage.setItem('latitude', position.coords.latitude)
            //     localStorage.setItem('longitude', position.coords.longitude)
            // }
            const key = '{{ Config::get('setting.Weather_wapi') ?? '947c5c46b768464e9f621616210211' }}';
            const q = '{{ Config::get('setting.Weather_wcity') ?? 'Seoul' }}';

            const url = 'http://api.weatherapi.com/v1/forecast.json?key=' + key + '&q=' + q + '&days=7&lang=ko';
            let data;
            // if(localStorage.getItem('latitude') != null && localStorage.getItem('longitude') != null){
            //     data = {
            //         lat : localStorage.getItem('latitude'),
            //         lon : localStorage.getItem('longitude')
            //     }
            // }
            Axios.post(url, data)
                .then((resp) => {

                    const current = resp.data.current;
                    const location = resp.data.location;
                    const forcast = resp.data.forecast.forecastday;

                    $.each(forcast, function(i, item) {

                        let d = new Date(item.date)
                        const weekday = new Array(7);
                        weekday[0] = "{{ __('Sun') }}";
                        weekday[1] = "{{ __('Mon') }}";
                        weekday[2] = "{{ __('Tue') }}";
                        weekday[3] = "{{ __('Wed') }}";
                        weekday[4] = "{{ __('Thu') }}";
                        weekday[5] = "{{ __('Fri') }}";
                        weekday[6] = "{{ __('Sat') }}";
                        let week = weekday[d.getDay()]

                        const color = new Array(3);
                        color[0] = "primary";
                        color[1] = "warning";
                        color[2] = "info";
                        color[3] = "danger";

                        if (i == 0) {
                            return true;
                        }

                        $('#forecast').append(
                            '<div class="col"> <div class="card shadow card-btm-border border-' + color[
                                i] +
                            ' rounded-3 "> <div class="card-body dd text-center text-dark "> <img src=' +
                            item.day.condition.icon + '> <h5 class="fw-bold"> ' + week +
                            ' </h5> <h5 class="fw-bold"> ' + item.day.maxtemp_c.toFixed(0) +
                            '℃ </h5> </div> </div> </div>');
                    })

                    $('#weather-temp').text(current.temp_c + '℃')
                    $('#weather-icon').append('<img src=' + current.condition.icon + '>')
                    $('#weather-type').text(current.condition.text)
                    $("#weather-wind").text(current.wind_kph + 'km/h')
                    $('#weather-humidity').text(current.humidity + '%')
                    $('#weather-precipitation').text(current.precip_mm + '%')
                    $('#weather-location').text(location.name + ' / ' + location.country)

                    if(location.localtime > '{{now()->format("Y-m-d")}} 13:00'){
                        var el = $('.dd');
                        el.addClass('bg-midnight-bloom')

                        var ed = $('.text-dark');
                        ed.removeClass('text-dark');
                        ed.addClass('text-white');

                    }

                }).catch((err) => {
                    console.log(err)
                    $('#weather_section').html('<div class="alert alert-danger">' + err + '</div>')
                });
        })
    </script>
    @yield('script')
    @yield('modal')
</body>

</html>
