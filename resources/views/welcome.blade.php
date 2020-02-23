@extends('layouts.app')

@section('content')

<div class="main">
    <div class="">
        <div class="content">
            <div class="container">
                <div class="block background-white background-transparent-image fullwidth">
                    <div class="page-header">
                        <h1>Travell Experience</h1>
                    </div><!-- /.page-header -->
                    <div class="cards-wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">

                                    @foreach($statusShow as $singlePostShow)
                                    <div class="col-sm-4">
                                        <div class="card" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-4.jpg')}}">
                                            <div class="card-label">
                                                <a href="">{{ $singlePostShow->name }}</a>
                                            </div><!-- /.card-label -->

                                            <div class="card-content">
                                                <h2><a href="{{ url('/experience-details',$singlePostShow->title) }}">{{ $singlePostShow->title }}</a></h2>

                                                <div class="card-meta">
                                                    <i class="fa fa-map-o"></i>{{ $singlePostShow->location }}
                                                </div><!-- /.card-meta -->

                                                <div class="card-actions">
                                                    <a href="{{ url('/experience-details',$singlePostShow->title) }}" class="fa fa-search"></a>
                                                </div>
                                            </div><!-- /.card-content -->
                                        </div><!-- /.card -->
                                    </div>
                                    @endforeach
                                    
                                </div><!-- /.row -->
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->
                    </div><!-- /.cards-wrapper -->
                </div>

                <div class="block background-white background-transparent-image fullwidth">
                    <div class="page-header">
                        <h1>Recent Travel Experience</h1>
                    </div><!-- /.page-header -->
                    <div class="cards-row">
                        @foreach($statusShow as $singleStatusShow)
                        <div class="card-row">
                            <div class="card-row-inner">
                                <div class="card-row-image" data-background-image="{{asset('bdtravellbangladesh/assets/img/tmp/product-1.jpg')}}">
                                    <div class="card-row-label"><a href="">{{ $singleStatusShow->name }}</a></div><!-- /.card-row-label -->
                                </div><!-- /.card-row-image -->

                                <div class="card-row-body">
                                    <h2 class="card-row-title"><a href="{{ url('/experience-details',$singlePostShow->title) }}">{{ $singleStatusShow->title }}</a></h2>
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
        </div><!-- /.content -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@endsection