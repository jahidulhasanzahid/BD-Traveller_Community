
@extends('layouts.app')
@section('content')
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <div class="page-title">
                        <h1>Update Travell Experience.</h1>
                        </div>
                        <div class="background-white p30 mb30">
                        <form action="{{ url('/status-update',$statusUpdate->id) }}" method="post">
                            @csrf
                            <h3 class="page-title">Description</h3>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Title" name="title" value="{{ $statusUpdate->title }}">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select class="form-control" name="location">
                                    <option value="{{$statusUpdate->location}}" selected>{{$statusUpdate->location}}</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Dhaka">Dhaka</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Travel Description" rows="8" name="description">{{ $statusUpdate->description }}</textarea>
                            </div><!-- /.form-group --> 
                            <div class="left">
                                <input type="submit" name="submit" class="btn btn-primary btn-xl" value="Update">
                            </div><!-- /.center -->
                        </form>
                        </div><!-- /.box -->
                    </div><!-- /.content -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-inner -->
</div><!-- /.main -->
@endsection