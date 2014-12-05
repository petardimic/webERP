{{-- This comment will not be in the rendered HTML --}}
{{-- Site header here --}}


<header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">

            <a href="#" class="logo">
                <img src="/assets/images/affosoft_logo.png" alt="">
            </a>

        </div>
        <!--logo end-->

        @if (Auth::check())
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li> -->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="/assets/images/default-profile-pic-small.png">
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="{{ URL::route('getProfile', array(Auth::user()->id)) }}"><i class="fa fa-cog"></i> Profile</a></li>
                            <li><a href="{{ URL::route('signout') }}"><i class="fa fa-key"></i> Sign Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        @endif
    </header>
