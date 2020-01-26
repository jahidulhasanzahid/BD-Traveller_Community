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
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
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

                        <li class="active">
                            <a href="#">Places<i class="fa fa-chevron-down"></i></a>

                            <ul class="sub-menu">
                                <li><a href="{{url('/travel')}}">Most View</a></li>
                                <li><a href="{{url('/travel')}}">Travellers Choose</a></li>
                                <li><a href="{{url('/travel')}}">Tranding</a></li>
                            </ul>
                        </li>

                        <li class="active">
                            <a href="{{ url('traveller-list') }}">Traveller List</a>
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