@extends('Admin::layouts.master')

@section('title'){{__('Dashboard')}} @endsection


@section('content')
<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal">{{__('Product')}}</div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-title opacity-5 text-uppercase">{{__('Total Products')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
<!--                                    <small class="opacity-5">+</small>-->
                                    {{$dataC['total_product'] }}
                                </div>
                                <div class="ms-auto">
<!--                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
<!--                                        <span class="text-success ps-2">+14%</span>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-title opacity-5 text-uppercase">{{__('New Products')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
<!--                                    <small class="opacity-5 text-muted"><i class="fa fa-angle-up"></i></small>-->
                                    {{$dataC['new_product'] }}
                                </div>
                                <div class="ms-auto">
                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
<!--                                        <span class="text-danger ps-2">-->
<!--                                            <span class="pe-1">-->
<!--                                                <i class="fa fa-angle-up"></i>-->
<!--                                            </span>-->
<!--                                            8%-->
<!--                                        </span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-title opacity-5 text-uppercase">{{__('Active Status Product')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
                                    <span class="text-success pe-2">
<!--                                        <i class="fa fa-angle-down"></i>-->
                                    </span>
<!--                                    <small class="opacity-5">$</small>-->
                                    {{$dataC['active_product'] }}
                                </div>
                                <div class="ms-auto">
                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">
<!--                                        <span class="text-success ps-2">-->
<!--                                            <span class="pe-1">-->
<!--                                                <i class="fa fa-angle-down"></i>-->
<!--                                            </span>-->
<!--                                            15%-->
<!--                                        </span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-primary mb-3 widget-chart widget-chart2 text-start card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <h6 class="widget-title opacity-5 text-uppercase">{{__('Inactive Product')}}</h6>
                    <div class="widget-chart-flex">
                        <div class="widget-numbers mb-0 w-100">
                            <div class="widget-chart-flex">
                                <div class="fsize-4">
<!--                                    <small class="opacity-5">$</small>-->
                                    {{$dataC['inactive_product'] }}
                                </div>
                                <div class="ms-auto">
<!--                                    <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
<!--                                        <span class="text-warning ps-2">+76%</span>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal">{{__('User')}}</div>
</div>
<div class="row">

    <div class="col-md-6 col-lg-3">
        <div
            class="widget-chart widget-chart2 widget-chart-hover text-start mb-3 card-btm-border card-shadow-primary border-primary card">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('Total User')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <!--                                                        <span class="opacity-10 text-success pe-2">-->
                                <!--                                                            <i class="fa fa-angle-up"></i>-->
                                <!--                                                        </span>-->
                                {{--{
                                !!$data['users_count']
                                !!
                                }
                                --}}
                                {{$dataC['users']}}
                                <!--                                <small class="opacity-5 ps-1">명</small>-->
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-gradient-alt-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-danger border-danger card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('New User')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
<!--                                                        <span class="opacity-10 text-success pe-2">-->
<!--                                                            <i class="fa fa-angle-up"></i>-->
<!--                                                        </span>-->
                                {{ $dataC['new_user'] }}
<!--                                <small class="opacity-5 ps-1">명</small>-->
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-danger-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-warning border-warning card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('Total Admin')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <!--                                <small class="text-success pe-1">+</small>-->
                                {{$dataC['total_admin'] }}
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-warning-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div
            class="widget-chart widget-chart2 text-start mb-3 card-btm-border card-shadow-success border-success card widget-chart-hover">
            <div class="widget-chat-wrapper-outer">
                <div class="widget-chart-content">
                    <div class="widget-title opacity-5 text-uppercase">{{__('This Week Visited')}}</div>
                    <div class="widget-numbers mt-2 fsize-4 mb-0 w-100">
                        <div class="widget-chart-flex align-items-center">
                            <div>
                                <!--                                <small class="text-success pe-1">+</small>-->
                                34
                                <!--                                    <small class="opacity-5 ps-1">hires</small>-->
                            </div>
                            <!--                                <div class="widget-title ms-auto font-size-lg fw-normal text-muted">-->
                            <!--                                    <div class="circle-progress circle-progress-success-sm d-inline-block">-->
                            <!--                                        <small></small>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mbg-3 h-auto ps-0 pe-0 bg-transparent no-border card-header">
    <div class="card-header-title fsize-2 text-capitalize fw-normal">{{__('Content')}}</div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-7 col-lg-8">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                    {{__('Contents')}}
                </div>
                <!--                    <div class="btn-actions-pane-right text-capitalize">-->
                <!--                        <button class="btn btn-warning">{{__('Actions')}}</button>-->
                <!--                    </div>-->
            </div>
            <div class="pt-0 card-body">
                <div id="chart-col-1"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-5 col-lg-4">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize fw-normal">{{__('Product')}}</div>
            </div>
            <div class="p-0 card-body">
                <!--                <div id="chart-radial"></div>-->
                <div class="widget-content pt-0 w-100">
                    <!--                    <div class="widget-content-outer">-->
                    <!--                        <div class="widget-content-wrapper">-->
                    <!--                            <div class="widget-content-left pe-2 fsize-1">-->
                    <!--                                <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>-->
                    <!--                            </div>-->
                    <!--                            <div class="widget-content-right w-100">-->
                    <!--                                <div class="progress-bar-xs progress">-->
                    <!--                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32"-->
                    <!--                                         aria-valuemin="0" aria-valuemax="100" style="width: 52%;">-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class="widget-content-left fsize-1">-->
                    <!--                            <div class="text-muted opacity-6">{{__('Spendings Target')}}</div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class=" mt-3">
                        <canvas id="polar-chart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    // analytic new account
    $(".circle-progress-gradient-alt-sm")
        .circleProgress({
            value: 0,
            size: 46,
            lineCap: "round",
            fill: {gradient: ["#007bff", "#16aaff"]},
        })
        .on("circle-animation-progress", function (event, progress, stepValue) {
            $(this)
                .find("small")
                .html("<span>" + stepValue.toFixed(0) + "<span>");
        });
    // combined charts
    var options777 = {
        chart: {
            height: 397,
            type: 'line',
            // toolbar: {
            //     show: false,
            // }
        },
        series: [{
            name: 'Website Blog',
            type: 'column',
            data: [40, 5, 14, 71, 27, 13, 1, 52, 52, 20, 57, 60]
        }, {
            name: 'Social Media',
            type: 'line',
            data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }],
        stroke: {
            width: [0, 4]
        },
        // labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        // labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
        xaxis: {
            type: 'datetime'
        },
        yaxis: [{
            title: {
                text: 'Website Blog',
            },

        }, {
            opposite: true,
            title: {
                text: 'Social Media'
            }
        }]

    };

    $(document).ready(function () {
        Axios.post('/api/dashboard/GetContent').then((resp) => {
            const labelsData = resp.data.labels;
            const GraphicData = resp.data.bData;
            // const data = [440, 505];
            // console.log(labelsData[0])
            const options777 = {
                chart: {
                    height: 187,
                    type: 'line',
                    // toolbar: {
                    //     show: false,
                    // }
                },
                series: [{
                    name: '{{__('Banner')}}',
                    type: 'column',
                    data: resp.data.bData,
                },
                    {
                        name: '{{__('Content')}}',
                        type: 'line',
                        data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
                    }],
                stroke: {
                    width: [0, 4]
                },
                // labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                labels: resp.data.labels,

                yaxis: [{
                    title: {
                        text: 'Content',
                    },
                }]
            };


            const options333 = {
                chart: {
                    height: 375,
                    type: 'bar',
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '35%',
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                series: [{
                    name: '{{__('Banner')}}',
                    data: resp.data.bData
                }, {
                    name: '{{__('Page Content')}}',
                    data: resp.data.cData
                },
                    //     {
                    //     name: 'Free Cash Flow',
                    //     data: [5, 1, 6, 6, 5, 8, 2, 3, 1, 4, 5, 7,]
                    // }
                ],
                xaxis: {
                    categories: resp.data.labels,
                },
                yaxis: {
                    title: {
                        text: ' ({{__('Posts')}})'
                    }
                },
                fill: {
                    opacity: 1

                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return +val + " {{__('Posts')}}";
                        }
                    }
                }
            };
            const col3Chart1 = new ApexCharts(
                document.querySelector("#chart-col-1"),
                options333
            );
            col3Chart1.render();
            const chart777 = new ApexCharts(
                document.querySelector("#chart-combined"),
                options777
            );
            chart777.render();

            // Polar
            const randomScalingFactor = function () {
                return GraphicData;
            };
            chartColors = {
                red: "#dc3545",
                orange: "#fd7e14",
                yellow: "#ffc107",
                green: "#28a745",
                blue: "#007bff",
                purple: "#6f42c1",
                grey: "#6c757d",
            };
            const configPolar = {
                data: {
                    datasets: [
                        {
                            data: [
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                                randomScalingFactor(),
                            ],
                            backgroundColor: [
                                color(chartColors.red).alpha(0.5).rgbString(),
                                color(chartColors.orange).alpha(0.5).rgbString(),
                                color(chartColors.yellow).alpha(0.5).rgbString(),
                                color(chartColors.green).alpha(0.5).rgbString(),
                                color(chartColors.blue).alpha(0.5).rgbString(),
                            ],
                            label: "My dataset", // for legend
                        },
                    ],
                    labels: ["Red", "Orange", "Yellow", "Green", "Blue"],
                },
                options: {
                    responsive: true,
                    legend: {
                        position: "right",
                    },
                    title: {
                        display: false,
                        text: "Chart.js Polar Area Chart",
                    },
                    scale: {
                        ticks: {
                            beginAtZero: true,
                        },
                        reverse: false,
                    },
                    animation: {
                        animateRotate: false,
                        animateScale: true,
                    },
                },
            };
        }).catch((err) => {

        })
    })
</script>
@endsection
