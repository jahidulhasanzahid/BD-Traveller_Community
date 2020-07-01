@extends('layouts.app')

@section('content')


<div class="main">
    <div class="main-inner">
        <div class="container">
                <div class="block background-white background-transparent-image fullwidth">
                        <div class="invoice-header clearfix">
                            <div class="invoice-logo">
                                <i class="fa fa-rocket"></i> {{ $traveler->name }} Profile
                            </div><!-- /.invoice-logo -->
                        </div><!-- /.invoice-header -->

                        <div class="">
                            <p>Full Name: {{ $traveler->name }}</p>
                            <p>Email Address: {{ $traveler->email }}</p>
                            <p>Phone Number: {{ $traveler->phone }}</p>
                            <p>Total Point: {{ $traveler->point }}</p>
                        </div>
                    <div class="page-header">
                        <h1>{{  $traveler->name }}'s Travel Experience</h1>
                    </div><!-- /.page-header -->
                    <div class="cards-row">

                        @foreach($statusShows as $singleStatusShow)
                        <div class="card-row">
                            <div class="card-row-inner">
                                <div class="card-row-image" data-background-image="{{asset('images/status/'.$singleStatusShow->status_image)}}">
                                </div><!-- /.card-row-image -->

                                <div class="card-row-body">
                                    <h2 class="card-row-title">{{ $singleStatusShow->title }}</h2>
                                    <div class="card-row-content">
                                        <p>{{ $singleStatusShow->description }}</p>
                                    </div><!-- /.card-row-content -->
                                </div><!-- /.card-row-body -->

                                <div class="card-row-properties">
                                    <dl>
                                        <dd>Location</dd>
                                        <dt>{{ $singleStatusShow->location }}</dt>
                                    </dl>
                                </div><!-- /.card-row-properties -->
                            </div><!-- /.card-row-inner -->
                        </div><!-- /.card-row -->
                        @endforeach
                    </div><!-- /.cards-row -->
                </div>
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@endsection