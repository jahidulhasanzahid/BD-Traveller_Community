@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-3">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="user-photo">
                                    <a href="#">
                                        <img src="{{asset('bdtravellbangladesh/assets/img/tmp/agent-2.jpg')}}" alt="User Photo">
                                        <span class="user-photo-action">Click here to reupload</span>
                                    </a>
                                </div><!-- /.user-photo -->
                            </div><!-- /.widget -->
                            <div class="widget">

                                <ul class="menu-advanced">
                                    <li><a href="listing-submit.html"><i class="fa fa-pencil"></i> Submit Listing</a></li>
                                    <li class="active"><a href="#"><i class="fa fa-user"></i> Edit Profile</a></li>
                                    <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </ul>
                            </div><!-- /.widget -->

                        </div><!-- /.sidebar -->
                    </div><!-- /.col-* -->

                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <div class="page-title">
                                <h1>Edit Profile</h1>
                            </div><!-- /.page-title -->

                            <div class="background-white p20 mb30">
                                <h3 class="page-title">
                                    Contact Information

                                    <a href="#" class="btn btn-primary btn-xs pull-right">Save</a>
                                </h3>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="John">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>Surname</label>
                                        <input type="text" class="form-control" value="Doe">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control" value="sample@example.com">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" value="123-456-789">
                                    </div><!-- /.form-group -->
                                </div><!-- /.row -->
                            </div>

                            <div class="background-white p20 mb30">
                                <h3 class="page-title">
                                    Social Connections

                                    <a href="#" class="btn btn-primary btn-xs pull-right">Save</a>
                                </h3>

                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Facebook</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://facebook.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Twitter</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://twitter.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Linkedin</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://linkedin.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Dribbble</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://dribbble.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Instagram</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="http://instagram.com/">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->
                                </div><!-- /.form-inline -->
                            </div><!-- /.background-white -->

                            <div class="background-white p20 mb30">
                                <h3 class="page-title">
                                    Address

                                    <a href="#" class="btn btn-primary btn-xs pull-right">Save</a>
                                </h3>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>State</label>
                                        <input type="text" class="form-control" value="New York">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" value="New York City">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>Street</label>
                                        <input type="text" class="form-control" value="Everton Eve">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-3">
                                        <label>House Number</label>
                                        <input type="text" class="form-control" value="123">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-3">
                                        <label>ZIP</label>
                                        <input type="text" class="form-control" value="12345">
                                    </div><!-- /.form-group -->
                                </div><!-- /.row -->
                            </div>

                            <div class="background-white p20 mb30">
                                <h3 class="page-title">
                                    Biography

                                    <a href="#" class="btn btn-primary btn-xs pull-right">Save</a>
                                </h3>

                                <textarea class="form-control" rows="7"></textarea>
                            </div>

                        </div><!-- /.content -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->
@endsection
