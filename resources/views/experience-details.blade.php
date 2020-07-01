
@extends('layouts.app')
@section('content')


    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    <div class="page-title">
                        <h1>{{$singleStatus->title}} Details</h1>
                       
                    </div><!-- /.page-title -->
                        <div class="posts post-detail">
                            <div class="post-content">
                            <img class='post-content-image pull-right' src="{{asset('images/status/'.$singleStatus->image)}}">
                            <h3>{{$singleStatus->title}}</h3>
                            <p>{{$singleStatus->description}}
                            </p>
                            </div><!-- /.post-content -->

                            <div class="post-meta-tags clearfix">
                                Location: 
                                <ul>
                                    <li class="tag"><a href="#">{{$singleStatus->country}}</a></li>
                                </ul>
                            </div><!-- /.post-meta -->
                        </div><!-- /.post -->
                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

@endsection