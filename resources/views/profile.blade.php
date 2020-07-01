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
                                        <span class="user-photo-action" id="myBtn">Click here to reupload</span>
                                    </a>
                                </div><!-- /.user-photo -->
                            </div><!-- /.widget -->

                            <!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="background-white p20 mb30">
    <form action="" method="post">
        @csrf
        <h3 class="page-title">
            Uploda Your Profile Photo
        </h3>

        <input type="file" class="form-control" name="image">
        <br>
        <input type="submit" class="btn btn-primary btn-xs pull-right" name="submit" value="Upload">
    </form>
    </div>
  </div>

</div>


                            <div class="widget">
                                <ul class="menu-advanced">
                                    <li><a href="{{ url('/status') }}"><i class="fa fa-pencil"></i>Travel Status</a></li>
                                    <li><a href="#"><i class="fa fa-key"></i> Password</a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> 
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
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
                                </h3>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label>Name: {{$userInformation->name}}</label>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        <label>E-mail: {{ $userInformation->email }}</label>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-12">
                                        <label>Phone: {{ $userInformation->phone }}</label>
                                    </div><!-- /.form-group -->
                                </div><!-- /.row -->
                            </div>


                            <div class="background-white p20 mb30">
                                <form action="{{ url('/profile-social-manage',$userInformation->id) }}" method="post">
                                @csrf
                                <h3 class="page-title">
                                    Social Connections
                                    <input type="submit" class="btn btn-primary btn-xs pull-right" name="submit" value="Save">
                                </h3>

                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Facebook</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="facebook" value="@if($userInformation->facebook=='')@else {{ $userInformation->facebook }} @endif">
                                        </div><!-- /.col-* -->

                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Twitter</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="twitter" value="@if($userInformation->twitter=='')@else {{ $userInformation->twitter }} @endif">
                                        </div><!-- /.col-* -->

                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Linkedin</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="linkedin" value="@if($userInformation->linkedin=='')@else {{ $userInformation->linkedin }} @endif">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Instagram</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="instragram" value="@if($userInformation->instragram=='')@else {{ $userInformation->instragram }} @endif">
                                        </div><!-- /.col-* -->
                                    </div><!-- /.form-group -->
                                </div><!-- /.form-inline -->
                                </form>
                            </div><!-- /.background-white -->

                            <div class="background-white p20 mb30">
                                <form action="{{ url('/profile-address-manage',$userInformation->id) }}" method="post">
                                @csrf
                                <h3 class="page-title">
                                    Address

                                    <input type="submit" class="btn btn-primary btn-xs pull-right" value="Save">
                                </h3>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>State</label>
                                        <input type="text" class="form-control" name="state" value="@if($userInformation->state=='')@else {{ $userInformation->state }} @endif">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city" value="@if($userInformation->city=='')@else {{ $userInformation->city }} @endif">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-6">
                                        <label>Street</label>
                                        <input type="text" class="form-control" name="street" value="@if($userInformation->street=='')@else {{ $userInformation->street }} @endif">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-3">
                                        <label>House Number</label>
                                        <input type="text" class="form-control" name="house" value="@if($userInformation->house=='')@else {{ $userInformation->house }} @endif">
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-sm-3">
                                        <label>ZIP</label>
                                        <input type="text" class="form-control" name="zip" value="@if($userInformation->zip=='')@else {{ $userInformation->zip }} @endif">
                                    </div><!-- /.form-group -->
                                </div><!-- /.row -->
                                </form>
                            </div>

                            <div class="background-white p20 mb30">
                            <form action="{{ url('/profile-bio-manage',$userInformation->id) }}" method="post">
                                @csrf
                                <h3 class="page-title">
                                    Biography

                                    <input type="submit" class="btn btn-primary btn-xs pull-right" name="submit" value="Save">
                                </h3>

                                <textarea class="form-control" rows="7" name="bio">@if($userInformation->bio=='')@else {{ $userInformation->bio }} @endif</textarea>
                            </form>
                            </div>

                        </div><!-- /.content -->
                    </div><!-- /.col-* -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->



@endsection