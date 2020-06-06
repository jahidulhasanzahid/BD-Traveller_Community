
@extends('layouts.app')
@section('content')
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="content">
                        <div class="page-title">
                        <h2>Share Travell Experience.</h2>
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
                                    <h2><a href="{{ url('/experience-details') }}">{{ $status->title }}<a></h2>
                                    <p style="text-align: justify;">{{ $status->description }}</p>
                                </div><!-- /.post-content -->
                                <div class="post-meta clearfix">
                                    <div class="post-meta-author">By <a href="blog-detail.html">Eric Yorick</a></div><!-- /.post-meta-author -->
                                    <div class="post-meta-date">{{ $status->created_at }}</div><!-- /.post-meta-date -->
                                    <div class="post-meta-categories"><i class="fa fa-tags"></i> <a href="">{{ $status->location }}</a></div><!-- /.post-meta-categories -->
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
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
@endsection