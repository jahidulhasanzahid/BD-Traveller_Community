@extends('layouts.app')

@section('content')

<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="content">
                        <div class="page-title">
                            <h1>Your Search Travel Experience</h1>
                        </div><!-- /.page-title -->

                        <div class="posts">
                            @foreach($searchResult as $showInfo)

                            <div class="post">
                                <div class="post-image">
                                    <img src="{{asset('images/status/'.$showInfo->status_image)}}" alt="Where No Fan Has Gone Before">
                                    <a class="read-more" href="{{ url('/experience-details',$showInfo->title) }}">View</a>
                                </div><!-- /.post-image -->

                                <div class="post-content">
                                    <h2><a href="{{ url('/experience-details',$showInfo->title) }}">{{ $showInfo->title }}<a></h2>
                                    <p>
                                        <p class='drop-cap'>{{ $showInfo->description }}</p>
                                </div><!-- /.post-content -->

                                <div class="post-meta clearfix">
                                    <div class="post-meta-date">{{ $showInfo->created_at }}</div><!-- /.post-meta-date -->
                                    <div class="post-meta-categories"><i class="fa fa-tags"></i> <a href="">{{ $showInfo->location }}</a></div><!-- /.post-meta-categories -->
                                    <div class="post-meta-more"><a href="{{ url('/experience-details') }}">Read More <i class="fa fa-chevron-right"></i></a></div><!-- /.post-meta-more -->
                                </div><!-- /.post-meta -->
                            </div><!-- /.post -->

                            @endforeach
                        </div><!-- /.posts -->
                        <div class="pager">
                            <ul>
                                <li>{{ $searchResult->links() }}</li>
                            </ul>
                        </div><!-- /.pagination -->
                    </div><!-- /.content -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->

@endsection