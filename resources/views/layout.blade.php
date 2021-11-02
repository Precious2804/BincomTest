<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{env('APP_NAME')}}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{URL::asset('assets/img/favicon.ico')}}" />
</head>

<body>

    @yield('content')


    <script src="{{URL::asset('assets/js/app.min.js')}}"></script>
    <script src="{{URL::asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/page/advance-table.js')}}"></script>
    <script src="{{URL::asset('assets/js/scripts.js')}}"></script>
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>
</body>

</html>