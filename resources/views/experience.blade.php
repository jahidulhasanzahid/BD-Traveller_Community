
@extends('layouts.app')

@section('content')



    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-3">                    
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widgettitle">Filter</h2>
                                <div class="background-white p20">
                                    <form method="post" action="http://preview.byaviators.com/template/superlist/blog-standard-left-sidebar.html?">
                                        <div class="form-group">
                                            <label for="">Keyword</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select class="form-control" title="Select Category">
                                                <option>Automotive</option>
                                                <option>Real Estate</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="">Location</label>
                                            <select class="form-control" title="Select Location">
                                                <option>New York</option>
                                                <option>San Francisco</option>
                                            </select>
                                        </div><!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="">Starting Price</label>
                                            <input type="text" class="form-control" name="" id="">
                                        </div><!-- /.form-group -->
                                        <button class="btn btn-primary btn-block" type="submit">Search</button>
                                    </form>
                                </div>
                            </div><!-- /.widget -->

                            <div class="widget">
                                <h2 class="widgettitle">Categories</h2>
                                <ul class="menu">
                                    <li><a href="#">Automotive</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Nightlife</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Transportation</a></li>
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">Restaurants</a></li>
                                </ul><!-- /.menu -->
                            </div><!-- /.wifget -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
                        <h1>Travel Experience</h1>
                    </div><!-- /.page-title -->

                            <div class="posts">

                                    @foreach($experienceShow as $showInfo)
                                
                                    <div class="post">
                                        <div class="post-image">
                                            <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-2.jpg')}}" alt="Where No Fan Has Gone Before">
                                            <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
                                        </div><!-- /.post-image -->

                                        <div class="post-content">
                                            <h2><a href="blog-detail.html">{{ $showInfo->title }}<a></h2>
                                            <p><p class='drop-cap'>J{{ $showInfo->description }}</p>
                                        </div><!-- /.post-content -->

                                        <div class="post-meta clearfix">
                                            <div class="post-meta-author">By <a href="blog-detail.html">Fiona Wilson</a></div><!-- /.post-meta-author -->
                                            <div class="post-meta-date">{{ $showInfo->created_at }}</div><!-- /.post-meta-date -->
                                            <div class="post-meta-categories"><i class="fa fa-tags"></i> <a href="blog-detail.html">{{ $showInfo->location }}</a></div><!-- /.post-meta-categories -->
                                            <div class="post-meta-comments"><i class="fa fa-comments"></i> <a href="blog-detail.html">3 comments</a></div><!-- /.post-meta-comments -->
                                            <div class="post-meta-more"><a href="{{ url('/experience-details') }}">Read More <i class="fa fa-chevron-right"></i></a></div><!-- /.post-meta-more -->
                                        </div><!-- /.post-meta -->
                                    </div><!-- /.post -->
                                    
                                    @endforeach
                            </div><!-- /.posts -->
                            <div class="pager">
                                <ul>
                                    <li>{{ $experienceShow->links() }}</li>
                                </ul>
                            </div><!-- /.pagination -->
                        </div><!-- /.content -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->


@endsection