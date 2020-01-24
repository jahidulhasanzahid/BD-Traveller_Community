    <header class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{asset('bdtravellbangladesh/assets/img/logo.png')}}" alt="Logo">
                        <span>#bdTravelCcommunity</span>
                    </a>
                </div><!-- /.header-logo -->

                <div class="header-content">
                    <div class="header-top">
                        <div class="header-search">
                            <input type="text" class="form-control" placeholder="Search for...">
                        </div><!-- /.header-search -->

                        <ul class="header-nav-social social-links nav nav-pills">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>

                        <ul class="header-nav-secondary nav nav-pills">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li>
                            <a href="#">{{ Auth::user()->name }} <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                            </ul>
                        </li>
                        @endguest
                    </ul>

                    </div><!-- /.header-top -->

                    <div class="header-bottom">
                        <div class="header-action">
                            <a href="{{ url('/status') }}" class="header-action-inner" title="Add Travel Experience" data-toggle="tooltip" data-placement="bottom">
                                <i class="fa fa-plus"></i>
                            </a><!-- /.header-action-inner -->
                        </div><!-- /.header-action -->

                        <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                        <li class="active">
                            <a href="{{url('/')}}">Home <i class="fa fa-chevron"></i></a>
                        </li>

                        <li class="active">
                            <a href="{{url('/experience')}}">Experience<i class="fa fa-chevron"></i></a>
                        </li>

                        <li>
                            <a href="#">Places<i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                <li><a href="{{url('/travel')}}">Most View</a></li>
                                <li><a href="{{url('/travel')}}">Travellers Choose</a></li>
                                <li><a href="{{url('/travel')}}">Tranding</a></li>
                            </ul>
                        </li>

                        <li class="has-mega-menu ">
                            <a href="#">Pages<i class="fa fa-chevron-down"></i></a>

                            <ul class="mega-menu">
                                <li>
                                    <a href="#">General</a>

                                    <ul>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="invoice.html">Invoice</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="grid.html">Grid System</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">User Account</a>

                                    <ul>
                                        <li><a href="user-profile-edit.html">Profile Edit</a></li>
                                        <li><a href="login.html">Login Form</a></li>
                                        <li><a href="register.html">Register Form</a></li>
                                        <li><a href="change-password.html">Change Password Form</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Miscellaneous</a>

                                    <ul>
                                        <li><a href="sticky-footer.html">Sticky Footer</a></li>
                                        <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                                        <li><a href="error-403.html">403 - Forbidden</a></li>
                                        <li><a href="error-404.html">404 - Not Found</a></li>
                                        <li><a href="error-500.html">500 - Internal Error</a></li>
                                    </ul>
                                </li>

                                <li class="hidden-xs">
                                    <div class="special">
                                        <a href="{{ url('/register') }}">Sign Up Now</a>
                                    </div><!-- /.special-->
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Blog <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                <li><a href="blog-standard-right-sidebar.html">Standard Right Sidebar</a></li>
                                <li><a href="blog-standard-left-sidebar.html">Standard Left Sidebar</a></li>
                                <li><a href="blog-boxed.html">Boxed Style</a></li>
                                <li><a href="blog-condensed.html">Condensed Style</a></li>
                                <li><a href="blog-detail.html">Detail Fullwidth</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Detail Right Sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Detail Left Sidebar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Admin <i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                <li><a href="admin-dashboard.html">Dashboard</a></li>
                                <li><a href="admin-grid.html">Grid System</a></li>
                                <li><a href="admin-tables.html">Tables</a></li>
                                <li><a href="admin-forms.html">Forms</a></li>
                                <li><a href="admin-notifications.html">Notifications</a></li>
                            </ul>
                        </li>
                    </ul>

                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    </div><!-- /.header-bottom -->
                </div><!-- /.header-content -->
            </div><!-- /.header-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-wrapper -->
</header><!-- /.header -->