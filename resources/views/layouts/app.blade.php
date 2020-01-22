<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'bdtravellbangladesh') }}</title>
    <link href="http://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{asset('bdtravellbangladesh/assets/libraries/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('bdtravellbangladesh/assets/libraries/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('bdtravellbangladesh/assets/libraries/colorbox/example1/colorbox.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-fileinput/fileinput.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('bdtravellbangladesh/assets/css/superlist.css')}}" rel="stylesheet" type="text/css" >
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('bdtravellbangladesh/assets/favicon.png')}}">


</head>
<body>


<div class="page-wrapper">
    @include('layouts/header')

     @yield('content')


    @include('layouts/footer')
</div>


<script src="{{asset('bdtravellbangladesh/assets/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/js/map.js')}}" type="text/javascript"></script>

<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-sass/javascripts/bootstrap/collapse.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-sass/javascripts/bootstrap/carousel.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-sass/javascripts/bootstrap/transition.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-sass/javascripts/bootstrap/dropdown.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-sass/javascripts/bootstrap/tooltip.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-sass/javascripts/bootstrap/tab.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-sass/javascripts/bootstrap/alert.js')}}" type="text/javascript"></script>

<script src="{{asset('bdtravellbangladesh/assets/libraries/colorbox/jquery.colorbox-min.js')}}" type="text/javascript"></script>

<script src="{{asset('bdtravellbangladesh/assets/libraries/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{asset('bdtravellbangladesh/assets/libraries/flot/jquery.flot.spline.js')}}" type="text/javascript"></script>

<script src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('bdtravellbangladesh/assets/libraries/jquery-google-map/infobox.js')}}"></script>
<script type="text/javascript" src="{{asset('bdtravellbangladesh/assets/libraries/jquery-google-map/markerclusterer.js')}}"></script>
<script type="text/javascript" src="{{asset('bdtravellbangladesh/assets/libraries/jquery-google-map/jquery-google-map.js')}}"></script>

<script type="text/javascript" src="{{asset('bdtravellbangladesh/assets/libraries/owl.carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('bdtravellbangladesh/assets/libraries/bootstrap-fileinput/fileinput.min.js')}}"></script>

<script src="{{asset('bdtravellbangladesh/assets/js/superlist.js')}}" type="text/javascript"></script>

</body>
</html>
