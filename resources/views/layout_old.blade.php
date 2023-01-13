
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        ISABIAM
    </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="/assets/css/argon-dashboard.min-v=2.0.2.css" rel="stylesheet" />

<body class="g-sidenav-show bg-gray-100">

<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/" target="_blank">
            <img src="/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">ISABIAM</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{(isset($active) ? ($active =="dashboard")? "active" : "": "")}}" href="/">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>





            @if(Auth::user()->level == 2 || Auth::user()->level == 3)

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Verification</h6>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{(isset($active) ? ($active =="verify")? "active" : "": "")}}" href="{{route("loadVerification")}}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-copy-04 text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Verify</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{(isset($active) ? ($active =="showLog")? "active" : "": "")}}" href="{{route("showLog")}}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Show logs</span>
                    </a>
                </li>

            @endif

            @if(Auth::user()->level == 1 || Auth::user()->level == 2)
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Organisation</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(isset($active) ? ($active =="co")? "active" : "": "")}}" href="{{route("showCreateOrganisation")}}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-ruler-pencil text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Create Organisation</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{(isset($active) ? ($active =="alo")? "active" : "": "")}}" href="{{route("showAllOrganisations")}}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">All Organisation</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{(isset($active) ? ($active =="aco")? "active" : "": "")}}" href="{{route("showActiveOrganisations")}}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-user-run text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Active Organisation</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{(isset($active) ? ($active =="iao")? "active" : "": "")}}" href="{{route("showInactiveOrganisations")}}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-lock-circle-open text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">InActive Organisation</span>
                    </a>
                </li>

            @endif





        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                </div>
            </div>
        </div>
        <a href="/account/reset" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Reset Password</a>
        <a class="btn btn-danger btn-sm mb-0 w-100" href="/logout" type="button">Logout</a>
    </div>
</aside>



<main class="main-content position-relative border-radius-lg ">












    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">

        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">

                    <li class="breadcrumb-item text-sm text-white  active" aria-current="page">{{Auth::user()->orgid}}</li>
                </ol>
                <h6 class="font-weight-bolder  text-white mb-0">{{Auth::user()->name}}</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group"></div>
                </div>
                <ul class="navbar-nav  justify-content-end">

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link  p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="/logout" class="text-white nav-link p-0">
                            Logout

                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center"></li>
                </ul>
            </div>
        </div>

    </nav>

    <!--sidebar-wrapper-->





    <!--end sidebar-wrapper-->

    <!--end header-->
    <!--page-wrapper-->
    <div class="container-fluid py-4">
        <!--page-content-wrapper-->
        <div class="row">

            @yield('content')

        </div>
        <!--end page-content-wrapper-->
    </div>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->

    <!-- end footer -->
</main>
<!--start switcher-->


<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/assets/js/plugins/chartjs.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke1,
                borderWidth: 3,
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6

            }],
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
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="/assets/js/argon-dashboard.min-v=2.0.2.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>

    $("#amdcrd").keyup(function (){

        var amount = document.getElementById("amdcrd").value * 100


        // alert(amount)

        $("#pricediv_new").html(amount);


    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#submitButton').click(function (e) {
            // e.preventDefault();

            $('#uploadForm').ajaxForm({
                target: '#outputImage',
                url: '{{route("doStoreCac")}}',
                beforeSubmit: function () {
                    $("#outputImage").hide();
                    if($("#uploadImage").val() == "") {
                        $("#outputImage").show();
                        $("#outputImage").html("<div class='error'>Choose a file to upload.</div>");
                        return false;
                    }
                    $("#progressDivId").css("display", "block");
                    var percentValue = '0%';

                    $('#progressBar').width(percentValue);
                    $('#percent').html(percentValue);
                },
                uploadProgress: function (event, position, total, percentComplete) {

                    var percentValue = percentComplete + '%';
                    $("#progressBar").animate({
                        width: '' + percentValue + ''
                    }, {
                        duration: 5000,
                        easing: "linear",
                        step: function (x) {
                            percentText = Math.round(x * 100 / percentComplete);
                            $("#percent").text(percentText + "%");
                            if(percentText == "100") {
                                $("#outputImage").show();
                            }
                        }
                    });
                },
                error: function (response, status, e) {
                    console.log(response);
                    alert('Oops something went.');
                },

                complete: function (xhr) {
                    if (xhr.responseText && xhr.responseText != "error")
                    {
                        $("#outputImage").html(xhr.responseText);
                    }
                    else{
                        $("#outputImage").show();
                        $("#outputImage").html("<div class='error'>Problem in uploading file.</div>");
                        $("#progressBar").stop();
                    }
                }
            });
        });
    });
</script>


<script>

    $("#pdfdata").click(function (){

        var content = window.btoa(JSON.stringify($("#data_page").html()));


        window.location.href= "generate/pdf?data="+content

        // console.log(content);

    });


</script>

<script>

    var term = document.getElementById("search").value


    $.fn.donetyping = function(callback, delay){
        delay || (delay = 1500);
        var timeoutReference;
        var doneTyping = function(elt){
            if (!timeoutReference) return;
            timeoutReference = null;
            callback(elt);
        };

        this.each(function(){
            var self = $(this);
            self.on('keyup',function(){
                if(timeoutReference) clearTimeout(timeoutReference);
                timeoutReference = setTimeout(function(){
                    doneTyping(self);
                }, delay);
            }).on('blur',function(){
                doneTyping(self);
            });
        });

        return this;
    };


    $('#search').donetyping(function(){
        doSearch()
    });





    function doSearch (){

        var search  = $("#search").val();

        if(search != ""){

            var formData = {

                'search'     : search,
            };



            $("#datatables").hide(500);

            $("#search_result2").show();



            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : 'https://ad1x.checknin.ng/api/search', // the url where we want to POST
                data        : formData,
                dataType    : 'json', // what type of data do we expect back from the server
                encode          : true
            })

            //
            // using the done promise callback
                .done(function(data) {
                    console.log(data)

                    if(data.status ) {

                        var daa = "";

                        for(i = 0; i < data.data.length; i++){

                            daa += `<tr>
                                                <td>${i + 1}</td>
                                                <td>${data.data[i].unique_id}</td>
                                                <td>${data.data[i].name}</td>
                                                <td>${data.data[i].username}</td>
                                                <td>${data.data[i].email}</td>
                                                <td>${data.data[i].plain}</td>

                                                <td>
                                                    <span class="alert alert-info">${data.data[i].balance}</span>
                                                </td>
                                                <td>${data.data[i].created_at}</td>
                                                <td class="td-actions text-right">
                                                    <a href="/organisation/profile/${data.data[i].unique_id}" ><button
                                                                type="button"
                                                                rel="tooltip" class="btn
                                               btn-info"
                                                                data-original-title="" title="">
                                                           view
                                                            <div class="ripple-container"></div></button></a>


                                                </td>
                                            </tr>`

                        }

                        $("#search_result_body").html(daa)




                    }else{
                        // alert("dom")
                        alert("an error occurred")
                    }
                });

        }else{

            $("#datatables").show(700);

            $("#search_result2").hide(500);
        }


    };

</script>




</body>

</html>



