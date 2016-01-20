<!DOCTYPE html>
<html>
    <head>
        <title>Employee Payroll System</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }} ">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="section section--header">
            @include('layouts.navigation')
        </div>
        <div class="section section--content">
            @yield('content')
        </div>
        <div class="section section--footer">

        </div>
    </body>
</html>
