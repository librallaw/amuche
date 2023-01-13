
<?php
/**
 * Created by PhpStorm.
 * User: imm
 * Date: 28/10/2019
 * Time: 18:45
 */
?>

@extends('layout')
@section('title','Dashboard')
@section("top_button")
    <div class="col-md-4 col-lg-4">
        <div class="widgetbar">
            <a href="{{route('showCreateOrganisation')}}"><button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Create User</button></a>
        </div>
    </div>
@endsection
@section('content')
@section('page','Dashboard')



<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-success-inverse mr-0"><i class="fa fa-money"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">Wallet Balance</h5>
                            <h4 class="mb-0">{{$balance}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-info-inverse mr-0"><i class="feather icon-user"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">Total Users</h5>
                            <h4 class="mb-0">{{$total}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-warning-inverse mr-0"><i class="feather icon-user"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">Active Users</h5>
                            <h4 class="mb-0">{{$active}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <span class="action-icon badge badge-danger-inverse mr-0"><i class="feather icon-user"></i></span>
                        </div>
                        <div class="col-7 text-right">
                            <h5 class="card-title font-14">InActive Users</h5>
                            <h4 class="mb-0">{{$inactive}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header text-center">
                    <h5 class="card-title mb-0">Verifications Stats</h5>
                </div>
                <div class="card-body p-0">
                    <div id="apex-circle-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-12 col-xl-8">
            <div class="card m-b-30 dash-widget">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <h5 class="card-title mb-0">Recent Users</h5>
                        </div>
                        <div class="col-7">
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="table-responsive">

                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th class="">S / N</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Org id</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Balance</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created at</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions </th>
                            </tr>
                            </thead>
                            <tbody>

                            @php $x = 1 @endphp

                            @foreach($organisation as $member)
                                <tr>
                                    <td>
                                        {{$x++}}
                                    </td>
                                    <td>
                                        {{$member->unique_id}}
                                    </td>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                            </div>
                                            <h6>{{$member->name}}</h6>
                                        </div>
                                    </td>

                                    <td>
                                        {{$member->email}}
                                    </td>

                                    <td>
                                        {{$member->phone}}
                                    </td>

                                    <td>
                                        <strong class="">{{$member->balance}}</strong>
                                    </td>
                                    <td>
                                        {{$member->created_at}}
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{route("showOrganisationProfile",['orgid'=>$member->unique_id])}}" ><button
                                                    type="button"
                                                    rel="tooltip" class="btn
                                               btn-info"
                                                    data-original-title="" title="">
                                                <i class="fa fa-eye"></i>
                                                <div class="ripple-container">View</div></button></a>


                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <!-- End row -->
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>


@section("extra_script")

    <script>
        /*
-------------------------------------------
    : Custom - Dashboard Hospital js :
-------------------------------------------
*/
        "use strict";
        $(document).ready(function() {
            /* -- Apex Timeseries Chart -- */
            var options = {
                series: [{
                    name: 'ATC',
                    data: [
                        [1327359600000,30.95],
                        [1327446000000,31.34],
                        [1327532400000,31.18],
                        [1327618800000,31.05],
                        [1327878000000,31.00],
                        [1327964400000,30.95],
                        [1328050800000,31.24],
                        [1328137200000,31.29],
                        [1328223600000,31.85],
                        [1328482800000,31.86],
                        [1328569200000,32.28],
                        [1328655600000,32.10],
                        [1328742000000,32.65],
                        [1328828400000,32.21],
                        [1329087600000,32.35],
                        [1329174000000,32.44],
                        [1329260400000,32.46],
                        [1329346800000,32.86],
                        [1329433200000,32.75],
                        [1329778800000,32.54],
                        [1329865200000,32.33],
                        [1329951600000,32.97],
                        [1330038000000,33.41],
                        [1330297200000,33.27],
                        [1330383600000,33.27],
                        [1330470000000,32.89],
                        [1330556400000,33.10],
                        [1330642800000,33.73],
                        [1330902000000,33.22],
                        [1330988400000,31.99],
                        [1331074800000,32.41],
                        [1331161200000,33.05],
                        [1331247600000,33.64],
                        [1331506800000,33.56],
                        [1331593200000,34.22],
                        [1331679600000,33.77],
                        [1331766000000,34.17],
                        [1331852400000,33.82],
                        [1332111600000,34.51],
                        [1332198000000,33.16],
                        [1332284400000,33.56],
                        [1332370800000,33.71],
                        [1332457200000,33.81],
                        [1332712800000,34.40],
                        [1332799200000,34.63],
                        [1332885600000,34.46],
                        [1332972000000,34.48],
                        [1333058400000,34.31],
                        [1333317600000,34.70],
                        [1333404000000,34.31],
                        [1333490400000,33.46],
                        [1333576800000,33.59],
                        [1333922400000,33.22],
                        [1334008800000,32.61],
                        [1334095200000,33.01],
                        [1334181600000,33.55],
                        [1334268000000,33.18],
                        [1334527200000,32.84],
                        [1334613600000,33.84],
                        [1334700000000,33.39],
                        [1334786400000,32.91],
                        [1334872800000,33.06],
                        [1335132000000,32.62],
                        [1335218400000,32.40],
                        [1335304800000,33.13],
                        [1335391200000,33.26],
                        [1335477600000,33.58],
                        [1335736800000,33.55],
                        [1335823200000,33.77],
                        [1335909600000,33.76],
                        [1335996000000,33.32],
                        [1336082400000,32.61],
                        [1336341600000,32.52],
                        [1336428000000,32.67],
                        [1336514400000,32.52],
                        [1336600800000,31.92],
                        [1336687200000,32.20],
                        [1336946400000,32.23],
                        [1337032800000,32.33],
                        [1337119200000,32.36],
                        [1337205600000,32.01],
                        [1337292000000,31.31],
                        [1337551200000,32.01],
                        [1337637600000,32.01],
                        [1337724000000,32.18],
                        [1337810400000,31.54],
                        [1337896800000,31.60],
                        [1338242400000,32.05],
                        [1338328800000,31.29],
                        [1338415200000,31.05],
                        [1338501600000,29.82],
                        [1338760800000,30.31],
                        [1338847200000,30.70],
                        [1338933600000,31.69],
                        [1339020000000,31.32],
                        [1339106400000,31.65],
                        [1339365600000,31.13],
                        [1339452000000,31.77],
                        [1339538400000,31.79],
                        [1339624800000,31.67],
                        [1339711200000,32.39],
                        [1339970400000,32.63],
                        [1340056800000,32.89],
                        [1340143200000,31.99],
                        [1340229600000,31.23],
                        [1340316000000,31.57],
                        [1340575200000,30.84],
                        [1340661600000,31.07],
                        [1340748000000,31.41],
                        [1340834400000,31.17],
                        [1340920800000,32.37],
                        [1341180000000,32.19],
                        [1341266400000,32.51],
                        [1341439200000,32.53],
                        [1341525600000,31.37],
                        [1341784800000,30.43],
                        [1341871200000,30.44],
                        [1341957600000,30.20],
                        [1342044000000,30.14],
                        [1342130400000,30.65],
                        [1342389600000,30.40],
                        [1342476000000,30.65],
                        [1342562400000,31.43],
                        [1342648800000,31.89],
                        [1342735200000,31.38],
                        [1342994400000,30.64],
                        [1343080800000,30.02],
                        [1343167200000,30.33],
                        [1343253600000,30.95],
                        [1343340000000,31.89],
                        [1343599200000,31.01],
                        [1343685600000,30.88],
                        [1343772000000,30.69],
                        [1343858400000,30.58],
                        [1343944800000,32.02],
                        [1344204000000,32.14],
                        [1344290400000,32.37],
                        [1344376800000,32.51],
                        [1344463200000,32.65],
                        [1344549600000,32.64],
                        [1344808800000,32.27],
                        [1344895200000,32.10],
                        [1344981600000,32.91],
                        [1345068000000,33.65],
                        [1345154400000,33.80],
                        [1345413600000,33.92],
                        [1345500000000,33.75],
                        [1345586400000,33.84],
                        [1345672800000,33.50],
                        [1345759200000,32.26],
                        [1346018400000,32.32],
                        [1346104800000,32.06],
                        [1346191200000,31.96],
                        [1346277600000,31.46],
                        [1346364000000,31.27],
                        [1346709600000,31.43],
                        [1346796000000,32.26],
                        [1346882400000,32.79],
                        [1346968800000,32.46],
                        [1347228000000,32.13],
                        [1347314400000,32.43],
                        [1347400800000,32.42],
                        [1347487200000,32.81],
                        [1347573600000,33.34],
                        [1347832800000,33.41],
                        [1347919200000,32.57],
                        [1348005600000,33.12],
                        [1348092000000,34.53],
                        [1348178400000,33.83],
                        [1348437600000,33.41],
                        [1348524000000,32.90],
                        [1348610400000,32.53],
                        [1348696800000,32.80],
                        [1348783200000,32.44],
                        [1349042400000,32.62],
                        [1349128800000,32.57],
                        [1349215200000,32.60],
                        [1349301600000,32.68],
                        [1349388000000,32.47],
                        [1349647200000,32.23],
                        [1349733600000,31.68],
                        [1349820000000,31.51],
                        [1349906400000,31.78],
                        [1349992800000,31.94],
                        [1350252000000,32.33],
                        [1350338400000,33.24],
                        [1350424800000,33.44],
                        [1350511200000,33.48],
                        [1350597600000,33.24],
                        [1350856800000,33.49],
                        [1350943200000,33.31],
                        [1351029600000,33.36],
                        [1351116000000,33.40],
                        [1351202400000,34.01],
                        [1351638000000,34.02],
                        [1351724400000,34.36],
                        [1351810800000,34.39],
                        [1352070000000,34.24],
                        [1352156400000,34.39],
                        [1352242800000,33.47],
                        [1352329200000,32.98],
                        [1352415600000,32.90],
                        [1352674800000,32.70],
                        [1352761200000,32.54],
                        [1352847600000,32.23],
                        [1352934000000,32.64],
                        [1353020400000,32.65],
                        [1353279600000,32.92],
                        [1353366000000,32.64],
                        [1353452400000,32.84],
                        [1353625200000,33.40],
                        [1353884400000,33.30],
                    ]
                }],
                chart: {
                    type: 'area',
                    stacked: false,
                    height: 285,
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false
                },
                markers: {
                    size: 0,
                },
                title: {
                    show: false
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        inverseColors: false,
                        opacityFrom: 0.5,
                        opacityTo: 0,
                        stops: [0, 90, 100]
                    },
                },
                yaxis: {
                    labels: {
                        formatter: function (val) {
                            return (val / 1000000).toFixed(0);
                        },
                    },
                    title: {
                        show: false
                    },
                },
                xaxis: {
                    type: 'datetime',
                },
                tooltip: {
                    shared: false,
                    y: {
                        formatter: function (val) {
                            return (val / 1000000).toFixed(0)
                        }
                    }
                }
            };



            var chart = new ApexCharts(document.querySelector("#apex-timeseries-chart"), options);
            chart.render();

            /* -- Apex Circle Chart -- */
            var options = {
                series: [{{$total_v}}, {{$success}}, {{$failed}}],
                chart: {
                    height: 390,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        offsetY: 0,
                        startAngle: 0,
                        endAngle: 270,
                        hollow: {
                            margin: 5,
                            size: '30%',
                            background: 'transparent',
                            image: undefined,
                        },
                        dataLabels: {
                            name: {
                                show: false,
                            },
                            value: {
                                show: false,
                            }
                        }
                    }
                },
                colors: ['#0080ff', '#18d26b', '#ff2626'],
                labels: ['Total', 'Success', 'Failed'],
                legend: {
                    show: true,
                    floating: true,
                    fontSize: '16px',
                    position: 'left',
                    offsetX: 0,
                    offsetY: 0,
                    labels: {
                        useSeriesColors: true,
                    },
                    markers: {
                        size: 0
                    },
                    formatter: function(seriesName, opts) {
                        return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
                    },
                    itemMargin: {
                        horizontal: 3,
                    }
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        legend: {
                            show: false
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#apex-circle-chart"), options);
            chart.render();

            /* -- Apex Stacked Chart -- */

        });
    </script>

    @endsection

{{--<script>--}}
    {{--var ctx = document.getElementById('myChart').getContext('2d');--}}
    {{--var myChart = new Chart(ctx, {--}}
        {{--type: 'bar',--}}
        {{--data: {--}}
            {{--labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July','Aug','Sep','Oct','Nov','Dec'],--}}
            {{--datasets: [{--}}
                {{--label: 'Cummulative Monthly Attendance',--}}
                {{--data: [200, 700, 500, 350, 910,1200,400, 900, 600, 1040, 890, 950],--}}
                {{--backgroundColor: [--}}
                    {{--'rgba(255, 99, 132, 0.2)',--}}
                    {{--'rgba(54, 162, 235, 0.2)',--}}
                    {{--'rgba(255, 206, 86, 0.2)',--}}
                    {{--'rgba(75, 192, 192, 0.2)',--}}
                    {{--'rgba(153, 102, 255, 0.2)',--}}
                    {{--'rgba(255, 159, 64, 0.2)',--}}
                    {{--'rgba(255, 99, 132, 0.2)',--}}
                    {{--'rgba(54, 162, 235, 0.2)',--}}
                    {{--'rgba(255, 206, 86, 0.2)',--}}
                    {{--'rgba(75, 192, 192, 0.2)',--}}
                    {{--'rgba(153, 102, 255, 0.2)',--}}
                    {{--'rgba(255, 159, 64, 0.2)'--}}
                {{--],--}}
                {{--borderColor: [--}}
                    {{--'rgba(255, 99, 132, 1)',--}}
                    {{--'rgba(54, 162, 235, 1)',--}}
                    {{--'rgba(255, 206, 86, 1)',--}}
                    {{--'rgba(75, 192, 192, 1)',--}}
                    {{--'rgba(153, 102, 255, 1)',--}}
                    {{--'rgba(255, 159, 64, 1)',--}}
                    {{--'rgba(255, 99, 132, 1)',--}}
                    {{--'rgba(54, 162, 235, 1)',--}}
                    {{--'rgba(255, 206, 86, 1)',--}}
                    {{--'rgba(75, 192, 192, 1)',--}}
                    {{--'rgba(153, 102, 255, 1)',--}}
                    {{--'rgba(255, 159, 64, 1)'--}}
                {{--],--}}
                {{--borderWidth: 1--}}
            {{--}]--}}
        {{--},--}}
        {{--options: {--}}
            {{--scales: {--}}
                {{--yAxes: [{--}}
                    {{--ticks: {--}}
                        {{--beginAtZero: true--}}
                    {{--}--}}
                {{--}]--}}
            {{--}--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}

<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var ctx2 = document.getElementById("chart-line2").getContext("2d");

    // Line chart
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Jan","Feb","Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [
                {
                label: "Manual Top up",
                tension: 0,
                pointRadius: 5,
                pointBackgroundColor: "#e91e63",
                pointBorderColor: "transparent",
                borderColor: "#e91e63",
                borderWidth: 4,
                backgroundColor: "transparent",
                fill: true,
                data: [70,90,110,50, 100, 200, 190, 400, 350, 500, 450, 700],
                maxBarThickness: 6
            },
                {
                    label: "Self Top up",
                    tension: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "#344767",
                    pointBorderColor: "transparent",
                    borderColor: "#344767",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [90,190,210,30, 150, 250, 100, 200, 450, 300, 150, 500],
                    maxBarThickness: 6
                },

            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: '#c1c4ce5c'
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7',
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5],
                        color: '#c1c4ce5c'
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });


    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Jan","Feb","Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Vnin Verifications",
                tension: 0,
                pointRadius: 5,
                pointBackgroundColor: "#e91e63",
                pointBorderColor: "transparent",
                borderColor: "#e91e63",
                borderWidth: 4,
                backgroundColor: "transparent",
                fill: true,
                data: [70,90,110,50, 100, 200, 190, 400, 350, 500, 450, 700],
                maxBarThickness: 6
            },

            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: '#c1c4ce5c'
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#9ca2b7',
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: true,
                        borderDash: [5, 5],
                        color: '#c1c4ce5c'
                    },
                    ticks: {
                        display: true,
                        color: '#9ca2b7',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });


    // Pie chart
</script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'March', 'Aprdil', 'May', 'June','July','Aug','Sep','Oct','Nov','Dec'],
            datasets: [{
                label: 'Cummulative Monthly Attendance',
                data: [{{"45"}}, {{'78'}}, {{'23'}}, {{'67'}}, {{'23'}}, {{'56'}},{{'34'}}, {{'12'}}, {{20}},
                    {{'04'}}, {{'67'}}, {{'02'}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

@endsection