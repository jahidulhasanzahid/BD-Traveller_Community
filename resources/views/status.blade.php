
@extends('layouts.app')
@section('content')
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <div class="page-title">
                        <h1>Share Travell Experience.</h1>
                        </div>
                        <div class="background-white p30 mb30">
                        <form action="{{ url('/status-post') }}" method="post">
                            @csrf
                            <h3 class="page-title">Description</h3>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" name="title">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select class="form-control" title="Select Location" name="location">
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Dhaka">Dhaka</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Travel Description" rows="8" name="description"></textarea>
                            </div><!-- /.form-group --> 
                            <div class="form-group">       
                                <input type="file" id="input-file" name="image" multiple="">
                            </div>
                            <div class="left">
                                <input type="submit" name="submit" class="btn btn-primary btn-xl" value="Post">
                            </div><!-- /.center -->
                        </form>
                        </div><!-- /.box -->


                        <hr>

                        @foreach($statusShow as $status)

                        <div class="posts">
                            <div class="post">
                                <div class="post-image">
                                    <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-11.jpg')}}" alt="A Clockwork Origin">
                                    <a class="read-more" href="blog-detail-right-sidebar.html">View</a>
                                </div><!-- /.post-image -->
                                <div class="post-content">
                                    <h2><a href="blog-detail.html">{{ $status->title }}<a></h2>
                                    <p>{{ $status->description }}</p>
                                </div><!-- /.post-content -->
                                <div class="post-meta clearfix">
                                    <div class="post-meta-author">By <a href="blog-detail.html">Eric Yorick</a></div><!-- /.post-meta-author -->
                                    <div class="post-meta-date">{{ $status->created_at }}</div><!-- /.post-meta-date -->
                                    <div class="post-meta-categories"><i class="fa fa-tags"></i> <a href="blog-detail.html">{{ $status->location }}</a></div><!-- /.post-meta-categories -->
                                    <div class="post-meta-comments"><i class="fa fa-pen"></i> <a href="{{ url('/status-edit',$status->id) }}">Edit</a> <span>//</span>
                                    <a href="{{url('/status-delete',$status->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                        {{ __('Delete') }}
                                    </a>
                                    <form id="delete-form" action="{{url('/status-delete',$status->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                    </div><!-- /.post-meta-comments -->
                                    <div class="post-meta-more"><a href="{{ url('/experience-details') }}">Read More <i class="fa fa-chevron-right"></i></a></div><!-- /.post-meta-more -->
                                </div><!-- /.post-meta -->
                            </div><!-- /.post -->
                            </div><!-- /.posts -->
                            <br>
                            <br>
                            @endforeach
                    </div><!-- /.content -->
                    {{ $statusShow->links() }}
                </div><!-- /.col-* -->
                <div class="col-sm-4 col-lg-3">
                    <div class="sidebar">
                        <div class="widget">
                        <h2 class="widgettitle">Recent Listings</h2>
                        <div class="cards-small">
                            <div class="card-small">
                                <div class="card-small-image">
                                    <a href="listing-detail.html">
                                        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-2.jpg')}}" alt="Tasty Brazil Coffee">
                                    </a>
                                </div><!-- /.card-small-image -->
                                <div class="card-small-content">
                                    <h3><a href="listing-detail.html">Tasty Brazil Coffee</a></h3>
                                    <h4><a href="listing-detail.html">New York / Village</a></h4>
                                    <div class="card-small-price">$180 / person</div>
                                </div><!-- /.card-small-content -->
                            </div><!-- /.card-small -->
                        </div><!-- /.cards-small -->
                        <div class="cards-small">
                            <div class="card-small">
                                <div class="card-small-image">
                                    <a href="listing-detail.html">
                                        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-3.jpg')}}" alt="Healthy Breakfast">
                                    </a>
                                </div><!-- /.card-small-image -->
                                <div class="card-small-content">
                                    <h3><a href="listing-detail.html">Healthy Breakfast</a></h3>
                                    <h4><a href="listing-detail.html">New York / Village</a></h4>
                                    <div class="card-small-price">$180 / person</div>
                                </div><!-- /.card-small-content -->
                            </div><!-- /.card-small -->
                        </div><!-- /.cards-small -->
                        <div class="cards-small">
                            <div class="card-small">
                                <div class="card-small-image">
                                    <a href="listing-detail.html">
                                        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/product-4.jpg')}}" alt="Coffee &amp; Newspaper">
                                    </a>
                                </div><!-- /.card-small-image -->
                                <div class="card-small-content">
                                    <h3><a href="listing-detail.html">Coffee &amp; Newspaper</a></h3>
                                    <h4><a href="listing-detail.html">New York / Village</a></h4>

                                    <div class="card-small-price">$180 / person</div>
                                </div><!-- /.card-small-content -->
                            </div><!-- /.card-small -->
                        </div><!-- /.cards-small -->
                        </div><!-- /.widget -->
                        <div class="widget">
                            <h2 class="widgettitle">Filter</h2>
                            <div class="background-white p20">
                                <form method="post" action="http://preview.byaviators.com/template/superlist/listing-submit.html?">
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
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
@endsection