

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets2/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>
       New Nin
    </title>




    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="/assets2/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets2/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets2/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="/assets2/css/soft-ui-dashboard.min-v=1.0.8.css" rel="stylesheet" />

    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script>
        (function(a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function() {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function() {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
            'GTM-K9BGS8K': true
        });
    </script>



</head>

<body class="bg-theme bg-theme1">
  @yield('content')
</body>



<script src="/assets2/js/core/popper.min.js"></script>
<script src="/assets2/js/core/bootstrap.min.js"></script>
<script src="/assets2/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets2/js/plugins/smooth-scrollbar.min.js"></script>

<script src="/assets2/js/plugins/dragula/dragula.min.js"></script>
<script src="/assets2/js/plugins/jkanban/jkanban.js"></script>
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

<script src="/assets2/js/soft-ui-dashboard.min-v=1.0.8.js"></script>

</html>

